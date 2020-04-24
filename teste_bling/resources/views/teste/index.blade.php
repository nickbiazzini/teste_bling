<?php
//Busca Toda a Lista de Produtos
$url = "https://bling.com.br/Api/v2/produtos/json/&apikey=63ec125fcea08030170b6e70fe6be3a6762b25b789221e038470597a1a833c735f575191"; 

//Busca só um Produto
// $url = "https://bling.com.br/Api/v2/produto/{codigo}/json/&apikey=63ec125fcea08030170b6e70fe6be3a6762b25b789221e038470597a1a833c735f575191"; 

$ch = curl_init($url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
$produtos = json_decode(curl_exec($ch));
var_dump($produtos)
// foreach($produtos->retorno->produtos as $p){
//     // dd($p);
//     // echo "Codigo:".$p->produto->codigo. "<br>";
//     // echo "Descrição:".$p->produto->descricao. "<br>";
//     echo "Descrição Curta:".$p->produto->descricaoCurta. "<br>"
// }
?>
