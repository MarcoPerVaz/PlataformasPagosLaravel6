
  <!-- Title -->
  <h1 align="center">Proyecto - Pagos con Laravel 6</h1>
  <!-- End Title -->

  <!-- Commit name -->
  <h2>Commit - <strong>Comprobando la creación de pagos con PayU desde Laravel</strong></h2>
  <!-- End Commit name -->
  
  <!-- Commit instructions -->
  <ol>
    <li>Documentación <a href="http://developers.payulatam.com/es/api/payments.html">Métodos de pago con PayU</a></li>
    <li>
      Abrir Tinker
      <pre>php artisan tinker</pre>
      <ul>
        <li><code>$payU = resolve(App\Services\PayUService::class);</code></li>
        <li>
          <code>
            $payU->createPayment(20000, 'MXN', 'Testing PayU', 'test@testing.com', '4772910000000008', 321, '2020', '12', 'VISA');
            $payU->createPayment(764, 'MXN', 'Jos Rodriguez', 'test@test.com', '4745440951231455', 995, '2021', '02', 'VISA');
            $payU->createPayment(5, 'USD', 'APPROVED', 'test@payulatam.com', '4111111111111111', '123', '2026', '02', 'VISA');
          </code>
          <br>
          <em>*Para generar datos aleatorios de tarjetas <a href="https://www.bestccgen.com/">bestccgen</a></em>
          <br>
          <em>*Los datos del pago se obtienen de la respuesta json en el array creditcard</em>
        </li>
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