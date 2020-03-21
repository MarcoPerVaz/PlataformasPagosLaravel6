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

                    {{-- payment platform --}}
                    <div class="row mt-3">
                        <div class="col">
                            <label>Select the desire payment platform:</label>
                            <div id="toggler" class="form-group">
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                    @foreach ($paymentPlatforms as $paymentPlatform)
                                        <label data-target="#{{ $paymentPlatform->name }}Collapse" data-toggle="collapse" 
                                                class="btn btn-outline-secondary rounded m-2 p-1">
                                            <input type="radio" name="payment_platform" value="{{ $paymentPlatform->id }}" required>
                                            <img src="{{ asset($paymentPlatform->image) }}" class="img-thumbnail">
                                        </label>
                                    @endforeach

                                </div>

                            @foreach ($paymentPlatforms as $paymentPlatform)
                                <div id="{{ $paymentPlatform->name }}Collapse" data-parent="#toggler" class="collapse">
                                    @includeIf('components.' . strtolower($paymentPlatform->name) . '-collapse')
                                </div>
                            @endforeach
                            
                            </div>
                        </div>
                    </div>
                    {{-- end payment platform --}}

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
        *@foreach ($paymentPlatforms as $paymentPlatform) permite recorrer y mostra la información de las plataformas de pago
        *strtolower($paymentPlatform) Convierte a minúscula la variable sin afectar el campo paymentPlatform en la base de datos
        * @includeIf solo si existe la vista la mostrará
--}}