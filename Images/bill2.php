<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("cloth");

class item
  {
    public $productname;
    public $quantity;
    public $price;
 }
?>


<html>
<head>
</head>
<body background="http://localhost/www/program/images/re.jpg">
<form method="POST" action="confirm.php">
<div>
<img src="http://localhost/www/program/images/brandhub.jpg" height="80" width="150">

<b><i><u><font face="SERIF" size="10" color="magenda">BRANDHUB SHOP</b></u></i></font><br> 
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
&nbsp &nbsp

<h1><font size="5"color="black">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 

<input type="submit" name="t1" value="logout">
</h1>
</font> 
</div>

<div id="header1">
<h2> 
 <a href="home.html">Home</a> &nbsp &nbsp &nbsp 
 <a href="mens.php">Mens</a></font> &nbsp &nbsp &nbsp |
 <a href="womens.html">Womens </a>&nbsp &nbsp &nbsp|
 <a href="kids.php">Baby & Kids</a>&nbsp &nbsp &nbsp|
</h2>
</div>
 
<div id="section" >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="8" color="darkviolet">BILL</font>

<?php 

$aa=mysql_connect("localhost","root","") or die(mysql_error());

$bb=mysql_select_db("cloth") or die(mysql_error());

$s="select * from cart1;";
$a= mysql_query($s);
$z=mysql_num_rows($a);

$ss="select * from reg;";
$aa= mysql_query($ss);
$zz=mysql_num_rows($aa);
$i=0;

$j="select first_name,last_name,addr,mno from reg where c_no=$zz;";
$ccc= mysql_query($j);
$i1=0;

echo "<center>";
echo "<br>";
$e=1;

while($i1<$e)
{
    echo"<tr>";
    echo "<td>Name :  ". mysql_result($ccc,$i1,'first_name').  "</td>";

    echo"\t";
    echo "<td>".mysql_result($ccc,$i1,'last_name')."</td>" ;

    echo "<br>";
    echo "<td>Address :  ". mysql_result($ccc,$i1,'addr')."</td>"; 

    echo "<br>";
    echo "<td>Mobileno :  ". mysql_result($ccc,$i1,'mno')."</td>"; 

    echo "<br>";
    $i1++;
    echo"</tr>";
}
echo "</center>";

    print "<table  align=center  border=2>";
    print "<tr>";
    print "<th> srno </th>";
	print "<th> productname </th>";
    print "<th> price</th>";
    print "<th> quantity </th>";
    print "<th> total </th>";
    print "</tr>";
	
$i=0;
$p=0;
while($i<$z)
{
 print "<tr>";
      echo "<td>". mysql_result($a,$i,'sr_no')."</td>";
	  echo "<td>". mysql_result($a,$i,'productname')."</td>"; 
      echo  "<td>".mysql_result($a,$i,'price')."</td>" ;
      echo  "<td>".mysql_result($a,$i,'quantity')."</td>" ;
	  echo  "<td>".$p=$p+mysql_result($a,$i,'price')*mysql_result($a,$i,'quantity')."</td>" ;
      print "</tr>";
 $i++;
}
 
echo  "<td>total= ".$p."</td>";
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

<div id="footer">
<font face="SERIF" size="6" color="black">
<a href="feedback.php">Feedback</a><br><br>
</font>
</div>

<style>
#header
 {
    background: url("C:\Users\user\Downloads") 
    repeat-x top left; 

    #background-color:black;
    line-height:1px;
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
    background-color:lightgrey;
    line-height:5px;
    color:white;
    text-align:center;
    padding:5px;
}

#nav
 {
    line-height:50px;
    background-color:darkgray;
    height:700px;
    width:130px;
    color:white;
    float:left;
    padding:1px; 
}

#section 
{
    height:600px;
    width:700px;
    float:middle;
    padding:10px; 
}

#footer
 {
    background-color:lightgrey;
    height:59sspx;
    width:100%;
    color:white;
    clear:both;
    text-align:center;
    padding:10px; 
}
}
</style>
</form> 
</body>
</html>