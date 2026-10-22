<?php
    $horas = (int)$_POST['horas'];
    $veiculo = $_POST['veiculo'];
    $lavagem = isset($_POST['lavagem']);

    if ($horas < 1) {
        exit("Informe uma quantidade válida de horas.");
    }

    if ($veiculo == "carro") {
        $primeira = 10;
        $adicional = 5;
    } elseif ($veiculo == "moto") {
        $primeira = 6;
        $adicional = 3;
    } else {
        exit("Tipo de veículo inválido.");
    }

    $total = $primeira;

    for ($h = 2; $h <= $horas; $h++) {
        $total += $adicional;
    }

    if ($total > 50) {
        $total = 50;
    }

    if ($lavagem == "true") {
        $total += 20;
    }
 
    echo "O valor total a ser pago é: R$ " . number_format($total, 2, ',', '.');
?>