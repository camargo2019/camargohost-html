<?php 
error_reporting(0);

if($_GET['pg'] == "streaming"){
    $title = "Streaming de Áudio - CmrStreaming | CamargoHost | CamargoHost.com.br";
    $description = "CmrStraming é um streaming de áudio desenvolvido pela CamargoHost que traz vários módulos no painel com atraso de 3 segundos, uma das melhoras qualidade de streaming do Brasil!";
    include 'source/pg/head.php';
    include 'source/pg/streaming.php';
}elseif($_GET['pg'] == "hospedagem"){
    $title = "Hospedagem de Sites | CamargoHost | CamargoHost.com.br";
    $description = "Hospedagem de sites em cPanel, com uma grande performasse e proteção Ddos/Dos, deixe seu site sem lentidão e com uma hospedagem de qualidade!";
    include 'source/pg/head.php';
    include 'source/pg/hospedagem.php';
}elseif($_GET['pg'] == "MultiTheftAutoBR"){
    $title = "Hospedagem de Multi Theft Auto - Servidor Brasileiro | CamargoHost | CamargoHost.com.br";
    $description = "Hospedagem de Servidor Multi Theft Auto no Brasil, servidores com ping de 10ms com acelerador e compactador de download, com preço justo e a melhor qualidade de servidores multi theft auto do Brasil!";
    include 'source/pg/head.php';
    include 'source/pg/MultiTheftAutoBR.php';
}elseif($_GET['pg'] == "MultiTheftAuto"){
    $title = "Hospedagem de Multi Theft Auto | CamargoHost | CamargoHost.com.br";
    $description = "Hospedagem de Servidor Multi Theft Auto Canadense servidor com alto desempenho com acelerador de download e compactador, trazendo uma das melhores qualidades do mercado com o preço justo!";
    include 'source/pg/head.php';
    include 'source/pg/MultiTheftAuto.php';
}else{
    $title = "Serviço de Hospedagem | CamargoHost | CamargoHost.com.br";
    $description = "Hospedagem de Multi Theft Auto com a melhor qualidade do mercado, com gerenciador simples pratico e completo de se usar, conexões seguras, Anti-Ddos, servidores Canadense e Brasileiro!";
    include 'source/pg/head.php';
    include 'source/pg/index.php';
}

