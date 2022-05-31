<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">



<?php
$produto1 = [
  'nome' => 'celular',
  'preco' => "R$18.00",
  'descricao' => 'melhor produto ja lançado',
  'foto' => "📱",
];
$produto2 = [
  'nome' => 'notebook',
  'preco' => "R$19.00",
  'descricao' => 'melhor produto ja lançado',
  'foto' => "💻",
];
$produto3 = [
  'nome' => 'fone',
  'preco' => "R$11.00",
  'descricao' => 'melhor produto ja lançado',
  'foto' => "🎧",
];
$produto4 = [
  'nome' => 'carregador',
  'preco' => "R$11.00",
  'descricao' => 'melhor produto ja lançado',
  'foto' => "🔋",
];
$produto5 = [
  'nome' => 'capa de celular',
  'preco' => "R$11.00",
  'descricao' => 'melhor produto ja lançado',
  'foto' => "👾",
];

$loja = [
  $produto1,
  $produto2,
  $produto3,
  $produto4,
  $produto5,
];


?>
<div class="container">
  <div class="text-center">
    <h1>Loja</h1>
  </div>
  <table class="table">
    <thead class="table-dark">
      <tr>
        <th>foto</th>
        <th>nome</th>
        <th>preço</th>
        <th>descrição</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($loja as $cadaProduto) {
        echo "<tr>";
        echo "<td>" . $cadaProduto['foto'] . "</td>";
        echo  "<td>" . $cadaProduto['nome'] . "</td>";
        echo  "<td>" . $cadaProduto['preco'] . "</td>";
        echo  "<td>" . $cadaProduto['descricao'] . "</td>";
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>
</div>