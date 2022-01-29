@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    
                    <br>
                    <a href="{{route('contact.index')}}" class="btn btn-primary">Back to Index</a><br>
                    <br>
                    <form action="{{route('contact.update', ['id' => $contact->id])}}" method="post">
                        @csrf
                        Name: 
                        @error('user_name')
                        <span class="text text-danger">{{$message}}</span>
                        @enderror <br>
                        <input type="text" name="user_name" value="{{$contact->user_name}}"><br>
                        Title:
                        @error('title')
                        <span class="text text-danger">{{$message}}</span>
                        @enderror <br>
                        <input type="text" name="title" value="{{$contact->title}}"><br>
                        email:
                        @error('email')
                        <span class="text text-danger">{{$message}}</span>
                        @enderror <br>
                        <input type="email" name="email" value="{{$contact->email}}"><br>
                        Homepage:
                        @error('url')
                        <span class="text text-danger">{{$message}}</span>
                        @enderror <br>
                        <input type="url" name="url" value="{{$contact->url}}"><br><br>
                        Gender:
                        @error('gender')
                        <span class="text text-danger">{{$message}}</span>
                        @enderror <br>
                        <input type="radio" name="gender" value="0" @if( $contact->gender === 0 ) checked @endif > Male<br>
                        <input type="radio" name="gender" value="1" @if( $contact->gender === 1 ) checked @endif > Female<br>
                        <input type="radio" name="gender" value="2" @if( $contact->gender === 2 ) checked @endif > Unisex<br><br>
                        Age:
                        @error('age')
                        <span class="text text-danger">{{$message}}</span>
                        @enderror <br>
                        <select name="age">
                            <option value="">Please select</option>
                            <option value="0" @if( $contact->age === 0 ) selected @endif >1~9</option>
                            <option value="1" @if( $contact->age === 1 ) selected @endif >10~19</option>
                            <option value="2" @if( $contact->age === 2 ) selected @endif >20~29</option>
                        </select><br><br>
                        Comment:
                        @error('contact')
                        <span class="text text-danger">{{$message}}</span>
                        @enderror <br>
                        <textarea name="contact">{{$contact->contact}}</textarea> <br>
                        <input type="submit" value="submit" class="btn btn-info">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection