<?php include "header.php";?>
    <main>
      <?php include "portada.php";?>
      <h1>Contacto</h1>
      <form action="enviar.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required />

        <label for="correo">Email:</label>
        <input type="email" id="correo" name="correo" required />

        <label for="mensaje">Mensaje:</label>
        <textarea name="mensaje" id="mensaje" rows="5" required></textarea>
        <button type="submit">Enviar</button>
      </form>
    </main>
  <?php include "footer.php";?>