<!-- Gamik Singh Budhathoki  8762447-->
<!-- Anushka Mahalekamge  8768260-->
<!-- Avleen kaur  8726146-->

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// database connection code
if(isset($_POST['txtName']))
{
	$con = mysqli_connect('127.0.0.1', 'root', '','db_project');

// get the post records

$Name = $_POST['txtName'];
$Price = $_POST['txtPrice'];
$Quantity = $_POST['txtQuantity'];
$Brand = $_POST['txtBrand'];
$desc = $_POST['txtDesc'];
$date = date("Y-m-d"); 

$aa = array("I" , date("ymd"));
$id = uniqid(implode($aa)); 

// database insert SQL code

    $sql = "INSERT INTO items (`i_id`,`i_name`, `i_price`, `i_quantity`, `brand_name`,`i_description`, `i_added_date`) 
    VALUES ('$id','$Name','$Price','$Quantity','$Brand','$desc','$date')";
    $rs = mysqli_query($con, $sql);
    if($rs){
	echo "item Inserted";
    }

}
else
{
	echo "Something's Wrong Try again";
	
}
