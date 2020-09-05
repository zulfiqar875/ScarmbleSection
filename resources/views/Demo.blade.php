<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> -->
  <title>Scramble Section</title>
  <link rel="icon" type="image/ico" href="/images/company.png" />
  <style>
  body {
      position: relative; 
      background-image: url('https://www.themeraider.com/wp-content/uploads/2016/05/feat-may-1-1.jpg');
      background-position: center; 
      background-repeat: no-repeat; 
      background-size: cover;
      background-attachment: fixed;
  }
  .navlogo
  {
      width: 5%;
  }
  #section1,#smart-Reg
  {
      background-image: url('https://www.themeraider.com/wp-content/uploads/2016/05/feat-may-1-1.jpg');
      background-position: center; 
      background-repeat: no-repeat; 
      background-size: cover;
      background-attachment: fixed;
  }
  #section2
  {
      /* background-image:url('https://cdn2.f-cdn.com/contestentries/1476645/32188263/5c7d1750c9de4_thumb900.jpg'); */
      background-position: center; 
      background-repeat: no-repeat; 
      background-size: cover;
      background-attachment: fixed;
  }
  #section3, #Smart-Reg-HF
  {
    background-image: url('https://image.freepik.com/free-vector/blue-light-line-shadow-dark-grey-luxury-background_33869-977.jpg');
    background-position: center; 
    background-repeat: no-repeat; 
    background-size: cover;
    background-attachment: fixed;
  }
  #mynav
  {
      position: absolute;
  
      left: 5%;
      right: 5%;
  }
  p
  {
      style: none;
  }
  #jumimg
  {
      background-image: url('https://img.freepik.com/free-photo/modern-office-with-office-supplies-table-with-office-environment-background_67155-5307.jpg?size=626&ext=jpg');
      background-position: center; 
      background-repeat: no-repeat; 
      background-size: cover;
      background-attachment: fixed;
  }
  .check:hover
  {
    background-color: gray;
    color: white;
  }
  .logo-img
  {
      width: 30%;
  }
  .scoialmedia
  {
    background-image: url('https://www.themeraider.com/wp-content/uploads/2016/05/feat-may-1-1.jpg');
    background-position: center; 
    background-repeat: no-repeat; 
    background-size: cover;
    background-attachment: fixed;
    border-radius: 20px;
    
  }
  #socialicon:hover
  {
      
  }
  #section41
  {
    background-image: url('https://www.themeraider.com/wp-content/uploads/2016/05/feat-may-1-1.jpg');
    background-position: center; 
    background-repeat: no-repeat; 
    background-size: cover;
    background-attachment: fixed; 
  }
  #smartregister
  {
    background-image: linear-gradient(to right, #1CD4BC , #41ADCC);
    border: none;
  }
  #Rocket
    {
        /* position: absolute; */
        position: fixed;
        width: 50px;
        height: 100px;
        bottom: 8px;
        right: 16px;

    }
    .form-control
    {
        background-color: rgb(1,1,1,0.1);
        border-top: none;
        border-left: none;
        border-right:none;
        border-bottom: 1px solid;
        border-color: white
        
    }
    .form-control:hover
    {
        background-color: rgb(1,1,1,0.1);
        border-top: none;
        border-left: none;
        border-right:none;
        border-bottom: 1px solid;
        border-color: white;
        color: white
    }
    #A:hover
    {
        background-color: black;
        color: white;
    }
  </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

    <div class="main">
       
        <nav id="mynav" class="navbar navbar-expand-sm  navbar-dark fixed-top">
            <img class="navlogo" src="/images/company.png" alt="ScrambleSectionLogo">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#section1">Home </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section2">Courses </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section3">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"> <i class="fa fa-user" aria-hidden="true"></i> </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/login">Login</a>
                                <a class="dropdown-item" href="#section42">Register</a>
                            </div>
                        </li>
                    </ul>
                </form>
            </div>
        </nav>

        <div id="section1" class="container-fluid bg-dark" style="padding-top:70px;padding-bottom:70px">
            <div id="jumimg" class="jumbotron text-center mt-5">
                <h1 class="mb-5 text-primary">Get The Best Free Online Courses</h1>
                <h3 class="text-danger text-center mt-3"></h3>
                <h3> if your actions inspire others to dream more, learn more, do more and <br>
                become more, you are leader</h3>

                <button id="smartregister" type="button" class="btn btn-primary mt-5 p-3 mb-3" data-toggle="modal" data-target="#exampleModalCenter"> Let's Start Now </button>

                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header" id="Smart-Reg-HF">
                                <h5 class="modal-title text-white text-center" id="exampleModalLongTitle">Register</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <div class="modal-body" id="smart-Reg">
                            <div class="form" action="/register" method="post"> 
                                <form action="/register" method="post">
                                    @csrf
                                    <div class="row m-1">
                                        <div class="col-md-6 col-lg-6 md-xl-6">
                                            <input type="text" name="fname" placeholder="First Name" required class="form-control" id="">
                                        </div>
                                        <div class="col-md-6 col-lg-6 md-xl-6">
                                            <input type="text" name="lname" placeholder="Last Name" required class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="row m-1">
                                        <div class="col-md-6 col-lg-6 md-xl-6">
                                            <input type="text" name="fathername" placeholder="Father Name" required class="form-control" id="">
                                        </div>
                                        <div class="col-md-6 col-lg-6 md-xl-6">
                                            <input type="text" name="scnic" placeholder="Student CNIC" required class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="row m-1">
                                        <div class="col-md-6 col-lg-6 md-xl-6">
                                            <input type="text" name="age" placeholder="Age" required class="form-control" id="">
                                        </div>
                                        <div class="col-md-6 col-lg-6 md-xl-6">
                                            <select name="gender" id="" required class="form-control">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Group">Group</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row m-1">
                                        <div class="col-md-6 col-lg-6 md-xl-6">
                                            <input type="text" name="address" placeholder="Address" required class="form-control" id="">
                                        </div>
                                        <div class="col-md-6 col-lg-6 md-xl-6">
                                            <input type="text" name="postcode" placeholder="Post Code" required class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="row m-1">
                                        <div class="col-md-6 col-lg-6 md-xl-6">
                                            <input type="text" name="city" placeholder="City" required class="form-control" id="">
                                        </div>
                                        <div class="col-md-6 col-lg-6 md-xl-6">
                                            <input type="text" name="country" placeholder="Country" required class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="row m-1">
                                        <div class="col-md-6 col-lg-6 md-xl-6">
                                            <input type="text" name="contact" placeholder="Contact Number" required class="form-control" id="">
                                        </div>
                                        <div class="col-md-6 col-lg-6 md-xl-6">
                                            <input type="text" name="email" placeholder="Email" required class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="row m-1">
                                        <div class="col-md-6 col-lg-6 md-xl-6">
                                            <input type="text" name="username" placeholder="Username" required class="form-control" id="">
                                        </div>
                                        <div class="col-md-6 col-lg-6 md-xl-6">
                                            <input type="text" name="password" placeholder="Password" required class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="row m-1">
                                        <div class="col-md-12 col-lg-12 md-xl-12">
                                        <select name="course" id="" required class="form-control">
                                                <option value="">-- Select Courses --</option>
                                                <option value="Py001">Python</option>
                                                <option value="CC002">C/C++</option>
                                                <option value="NA003">Network Administrator (Linux)</option>
                                                <option value="WD004">Web Develpoment</option>
                                                <option value="AS005">Android Studio</option>
                                                <option value="GD006">Graphic Design</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row m-1">
                                        <div class="col-md-12 col-lg-12 md-xl-12">
                                            <input id="A" type="submit" value="LOGIN" class=" form-control  text-white">
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                        <div class="modal-footer" id="Smart-Reg-HF">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
    </div>
    <div id="section2" class="container-fluid bg-warning text-center" style="padding-top:70px;padding-bottom:70px">
        <h1 class="mb-5">Our Courses</h1>
        <div class="row m-3">
            <div class="col-md-4 col-lg-4 col-xl-4 ">
                <div class="card" style="width: 23rem;">
                    <img class="card-img-top" src="https://www.wtlabs.in/wp-content/uploads/2018/06/phtyon.jpg" alt="Card image cap">
                    <a href="" class="check">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4">
                <div class="card" style="width: 23rem;">
                    <img class="card-img-top" src="https://fiverr-res.cloudinary.com/images/t_main1,q_auto,f_auto,q_auto,f_auto/gigs/120622886/original/347dac91194eae33bb8adc2270f691feb03ec835/help-you-to-learn-android-programming-in-android-studio.jpg" alt="Card image cap">
                    <a href="" class="check">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4">
                <div class="card" style="width: 23rem;">
                    <img class="card-img-top" src="https://cdnp2.stackassets.com/e1ea0eb3dac8d6eec198c408b0c023d20bb5f14b/store/opt/596/298/5e57580c15b87b98c78bb0becec5dac0c95807a0a7ff53406d145fb98bdc/sale_9382_primary_image_wide.jpg" alt="Card image cap">
                    <a href="" class="check">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </a>
                </div>
            </div>

        </div>
        <div class="row m-3">
            <div class="col-md-4 col-lg-4 col-xl-4 ">
                <div class="card" style="width: 23rem;">
                    <img class="card-img-top" src="https://freecoursesite.us/wp-content/uploads/2019/09/Full-Stack-Web-Development-Masterclass-Beginner-To-Advanced-Course.jpg" alt="Card image cap">
                    <a href="" class="check">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4">
                <div class="card" style="width: 23rem;">
                    <img class="card-img-top" src="https://lh3.googleusercontent.com/proxy/Hpk_cGBCTI6wToUoZvJfpVSwZlIYCtxmgzCe7K_XEfTH_lrep4UXsGDc04ugFsltqRd8EGmEUnuRP-O27GM6Kw_NIh30sCou8AZupoNGIe0oOKVOe5hSvKZV4Dct" alt="Card image cap">
                    <a href="" class="check">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4">
                <div class="card" style="width: 23rem;">
                    <img class="card-img-top" src="https://mostaql.hsoubcdn.com/uploads/374433-Vy61E-1551608557-dFVSy-aaeaaqaaaaaaaatdaaaajdm2zjgzndkwlwfmmdgtnguzys1izjk4ltvhoge4mzjim2qxzg.jpg" alt="Card image cap">
                    <a href="" class="check">
                        <div class="card-body">
                            <p class="card-text text-dark">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
    <div id="section3" class="container-fluid bg-secondary text-center" style="padding-top:70px;padding-bottom:70px">
        <h1 class="text-white">About </h1>
        <p class="text-white">Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
    </div>
    <div id="section41" class="container-fluid bg-dark text-center p-5" style="padding-top:70px;padding-bottom:70px">
        <h1 class="text-white">Contact us</h1>
        <div class="row p-5 text-center">
            <div class="col-md-4 col-lg-4-col-xl-5 text-left">
                <img class="logo-img" src="/images/company.png" alt="" srcset="">
            </div>
            <div class="col-md-4 col-lg-4-col-xl-5">
                <i id="back" class="fa fa-phone text-white fa-1x mb-2 "> 0317 - 053 7357 </i> <br>
                <i class="fa fa-envelope text-white" aria-hidden="true"> scrammble.section@gmail.com</i>
            </div>
            <div class="col-md-4 col-lg-4-col-xl-5">
                <button class="btn "> <a class="text-white" href="/login">login</a></button> <br>
                <button class="btn "> <a class="text-white" href="/Register"> Register</a></button>
                <a href=""></a>
            </div>
        </div>
    </div>
    <div class="scoialmedia text-center bg-light mt-5 p-2  text-center rounded-full border border-dark">
        <a href=""><i id="socialicon" class="fa text-light pl-1 fa-facebook-official " aria-hidden="true"></i></a>
        <a href=""><i id="socialicon" class="fa text-light pl-1 fa-instagram" aria-hidden="true"></i></a>
        <a href=""><i id="socialicon" class="fa text-light pl-1 fa-twitter-square" aria-hidden="true"></i></a>
        <a href=""><i id="socialicon" class="fa text-light pl-1 fa-linkedin-square" aria-hidden="true"></i></a>
    </div>
    <a href="#section1"><img id="Rocket" class="w-20" src="/images/Rocket1.png"></a>

</body>
</html>
