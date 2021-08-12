<?php

error_reporting(-1);
$anonDise1 = mt_rand (1,6);
$anonDise2 = mt_rand (1,6);

$kompDise1 = mt_rand (1,6);
$kompDise2 = mt_rand (1,6);

echo "У ананима выпало {$anonDise1} и {$anonDise2} \n У компа {$kompDise1} и {$kompDise2}";

$anonSum = ($anonDise1 + $anonDise2);
$kompSum = ($kompDise1 + $kompDise2);

if (($anonDise1 == $anonDise2) && ($kompDise1 == $kompDise2)) {
	echo "2 дабла- большая удача, скринь";
	exit();
}
if ($anonSum > $kompSum) { 
    echo  " Победа ананима";
}  
elseif ($anonSum < $kompSum) {
	echo " Бездушная машина победила";
} 
elseif ($anonSum == $kompSum) {
	echo " Всё плохо Миша,давай сначала";
}

?>