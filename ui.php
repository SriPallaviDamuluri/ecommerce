<?php
$servername = "localhost";
$username = "root";
$password = " ";

$conn = mysql_connect($servername, $username, $password);



if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}
echo "Connected successfully";
mysql_select_db("ecom",$conn);



$sql=" Insert into productdata(Product Name,Price,Category,Quantity,Purchase Date,Expiry Date)
values ('$_POST[pn]','.$_POST["price"]."','".$_POST["cat"]."','".$_POST["quant"]."','".$_POST["pd"]."','".$_POST["ed"]."');
 if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>


