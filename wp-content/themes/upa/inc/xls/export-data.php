<?php

$auth = true;
if ($auth) {
    $alert = '';
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=Dits-clientes.xls");
    header("Pragma: no-cache");
    header("Expires: 0");

    $mysqli = new mysqli('localhost', 'ditsgt_dwuser', 'BRG{J][dycu^', 'ditsgt_ditsweb');
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    $res = '<table>
            <tr>
                <td>Fecha</td>
                <td>Nombre</td>
                <td>Correo</td>
                <td>Empresa</td>
                <td>Cargo</td>
            </tr>';
    if ($result = $mysqli->query("SELECT * FROM PD_ur_data ORDER BY fecha DESC")) {
        while ($obj = $result->fetch_object()) {
            $res .= '<tr>
                    <td>' . $obj->fecha . '</td>
                    <td>' . $obj->nombre . '</td>
                        <td>' . $obj->correo . '</td>
                            <td>' . $obj->empresa . '</td>
                                <td>' . $obj->cargo . '</td>
                </tr>';
        }
    }
    $res .= '</table>';
    echo $res;
}
?>