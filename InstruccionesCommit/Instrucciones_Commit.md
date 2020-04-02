
  <!-- Title -->
  <h1 align="center">Proyecto - Pagos con Laravel 6</h1>
  <!-- End Title -->

  <!-- Commit name -->
  <h2>Commit - <strong>*Creando un pago con la API de MercadoPago desde Laravel</strong></h2>
  <!-- End Commit name -->
  
  <!-- Commit instructions -->
  <ol>
    <h3>
      <em>
        <strong>
          *Modificación del original porque CurrencyService no funcionaba y se tuvo que cambiar
          de servicio de conversión de monedas a ExchangeRate-API*
        </strong>
    </em>
    </h3>
    <li>
      Edición del archivo <code>app\Services\MercadoPagoService.php</code>
      <ul>
        <li>
          Edición de la función constructor <code>__construct(exChangeRateService $converter)</code>
          <br>
          <em>*No olvidar importar <code>use App\Services\exChangeRateService;</code></em>
        </li>
      </ul>
    </li>
    <li>
      Crear un pago desde la consola usando Tinker
      <br>
      Abrir Tinker
      <pre>php artisan tinker</pre>
      <ul>
        <li><code>$mercadoPago = resolve(App\Services\MercadoPagoService::class);</code></li>
        <li>
          <code>
            $mercadoPago->createPayment(500, 'usd', 'visa', '618f03f9836157728b3dd20fb666fe2a', 'test@testing.com');
          </code>
          <br>
          <em>
            *Dónde 
            <code>618f03f9836157728b3dd20fb666fe2a</code> se obtiene al enviar un pago desde la interfaz de la aplicación 
            con Laravel
          </em>
        </li>
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