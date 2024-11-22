<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrador</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Days+One:wght@400;600;700;900&display=swap" rel="stylesheet">
</head>

<body>
    <php
        session_start();
        $user=$_SESSION['user'];
        >
    <header>
        <a href="index.html" class="logo">Fast & Furious Cars Inc.</a>

        <nav>
            <label for="username-admin"><php echo $user></label>
        </nav>
    </header>

    <main>

        <div class="infoFlex">
            <a href="#" class="back"> &lt; Voltar</a>
            <h2>Estatísticas</h2>
        </div>

            <label for="date">Data</label>
            <input type="date" name="date" id="date">

            <div class="layoutGrid">
                <div class="infoFlex column">
                    <div class="container">
                        <h5>Número Total de Carros</h5>
                        <h5 value="total-cars"></h5>
                    </div>
                    <div class="container">
                        <h5>Carros Disponíveis</h5>
                        <h5 value="available-cars"></h5>
                    </div>
                </div>
                <div class="infoFlex column">
                    <div class="container">
                        <h5>Número Total de Reservas</h5>
                        <h5 value="rented-cars"></h5>
                    </div>
                    <div class="container">
                        <h5>Número Médio de Reservas por Utilizador</h5>
                        <h5 value="averageRented-cars"></h5>
                    </div>
                </div>
                <div class="infoFlex column">
                    <div class="container">
                        <h5>Número Total de Utilizadores</h5>
                        <h5 value="total-users"></h5>
                    </div>
                    <div class="container">
                        <h5>Utilizadores que Reservaram</h5>
                        <h5 value="thatRent-users"></h5>
                    </div>
                </div>

    </main>
</body>

</html>