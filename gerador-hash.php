<?php
$senha = "123456";
var_dump($senha);
echo "<br>";
$senhaCripto = hash('sha256',$senha);

var_dump($senhaCripto);