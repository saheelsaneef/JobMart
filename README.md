# JobMart

JobMart is a web application developed using PHP, HTML, and CSS to efficiently manage employee information. It serves as a platform for organizing and tracking employee details within an organization.

## Features

- **Employee Management:** Add, edit, and delete employee records with ease.
- **Search and Filter:** Quickly find specific employee information using search and filter functionalities.
- **User-Friendly Interface:** Intuitive design for a seamless user experience.
- **Responsive Design:** HTML, CSS for a responsive and accessible web interface.

## Technology Stack

- **Server:** XAMPP
- **Backend:** PHP
- **Frontend:** HTML, CSS

## Getting Started

Follow these steps to set up and run the JobMart application on your local machine:

```bash
# Clone the repository
git clone https://github.com/saheelsaneef/JobMart.git

# Set up XAMPP
1. Install XAMPP on your machine.
2. Start the Apache server and MySQL from the XAMPP control panel.

# Import the Database
1. Open phpMyAdmin (http://localhost/phpmyadmin) in your web browser.
2. Create a new database for JobMart.
3. Import the SQL script provided in the `database` directory to set up the necessary tables.

# Configure Database Connection
1. Open `config.php` in your preferred text editor.
2. Update the database connection details (hostname, username, password, database name) according to your XAMPP setup.

# Run the application
1. Place the project files in the XAMPP `htdocs` directory.
2. Open your web browser and navigate to http://localhost/JobMart.
