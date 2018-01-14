<?php
/*error_reporting(0);*/
if(empty($_POST["height"])==true || empty($_POST["weight"])==true){
  echo "please type in all information";
  exit;
}
if(empty($_POST["height"])!=true){
  echo "height:".$_POST["height"]."<br>";
  echo "weight:".$_POST["weight"]."<br>";
  echo "BMI:".($_POST["weight"]/($_POST["height"]*$_POST["height"]))."<br>";
}
if($_FILES["file"]["type"]=="image/jpeg"||$_FILES["file"]["type"]=="image/png"||$_FILES["file"]["type"]=="image/jpg"){
    $filename = $_FILES["file"]["name"];
    move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$filename);
    echo '<img src="upload/'.$filename.'"/>';
  }
  else if(empty($_FILES["file"]["name"])==true){
    echo "empty";
  exit;
}
  else if($_FILES["file"]["type"]!="image/jpeg"||$_FILES["file"]["type"]!="image/png"||$_FILES["file"]["type"]!="image/jpg"){
  echo "wrong file type.";
  }
?>