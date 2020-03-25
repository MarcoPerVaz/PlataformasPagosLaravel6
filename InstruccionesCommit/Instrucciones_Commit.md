
  <!-- Title -->
  <h1 align="center">Proyecto - Pagos con Laravel 6</h1>
  <!-- End Title -->

  <!-- Commit name -->
  <h2>Commit - <strong>Creando un servicio en Laravel para usar la API de MercadoPago</strong></h2>
  <!-- End Commit name -->
  
  <!-- Commit instructions -->
  <ol>
    <li>
      Creación y edición del archivo <code>app\Services\MercadoPagoService.php</code>
      <ul>
        <li>
          Creación y edición de la función <code>__construct()</code>
          <br>
          <em>
            *No olvidar agregar el trait y las propiedades protegidas
            <br>
            <code>use ConsumesExternalServices;</code>
            <br>
            <code>protected $baseUri;</code>
            <br>
            <code>protected $key;</code>
            <br>
            <code>protected $secret;</code>
            <br>
            <code>protected $base_currency;</code>
          </em>
        </li>
        <li>Creación de la función <code>resolveAuthorization(&$queryParams, &$formParams, &$headers)</code></li>
        <li>Creación y edición de la función <code>decodeResponse($response)</code></li>
        <li>Creación de la función <code>resolveAccessToken()</code></li>
        <li>Creación de la función <code>handlePayment(Request $request)</code></li>
        <li>
          Creación de la función <code>handleApproval()</code>
          <br>
          <em>
            *MercadoPago no necesita esta función porque lo aprueba automáticamente pero se deja como referencia
          </em>
        </li>
        <li>Creación de la función <code>resolveFactor($currency)</code></li>
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