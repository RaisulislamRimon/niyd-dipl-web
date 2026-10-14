-- ============================================
-- 1. CREATE DATABASE
-- ============================================

-- Create a database named product_db
CREATE DATABASE product_db;

-- Select the database to use
USE product_db;


-- ============================================
-- 2. CREATE CATEGORY TABLE
-- ============================================

-- This table stores product categories
CREATE TABLE category (
    -- Automatically generated unique category ID
    id INT AUTO_INCREMENT PRIMARY KEY,

    -- Category name is required
    NAME VARCHAR(50) NOT NULL,

    -- Optional category code
    CODE VARCHAR(50)
);


-- ============================================
-- 3. CREATE PRODUCTS TABLE
-- ============================================

-- This table stores individual products
CREATE TABLE products (
    -- Automatically generated unique product ID
    id INT AUTO_INCREMENT PRIMARY KEY,

    -- Product name is required
    NAME VARCHAR(50) NOT NULL,

    -- ID of the category to which the product belongs
    category_id INT,

    -- Foreign key links products to the category table
    FOREIGN KEY (category_id) REFERENCES category(id),

    -- Each non-NULL SKU must be unique
    sku_number VARCHAR(20) UNIQUE,

    -- Product price is required
    -- DECIMAL(10,2) supports two digits after the decimal point
    price DECIMAL(10,2) NOT NULL
);


-- ============================================
-- 4. INSERT DATA INTO CATEGORY TABLE
-- ============================================

-- Add eight product categories
INSERT INTO category (NAME, CODE)
VALUES
('Electronics', 'ELEC'),
('Clothing', 'CLO'),
('Books', 'BOOK'),
('Furniture', 'FURN'),
('Sports', 'SPRT'),
('Home Appliances', 'HOME'),
('Stationery', 'STAT'),
('Accessories', 'ACCS');

SELECT * FROM category;


-- ============================================
-- 5. INSERT DATA INTO PRODUCTS TABLE
-- ============================================

-- Add products using their category IDs
-- These IDs correspond to the category rows inserted above
INSERT INTO products (NAME, category_id, sku_number, price)
VALUES
('Laptop', 1, 'ELEC001', 55000.00),
('Smartphone', 1, 'ELEC002', 25000.00),
('Headphones', 1, 'ELEC003', 1500.00),
('T-Shirt', 2, 'CLO001', 650.00),
('Jeans', 2, 'CLO002', 1200.00),
('SQL Basics Book', 3, 'BOOK001', 450.00),
('Python Programming', 3, 'BOOK002', 600.00),
('Office Chair', 4, 'FURN001', 7500.00),
('Football', 5, 'SPRT001', 900.00),
('Badminton Racket', 5, 'SPRT002', 1800.00),
('Electric Kettle', 6, 'HOME001', 1200.00),
('Notebook', 7, 'STAT001', 80.00),
('School Bag', 8, 'ACCS001', 950.00);

SELECT * FROM products;


-- ============================================
-- 6. DISPLAY ALL CATEGORIES
-- ============================================

-- Show every row in the category table
SELECT * FROM category;


-- ============================================
-- 7. DISPLAY ALL PRODUCTS
-- ============================================

-- Show every row in the products table
SELECT * FROM products;


-- ============================================
-- 8. COUNT TOTAL PRODUCTS
-- ============================================

-- COUNT(*) counts all product rows
SELECT COUNT(*) AS total_products
FROM products;


-- ============================================
-- 9. FIND PRODUCTS COSTING MORE THAN 1000
-- ============================================

-- WHERE filters rows according to a condition
SELECT *
FROM products
WHERE price > 1000;


-- ============================================
-- 10. FIND THE MOST EXPENSIVE PRODUCT
-- ============================================

-- DESC sorts prices from highest to lowest
-- LIMIT 1 returns only the first row
SELECT *
FROM products
ORDER BY price DESC
LIMIT 1;


-- ============================================
-- 11. COUNT PRODUCTS IN EACH CATEGORY
-- ============================================

-- LEFT JOIN also includes categories with no products
-- COUNT(products.id) counts matching products
-- GROUP BY groups the results by category
SELECT
    category.NAME AS category_name,
    COUNT(products.id) AS total_products
FROM category
LEFT JOIN products
    ON category.id = products.category_id
GROUP BY category.id, category.NAME;


-- ============================================
-- 12. CALCULATE THE AVERAGE PRODUCT PRICE
-- ============================================

-- AVG() calculates the average of all product prices
SELECT AVG(price) AS average_price
FROM products;


-- ============================================
-- 13. DISPLAY PRODUCTS WITH CATEGORY NAMES
-- ============================================

-- INNER JOIN combines products with their categories
-- using the matching category ID
SELECT
    products.id,
    products.NAME AS product_name,
    category.NAME AS category_name,
    products.sku_number,
    products.price
FROM products
INNER JOIN category
    ON products.category_id = category.id;


-- ============================================
-- 14. FIND PRODUCTS WITH PRICES BETWEEN 500 AND 2000
-- ============================================

-- BETWEEN includes both 500 and 2000
SELECT *
FROM products
WHERE price BETWEEN 500 AND 2000;


-- ============================================
-- 15. SEARCH PRODUCTS BY NAME
-- ============================================

-- LIKE with % searches for names containing "Book"
SELECT *
FROM products
WHERE NAME LIKE '%Book%';


-- ============================================
-- 16. FIND THE CHEAPEST PRODUCT
-- ============================================

-- ASC sorts prices from lowest to highest
SELECT *
FROM products
ORDER BY price ASC
LIMIT 1;


-- ============================================
-- 17. COUNT PRODUCTS WITH A SPECIFIC CATEGORY ID
-- ============================================

-- Count products belonging to category ID 1
SELECT COUNT(*) AS electronics_count
FROM products
WHERE category_id = 1;


-- ============================================
-- 18. CALCULATE TOTAL VALUE OF ALL PRODUCTS
-- ============================================

-- SUM() adds all product prices together
SELECT SUM(price) AS total_product_value
FROM products;
