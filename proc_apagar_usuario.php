 <?php
  session_start();
  include_once("conexao.php"); 
  $id = filter_input(INPUT_GET, 'id',FILTER_SANITIZE_NUMBER_INT);
  if (!empty($id)){

  $result_usuario = "DELETE FROM usuarios WHERE id='$id'";
  $resultado_usuario = mysqli_query($conn, $result_usuario);
  if(mysqli_affected_rows($conn)){
   
    $_SESSION['msg'] = "<p style= 'color:green;'> Usuario apagado com sucesso</p>";
    header("Location: index.php");
  
  }else{
    
    $_SESSION['msg'] = "<p style= 'color:red;'> Error Usuario nao foi apagado com sucesso</p>";
    header("Location: index.php");
  }
}else{
   
    $_SESSION['msg'] = "<p style= 'color:red;'> Necessario selecionar um Usuario </p>";
    header("Location: index.php");
}
?>
