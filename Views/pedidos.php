<section class="order" id="order">

   <h1 class="heading">Ordena ahora</h1>

   <form action="" method="post">

   <div class="display-orders">

   <?php
         $grand_total = 0;
         $cart_item[] = '';
         $select_cart = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
         $select_cart->execute([$user_id]);
         if($select_cart->rowCount() > 0){
            while($fetch_cart = $select_cart->fetch(PDO::FETCH_ASSOC)){
              $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']);
              $grand_total += $sub_total; 
              $cart_item[] = $fetch_cart['name'].' ( '.$fetch_cart['price'].' x '.$fetch_cart['quantity'].' ) - ';
              $total_products = implode($cart_item);
              echo '<p>'.$fetch_cart['name'].' <span>('.$fetch_cart['price'].' x '.$fetch_cart['quantity'].')</span></p>';
            }
         }else{
            echo '<p class="empty"><span>El carrito está vacío.</span></p>';
         }
      ?>

   </div>

      <div class="grand-total"> Total a pagar : <span>$<?= $grand_total; ?>/-</span></div>

      <input type="hidden" name="total_products" value="<?= $total_products; ?>">
      <input type="hidden" name="total_price" value="<?= $grand_total; ?>">

      <div class="flex">
         <div class="inputBox">
            <span>Nombre :</span>
            <input type="text" name="name" class="box" required placeholder="Ingresa tu nombre" maxlength="20">
         </div>
         <div class="inputBox">
            <span>Método de Pago :</span>
            <select name="method" class="box">
               <option value="cash on delivery">Pagar al contado al Delivery</option>
               <option value="credit card">Tarjeta Bancaria</option>
               <option value="paytm">Yape</option>
               <option value="paypal">Plin</option>
            </select>
         </div>
         <div class="inputBox">
            <span>Número Celular :</span>
            <input type="number" name="number" class="box" required placeholder="Ingresa tu número celular" min="900000000" max="999999999" onkeypress="if(this.value.length == 10) return false;">
         </div>
         <div class="inputBox">
            <span>Dirección :</span>
            <input type="text" name="flat" class="box" required placeholder="Ingresa la dirección del lugar de envío" maxlength="50">
         </div>
         <div class="inputBox">
            <span>Correo :</span>
            <input type="email" name="email" required class="box" placeholder="Ingresa tu correo electrónico" maxlength="50">
         </div>
         <div class="inputBox">
            <span>Referencia de la dirección :</span>
            <input type="text" name="street" class="box" required placeholder="Ingresa una referencia de la dirección de envío" maxlength="50">
         </div>
      </div>

      <input type="submit" value="¡Ordena ya!" class="btn" name="order">

   </form>
</section>