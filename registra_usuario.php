<?Php

    require_once('db.class.php');
    $nome       = $_POST['nome'];
    $sobreNome  = $_POST['sobre_nome'];
    $usuario    = $_POST['usuario'];
    $email      = $_POST['email'];
    $senha      = md5($_POST['senha']);

    $objDb = new db();
    $link  = $objDb->conecta_mySql();

    $sql  = "insert into usuarios (nome, sobreNome, senha, email, usuario) value ('$nome','$sobreNome', '$senha', '$email', '$usuario' ) ";
   
    //executar a query
   
    if(mysqli_query($link, $sql)){
        echo 'Usuário cadastrado com sucesso! ';
    }else{
        echo 'Usuario não cadastrado';
    }



?>