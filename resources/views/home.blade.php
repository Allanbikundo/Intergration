@extends('layouts.app')

@section('content')
<div class="container">
    <div class="btn-group" data-toggle="buttons">
        <label class="btn btn-primary active">
            <input type="radio" name="" id="" autocomplete="off" checked>
            iHRIS
        </label>
        <br/>
        <label class="btn btn-primary|secondary|success|danger|warning|info|light|dark|link">
            <input type="radio" name="" id="" autocomplete="off">
        </label>
        <br/>
        <label class="btn btn-primary|secondary|success|danger|warning|info|light|dark|link">
            <input type=" radio" name="" id=" " autocomplete="off ">
        </label>
    </div>
</div>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
