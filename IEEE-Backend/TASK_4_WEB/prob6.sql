
/*Query the list of CITY names from STATION that either 
do not start with vowels or do not end with vowels.
Your result cannot contain duplicates.*/
        
https://www.hackerrank.com/challenges/weather-observation-station-11/problem?isFullScreen=true
        
SELECT DISTINCT CITY FROM STATION WHERE LOWER(SUBSTR(CITY,1,1)) 
NOT IN ('a','e','i','o','u') 
OR LOWER(SUBSTR(CITY, LENGTH(CITY),1)) 
NOT IN ('a','e','i','o','u'); 