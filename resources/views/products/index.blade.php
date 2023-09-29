@extends('layouts.app')

@section('content')
    <div class="container h-100">
        <div class="col-3">
            <img src="{{ asset('storage/images/dummy.png') }}" class="img-thumbnail">
            <div class="row">
                <div class="col-12">
                    <p>
                        ロボット掃除機
                        55000円
                    </p>
                    <input type="button" value="カートに入れる">
                </div>
            </div>
        </div>
        <div class="col-3">
            <img src="{{ asset('storage/images/dummy.png') }}" class="img-thumbnail">
            <div class="row">
                <div class="col-12">
                    <p>
                        みかん
                        500円
                    </p>
                    <input type="button" value="カートに入れる">
                </div>
            </div>
        </div>
    </div>
@endsection