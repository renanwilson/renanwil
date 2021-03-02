<?php 

if(isset($_GET['buscar'])){

$servidor = "localhost";
$usuario = "root";
$senha = "";
$base = "listadeamigos";


$conexao = new mysqli($servidor,$usuario,$senha,$base) or die ("ERRO DE CONEXÃO");

    $nome= $_GET['buscar'];

    $query = "select * from bdamigos where nomeAmigo like '$nome%'";

    $sql = $conexao ->query($query);

    echo "<table class = table>";
    echo "<thead>
                 <th>idAmigo</th>
                 <th>nomeAmigo</th>
                 <th>aniversarioAmigo</th>
                 <th>timeAmigo</th>
            </thead>";

    while($linha = $sql -> fetch_array()){

        echo "<tr>";
        echo "<td>" .$linha['idAmigo']. "</td>";
        echo "<td>" .$linha['nomeAmigo']."</td>";
        echo "<td>" .$linha['aniversarioAmigo']."</td>";
        echo "<td>" .$linha['timeAmigo']."</td>";
        echo "</tr>";
        
    }

}
