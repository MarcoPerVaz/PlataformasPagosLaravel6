
  <!-- Title -->
  <h1 align="center">Proyecto - Pagos con Laravel 6</h1>
  <!-- End Title -->

  <!-- Commit name -->
  <h2>Commit - <strong>Confirmando una intención de pago desde Laravel usando la API de Stripe</strong></h2>
  <!-- End Commit name -->
  
  <!-- Commit instructions -->
  <ol>
    <li>
      Edición del archivo <code>app\Services\StripeService.php</code>
      <ul>
        <li>Creación y edición de la función <code>confirmPayment($paymentIntentId)</code></li>
      </ul>
    </li>
    <li>
      Abrir Tinker
      <pre>php artisan tinker</pre>
      <ul>
        <li><code>$stripe = new App\Services\StripeService;</code></li>
        <li>
          <code>$stripe->createIntent(223.20, 'jpy', 'pm_1GQ2FYBz6ZR4h2TwOf9zt1VP'); </code> 
          Se obtiene iniciando una compra desde la aplicación y en el
          método pay() del controlador <code>PaymentController devuelva un dd($request->all());</code> 
          se obtiene el paymentIntentId <code>pi_1GQ2ICBz6ZR4h2Twk2sviRxJ</code>
        </li>
        <li><code>$stripe->confirmPayment'(pi_1GQ2ICBz6ZR4h2Twk2sviRxJ');</code></li>
        <li>Salir de Tinker <code>exit</code></li>
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