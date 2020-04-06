
  <!-- Title -->
  <h1 align="center">Proyecto - Pagos con Laravel 6</h1>
  <!-- End Title -->

  <!-- Commit name -->
  <h2>Commit - <strong>Generando una firma para procesar un pago con PayU</strong></h2>
  <!-- End Commit name -->
  
  <!-- Commit instructions -->
  <ol>
    <li>Documentación <a href="http://developers.payulatam.com/es/api/payments.html">Métodos de pago con PayU</a></li>
    <li>
      Documentación <a href="http://developers.payulatam.com/es/api/considerations.html">Consideraciones sobre variables</a>
    </li>
    <li>
      Edición del archivo <code>app\Services\PayUService.php</code>
      <ul>
        <li>Edición de la función <code>generateSignature()</code></li>
        <li>Edición de la función constructor <code>__construct(exChangeRateService $converter)</code></li>
      </ul>
    </li>
    <li>
      Abrir Tinker
      <pre>php artisan tinker</pre>
      <ul>
        <li><code>$payU = resolve(App\Services\PayUService::class);</code></li>
        <li><code>$payU->generateSignature('Pago de prueba', '20000');</code></li>
        <li>Salir de tinker <code>exit</code></li>
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
  <br>
  <em>*Más información en <code>app\Services\PayUService.php</code></em>
  <!-- End notes -->