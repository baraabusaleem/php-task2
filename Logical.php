<!-- <l> -->
<br>

<?php
$year = 2013;

if((0 == $year % 4) & (0 != $year % 100) | (0 == $year % 400))
{
    echo "$year is a Leap Year.";
}

else
{
echo "$year is not a Leap Year.";
}
?>
<br>
<!-- <2> -->
    <?php
$temp = 27;  

if ($temp > "20") {
    echo "It is summertime!";
  }
  ?>

<br>
<!-- <3> -->
<?php
function ux($f, $sc) 
{
    return $f == $sc ? ($f + $sc)*3 :  false;
}
echo ux(2, 2);
?>


<!-- <4> -->
<br>
<?php
function test($f, $sc) 
{
    return $f + $sc ==30 ? ($f + $sc) :  false;
}
echo test(10, 10);
?>





<!-- <5> -->
<?php
function titg($num) 
{
   return $num % 3 == 0 || $num % 7 == 0;
}

var_dump(titg(20));
?>











<br>
<!-- <6> -->
<?php
function trhet($num) 
{
   return $num >= 20 && $num <=50;
}

var_dump(trhet(50));

?>
<br>







<!-- <7> -->
    <?php
$num1=1;
$num2=5;
$num3=9;
if($num1>$num2 && $num1>$num3){
  echo $num1;
}
else{
  if($num2>$num1 && $num2>$num3){
    echo $num2;
  }
  else
    echo $num3;
}

?>













<br>
<!-- <8> -->
    <?php
function calculateBill($units)
{
     
  
    if ($units <= 100)
    {
        return $units * 10;
    }
    else if ($units <= 200)
    {
        return (100 * 10)
            + ($units - 100)
                  * 15;
    }
    else if ($units <= 300)
    {
        return (100 * 10)
            + (100 * 15)
            + ($units - 200)
                  * 20;
    }
    else if ($units > 300)
    {
        return (100 * 10)
            + (100 * 15)
            + (100 * 20)
            + ($units - 300)
                  * 25;
    }
    return 0;
}
     




<br>
<!-- <9> -->
<?php
function toer($n1, $n2, $result) {
        switch($result) {            
            case '+':
                $result = $n1 + $n2;
                break;
            case '-':
                $result = $n1 - $n2;
                break;
            case '*':
                $result = $n1 * $n2;
                break;
            case '/':
                $result = $n1 / $n2;
                break;       
        }
        return $result;
    }
?>
<br>


<!-- <10> --
    <?php
$age = 15;  

if ($age > "18") {
    echo "is no eligible to vote";
  }
?>
<br>



<!-- 11 -->
<?php
function asg($x) {
    if ($x > 0)
      echo "Positive ";
    if ($x == 0)
      echo "Zero";
    if ($x < 0)
     echo "Negative ";

  }
  
  asg(-60);

  ?>



  <br>
  <!-- 12 -->
<?php
  $array = array(60,86,95,63,55,74,79,62,50);
$avg = array_sum($array) / count($array);
function nambr($x) {
  if ($x < 60)
   echo "F ";
   else if ($x < 70)
   echo "D ";
  else if ($x < 80)
   echo "C ";
  else if ($x < 90)
   echo "B ";
  else if($x < 100)
   echo "A ";

}

nambr($avg);



?>
