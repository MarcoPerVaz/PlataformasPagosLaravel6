
  <!-- Title -->
  <h1 align="center">Proyecto - Pagos con Laravel 6</h1>
  <!-- End Title -->

  <!-- Commit name -->
  <h2>Commit - <strong>Creando un pago con la API de PayU desde Laravel</strong></h2>
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
        <li>
          Edición de la función 
          <code>createPayment($value, $currency, $name, $email, $card, $cvc, $year, $month,
          $network, $installments = 1, $paymentCountry = 'MX')</code>
          <br>
          <em>*No olvidar importar <code>use Illuminate\Support\Str;</code></em>
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