<?php
$a=29;
$f=0;
for($i=2;$i<$a;$i++)
{
    if($a%$i==0)
    {
        $f+=1;
        break;
    }
}
if($f==1)
{
    echo "is not prime number";
}
else{
    echo "is a prime number";
}
echo "hello";
?>
