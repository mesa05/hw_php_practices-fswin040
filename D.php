<?php
$i=1000;
for($GN=100;$GN<$i;$GN++){
    $one= floor($GN/100);
    $two= floor($GN/10)%10;
    $three= $GN%10 ;
    if(($one*$one*$one)+($two*$two*$two)+($three*$three*$three)==$GN){
    echo $GN."<br>" ;
}
}
?>