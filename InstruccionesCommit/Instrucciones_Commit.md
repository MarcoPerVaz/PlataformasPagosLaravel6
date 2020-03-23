
  <!-- Title -->
  <h1 align="center">Proyecto - Pagos con Laravel 6</h1>
  <!-- End Title -->

  <!-- Commit name -->
  <h2>Commit - <strong>Configurando la plataforma de pagos con Laravel para usar Stripe</strong></h2>
 
  <!-- End Commit name -->
  
  <!-- Commit instructions -->
  <ol>
    <li>Edición del archivo <code>config\services.php</code></li>
    <li>
      Edición del archivo .env
      <br>
      <code>STRIPE_BASE_URI=https://api.stripe.com</code>
      <br>
      <code>STRIPE_KEY=ClavePublica</code>
      <br>
      <code>STRIPE_SECRET=ClaveSecreta</code>
    </li>
    <li>
      Edición del archivo <code>.env.example</code> para tener consistencia
      <br>
      <code>STRIPE_BASE_URI=https://api.stripe.com</code>
      <br>
      <code>STRIPE_KEY=</code>
      <br>
      <code>STRIPE_SECRET=</code>
    </li>
  </ol>
  <!-- End Commit instructions -->
  
  <!-- Notes -->
  <h3>Notas:</h3>
  <ul>
    <li>Documentación de la API de <a href="https://stripe.com/docs/api">Stripe</a></li>
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