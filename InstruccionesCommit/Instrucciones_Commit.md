
  <!-- Title -->
  <h1 align="center">Proyecto - Pagos con Laravel 6</h1>
  <!-- End Title -->

  <!-- Commit name -->
  <h2>Commit - <strong>Preparando la plataforma de pagos y llenando la base de datos desde laravel</strong></h2>
  <!-- End Commit name -->
  
  <!-- Commit instructions -->
  <ol>
    <li>
      Edición del archivo <code>.env</code>
      <br>
      <code>APP_NAME="Payments Processing"</code>
      <br>
      <code>APP_URL=https://laravelsistemapagos/</code>
      <br>
      <code>DB_DATABASE=laravelsistemapagos-laravel6</code>
      <br>
      <code>DB_USERNAME=root</code>
      <br>
      <code>DB_PASSWORD=</code>
    </li>
    <li>Crear la Base de datos <code>laravelsistemapagos-laravel6</code></li>
    <li>
      Edición del archivo <code>.env.example</code>
      <br>
      <em>*Se modifica para tener consistencia en caso de clonar el proyecto</em>
    </li>
    <li>
      Creación y edición del archivo seeder <code>database\seeds\PaymentPlatformTableSeeder.php</code>
      <pre>php artisan make:seeder PaymentPlatformTableSeeder</pre>
      <ul>
        <li>
          Edición de la función <code>public function run()</code>
          <br>
          <em>*No olvidar importar el modelo <code>use App\PaymentPlatform;</code></em>
        </li>
      </ul>
    </li>
    <li>
      Creación y edición del archivo seeder <code>database\seeds\CurrenciesTableSeeder.php</code>
      <pre>php artisan make:seeder CurrenciesTableSeeder</pre>
      <ul>
        <li>
          Edición de la función <code>public function run()</code>
          <br>
          <em>*No olvidar importar el modelo <code>use App\Currency;</code></em>
        </li>
      </ul>
    </li>
    <li>
      Creación de la carpeta <code>public\img</code>
      <ul>
        Creación de la carpeta <code>public\img\payment-platforms</code>
        <ul>
          <li>
            Pegar las imágenes descargadas de los recursos del curso
            <br>
            1. <code>public\img\payment-platforms\paypal.jpg</code>
            <br>
            2. <code>public\img\payment-platforms\stripe.jpg</code>
          </li>
        </ul>
      </ul>
    </li>
    <li>
      Edición del archivo <code>database\seeds\DatabaseSeeder.php</code>
      <ul>
        <li>Edición de la función <code>public function run()</code></li>
      </ul>
    </li>
    <li>
      Ejecutar las migraciones junto con los seeds(datos predefinidos)
      <pre>php artisan migrate:fresh --seed</pre>
    </li>
  </ol>
  <!-- End Commit instructions -->
  
  <!-- Notes -->
  <h3>Notas:</h3>

  <ul>
    <li>
      *Se puede usar tinker para verificar que existen los datos de los seeds(datos predefinidos)
      <br>
      Abrir tinker
      <pre>php artisan tinker</pre>
      Escribir <code>Currency::all();</code> ó <code>PaymentPlatform::all();</code>
      <br>
      Salir de Tinker desde la consola
      <pre>exit</pre>
    </li>
  </ul>
    
  <em>
    *Todo lo que está entre comentarios
    &lt;!-- --&gt; (aquí) &lt;!-- --&gt;
    será el código nuevo para el proyecto
  </em>
  <!-- End notes -->