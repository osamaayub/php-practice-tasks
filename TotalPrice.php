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


function getUserTotalSpent($userData,$userId){
 $totalPrice=0;
  foreach($userData["users"] as $user){
    //check if the user id match then calculate price
    if($user["id"]===$userId){
       $totalPrice=0;
       foreach($user["purchases"] as $purchase){
         $totalPrice+=$purchase["price"];
       }
    }
  }
  return $totalPrice;
}
if($userData){
  echo "Total Amount Spent By the User is:".getUserTotalSpent($userData,1);
}
else{
  echo "No Amount Spent";
}






?>