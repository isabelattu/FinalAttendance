<?php
	$code =(rand(10,100000));
	
     /* $url = "http://api.smsgh.com/v3/messages/send?"
    . "From=IWOZHIERSOM"
    . "&To=%2B233547882821"
    . "&Content=Registration%2C+Confirmed.Your_Secret_code_and_password_for_login:$code"
    . "&ClientId=odfbifrp"
    . "&ClientSecret=rktegnml"
    . "&RegisteredDelivery=true";
 // Fire the request and wait for the response
 $response = file_get_contents($url) ;
 var_dump($response);   	
*/	 

	
	include_once("vid2.php");
	//$query="insert into customer_table set name='$name', number=$number, 
			//booking_time='$booking_time', task='$task', attendant = $attendant, address = $address";
	//$query = "SELECT * FROM customer_table";
	$cmd = $_REQUEST['cmd'];
	
	if($cmd==1){
	$name = $_REQUEST['name'];
	$number = $_REQUEST['number'];
	$email = $_REQUEST['email'];
	$organisation = $_REQUEST['organisation'];
    $code =(rand(10,100000));
	//$code =$_REQUEST['code'];

	
	mysql_query("INSERT INTO person(`pid`,`name`,`number`,`email`,`organisation`,`code`,`attendance_status`) VALUES(Null,'$name',$number,'$email','$organisation',$code)")
		or die(mysql_error());
		
		echo "User has been added!";
		}
		
	if($cmd==2){
       $result =  mysql_query("SELECT * FROM meetings")
		or die(mysql_error());
		
		$meeting = mysql_fetch_array($result);
		$data = array();
	  if(!$meeting){
	  echo '{"result":0, "message":"Details not found"}';
	  return;
	  }
	  
	  while($meeting){
	  $data['event'][]=$meeting;
	  $meeting = mysql_fetch_array($result);
		}
		echo json_encode($data);
		}

	if($cmd==3){
$code = $_REQUEST['code'];

if(!$code){
	echo "	please insert your registration code";
}
$result = mysql_query("UPDATE person
SET attendance_status= '1' WHERE code=$code");
	echo "marked Present!";
	}	
		
		
		


	
		
	/*$result = mysql_query($query2);	
	while($person = mysql_fetch_array($result)){
		echo"<h3>". $person['name'] . "</h3>";
		echo"<h3>". $person['number'] . "</h3>"; 
		echo"<h3>". $person['booking_time'] . "</h3>";
		echo"<h3>". $person['task'] . "</h3>";
		echo"<h3>". $person['attendant'] . "</h3>";
		echo"<h3>". $person['address'] . "</h3>";
	
	}*/
	?>