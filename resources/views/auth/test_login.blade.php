@extends('admin.layout.master')

@section('title','Login Form')

@section('content')
	<div class="container">
        {{-- <div class="row"> --}}
            <div class="col-md-8 col-md-offset-2">
                <div class="well well bs-component">
                    <form method="post">
                        <legend>Code Login</legend>
                        {{-- @php
                            echo "<pre>";
                            print_r($errors);
                        @endphp --}}
                       	
                        @foreach($errors->all() as $error)
                        	<p class="alert alert-danger">{!! $error !!}</p> {{-- <or> {{$error}} --}}
                        @endforeach
                        	{{csrf_field()}} {{-- security token field --}}
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                        </div>
                         <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        </div>
                        <div class="checkbox">
                        	<label for="">
                        		<input type="checkbox" name="remember"> Remember Me
                        	</label>
                        </div>
            
                        <button type="submit" class="btn btn-primary pull-right">Login</button>
                        <div class="clearfix"></div>
                    </form>
                </div>  
            </div>
        {{-- </div>     --}}
    </div>
@endsection