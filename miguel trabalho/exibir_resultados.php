<!DOCTYPE html>
<html>
<head>
    <title>Resultados do Formulário</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $data_admissao = $_POST["data_admissao"];
        $salario = $_POST["salario"];
        $contato = $_POST["contato"];
        $aumento_percentual = 10;

       
        if (!empty($salario) && is_numeric($salario)) {
           
            $novo_salario = $salario * (1 + ($aumento_percentual / 100));

            echo "<h2>Informações do Funcionário</h2>";
            echo "<p><strong>Nome:</strong> $nome</p>";
            echo "<p><strong>Data de Admissão:</strong> $data_admissao</p>";
            echo "<p><strong>Salário Anterior:</strong> $salario</p>";
            echo "<p><strong>Aumento Percentual:</strong> $aumento_percentual%</p>";
            echo "<p><strong>Novo Salário:</strong> $novo_salario</p>";
        } else {
            echo "<p>O salário fornecido não é válido.</p>";
        }
    } else {
        
        header("Location: formulario.php");
        exit();
    }
    ?>
</body>
</html>