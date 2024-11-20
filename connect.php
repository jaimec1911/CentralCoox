<?php
$serverName = "centralcoox-database.mysql.database.azure.com";
$connectionOptions = array(
    "Database" => "centralcoox-database",
    "Uid" => "jaime",
    "PWD" => "Fingamer=123"
);

// Establecer la conexión
$conn = sqlsrv_connect( $serverName, $connectionOptions );

// Verificar si la conexión fue exitosa
if( !$conn ) {
    die( print_r(sqlsrv_errors(), true));
} else {
    echo "Conexión exitosa a la base de datos.";
}
?>
