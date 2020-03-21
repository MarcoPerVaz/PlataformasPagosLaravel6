@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Make a payment</div>

                <div class="card-body">
                  {{-- formulario con POST --}}
                  <form action="#" method="POST" id="paymentForm">
                    @csrf {{-- token csrf --}}

                    <div class="row">
                        <div class="col-auto">
                            <label>How much you want to pay?</label>
                            <input type="number" name="value" 
                                min="5" step="0.01" class="form-control" value="{{ mt_rand(500, 100000) / 100 }}">
                            <small class="form-text text-muted">
                                Use values with up to two decimal positions,
                                using dot "."
                            </small>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <button type="submit" id="payButton" class="btn btn-primary btn-lg">
                            Pay
                        </button>
                    </div>
                  </form>
                  {{-- end Formulario con POST --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


{{-- Notes:
        *mt_rand(500, 100000) / 100 Crea cantidades aleatorias con números decimales cada vez que se actualiza el navegador
--}}