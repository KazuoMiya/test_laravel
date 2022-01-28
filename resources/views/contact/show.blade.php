@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Show</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    
                    <br>
                    <a href="{{route('contact.index')}}" class="btn btn-primary">Back to Index</a><br>
                    <br>
                    <br>
                    <table class="table table-dark table-striped table-hover">
                        <thead>
                            <tr>

                                <th scope="col">Name</th>
                                <th scope="col">Title</th>
                                <th scope="col">email</th>
                                <th scope="col">URL</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Age</th>
                                <th scope="col">Contact</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$contact->user_name}}</td>
                                <td>{{$contact->title}}</td>
                                <td>{{$contact->email}}</td>
                                <td>{{$contact->URL}}</td>
                                <td>{{$gender}}</td>
                                <td>{{$age}}</td>
                                <td>{{$contact->contact}}</td>
                                <td><a href="{{route('contact.edit', [ 'id' => $contact->id ])}}" class="btn btn-primary">Edit</a></td>
                                <td>
                                    <form action="{{route('contact.destroy', [ 'id' => $contact->id ])}}" method="post" id="delete_{{$contact->id}}">
                                        @csrf
                                        <a href="#" data-id="{{$contact->id}}" onclick="deletePost(this)" class="btn btn-danger">Delete</a>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function deletePost(e){
        'use strict';
        if(confirm('Are you sure really delete it?')){
            document.getElementById('delete_' + e.dataset.id).submit();
        }
    }
</script>
@endsection