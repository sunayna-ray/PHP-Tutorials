<html><head><link href="bootstrap.min.css" rel="stylesheet"></head><body><div class="container-fluid">

<?php
echo "<h1><u>Creation</u></h1>";
echo "<h2>(1)</h2>";
$numbers=array(1, "Hi", false, 1);
print_r($numbers);
echo "<h2>(2)</h2>";
$numbers1=array("key1"=>1, "Hi", false, "second 1");
print_r($numbers1);
echo "<h2>(3) Explicit Key</h2>";
$num[1]=5;
$num[10]=6;
$num["b"]=7;
$num["a"]=8;
$num[]=8;//implicit
print_r($num);
echo "<h2>(4) Implicit key</h2>";
$num1[]=5;
$num1[]=6;
$num1[]=7;
$num1[]=8;
print_r($num1);
echo "<h2>(5)Multidimensional</h2>";
$multi[]=$num;
$multi[]=$num1;
print_r($multi);
echo "<br/>";
foreach ($multi as $x){
	foreach ($x as $y){
		echo $y." ";
	}
}


echo"<br/>";
for ($i=0; $i<4;$i++){
echo "-----------------------------------------------------------------------";}
echo "<br/>";



echo "<h1><u>Functions</u></h1>";
echo "<h2>(1)array_combine(a1,a2)</h2>";
$func1=array_combine($numbers,$numbers1);
print_r($func1);
echo "<br/>If no of elements is not equal gives error<br/>";

echo "<h2>(2)array_count_values(a1)</h2> Can count only string and int values<br/>";
$func2=array_count_values($num);
print_r($func2);

echo "<h2>(3)array_fill(start,number, va1)</h2> Empties the array first<br/>";
$func2=array_fill(-1, 3, 1);
print_r($func2);

echo "<h2>(4)array_flip(a1)</h2>";
$func4=array_flip($num);
print_r($func4);

echo "<h2>(5)array_key_exists(key,a1)</h2> Returns bool<br/>";
$bool5=array_key_exists(7, $func4);
print_r($bool5);//prints nothing for false and 1 for true

echo "<h2>(6)array_pop(a1)</h2>Deletes last<br/>";
$func6=array_pop($func4);
print_r($func6);echo "          :Returns deleted element<br/> Edits the array: ";
print_r($func4);

echo "<h2>(7)array_shift(a1)</h2>Deletes first and new indexing<br/>";
$func7=array_shift($func4);
print_r($func7);echo "          :Returns deleted element<br/> Edits the array: ";
print_r($func4);

echo "<h2>(8)array_push(a1, val, val...)</h2>Insert in the end<br/>";
$func8=array_push($func4, 0,1,2);
print_r($func8);echo "          :Returns total no of elements<br/> Edits the array: ";
print_r($func4);

echo "<h2>(9)array_unshift(a1 ,val, val...)</h2>Insert at the beginning and new indexing<br/>";
$func9=array_unshift($func4, -2, -1);
print_r($func9);echo "          :Returns total no of elements<br/> Edits the array: ";
print_r($func4);

echo "<h2>(10)array_rand(a1 ,num)</h2>
When num=rand, it returns the key for a random entry. Otherwise, an array of keys for the random entries is returned.<br/>";
$func10=array_rand($func4, 3);
echo "Original array:  ";print_r($func4);echo "<br/>Array of random entries: ";
print_r($func10);

echo "<h2>(11)array_reverse(a1 ,boolean preserve)</h2>Preserve indicates if the key values should be reversed<br/>";
$func11=array_reverse($func4, true);
echo "Original array:  ";print_r($func4);echo "<br/>Default val true: ";
print_r($func11);echo "<br/>val false: ";
print_r(array_reverse($func4, false));

echo "<h2>(12)array_search(val,a1 ,boolean strict)</h2>Returns key of value or NULL, Strict: 5!='5'<br/>";
$arr=array(1=>5,10=>6,'b'=>7,'a'=>'8',11=>8);
$func12=array_search(8, $arr, true);
echo "Original array:  ";print_r($arr); echo "Element at index a is '8'<br/>";
echo "val true: ";
echo ($func12);echo "<br/>Default val false: ";
echo (array_search(8, $arr, false));

echo "<h2>(13)range(start ,end, step)</h2>";
$func13=range(1, 10, 1);
print_r($func13);echo "<br/>";
print_r(range(1, 10, 2));

echo "<h2>(14)is_Array(a1)</h2>Check if array. Return type: bool<br/>";
echo (is_Array($func13));echo "<br/>";//1: true, NULL: false
echo (is_Array($func6));

echo "<h2>(15)array_keys(a1)</h2><br/>";
$func15=array_keys($func11);echo "Original Array:  ";
print_r($func11);echo "<br/>";
print_r($func15);

echo "<h2>(16)array_values(a1)</h2><br/>";
$func16=array_values($func11);echo "Original Array:  ";
print_r($func11);echo "<br/>";
print_r($func16);

echo "<h2>(17)int count(a1 , mode)</h2>Count no of elements. Mode is optional.<br/>";
echo "Mode: 0 ,multi array:        ";echo(count($multi, 0));
echo "<br/>Mode: 1 ,multi array:    ";echo(count($multi, 1));
echo "<br/>Mode: None ,single array: ";echo(count($func16));

echo "<h2>(18)Sizeof(a1)</h2>No of elements<br/>";
echo(Sizeof($func16));


echo"<br/>";
for ($i=0; $i<4;$i++){
echo "-----------------------------------------------------------------------";}
echo "<br/>";


echo "<h1><u>Sorting</u></h1>";
$array=array('a'=>'Dog', 'b'=>'Cat', 'c'=>'Horse');
asort($array);
print_r($array);
?>
<table class="table">
<tr><th>Function</th><th>Key</th><th>Order</th><th>Base</th><th>Output</th></tr>
<tr><th>asort($a)</th><th>Retains</th><th>Asc.</th><th>Value</th><th><?php asort($array);print_r($array);?></th></tr>
<tr><th>arsort($a)</th><th>Retains</th><th>Desc.</th><th>Value</th><th><?php arsort($array);print_r($array);?></th></tr>
<tr><th>sort($a)</th><th>New</th><th>Asc.</th><th>Value</th><th><?php sort($array);print_r($array);?></th></tr>
<tr><th>rsort($a)</th><th>New</th><th>Desc.</th><th>Value</th><th><?php rsort($array);print_r($array);?></th></tr>
<tr><th>ksort($a)</th><th>Retains</th><th>Asc.</th><th>Key</th><th><?php ksort($array);print_r($array);?></th></tr>
<tr><th>krsort($a)</th><th>Retains</th><th>Desc.</th><th>Key</th><th><?php krsort($array);print_r($array);?></th></tr>
</table>

<h1>END</h1>

</div></body></html>