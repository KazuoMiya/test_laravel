@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
                                <td>{{$contact->Contact}}</td>
                                <td><a href="{{route('contact.edit', [ 'id' => $contact->id ])}}">Edit</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection