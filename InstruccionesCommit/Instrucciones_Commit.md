
  <!-- Title -->
  <h1 align="center">Proyecto - Pagos con Laravel 6</h1>
  <!-- End Title -->

  <!-- Commit name -->
  <h2>Commit - <strong>Creando un servicio en Laravel para usar la API de PayU</strong></h2>
  <!-- End Commit name -->
  
  <!-- Commit instructions -->
  <ol>
    <li>Documentación <a href="http://developers.payulatam.com/es/api/payments.html">Métodos de pago con PayU</a></li>
    <li>
      Creación y edición del archivo <code>app\Services\PayUService.php</code>
      <br>
      <em>*No olvidar crear las variables protegidas</em>
      <br>
      <em><code>protected $baseUri;</code></em>
      <br>
      <em><code>protected $key;</code></em>
      <br>
      <em><code>protected $secret;</code></em>
      <br>
      <em><code>protected $baseCurrency;</code></em>
      <br>
      <em><code>protected $merchantId;</code></em>
      <br>
      <em><code>protected $accountId;</code></em>
      <br>
      <em><code>protected $converter;</code></em>
      <ul>
        <li>Edición de la función contructor <code>__construct(exChangeRateService $converter)</code></li>
        <li>Creación de la función <code>resolveAuthorization(&$queryParams, &$formParams, &$headers)</code></li>
        <li>Creación y edición de la función <code>decodeResponse($response)</code></li>
        <li>
          Creación y edición de la función <code>handlePayment(Request $request)</code>
          <br>
          <em>*Se copio de la misma función de MercadoPagoService para después modificarla a la necesidad de PayU</em>
        </li>
        <li>
          Se creó la función <code>handleApproval()</code>
          <br>
          <em>*Esta función no la necesita PayU pero se deja como referencia para otros servicios</em>
        </li>
        <li>
          Creación y edición de la función 
          <code>createPayment($value, $currency, $cardNetwork, $cardToken, $email, $installments = 1)</code>
          <br>
          <em>*Se copio de la misma función de MercadoPagoService para después modificarla a la necesidad de PayU</em>
        </li>
        <li>Creación y edición de la función <code>resolveFactor($currency)</code></li>
        <li>Creación de la función <code>generateSignature()</code></li>
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