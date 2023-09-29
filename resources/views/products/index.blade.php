@extends('layouts.app')

@section('content')
    <div class="container h-100">
        <div class="item">
            <div><img src="{{ asset('storage/images/dummy.png') }}" alt=""></div>
            <p>トマト</p>
            <p>130円</p>
            <br>
            <input type="button" value="カートに入れる">
        </div>
    </div>
@endsection