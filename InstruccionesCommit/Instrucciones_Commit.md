
  <!-- Title -->
  <h1 align="center">Proyecto - Pagos con Laravel 6</h1>
  <!-- End Title -->

  <!-- Commit name -->
  <h2>Commit - <strong>Creando cuentas de prueba en Paypal para enviar y recibir pagos</strong></h2>
  <!-- End Commit name -->
  
  <!-- Commit instructions -->
  <ol>
   <li>
     ir al sitio <a href="https://developer.paypal.com/classic-home/">PayPal Developer</a>
    </li>
   <li>
     Inicia sesión o crear cuenta
    <br>
    <em>*Solo cuentas de negocio podrán recibir pagos pero la cuenta personal permite hacer pruebas</em>
   </li>
   <li>
     ir a <a href="https://developer.paypal.com/developer/applications/">Dashboard</a>
     ó click izquierdo en tu cuenta y click en dashboard
    </li>
    <li>Click en la sección SANDBOX/Accounts</li>
    <li>Click en Create Account</li>
    <li>Seleccionar Personal (Buyer Account)</li>
    <li>
      Seleccionar Country /Region
      <br>
      United States of America
    </li>
    <li>Click en Create</li>
    <li>Borrar las Sandbox Accounts que permita eliminar para crear las personalizadas</li>
    <li>
      Click en Create Account
      <ul>
        <li>Click en Create Custom Account</li>
        <li>Seleccionar Country /Region <code>United States of America</code></li>
        <li>Seleccionar en Account Type <code>Personal (Buyer Account)</code></li>
        <li>Asignar Email Address: <code>marcooPersonal@mail.com</code></li>
        <li>Asignar Password: <code>12345678</code></li>
        <li>Asignar First Name(opcional) <code>marcoo</code></li>
        <li>Asignar Last Name(opcional) <code>Admin</code></li>
        <li>Asignar PayPal Balance <code>15000</code></li>
        <li>Seleccionar en bank Verified Account <code>Yes</code></li>
        <li>Seleccionar en Select Payment Card <code>Paypal</code></li>
        <li>Seleccionar Credt cards <code>Mastercard o la que sea</code></li>
        <li>Click en Create Account</li>
      </ul>
    </li>
    <li>
      Click en Create Account
      <ul>
        <li>Click en Create Custom Account</li>
        <li>Seleccionar Country /Region <code>United States of America</code></li>
        <li>Seleccionar en Account Type <code>Business (Merchant Account)</code></li>
        <li>Asignar Email Address: <code>marcooBusiness@mail.com</code></li>
        <li>Asignar Password: <code>12345678</code></li>
        <li>Asignar First Name(opcional) <code>marcoo</code></li>
        <li>Asignar Last Name(opcional) <code>Business</code></li>
        <li>Asignar PayPal Balance <code>0</code></li>
        <li>Seleccionar en bank Verified Account <code>Yes</code></li>
        <li>Seleccionar Credt cards <code>Mastercard o la que sea</code></li>
        <li>Click en Create Account</li>
      </ul>
    </li>
    <li>También se pueden usar las cuentas Personal y Business creadas por default</li>
    <li>
      Ir a <a href="https://www.sandbox.paypal.com/">Sandbox</a>
      <ul>
        <li>
          Inicia sesión con las cuentas falsas de Paypal si se quiere ver la información de la cuenta
        </li>
      </ul>
    </li>
  </ol>
  <!-- End Commit instructions -->
  
  <!-- Notes -->
  <h3>Notas:</h3>

  <ul>
    <li>
      *Más información en <code>app\Traits\ConsumesExternalServices.php</code>
        <br>
        *El archivo contiene mucha información sobre el uso del Trait ConsumesExternalServices
    </li>
    <li>
      *En la función makeRequest() agregar 'verify' => false, pero solo en modo de desarrollo, modo de producción poner true
       o quitar la línea 
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