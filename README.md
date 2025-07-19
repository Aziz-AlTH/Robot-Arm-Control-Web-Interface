Robot-Arm-Control-Web-Interface

This is a complete web-based control panel for a **6-DOF robot arm**, designed using HTML, CSS, JavaScript, and PHP with MySQL integration via XAMPP.

---

## 🚀 Features

- 🎚️ Control 6 individual motors via slider inputs.
- 💾 Save motor poses to a MySQL database.
- 📋 View, load, or delete saved poses from a live table.
- 📡 Simulate sending pose data to the robot arm.
- 💡 Beautiful responsive interface using clean CSS styling.

---

## 🧱 Technologies Used

- Frontend: `HTML`, `CSS`, `JavaScript (Vanilla)`
- Backend: `PHP`
- Database: `MySQL`
- Platform: `XAMPP (Apache + MySQL)`

---

## 📂 Folder Structure

robot_arm_control/

│
├── index.html # Main frontend interface

├── style.css # Styling file

├── script.js # Client-side logic

├── db.php # Database connection

├── save_pose.php # Store new pose

├── get_run_pose.php # Load saved poses

├── update_status.php # Mark poses as removed



---

## 🗄️ Database Setup

1. Create a database:

```sql
CREATE DATABASE robot_arm;
USE robot_arm;

CREATE TABLE poses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    motor1 INT,
    motor2 INT,
    motor3 INT,
    motor4 INT,
    motor5 INT,
    motor6 INT,
    status INT DEFAULT 0
);



⚙️ How to Run the Project
Install and start XAMPP.

Place the project folder inside:
C:/xampp/htdocs/robot_arm_control/

Start Apache and MySQL via XAMPP Control Panel.

Create the database in phpMyAdmin.

Visit the project in your browser:
👉 http://localhost/robot_arm_control/index.html

🧑‍💻 Developed By
Abdulaziz — Computer Science Student
Custom-built with ❤️ using VS Code and XAMPP.





