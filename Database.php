<?php

include_once "classes/database.class.php";
include_once "includes/config.php";

// Replace with your actual database credentials
$db = new Database($db_server, $db, $db_user, $db_pass);

// Example query for fetching users by name
$name = "%Michael%";
$sql = "SELECT * FROM users WHERE first_name LIKE :name ";
$params = [':name' => $name];
$stmt = $db->query($sql, $params);

if ($stmt) {
  $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
  // Process fetched users
  foreach ($users as $user) {
    echo "User: " . $user['first_name'] ." " .  $user['last_name'] ."<br>";
  }
}

