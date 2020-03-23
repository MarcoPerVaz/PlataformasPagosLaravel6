
  <!-- Title -->
  <h1 align="center">Proyecto - Pagos con Laravel 6</h1>
  <!-- End Title -->

  <!-- Commit name -->
  <h2>Commit - <strong>Decodificando y autenticando las peticiones a la API de Stripe</strong></h2>
 
  <!-- End Commit name -->
  
  <!-- Commit instructions -->
  <ol>
    <li>
      Edición del archivo <code>app\Services\StripeService.php</code>
      <ul>
        <li>Edición de la función <code>resolveAuthorization(&$queryParams, &$formParams, &$headers)</code></li>
        <li>Edición de la función <code></code></li>
        <li>
          Abrir Tinker (para hacer la prueba de conexión del servicio)
          <pre>php artisan tinker</pre>
          <ul>
            <li><code>$stripe = new App\Services\StripeService;</code></li>
            <li><code>$stripe->makeRequest('GET', '/v1/balance');</code></li>
            <li>Salir de Tinker <code>exit</code></li>
          </ul>
        </li>
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