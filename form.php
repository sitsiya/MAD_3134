<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>First Page</title>
<style>
.error {color: #FF0000;}
</style>
</head>  
<body>
<?php
session_start();
?>


<?php 
$_SESSION["name"] = "Chaitali";
$_SESSION["favcolor"] = "blue";
echo "Sesstion are set.<br>";

?>
<?php
$errName = $errAddress = $errEmail = $errProfile = $errNews = $rdo1Checked = $rdo2Checked = $rdo3Checked = "";
$Name = $Address = $Email = $Profile = $News = $errTech = "";
$tech = array();
if($_SERVER["REQUEST_METHOD"] == "POST"){
	//Name
	if(isset($_POST["name"])){
		
		if(!preg_match("/^[a-zA-Z ]*$/",$_POST["name"])){
			$errName = "Only Letters and Space";
		}else{
		$Name = $_POST["name"];
	}

	}
	if(empty($_POST["name"])){
		$errName = "Please Enter Your Name";
	}
	//Address
	if(isset($_POST["address"])){
	if(!preg_match("/^[a-zA-Z0-9 ]*$/",$_POST["address"])){
			$errAddress = "Only Letters and Space and numbers";
		}else{
		$Address = $_POST["address"];
	}
}
	if(empty($_POST["address"])){
		$errAddress = "Please Enter Your Address";
	}
	//Email
	if(isset($_POST["email"])){
	if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
			$errEmail = "Invalid Format";
		}
		 else {
		$Email = $_POST["email"];
	}
}
	if(empty($_POST["email"])){
		$errEmail = "Please Enter Your Email";
	}                                         
	//Profile
	
	if(isset($_POST["linkdin"])){
	$Profile = $_POST["linkdin"];
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$_POST["linkdin"])){
      $errProfile="Invalid Profile";                           
    }                                                                 
	}
	if(empty($_POST["linkdin"])){
		$errProfile = "Please Enter Your Linkdin URL";  
	}
	//tech
	if(isset($_POST["tech"])){
		$tech = $_POST["tech"];
		
	}else 
	{
		$errTech = "Select one Technology";
	}
	//News
	if(isset($_POST["frequent"])){
		if($_POST["frequent"]=="Weekly"){
			$rdo1Checked = "Checked";
		}
	else if($_POST["frequent"]=="Monthly"){
			$rdo2Checked = "Checked";
		}
	else if($_POST["frequent"]=="Yearly"){
			$rdo3Checked = "Checked";
		}
	}
	else{
		 $errNews = "Please Check One Radio Button";
	
	}
}

?>


<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<label for="name">Name:</label>
<input type="text" name="name" placeholder="Enter Name" value="<?php echo htmlspecialchars($Name);?>">
<span class="error"><?php echo $errName;?></span><br><br>
<label for="address">Address:</lable> 
<textarea type="text" name="address" rows="10" cols="25" value="<?php echo htmlspecialchars($Address);?>"></textarea>
<span class="error"><?php echo $errAddress;?></span><br><br>
<label for="email">Email:</lable>
<input type="text" name="email" placeholder="Enter Email" value="<?php echo htmlspecialchars($Email);?>">
<span class="error"><?php echo $errEmail;?></span><br><br>
<label for="">LinkdIn Profile:</lable>
<input type="text" name="linkdin" placeholder="Enter LinkdIn Profile" value="<?php echo htmlspecialchars($Profile);?>">
<span class="error"><?php echo $errProfile;?></span><br><br>
Which technology are you interested in?<br><br>
<select name="tech[]" size=5>
<?php 
$techList = array("PHP","Java","Android","iOS","Shell Scripting");
$cnt = count($techList);
for ($i=0;$i<$cnt;$i++){
	echo '<option value"'.$techList[$i].'"';
 if(in_array($techList[$i],$tech)){
 echo "Selected";

}
echo '>' .$techList[$i]. '</option>';
}
?>


</select><br><br>
<span class="error"><?php echo $errTech;?></span><br><br>

<input type="checkbox" name="newsletters">
Would you like to subscribe our newsletters?<br>
<br>

How frequent do you want to receive the newsletters?<br>
<input type="radio" name="frequent" value="Weekly" <?php echo htmlspecialchars($rdo1Checked);?>>Weekly<br>
<input type="radio" name="frequent" value="Monthly" <?php echo htmlspecialchars($rdo2Checked);?>>Monthly<br>
<input type="radio" name="frequent" value="Yearly" <?php echo htmlspecialchars($rdo3Checked);?>>Yearly<br><br>
<span class="error"><?php echo $errNews;?></span><br>
<input type="submit">
</form>

</body>
</html>




















