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

<h2>Department List</h2>

<table>
  <tr>
    <th>Id</th>
    <th>Department</th>
  </tr>
  <?php $i=1; ?>
    @foreach($department as $dep)
    <tr>
    <td>{{$i}}</td>
    <td>{{$dep->name}}</td>
    </tr>
    <?php $i++  ?>
     @endforeach
  
  
</table>

    
       @stop 
