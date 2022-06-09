@extends('layouts.app')
@section('main')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title text-center">{{$users->name}} {{$users->prenom}}</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="{{ Storage::url($users->avatar)}}" class="img-circle img-responsive"> </div>
                        <div class=" col-md-9 col-lg-9 ">
                            <table class="table table-user-information " align="center">
                                <tbody class="text-center bg-gray-200"  >
                                    <tr class="">
                                        <td>Nom:</td>
                                        <td class="border border-black">{{$users->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Prenom:</td>
                                        <td class="border border-black">{{$users->prenom}}</td>
                                    </tr>
                                    <tr>
                                        <td>Email:</td>
                                        <td class="border border-black">{{$users->email}}</td>
                                    </tr>
                                    <tr>
                                        <td>Date de naissance:</td>
                                        <td class="border border-black">{{$users->age}}</td>
                                    </tr>
                                    
                                   


    @endsection