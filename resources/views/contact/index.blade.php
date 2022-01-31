@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    INDEX<br>
                    <br>
                    <a href="{{route('contact.create')}}" class="btn btn-primary">新規作成</a><br><br>
                    <form method="GET" action="" class="form-inline">
                        <input name="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <br>

                    <table class="table table-dark table-striped table-hover">
                        <thead>
                            <tr>

                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Title</th>
                                <th scope="col">Details</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contacts as $contact)
                            <tr>
                                <td>{{$contact->id}}</td>
                                <td>{{$contact->user_name}}</td>
                                <td>{{$contact->title}}</td>
                                <td><a href="{{route('contact.show', [ 'id' => $contact->id ])}}">Detail</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $contacts->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection