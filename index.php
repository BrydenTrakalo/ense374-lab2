<?php session_start(); 

?>
<!DOCTYPE html>
<html>
	<head>
		<title> 
		Lab 2 Home
        </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	</head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.html">Login page</a>
                </li>
            
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2 disabled" type="text" placeholder="Search is not available yet" aria-label="Search" readonly>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>





        <div class="card-body">
            <form id="task-form">
                <div class="form-group">
                  <label for="formGroupExampleInput">Enter task to be completed</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Do the dishes">
                    <div class="input-group-append">
                        <input type="submit" class="input-group-text task-add" value="Add">
                    </div>
                </div>
                  <button type="button" class="btn btn-dark" id="removal">Remove Complete</button>
                </div>
            </form>

            <div class="card-body" id="task-list">

                <form class = 'list-form'>
                    <input type="hidden" value ="1">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="checkbox">
                        </div>
                        </div>
                        <p class="form-control">My tasks and others tasks. finished adn unfishined. Claimed and unclaimed</p>
                    </div>
                </form>

                <form class = 'list-form finished'>
                    <input type="hidden" value ="2">
                <div class="input-group owner1 finished">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="checkbox" checked>
                    </div>
                    </div>
                    <p class="form-control"><s>My finished task</s></p>
                </div>
                </form>

                <form class = 'list-form'>
                    <input type="hidden" value ="3">
                    <div class="input-group owner1 unfinished">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="checkbox">
                        </div>
                        </div>
                        <p class="form-control">I havent done this yet :(</p>
                        <div class="input-group-append">
                            <span class="input-group-text task-abandon">Abandon</span>
                        </div>
                    </div>
                </form>
                
                <form class = 'list-form finished'>
                    <input type="hidden" value ="4">
                    <div class="input-group owner2 finished">
                        <p class="form-control"><s>Someone else's finsihed</s></p>
                    </div>
                </form>

                <form id="5" class = 'list-form'>
                    <input type="hidden" value ="5">
                    <div class="input-group owner2 unfinished">
                        <p class="form-control">Someone else's unfinsihed</p>
                    </div>
                </form>

                <form id="6" class = 'list-form'>
                    <input type="hidden" name="task_num" value ="6">
                    <input type="hidden" name="strikethrough" value ="0">
                    <input type="hidden" name="owner" value ="unclaimed">
                    <input type="hidden" name="task_text" value ="Unclaimed">

                    <div class="input-group">
                        <p class="form-control">Unclaimed</p>
                        <div class="input-group-append">
                            <input type="submit" class="input-group-text task-claim" name = "claim" value="Claim"/>
                        </div>
                    </div>
                </form>


                <form id="7" class = 'list-form'>
                    <input type="hidden" name="task_num" value ="7">
                    <input type="hidden" name="strikethrough" value ="0">
                    <input type="hidden" name="owner" value ="unclaimed">
                    <input type="hidden" name="task_text" value ="Unclaimed">

                    <div class="input-group">
                        <p class="form-control">Dont claim me</p>
                        <div class="input-group-append">
                            <input type="submit" class="input-group-text task-claim" name = "claim" value="Claim"/>
                        </div>
                    </div>
                </form>



            </div>
        </div>





        <script
			  src="https://code.jquery.com/jquery-3.5.1.min.js"
			  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
			  crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
   
        <script src="script.js"></script>
    </body>

</html>