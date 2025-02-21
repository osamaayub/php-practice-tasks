<?php


function getUserData($file="users.json"){
  //if the file exists then convert the data into object;
  if(file_exists($file)){ 
    //read content from the file
    $jsonData=file_get_contents($file);
    return json_decode($jsonData,true);
    
  }
   //if file doesnot exist return null;
  else {
    return null;
  }
}


//get User information and store in variable userData
 $userData=getUserData(); 

 

if($userData){
  foreach($userData["users"] as $user){
     echo "Name:".$user["name"]. ","."Email:".$user["email"]."<br>";
  }
}

?>