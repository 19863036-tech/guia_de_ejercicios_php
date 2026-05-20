<?php
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
if ($numero1 < $numero2) {
    echo "el numero menor es:" . $numero1;
} 
elseif ( $numero2 < $numero1){
    echo "  el numero menor es :" . $numero2;
}
?>