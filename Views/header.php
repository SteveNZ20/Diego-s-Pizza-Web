<header class="header">

   <section class="flex">

      <a href="#home" class="logo"><span>D</span>iego´s <span>P</span>izza.</a>

      <nav class="navbar">
         <a href="#home">Inicio</a>
         <a href="#about">Nosotros</a>
         <a href="#menu">Menú</a>
         <a href="#order">Pedidos</a>
         <a href="#faq">FAQ</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
            
         <div id="user-btn" class="fas fa-user tooltip">
            <span class="tooltiptext">Login</span>
         </div>


         <div id="register-btn" class="fas fa-user-circle tooltip">
            <span class="tooltiptext">Register</span>
         </div>


         <div id="order-btn" class="fas fa-box tooltip">
            <span class="tooltiptext">Pedidos</span>
         </div>


         <?php
            $count_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
            $count_cart_items->execute([$user_id]);
            $total_cart_items = $count_cart_items->rowCount();
         ?>

         <div id="cart-btn" class="fas fa-shopping-cart tooltip"><span>(<?= $total_cart_items; ?>)</span>
            <span class="tooltiptext">Carrito</span>
         </div>
         
      </div>
   </section>

</header>