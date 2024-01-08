<div class="user-register">

<section>

   <div id="close-register"><span>Cerrar</span></div>

   <div class="user">
      <?php
         $select_user = $conn->prepare("SELECT * FROM `user` WHERE id = ?");
         $select_user->execute([$user_id]);
         if($select_user->rowCount() > 0){
            while($fetch_user = $select_user->fetch(PDO::FETCH_ASSOC)){
               echo '<p>¡Bievenido! <span>'.$fetch_user['name'].'</span></p>';
               echo '<a href="index.php?logout" class="btn">Cerrar Sesión</a>';
            }
         }else{
            echo '<p><span>Usted no ha iniciado sesión aún.</span></p>';
         }
      ?>
   </div>

   <div class="display-orders">
      <?php
         $select_cart = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
         $select_cart->execute([$user_id]);
         if($select_cart->rowCount() > 0){
            while($fetch_cart = $select_cart->fetch(PDO::FETCH_ASSOC)){
               echo '<p>'.$fetch_cart['name'].' <span>('.$fetch_cart['price'].' x '.$fetch_cart['quantity'].')</span></p>';
            }
         }else{
            echo '<p><span>El carrito está vacío.</span></p>';
         }
      ?>
   </div>
   
   <div class="flex">
      <form action="" method="post">
         <h3>Regístrate</h3>
         <input type="text" name="name" oninput="this.value = this.value.replace(/\s/g, '')" required class="box" placeholder="Ingresa tu nombre de usuario" maxlength="20">
         <input type="email" name="email" required class="box" placeholder="Ingresa tu correo" maxlength="50">
         <input type="password" name="pass" required class="box" placeholder="Ingresa una contraseña" maxlength="20" oninput="this.value = this.value.replace(/\s/g, '')">
         <input type="password" name="cpass" required class="box" placeholder="Confirma la contraseña" maxlength="20" oninput="this.value = this.value.replace(/\s/g, '')">
         <input type="submit" value="Registrarse ahora" name="register" class="register-btn">
      </form>
   </div>
</section>

</div>