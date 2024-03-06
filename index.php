<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom-styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Rubik:wght@600&display=swap" rel="stylesheet">

    <title>Todo-list</title>
</head>

<body class="body-style">

    <nav class="menu-style">
        <div class="menu-style-text">
            MENU
        </div>

        <div class="options-menu-style">
            <div class="primary-menu-text">
                TAREFAS
            </div>

            <a href="index.php?page=upcoming" class="taskc-option-style">
                <img class="taskc-option-icon" src="bootstrap-icons/stopwatch.svg" alt="upcoming">
                <div class="taskc-text-style">Por vir</div>
                <div class="task-counter-style">1</div>
            </a>

            <a href="index.php?page=today" class="taskc-option-style">
                <img class="taskc-option-icon" src="bootstrap-icons/list-check.svg" alt="today">
                <div class="taskc-text-style">Hoje</div>
                <div class="task-counter-style">2</div>
            </a>

            <a href="index.php?page=calendar" class="task-option-style">
                Calendário
            </a>

            <a href="index.php?page=stickynotes" class="task-option-style">
                Notas Adesivas
            </a>
        </div>

        <div class="options-menu-style">
            <div class="primary-menu-text">
                LISTAS
            </div>

            <button class="button-style">
                Add Nova Lista
            </button>
        </div>

        <div class="options-menu-style">
            <div class="primary-menu-text">
                MARCADORES
            </div>

            <button class="button-style">
                Add Novo Marcador
            </button>
        </div>

    </nav>

    <main class="main-style">
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            include($page . '.php');
        }
        ?>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>