<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Scramble Section</title>
    <link rel="icon" type="image/ico" href="/images/company.png" />
</head>
<style>
    body
    {
        background-image: url('https://www.themeraider.com/wp-content/uploads/2016/05/feat-may-1-1.jpg');
        background-position: center; 
        background-repeat: no-repeat; 
        background-size: cover;
        background-attachment: fixed;
    }

    #mynav
    {
        margin-top: 10px; 
        background-color: rgb(100,100,100,0.50);
        border-radius: 50px;
        padding:1%;
    }
    .navlogo
    {
        margin-left: 20px;
        width: 3%;
    }
    #jumimg, #section41
    {
        background-color: rgb(100,100,100,0.30);
    }
    .logo-img
    {
        width:30%;
    }
    .scoialmedia
    {
        border-radius: 50px;
        background-color: rgb(100,100,100,0.1);
    }
    #smartregister
    {
        border: none;
        background-color: none;
    }
    #Smart-Reg-HF, #smart-Reg, #course
    {
        background-image: url('https://image.freepik.com/free-vector/blue-light-line-shadow-dark-grey-luxury-background_33869-977.jpg');
        background-position: center; 
        background-repeat: no-repeat; 
        background-size: cover;
        background-attachment: fixed;
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
    .badge
    {
        position: absolute;
        top: 10px;
        right: ;
        padding: 3px 5px;
        border: 1px solid;
        border-radius: 50%;
        
        color: white;
    }
</style>
<body>
   <div class="dashobard">
   <nav id="mynav" class="navbar navbar-scroll navbar-expand-sm  navbar-dark fixed-top ml-5 mr-5">
            <img class="navlogo" src="/images/company.png" alt="ScrambleSectionLogo">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#Home">Home </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Courses">Courses </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Assignment">Assignment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Annocuments">Annocuments <span class="badge text-danger"></span> </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"> <i class="fa fa-user text-success" aria-hidden="true"> Admin </i> </a>
                            <div class="dropdown-menu bd-dark text-white">
                                <button id="smartregister" type="button" class="pl-5 ml-1 text-center " data-toggle="modal" data-target="#exampleModalCenter"> Profile </button>
                                <button id="smartregister" type="button" class="pl-5 ml-1 " data-toggle="modal" data-target="#exampleModalCenter"> Setting </button>
                                <button id="smartregister"><a class="dropdown-item pl-5" href="/login">Logout</a></button>
                            </div>
                        </li>
                    </ul>
                </form>
            </div>
        </nav>

        <!-- **************************************************************************************************************** -->
        
                
        <!-- **************************************************************************************************************** -->

        <div id="Home" class="container-fluid " style="padding-top:70px;padding-bottom:70px">
            <div id="jumimg" class="jumbotron text-center mt-5">
                <h2 class="text-center text-white"> Dashboard</h2>
                <div class="row text-center mt-5">
                    <div class="col-md-3 col-lg-3 col-xl-3 text-white p-3 border border-white"> <i class="fa mb-4 mt-3 fa-2x fa-users" aria-hidden="true"></i><h5> Total Students </h2> <h6 class="text-success">none</h6></div>
                    <div class="col-md-3 col-lg-3 col-xl-3 text-white p-3 border border-white"> <i class="fa mb-4 mt-3 fa-2x fa-refresh" aria-hidden="true"></i><h5> Enroll Student Courses : </h2> <h6 class="text-success">1</h6></div>
                    <div class="col-md-3 col-lg-3 col-xl-3 text-white p-3 border border-white"> <i class="fa mb-4 mt-3 fa-2x fa-file-word-o" aria-hidden="true"></i><h5>Assignment : </h2> <h6 class="text-danger">Active</h6></div>
                    <div class="col-md-3 col-lg-3 col-xl-3 text-white p-3 border border-white"> <i class="fa mb-4 mt-3 fa-2x fa-tasks" aria-hidden="true"></i><h4>Quizes : </h2> <h6 class="text-danger">Active</h6></div>
                </div>
                
            </div>
        </div>

        <!-- **************************************************************************************************************** -->

        <div id="Courses" class="container-fluid " style="padding-top:70px;padding-bottom:70px">
            <div id="jumimg" class="jumbotron text-center mt-5">
            <h1 class="mb-5 text-center text-white">Our Courses</h1>
            <div class="row m-3">
                <div class="col-md-4 col-lg-4 col-xl-4 ">
                    <div class="card" style="width: 23rem;">
                        <img class="card-img-top" src="https://www.wtlabs.in/wp-content/uploads/2018/06/phtyon.jpg" alt="Card image cap">
                        <a href="" class="check">
                            <div class="card-body text-center">
                                <h5 class="text-dark">Total Enroll Student</h5>
                                <h6><button type="button" class="btn text-dark " data-toggle="modal" data-target=".lecture">Upload Lecture</button></h6>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xl-4">
                    <div class="card" style="width: 23rem;">
                        <img class="card-img-top" src="https://fiverr-res.cloudinary.com/images/t_main1,q_auto,f_auto,q_auto,f_auto/gigs/120622886/original/347dac91194eae33bb8adc2270f691feb03ec835/help-you-to-learn-android-programming-in-android-studio.jpg" alt="Card image cap">
                        <a href="" class="check">
                            <div class="card-body text-center">
                                <h5 class="text-dark">Total Enroll Student</h5>
                                <h6><button type="button" class="btn text-dark " data-toggle="modal" data-target=".lecture">Upload Lecture</button></h6>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xl-4">
                    <div class="card" style="width: 23rem;">
                        <img class="card-img-top" src="https://cdnp2.stackassets.com/e1ea0eb3dac8d6eec198c408b0c023d20bb5f14b/store/opt/596/298/5e57580c15b87b98c78bb0becec5dac0c95807a0a7ff53406d145fb98bdc/sale_9382_primary_image_wide.jpg" alt="Card image cap">
                        <a href="" class="check">
                            <div class="card-body text-center">
                                <h5 class="text-dark">Total Enroll Student</h5>
                                <h6><button type="button" class="btn text-dark " data-toggle="modal" data-target=".lecture">Upload Lecture</button></h6>
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
                            <div class="card-body text-center">
                                <h5 class="text-dark">Total Enroll Student</h5>
                                <h6><button type="button" class="btn text-dark " data-toggle="modal" data-target=".lecture">Upload Lecture</button></h6>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xl-4">
                    <div class="card" style="width: 23rem;">
                        <img class="card-img-top" src="https://lh3.googleusercontent.com/proxy/Hpk_cGBCTI6wToUoZvJfpVSwZlIYCtxmgzCe7K_XEfTH_lrep4UXsGDc04ugFsltqRd8EGmEUnuRP-O27GM6Kw_NIh30sCou8AZupoNGIe0oOKVOe5hSvKZV4Dct" alt="Card image cap">
                        <a href="" class="check">
                            <div class="card-body text-center">
                                <h5 class="text-dark">Total Enroll Student</h5>
                                <h6><button type="button" class="btn text-dark " data-toggle="modal" data-target=".lecture">Upload Lecture</button></h6>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xl-4">
                    <div class="card" style="width: 23rem;">
                        <img class="card-img-top" src="https://mostaql.hsoubcdn.com/uploads/374433-Vy61E-1551608557-dFVSy-aaeaaqaaaaaaaatdaaaajdm2zjgzndkwlwfmmdgtnguzys1izjk4ltvhoge4mzjim2qxzg.jpg" alt="Card image cap">
                        <a href="" class="check">
                            <div class="card-body text-center">
                                <h5 class="text-dark">Total Enroll Student</h5>
                                <h6><button type="button" class="btn text-dark " data-toggle="modal" data-target=".lecture">Upload Lecture</button></h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
                  
        <!-- ----------------------------------------------------------------------- -->



        <!-- **************************************************************************************************************** -->

        <div id="Assignment" class="container-fluid " style="padding-top:70px;padding-bottom:70px">
            <div id="jumimg" class="jumbotron text-center mt-5">
                <h2 class="text-center text-white mb-5 "> Upload Assigments/Lectures</h2>
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-xl-6">
                        <button type="button" class="btn text-white " data-toggle="modal" data-target=".lecture">Upload Lecture</button>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6">
                    <button type="button" class="btn text-white " data-toggle="modal" data-target=".videomodel">Upload Assignment</button> </td>
                    </div>
                </div>
                <h6></h6>
                
            </div>
        </div>

                <!-- ----------------------------------------------------------------------- -->
                <div class="modal fade bd-example-modal-lg  videomodel" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-header bg-dark" id="">
                            <h5 class="modal-title text-white text-center" id="exampleModalLongTitle">Upload Assignment</h5>
                            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-content  text-center bg-dark">
                        <div class="form">
                                <form action="/uploadAsg" method="post" enctype="multipart/form-data" class="m-5">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-xl-6">
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
                                        <div class="col-md-6 col-lg-6 col-xl-6">
                                            <input type="file" name="file" id="" placeholder="Upload File" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12 col-lg-12 col-xl-12">
                                            <input type="Text" name="desc" id="" placeholder=" Add Ttittle of Assigment" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12 col-lg-12 col-xl-12">
                                            <input type="string" name="date" placeholder="Submit Date" class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12 col-lg-12 col-xl-12">
                                            <input type="submit" value="Upload" class="form-control">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ------------------------------------------------------------------------------------------------------ -->
                <div class="modal fade bd-example-modal-lg  lecture" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-header bg-dark" id="">
                            <h5 class="modal-title text-white text-center" id="exampleModalLongTitle">Upload Lecture</h5>
                            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-content  text-center bg-dark">
                        <div class="form">
                                <form action="/uploadCou" method="post" enctype="multipart/form-data" class="m-5">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-xl-6">
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
                                        <div class="col-md-6 col-lg-6 col-xl-6">
                                            <input type="text" name="address" id="" placeholder="Add Embed Address of youtube video" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12 col-lg-12 col-xl-12">
                                            <input type="text" name="tittle" id="" placeholder="Add Tiitle of Video" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12 col-lg-12 col-xl-12">
                                            <input type="submit" value="Upload" class="form-control">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- **************************************************************************************************************** -->

        <div id="Annocuments" class="container-fluid " style="padding-top:70px;padding-bottom:70px">
            <div id="jumimg" class="jumbotron text-center mt-5">
                <h2 class="text-center text-white mb-5 "> Annocuments <i class="fas fa-bullhorn text-danger"></i></h2>
                <h5 class="Text-center text-success mt-5 mb-5"> Temporary no Annocuments</h5>
            </div>
        </div>


        <!-- **************************************************************************************************************** -->
        <div id="section41" class="container-fluid  text-center p-5" style="padding-top:70px;padding-bottom:70px">
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

        <div class="scoialmedia text-center mt-5 p-2">
            <a href=""><i id="socialicon" class="fa text-light pl-1 fa-facebook-official " aria-hidden="true"></i></a>
            <a href=""><i id="socialicon" class="fa text-light pl-1 fa-instagram" aria-hidden="true"></i></a>
            <a href=""><i id="socialicon" class="fa text-light pl-1 fa-twitter-square" aria-hidden="true"></i></a>
            <a href=""><i id="socialicon" class="fa text-light pl-1 fa-linkedin-square" aria-hidden="true"></i></a>
        </div>
        
        

   </div>
    
</body>
</html>



