
  <!-- Title -->
  <h1 align="center">Proyecto - Pagos con Laravel 6</h1>
  <!-- End Title -->

  <!-- Commit name -->
  <h2>Commit - <strong>Capturando un pago de una orden dada  en laravel con la API de PayPal</strong></h2>
  <!-- End Commit name -->
  
  <!-- Commit instructions -->
  <ol>
   <li>
     Abrir Tinker
     <pre>php artisan tinker</pre>
     <ul>
       <li><code>$paypal = new App\Services\PayPalService;</code></li>
       <li>code $paypal->createOrder(100.5, 'usd');</li>
       <li>
         Salir de tinker <code>exit</code>
       </li>
     </ul>
   </li>
   <li>
     Edición del archivo <code>app\Services\PayPalService.php</code>
     <ul>
       <li>Creación y edición de la función <code>capturePayment($approvalId)</code></li>
     </ul>
   </li>
  <li>
    Abrir Tinker
    <pre>php artisan tinker</pre>
    <ul>
      <li><code>$paypal = new App\Services\PayPalService;</code></li>
      <li>
        code $paypal->capturePayment(idOrder);
        <br>
        Ejemplo: <code>$paypal->capturePayment('4UA1730624007441J');</code>
      </li>
      <li>
        Salir de tinker <code>exit</code>
      </li>
    </ul>
  </li>
  </ol>
  <!-- End Commit instructions -->
  
  <!-- Notes -->
  <h3>Notas:</h3>

  <ul>
    <li>
      Documentación oficial de <a href="https://developer.paypal.com/docs/api/overview/">Paypal API</a>
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