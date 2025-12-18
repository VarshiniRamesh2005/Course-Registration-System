# Course Registration System

## Project Overview
The Course Registration System is a basic web-based application designed for students to register for courses online. The system collects student details through a registration form, performs input validation, and stores the data securely in a MySQL database using PHP.
This project is mainly intended for learning and demonstrating full-stack web development concepts.

---

## Technologies Used
- HTML – Structure of the web pages
- CSS – Styling and layout
- JavaScript – Client-side form validation
- PHP – Server-side processing
- MySQL – Database storage
- XAMPP – Local server environment

---

## Project Folder Structure
CourseRegistration/
│
├── index.html        # Registration form (Frontend)
├── style.css         # Styling for the form
├── script.js         # JavaScript validation
├── config.php        # Database connection file
├── register.php      # Handles form submission
└── README.md         # Project documentation


---

## Setup Instructions

### Step 1: Prerequisites
Install XAMPP
A web browser (Chrome, Edge, etc.)

---

### Step 2: Installation / Database Setup
Start Apache and MySQL from the XAMPP Control Panel.
Open http://localhost/phpmyadmin.
Create a database named course_registration.
Create a table using the following SQL query:

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    course VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


---

### Step 3: Project Setup
Copy the project folder into:
C:\xampp\htdocs\

Make sure the folder name is:
CourseRegistration

---

### Step 4: Run the Project
Open a browser and go to:http://localhost/CourseRegistration/index.html

---

## Application Workflow
1.Student fills in the registration form.
2.JavaScript validates the input fields.
3.Form data is sent to register.php.
4.PHP processes the data and stores it in MySQL.
5.A success message is displayed.
6.Stored data can be viewed using phpMyAdmin.

---

## Features
Student course registration
Client-side form validation
PHP–MySQL database integration
Simple and user-friendly interface

---

## Future Enhancements
View registered students list
Update and delete student records
Admin login system
Improved validation and security

---

## Learning Outcomes
Understanding of frontend and backend integration
Hands-on experience with PHP and MySQL
Knowledge of form handling and validation
Experience with local server setup using XAMPP

---

## Author
Varshini
