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
                    <form action="{{route('contact.store')}}" method="post">
                        @csrf
                        Name: <br>
                        <input type="text" name="user_name"><br>
                        Title: <br>
                        <input type="text" name="title"><br>
                        email: <br>
                        <input type="email" name="email"><br>
                        Homepage: <br>
                        <input type="url" name="url"><br><br>
                        Gender: <br>
                        <input type="radio" name="gender" value="0"> Male<br>
                        <input type="radio" name="gender" value="1"> Female<br>
                        <input type="radio" name="gender" value="2"> Unisex<br><br>
                        Age: <br>
                        <select name="age">
                            <option value="">Please select</option>
                            <option value="1">1~9</option>
                            <option value="2">10~19</option>
                            <option value="3">20~29</option>
                        </select><br><br>
                        Comment: <br>
                        <textarea name="contact"></textarea> <br>
                        <input type="submit" value="Submit" class="btn btn-info">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection