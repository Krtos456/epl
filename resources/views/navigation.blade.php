<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<nav class="navbar navbar-expand-sm bg-light">
<div class="container-fluid">
  <!-- Links -->
  <ul class="navbar-nav">
  
    @foreach($menus as $menu)
    <li class ="nav-item">
 <a class="nav-link" href="{{$menu->link}}">{{$menu->name}}</a>
    </li>
    @endforeach
<!--
    <li class="nav-item">
      <a class="nav-link" href="students">student</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="modules">modules</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/">home</a>
    </li>
  -->
  </ul>
</div>
</nav>
