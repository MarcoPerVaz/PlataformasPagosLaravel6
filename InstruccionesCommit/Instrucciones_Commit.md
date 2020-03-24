
  <!-- Title -->
  <h1 align="center">Proyecto - Pagos con Laravel 6</h1>
  <!-- End Title -->

  <!-- Commit name -->
  <h2>Commit - <strong>Creando una intención de pago con la API de Stripe desde Laravel</strong></h2>
  <!-- End Commit name -->
  
  <!-- Commit instructions -->
  <ol>
    <li>
      Edición del archivo <code>app\Services\StripeService.php</code>
      <ul>
        <li>Creación y edición de la función <code>creanteIntent($value, $currency, $paymentMethod)</code></li>
      </ul>
    </li>
    <li>
      Abrir Tinker
      <pre>php artisan tinker</pre>
      <ul>
        <li><code>$stripe = new App\Services\StripeService;</code></li>
        <li>
          <code>$stripe->createIntent(501.52, 'usd', 'pm_1GQ1dHBz6ZR4h2Twj0hYMEDR');</code>
          <br>
          <em>
            *<code>pm_1GQ1dHBz6ZR4h2Twj0hYMEDR</code> Se obtiene iniciando una compra desde la aplicación y en el 
            método pay() del controlador <code>PaymentController devuelva un dd($request->all());</code>
          </em>
        </li>
        <li>Salir de tinker <code>exit</code></li>
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