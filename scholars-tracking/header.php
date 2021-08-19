<!DOCTYPE html>
<html>
<head>
	<title>Scholars</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
  
	<style type="text/css">
		.box{
			background: 	#5f9ea0	;
			padding: 20px;
      width: inherit;
      margin:auto;
		}
    .container{
      width: auto;
    }
    .navbar{
     width:auto;
     background-color: 	#000000		;
     
    }
    #navbar > ul > li > a:hover{
        font-size:20px;
        color:green;
    }
    .cus-table{
      background:black;
      color:white;
      border-radius: 5px
    }

	</style>
</head>
<body> 

<div class="container"> 
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-bs-toggle="collapse" data-bs-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Scholars</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav" style="color:blue">
          <li class=""><a href="graph.php">Home</a></li>
          <li><a href="insert.php">Add User</a></li> 
          <li><a href="users.php">All Users</a></li>
        </ul>
        
      </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
  </nav> 
</div>

</body>
</html>