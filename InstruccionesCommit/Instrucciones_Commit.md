
  <!-- Title -->
  <h1 align="center">Proyecto - Pagos con Laravel 6</h1>
  <!-- End Title -->

  <!-- Commit name -->
  <h2>Commit - <strong>Agregando un servicio en Laravel para convertir monedas</strong></h2>
  <!-- End Commit name -->
  
  <!-- Commit instructions -->
  <ol>
   <li>
     Creación y edición del archivo <code>app\Services\CurrencyConversionService.php</code>
     <br>
     <em>*No olvidar importar la clase <code>use Illuminate\Http\Request;</code></em>
    <br>
    <em>*No olvidar importar el servicio <code>use App\Traits\ConsumesExternalServices;</code></em>
     <ul>
       <li>
         Creación y edición de la función constructor <code>__construct()</code>
         <br>
         <em>*No olvidar usar el trait <code>use ConsumesExternalServices;</code></em>
         <br>
         <em>*No olvidar usar la propiedad <code>protected $baseUri;</code></em>
         <br>
         <em>*No olvidar usar la propiedad <code>protected $apiKey;</code></em>
        </li>
        <li>
          Creación y edición de la función <code>resolveAuthorization(&$queryParams, &$formParams, &$headers)</code>
        </li>
        <li>
          Creación y edición de la función <code>decodeResponse($response)</code>
        </li>
        <li>
          Creación y edición de la función <code>resolveAccessToken()</code>
        </li>
        <li>
          Creación de la función <code>convertCurrency($from, $to)</code>
        </li>
     </ul>
    </li>
    <li>
      Abrir Tinker
      <pre>php artisan tinker</pre>
      <ul>
        <li><code>$conversion = resolve(App\Services\CurrencyConversionService::class);</code></li>
        <li><code>$conversion->makeRequest('GET', '/api/v7/currencies');</code></li>
        <li>Salir de tinker <code>exit</code></li>
      </ul>
    </li>
  </ol>
  <!-- End Commit instructions -->
  
  <!-- Notes -->
  <h3>Notas:</h3>
  <ul>
    <li>
      API para conversión de monedas <a href="https://www.currencyconverterapi.com/">currencyconverterapi</a>
      <ul>
        <li>Ir a la <a href="https://www.currencyconverterapi.com/docs">Documentación oficial</a> </li>
        <li>
          Colocar un correo real para recibir la llave
          <br>
          <em>*Al correo llega la llave</em>
        </li>
      </ul>
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