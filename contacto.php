<?php include "header.php";?>
<section class="contenedor">
      <main>
      <?php include "portada.php";?>
      <h1>Contacto</h1>
      <form action="enviar.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required />
        <br>
           <br>
        <label for="correo">Email:</label>
        <input type="email" id="correo" name="correo" required />
        <br>
<br>
        <label for="mensaje">Mensaje:</label>
        <textarea name="mensaje" id="mensaje" rows="5" required></textarea>
        <br>
        <br>
        <button type="submit">Enviar</button>
      </form>
    </main>
</section>
  <?php include "footer.php";?>