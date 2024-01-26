
/*6-Query the Name of any student in STUDENTS who scored higher than  Marks. Order your output by the last three characters of each name. \n",
If two or more students both have names ending in the same last three characters \n",
(i.e.: Bobby, Robby, etc.), secondary sort them by ascending ID.*/

https://www.hackerrank.com/challenges/more-than-75-marks/problem?isFullScreen=false\n

select Name from STUDENTS where Marks > 75 order by RIGHT(Name ,3) ,ID;