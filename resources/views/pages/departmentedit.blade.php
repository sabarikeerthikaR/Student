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

<a href="/adddepartment"><button>Add Department</button></a>

<h2>Department Edit</h2>

<table>
  <tr>
    <th>Department</th>
    <th></th>
  </tr>
 
    <tr>
    	<form method="post" action="{{ route('departmentedit',
                  ['id'=>$department->id]) }}">
    		 {{ csrf_field()}}
    <td>{{$department->name}}<input class="form-control" type="text" name="name" value="{{$department->name}}" /></td>
    <td><div class="form-group">
     <input type="submit" name="Submit" class="btn btn-primary" value="Submit" />
    </div></td>
</form>
    </tr>
    
  
  
</table>

    
       @stop 
