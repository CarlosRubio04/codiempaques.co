<header>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-default headers">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img class="img-responsive" src="./img/logo.png" /></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li  <?php if(!isset($_REQUEST['content'])){echo('class="active"');} ?>><a href="index.php">Inicio <span class="sr-only">(current)</span></a></li>
                            <li <?php if($_REQUEST['content']=='info'){echo(' class="active"');} ?>><a href="index.php?content=info">Info</a></li>
                            <li <?php if($_REQUEST['content']=='productos'){echo(' class="active"');} ?>><a href="index.php?content=productos">Productos</a></li>
                            <li <?php if($_REQUEST['content']=='contactenos'){echo(' class="active"');} ?>><a href="index.php?content=contactenos">Contacto</a></li>
                            <li ><a href="#"><i class="fa fa-facebook fa-lg"></i></a></li>
                            <li ><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
                            <li ><a href="#"><i class="fa fa-instagram fa-lg"></i></a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </div>
    </div>
</header>
<section id="logohome">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="logohome"> 
                    <a href="#"><img class="img-responsive" src="./img/logox2-gray.png" /></a>
                </div>
            </div>
        </div>
    </div>
</section>
