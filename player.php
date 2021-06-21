<?php

/*

-=- Script de proxy para SHOUTcast -=-

// v1.0

Script original de referência: http://support.spacialaudio.com/forums/viewtopic.php?f=13&t=16858

Este script permite que um servidor SHOUTcast v1 seja proxiado pelo PHP através da porta 80.
Sem isto, navegadores que não suportam HTTP/0.9 sobre portas não-padrão não reproduzirão o stream.

Configuração pode ser feita através de URL usando ?host=123.456.789.000&port=1234 ou ?url=http://meushoutcast.com:8000/

*/

$host_default = ''; // Coloque aqui seu host padrão (para acessar script sem parametros)
$port_default = ''; // Coloque aqui sua porta padrão (para acessar script sem parametros)

$server = isset($_GET['host']) ? $_GET['host'] : $host_default;
$port = isset($_GET['port']) ? $_GET['port'] : $port_default;

if (isset($_GET['url'])) {
  $url = parse_url($_GET['url']);
  $server = $url['host'];
  $port = $url['port'];
}
if($_GET['encoder'] == "aacp"){
$fp = @fsockopen ($server, $port, $errno, $errstr, 120);
if ($fp) {
        header("Content-type: audio/aacp");
        $request = "GET / HTTP/1.0\r\n";
        $request .= "Host: ".$server."\r\n";
        $request .= "Accept: */*\r\n";
//      $request .= "Icy-MetaData:1\r\n";
        $request .= "Connection: close\r\n\r\n";
        fputs ($fp, $request);
        while (!feof($fp)) {
                $data = fgets($fp,128);
                if (@strpos($data,"icy-") > -1 || @strpos($data,"ICY ") > -1 || @strpos($data,"content-type") > -1) {
//                      header($data);
                } else {
                        echo $data;
                }
        }
        fclose ($fp);
}
}else{
$fp = @fsockopen ($server, $port, $errno, $errstr, 120);
if ($fp) {
        header("Content-type: audio/mpeg");
        $request = "GET / HTTP/1.0\r\n";
        $request .= "Host: ".$server."\r\n";
        $request .= "User-Agent: WinampMPEG/5.11\r\n";
        $request .= "Accept: */*\r\n";
//      $request .= "Icy-MetaData:1\r\n";
        $request .= "Connection: close\r\n\r\n";
        fputs ($fp, $request);
        while (!feof($fp)) {
                $data = fgets($fp,128);
                if (@strpos($data,"icy-") > -1 || @strpos($data,"ICY ") > -1 || @strpos($data,"content-type") > -1) {
//                      header($data);
                } else {
                        echo $data;
                }
        }
        fclose ($fp);

}
}
?>