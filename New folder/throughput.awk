BEGIN {
sim_time=0;
thr=0;
total=0;
start =0;
}
{
    event=$1;
    time=$2;
    from=$3;
    to=$4;
    type=$5
    size=$6;
    flowid=$8
    src=$9;
    dest=$10;
    seq=$11;
    pid=$12;

        if((event=="r" && dest==3 && to==3 && flowid==1)){
        total=total+size;
        sim_time=time;
                }
if(event == "+" && from == 1 && pid == 0)
	start = time;
}

END {

thr=(total*8)/((sim_time-start)*1000000);
printf("throughput of ftp system is = %f ",thr);
}
