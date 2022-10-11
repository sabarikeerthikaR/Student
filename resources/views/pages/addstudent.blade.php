@extends('layouts.homemaster')
 @section('content')
    <div class="container box">
         <h3 align="center">Add Student</h3><br />
<form method="post" action="{{ url('/studentdata') }}">
    {{ csrf_field()}}
    <div class="form-group">
    <label>Name</label>
    <input class="form-control" type="text" name="name"/>
    </div>
    <div class="form-group">
    <label>Department</label>
    
    <select class="form-control" name="department">
    	 @foreach($department as $dep)
    	 <option value="{{$dep->id}}">{{$dep->name}}</option>
    	
    	 @endforeach
    </select>
   
    </div>
    <div>
    <label>Age</label>
    <input class="form-control"  name="age"/>
    </div>
    <div class="form-group">
    <label>Gender</label>
    <input class="form-control" type="text" name="gender"/>
    </div>
    <div>
    <label>Address</label>
    <input class="form-control" type="text" name="address"/>
    </div>
    </br>
    <div class="form-group">
     <input type="submit" name="Submit" class="btn btn-primary" value="Submit" />
    </div>
</form>
    </div>
       @stop 