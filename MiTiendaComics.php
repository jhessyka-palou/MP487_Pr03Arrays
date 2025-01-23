<?php
// Definición del inventario de cómics
$inventario = [
    'suspense_terror' => [
        ['titulo' => 'The Long Halloween', 'editorial' => 'DC', 'autor' => 'Tim Sale', 'idioma' => 'Inglés', 'precio' => 20, 'stock' => 10],
        ['titulo' => 'Uzumaki', 'editorial' => 'Planeta', 'autor' => 'Junji Ito', 'idioma' => 'Japonés', 'precio' => 25, 'stock' => 15],
        ['titulo' => 'Tomie', 'editorial' => 'Planeta', 'autor' => 'Junji Ito', 'idioma' => 'Japonés', 'precio' => 25, 'stock' => 20],
    ],
    'accion' => [
        ['titulo' => 'Berserk Deluxe Edition 1', 'editorial' => 'Dark Horse', 'autor' => 'Kentaro Miura', 'idioma' => 'Japonés', 'precio' => 30, 'stock' => 12],
    ],
    // Puedes agregar más categorías y cómics según sea necesario
];

// main
// antes descuento
mostrarComicsEnTabla();
mostrarValorAlmacen();
aplicarDescuentoManga();
// mostramos el inventario actualizado
mostrarComicsEnTabla();
mostrarValorAlmacen();

function mostrarComicsEnTabla()
{
    global $inventario;
    echo '<br>';
    echo '<table border="1">';
    echo '<tr><th>Categoría</th><th>Título</th><th>Editorial</th><th>Autor</th><th>Idioma</th><th>Precio</th><th>Stock</th></tr>';

    foreach ($inventario as $categoria => $comics) {
        foreach ($comics as $comic) {
            echo '<tr>';
            echo "<td>$categoria</td>";
            echo "<td>{$comic['titulo']}</td>";
            echo "<td>{$comic['editorial']}</td>";
            echo "<td>{$comic['autor']}</td>";
            echo "<td>{$comic['idioma']}</td>";
            echo "<td>{$comic['precio']}</td>";
            echo "<td>{$comic['stock']}</td>";
            echo '</tr>';
        }
    }

    echo '</table>';
}

function mostrarValorAlmacen()
{
    global $inventario;
    $valorTotal = 0; // nueva variable para almacenar
    foreach ($inventario as $categoria => $comics) { //recorre las categorias del inventario al comic
        foreach ($comics as $comic) { //recorre los comics 
            $valorTotal += $comic['precio'] * $comic['stock']; //formula del enunciado
        }
    }
    echo "<p>Total valor almacen: $valorTotal</p>";
}

function aplicarDescuentoManga()
{
    global $inventario;

    foreach ($inventario as $categoria => &$comics) { //recorre hasta comics y lo modifica
        foreach ($comics as &$comic) {
            if ($comic['idioma'] == 'Japonés') { //aplicar condicion de rebaja a comics en japones
                $comic['precio'] = $comic['precio'] * 0.7;
            }
        }
    }
}


?>


