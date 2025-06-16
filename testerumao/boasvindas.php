<?php
// Inicializa variáveis
$nome = $_GET['nome'] ?? '';
$nomemae = $_GET['nomemae'] ?? '';
$idade = $_GET['idade'] ?? '';
$curso = $_GET['curso'] ?? '';
$termos = $_GET['termos'] ?? '';
$erros = [];

// Valida campos obrigatórios
if (empty($nome) || empty($nomemae) || empty($idade) || empty($curso)) {
    $erros[] = "Todos os campos devem ser preenchidos!";
}

// Verifica se os termos foram aceitos
if (empty($termos)) {
    $erros[] = "Você deve aceitar os termos.";
}

// Exibe mensagens de erro, se houver
if (!empty($erros)) {
    foreach ($erros as $erro) {
        echo "<p style='color:red;'>$erro</p>";
    }
} else {
    // Escapa HTML especial para evitar XSS
    $nome = htmlspecialchars($nome, ENT_QUOTES, 'UTF-8');
    $nomemae = htmlspecialchars($nomemae, ENT_QUOTES, 'UTF-8');
    $curso = htmlspecialchars($curso, ENT_QUOTES, 'UTF-8');
    $idade = (int) $idade;

    echo "<h2>Boas-vindas!</h2>";
    echo "Olá, $nome!<br>";
    echo "Sua mãe se chama $nomemae!<br>";
    echo "Você tem $idade anos e está matriculado no curso de $curso.";
}
?>
