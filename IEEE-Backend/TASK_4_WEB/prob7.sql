
  /*Query the list of CITY names from STATION that do not end with vowels. Your result cannot contain duplicates.*/
        
  https://www.hackerrank.com/challenges/weather-observation-station-10/problem?isFullScreen=true
        
  SELECT DISTINCT CITY FROM STATION WHERE UPPER(SUBSTR(CITY, LENGTH(CITY), 1)) 
  NOT IN ('A','E','I','O','U') 
  AND LOWER(SUBSTR(CITY, LENGTH(CITY),1))
  NOT IN ('a','e','i','o','u');  