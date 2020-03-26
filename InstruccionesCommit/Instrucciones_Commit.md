
  <!-- Title -->
  <h1 align="center">Proyecto - Pagos con Laravel 6</h1>
  <!-- End Title -->

  <!-- Commit name -->
  <h2>Commit - <strong>Decodificando y autenticando las peticiones a la API de MercadoPago</strong></h2>
  <!-- End Commit name -->
  
  <!-- Commit instructions -->
  <ol>
    <li>
      Edición del archivo <code>app\Services\MercadoPagoService.php</code>
      <ul>
        <li>Edición de la función <code>resolveAccessToken()</code></li>
        <li>Edición de la función <code>resolveAuthorization(&$queryParams, &$formParams, &$headers)</code></li>
      </ul>
    </li>
    <li>
      Abrir Tinker
      <pre>php artisan tinker</pre>
      <ul>
        <li><code>$mercadoPago = resolve(App\Services\MercadoPagoService::class);</code></li>
        <li><code>$mercadoPago->makeRequest('GET', '/v1/payment_methods');</code></li>
        <li>Salir de Tinker <code>exit</code></li>
      </ul>
    </li>
  </ol>
  <!-- End Commit instructions -->
  
  <!-- Notes -->
  <h3>Notas:</h3>
  <ul>
    <li>
      Documentación oficial
      <a href="https://www.mercadopago.com.mx/developers/es/reference/">¿Cómo funciona?</a>
    </li>
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