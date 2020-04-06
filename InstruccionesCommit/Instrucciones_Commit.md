
  <!-- Title -->
  <h1 align="center">Proyecto - Pagos con Laravel 6</h1>
  <!-- End Title -->

  <!-- Commit name -->
  <h2>Commit - <strong>Autenticando las peticiones a la APi de PayU</strong></h2>
  <!-- End Commit name -->
  
  <!-- Commit instructions -->
  <ol>
    <li>Documentación <a href="http://developers.payulatam.com/es/api/payments.html">Métodos de pago con PayU</a></li>
    <li>
      Edición del archivo <code>app\Services\PayUService.php</code>
      <ul>
        <li>Edición de la función <code>resolveAuthorization(&$queryParams, &$formParams, &$headers)</code></li>
      </ul>
    </li>
    <li>
      Abrir Tinker
      <pre>php artisan tinker</pre>
      <ul>
        <li><code>$payU = resolve(App\Services\PayUService::class);</code></li>
        <li>
          <code>
            $payU->makeRequest('POST', '/payments-api/4.0/service.cgi', [], ['language' => 'es', 'command' =>
            'GET_PAYMENT_METHODS'], ['Accept' => 'application/json'], true);
          </code>
        </li>
        <li>Salir de Tinker <code>ecit</code></li>
      </ul>
    </li>
  </ol>
  <!-- End Commit instructions -->
  
  <!-- Notes -->
  <h3>Notas:</h3>
  <ul>
   <li>Documentación de la API de <a href="http://developers.payulatam.com/es/api/">PayU</a></li>
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