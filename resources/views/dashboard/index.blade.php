@extends('dashboard.master')

@section('body')
    <div class="container">
       <div class="row">
        <div class="col-3">
            <a href="{{ route('vatcal.index') }}" class="card shadow-lg text-dark">
                <div class="card-body">
                    Vat Calculator
                </div>
            </a>
        </div>
       </div>
    </div>


@endsection
