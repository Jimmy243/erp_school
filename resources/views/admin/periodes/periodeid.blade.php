@extends('layouts.main')

@section('title', $title.' | ' . config('app.name'))
@section('content')
{{-- Index --}}
<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <ul>
            <li>
                <a href="/">Dashboard</a>
            </li>
            <li>Detail sur la periode {{$periodes->periode_name}}</li>
        </ul>
    </div>

    @if (session()->has('message'))
    <div class="ui-alart-box">
        <div class="icon-color-alart">
            <div class="alert icon-alart bg-light-green2" role="alert">
                <i class="far fa-hand-point-right bg-light-green3"></i>
                {{session()->get('message')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    @endif

    @if (session()->has('supprimer'))
    <div class="ui-alart-box">
        <div class="icon-color-alart">
            <div class="alert icon-alart bg-pink2" role="alert">
                <i class="fas fa-times bg-pink3"></i>
                {{session()->get('supprimer')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    @endif
    <!-- Teacher Payment Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <h3> {{$periodes->category}} : {{$periodes->periode_name}}</h3>
            <a href="{{route('periodes.edit',$periodes->periode_id)}}" class="fas fa-edit text-dark-pastel-green" title="Modifier"></a>

        </div>
    </div>
    <!-- Teacher Payment Area End Here -->
    <!-- Footer Area Start Here -->
    @include('layouts.footer');
    <!-- Footer Area End Here -->
</div>

@endsection