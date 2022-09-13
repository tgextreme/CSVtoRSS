<?php
include_once("claves.php");

if($_GET["clave"]===$CLAVE){
$rss='<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0">

<channel>

<title>Mejores procuctos recomendados</title>
<link></link>
<description>Productos recomendados con enlace afiliado</description>
<copyright></copyright>
';
$item="";
file_get_contents("csv.csv", "http://feeds.avangate.com/139125/38292_NEQHNE.csv");
$fp = fopen ("csv.csv","r");
$i=0;
while ($data = fgetcsv ($fp, 1000, ",")) {
    if($i!=0){
    
    
    $title= $data[5];
    $link=$data[13];
    $descripcion=$data[7];
    $rss=$rss."
    <item>
    <title>".htmlspecialchars($title)."</title>
    <link>".htmlspecialchars($link)."</link>
    <description>"."</description>
  </item>
    ";
 }
$i=1;
    //echo "descripcion : ".  ."<br>";
    }

    $rss=$rss."
    </channel>

    </rss>
    ";
    
    unlink("rss.rss");
    file_put_contents("rss.rss", $rss);

    echo $rss;

}