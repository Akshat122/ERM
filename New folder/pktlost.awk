BEGIN{
	sentpkt1=0;
	droppkt1=0;
	sentpkt2=0;
	droppkt2=0;
	udpp=0;
	tcpp=0;
	
}
{
event = $1;
time = $2;
from = $3;
to = $4;
type = $5;
size = $6;
flowid = $8;
src = $9;
dest = $10;
seq = $11;
pid = $12;
if(from==0 && to==2 && event=="+")
	sentpkt1++;
if(flowid==1 && event=="d")
	droppkt1++;
	
if(from==1 && to==2 && event=="+")
	sentpkt2++;
if(flowid==2 && event=="d")
	droppkt2++;
}
END{
udpp=((sentpkt1-droppkt1)/time);
tcpp=((sentpkt2-droppkt2)/time);
printf("For UDP/CBR. \n ");
printf("Sent packets = %d Drop packets = %d \n ",sentpkt1,droppkt1);

printf("For TCP/FTP. \n ");
printf("Sent packets = %d Drop packets = %d \n ",sentpkt2,droppkt2);
printf("PDR(UDP)-%d  PDR(TCp)-%d \n",udpp,tcpp);
}
