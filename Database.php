<?php

include_once "classes/database.class.php";

// Replace with your actual database credentials
$db = new Database('localhost', 'your_database_name', 'your_username', 'your_password');

// Example query for fetching users by name
$name = "%john%";
$sql = "SELECT * FROM users WHERE name LIKE :name";
$params = [':name' => $name];
$stmt = $db->query($sql, $params);

if ($stmt) {
  $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
  // Process fetched users
  foreach ($users as $user) {
    echo "User: " . $user['name'] . "<br>";
  }
}

