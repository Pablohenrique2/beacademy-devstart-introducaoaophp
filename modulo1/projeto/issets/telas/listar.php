<h1>lista</h1>

<table class="table table-hover table-striped">
  <thead class="table-dark">
    <tr>
      <th>nome</th>
      <th>email</th>
      <th>contato</th>
      <th>ações</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($contatos as $posicao => $cadaContato) {
      $partes = explode(";", $cadaContato);
      echo "<tr>";
      echo "<td>" . $partes[0] . "</td>";
      echo "<td>" . $partes[1] . "</td>";
      echo "<td>" . $partes[2] . "</td>";
      echo "<td> . <a style='style-type: none; ' href='/excluir?id={$posicao}' class='btn btn-danger btn-sm' >Excluir</a> <a href='/editar?id={$posicao}' class='btn btn-warning btn-sm' >editar</a> </td>";
      echo "</tr> ";
    }
    ?>
  </tbody>

</table>