
  <!-- Title -->
  <h1 align="center">Proyecto - Pagos con Laravel 6</h1>
  <!-- End Title -->

  <!-- Commit name -->
  <h2>Commit - <strong>Configurando el servicio de conversión de monedas en Laravel</strong></h2>
  <!-- End Commit name -->
  
  <!-- Commit instructions -->
  <ol>
    <li>
      Edición del archivo <code>config\services.php</code>
      <em>
        *Por estándar ordenar los servicios por orden alfabético (En este caso solo se ordenó en base a los nuevos servicios)
      </em>
    </li>
    <li>
      Edición del archivo <code>.env</code>
      <ul>
        <li><code>CURRENCY_CONVERSION_BASE_URI=https://free.currconv.com</code></li>
        <li><code>CURRENCY_CONVERSION_API_KEY=</code>llaveEnviadaAlCorreo</li>
      </ul>
    </li>
    <li>
      Edición del archivo <code>.env.example</code> para tener consistencia en caso de clonar el proyecto
      <ul>
        <li><code>CURRENCY_CONVERSION_BASE_URI=https://free.currconv.com</code></li>
        <li><code>CURRENCY_CONVERSION_API_KEY=</code>llaveEnviadaAlCorreo</li>
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