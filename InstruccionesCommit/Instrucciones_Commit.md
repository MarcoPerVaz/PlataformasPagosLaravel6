
  <!-- Title -->
  <h1 align="center">Proyecto - Pagos con Laravel 6</h1>
  <!-- End Title -->

  <!-- Commit name -->
  <h2>Commit - <strong>Creando el servicio para Laravel que usará la API de Stripe</strong></h2>
 
  <!-- End Commit name -->
  
  <!-- Commit instructions -->
  <ol>
    <li>
      Creación y edición del archivo <code>app\Services\StripeService.php</code>
      <br>
      <em>*No olvidar importar <code>use App\Traits\ConsumesExternalServices;</code></em>
      <ul>
        <li>
          Creación y edición de la función constructor <code>__construct()</code>
          <br>
          <em>*No olvidar colocar <code>use ConsumesExternalServices;</code></em>
          <br>
          <em>*No olvidar crear las propiedades</em>
          <br>
          <em><code>protected $key;</code></em>
          <br>
          <em><code>protected $secret;</code></em>
          <br>
          <em><code>protected $baseUri;</code></em>
        </li>
        <li>
          Creación de la función <code>resolveAuthorization(&$queryParams, &$formParams, &$headers)</code>
        </li>
        <li>
          Creación y edición de la función <code>decodeResponse($response)</code>
        </li>
        <li>Creación de la función <code>resolveAccessToken()</code></li>
        <li>Creación de la función <code>handlePayment(Request $request)</code></li>
        <li>Creación de la función <code>handleApproval()</code></li>
        <li>Creación y edición de la función <code>resolveFactor($currency)</code></li>
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