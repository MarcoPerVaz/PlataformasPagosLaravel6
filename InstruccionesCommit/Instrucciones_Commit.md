
  <!-- Title -->
  <h1 align="center">Proyecto - Pagos con Laravel 6</h1>
  <!-- End Title -->

  <!-- Commit name -->
  <h2>Commit - <strong>Obteniendo y configurando las credenciales de la API de PayU</strong></h2>
  <!-- End Commit name -->
  
  <!-- Commit instructions -->
  <ol>
    <li>Documentación <a href="http://developers.payulatam.com/es/api/payments.html">Métodos de pago con PayU</a></li>
    <li>
      Para obtener la API Key <a href="http://developers.payulatam.com/es/api/sandbox.html">Credenciales</a>
      <br>
      <em>
        *A diferencia de las otras plataformas PayU no necesita crearse cuenta, ya que sus crendenciales son para todos
      </em>
    </li>
    <li>Edición del archivo <code>config\services.php</code></li>
    <li>
      Edición del archivo <code>.env</code>
      <br>
      <em><code>PAYU_BASE_URI=https://sandbox.api.payulatam.com</code></em>
      <br>
      <em><code>PAYU_BASE_ACCOUNT_ID=</code></em>
      <br>
      <em><code>PAYU_BASE_MERCHANT_ID=</code></em>
      <br>
      <em><code> PAYU_KEY=</code></em>
      <br>
      <em><code>PAYU_SECRET=</code></em>
    </li>
    <li>
      Edición del archivo <code>.env.example</code>
      <br>
      <em><code>PAYU_BASE_URI=https://sandbox.api.payulatam.com</code></em>
      <br>
      <em><code>PAYU_BASE_ACCOUNT_ID=</code>accountId</em>
      <br>
      <em><code>PAYU_BASE_MERCHANT_ID=</code>merchantId</em>
      <br>
      <em><code> PAYU_KEY=</code>API Key</em>
      <br>
      <em><code>PAYU_SECRET=</code>API Login</em>
      <br>
      <em>
        <strong>
          *Los valores de las variables de entorno son sacadas de 
          <a href="http://developers.payulatam.com/es/api/sandbox.html">Pruebas con la API</a>
        </strong>
      </em>
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