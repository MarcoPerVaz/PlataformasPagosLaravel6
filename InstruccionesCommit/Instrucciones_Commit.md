
  <!-- Title -->
  <h1 align="center">Proyecto - Pagos con Laravel 6</h1>
  <!-- End Title -->

  <!-- Commit name -->
  <h2>Commit - <strong>Agregando laravel/ui para construir algunos componentes visuales</strong></h2>
  <!-- End Commit name -->
  
  <!-- Commit instructions -->
  <ol>
   <li>
     Paquete <code>laravel/ui</code> para instalar componentes visuales (bootstrap, react, vue, authentication)
     <pre>composer require laravel/ui:^1.0 --dev</pre>
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