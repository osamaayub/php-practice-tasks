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

//count the total purchases made by the user

 

function countPurchases($userData){
   $count_payments=0;
    foreach($userData["users"] as $user){
      if(!empty($user["purchases"])){
          $count_payments+=count($user["purchases"]);
      }
    }
    return $count_payments;
   }

  if ($userData) {
    echo "Total Purchases" .":" . countPurchases($userData);
  } else {
    echo "No payment Found";
  }
