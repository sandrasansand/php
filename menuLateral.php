<main class="main">

        <div class="collection" id="menuLat">
            <?php $categorias = listarCategorias();
            if(!empty($categorias)):
                while ($categoria= mysqli_fetch_assoc($categorias)): ?>
                    <a class="collection-item" href="cat.php?id=<?php echo $categoria['id_categoria'] ?>"><?php echo $categoria['nombreCategoria']; ?></a>
                    <?php 

                endwhile; 
            endif;
            ?>   
        </div>


