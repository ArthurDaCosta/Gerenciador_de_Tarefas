<?php

session_start();

$data = $_SESSION['tasks'][$_GET['key']];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <META NAME="viewport" content="width=device-width, intial-scale=10">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <title>Gerenciador de Tarefas</title>
</head>
<body>

<div class="details-container">
    <div class="header">
        <h1> <?php echo $data['task_name']; ?></h1>
    </div>
    <div class="row"> 
        <div class="details">
            <dl>
                <dt>Descrição da Tarefa:</dt>
                <dd><?php echo $data['task_description']; ?></dd>
                <dt>Data da Tarefa:</dt>
                <dd><?php echo $data['task_date']; ?></dd>
            </dl>
        </div>
        <div class="image">
            <dt>Imagem da Tarefa:</dt>
            <img src="Programas/Gerenciador/Gerenciador_de_Tarefas-2/uploads/<?php echo$data['task_image'] ?>">
        </div>
    </div>
    <div class="footer">
        <p>Desenvolvido por Arthur Brixius da Costa</p>
    </div>
</div>