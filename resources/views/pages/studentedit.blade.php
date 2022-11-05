@extends('layouts.homemaster')
 @section('content')

                 <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
  button{
   background-color: #297ab8;
   color: white;
  }

</style>

<a href="/addstudent"><button>  Add Student </button></a>

<h2>Student Edit</h2>

<table>
  <tr>
    <th>Name</th>
    <th>Department</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Address</th>
    <th></th>
  </tr>
  
   
    <tr>
<form method="post" action="{{ route('studentedit',
                  ['id'=>$student->id]) }}">
             {{ csrf_field()}}
    <td>{{$student->name}} <input class="form-control" type="text" name="name"
        value="{{$student->name}}" /></td>
    <td>{{$student->department}}<select class="form-control" name="department">
         @foreach($department as $dep)
         <option value="{{$dep->id}}">{{$dep->name}}</option>
        
         @endforeach
    </select></td>
    <td>{{$student->age}}<input class="form-control"  name="age" value="{{$student->age}}" /></td>
    <td>{{$student->gender}} <input class="form-control" type="text" name="gender" value="{{$student->gender}}" /></td>
    <td>{{$student->address}}<input class="form-control" type="text" name="address" value="{{$student->address}}" /></td>
    <td><div class="form-group">
     <input type="submit" name="Submit" class="btn btn-primary" value="Submit" />
    </div></td>
    </tr>
</form>

  
  
</table>
    
       @stop 
