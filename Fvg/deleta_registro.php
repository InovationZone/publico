<?php
  
    $id = $_GET['id'];

    session_start();
    require_once('db.class.php');

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $sql = "delete from  tbl_relatos WHERE idrelato='$id'"; 
   
     if(mysqli_query($link, $sql))
    {
    $_SESSION['msg'] = "<div class='alert alert-success' role='alert'>O Evento foi excluido com Sucesso<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
    header("Location: gera_relato.php");
  }else{
    $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Erro ao excluir o evento <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
    header("Location: gera_relato.php");
  }
 ?>