<?php
//Busca Toda a Lista de Produtos
// $url = "https://bling.com.br/Api/v2/produtos/json/&apikey=63ec125fcea08030170b6e70fe6be3a6762b25b789221e038470597a1a833c735f575191"; 

//Busca só um Produto
$codigo="MGBGAG5BNR6E";
$url = "https://bling.com.br/Api/v2/produto/".$codigo."/json/&apikey=63ec125fcea08030170b6e70fe6be3a6762b25b789221e038470597a1a833c735f575191"; 

$ch = curl_init($url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
$produtos = json_decode(curl_exec($ch));
// var_dump($produtos);
foreach($produtos->retorno->produtos as $p){
    // dump($p->produto);
    // echo "Codigo:".$p->produto->codigo. "<br>";
    // echo "Descrição:".$p->produto->descricao. "<br>";
    // echo "Descrição Curta:".$p->produto->descricaoCurta. "<br>";
}
// +"codigo": "MGBGAG5BNR6E"
//   +"descricao": "Usado: Jogo Gears of Wars - Triple Pack - Xbox 360"
//   +"tipo": "P"
//   +"situacao": "Ativo"
//   +"unidade": "UN"
//   +"preco": "44.9000000000"
//   +"precoCusto": "15.0000000000"
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <table class="table">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Descrição</th>
                <th>Tipo</th>
                <th>Situação</th>
                <th>Unidade</th>
                <th>Preço</th>
                <th></th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>MGBGAG5BNR6E</td>
                <td>Usado: Jogo Gears of Wars - Triple Pack - Xbox 360</td>
                <td>P</td>
                <td>Ativo</td>
                <td>UN</td>
                <td>44.90</td>
                <td type="button" class="btn btn-primary">Ações</td>
            </tr>
        </tbody>
    </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
