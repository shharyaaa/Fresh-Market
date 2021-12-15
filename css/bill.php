<?php
session_start();
$conn=pg_connect("host=192.168.16.1 user=AG20 dbname=AG20") or die("Couldn't Connect");
class item
  {
    public $productname;
    public $quantity;
    public $price;
 }
?>


<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style_home.css">
</head>

<h1>

</h1>
</font> 
</div>

<div class="menu">
	<a href ="home.html" class="brand"><img src="logo.jpg"></a>
	<nav>
		<ul>
			<li><a href="home2.php">Home</a></li>
	     		<li><a href="vegetables.php">Vegetables</a></li>
			<li><a href="fruits.php">Fruits</a></li>
			<li><a href="seeds.php">Seeds</a></li>
	   		<li><a href="about.html">ABOUT US</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</nav>
</div>
 <section>
<div id="section" >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="8" color="darkviolet">BILL</font>

<?php 

$aa=pg_connect("host=192.168.16.1 user=AG20 dbname=AG20") or die("Couldn't Connect");



$s="select * from cart1;";
$a= pg_query($s);
$z=pg_num_rows($a);


$i=0;



echo "<center>";
echo "<br>";
$e=1;

echo "</center>";

    print "<table  align=center  border=2>";
    print "<tr>";
    print "<th> Sr.No </th>";
	print "<th> Product Name </th>";
    print "<th> Price</th>";
    print "<th> Quantity </th>";
    print "<th> Total </th>";
    print "</tr>";
	
$i=0;
$p=0;
while($i<$z)
{
 print "<tr>";
      echo "<td>". pg_result($a,$i,'sr_no')."</td>";
	  echo "<td>". pg_result($a,$i,'productname')."</td>"; 
      echo  "<td>".pg_result($a,$i,'price')."</td>" ;
      echo  "<td>".pg_result($a,$i,'quantity')."</td>" ;
		$t=$t+pg_result($a,$i,'price')*pg_result($a,$i,'quantity');
	  echo  "<td>".$p=pg_result($a,$i,'price')*pg_result($a,$i,'quantity')."</td>" ;
      print "</tr>";
 $i++;
}
 
echo  "<td>Total= ".$t."</td>";
echo "</table>";
?>

<p>
</font>
</p>
</div>
</font>
<br>
<h1></h1>
<p>
<br>
</p>



<div class="btn-grp">
<a href="confirm.php"><input type="button" value="Ok"></a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp



</div>

<div id="footer">
<font face="SERIF" size="6" color="black">
<a href="feedback.php">Feedback</a><br><br>
</font>
</div>
</section>
  <style>
  
#header 
{
    background: url("a1.jpg") 
    repeat-x top left; 

    #background-color:black;
    line-height:50px;
    color:white;
    text-align:center;
    padding:5px;
}

#l
{
   padding:50px;
   margine:left;
}

#header1
 {
    background-color:pink;
    line-height:5px;
    color:white;
    text-align:center;
    padding:5px;
}

#section 
{
    height:350px;
    width:800px;
    float:left;
    padding:10px; 
}

#footer 
{
    background-color:lightgrey;
    height:70px;
    width:100%;
    color:white;
    clear:both;
    text-align:center;
    padding:10px;
	margin-top:100px;
}

.btn-grp
{
	margin-top:300px;
}

</style> 
</body>
</html> 
