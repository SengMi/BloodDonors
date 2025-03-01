# Blood Donor Management System

## Overview
The Blood Donor Management System is a web-based platform developed using PHP and MySQL to facilitate blood donation and management. It helps connect donors with recipients efficiently while allowing administrators to manage blood donation records.

## Features
- User Registration and Login
- Donor Profile Management
- Search for Donors by Blood Type & Location
- Blood Donation Requests
- Appointment Booking System
- Admin Dashboard for Managing Donations & Requests

## Technologies Used
- **Backend**: PHP, MySQL
- **Frontend**: HTML, CSS, JavaScript, Bootstrap
- **Database**: MySQL
- **Frameworks**: SB Admin 2 (Admin Panel UI)

## Installation Guide
### Prerequisites
- XAMPP or any PHP & MySQL environment
- Web browser

### Steps to Install
1. **Download & Extract the Project**
   - Extract the project folder into `htdocs` (for XAMPP users) or your server directory.

2. **Database Setup**
   - Open `phpMyAdmin` in your browser.
   - Create a new database (e.g., `blood_donor_db`).
   - Import the provided SQL file from `DATABASE FILE/secyear.sql`.

3. **Configuration**
   - Open `dbcon.php` and update the database credentials:
     ```php
     $host = "localhost";
     $user = "root";
     $password = "";
     $dbname = "blood_donor_db";
     ```

4. **Run the Application**
   - Open your browser and navigate to `http://localhost/blood-donorms-PHP/`

## Usage
- **Users**: Register, search for donors, and request blood.
- **Donors**: Register and update availability.
- **Admins**: Manage donor records and approve/reject blood requests.


## Contribution
Contributions are welcome! Feel free to submit a pull request or report issues.

## License
This project is open-source (MIT License).

## Contact
For any issues or suggestions, reach out to the developer.

