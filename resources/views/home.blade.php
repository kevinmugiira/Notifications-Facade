@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
            <div class="form-group">
                <h1>Welcome to my page!</h1>

                <form action="payments" method="post">
                    @csrf
                    <button type="submit">Make Payment</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
