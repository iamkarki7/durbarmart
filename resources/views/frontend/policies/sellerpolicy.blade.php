@extends('frontend.layouts.app')

@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">{{__('Home')}}</a></li>
                    <li><a href="{{ route('sellerpolicy') }}">{{__('Seller Policy')}}</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<section class="gry-bg py-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="p-4 bg-white">
                    <h3>Seller Policy</h3>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="gry-bg py-4">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="p-4 bg-white">
                        @php
                            echo \App\Policy::where('name', 'seller_policy')->first()->content;
                        @endphp
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
