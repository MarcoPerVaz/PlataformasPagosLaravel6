
  <!-- Title -->
  <h1 align="center">Proyecto - Pagos con Laravel 6</h1>
  <!-- End Title -->

  <!-- Commit name -->
  <h2>Commit - <strong>Creando un pago con la API de MercadoPago desde Laravel</strong></h2>
  <!-- End Commit name -->
  
  <!-- Commit instructions -->
  <ol>
    <li>
      Edición del archivo <code>app\Services\MercadoPagoService.php</code>
      <ul>
        <li>
          Creación y edición de la función 
          <code>createPayment($value, $currency, $cardNetwork, $cardToken, $email, $installments)</code>
        </li>
      </ul>
    </li>
  </ol>
  <!-- End Commit instructions -->
  
  <!-- Notes -->
  <h3>Notas:</h3>
  <ul>
    <li>
      Documentación oficial
      <a href="https://www.mercadopago.com.mx/developers/es/reference/">¿Cómo funciona?</a>
    </li>
    <li>
      Documentación oficial para
      <a href="https://www.mercadopago.com.mx/developers/es/reference/payments/_payments/post/">Crear un pago</a>
    </li>
    <li>
      Documentación para hacer pruebas
      <a href="https://www.mercadopago.com.mx/developers/es/guides/payments/api/testing/">Tarjetas de prueba</a>
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