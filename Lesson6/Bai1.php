<?php

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection to database failed: " . $mysqli_error());
}

// Create "customers" table
$sqlCreateTableCustomers = "CREATE TABLE customers (
    id INT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255),
    phone VARCHAR(255)
)";

if (mysqli_query($conn,$sqlCreateTableCustomers) === TRUE) {
    echo "Table 'customers' has been successfully created.<br>";
} else {
    echo "Error creating 'customers' table: " . $mysqli_error();
}

// Add 5 new customers to the "customers" table
$sqlAddCustomers = "INSERT INTO customers (id, name, email, phone) VALUES
    (1, 'John Doe', 'johndoe@example.com', '123456789'),
    (2, 'Jane Smith', 'janesmith@example.com', '987654321'),
    (3, 'David Johnson', 'davidjohnson@example.com', '456789123'),
    (4, 'Emily Davis', 'example@gmail.com', '789123456'),
    (5, 'Michael Wilson', 'michaelwilson@examp1e.com', '321654987')";

if (mysqli_query($conn, $sqlAddCustomers) === TRUE) {
    echo "Added customers successfully.<br>";
} else {
    echo "Error adding customers: " . $mysqli_error();
}

// Edit information of a customer with id is 1
$sqlUpdateCustomers = "UPDATE customers SET name = 'Updated Name', email = 'updatedemail@example.com', phone = '999999999' WHERE id = 1";

if (mysqli_query($conn,$sqlUpdateCustomers) === TRUE) {
    echo "Customer information has been successfully updated.<br>";
} else {
    echo "Error updating customer information: " . $mysqli_error();
}

// Delete a customer with id is 5
$sqlDeleteCustomers = "DELETE FROM customers WHERE id = 5";

if (mysqli_query($conn,$sqlDeleteCustomers) === TRUE) {
    echo "Deleted customer successfully.<br>";
} else {
    echo "Error deleting customer: " . $mysqli_error();
}

// Get all customers with email is "example@gmail.com"
$sqlSelectCustomers = "SELECT * FROM customers WHERE email = 'example@gmail.com'";
$result = mysqli_query($conn, $sqlSelectCustomers);

if (mysqli_num_rows($result) > 0) {
    echo "Customers with email 'example@gmail.com':<br>";
    foreach ($result as $row) {
        echo "ID: " . $row["id"] . "<br>". "Name: " . $row["name"] . "<br>". "Email: " . $row["email"] ."<br>". "Phone: " . $row["phone"] . "<br>";
    }
} else {
    echo "Did not find any customer with email 'example@gmail.com'.<br>";
}

// Create "orders" table with foreign key constraint delete cascade
$sqlCreateTableOrders = "CREATE TABLE orders (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    customer_id INT(11),
    total_amount DECIMAL(10,2),
    order_date DATE,
    CONSTRAINT fk_customer_id FOREIGN KEY (customer_id) REFERENCES customers(id) ON DELETE CASCADE
)";

if (mysqli_query($conn, $sqlCreateTableOrders)) {
    echo "Successfully created orders table<br>";
} else {
echo "Error creating orders table: " . mysqli_error($conn) . "<br>";
}

// Add a new order to the "orders" table for customer with id 3
$sqlInsertOrder = "INSERT INTO orders (customer_id, total_amount, order_date)
VALUES (3, 100.00, '2023-06-07')";

if (mysqli_query($conn, $sqlInsertOrder)) {
echo "Successfully added a new order<br>";
} else {
echo "Error adding a new order: " . mysqli_error($conn) . "<br>";
}

// Get all orders of customer with id 3
$sqlSelectOrders = "SELECT * FROM orders WHERE customer_id = 3";
$result = mysqli_query($conn, $sqlSelectOrders);

if (mysqli_num_rows($result) > 0) {
echo "Orders of customer with id 3:<br>";
while ($row = mysqli_fetch_assoc($result)) {
echo "ID: " . $row["id"] ."<br>". "Customer ID: " . $row["customer_id"] ."<br>". "Total Amount: " . $row["total_amount"] ."<br>". "Order Date: " . $row["order_date"] . "<br>";
}
} else {
echo "Did not find any order of customer with id 3<br>";
}

// Get list of customers and their orders using JOIN statement
$sqlSelectCustomersOrders = "SELECT customers.id, customers.name, orders.id AS order_id, orders.total_amount, orders.order_date
FROM customers
JOIN orders ON customers.id = orders.customer_id";

$result = mysqli_query($conn, $sqlSelectCustomersOrders);

if (mysqli_num_rows($result) > 0) {
echo "List of customers and their orders:<br>";
while ($row = mysqli_fetch_assoc($result)) {
echo "Customer ID: " . $row["id"] ."<br>". "Customer Name: " . $row["name"] ."<br>". "Order ID: " . $row["order_id"] ."<br>". "Total Amount: " ."<br>". $row["total_amount"] . "Order Date: " ."<br>". $row["order_date"] . "<br>";
}
} else {
echo "Did not find any customer and their orders<br>";
}

// Get list of customer emails using DISTINCT function
$sqlSelectDistinctEmails = "SELECT DISTINCT email FROM customers";
$result = mysqli_query($conn, $sqlSelectDistinctEmails);

if (mysqli_num_rows($result) > 0) {
echo "List of customer emails:<br>";
while ($row = mysqli_fetch_assoc($result)) {
echo "Email: " . $row["email"] . "<br>";
}
} else {
echo "Did not find any customer emails<br>";
}

?>
