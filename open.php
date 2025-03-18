<?php
    $email = $_POST["cxlogin"];
    $senha = $_POST["cxsenha"];

    if($email == "prof@gmail.com" && $senha == "123"){
        header("location:menuadm.php");
    }elseif($email == "aluno" && $senha == "12"){
        header("location:menuuser.php");
    }else{
        echo "
        <script>
            alert('email e senha inválidos');
            window.location.href='login.php';
        </script>";
    }
?>