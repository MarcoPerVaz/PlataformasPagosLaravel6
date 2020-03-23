
  <!-- Title -->
  <h1 align="center">Proyecto - Pagos con Laravel 6</h1>
  <!-- End Title -->

  <!-- Commit name -->
  <h2>Commit - <strong>Creando un componente que resuelva una plataforma de pago dinámicamente</strong></h2>
  <!-- End Commit name -->
  
  <!-- Commit instructions -->
  <ol>
   <li>
     Creación de la carpeta <code>app\Resolvers</code>
     <ul>
       <li>
         Creación y edición del archivo <code>app\Resolvers\PaymentPlatformResolver.php</code>
         <ul>
           <li>
             Creación y edición de la función constructor <code>__construct()</code>
             <br>
             <em>*No olvidar importar el modelo <code>use App\PaymentPlatform;</code></em>
           </li>
           <li>
             Creación y edición de la función <code>resolveService($paymentPlatformId)</code>
             <br>
             <em>*No olvidar importar la definición <code>use Exception;</code></em>
           </li>
         </ul>
        </li>
     </ul>
   </li>
   <li>Edición del archivo <code>config\services.php</code></li>
   <li>
     Abrir Tinker
     <pre>php artisan tinker</pre>
       <ul>
        <li><code>$resolver = new App\Resolvers\PaymentPlatformResolver;</code></li>
        <li>
          <code>$resolver->resolveService(numServicio)</code>
          <br>
          Ejemplo: <code>$resolver->resolveService(1)</code> <!-- 1= PayPal -->
        </li>
        <li>Salir de tinker <code>exit</code></li>
       </ul>
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