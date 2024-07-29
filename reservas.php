<?php
// recibir los datos del form html


$ciudad = $_POST['ciudad'];
$checkin = $_POST['fecha_ingreso'];
$checkout = $_POST['fecha_salida'];
$huespedes = $_POST['huespedes'];

echo("<h1>Reserva de Alojamiento</h1>");

echo("Se ha realizado una reserva en la ciudad de " .$ciudad);
echo("<br>Se ha realizado una reserva para " .$huespedes. " personas");
echo("<br>Se ha realizado una reserva para el check-in en " .$checkin);
//mostrar cantidad de noches tomando en cuenta $checkin y $checkout

$fecha_inicio = new DateTime($checkin);
$fecha_salida = new DateTime($checkout);

$noches = $fecha_inicio->diff($fecha_salida);

$diasDiferencia = $noches->days;

echo("<br>Se ha realizado una reserva para " .$diasDiferencia. " noches");



?>