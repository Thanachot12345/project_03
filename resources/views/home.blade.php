@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('My profile') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }} <br>
                    <h5> Name:    {{ Auth::user()->name }}</h5>
                     <h5> Email:    {{ Auth::user()->email }}</h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
