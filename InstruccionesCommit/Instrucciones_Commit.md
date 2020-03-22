
  <!-- Title -->
  <h1 align="center">Proyecto - Pagos con Laravel 6</h1>
  <!-- End Title -->

  <!-- Commit name -->
  <h2>Commit - <strong>Creando un componente para usar cualquier API de las plataformas de pagos</strong></h2>
  <!-- End Commit name -->
  
  <!-- Commit instructions -->
  <ol>
    <li>
      Creación de la carpeta <code>app\Traits</code>
      <ul>
        <li>
          Creación y edición del archivo <code>app\Traits\ConsumesExternalServices.php</code>
          <ul>
            <li>Creación y edición de la función 
              <code>
                makeRequest($method, $requestUrl, $queryParams = [], $formParams = [], $headers = [], $isJsonRequest = false)
              </code>
              <br>
              <em>*No olvidar importar la clase <code>use GuzzleHttp\Client;</code></em>
            </li>
          </ul>
        </li>
      </ul>
    </li>
  </ol>
  <!-- End Commit instructions -->
  
  <!-- Notes -->
  <h3>Notas:</h3>

  <ul>
    <li>
      *Más información en <code>app\Traits\ConsumesExternalServices.php</code>
        <br>
        *El archivo contiene mucha información sobre el uso del Trait ConsumesExternalServices
    </li>
    <li>
      *En la función makeRequest() agregar 'verify' => false, pero solo en modo de desarrollo, modo de producción poner true
       o quitar la línea 
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