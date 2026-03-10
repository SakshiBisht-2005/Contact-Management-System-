📇 Contact Management System

A Contact Management System built using PHP, MySQL, HTML, and CSS that allows users to manage their contacts efficiently.
Users can register, login, add contacts, delete contacts, and view saved contacts through a clean dark-theme interface.

🚀 Features

👤 User Registration

🔐 User Login Authentication

📋 View All Contacts

➕ Add New Contact

❌ Delete Contact

🌙 Dark Theme UI

🚪 Logout System

🗄 MySQL Database Integration

🛠 Technologies Used

Frontend

HTML

CSS (Dark Theme)

Backend

PHP

Database

MySQL

Server

XAMPP (Apache + MySQL)

📂 Project Structure
Contact-Management-System
│
├── login.php
├── register.php
├── home.php
├── add.php
├── delete.php
├── logout.php
│
├── config.php
│
├── style.css
│
└── database.sql
⚙️ Installation Guide

Follow these steps to run the project on your system.

1️⃣ Install XAMPP

Download and install:

https://www.apachefriends.org

Start:

Apache

MySQL

2️⃣ Clone the Repository
git clone https://github.com/yourusername/contact-management-system.git

Move the folder to:

xampp/htdocs/

Example:

D:/xampp/htdocs/contact-management-system
3️⃣ Create Database

Open:

http://localhost/phpmyadmin

Create a database:

contact_db
4️⃣ Run SQL Query
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100),
    password VARCHAR(100)
);

CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    phone VARCHAR(20),
    email VARCHAR(100)
);
5️⃣ Configure Database

Open:

config.php

Example configuration:

<?php

$conn = mysqli_connect("localhost","root","","contact_db");

if(!$conn){
    die("Connection failed");
}

?>
6️⃣ Run the Project

Open browser and go to:

http://localhost/contact-management-system
📸 Screenshots

You can add screenshots here.

Example:

screenshots/login.png
screenshots/register.png
screenshots/home.png
🔒 Security Features

User authentication

Session management

Login protection

📈 Future Improvements

✏️ Edit Contact Feature

🔍 Search Contact

📱 Responsive Design

☁️ Cloud Database Support

📤 Import / Export Contacts

👩‍💻 Author

Sakshi

BCA Student
Learning Web Development & Data Structures

⭐ Contributing

Contributions are welcome!
If you want to improve this project:

Fork the repository

Create a new branch

Submit a pull request

📜 License

This project is open-source and free to use for learning purposes.

✅ Your GitHub repo will look professional with this documentation.

If you want, I can also show you:

🔥 How to make your GitHub project look like a professional developer project

📸 How to add screenshots to README

⭐ How to add badges and GitHub stats

This will make your BCA project look like a real portfolio project.

Give a proper Readme about this project 

Here is a clean, professional, and GitHub-standard README.md for your Contact Management System. You can copy this directly into your README.md file in your repository.

📇 Contact Management System

A Contact Management System built using PHP, MySQL, HTML, and CSS that allows users to securely manage their contacts.
The system provides features like user authentication, adding contacts, viewing contacts, and deleting contacts through a simple and modern dark-themed interface.

This project is designed as a beginner-friendly web application and can be used as a BCA project or portfolio project.

🚀 Features

👤 User Registration

🔐 User Login Authentication

➕ Add New Contact

📋 View Saved Contacts

❌ Delete Contacts

🚪 Logout System

🌙 Dark Theme User Interface

🗄 MySQL Database Storage

🛠 Tech Stack
Frontend

HTML

CSS (Dark Theme)

Backend

PHP

Database

MySQL

Server

XAMPP (Apache + MySQL)

📂 Project Structure
Contact-Management-System
│
├── login.php          # User login page
├── register.php       # User registration page
├── index.php           # Dashboard showing contacts
├── add_contact.php            # Add new contact
├── delete_contact.php         # Delete contact
├── logout.php         # Logout functionality
|── edit_contact.php     #For editing the contact
├── db.php         # Database connection
│── auth.css         #Dark Theme Styling for the login and registration page
├── dataset.css          # Dark theme styling
│── script.js            # For Functionality 
└── database.sql       # Database structure
⚙️ Installation & Setup

Follow the steps below to run this project on your local machine.

1️⃣ Install XAMPP

Download and install XAMPP:

https://www.apachefriends.org

Start the following services:

Apache

MySQL

2️⃣ Clone the Repository

Clone the project into your htdocs folder.

git clone https://github.com/yourusername/contact-management-system.git

Move the project folder to:

xampp/htdocs/

Example:

D:/xampp/htdocs/contact-management-system
3️⃣ Create Database

Open phpMyAdmin

http://localhost/phpmyadmin

Create a new database:

contact_db
4️⃣ Create Tables

Run the following SQL query:

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100),
    password VARCHAR(100)
);

CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    phone VARCHAR(20),
    email VARCHAR(100)
);
5️⃣ Configure Database Connection

Open:

config.php

Example configuration:

<?php
$conn = mysqli_connect("localhost","root","","contact_db");

if(!$conn){
    die("Connection Failed");
}
?>
▶️ Run the Application

Open your browser and visit:

http://localhost/contact-management-system

Session based authentication

User login protection

Secure logout system

📈 Future Improvements

Some features that can be added in the future:

✏️ Edit Contact Feature

🔍 Search Contacts

📱 Responsive Mobile Design

📤 Import / Export Contacts

☁️ Cloud Database Integration

👩‍💻 Author

Sakshi
BCA Student | Learning Web Development & Data Structures

🤝 Contributing

Contributions are welcome!

Fork the repository

Create a new branch

Make your changes

Submit a pull request

📜 License

This project is open-source and available for educational purposes.

⭐ If you find this project useful, consider giving it a star on GitHub!
