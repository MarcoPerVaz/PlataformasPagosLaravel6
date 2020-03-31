
<label class="mt-3">Cards details:</label>

{{-- bank card --}}
<div class="form-group form-row">
  <div class="col-5">
    <input type="text" class="form-control" id="cardNumber" data-checkout="cardNumber" placeholder="Card Number">
  </div>
  <div class="col-2">
    <input type="text" class="form-control" data-checkout="securityCode" placeholder="CVC">
  </div>

  <div class="col-1"></div>

  <div class="col-1">
    <input type="text" class="form-control" data-checkout="cardExpirationMonth" placeholder="MM">
  </div>
  <div class="col-1">
    <input type="text" class="form-control" data-checkout="cardExpirationYear" placeholder="YY">
  </div>
</div>
{{-- end bank card --}}

{{-- user Data --}}
<div class="form-group form-row">
  <div class="col-5">
    <input type="text" class="form-control" data-checkout="cardholderName" placeholder="Your Name">
  </div>
  <div class="col-5">
    <input type="email" class="form-control" data-checkout="cardholderEmail" placeholder="email@example.com" name="email">
  </div>
</div>
{{-- end user Data --}}

{{-- document type --}} {{-- La documentación de México no lo usa  --}}
{{-- <div class="form-group form-row">
  <div class="col-2">
    <select class="custom-select" data-checkout="docType"></select>
  </div>
  <div class="col-3">
    <input type="text" class="form-control" data-checkout="docNumber" placeholder="Document">
  </div>
</div> --}}
{{-- end document type --}} {{-- La documentación de México no lo usa  --}}

@push('scripts')
  <script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>

  <script>
    const mercadoPago = window.Mercadopago;

    mercadoPago.setPublishableKey('{{ config('services.mercadopago.key') }}');

    // mercadoPago.getIdentificationTypes(); /* La documentación de México no lo usa */
  </script>
@endpush