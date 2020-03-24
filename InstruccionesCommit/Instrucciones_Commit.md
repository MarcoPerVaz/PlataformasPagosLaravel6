
  <!-- Title -->
  <h1 align="center">Proyecto - Pagos con Laravel 6</h1>
  <!-- End Title -->

  <!-- Commit name -->
  <h2>Commit - <strong>Creando una cuenta y agregando MercadoPago a la plataforma con Laravel</strong></h2>
  <!-- End Commit name -->
  
  <!-- Commit instructions -->
  <ol>
    <li>Ir a <a href="https://www.mercadopago.com.mx/developers">Mercado Pago para Desarrolladores</a></li>
    <li>Iniciar sesión o crear una cuenta</li>
    <li>Edición del archivo <code>database\seeds\PaymentPlatformTableSeeder.php</code></li>
    <li>
      Pegar la imagen descargada de los recursos del curso
      <br>
      1. <code>public\img\payment-platforms\mercadopago.jpg</code>
    </li>
    <li>
      Ejecutar las migraciones, borrando y creandola de nuevo
      <pre>php artisan migrate:fresh --seed</pre>
    </li>
  </ol>
  <!-- End Commit instructions -->
  
  <!-- Notes -->
  <h3>Notas:</h3>
  <ul>
    
  </ul>
    
  <em>
    *Todo lo que está entre comentarios
    &lt;!-- --&gt; (aquí) &lt;!-- --&gt;
    será el código nuevo para el proyecto
  </em>
  <br>
  <em>
    *Las vistas de blade tendrán comentarios para especificar su funcionalidad o propósito
  </em>
  <!-- End notes -->