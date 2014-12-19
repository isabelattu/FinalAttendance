<?php
	include_once("vid2.php");
	//$query="insert into customer_table set name='$name', number=$number, 
			//booking_time='$booking_time', task='$task', attendant = $attendant, address = $address";
	$query = "SELECT * FROM person";
	
	$result = mysql_query($query);	
	while($person = mysql_fetch_array($result)){
		echo"<h3>". $person['name'] . "</h3>";
		echo"<h3>". $person['number'] . "</h3>"; 
		echo"<h3>". $person['email'] . "</h3>";
		echo"<h3>". $person['organisation'] . "</h3>";
		echo"<h3>". $person['code'] . "</h3>";
}
?>