
  <!-- Title -->
  <h1 align="center">Proyecto - Pagos con Laravel 6</h1>
  <!-- End Title -->

  <!-- Commit name -->
  <h2>Commit - <strong>Creando una aplicación de PayPal para consumir su API desde Laravel</strong></h2>
  <!-- End Commit name -->
  
  <!-- Commit instructions -->
  <ol>
    <li>
      Desde el dashboard de <a href="https://developer.paypal.com">Developer PayPal</a>
      <ul>
        <li>Iniciar sesión</li>
        <li>Ir a la sección de <code>My Apps & Credentials</code></li>
        <li>
          Click en <code>Create App</code>
          <ul>
            <li>Asignar App Name <code></code></li>
            <li>Seleccionar en Sandbox Business Account <code>La cuenta business</code></li>
            <li>Click en <code>Create App</code></li>
            <br>
            <em>*Con esto ya se obtienen las credenciales de la API de PayPal</em>
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