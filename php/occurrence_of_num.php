<?php
// Online PHP compiler to run PHP program online
// Print "Hello World!" message
//Write a program to count the total number of times a specific value
//appears in an array.
echo "Hello World!";
$a=array(2,3,6,4,2,5,6,4,4,6,3,5,6,4,3,5,3,5,4,4);
$find=4;
$count=0;
for($i=0;$i<count($a);$i++)
{
    if($a[$i]==$find)
    {
        $count++;
    }
}
echo $count;
?>
