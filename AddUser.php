<?php

function getUserData($file = "users.json")
{
  if (file_exists($file)) {
    $jsonData = file_get_contents($file);
    return json_decode($jsonData, true);
  } else {
    return ["users" => []]; // Return an empty users array if file does not exist
  }
}

// Get user information
$userData = getUserData();

// Add a new user
function addUserAndPurchase(&$userData, $userName, $email, $item, $price, $file = "users.json")
{
  if (!empty($userData["users"])) {
    $maxId = max(array_column($userData["users"], "id"));
  } else {
    $maxId = 0; // Default if no users exist
  }

  // Assign new user ID
  $newUserId = $maxId + 1;

  $newUser = [
    'id' => $newUserId,
    'name' => $userName,
    'email' => $email,
    'purchases' => [
      ['item' => $item, 'price' => $price] // Use an array for purchases
    ],
  ];

  // Append the new user to the users array
  $userData["users"][] = $newUser;

  // Save updated data back to the file
  file_put_contents($file, json_encode($userData, JSON_PRETTY_PRINT));

  return json_encode($newUser, JSON_PRETTY_PRINT);
}

// Correct function call with $userData passed
$addUser = addUserAndPurchase($userData, "Alice", "Alice@gmail.com", "phone", 4.99);
echo $addUser;
