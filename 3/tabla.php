<?php
$a = [
        [
                'producto' => 'referencia 1',
                'precio' => 10,
                'cantidad' => 5,
        ],
        [
                'producto' => 'referencia 1',
                'precio' => 20,
                'cantidad' => 5,
        ],
        [
               'producto' => 'referencia 1',
                'precio' => 30,
                'cantidad' => 5,        ]
];
?>

<table border="1">
<th>producto</th>
<th>precio</th>
<th>cantidad</th>
<?php
foreach ( $a as $r ) {
        ?>
        <tr>
        <?php
        foreach ( $r as $v ) {
        ?>
                <td><?php echo $v;?></td>
        <?php
        }
        ?>
        </tr>
<?php
}
?>
</table>
<a href="comprar">comprar</a>