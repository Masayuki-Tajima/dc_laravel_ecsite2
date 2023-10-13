@extends('layouts.app')

@section('content')
    <div class="container h-100">
        <div class="col-3">
            <form method="post" action="{{ route('carts.store') }}">
                    <img src="{{ asset('images/dummy.png') }}" class="img-thumbnail">
                    <div class="row">
                        <div class="col-12">
                            <p>
                                
                                55000円
                            </p>
                        </div>
                    </div>
                    <input type="button" value="カートに入れる">
            </form>
        </div>
        <div class="col-3">
            <img src="{{ asset('images/dummy.png') }}" 
                class="img-thumbnail" 
                id="img-thumbnail"
            >
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