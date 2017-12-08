<?php
require_once '../../../../../wp-config.php';
global $wpdb;
mysql_query("SET NAMES 'utf8'");
global $db;
$fecha = date("Y-m-d");
$auth = true;
if ($auth) {
    $alert = '';
    header("Content-type: application/vnd.ms-excel;charset=utf-8");
    header("Content-Disposition: attachment; filename=upa-productos-".$fecha.".xls");
    header("Pragma: no-cache");
    header("Expires: 0"); 

    $res = '<table>
    <tr>
        <td>Fecha</td>
        <td>Nombre</td>
        <td>Correo</td>
        <td>Telefono</td>
        <td>Agencia</td>
        <td>Producto</td>
        <td>Mensaje</td>
    </tr>';
    if ($result = $wpdb->get_results("SELECT * FROM producto ORDER BY fecha DESC")) {
      foreach ( $result as $results )
      {
        $res .= '<tr>
        <td>' . $results->fecha . '</td>
        <td>' . $results->nombre . '</td>
        <td>' . $results->correo . '</td>
        <td>' . $results->telefono . '</td>
        <td>' . $results->agencia . '</td>
        <td>' . $results->producto . '</td>
        <td>' . $results->mensaje . '</td>
    </tr>';
}
}
$res .= '</table>';
echo $res;
}
?>
