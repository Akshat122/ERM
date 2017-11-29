#include<stdio.h>

void main()
{
int a[10],b[5],n,m,d[5],i,k,j,rem[5];

printf("****Transmitter Side*****\n");
printf("Enter the desired length of the frame:\n");
scanf("%d",&n);
printf("Enter the desired length of the generator:\n");
scanf("%d",&m);
printf("Enter the message frame\n");
for(i=0;i<n;i++)
{
scanf("%d",&a[i]);
}
for(i=10;i<14;i++)
{
a[i]=0;
}
printf("The entered frame bit sequence with appended zeroes id:\n");
for(i=0;i<14;i++)
printf("%d",a[i]);
printf("\n");
printf("Enter the generator");
for(i=0;i<5;i++)
{
scanf("%d",&b[i]);
d[i]=b[i];
}
if(a[0]==1)
{
for(i=1;i<5;i++)
{
rem[i]=a[i]^d[i];
printf("The remainder for the first step is:%d",rem[i]);
printf("\n");
}
}
else
{
for(i=1;i<5;i++)
{
rem[i]=a[i]^0;
printf("The remainder for the first step is:%d",rem[i]);
printf("\n");
}
}
for(j=5;j<14;j++)
{
rem[4]=a[j];
if(rem[0]==0)
{
for(i=1;i<5;i++)
{
rem[i]=rem[i]^0;
}
}
else
{
for(i=1;i<5;i++)
{
rem[i]=rem[i]^b[i];
}
}
}
for(i=0;i<4;i++)
printf("%d",rem[i]);

}


