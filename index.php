<!-- header section starts  -->
<?php include_once 'Controllers/maincontroller.php' ?>
<!-- header section ends -->

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Diego´s Pizza</title>

   <!-- Fuente de letra link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- Css link  -->
   <link rel="stylesheet" href="css/style.css">
</head>
<body>


<?php
   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>


<!-- header section starts  -->
<?php include_once 'Views/header.php' ?>
<!-- header section ends -->


<!-- Icono Login section starts  -->
<?php include_once 'Models/iconologin.php' ?>
<!-- Icono Login section ends -->


<!-- Icono Register section starts  -->
<?php include_once 'Models/iconoregister.php' ?>
<!-- Icono Register section ends -->


<!-- Icono Pedido section starts  -->
<?php include_once 'Models/iconopedido.php' ?>
<!-- Icono pedido section ends -->


<!-- Icono Carrito section starts  -->
<?php include_once 'Models/iconocarrito.php' ?>
<!-- Icono Carrito section ends -->


<!-- Inicio section starts  -->
<?php include_once 'Views/inicio.php' ?>
<!-- Inicio section ends -->


<!-- Nosotros section starts  -->
<?php include_once 'Views/nosotros.php' ?>
<!-- Nosotros section ends -->


<!-- Menú section starts  -->
<?php include_once 'Views/menu.php' ?>
<!-- Menú section ends -->


<!-- Pedidos section starts  -->
<?php include_once 'Views/pedidos.php' ?>
<!-- Pedidos section ends -->


<!-- FAQ section starts  -->
<?php include_once 'Views/faq.php' ?>
<!-- FAQ section ends -->


<!-- footer section starts  -->
<?php include_once 'Views/footer.php' ?>
<!-- footer section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>