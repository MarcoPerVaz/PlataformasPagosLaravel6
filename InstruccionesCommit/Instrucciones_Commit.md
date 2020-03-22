
  <!-- Title -->
  <h1 align="center">Proyecto - Pagos con Laravel 6</h1>
  <!-- End Title -->

  <!-- Commit name -->
  <h2>Commit - <strong>Decodificando y autenticando las peticiones a la API de PayPal</strong></h2>
  <!-- End Commit name -->
  
  <!-- Commit instructions -->
  <ol>
    <li>
      Edición del archivo <code>app\Services\PayPalService.php</code>
      <ul>
        <li>Edición de la función <code>resolveAuthorization(&$queryParams, &$formParams, &$headers)</code></li>
        <li>Creación y edición de la función <code>resolveAccessToken()</code></li>
      </ul>
    </li>
    <li>
      Abrir Tinker para probar que funcione el servicio <code>app\Services\PayPalService.php</code>
      <pre>php artisan tinker</pre>
      <ul>
        <li><code>$paypal = new App\Services\PayPalService;</code></li>
        <li><code>$paypal->makeRequest('GET', '/v1/invoicing/invoices');</code></li>
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