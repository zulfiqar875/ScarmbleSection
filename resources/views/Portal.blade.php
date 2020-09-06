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
                            <a class="nav-link" href="#Annocuments">Annocuments <span class="badge text-danger">3</span> </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"> <i class="fa fa-user text-success" aria-hidden="true"> {{$data->Username}} </i> </a>
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
                                    <div class="row">
                                        <div class="col-12">
                                            <i class="far fa-edit text-danger ml-4"> Edit</i>
                                        </div>
                                    </div>
                                    <div class="row m-1">
                                        
                                        <div class="col-md-6 col-lg-6 md-xl-6">
                                            <input type="text" name="" placeholder="" value="{{$data->Username}}" disabled required class="form-control" id="">
                                        </div>
                                        <div class="col-md-6 col-lg-6 md-xl-6">
                                            <input type="text" name="" placeholder="" value="{{$data->Password}}" disabled  required class="form-control" id="">
                                        </div>
                                    </div>
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
                                    
                                    <div class="row m-1">
                                        <div class="col-md-12 col-lg-12 md-xl-12">
                                        <input type="text" name="" disabled placeholder="" value="{{$data->SCid}}" disabledd required class="form-control" id="" >
                                        </div>
                                    </div>
                                    <!-- <div class="row m-1">
                                        <div class="col-md-12 col-lg-12 md-xl-12">
                                            <input id="A" type="submit" value="Save changes" class=" form-control  text-white">
                                        </div>
                                    </div> -->
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
                <div class="row text-center mt-5">
                    <div class="col-md-4 col-lg-4 col-xl-4 text-white p-3 border border-white"><h4>Perviouse Courses : </h2> <h6 class="text-success">none</h6></div>
                    <div class="col-md-4 col-lg-4 col-xl-4 text-white p-3 border border-white"><h4>Enroll Courses : </h2> <h6 class="text-success">1</h6></div>
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

        <div class="modal fade bd-example-modal-lg " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg bg-light">
                <div class="modal-header" id="">
                    <h3 class="modal-title text-dark text-center" id="exampleModalLongTitle">Week-1</h3>
                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-content">
                    
                    <div class="container">
                        <table class="table  text-dark m-3">
                            <thead>
                                <tr>
                                    <th>Lecture</th>
                                    <th>Content</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach( $fetch as $object)
                                    <tr>
                                        <td> {{$object->Cid}} </td>
                                        <td> <button type="button" class="btn " data-toggle="modal" data-target=".videomodel">{{$object->Tittle}}</button> </td>
                                        <td> </td>
                                    </tr> 
                                 @endforeach  
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <!-- ----------------------------------------------------------------------- -->
        <div class="modal fade bd-example-modal-lg  videomodel" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-header bg-dark" id="">
                    <h5 class="modal-title text-white text-center" id="exampleModalLongTitle"></h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-content  text-center">
                    <iframe width="800" height="400" src="{{$object->Content}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        


        <!-- **************************************************************************************************************** -->

        <div id="Assignment" class="container-fluid " style="padding-top:70px;padding-bottom:70px">
            <div id="jumimg" class="jumbotron text-center mt-5">
                <h2 class="text-center text-white mb-5 "> Assigment</h2>

                <div class="container">
                        <table class="table  text-white m-3">
                            <thead>
                                <tr>
                                    <th>Assigment</th>
                                    <th>Content</th>
                                    <th>Deadline</th>
                                    <th>Download</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach( $Assign as $object)
                                    <tr>
                                        <td> {{$object->Aid}} </td>
                                        <td> {{$object->Tittle}}</td>
                                        <td> {{$object->Time}}</td>
                                        <td> 
                                            <button class="btn btn primary"><a href="/Download/{{$object->File}}"> <i class="fas fa-download"> Download </i> </a></button>
                                        </td>
                                        <td>
                                            <div class="form">
                                                <div class="col-10">
                                                
                                                <form action="{{url('/Assignment/upload',$object->File)}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="file" name="file" id=""><span><input type="submit" value="Submit" class="btn btn-primary"></span>
                                                </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr> 
                                 @endforeach  
                            </tbody>
                        </table>
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



