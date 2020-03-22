
  <!-- Title -->
  <h1 align="center">Proyecto - Pagos con Laravel 6</h1>
  <!-- End Title -->

  <!-- Commit name -->
  <h2>Commit - <strong>Configurando la plataforma de pagos en Laravel para usar la API de Paypal</strong></h2>
  <!-- End Commit name -->
  
  <!-- Commit instructions -->
  <ol>
    <li>
      Edición del archivo <code>config\services.php</code>
      <br>
      <code>'paypal' => [</code>
      <br>
      <code>'base_uri' => env('PAYPAL_BASE_URI'),</code>
      <br>
      <code>'client_uri' => env('PAYPAL_CLIENT_ID'),</code>
      <br>
      <code>'client_secret' => env('PAYPAL_CLIENT_SECRET'),</code>
      <br>
      <code>],</code>
    </li>
    <li>
      Edición del archivo <code>.env</code>
      <br>
      <code>PAYPAL_BASE_URI=https://api.sandbox.paypal.com</code>
      <br>
      <code>PAYPAL_CLIENT_ID=</code> Pegar el Client Id desde la página de Paypal
      <br>
      <code>PAYPAL_CLIENT_SECRET=</code> Pegar el Client Id desde la página de Paypal
    </li>
    <li>
      Edición del archivo <code>.env.example</code>
      <br>
      <code>PAYPAL_BASE_URI=https://api.sandbox.paypal.com</code>
      <br>
      <code>PAYPAL_CLIENT_ID=</code> Es información sensible y no se puede mostrar
      <br>
      <code>PAYPAL_CLIENT_SECRET=</code> Es información sensible y no se puede mostrar
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