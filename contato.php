<?php 
require 'conexao.php';

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $nome = $mysqli->real_escape_string($_POST['nome']);
        $email = $mysqli->real_escape_string($_POST['email']);
        $tel1 = $mysqli->real_escape_string($_POST['tel1']);
        $tel2 = $mysqli->real_escape_string($_POST['tel2']);
        $mensagem = $mysqli->real_escape_string($_POST['mensagem']);

        if(strlen($mensagem) == 0){
            echo "Preencha o formulário";
        } else {
            $stmt = $mysqli->prepare("INSERT INTO ti_tekna (nome, email, telefone, celular, mensagem) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $nome, $email, $tel1, $tel2, $mensagem);

            if ($stmt->execute()) {
                echo "Dados inseridos com sucesso!";
            } else {
                die("Falha no banco de dados: " . $mysqli->error);
            }

            $stmt->close();
        }
    }
?>



