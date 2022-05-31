<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<div class="text-center">
  <h1>Calculadora</h1>
</div>
<div class="container" style=" margin-top: 10px">
  <form action="" method="post">

    <div class=" mb-3">
      <input class="form-control" type="number" name="n1" placeholder="digite o primeiro numero"><br>

      <input class="form-control" type="nuber" name="n2" placeholder="digite o segundo numero"><br>
    </div>

    <div style=" margin-top: 10px">
      <button type="submit" class="btn btn-primary" name="operacao" value="somar">somar</button>
      <button type="submit" class="btn btn-primary" name="operacao" value="subtracao">subtrair</button>
      <button type="submit" class="btn btn-primary" name="operacao" value="multiplicacao">multiplicar</button>
      <button type="submit" class="btn btn-primary" name="operacao" value="divisao">dividir</button>
    </div>

  </form>


  <div class="alert alert-info" role="alert">
    <?php
    if ($_POST) {
      $n1 = $_POST['n1'];
      $n2 = $_POST['n2'];
      $operacao = $_POST['operacao'];
      $error =  "operaçao invalida";
      echo match ($operacao) {
        'subtracao' => "Resultado da subtração : {$n1} - {$n2}=" . $n1 - $n2,
        'somar' => "Resultado da soma : {$n1} + {$n2}=" . $n1 + $n2,
        'multiplicacao' => "Resultado da multiplicação  : {$n1} x {$n2}=" . $n1 * $n2,
        'divisao' => "Resultado da divisão : {$n1} ÷ {$n2}=" . $n1 / $n2,
        default => $error,
      };
    } ?>
  </div>
</div>