clc;
clear all;
close all;
for i=1:5
  mu(i)=i+1;
endfor
lambda=[3 3 3 3 3];
Q=ctmcbd(lambda,mu);
Pk=ctmc(Q);
mnc=0;
for i=1:6;
  mnc=mnc + Pk(i)*(i-1);
endfor
