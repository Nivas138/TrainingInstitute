<?php

$F_NAME="";
	$F_NAME=$_POST["fname"];
	$EMAIL_ID  =$_POST["EMAIL-ID"];
	$MOBILE    =$_POST["MOBILE"];
	$FLAT_NO   =$_POST["FLAT_NO"];
	$STREET    =$_POST["STREET"];
	$LOCAL_AREA=$_POST["LOCAL_AREA"];
	$CITY      =$_POST["CITY"];
	$DISTRICT  =$_POST["DISTRICT"];
	$ZIPCODE   =$_POST["ZIPCODE"];
	$ED_QUALIFICATION =$_POST["ED_QUALIFICATION"];
	$DEPARTMENT =$_POST["DEPARTMENT"];
	$COURSE =$_POST["COURSE"];
	$L_NAME    =$_POST["LASTNAME"];

$dbhost='localhost';
$user='root';
$pwd='';
$db='employee';

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
$q="Insert into employee_details(FIRST_NAME,LAST_NAME,EMAIL_ID,MOBILE,ED_QUALIFICATION,SELECTED_DEPARTMENT,COURSE)values('$F_NAME','$L_NAME','$EMAIL_ID','$MOBILE','$ED_QUALIFICATION','$DEPARTMENT','$COURSE')";
$q1="Insert into EMPLOYEE_ADDRESS(FLAT_NO,STREET,LOCAL_AREA,CITY_NAME,DISTRICT,ZIP_CODE)values('$FLAT_NO','$STREET','$LOCAL_AREA','$CITY','$DISTRICT','$ZIPCODE')";
if($conn->query($q)===True && $conn->query($q1)===True)
{
	echo"\nRecord added";
}
else{
echo "\nInsertion failed";
}

$conn->close();
?>
