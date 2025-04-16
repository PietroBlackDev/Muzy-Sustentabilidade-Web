
<?php
$dsn = "odbc:Driver={ODBC Driver 17 for SQL Server};Server=10.125.121.109,1435;Database=voluxinterf;";
$username = "MuzySystem";
$password = "vsfkelvin2";

try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Verificar o banco de dados
    $stmt = $conn->query("SELECT DB_NAME() AS CurrentDatabase");
    $currentDatabase = $stmt->fetchColumn();
    // echo "Banco de dados atual:" . $currentDatabase . '<br><br>';
} catch (PDOException $e) {
    echo "Erro ao conectar: " . $e->getMessage();
}
?>
