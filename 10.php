<?php
function x($a) {
$r=array_values(array_unique($a));
return $r;
}
$s=[1,1,2,2,3,3,4,5,5];
$u=x($s);
echo "original list:";
print_r($s);
echo "<br> sorted list:";
print_r($u);
?>