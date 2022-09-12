<!-- <1> -->
<?php
function IsPrime($n)
{
 for($x=2; $x<$n; $x++)
   {
      if($n %$x ==0)
	      {
		   return 0;
		  }
    }
  return 1;
   }
$a = IsPrime(3);
if ($a==0)
echo '3 is a prime number.....'."\n";
else
echo '3 is a prime number..'."\n";
?>



<br>
<!-- <2> -->
<?php
function Reverse($str){
    return strrev($str);
}

$str = "remove";
echo Reverse($str)
?>
<br>
<!-- <3> -->
<?php
function is_str_lowercase($str1)
   {
    for ($i = 0; $i < strlen($str1); $i++) {
          if (ord($str1[$i]) >= ord('A') &&
          ord($str1[$i]) <= ord('Z')) {
      echo "your string is ok";
         }
         }
      echo"your string is ok";
       }
is_str_lowercase('abc def ghi');

?>
<br>

<!-- <4> -->
<?php
function swap($x, $y) {
  echo "Before Swap.\n";
  echo "x = $x \n";
  echo "y = $y \n";

 
  $x = $x ^ $y;
  $y = $x ^ $y;
  $x = $x ^ $y;

  echo "After Swap.\n";
  echo "x = $x \n";
  echo "y = $y \n";
}

echo swap(10, 25);
?>



<br>
<!-- <7> -->
<?php
function Palindrome($number){ 
    $temp = $number; 
    $new = 0; 
    while (floor($temp)) { 
        $d = $temp % 10; 
        $new = $new * 10 + $d; 
        $temp = $temp/10; 
    } 
    if ($new == $number){ 
        return 1; 
    }
    else{
        return 0;
    }
} 
 
$original = 1441;
if (Palindrome($original)){ 
    echo " Yes it is a Palindrome"; 
}
else { 
echo "Not a Palindrome"; 
}
 
?>



<br>
<!-- <8> -->
<?php
function array_uniq($my_array, $value) 
{ 
    $count = 0; 
    
    foreach($my_array as $array_key => $array_value) 
    { 
        if ( ($count > 0) && ($array_value == $value) ) 
        { 
            unset($my_array[$array_key]); 
        } 
        
        if ($array_value == $value) $count++; 
    } 
    
    return array_filter($my_array); 
} 
$numbers = array(2, 4, 7, 4, 8,);

print_r(array_uniq($numbers, 5));
?>