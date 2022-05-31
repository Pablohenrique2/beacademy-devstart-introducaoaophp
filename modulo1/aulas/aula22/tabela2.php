<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


<?php
$bandas = [
  ["dejavu", 20],
  ["parangole", 30],
  ["calcinha preta", 40],
  ["aviões do forro", 12],
];


?>
<div class="container">
  <div class="text-center">
    <h1>show</h1>
  </div>
  <table class="table">
    <thead class="table-dark">
      <tr>
        <th>bandas</th>
        <th>musicas</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($bandas as $bandastoca) {
        echo "<tr>";
        echo "<td>" . $bandastoca[0] . "</td>";
        echo "<td>" . $bandastoca[1] . "</td>";
        echo "</tr>";
      } ?>
    </tbody>


  </table>
</div>