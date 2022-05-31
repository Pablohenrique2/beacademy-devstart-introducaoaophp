<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<div class="container">
  <h1>Calendario</h1>
  <select style="width:100px ; display:inline ;" class="form-select " name="" id="">
    <?php
    for ($i = 1; $i <= 31; $i++) {
      echo "<option >{$i}</option>";
    }
    ?>
  </select>
  <select style="width:100px ; display:inline ;" class="form-select " name="" id="">

    <?php
    $anos = [
      "janeiro",
      "fevereiro",
      "março",
      "abril",
      "maio",
      "junho",
      "julho",
      "agosto",
      "setenbro",
      "novenbro",
      "dezenbro",
    ];
    for ($i = 0; $i < count($anos); $i++) {
      echo "<option >{$anos[$i]}</option>";
    }
    ?>
  </select>


  <select style="width:100px ; display:inline ;" class="form-select " name="" id="">
    <?php
    for ($i = 2022; $i >= 1990; $i--) {
      echo "<option >{$i}</option>";
    }
    ?>
  </select><br>

  <h2>For da Musica</h2>
  <?php


  for ($i = 0; $i < 10; $i++) {
    echo '<div class="alert alert-danger" role="alert">e o pente</div> ' . PHP_EOL;
  }
  ?>



</div>