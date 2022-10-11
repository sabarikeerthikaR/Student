@extends('layouts.master')
 @section('content')
    <div class="container box">
         <h3 align="center">Register</h3><br />
<form method="post" action="{{ url('/registerdata') }}">
    {{ csrf_field()}}
    <div class="form-group">
    <label>Name</label>
    <input class="form-control" type="text" name="name"/>
    </div>
    <div class="form-group">
    <label>Email</label>
    <input class="form-control" type="email" name="email"/>
    </div>
    <div>
    <label>Password</label>
    <input class="form-control" type="password" name="password"/>
    </div>

    <div class="form-group">
     <input type="submit" name="Submit" class="btn btn-primary" value="Submit" />
    </div>
</form>
    </div>
       @stop 

