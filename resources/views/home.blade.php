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
                        {{-- amount --}}
                        <div class="col-auto">
                            <label>How much you want to pay?</label>
                            <input type="number" name="value" 
                                min="5" step="0.01" class="form-control" value="{{ mt_rand(500, 100000) / 100 }}" required>
                            <small class="form-text text-muted">
                                Use values with up to two decimal positions,
                                using dot "."
                            </small>
                        </div>
                         {{-- end amount --}}

                         {{-- currency --}}
                        <div class="col-auto">
                            <label>Currency</label>
                            <select name="currency" class="custom-select" required>
                                @foreach ($currencies as $currency)
                                    <option value="{{ $currency->iso }}">
                                        {{ strtoupper($currency->iso) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                         {{-- end currency --}}
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
        *{{ $currency->iso }} Obtiene el valor del foreach y del campo iso de la base de datos
        *strtoupper($currency->iso) Convierte a mayúscula la variable sin afectar el campo iso en la base de datos
--}}