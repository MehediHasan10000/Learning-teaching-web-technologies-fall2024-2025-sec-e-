<?php

$arr = array(14,15,16,35,74,13,58,86);
$element = 35;
echo "The given array is: ";
for($i=0; $i<count($arr); $i++){
    echo $arr[$i]. " ";
}
echo "<br>";

for($sum = 0; $num <= count($arr); $num++){
    if($arr[$num]==$element)
    {
        echo "Number". $element ."position loaded". ($num+1) ."<br>";
        break;
    }
}

?>