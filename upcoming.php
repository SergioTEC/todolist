<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Por Vir</title>
</head>

<body>

    <div class="upcoming-style">
        <div class="upcoming-text">Por vir</div>
        <div class="upcoming-container">
            <div class="today-style">
                Hoje
                <div class="add-new-task" onclick="openOverlay()">
                    <img src="assets/file-earmark-plus-fill.svg" alt="Add Icon" class="add-icon">
                    Adicionar Nova Tarefa
                </div>
            </div>

            <div class="tomorrow-style">
                Amanhã
                <div class="add-new-task">
                    <img src="assets/file-earmark-plus-fill.svg" alt="Add Icon" class="add-icon">
                    Adicionar Nova Tarefa
                </div>
            </div>

            <div class="thisweek-style">
                Essa semana
                <div class="add-new-task">
                    <img src="assets/file-earmark-plus-fill.svg" alt="Add Icon" class="add-icon">
                    Adicionar Nova Tarefa
                </div>
            </div>
        </div>
    </div>

    <div id="add-new-task-overlay">
        <div class="overlay-content">
            <div class="header-overlay-content">
                <div class="title-overlay-content">
                    Tarefa
                </div>
                <span class="close-overlay-content" onclick="closeOverlay()">X</span>
            </div>

            <div class="main-overlay-content">

                <div class="divs-overlay">
                    <input type="text" name="input-title-overlay" class="input-title-overlay" placeholder="Adicione o titulo da tarefa" />
                </div>

                <div class="divs-overlay">
                    <input type="text" name="input-desc-overlay" class="input-desc-overlay" placeholder="Adicione a descrição da tarefa" />
                </div>

                <div>Lista
                    <select name="select-list-overlay" id="select-list-overlay" class="select-list-overlay" required>
                        <option value="" disabled selected>Escolha uma opção</option>
                        <option value="Test1">Teste1</option>
                        <option value="Test2">Teste2</option>
                        <option value="Test3">Teste3</option>
                    </select>
                </div>
                <div>Data de Vencimento
                    <input type="date" name="input-date-overlay" class="input-date-overlay">
                </div>
                <div>Marcadores</div>
            </div>
        </div>
    </div>

    <script>
        function openOverlay() {
            document.getElementById("add-new-task-overlay").style.display = "flex";
        }

        function closeOverlay() {
            document.getElementById("add-new-task-overlay").style.display = "none";
        }
    </script>

</body>

</html>