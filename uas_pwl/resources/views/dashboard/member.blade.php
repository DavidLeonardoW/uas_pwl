@extends('layouts.master')

@section('title', 'Event')
@section('content')
    <div class="row pt-10 mt-10">
        <div class="col-12 mt-10 pt-10">
            <div class="card">
                <div class="card-body">
                    <div class="d-md-flex align-items-center">
                        <div>
                            <h4 class="card-title">Welcome {{ Auth::user()->name }}!</h4>
                            <p class="card-subtitle">
                                Event Terbaru!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
