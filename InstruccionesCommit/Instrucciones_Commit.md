
  <!-- Title -->
  <h1 align="center">Proyecto - Pagos con Laravel 6</h1>
  <!-- End Title -->

  <!-- Commit name -->
  <h2>Commit - <strong>Considerando Strong Customer Authentication(SCA) con Stripe</strong></h2>
  <!-- End Commit name -->
  
  <!-- Commit instructions -->
  <ol>
    <li>
      Edición del archivo <code>app\Services\StripeService.php</code>
      <ul>
        <li>Edición de la función <code>pay(Request $request)</code></li>
      </ul>
    </li>
  </ol>
  <!-- End Commit instructions -->
  
  <!-- Notes -->
  <h3>Notas:</h3>
  <ul>
    <li>
      Documentación sobre <a href="https://stripe.com/docs/strong-customer-authentication/migration">SCA</a>
    </li>
    <li>
      Documentación de <a href="https://stripe.com/docs/strong-customer-authentication/migration#one-time">un solo pago</a>
    </li>
    <li>
      Documentación de <a href="https://stripe.com/docs/testing#regulatory-cards">Regulatory (3D Secure) test card numbers</a>
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