//find sumof digits(user input not mandatory).
<?php
$a=23492;
$sum=0;
for($i=0;$i<strlen($a);$i++)
{
    $rem=$a%10;
    $sum+=$rem;
    $a/=10;    
}
echo $sum; 
?>
