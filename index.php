<?php
function tong($a, $b){
    return $a + $b;
}
$m= 9;
$n=6;
$t = tong($m, $n);
echo "Tong: $t"
?>
<br><?php
function hello($message){
    echo 'wellcome' . $message;
}
hello(' PHP');
?>
<br><?php
function setName($name = 'noname'){
    echo $name;
}
setName('PHP');
echo'<br>';
setName();
?>
<br><?php
function setValue($a){
    $a = 10;
}
$b = 5;
setValue($b);
echo $b;
?>
