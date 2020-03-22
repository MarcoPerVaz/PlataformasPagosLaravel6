
  <!-- Title -->
  <h1 align="center">Proyecto - Pagos con Laravel 6</h1>
  <!-- End Title -->

  <!-- Commit name -->
  <h2>Commit - <strong>Agregando las acciones para procesar un pago en la plataforma con Laravel</strong></h2>
  <!-- End Commit name -->
  
  <!-- Commit instructions -->
  <ol>
    <li>
      Creación y edición del controlador <code>app\Http\Controllers\PaymentController.php</code>
      <pre>php artisan make:controller PaymentController</pre>
      <ul>
        <li>Creación y edición de la función <code>pay()</code></li>
        <li>Creación de la función <code>approval()</code></li>
        <li>Creación de la función <code>cancelled()</code></li>
      </ul>
    </li>
    <li>Edición del archivo de rutas <code>routes/web.php</code></li>
    <li>Edición de la vista <code>resources\views\home.blade.php</code></li>
  </ol>
  <!-- End Commit instructions -->
  
  <!-- Notes -->
  <h3>Notas:</h3>

  <ul>
    <li>*Más información en <code>resources\views\home.blade.php</code></li>
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