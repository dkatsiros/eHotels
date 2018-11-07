% M/M/2/2 simulation. We will find the probabilities of the first states.
% Note: Due to ergodicity, every state has a probability >0.

clc;
clear all;
close all;

total_arrivals = 0; % to measure the total number of arrivals
current_state = 0;  % holds the current state of the system
previous_mean_clients = 0; % will help in the convergence test
index = 0;

lambda = 1; 
mu1 = 0.8;
mu2= 0.4;
threshold = lambda/(lambda + mu1); % the threshold used to calculate probabilities
for i=1:4
  arrivals(i)=0;
end
  transitions = 0; % holds the transitions of the simulation in transitions steps

while transitions >= 0
  transitions = transitions + 1; % one more transitions step
  
  if mod(transitions,1000) == 0 % check for convergence every 1000 transitions steps
    index = index + 1;
    for i=1:1:length(arrivals)
        P(i) = arrivals(i)/total_arrivals; % calcuate the probability of every state in the system
    end 
    
    Pblocking=P(4);
    mean_clients = 0; % calculate the mean number of clients in the system
    for i=1:1:length(arrivals)
       mean_clients = mean_clients + (i-1).*P(i);
    end 
    
    to_plot(index) = mean_clients;
        
    if abs(mean_clients - previous_mean_clients) < 0.00001 || transitions > 300000 % convergence test
      break;
    end 
    
    previous_mean_clients = mean_clients;
    
    end 
  random_number = unifrnd(0,1); % generate a random number (Uniform distribution)
  if current_state==1 threshold=lambda/(lambda+mu1); end 
  if current_state==2 threshold=lambda/(lambda+mu2); end 
  if current_state==3 threshold=lambda/(lambda+mu1+mu2); end 
  if current_state == 0 || random_number < threshold % arrival
      total_arrivals = total_arrivals + 1;
      arrivals(current_state + 1) = arrivals(current_state + 1) + 1; % increase the number of arrivals in the current state
      if(current_state==1) 
            current_state=current_state+2;
      else
            if current_state <3
             current_state = current_state + 1;
            end 
      end 
  else % departure
    if current_state ~= 0 % no departure from an empty system
      if current_state==3  
          rn=unifrnd(0,1);
          th=mu1/(mu1+mu2);
          if rn<th  current_state=current_state-1;
          else current_state=current_state-2;
          end
      elseif current_state==2 
          current_state=current_state-2; 
      else    
        current_state = current_state - 1;
      end
    end 
   end 
  end 

for i=1:1:length(arrivals)
  display(P(i));
end 

figure(1);
plot(to_plot,'r','linewidth',1.3);
title('Average number of clients in the M/M/2/2 queue: Convergence');
xlabel('transitions in thousands');
ylabel('Average number of clients');

figure(2);
bar(P,0.4);
title('Probabilities')

figure(3);
fprintf('Probability of blocking =%d\n' ,Pblocking);