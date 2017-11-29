set ns [ new Simulator ]
$ns color 1 Red
$ns color 2 Blue
set f [open out.tr w]
$ns trace-all $f
set nf [ open out.nam w ]
$ns namtrace-all $nf

proc finish {} {
global nf f ns
$ns flush-trace
close $f
close $nf
exec nam out.nam &
exit 0
}


set n1 [ $ns node ]
set n2 [ $ns node ]
set n3 [ $ns node ]
set n4 [ $ns node ]
set n5 [ $ns node ]
set n6 [ $ns node ]

 
$ns duplex-link $n1 $n3 1Mb 10ms DropTail 
$ns duplex-link $n2 $n3 1Mb 10ms DropTail 
$ns duplex-link $n3 $n4 1Mb 10ms DropTail 
$ns duplex-link $n4 $n5 1Mb 10ms DropTail 
$ns duplex-link $n4 $n6 1Mb 10ms DropTail 

$ns queue-limit $n3 $n4 10

set udp0 [ new Agent/UDP ]
$ns attach-agent $n1 $udp0
set null0 [ new Agent/Null ]
$ns attach-agent $n5 $null0
$ns connect $udp0 $null0
$udp0 set fid_ 1

set cbr0 [ new Application/Traffic/CBR ]
$cbr0 set packetSize_ 500
$cbr0 set interval_ 0.005
$cbr0 attach-agent $udp0

$ns at 1.0 "$cbr0 start"
$ns at 4.0 "$cbr0 stop"

set tcp0 [ new Agent/TCP ]
$ns attach-agent $n2 $tcp0
set sink0 [ new Agent/TCPSink ]
$ns attach-agent $n6 $sink0
$ns connect $tcp0 $sink0
$tcp0 set fid_ 2

set ftp0 [ new Application/FTP ]
$ftp0 attach-agent $tcp0

set cbr0 [ new Application/Traffic/CBR ]
$cbr0 set packetSize_ 500
$cbr0 set interval_ 0.005
$cbr0 attach-agent $tcp0

$ns at 2.0 "$cbr0 start"
$ns at 3.0 "$cbr0 stop"
$ns at 4.0 "finish"



$ns run


