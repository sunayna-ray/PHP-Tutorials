<html>
<head>
<title>PHP Tutorials</title>
<link href="bootstrap.min.css" rel="stylesheet">
<style>
#navlist{
	font-size: 25;
	height: 40px;
	width: 100%;
	background: rgba(159, 159, 159, 0.1);
}
#navlist a{
	color: rgb(30, 30, 30);
	text-decoration: none;
}
#navlist ul li{
	list-style: none;
	display: inline;
	height: 40px;
	margin: 45px;
    overflow: hidden;
}
#active{
	height: 45px;
	width: 100%;
	background: rgba(159, 159, 159, 0.2);
}
body{
	background: rgba(238, 238, 238, 0);
}
h1{
	color: black;
	text-align: center;
	font-size: 40;
	font-family: Georgia, serif;
}
h2, h3, p, legend{
	text-align:center;
	color: rgb(40, 40, 40);
	font-size: 30px;
	text-decoration: underline;
   }
</style>
</head>
<body>
<h1>PHP Tutorials</h1>
<div id=navlist><ul>
<li id=active><a href="index.php">Basic</a></li>
<li><a href="array.php">Array</a></li>
<li><a href="cookie.php">Cookie</a></li>
</ul></div><br/>
<div class="container-fluid">
<div class="jumbotron col-sm-6">
<h2>define(name, value, boolean Case_Sensitivity) Function</h2><pre>
Third parameter is optional.

Define constants. Constants are like variables but:
1) Values can be changed
2) Dont neeed $ sign before them. Reffered using "constant(gxsuzbjxh)"
3) Can be accessed from all scopes
4) Value can only be string or numbers
</pre>
<?php

define("Ray", "Sunayna");
$abc="Ray";
echo "Ray"."<br/>";
echo $abc."<br/>";
echo constant("Ray")."<br/>";
echo constant($abc);

?>
</div>

<div class="jumbotron col-sm-6">

<h2>Operators</h2><pre>
1) <U>Assignment:</U> =, += etc
2) <U>Arithmatic</U>
3) <U>Comparison:</U> 
== (5=="5.0"), === (5!="5.0")
<, >, <=, >=
4) <U>Logical:</U> In ascending prcedence order:
AND, OR, NOT, XOR, &&, || (Higher precedence executed first)
5) <U>String:</U> Concatenation: use '.'
Difference between '', ""
</pre>
<?php
if (5=="5.0")echo "Yes <br/>";
else echo "No <br/>";

if (5==="5.0")echo "Yes <br/>";
else echo "No <br/>";

$name="Sunayna"; $age=20;
echo '$name is $age'.'<br/>';
echo "$name is $age";
?>
</div>

</div>
</body>

<div class="jumbotron col-sm-6">
<h2>settype(Variable name, "new type")</h2><pre>
Return type is boolean not the changed value. 
The changed value is stored in the variable.
<U>TYPE</U>
Possibles values of type are:   
◦  "integer" or "int"  
◦  "float" or "double"  
◦  "string"   
◦  "null"   
◦  "array"
◦  "object" 
◦  "boolean" or "bool"
</pre>
<?php
$a1 = "5bar"; // string
$a2=1;
$a3=1;
$a4=1;
$a5=1;
$bar = true;   // boolean
$bar1 = true;

settype($a1, "integer"); // $a1 is now 5   (integer)
settype($a2, "float");
settype($a3, "string");
settype($bar, "string");  // $bar is now "1" (string)
settype($a4, "null");
settype($bar1, "array");
settype($a3, "object"); //gives error: Catchable fatal error: Object of class stdClass could not be converted to string.

echo "$a1 <br/> $a2 <br/> $bar <br/> $a4 <br/>";
print_r($bar1);

echo "<br/>----------------------------------------------<br/>";

//Note that you can't use this to convert a string 'true' or 'false' to a boolean variable true or false
// as a string 'false' is a boolean true. The empty string would be false instead...

$var = "true";
settype($var, 'bool');
echo $var."<br/>"; // true

$var = "false";
settype($var, 'bool');
echo $var."<br/>"; // true as well!

$var = "";
settype($var, 'bool');
settype($var, 'integer');
echo $var; // false
?> 

</div>

<div class="jumbotron col-sm-6">
<h2>gettype(Variable name)</h2><pre>
Return value is the type. And return type is string.
<U>RETURN VALUES</U>
Possible values for the returned string are: 
◦  "boolean"  
◦  "integer"  
◦  "double"   
◦  "string"  
◦  "array" 
◦  "NULL"  
◦  "object" 
◦  "unknown type" 

(for historical reasons "double" is returned in case of a float, and not simply "float")

</pre>
<?php
$arr= array(1, 2, 3);
$data = array(true, 1, 1.,"1", $arr, NULL, new stdClass);

foreach ($data as $value) {
    echo gettype($value)."<br/>";
}
?> 
</div>

<div class="jumbotron col-sm-6">
<h2>Note</h2><pre>
<u>Comment line:</u> // or /*   */
<u>Output: </u>
echo ----; --->statement
print(---); --->method
<u>Statements: </u>
1) I/O
2) Decision making and branching: if-else, switch(case)
3) Decison making and looping: for, while, do while, foreach
SEE PPT 5 SLIDES 28 - 36 IMPORTANT
She will ask why we chose a particular decision making statement 
</pre></div>

<div class="jumbotron col-sm-6">ABC</div>
</div></body>
</html>