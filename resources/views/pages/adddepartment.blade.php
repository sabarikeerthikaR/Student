@extends('layouts.homemaster')
 @section('content')
    <div class="container box">
         <h3 align="center">Add Department</h3><br />
<form method="post" action="{{ url('/departmentdata') }}">
    {{ csrf_field()}}
    <div class="form-group">
    <label>Name</label>
    <input class="form-control" type="text" name="name"/>
    </div>

    <div class="form-group">
     <input type="submit" name="Submit" class="btn btn-primary" value="Submit" />
    </div>
</form>
    </div>
       @stop 