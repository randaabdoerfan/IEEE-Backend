
/*8-Query the list of CITY names from STATION 
that do not start with vowels and do not end with vowels. 
  Your result cannot contain duplicates.*/
        
https://www.hackerrank.com/challenges/weather-observation-station-12/problem?isFullScreen=true
        
select distinct CITY from STATION where lower(SUBSTR(CITY,1,1)) not in ('a','e','i','o','u')  AND lower(SUBSTR(CITY , LENGTH(CITY),1)) not in ('a','e','i','o','u');