<!-- Gamik Singh Budhathoki  8762447-->
<!-- Anushka Mahalekamge  8768260-->
<!-- Avleen kaur  8726146-->

<?php
// database connection code
if(isset($_POST['txtName']))
{
	$con = mysqli_connect('127.0.0.1', 'root', '','db_project');

// get the post records

$Name = $_POST['txtName'];
$Address = $_POST['txtAddress'];
$Email = $_POST['txtEmail'];
$Phone = $_POST['txtPhone'];
$date = date("Y-m-d");

$aa = array("C" , date("ymd"));
$id = uniqid(implode($aa)); 


// database insert SQL code
$sql = "INSERT INTO customers (`c_id`, `c_name`, `c_address`, `c_email`, `c_phone`, `c_joined_date`) VALUES ('$id','$Name','$Address','$Email','$Phone','$date')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Customer Record  Inserted";
}
}
else
{
	echo "Something's Wrong Try again";
	
}
?>
