@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create</div>

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
                    {{$contact->id}} <br>
                    {{$contact->user_name}} <br>
                    {{$gender}} <br>
                    {{$age}} <br>
                    <form action="" method="get">
                        @csrf
                        
                        <input type="submit" value="Edit" class="btn btn-info">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection