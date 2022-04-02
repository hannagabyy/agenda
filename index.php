<?php
  include ("Banco.php");
  session_start();

  $banco = new Banco();
  if(isset($_GET["id"])){
    $banco->excluir($_GET["id"]);
  }

    // Analisar este codigo abaixo
  if(isset($_GET['e'])){
    $banco->excluir((int)$_GET['e']);
    header('index.php');
  }

  $contatos = $banco->consultar();

?>

<!doctype html>
<html lang="pt-br">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link  href="fontawesome-free-6.0.0-web/css/all.css" rel="stylesheet">

    <title>Agenda</title>
  </head>
  <body>
  <?php
    include ("barra.php");
  ?>

  <div class="container">
    <h4>Contatos</h4>
      <table class="table table-striped">
      
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nome</th>
          <th scope="col">Telefone</th>
          <th scope="col">Celular</th>
          <th scope="col">Email</th>
        </tr>
      </thead>
        <?php foreach($contatos as $contato):?>

          <tr>
            <td><?php echo $contato->id;?></td>
            <td><?php echo $contato->nome;?></td>
            <td><?php echo $contato->telefone;?></td>
            <td><?php echo $contato->celular;?></td>
            <td><?php echo $contato->email;?></td>
            <td>
              <a class="btn btn-primary" href="editar.php?id=<?php echo $contato->id;?>"><i class="fa-solid fa-pen-to-square"></i>Editar</a>
              <a class="btn btn-danger" href="index.php?id=<?php echo $contato->id;?>"><i class="fa-solid fa-trash-can"></i>Excluir</a>
            </td>
            
          </tr>
        <?php endforeach;?>
      </table>

      <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </div>
  </body>
</html>
