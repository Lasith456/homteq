<?php
include("db.php");
session_start();
$total=0;
$pagename="Smart Basket"; //Create and populate a variable called $pagename 
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>";
echo "<body>";
include ("headfile.html");
echo "<h4>".$pagename."</h4>";
//display name of the page as window title
//include header layout file
//display name of the page on the web page
//display random text
if(isset($_POST['h_prodid'])){
    //capture the ID of selected product using the POST method and the $_POST superglobal variable 
    //and store it in a new local variable called $newprodid
    $newprodid=$_POST['h_prodid'];

    //capture the required quantity of selected product using the POST method and $_POST superglobal variable 
    //and store it in a new local variable called $reququantity
    $reququantity=$_POST["p_quantity"];
    $_SESSION['basket'][$newprodid]=$reququantity;
    echo "<p>1 item added";

    //Display id of selected product 
    //Display quantity of selected product
    echo "<p>ID of selected product:".$newprodid."</p>";
    echo "<p>Quantity of selected product:".$reququantity."</p>";
}
else {
    echo "<p>Basket unchanged</P>";
}
if(isset($_SESSION['basket'])){
    echo "<table style='border: 1px'>";
echo "<tr>";
echo "<th> product name </th>";
echo "<th> product price </th>";
echo "<th> Selected quantity </th>";
echo "<th> Sub Total </th>";
echo "</tr>";
foreach($_SESSION['basket'] as $index => $value){
    $SQL="select prodId, prodName, prodPrice from product where prodId=".$index;
    $exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error($conn));
    $arrayprod=mysqli_fetch_array($exeSQL);
    echo "<tr>";
    echo "<td>";
    echo "<p>".$arrayprod['prodName']."</p>"; 
    echo "</td>";
    echo "<td>";
    echo "<p>".$arrayprod['prodPrice']."</p>"; 
    echo "</td>";
    echo "<td>";
    echo "<p>".$value."</p>"; 
    echo "</td>";
    echo "<td>";
    $subtotal=$value*$arrayprod['prodPrice'];
    $total=$subtotal+$total;
    echo "<p>".$subtotal."</p>"; 
    echo "</td>";
}
echo "<tr>";
echo "<td colspan='3'>Toatal</td>";
echo "<td>";
echo "<p>".$total."</p>"; 
echo "</td>";
echo "</table>";

}
else{
echo "Basket is empty";
}


include("footfile.html"); //include head layout
echo "</body>";
?>