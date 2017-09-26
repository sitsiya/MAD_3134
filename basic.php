<html>
<head>
<meta charset = "UTF-8">
<title>First Page</title>

</head>
<body>
<h1>"Hello PHP"</h1>
<?php 
/*echo "This is my php form...<br><br>";
$x = "Chaitali Patel";
$y = 24;
echo "I " .$x . "'s age is ".$y;
echo "<br>";

function myfunction(){
	static $w = 20;
    $r = 10;
	echo "values of w and r is<br>";
	echo "w=" .$w ."<br>"."r=".$r;
	
}
myfunction();*/
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

print "<h2>" . $txt1 . "</h2>";
print "Study PHP at " . $txt2 . "<br>";
print $x + $y;
print  "<br>";
$myArray = array("Chaitali","Shreyas","Nidhi","Nishit");
for ($j=0;$j<4;$j++){
	echo '$myArray['.$j . ']='.$myArray[$j] ."<br>";
}
define("GREETING", "Welcome to W3Schools.com!",true);

function myTest() {
    echo greeting;
    echo "<br>";
}
 
myTest();
$age = array("Chaku"=>"35", "Dolly"=>"37", "Chiku"=>"43");

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );
  
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

$numbers = array(4, 6, 2, 22, 11);
sort($numbers);

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
    echo $numbers[$x];
    echo "<br>";
}

?>
</body>

</html>

