@extends('layouts.main_layout')

@section('content')
        <style>

        </style>

        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="{{URL::to('countries')}}"">Lista cu tari</a>
                    <a href="{{URL::to('cities')}}">Lista cu orase</a>
                    <a href="{{URL::to('add-country')}}">Adaugarea tarii</a>
                    <a href="{{URL::to('add-city')}}">Adaugarea orasului</a>
                </div>
            </div>
        </div>
@endsection