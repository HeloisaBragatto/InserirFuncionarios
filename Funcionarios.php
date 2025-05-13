<?php
    echo "<h1>Lista de Funcionários</h1>";
    echo "<a href ='index.html'>Cadastrar novo usuário</a>";
    echo "<br>";
    echo "<br>";

    $user = "root";
    $pass = "";
    $host = "localhost";
    $dbname = "dados_funcionarios";

    $conn = @mysqli_connect($host,$user,$pass,$dbname);

    $buscar = @mysqli_query($conn, "select * from dados_funcionarios");

    if(!$buscar){
        die ('Query inválido: ' . @mysqli_error($conn));
    }
    while($dados = @mysqli_fetch_array($buscar)){
        echo "<b>Cod: </b>" . $dados['codigo'] . "<br>";
        echo "<b>Nome: </b>" . $dados['nome'] . "<br>";
        echo "<b>Cargo: </b>" . $dados['cargo'] . "<br>";
        echo "<b>Departamento: </b>" . $dados['departamento'] . "<br>";
        echo "<b>Data de admissão: </b>" . $dados['admissao'] . "<br>";
        echo "<b>Salário: </b>" . $dados['salario'] . "<br>";
        echo "<b>Endereço: </b>" . $dados['endereco'] . "<br>";
        echo "<b>E-mail: </b>" . $dados['email'] . "<br>";
        echo "<b>Telefone: </b>" . $dados['telefoneo'] . "<br>";
        echo "<br>";
    }

    @mysqli_close($conn);
?>

