# ONLINE FLIGHT BOOKING MANAGEMENT SYSTEM

This is a simple PHP/MySQL flight booking management system intended to run on a local development environment (XAMPP/WAMP) or on a PHP-enabled web server.

**Quick Setup (Windows / XAMPP)**

1) Install a web server environment
- Download and install XAMPP (https://www.apachefriends.org/) or WAMP.
- Start Apache and MySQL from the control panel.

2) Set up the database
- Open phpMyAdmin (usually at `http://localhost/phpmyadmin`).
- Create a new database named `flight_booking_db` (or any name you prefer).
- Import the SQL file `flight_booking_db.sql` (use the Import tab in phpMyAdmin).

3) Configure and place the project
- Move the project folder to your web server document root. For XAMPP, move the folder to `C:\xampp\htdocs\Online_Flight_Booking_Management_System`.
- Open `db_connect.php` and verify the connection settings. Example default values for XAMPP:

```
<?php
$conn = new mysqli('localhost','root','','flight_booking_db') or die("Could not connect to mysql".mysqli_error($conn));
```

- If you used a different database name or set a MySQL password, update the values accordingly.

4) Run the application
- Open your browser and go to:

```
http://localhost/Online_Flight_Booking_Management_System/
```

Troubleshooting
- If the site looks unstyled or you see many 404 errors in DevTools, the `assets/` folder (vendor CSS/JS and images) may be missing. You can either:
	- Restore the `assets/` folder from a backup or the original repository, or
	- Use CDN fallbacks for the missing vendor libraries (jQuery, Bootstrap, DataTables, Select2, etc.).
- If you see `Uncaught ReferenceError: $ is not defined`, jQuery is not loaded. Make sure `assets/vendor/jquery/jquery.min.js` exists or add a CDN link for jQuery.
- After making changes to files or the `assets/` folder, restart Apache (XAMPP Control Panel) and hard-refresh the browser (Ctrl+F5).

Security notes
- This project is intended for local development and learning purposes. Do not expose it to the public internet without adding proper authentication, input validation, and configuration hardening.


-- End of setup instructions
