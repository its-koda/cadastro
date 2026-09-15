<?php
// Array associativo (Contendo informações de produtos)
$produtos = [
    ["nome" => "Camiseta", "cor" => "azul", "preco" => 50.00, "quantidade" => 10, "marca" => "Insider"],
    ["nome" => "Calça Jeans", "cor" => "preto", "preco" => 200.00, "quantidade" => 15,"marca" => "Levi's"],
    ["nome" => "Tênis", "cor" => "vermelho", "preco" => 300.00, "quantidade" => 12, "marca" => "Nike"],
    ["nome" => "Carteira", "cor" => "marrom", "preco" => 80.00, "quantidade" => 7, "marca" => "Nordweg"],
    ["nome" => "Cinto", "cor" => "azul escuro", "preco" => 65.00, "quantidade" => 13, "marca" => "Reserva"],
];

// Exibe os dados em tabela
echo "<table border='1'>";
echo "<caption><h2>Lista de Produtos</h2></caption>";
echo "<tr> <th>Nome</th> <th>Cor</th> <th>Preço</th> <th>Quantidade</th> <th>Marca</th> </tr>";

foreach ($produtos as $produto) {
    echo "<tr>";
    echo "<td>" . $produto['nome'] . "</td>";
    echo "<td>" . $produto['cor'] . "</td>";
    echo "<td>R$ " . number_format($produto['preco'], 2, ',', '.') . "</td>";
    echo "<td>" . $produto['quantidade'] . "</td>";
    echo "<td>" . $produto['marca'] . "</td>";
    echo "</tr>";
}

echo "</table>";

?>