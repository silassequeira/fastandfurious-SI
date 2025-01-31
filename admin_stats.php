<?php
require 'checkSession.php';
require 'admin_stats_script.php';
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador Estatísticas</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Days+One:wght@400;600;700;900&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <a href="index.html" class="logo">Fast & Furious Cars Inc.</a>

        <?php
        global $sessionCheck;
        if (isset($_SESSION['admin'])) {
            $adminDetails = $sessionCheck['details'];
            echo '<p>' . htmlspecialchars($adminDetails['username']) . '</p>';
            echo '<a href="admin_addNewCar.php">Adicionar Carros</a>';
            echo '<a href="admin_visualizeAllCars.php">Visualizar Carros</a>';
            echo '<a href="logout.php">Terminar Sessão</a>';
        } else {
            $_SESSION['error'] = "Sem permissões suficientes para acessar esta página" . pg_last_error($connection);
            header('Location: logout.php');
            exit();
        }
        ?>

    </header>

    <main>

        <div class="infoFlex">
            <a href="admin_visualizeAllCars.php" class="back"> &lt; Voltar</a>
            <h2>Estatísticas</h2>
        </div>

        <div class="layoutGrid marginTop">
            <div class="container infoFlex column alignCenter">
                <p>Número Total de Carros</p>
                <h5 value="total-cars"><?php echo $NumeroCarros; ?></h5>
            </div>
            <div class="container infoFlex column alignCenter">
                <p>Carros Disponíveis</p>
                <h5 value="available-cars"><?php echo $NumeroCarrosDisponiveis; ?></h5>
            </div>
            <div class="container infoFlex column alignCenter">
                <p>Número Total de Reservas</p>
                <h5 value="rented-cars"><?php echo $NumeroReservas; ?></h5>
            </div>
            <div class="container infoFlex column alignCenter">
                <p>Número Médio de Reservas por Utilizador</p>
                <h5 value="averageRented-cars"><?php echo $MediaReservaUtilizador; ?></h5>
            </div>

            <div class="container infoFlex column alignCenter">
                <p>Número Total de Utilizadores</p>
                <h5 value="total-users"><?php echo $NumeroUtilizadores; ?></h5>
            </div>
            <div class="container infoFlex column alignCenter">
                <p>Utilizadores que Reservaram</p>
                <h5 value="thatRent-users"><?php echo $UtilizadoresQueReservaram; ?></h5>
            </div>
        </div>
    </main>
</body>

</html>