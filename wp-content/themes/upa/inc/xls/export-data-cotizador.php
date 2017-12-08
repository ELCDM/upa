<?php
require_once '../../../../../wp-config.php';
global $wpdb;
global $db;
$fecha = date("Y-m-d");
$auth = true;
if ($auth) {
    $alert = '';
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=UPA-cotizador-".$fecha.".xls");
    header("Pragma: no-cache");
    header("Expires: 0");

    $res = '<table>
    <tr>
        <td>Fecha</td>
        <td>Nombre</td>
        <td>Correo</td>
        <td>Telefono</td>
    </tr>';
    if ($result = $wpdb->get_results("SELECT * FROM cotizador ORDER BY fecha DESC")) {
      foreach ( $result as $results )
      {
        $res .= '<tr>
        <td>' . $results->fecha . '</td>
        <td>' . $results->nombre . '</td>
        <td>' . $results->correo . '</td>
        <td>' . $results->telefono . '</td>
    </tr>';
}
}
$res .= '</table>';
echo $res;
}
?>
