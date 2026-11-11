<?php include "header.php";?>
<main>
    <?php include "portada.php";?>
    <section class="servicio contenedor">
        <h2>Servicios</h2>
        <div class="cards" id="cards"></div>
    </section>
    <section class="preguntas contenedor">
        <h2>Preguntas frecuentes</h2>
        <div class="accordion">
            <div class="item">
                <button class="titulo">¿Horario?</button>
                <div class="contenido">
                    <p>De lunes a Domingo de 11:00am a 8:30pm</p>
                </div>
            </div>
            <div class="item">
                <button class="titulo">¿Solo atienden con cita?</button>
                <div class="contenido">
                    <p>No, aunque puedes agendar tu espacio, tambien puedes llegar directamente al local</p>
                </div>
            </div>
            <div class="item">
                <button class="titulo">¿Cuentan con parqueo?</button>
                <div class="contenido">
                    <p>Sí, contamos con amplio parqueo</p>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="galeria contenedor">
      <h2>Galería</h2>
      <p>Algunos de nuestros trabajos</p>
      <img src="./img/Image20261027204706.png" alt="Auto limpio" />
      <img src="./img/Image20261027204709.jpg" alt="Auto pulido" />
      <img src="./img/img-3.webp" alt="Auto encerado" />
    </section>-->
</main>
<?php include "footer.php";?>