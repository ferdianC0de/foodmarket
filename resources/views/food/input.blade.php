@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Food</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('create-food') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="food_name" class="col-md-4 col-form-label text-md-right">{{ __('Food Name') }}</label>

                            <div class="col-md-6">
                                <input id="food_name" type="text" class="form-control{{ $errors->has('food_name') ? ' is-invalid' : '' }}" name="food_name" value="{{ old('food_name') }}" required autofocus>

                                @if ($errors->has('food_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('food_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="desc" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <textarea id="desc" class="form-control{{ $errors->has('desc') ? ' is-invalid' : '' }}" name="desc" value="{{ old('desc') }}"></textarea>

                                @if ($errors->has('desc'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('desc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="number" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" required>

                                @if ($errors->has('price'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="stock" class="col-md-4 col-form-label text-md-right">{{ __('Stock') }}</label>

                            <div class="col-md-6">
                                <input id="stock" type="number" class="form-control{{ $errors->has('stock') ? ' is-invalid' : '' }}" name="stock" required>

                                @if ($errors->has('stock'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('stock') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register the food') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
