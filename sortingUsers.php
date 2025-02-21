<?php


function getUserData($file = "users.json")
{
  //if the file exists then convert the data into object;
  if (file_exists($file)) {
    //read content from the file
    $jsonData = file_get_contents($file);
    return json_decode($jsonData, true);
  }
  //if file doesnot exist return null;
  else {
    return null;
  }
}


//get User information and store in variable userData
$userData = getUserData();


function sortUsersbySpending($userData)
{
  $spendingAmount = [];
  foreach ($userData["users"] as $user) {
    $totalAmount = 0;
    foreach ($user["purchases"] as $purchase) {
      $totalAmount += $purchase["price"];
    }
    $spendingAmount[$user["name"]] = $totalAmount;
  }
  //sort the amount according to the spending
  arsort($spendingAmount);

  //display the sorted
  foreach ($spendingAmount as $name => $amount) {
    echo $name . " " . " " . "spent:" . " " . $amount . " " . "<br>";
  }
}

if ($userData) {
  echo sortUsersbySpending($userData);
} else {
  echo "No Amount is found";
}
