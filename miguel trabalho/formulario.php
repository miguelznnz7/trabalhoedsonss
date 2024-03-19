<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Informações do Funcionário</title>
</head>
<body>
    <h2>Formulário de Informações do Funcionário</h2>
    <form method="post" action="exibir_resultados.php" target="_blank">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome"><br><br>
        
        <label for="data_admissao">Data de Admissão:</label><br>
        <input type="date" id="data_admissao" name="data_admissao"><br><br>
        
        <label for="salario">Salário:</label><br>
        <input type="text" id="salario" name="salario"><br><br>
        
        <label for="contato">Contato:</label><br>
        <input type="text" id="contato" name="contato"><br><br>
        
        <label for="aumento_percentual">Aumento Percentual:</label><br>
        <input type="text" id="aumento_percentual" name="aumento_percentual"><br><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>