<?php

    $codigo = $_POST['codigo'];
    $nome = $_POST['nome'];
    $cargo = $_POST['cargo'];
    $departamento = $_POST['departamento'];
    $admissao = $_POST['admissao'];
    $salario = $_POST['salario'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    $telefoneo = $_POST['telefoneo'];

    $user = "root";
    $pass = "";
    $host = "localhost";
    $dbname = "dados_funcionarios";

    $conn = @mysqli_connect($host,$user,$pass,$dbname);

    if (!$conn) {
        die('Falha na conexão com o banco de dados: ' . mysqli_connect_error());
    }

    $cadastrar = @mysqli_query($conn, "insert into dados_funcionarios (codigo, nome, cargo, departamento, admissao, salario, endereco, email, telefoneo) values ('$codigo','$nome', '$cargo', '$departamento', '$admissao', $salario, '$endereco', '$email', '$telefoneo')");

   
    if ($cadastrar) {
        echo "Registrado com sucesso!";
    } else{
        die ('Cadastro falho: '.@mysqli_error($conn));
    }

    @mysqli_close($conn);

    header('location:Funcionarios.php');
?>
