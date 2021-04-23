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
                    <div class="row d-flex justify-content-center">
                        <h3>Internal</h3>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <a href="/timesheet/list" class="btn btn-primary col-md-4">Timesheet</a>
                    </div>
                    <hr/>
                    <div class="row d-flex justify-content-center">
                        <h3>External</h3>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <a href="http://gitpm.transwater.com.my/" class="btn btn-primary col-md-4">Group Processmaker</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
