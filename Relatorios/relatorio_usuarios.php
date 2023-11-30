<?php

include '../controller/conexao.php';

$sql = "SELECT id_usuario, nome, email FROM usuario;";
$res = $conn -> query($sql);

$html = "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
            </tr>";

if($res -> num_rows > 0){
    while($row = $res->fetch_assoc()){
$html .= "<tr>
            <td>".$row['id_usuario']."</td>
            <td>".$row['nome']."</td>
            <td>".$row['email']."</td>
          </tr>";
}
}else{
    $html = "<tr><td colspan='3'>Nenhum usuário cadastrado</td></tr>";
}

$html .= "</table>";

use Dompdf\Dompdf;

require_once 'dompdf_2-0-3/dompdf/autoload.inc.php';

$dompdf = new Dompdf();

$dompdf -> loadHtml($html);
$dompdf -> set_option('defaultFont', 'sans');
$dompdf -> setPaper('A4', 'portrait');
$dompdf -> render();
$dompdf -> stream();

?>