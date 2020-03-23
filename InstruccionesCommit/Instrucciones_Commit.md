
  <!-- Title -->
  <h1 align="center">Proyecto - Pagos con Laravel 6</h1>
  <!-- End Title -->

  <!-- Commit name -->
  <h2>Commit - <strong>Resolviendo el servicio de la plataforma de pago según elección del usuario</strong></h2>
  <!-- End Commit name -->
  
  <!-- Commit instructions -->
  <ol>
   <li>
     Edición del controlador <code>app\Http\Controllers\PaymentController.php</code>
     <ul>
       <li>
         Creación y edición de la función constructor <code>__construct(PaymentPlatformResolver $paymentPlatformResolver)</code>
         <br>
         <em>*No olvidar importar <code>use App\Resolvers\PaymentPlatformResolver;</code></em>
         <br>
         <em>*No olvidar crear la propiedad <code>protected $paymentPlatformResolver;</code></em>
        </li>
        <li>Edición de la función <code>pay(Request $request)</code></li>
        <li>Edición de la función <code>approval()</code></li>
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