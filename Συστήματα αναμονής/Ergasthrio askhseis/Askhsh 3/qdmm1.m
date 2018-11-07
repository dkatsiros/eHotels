function [ U,R,Q,X ] = qdmm1( lambda, mu )
%UNTITLED2 Summary of this function goes here
%   Detailed explanation goes here
   if ( nargin ~= 2 )
    error('You should insert two arguments');
   end
    
   if( (~isvector(lambda) || ~isvector(mu)))
       error('The parametres must be vectors');
   end

    U=lambda./mu;
    R = (1 ./ mu) + (U ./ ((2 .* mu) .* (1-U) ) );
    Q = U + ((U.^2) ./ ( 2.* (1-U) ) );
    X = lambda;
end

