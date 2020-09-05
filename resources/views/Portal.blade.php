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
    #Smart-Reg-HF, #smart-Reg
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
</style>
<body>
   <div class="dashobard">
   <nav id="mynav" class="navbar navbar-expand-sm  navbar-dark fixed-top ml-5 mr-5">
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
                            <a class="nav-link" href="#Anncuments">Annocuments</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"> <i class="fa fa-user text-success" aria-hidden="true"> {{$data->Username}} </i> </a>
                            <div class="dropdown-menu bd-dark text-white">
                            <button id="smartregister" type="button" class="pl-4 ml-1 " data-toggle="modal" data-target="#exampleModalCenter"> Profile </button>
                                <button id="smartregister"><a class="dropdown-item" href="/login">Logout</a></button>
                            </div>
                        </li>
                    </ul>
                </form>
            </div>
        </nav>

        <!-- **************************************************************************************************************** -->
        
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header" id="Smart-Reg-HF">
                                <h5 class="modal-title text-white text-center" id="exampleModalLongTitle">Profile</h5>
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
                                            <input type="text" name="" placeholder="" value="{{$data->Firstname}}" disabled required class="form-control" id="">
                                        </div>
                                        <div class="col-md-6 col-lg-6 md-xl-6">
                                            <input type="text" name="" placeholder="" value="{{$data->Lastname}}" disabled required class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="row m-1">
                                        <div class="col-md-6 col-lg-6 md-xl-6">
                                            <input type="text" name="" placeholder="" value="{{$data->Fathername}}" disabled required class="form-control" id="">
                                        </div>
                                        <div class="col-md-6 col-lg-6 md-xl-6">
                                            <input type="text" name="" placeholder="" value="{{$data->Studentnic}}" disabled required class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="row m-1">
                                        <div class="col-md-6 col-lg-6 md-xl-6">
                                            <input type="text" name="" placeholder="" value="{{$data->Age}}" disabled required class="form-control" id="">
                                        </div>
                                        <div class="col-md-6 col-lg-6 md-xl-6">
                                            <select name="" id="" value="{{$data->Gender}}" disabled required class="form-control">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Group">Group</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row m-1">
                                        <div class="col-md-6 col-lg-6 md-xl-6">
                                            <input type="text" name="" placeholder="" value="{{$data->Address}}" disabled required class="form-control" id="">
                                        </div>
                                        <div class="col-md-6 col-lg-6 md-xl-6">
                                            <input type="text" name="" placeholder="" value="{{$data->Postalcode}}" disabled required class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="row m-1">
                                        <div class="col-md-6 col-lg-6 md-xl-6">
                                            <input type="text" name="" placeholder="" value="{{$data->City}}" disabled required class="form-control" id="">
                                        </div>
                                        <div class="col-md-6 col-lg-6 md-xl-6">
                                            <input type="text" name="" placeholder="" value="{{$data->Country}}" disabled required class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="row m-1">
                                        <div class="col-md-6 col-lg-6 md-xl-6">
                                            <input type="text" name="" placeholder="" value="{{$data->Contactno}}" disabled required class="form-control" id="">
                                        </div>
                                        <div class="col-md-6 col-lg-6 md-xl-6">
                                            <input type="text" name="" placeholder="" value="{{$data->Email}}" disabled required class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <i class="far fa-edit text-danger ml-4"> Edit</i>
                                        </div>
                                    </div>
                                    <div class="row m-1">
                                        
                                        <div class="col-md-6 col-lg-6 md-xl-6">
                                            <input type="text" name="" placeholder="" value="{{$data->Username}}"  required class="form-control" id="">
                                        </div>
                                        <div class="col-md-6 col-lg-6 md-xl-6">
                                            <input type="text" name="" placeholder="" value="{{$data->Password}}"  required class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="row m-1">
                                        <div class="col-md-12 col-lg-12 md-xl-12">
                                        <input type="text" name="" disabled placeholder="" value="{{$data->Course}}" disabledd required class="form-control" id="" >
                                        </div>
                                    </div>
                                    <div class="row m-1">
                                        <div class="col-md-12 col-lg-12 md-xl-12">
                                            <input id="A" type="submit" value="Save changes" class=" form-control  text-white">
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                        <div class="modal-footer" id="Smart-Reg-HF">
                            <h6 class="text-center text-white">@scramblesection</h6>
                        </div>
                        </div>
                    </div>
                </div>

        <!-- **************************************************************************************************************** -->

        <div id="Home" class="container-fluid " style="padding-top:70px;padding-bottom:70px">
            <div id="jumimg" class="jumbotron text-center mt-5">
                <h2 class="text-center text-white"> Dashboard</h2>
                <!-- <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="[embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                </div> -->
                <div class="row text-center mt-5">
                    <div class="col-md-4 col-lg-4 col-xl-4 text-white p-3 border border-white"><h4>Perviouse Courses : </h2> <h6 class="text-success">none</h6></div>
                    <div class="col-md-4 col-lg-4 col-xl-4 text-white p-3 border border-white"><h4>Enroll Courses : </h2> <h6 class="text-success">2</h6></div>
                    <div class="col-md-4 col-lg-4 col-xl-4 text-white p-3 border border-white"><h4>Status : </h2> <h6 class="text-danger">Active</h6></div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <h4 class="text-center text-white">Enroll Course Progress</h4>
                        <div class="progress ml-5 mr-5 mt-4">
                            <div class="progress-bar progress-bar-striped progress-bar-animated " role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- **************************************************************************************************************** -->

        <div id="Courses" class="container-fluid " style="padding-top:70px;padding-bottom:70px">
            <div id="jumimg" class="jumbotron text-center mt-5">
                <h2 class="text-center text-white mb-5 "> Enroll Courses</h2>
                <div class="row text-center ">
                    <div class="col-md-4 col-lg-4 col-xl-4 text-white p-1 border border-white"><h6>Course Name </h2></div>
                    <div class="col-md-4 col-lg-4 col-xl-4 text-white p-1 border border-white"><h6>Course Status</h2></div>
                    <div class="col-md-4 col-lg-4 col-xl-4 text-white p-1 border border-white"><h6>Course End-Date</h2></div>
                </div>
                <div class="row text-center m-2 ">
                    <div class="col-md-4 col-lg-4 col-xl-4 text-primary p-2 border border-white"><button type="button" class="btn text-white" data-toggle="modal" data-target=".bd-example-modal-lg">{{$data->SCid}}</button></div>
                    <div class="col-md-4 col-lg-4 col-xl-4 text-white p-2 border border-white">
                        <div class="progress mt-1 ml-2 mr-2">
                            <div class="progress-bar progress-bar-striped progress-bar-animated " role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-4 text-primary p-2 border border-white"><h6>7-Oct-2020</h2></div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <h4 class="text-center text-white">Overall Enroll Course Progress</h4>
                        <div class="progress ml-5 mr-5 mt-4">
                            <div class="progress-bar progress-bar-striped progress-bar-animated " role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <h3 class="'text-center text-dark m-3">Week-1 Course</h3>
                    <div class="container">
                        <table class="table  text-dark m-3">
                            <thead>
                                <tr>
                                    <th>Lecture</th>
                                    <th>Contect</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach( $fetch as $object)
                                        <td>{{$object->Cid}}</td>
                                        <td>
                                            <video autoplay controls>  
                                                <source src="https://www.youtube.com/watch?v=OOy764mDtiA" type="video/mp4 ">
                                            </video>
                                        </td>
                                    @endforeach
                                </tr>   
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <!-- **************************************************************************************************************** -->

        <div id="Assignment" class="container-fluid " style="padding-top:70px;padding-bottom:70px">
            <div id="jumimg" class="jumbotron text-center mt-5">
                <h2 class="text-center text-white mb-5 "> Assigment</h2>
                <div class="row text-center ">
                    <div class="col-md-4 col-lg-4 col-xl-4 text-white p-1 border border-white"><h6>Course Name </h2></div>
                    <div class="col-md-4 col-lg-4 col-xl-4 text-white p-1 border border-white"><h6>Assignment Status</h2></div>
                    <div class="col-md-4 col-lg-4 col-xl-4 text-white p-1 border border-white"><h6> Submit Before</h2></div>
                </div>
                <div class="row text-center m-2 ">
                    <div class="col-md-4 col-lg-4 col-xl-4 text-primary p-2 border border-white"><h6>Graphic Design </h2></div>
                    <div class="col-md-4 col-lg-4 col-xl-4 text-white p-2 border border-white">
                        <div class="progress mt-1 ml-2 mr-2">
                            <div class="progress-bar progress-bar-striped progress-bar-animated " role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-4 text-danger p-2 border border-white"><h6>7-Oct-2020</h2></div>
                </div>
                <div class="row text-center m-2">
                    <div class="col-md-4 col-lg-4 col-xl-4 text-primary p-2 border border-white"><h6>Graphic Design </h2></div>
                    <div class="col-md-4 col-lg-4 col-xl-4 text-white p-2 border border-white">
                        <div class="progress mt-1 ml-2 mr-2">
                            <div class="progress-bar progress-bar-striped progress-bar-animated " role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-4 text-danger p-2 border border-white"><h6>7-Oct-2020</h2></div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <h4 class="text-center text-white">Overall Assignment Progress</h4>
                        <div class="progress ml-5 mr-5 mt-4">
                            <div class="progress-bar progress-bar-striped progress-bar-animated " role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                        </div>
                    </div>
                </div>
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



