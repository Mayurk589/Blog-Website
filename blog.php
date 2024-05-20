<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="blog";
$conn=mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}
if(isset($_POST['save']))
{	
	 $imageurl=$_POST['imageurl'];
	 $title=$_POST['title'];
	 $type=$_POST['type'];
	 $description=$_POST['description'];

	 $sql_query = "INSERT INTO user (imageurl,title,type,description)
	 VALUES ('$imageurl','$title','$type','$description')";

	 if (mysqli_query($conn, $sql_query)) 
     {
		echo "Thank you for Registration ";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>