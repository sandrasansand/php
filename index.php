<?php
$titulo_pag= 'Hello';
$viewport='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0';
$description='Galeria de arte, art gallery, arte contemporáneo, exposiciones, publicaciones';
$keywords='eccomerce, pintura, galeria, arte, gallery'; 
include 'header.php';
include 'menuLateral.php';

include 'aside.php'; ?>

<!-- en linea de pedido id_producto  id-pedido FK // pedidos FK- id-producto vaciar tabla -->


<div class="carousel">
  <h2 align="center">Los más vendidos</h2><br><br><br>
  <?php $productos = listarMasVendidos();
  if(!empty($productos)):
    while ($producto= mysqli_fetch_assoc($productos)): ?>

      <a class="carousel-item" href="cat.php?id=<?php echo $producto['id_categoria'] ?>"><img src="<?php echo $producto['imagen'] ?>"></a>

      <?php 
    endwhile; 
  endif;
  ?>   
</div>


<div class="categorias">
 <?php $categorias = listarCategorias();
 if(!empty($categorias)):
  while ($categoria= mysqli_fetch_assoc($categorias)): ?>
    <div class="row">
      <div class="col s12 m3">

        <div class="card medium">
          <div class="card-image">
            <img class="responsive-img" src="<?php echo $categoria['imagenCat'] ?>">
            <span class="card-title"><?php echo $categoria['nombreCategoria'] ?></span>
          </div>
          <div class="card-content">
            <?php echo $categoria['descripcion'] ?>
          </div>
          <div class="card-action">
            <a href="cat.php?id=<?php echo $categoria['id_categoria'] ?>">Entra</a> 
          </div>
        </div>

      </div>
    </div>
    <?php 
  endwhile; 
endif;
?>   
</div>
</main>


 <marquee  class="MyMarquee" id="my_marquee" direction="lefth" behavior="9" scrollamount="6" onmouseover="this.stop()" onmouseout="this.start()"><a name="noticias" href=""></a>
   <div>Últimas noticias, promociones, exposiciones..</div>
   <div><img src="https://html-generator.com/uploads/images/2021/01/22/40223ED2V0J0U94.jpg" width="120" height="80" alt="marquee image"></div>
   <div><img src="https://html-generator.com/uploads/images/2021/01/22/683539NFQ1X1LO0.jpg" width="120" height="80" alt="marquee image"></div>
   <div><img src="https://html-generator.com/uploads/images/2021/01/22/38115LRJXJO1SKQ.jpg" width="120" height="80" alt="marquee image"></div>
   <div><img src="https://html-generator.com/uploads/images/2021/01/22/51342CO_TCSRH6M.jpg" width="120" height="80" alt="marquee image"></div>
   <div>Del 01/04/2021 al 15/10/2021 Exposición  Temporal en Fundación Ausias March</div>
   <div><img src="https://html-generator.com/uploads/images/2021/01/22/72691VFFGPY730O.jpg" width="120" height="80" alt="marquee image"></div>
   <div><img src="https://html-generator.com/uploads/images/2021/01/22/03483QPNY_2RDKL.jpg" width="120" height="80" alt="marquee image"></div>
   <div><img src="https://html-generator.com/uploads/images/2021/01/22/077291ZEBAG73G1.jpg" width="120" height="80" alt="marquee image"></div>
 </marquee><br><br>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script  src="js/script.js"></script> 
<script src="js/app.js"></script>
<script >
 document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.carousel');
  var instances = M.Carousel.init(elems,{
    
    indicators: true
  });
});
</script>

<script src="js/ajax.js"></script>
<?php include 'footer.php'; ?> 
</body>
</html>