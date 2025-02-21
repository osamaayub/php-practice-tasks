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

//find the maximum spending and along with the user name
function TopSender($userData){
 $maxSpent=0;
  $username = null;
  foreach ($userData["users"] as $user) {
      $totalSpent = 0;
      foreach ($user["purchases"] as $purchase) {
        $totalSpent += $purchase["price"];
      }
      //check the maximum spending
      if($totalSpent>$maxSpent){
        $maxSpent=$totalSpent;
        $username=$user["name"];
        
      }
    }
  return $username." "."Amount is"." ".$maxSpent;
    
}
if($userData){
  echo "Top Sender:"." " .TopSender($userData);
}
else{
 echo "No spending Found";
}




?>