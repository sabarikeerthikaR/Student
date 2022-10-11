   <style type="text/css">
       #logout {
  background-color: #297ab8;
  height: 50px;
  text-align: right;
  right: 40px;
  position: fixed;
}


   </style>

    <div class="topnav">
        
  <a class="{{ Request::segment(1) === 'student' ? 'active' : null }}"  href="/student">Student</a> 
 <a class="{{ Request::segment(1) === 'department' ? 'active' : null }}"  href="/department">Department</a>

  <a href="/main/logout" id="logout">Logout</a>

</div>

</br>

