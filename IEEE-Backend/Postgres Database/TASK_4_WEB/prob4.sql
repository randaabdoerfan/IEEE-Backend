
/*Write a query identifying the type of each record in the TRIANGLES table using its three side lengths. 
Output one of the following statements for each record in the table:      
  "Equilateral: It's a triangle with  sides of equal length.\n",
  "Isosceles: It's a triangle with  sides of equal length.\n",
  "Scalene: It's a triangle with  sides of differing lengths.\n",
  "Not A Triangle: The given values of A, B, and C don't form a triangle.*/
  
  https://www.hackerrank.com/challenges/what-type-of-triangle/problem?isFullScreen=true\
        
  SELECT CASE
    WHEN (A + B <= C) OR (B + C <= A) OR (A + C <= B) THEN 'Not A Triangle'
    WHEN (A = B) AND (B = C) THEN 'Equilateral'
    WHEN ((A = B) AND(A != C)) OR ((B = C) AND(B != A)) OR ((A = C) AND(A != B)) THEN 'Isosceles'
    WHEN (A != B) AND (B != C) AND (A != C) THEN 'Scalene'
  END AS Triangle_Type
  FROM TRIANGLES;"
