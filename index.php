<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">AMOZAN</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="service.php">Services <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="about.php">About <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="contact.php">Contact <span class="sr-only">(current)</span></a>
        </li>
        
        
        
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placelder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    
</nav>
        <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="IMG/IMAGES1.jpg" alt="New york" width="1000" height="500">
        <div class="carousel-caption">
            <h3>New York City</h3>
            <p>We had such a great time in LA!</p>
        </div>   
        </div>
        <div class="carousel-item">
        <img src="IMG/IMAGES2.jpg" alt="Chicago" width="1000" height="500">
        <div class="carousel-caption">
            <h3>Chicago</h3>
            <p>Thank you, Chicago!</p>
        </div>   
        </div>
        <div class="carousel-item">
        <img src="IMG/IMAGES3.jpg" alt="sunset" width="1000" height="500">
        <div class="carousel-caption">
            <h3>Sunset</h3>
            <p>We love the Big Apple!</p>
        </div>   
        </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
    </div> 

    <section class="my-5">
        <div class="py-6">
            <h2 class="text-center" >Our Services</h2>
        </div>
        <div class= "container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12 ">
            <div class="card">
            <img class="card-img-top" src="IMG/images5.jpg" alt="Nature Image">
            <div class="card-body">
                <h2>Beautiful Nature</h2>
                <a href="service.php" class="btn btn-success">See Services</a>

            </div>
            </div> 
            </div>

            <div class="col-lg-4 col-md-4 col-12 ">
            <div class="card">
            <img class="card-img-top" src="IMG/images6.jpg" alt="Nature Image">
            <div class="card-body">
                <h2>Beautiful Nature</h2>
                <a href="service.php" class="btn btn-success">See Services</a>

            </div>
            </div> 
            </div>

            <div class="col-lg-4 col-md-4 col-12 ">
            <div class="card">
            <img class="card-img-top" src="IMG/images5.jpg" alt="Nature Image">
            <div class="card-body">
                <h2>Beautiful Nature</h2>
                <a href="service.php" class="btn btn-success">See Services</a>

            </div>
            </div> 
            
            
</section>  
<section class="my-5">
        <div class="py-5">
            <h2 class="text-center">About US</h2>
        </div>

        <div class= "container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <img src="IMG/images4.jpg" class="img-fluid">
            </div> 
            
            <div class="col-lg-6">
                <h2 class="display-4">I am Raj Gupta</h2>
                <p class="py-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis similique maxime tempora, fugit optio totam cumque facere! Id sunt, corporis fugit laborum nam maxime beatae facere minus eveniet in provident.</p>
                <a href="about.php" class="btn btn-success">Check More..</a>
            </div> 

        </div>
        </div>
</section>    

<section class= "my-5">
     
        <div class="py-5">
            <div>
                <h2 class="text-center">Contact</h2>
            </div>

            <div class="w-50 m-auto">
            <form action="userinfo.php" method="post">

                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control">

                </div>
            
                <div class="form-group">
                    <label>Email Id</label>
                    <input type="text" name="email" class="form-control">

                </div>
            
                <div class="form-group">
                <label>Mobile </label>
                <input type="text" name="mobile" class="form-control">
                </div>

                    
                <div class="form-group">
                <label for="my-textarea">Comments</label>
                <textarea id="my-textarea" class="form-control" name="comment" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-outline-primary" name="submit">submit</button>
                
                </div>
            
                
            </form>


        </div>
        
</section>

<footer class="page-footer font-small blue">

  
  <div class="footer-copyright text-center py-3">Copyright Â© 2023 -  All Rights Reserved Designed and Hosted by Raj gupta Compatible Browsers
    </div>
  
</footer>
            
            


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>