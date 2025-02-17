@extends('layouts.main')

@section('title', 'Elèves | ' . config('app.name'))
@section('content')
{{-- Index --}}
<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <ul>
            <li>
                <a href="/">Dashboard</a>
            </li>
            <li>{{$title}}</li>
        </ul> 
    </div>

    <!-- Row -->
    <div class="modal-box pull-right">
        <a href="{{route('communiques.index')}}" class="btn btn-lg btn-success">Tous les communiqués</a>
        <hr>
    </div>
    <!-- Teacher Payment Area Start Here --> 
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>Communiqués</h3>
                </div>

            </div>
            <hr>
            <form method="post" action="{{route('communiques.store')}}" enctype="multipart/form-data" class="form">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-12 form-group">
                        <label>Description</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control">

                        </textarea>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-12 form-group">
                        <label>Date de communique</label>
                        <input type="date" name="date_communique" class="form-control">
                    </div>
                    <div class="col-xl-4 col-lg-4 col-12 form-group">
                        <label>Concerné</label>
                        <select name="concerned" id="" class="form-control">
                            <option selected readonly>Selectionner</option>
                            <option value="all">Tous</option>
                            <option value="eleves">Eleves</option>
                            <option value="tuteur">Tuteurs</option>
                            <option value="enseignant">Enseignants</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                        <label>Nom</label>
                        <select name="annee_id" id="" class="form-control">
                            <option selected readonly>Selectionner</option>
                            @foreach ($annees as $annee)
                            <option value="{{$annee->annee_id}}">
                                {{$annee->annee}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                        <label>#</label>
                        <button type="submit" class="btn-fill-lg btn-block btn-gradient-yellow btn-hover-bluedark">Enregistrer</button>
                    </div>
                </div>
            </form><br>
            {{-- Check if there are any errors --}}
            @if ($errors->any())
               @foreach ($errors->all() as $error)
               <div class="alert alert-danger" role="alert">
                {{$error}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
               @endforeach
            @endif
        </div>
    </div>
    <!-- Teacher Payment Area End Here -->
    <!-- Footer Area Start Here -->
    @include('layouts.footer')
    <!-- Footer Area End Here -->
</div>

@include('admin.eleves.modals.create')
@endsection