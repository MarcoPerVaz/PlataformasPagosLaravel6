
  <!-- Title -->
  <h1 align="center">Proyecto - Pagos con Laravel 6</h1>
  <!-- End Title -->

  <!-- Commit name -->
  <h2>Commit - <strong>Creando los modelos y tablas esenciales para la plataforma de pagos</strong></h2>
  <!-- End Commit name -->
  
  <!-- Commit instructions -->
  <ol>
    <li>
      Creación del modelo <code>app\PaymentPlatform.php</code>(edición) junto con su migración 
      <code>database\migrations\create_payment_platforms_table.php</code>(edición)
      <pre>php artisan make:model PaymentPlatform -m</pre>
    </li>
    <li>
      Creación del modelo <code>app\Currency.php</code> junto con su migración 
      <code>database\migrations\create_currencies_table.php</code>(edición)
      <pre>php artisan make:model Currency -m</pre>
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
  <!-- End notes -->