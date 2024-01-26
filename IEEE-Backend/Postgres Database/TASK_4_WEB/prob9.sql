
  /*Query the list of CITY names from STATION that do not start with vowels. 
   Your result cannot contain duplicates.*/
        
  https://www.hackerrank.com/challenges/weather-observation-station-9/problem?isFullScreen=false
       
  SELECT DISTINCT CITY FROM STATION WHERE upper(SUBSTR(CITY,1,1))
  NOT IN ('A','E','I','O','U') 
  AND lower(SUBSTR(CITY,1,1)) 
  NOT IN('a','e','i','o','u'); 