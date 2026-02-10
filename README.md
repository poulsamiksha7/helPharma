# HelPharma 💊  
**Full Stack Web Application (PHP + MySQL)**

HelPharma is a full-stack web application for pharmacy services that allows users to:
- Book doctor appointments  
- Browse and add medicines to cart  
- Place orders and track delivery  
- Contact support  
- Login / Signup  

> 📝 This project was originally developed as my BCA final year project and later revisited and maintained during my MCA (4th semester) to fix backend issues, reconnect MySQL, and improve overall stability.

---

## 🚀 Features
- 🔐 User Authentication (Login / Signup / Forgot Password)  
- 📅 Doctor Appointment Booking  
- 💊 Medicine Store with Add to Cart  
- 🛒 Shopping Cart with Total Calculation  
- 💳 Payment UI  
- 📦 Order Tracking Timeline  
- 📩 Contact Form  
- 🗄️ PHP + MySQL Backend Integration  

---

## 🛠 Tech Stack
**Frontend:** HTML, CSS, Bootstrap, JavaScript  
**Backend:** PHP  
**Database:** MySQL (phpMyAdmin via XAMPP)  
**Server:** Apache (XAMPP)

---

## ⚙️ How to Run Locally (XAMPP Setup)

1. Install **XAMPP**
2. Move project folder to:
C:\xampp\htdocs\helPharma
3. Start **Apache** and **MySQL** from XAMPP Control Panel  
4. Open phpMyAdmin:
http://localhost/phpmyadmin
5. Create two databases:
- `login`
- `purchase`

6. Create tables using SQL:

```sql
-- Database: login
CREATE TABLE customer (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
email VARCHAR(100),
password VARCHAR(100),
doctor VARCHAR(100),
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE contact (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
emailAddress VARCHAR(100),
message TEXT,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Database: purchase
CREATE TABLE bill (
id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(100),
cardNumber VARCHAR(20),
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
http://localhost/helPharma/
