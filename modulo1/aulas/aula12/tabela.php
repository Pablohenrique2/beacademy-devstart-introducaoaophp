<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <title>tabela</title>
</head>

<body>
  <div class="container">
    <div class="text-center">
      <h1>Form</h1>
    </div>
    <form method="post">
      <div class=" mb-3">
        <input class="form-control" type="text" name="nome" placeholder="nome">
      </div>
      <div class=" mb-3">
        <input class="form-control" type="text" name="idade" placeholder="idade">
      </div>
      <div class=" mb-3">
        <input class="form-control" type="text" name="sexo" placeholder="sexo">
      </div>
      <button class="btn btn-primary" name="button">enviar</button>

    </form>
    <table class="table" style=" margin-top: 50px">
      <thead>


        <tr class="table-dark">
          <th>nome</th>
          <th>idade</th>
          <th>sexo</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?php if (isset($_POST['nome'])) {

                echo $_POST['nome'];
              }  ?></td>
          <td><?php if (isset($_POST['idade'])) {
                echo $_POST['idade'];
              }  ?></td>
          <td><?php if (isset($_POST['sexo'])) {
                echo $_POST['sexo'];
              }  ?></td>
        </tr>
      </tbody>


    </table>
  </div>
</body>

</html>