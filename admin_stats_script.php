<?php
$connection = pg_connect("dbname=postgres user=postgres password=postgres host=localhost port=5432");
if (!$connection) {
    die("Erro na conexão");
}
//pesquisas a base de dados------------
//numero de carros
$sqlNc = "SELECT count(*) FROM carro";
$result = pg_query($connection, $sqlNc);

if (!$result) {
    die("Error executing query");
}

// numero de carros disponiveis
$sqlNcd = "SELECT count(*) FROM carro WHERE status_ = true";
$result1 = pg_query($connection, $sqlNcd);

if (!$result1) {
    die("Error executing query");
}

// numero de reservas
$sqlNcr = "SELECT count(*) FROM reserva_";
$result2 = pg_query($connection, $sqlNcr);

if (!$result2) {
    die("Error executing query");
}

//numero de utilizadores
$sqlNcu = "SELECT count(*) FROM cliente";
$result3 = pg_query($connection, $sqlNcu);

if (!$result3) {
    die("Error executing query");
}

//numero de utilizadores que já fizeram reservas
$sqlNcur = "SELECT COUNT(DISTINCT cliente_username) FROM reserva_";
$result4 = pg_query($connection, $sqlNcur);

if (!$result4) {
    die("Error executing query");
}


// Extrai o valor do resultado------------------
$NumeroCarros = pg_fetch_result($result, 0);
$NumeroCarrosDisponiveis = pg_fetch_result($result1, 0);
$NumeroReservas = pg_fetch_result($result2, 0);
$NumeroUtilizadores = pg_fetch_result($result3, 0);
$MediaReservaUtilizador = $NumeroReservas / $NumeroUtilizadores;
$UtilizadoresQueReservaram = pg_fetch_result($result4, 0);


// Fecha a conexão com o banco de dados
pg_close($connection);