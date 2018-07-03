<?php

	$F_NAME="";
	$L_NAME="";
	$F_NAME=$_POST["fname"];
	$L_NAME    =$_POST["LASTNAME"];
	$EMAIL_ID  =$_POST["EMAIL-ID"];
	$MOBILE    =$_POST["MOBILE"];
	$FLAT_NO   =$_POST["FLAT_NO"];
	$STREET    =$_POST["STREET"];
	$LOCAL_AREA=$_POST["LOCAL_AREA"];
	$CITY      =$_POST["CITY"];
	$DISTRICT  =$_POST["DISTRICT"];
	$ZIPCODE   =$_POST["ZIPCODE"];
	$ED_QUALIFICATION =$_POST["ED_QUALIFICATION"];
	$COURSE =$_POST["COURSE"];
	

$dbhost='localhost';
$user='root';
$pwd='';
$db='student';

$conn=new mysqli($dbhost,$user,$pwd,$db);
if(!$conn)
{
	echo "\nConnection failure";
}
else
{
	echo "Connection successful\n";
	echo $F_NAME;
}
$q="Insert into student_details(FIRST_NAME,LAST_NAME,EMAIL_ID,MOBILE,ED_QUALIFICATION,COURSE)values('$F_NAME','$L_NAME','$EMAIL_ID','$MOBILE','$ED_QUALIFICATION','$COURSE')";
$q1="Insert into student_address(FLAT_NO,STREET,LOCAL_AREA,CITY_NAME,DISTRICT,ZIP_CODE)values('$FLAT_NO','$STREET','$LOCAL_AREA','$CITY','$DISTRICT','$ZIPCODE')";
if($conn->query($q)===True && $conn->query($q1)===True)
{
	echo"\nRecord added";
}
else{
echo "\nInsertion failed";
}

$conn->close();
?>
