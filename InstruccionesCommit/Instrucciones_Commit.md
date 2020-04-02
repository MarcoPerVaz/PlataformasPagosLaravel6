
  <!-- Title -->
  <h1 align="center">Proyecto - Pagos con Laravel 6</h1>
  <!-- End Title -->

  <!-- Commit name -->
  <h2>Commit - <strong>*Agregando un nuevo servicio de conversión de moneda</strong></h2>
  <!-- End Commit name -->
  
  <!-- Commit instructions -->
  <ol>
    <h3><em><strong>*Servicio agregado por mi, porque CurrencyConversion no funcionaba*</strong></em></h3>
    <li>
      Creación y edición del archivo <code>app\Services\exChangeRateService.php</code>
      <br>
      <em>*No olvidar importar <code>use App\Traits\ConsumesExternalServices;</code></em>
      <ul>
        <li>
          Creación y edición de la función constructor <code>public function __construct()</code>
          <br>
          <em>*No olvidar agregar <code>use ConsumesExternalServices;</code></em>
          <br>
          <em>*No olvidar agregar <code>protected $baseUri;</code></em>
          <br>
          <em>*No olvidar agregar <code>protected protected $apiKey;</code></em> 
        </li>
        <li>
          Creación y edición de la función 
          <code>public function resolveAuthorization(&$queryParams, &$formParams, &$headers)</code>
        </li>
        <li>
          Creación y edición de la función <code>public function decodeResponse($response)</code>
        </li>
        <li>
          Creación y edición de la función <code>public function resolveAccessToken()</code>
        </li>
        <li>
          Creación y edición de la función <code>public function convertCurrency($from, $to)</code>
        </li>
      </ul>
    </li>
    <li>
      Edición del archivo <code>config\services.php</code>
      <br>
      <em>
        *Por estándar ordenar los servicios por orden alfabético (En este caso solo se ordenó en base a los nuevos
        servicios)
      </em>
    </li>
    <li>
      Edición del archivo <code>.env</code>
      <ul>
        <li><code>EX_CHANGE_CONVERSION_BASE_URI=https://prime.exchangerate-api.com</code></li>
        <li><code>EX_CHANGE_CONVERSION_API_KEY=</code>llaveAPI</li>
      </ul>
    </li>
    <li>
      Edición del archivo <code>.env.example</code> para tener consistencia en caso de clonar el proyecto
      <ul>
        <li><code>EX_CHANGE_CONVERSION_BASE_URI=https://prime.exchangerate-api.com</code></li>
        <li><code>EX_CHANGE_CONVERSION_API_KEY=</code></li>
      </ul>
    </li>
    <li>
      Abrir Tinker
      <pre>php artisan tinker</pre>
      <ul>
        <li><code>$conversion = resolve(App\Services\exChangeRateService::class);</code></li>
        <li><code>$conversion->convertCurrency('usd', 'mxn');</code></li>
        <li>Salir de Tinker <code>exit</code></li>
      </ul>
    </li>
  </ol>
  <!-- End Commit instructions -->
  
  <!-- Notes -->
  <h3>Notas:</h3>
  <ul>
    <li>
      Documentación oficial
      <a href="https://www.exchangerate-api.com/docs/standard-requests">ExchangeRate-API</a>
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