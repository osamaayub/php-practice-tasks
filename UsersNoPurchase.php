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

function findUserWithNoPurchase($userData){
  $result=[];
  foreach($userData["users"]as $user){
      //if user has no purchase then add the person into the result array
      if(empty($user["purchases"])){
        $result[]=$user["name"];
      }
    }
   return  $result;
}
if($userData){
  echo "Users with No Purchase: " .implode(findUserWithNoPurchase($userData));
}
else{
  echo "No User found";
}


?>