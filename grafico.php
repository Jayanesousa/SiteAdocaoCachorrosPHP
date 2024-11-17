<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$nomedobanco = "siteadocaophp";

try {
    $pdo = new PDO("mysql:host=$servidor;dbname=$nomedobanco", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $queryAdotar = $pdo->query("SELECT COUNT(*) AS total FROM adotar");
    $adotarCount = $queryAdotar->fetch(PDO::FETCH_ASSOC)['total'];

    $queryDivulgar = $pdo->query("SELECT COUNT(*) AS total FROM divulgar");
    $divulgarCount = $queryDivulgar->fetch(PDO::FETCH_ASSOC)['total'];
} catch (PDOException $e) {
    die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráfico de Ações</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> 
</head>
<body>
    <h1>Comparação de Ações: Adotar x Divulgar</h1>
    <canvas id="acoesChart" width="400" height="200"></canvas> 
    <script>
        const ctx = document.getElementById('acoesChart').getContext('2d');
        const acoesChart = new Chart(ctx, {
            type: 'bar', 
            data: {
                labels: ['Adoções', 'Divulgações'], 
                datasets: [{
                    label: 'Número de Ações',
                    data: [<?php echo $adotarCount; ?>, <?php echo $divulgarCount; ?>], 
                    backgroundColor: ['rgba(75, 192, 192, 0.2)', 'rgba(255, 99, 132, 0.2)'],
                    borderColor: ['rgba(75, 192, 192, 1)', 'rgba(255, 99, 132, 1)'],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true 
                    }
                }
            }
        });
    </script>
</body>
</html>
