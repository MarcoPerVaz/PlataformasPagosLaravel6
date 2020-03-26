
  <!-- Title -->
  <h1 align="center">Proyecto - Pagos con Laravel 6</h1>
  <!-- End Title -->

  <!-- Commit name -->
  <h2>Commit - <strong>Resolviendo el factor de conversión a la moneda base de MercadoPago</strong></h2>
  <!-- End Commit name -->
  
  <!-- Commit instructions -->
  <ol>
    <li>
      Edición del archivo <code>app\Services\MercadoPagoService.php</code>
      <ul>
        <li>
          Edición de la función <code>__construct(CurrencyConversionService $converter)</code>
          <br>
          <em>*No olvidar importar <code>use App\Services\CurrencyConversionService;</code></em>
          <br>
          <em>
            *No olvidar agregar la propiedad <code>protected $converter;</code>
          </em>
        </li>
        <li>Edición de la función <code>resolveFactor($currency)</code></li>
      </ul>
    </li>
    <li>
      Abrir Tinker
      <pre>php artisan tinker</pre>
      <ul>
        <li><code>$mercadoPago = resolve(App\Services\MercadoPagoService::class);</code></li>
        <li><code>$mercadoPago->resolveFactor('usd');</code></li>
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
      <a href="https://www.mercadopago.com.mx/developers/es/reference/">¿Cómo funciona?</a>
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