# Food Waste Management System

The Food Waste Management System is a web-based platform designed to collect excess or leftover food from donors—such as hotels, restaurants, and marriage halls—and distribute it to those in need. The system aims to reduce food wastage and support communities by efficiently managing food donations.

## Features

### User Module

* **Registration & Login:** Users can securely register and log in to the platform.
* **Food Donation:** Donors can submit details about excess food available for donation.
* **Dashboard:** Users can view and manage their donation history.

### Admin Module

* **Manage Donations:** Admins can view, approve, or reject food donation requests.
* **User Management:** Admins can manage user accounts and monitor system activities.

### Delivery Module

* **Pickup Requests:** Delivery personnel can view approved donation pickups.
* **Delivery Management:** Track and manage the delivery of donated food to recipients.

### Additional Features

* **Chatbot Support:** Integrated chatbot to assist users with common queries.
* **Responsive Design:** Mobile-friendly interface for accessibility on various devices.
* **Secure Authentication:** Ensures that only authorized users can access specific modules.

## Technologies Used

* **Frontend:** HTML, CSS, JavaScript
* **Backend:** PHP
* **Database:** MySQL
* **Web Server:** XAMPP

## Installation and Setup

1.  **Clone the Repository:**

    ```
    git clone [https://github.com/ayushhCreator/food-waste-management-system.git](https://github.com/ayushhCreator/food-waste-management-system.git)
    ```

2.  **Set Up the Environment:**

    * Install XAMPP and start Apache and MySQL modules.
    * Place the cloned repository folder inside the htdocs directory of XAMPP.

3.  **Configure the Database:**

    * Open phpMyAdmin.
    * Create a new database (e.g., food_waste_db).
    * Import the `demo.sql` file located in the database folder of the project.

4.  **Update Database Configuration:**

    * Open `connection.php` and update the database credentials if necessary.

5.  **Run the Application:**
    * Navigate to `http://localhost/food-waste-management-system` in your web browser.

## Usage

* **Donors:** Register and log in to submit food donation details.
* **Admins:** Access the admin panel to manage donations and users.
* **Delivery Personnel:** View and manage assigned delivery tasks.

## License

This project is licensed under the [MIT License](LICENSE).

## Contact

For any questions or feedback, please contact [ayushhCreator](https://github.com/ayushhCreator).
