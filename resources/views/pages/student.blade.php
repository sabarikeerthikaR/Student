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
<br />
<br />
<form action="{{ route('student') }}" method="GET">
    <input type="text" name="search" required/>
    <button type="submit">Search</button>
</form>


@if($posts->isNotEmpty())

        <div class="post-list">
         <h2>Student List</h2>

<table>
  <tr>
    <th>Name</th>
    <th>Department</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Address</th>
    <th></th>
    <th></th>
  </tr>
  
    @foreach($posts as $stu)
    <tr>
    <td>{{$stu->name}}</td>
    <td>{{$stu->department}}</td>
    <td>{{$stu->age}}</td>
    <td>{{$stu->gender}}</td>
    <td>{{$stu->address}}</td>
    <td><a href="{{ route('studentshow',
                  ['id'=>$stu->id]) }}"><button>Edit</button></a></td>
    <td><a href="{{ route('studentdelete',
                  ['id'=>$stu->id]) }}"><button style="background: darkred;">Delete</button></a></td>
    </tr>
     @endforeach
  
  
</table>
        </div>
@else 
    <div>
        <h2>No posts found</h2>
    </div>
@endif


    
       @stop 
