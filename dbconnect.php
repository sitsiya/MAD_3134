<?php
$servername = "localhost";
$username= "root";
$password = "";
// Create connection
$conn = new mysqli($servername,$username,$password);
if($conn->connect_error){
	die("Connection Failed:" . $conn -> connect_error);
}else {
	echo "Connection successfully"; 
}
//Create database
//$sql = "CREATE DATABASE Pay_Roll";
 $sql = "USE Pay_Roll";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully.<br>";
    /*$sql = "CREATE TABLE Employee_Master ("
	."empid INT(6) AUTO_INCREMENT PRIMARY KEY,". 
	"name VARCHAR(30) NOT NULL,".
	"geder VARCHAR(6) NOT NULL,".
	"bdate DATE NOT NULL,".
	"address VARCHAR(40) NOT NULL,".
	"city VARCHAR(10)NOT NULL,".
	"age int(2))";
	
	if ($conn->query($sql) === TRUE) {
    echo "Table Employee_Master created successfully"; 
} else {
    echo "Error creating table: " . $conn->error;
}
	*/
	
/*	//$sql = "INSERT INTO Employee_Master (name, geder, bdate,address,city,age) VALUES ('Chaitali', 'female', '1992-11-07','1,Meadowglen Place','Scarborough','24')";
	$sql = "INSERT INTO Employee_Master (name, geder, bdate,address,city,age) VALUES ('chaitali', 'female', '1992-11-07','1,Meadowglen Place','Scarborough','24');";
	$sql .= "INSERT INTO Employee_Master (name, geder, bdate,address,city,age) VALUES ('Shreyas', 'male', '1992-06-22','1,Meadowglen Place','Scarborough','24');";
	$sql .= "INSERT INTO Employee_Master (name, geder, bdate,address,city,age) VALUES ('Nidhi', 'female', '1992-09-01','1,Meadowglen Place','Scarborough','23')";
	
	
	
	
if ($conn->multi_query($sql) === TRUE) {
	$last_id = $conn->insert_id;
    echo "Record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
*/
    $sql = "SELECT * FROM Employee_Master";
    $result = $conn->query($sql);
   echo "<br>Total Record :".mysqli_num_rows($result).".";
   if (mysqli_num_rows($result)>0){
   	echo "<table border=1 <tr><th>Employee ID</th><th>Employee Name</th><th>Employee Gender</th><th>Employee BDate</th><th>Employee Add</th><th>Employee city</th><th>Employee Age</th></tr>";
   	while ($row = mysqli_fetch_row($result)){
   		echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td> ".$row[2]."</td><td> ".$row[3]."</td><td> ".$row[4]."</td><td> ".$row[5]."</td><td> ".$row[6]."</td></tr>";
   	}
   	echo "</table>";
   }
    
} else {
    echo "Error creating database: " . $conn->error;
}
/*
$stmt = $conn->prepare("INSERT INTO Employee_Master (name, geder, bdate,address,city,age) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssi", $name,$geder,$bdate,$address,$city,$age);

// set parameters and execute
$name="Damini";
$geder="female";
$bdate="1990-12-04";
$address="1,fhihsdirghvgheffd";
$city="Scarborough";
$age="23";
$stmt->execute();

$name="Maina";
$geder="female";
$bdate="1990-12-04";
$address="1,fhihsdirghvgheffd";
$city="Scarborough";
$age="23";
$stmt->execute();

$name="Shweta";
$geder="female";
$bdate="1990-12-04";
$address="1,fhihsdirghvgheffd";
$city="Scarborough";
$age="23";
$stmt->execute();

$name="Neha";
$geder="female";
$bdate="1990-12-04";
$address="1,fhihsdirghvgheffd";
$city="Scarborough";
$age="23";

$stmt->execute();

echo "New records created successfully";

$stmt->close();
*/
$sql = "DELETE FROM Employee_Master WHERE empid>10";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}


$conn->close();
?>