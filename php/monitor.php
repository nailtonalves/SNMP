<?php
//define um timezone no brasil
date_default_timezone_set("America/Bahia");
//faz a requisição SNMP que retorna uma string do tipo "Count64: 1242" que é divida e armazenada em $parametro e $valor
list($parametro, $valorIN1) = explode(": ", snmpget($_GET["ip"], $_GET["community"], $_GET["oid"]));
list($parametro, $valorOUT1) = explode(": ", snmpget($_GET["ip"], $_GET["community"], $_GET["oid2"]));

//espera 1 segundo...
sleep(1);
//pega a hora atual do servidor
$data = date("H:i:s");

//repete a requisição
list($parametro, $valorIN2) = explode(": ", snmpget($_GET["ip"], $_GET["community"], $_GET["oid"]));
list($parametro, $valorOUT2) = explode(": ", snmpget($_GET["ip"], $_GET["community"], $_GET["oid2"]));

//subtrai o primeiro valor do segundo e converte de bitys para kbitys por segundo
$valor = (($valorIN2 - $valorIN1) * 8) / 1000;
$valor2 = (($valorOUT2 - $valorOUT1) * 8) / 1000;

//retorna data e valor num formato de arrayd
echo "[\"$data\",$valor, $valor2]";
