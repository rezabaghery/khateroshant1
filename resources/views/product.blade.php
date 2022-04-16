@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-4 mt-2">
                <div class="card">
                    <img src="{{$img}}">
                </div>
            </div>
            <div class="col-md-8 mt-2">
                <div class="card">
                    <div class="card-header">{{$title}}</div>

                    <div class="card-body">
                        قیمت :
                        {{$price}}
                        تومان
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
