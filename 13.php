<?php
session_start();
function g($l=6){
$c='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$cl=strlen($c);
$r='';
for($i=0;$i<$l;$i++){
$r.=$c[rand(0,$cl-1)];
}
return $r;
}
echo "captcha code is :".g();