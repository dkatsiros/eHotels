
clc;
clear all;
close all;
total_arrivals = 0; % to measure the total number of arrivals
current_state = 0;  % holds the current arrivals of the system
previous_mean_clients = 0; % will help in the convergence test
index = 0;
rand("seed",1);
mu = 5;
next(1)=0;
lambda=5;
threshold = lambda/(lambda + mu); % the threshold used to calculate probabilities
n = 1;
for i=1:11
    arrivals(i)=0;
endfor
transitions = 0; % holds the transitions of the simulation in transitions steps

while transitions >= 0
  transitions = transitions + 1; % one more transitions step
  %start debugging
  if transitions <=30
     c_state(transitions) = current_state;
     ta(transitions) = sum(next);
     next(transitions) = n;
  endif
  % end of debugging
  if mod(transitions,1000) == 0 % check for convergence every 1000 transitions steps
    index = index + 1;
    for i=1:length(arrivals)
        P(i) = arrivals(i)/total_arrivals; % calculate the probability of every arrivals in the system
    endfor
    mean_clients = 0; % calculate the mean number of clients in the system
    for i=1:length(arrivals)
       mean_clients = mean_clients + (i-1).*P(i);
    endfor
    to_plot(index) = mean_clients;
    if abs(mean_clients - previous_mean_clients) < 0.00001 || transitions > 1000000 % convergence test
      break;
    endif
    meantime=mean_clients/lambda;
    previous_mean_clients = mean_clients;
    Pblocking = P(length(arrivals));
  endif
  rn = unifrnd(0,1); % generate a random number (Uniform distribution)
  if current_state == 0 || rn < threshold % arrival
       total_arrivals = total_arrivals + 1;
       arrivals(current_state + 1) = arrivals(current_state + 1) + 1; % increase the number of arrivals in the current arrivals
       n = 1;
       if current_state ~= 10 %no entry full system
         current_state = current_state + 1;
       endif
  else % departure
    if current_state ~= 0 % no departure from an empty system
       current_state = current_state - 1;   
       n = 0;
    endif
  endif
  
endwhile

figure(1);
bar(P);
title('Εργοδικές πιθανότητες');
xlabel('Καταστάσεις του συστήματος');
ylabel('Πιθανότητες');
hold on;
figure(2);
plot(to_plot,'r','linewidth',1);
title('Εξέλιξη του μέσου αριθμού πελατών στο σύστημα ');
xlabel('Μεταβάσεις σε χιλιάδες');
ylabel('Μέσος αριθμός πελατών');

