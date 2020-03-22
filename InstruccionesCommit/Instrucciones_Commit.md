
  <!-- Title -->
  <h1 align="center">Proyecto - Pagos con Laravel 6</h1>
  <!-- End Title -->

  <!-- Commit name -->
  <h2>Commit - <strong>Controlando desde Laravel la creación de una orden usando PayPal</strong></h2>
  <!-- End Commit name -->
  
  <!-- Commit instructions -->
  <ol>
    <li>
      Edición del controlador <code>app\Http\Controllers\PaymentController.php</code>
      <li>
        Edición de la función <code>pay(Request $request)</code>
        <br>
        <em>*No olvidar importar la clase <code>use App\Services\PayPalService;</code></em>
      </li>
    </li>
    <li>
      Edición del archivo <code>app\Services\PayPalService.php</code>
      <ul>
        <li>
          Creación y edición de la función <code>handlePayment(Request $request)</code>
          <br>
          <em>*No olvidar importar la clase <code>use Illuminate\Http\Request;</code></em>
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