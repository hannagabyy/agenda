<?php
    include ("Banco.php");
    session_start();

    $banco = new Banco();
    $contato = $banco->getContato((int)$_GET["id"]);
    if(isset($_POST["nome"])){
        $banco->editar($contato->id,$_POST["nome"],$_POST["telefone"],$_POST["celular"],$_POST["email"]);
        header("Location: index.php");
    }
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
        <form action="editar.php?id=<?php echo $contato->id;?>" method="post">
            <label for="">NOME</label>
            <input type="text" name="nome" value="<?php echo $contato->nome;?>">

            <label for="">TELEFONE</label>
            <input type="text" name="telefone" value="<?php echo $contato->telefone;?>">

            <label class="form-label">CELULAR</label>
            <input type="text" name="celular" value="<?php echo $contato->celular;?>">

            <label for="">EMAIL</label>
            <input type="text" name="email"value="<?php echo $contato->email;?>">

            
            <input type="submit" class="btn btn-success" value="Salvar">
        </form>
    </div>


    <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  
  </body>
</html>
