<?php
// Conexão com o banco de dados
$host = 'localhost';
$banco = 'atividade';
$usuario = 'root';
$senha = '';
// Conexão
$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}

// Processamento do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conexao->real_escape_string($_POST['email']);
    $mensagem = $conexao->real_escape_string($_POST['mensagem']);

    // Inserindo o e-mail e a mensagem na tabela 'email' do banco de dados 'atividade'
    $sql = "INSERT INTO email (email_usu, mensagem) VALUES ('$email', '$mensagem')";
    if ($conexao->query($sql) === TRUE) {
        echo "Informações cadastradas com sucesso!";
    } else {
        echo "Erro ao cadastrar as informações: " . $conexao->error;
    }
}

$conexao->close();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de E-mail e Mensagem</title>
    <style>
        body {
            text-align: center;
            justify-content: center;
            align-items: center;
            text-decoration-color: #ffffff;
        }
    </style>
</head>
<body>
    <h1>Cadastro de E-mail e Mensagem</h1>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>

        <label for="mensagem">Mensagem:</label>
        <textarea name="mensagem" rows="4" cols="50" required></textarea><br><br>

        <input type="submit" value="Cadastrar">
    </form>
    <br><br>
    <a href="index.html">Voltar</a>
</body>
</html>
