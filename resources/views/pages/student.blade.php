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

<h2>Student List</h2>

<table>
  <tr>
    <th>Name</th>
    <th>Department</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Address</th>
  </tr>
  
    @foreach($student as $stu)
    <tr>
    <td>{{$stu->name}}</td>
    <td>{{$stu->department}}</td>
    <td>{{$stu->age}}</td>
    <td>{{$stu->gender}}</td>
    <td>{{$stu->address}}</td>
    </tr>
     @endforeach
  
  
</table>
    
       @stop 
