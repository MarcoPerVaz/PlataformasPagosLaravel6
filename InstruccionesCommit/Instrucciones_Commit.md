
  <!-- Title -->
  <h1 align="center">Proyecto - Pagos con Laravel 6</h1>
  <!-- End Title -->

  <!-- Commit name -->
  <h2>Commit - <strong>Solicitando el método de pago para cobrar con MercadoPago desde Laravel</strong></h2>
  <!-- End Commit name -->
  
  <!-- Commit instructions -->
  <ol>
    <li>Creación y edición de la vista <code>resources\views\components\mercadopago-collapse.blade.php</code></li>
    <li>
      Ir a 
      <a href="https://www.mercadopago.com.mx/developers/es/guides/payments/api/receiving-payment-by-card/">
        Recibir pagos con tarjeta(incluir MercadoPago.js) - (Librería javascript de Mercado Pago)
      </a>
      <a href="https://www.mercadopago.com.co/developers/es/guides/payments/api/receiving-payment-by-card/">
        Recibir pagos con tarjeta(incluir MercadoPago.js) - (Librería javascript de Mercado Pago)
      </a>
      <em>
        *La documentación para México no pide tipo de documento por lo que se puso entre comentarios
         window.Mercadopago.getIdentificationTypes();
         <br>
        *También los campos html que pedían el tipo de documento y su nombre
      </em>
      <ul>
        <li>
          Copiar
          <code>src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"</code>
        </li>
        <li>Pegar rn la vista <code>resources\views\components\mercadopago-collapse.blade.php</code></li>
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