
  <!-- Title -->
  <h1 align="center">Proyecto - Pagos con Laravel 6</h1>
  <!-- End Title -->

  <!-- Commit name -->
  <h2>Commit - <strong>Agregando un servicio en Laravel encargado de consumir la API de PayPal</strong></h2>
  <!-- End Commit name -->
  
  <!-- Commit instructions -->
  <ol>
   <li>
     Creación de la carpeta <code>app\Services</code>
     <ul>
       <li>
         Creación y edición del archivo <code>app\Services\PayPalService.php</code>
         <ul>
           <li>
             Creación de la clase <code>class PayPalService</code>
              <ul>
                <em>*No olvidar importar el trait <code>use ConsumesExternalServices;</code></em>
                <br>
                <em>*No olvidar importar la clase <code>use App\Traits\ConsumesExternalServices;</code></em>
                <br>
                <em>*No olvidar crear las variables protegidas</em>
                <br>
                <code>protected $baseUri;</code>
                <br>
                <code>protected $clientId;</code>
                <br>
                <code>protected $clientSecret;</code>
              </ul>
            </li>
         </ul>
        </li>
        <li>Creación de la función <code>resolveAuthorization(&$queryParams, &$formParams, &$headers)</code></li>
        <li>Creación de la función <code>public function decodeResponse($response)</code></li>
        <li>Creación y edición de la función constructor <code>__construct()</code></li>
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