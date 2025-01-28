<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    if (isset($_FILES['comprovativo']) && $_FILES['comprovativo']['error'] === UPLOAD_ERR_OK) {
        $arquivo_tmp = $_FILES['comprovativo']['tmp_name'];
        $nome_arquivo = $_FILES['comprovativo']['name'];
        $destino = "comprovativos/" . $nome_arquivo;

        if (move_uploaded_file($arquivo_tmp, $destino)) {
            echo "Comprovativo enviado com sucesso!";
        } else {
            echo "Erro ao enviar comprovativo.";
        }
    } else {
        echo "Por favor, selecione um arquivo válido.";
    }
}
?>