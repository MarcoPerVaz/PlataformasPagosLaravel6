
  <!-- Title -->
  <h1 align="center">Proyecto - Pagos con Laravel 6</h1>
  <!-- End Title -->

  <!-- Commit name -->
  <h2>Commit - <strong>Convirtiendo monedas con el servicio agregado a Laravel</strong></h2>
  <!-- End Commit name -->
  
  <!-- Commit instructions -->
  <ol>
   <li>
     Edición del archivo <code>app\Services\CurrencyConversionService.php</code>
     <ul>
       <li>Edición de la función <code>convertCurrency($from, $to)</code></li>
     </ul>
    </li>
    <li>
      Abrir Tinker
      <pre>php artisan tinker</pre>
      <ul>
        <li><code>$conversion = resolve(App\Services\CurrencyConversionService::class);</code></li>
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