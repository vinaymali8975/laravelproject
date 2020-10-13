@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Admin Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as admin.
                    <form action="Submit" method="Post">

                     @csrf
                    <div class="form-group row">
                            <label for="manufacture" class="col-md-4 col-form-label text-md-right">{{ __(' Manufacture') }}</label>

                            <div class="col-md-6">
                                <input id="manufacture" type="text" class="form-control @error('manufacturer') is-invalid @enderror" name="manufacture"required >

                                @error('manufacturer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"  required>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="model" class="col-md-4 col-form-label text-md-right">{{ __('Model') }}</label>

                            <div class="col-md-6">
                                <input id="model" type="text" class="form-control @error('model') is-invalid @enderror"name="model"required>

                                @error('model')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    
                       <div class="form-group row">
                            <label for="manufacturing_year" class="col-md-4 col-form-label text-md-right">{{ __('Manufacturing_year') }}</label>

                            <div class="col-md-6">
                                <input id="manufacturing_year" type="number" class="form-control @error('manufacturing_year') is-invalid @enderror" name="manufacturing_year">

                                @error('manufacturing_year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        
                        
                        <div class="form-group row">
                            <label for="seating_capacity" class="col-md-4 col-form-label text-md-right">{{ __('seating_capacity ') }}</label>

                            <div class="col-md-6">
                                <input id="seating_capacity" type="number" class="form-control @error('seating_capacity') is-invalid @enderror" name="seating_capacity" min="1" max="10">

                                @error('seating_capacity ')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
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
