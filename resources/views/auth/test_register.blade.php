@extends('admin.layout.master')

@section('title','Register Page')

@section('content')
    <div class="container">
        {{-- <div class="row"> --}}
            <div class="col-md-8 col-md-offset-2">
                <div class="well well bs-component">
                    <form method="post">
                        <legend>Code Register</legend>
                        {{-- @php
                            echo "<pre>";
                            print_r($errors);
                        @endphp --}}
                        @foreach ($errors->all() as $error)
                            <p class="alert alert-danger">{{$error}}</p>
                        @endforeach
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label for="username">User Name</label>
                            <input type="text" class="form-control" name="name" id="username" aria-describedby="emailHelp" placeholder="User Name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                        </div>
                         <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="confirmpassword">Confirm Password</label>
                            <input type="password" class="form-control" name="password_confirmation" id="confirmpassword" placeholder="Password">
                        </div>
            
                        <button type="submit" class="btn btn-primary pull-right">Register</button>
                        <div class="clearfix"></div>
                    </form>
                </div>  
            </div>
        {{-- </div>     --}}
    </div>

@endsection

