<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


<?php
$a1 = [
  'nome' => 'chiquinho',
  'email' => 'chiquinho@gmail.com',
  'telefone' => '090909 898',
  'nota' => [
    9,
    8,
    7,
    7,
  ]
];

$a2 = [
  'nome' => 'maria',
  'email' => 'maria@gmail.com',
  'telefone' => '090909 898',
  'nota' => [
    6,
    5,
    7,
    10,
  ]
];
$alunos = [
  $a1,
  $a2,
];


?>
<div class="container">
  <div class="text-center">
    <h1>Nota alunos</h1>
  </div>
  <table class="table">
    <thead class="table-dark">
      <tr>
        <th>nome</th>
        <th>email</th>
        <th>telefone</th>
        <th>nota1</th>
        <th>nota2</th>
        <th>nota3</th>
        <th>nota4</th>
        <th>media</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($alunos as $cadaaluno) {
        echo "<tr>";
        echo "<td> " . $cadaaluno['nome'] . "</td>";
        echo "<td>" . $cadaaluno['email'] . "</td>";
        echo "<td>" . $cadaaluno['telefone'] . "</td>";
        echo "<td>" . $cadaaluno['nota'][0] . "</td>";
        echo "<td>" . $cadaaluno['nota'][1] . "</td>";
        echo "<td>" . $cadaaluno['nota'][2] . "</td>";
        echo "<td>" . $cadaaluno['nota'][3] . "</td>";
        echo "<td>" .  array_sum($cadaaluno['nota']) / count($cadaaluno['nota'])  . "</td>";
        echo "</tr>";
      } ?>
    </tbody>
  </table>
</div>