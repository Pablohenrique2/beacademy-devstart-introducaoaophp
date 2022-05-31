<?php

$frutas = [
  0 => 'pera',
  1 => 'uva',
  2 =>  'maça',
  3 => 'morango'

];
foreach ($frutas as $legumes) {
  echo " ph" . $legumes . "</br>";
}
?>
<ul>
  <?php for ($i = 0; $i < count($frutas); $i++) {
    echo "<li>$frutas[$i]</li>";
  } ?>
</ul>