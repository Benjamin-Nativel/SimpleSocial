@extends('layouts.app')

@section('main')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title text-center">{{$roles->label}} </h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                     
                        <div class=" col-md-9 col-lg-9 ">
                            <table class="table table-user-information " align="center">
                                <tbody class="text-center bg-gray-200"  > 
                                      @foreach ($roles->users as $user)
                                    <tr class="">
                                       
                                        <td>Nom: {{$user->name}}</td>
                                       
                                            
                                        </td>
                                        @endforeach
                                    </tr>

                                
                                  
                                    
                                   


@endsection
