<?php
$d=[
['i'=>1,'n'=>'karthik','a'=>55]
];
function search($d,$c){
$r=[];
foreach($d as $e){
$match=true;
foreach($c as $key=>$value){
if(!isset($e[$key])||$e[$key]!=$value){
$match=false;
break;
}
}
if($match){
$r[]=$e;
}
}
return $r;
}
$c=['a'=>55];
$s=search($d,$c);
echo "search results <br>";
print_r($s);
?>