-- =========================================
-- 1. CREATE DATABASE
-- =========================================

CREATE DATABASE hello;

-- Select the database
USE hello;


-- =========================================
-- 2. CREATE EMPLOYEE TABLE
-- =========================================

CREATE TABLE employee (
    employee_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    department VARCHAR(50) NOT NULL,
    salary DECIMAL(10,2),
    hire_date DATE,
    city VARCHAR(50)
);


-- =========================================
-- 3. INSERT SAMPLE EMPLOYEE DATA
-- =========================================

-- employee_id is omitted because it is AUTO_INCREMENT
INSERT INTO employee
    (first_name, last_name, department, salary, hire_date, city)
VALUES
    ('John', 'Doe', 'Science', 23000.00, '2023-01-15', 'Dhaka'),
    ('Jane', 'Smith', 'IT', 35000.00, '2022-06-10', 'Tangail'),
    ('Michael', 'Brown', 'HR', 28000.00, '2024-03-20', 'Gazipur'),
    ('Sarah', 'Wilson', 'Finance', 40000.00, '2021-09-05', 'Dhaka'),
    ('David', 'Taylor', 'IT', 32000.00, '2023-11-12', 'Savar'),
    ('Emily', 'Davis', 'Science', 26000.00, '2024-01-08', 'Tangail'),
    ('Robert', 'Miller', 'Marketing', 30000.00, '2022-12-01', 'Dhaka'),
    ('Olivia', 'Anderson', 'HR', 27000.00, '2023-07-17', 'Gazipur'),
    ('Daniel', 'Thomas', 'Finance', 38000.00, '2020-05-25', 'Savar'),
    ('Sophia', 'Moore', 'IT', 45000.00, '2021-02-14', 'Dhaka');


-- =========================================
-- 4. DISPLAY ALL EMPLOYEES
-- =========================================

SELECT * FROM employee;


-- =========================================
-- 5. COUNT TOTAL EMPLOYEES
-- =========================================

SELECT COUNT(*) AS total_employee
FROM employee;


-- =========================================
-- 6. DISPLAY EMPLOYEES WITH SALARY ABOVE 30000
-- =========================================

SELECT *
FROM employee
WHERE salary > 30000;


-- =========================================
-- 7. SORT EMPLOYEES BY SALARY
-- =========================================

-- Highest salary first
SELECT *
FROM employee
ORDER BY salary DESC;


-- =========================================
-- 8. FIND THE HIGHEST SALARY
-- =========================================

SELECT MAX(salary) AS highest_salary
FROM employee;


-- =========================================
-- 9. FIND THE AVERAGE SALARY
-- =========================================

SELECT AVG(salary) AS average_salary
FROM employee;


-- =========================================
-- 10. COUNT EMPLOYEES IN EACH DEPARTMENT
-- =========================================

SELECT department, COUNT(*) AS total_employee
FROM employee
GROUP BY department;


-- =========================================
-- 11. DISPLAY EMPLOYEES FROM DHAKA
-- =========================================

SELECT *
FROM employee
WHERE city = 'Dhaka';


-- =========================================
-- 12. FIND EMPLOYEES WHOSE FIRST NAME STARTS WITH J
-- =========================================

SELECT *
FROM employee
WHERE first_name LIKE 'J%';


-- =========================================
-- 13. CALCULATE TOTAL SALARY
-- =========================================

SELECT SUM(salary) AS total_salary
FROM employee;


-- =========================================
-- 14. UPDATE AN EMPLOYEE'S SALARY
-- =========================================

-- Increase John Doe's salary to 25000
UPDATE employee
SET salary = 25000.00
WHERE employee_id = 1;


-- =========================================
-- 15. DELETE AN EMPLOYEE
-- =========================================

-- Example only: delete employee ID 10
-- Uncomment the following line if you want to delete that record

-- DELETE FROM employee WHERE employee_id = 10;
