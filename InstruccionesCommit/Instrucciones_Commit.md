
  <!-- Title -->
  <h1 align="center">Proyecto - Pagos con Laravel 6</h1>
  <!-- End Title -->

  <!-- Commit name -->
  <h2>Commit - <strong>Considerando monedas sin decimales</strong></h2>
  <!-- End Commit name -->
  
  <!-- Commit instructions -->
  <ol>
    <li>
      Edición del archivo <code>database\seeds\CurrenciesTableSeeder.php</code>
    </li>
    <li>
      Reejecutar las migraciones
      <pre>php artisan migrate:fresh --seed</pre>
    </li>
    <li>
      Edición del archivo <code>app\Services\PayPalService.php</code>
      <ul>
        <li>Edición de la función <code>createOrder($value, $currency)</code></li>
        <li>Creación y edición de la función <code>resolveFactor($currency)</code></li>
      </ul>
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