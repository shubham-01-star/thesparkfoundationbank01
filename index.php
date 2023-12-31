<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/apple-touch-icon1.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-32x321.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x161.png">
    <link rel="manifest" href="assets/site.webmanifest">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Welcome to Sparks Local Bank</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        #lock{
            display:none;
            position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 20;
    background:  rgb(255,205,155) center no-repeat;
    text-align:center;
        }
        @media screen (orientation:landscape) {
            #lock{display:none;}
            #container{display:block;}
        }

        @media screen and (orientation:portrait) {
            #lock{display:block;}
            #container{display:none;}
        }
    </style>
</head>

<body style="background-color:skyblue;">

<div id="lock"><img src="assets/PngItem_5146697.png" alt="" style="width:50%; margin-top:50%;"><br>
<h1 style="color:blue; margin-top: 25px;"><b>Please rotate the device. </b><br>We support only landscape mode.</h1>
</div>

<div id="container">

    <?php include 'spin.php'; ?>


    <style>
        .nav-link:hover {
           background-color: #yellow;
    transform: translate(-5px);
    box-shadow:  5px 5px 10px #d9d9d9,
    -5px -5px 10px #ffffff ,inset 2px 2px 5px #d9d9d9, inset -2px -2px 5px #ffffff;
        }
        #open-btn{
    margin-top: 0px ;
    margin-left: 0px;
    padding: 10px 10px;
    border: none;
    border-radius: 10px;
    background-color:#f44336 ;
    color: #fff;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
}
#open-btn:hover{
    background-color: #fff;
    color: #f44336;
    box-shadow:0px 0px 20px rgba(0,0,0.2),
    inset 0px 0px 5px rgba(255,255,255,0.5),
    inset 0px 0px 10px rgba(0,0,0,0.1) ;
}
        .mybtn:active {
            background-color: black;
            color: white;
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-blue bg-white fixed fixed-top"
        style="font-family:candara; font-size:18px; box-shadow: 0px 0px 10px 0px white;">
        <div class="container-fluid">
            <a href="index.php"><img src="assets 2\asset 0.png" alt=""
                    style="height: 70px; margin-left:25px; margin-top:10px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <b>
                <ul class="navbar-nav ">
                    <li class="nav-item nav-links" style="margin-left:15px;">
                        <a class="nav-link active text-nowrap" aria-current="page" href="index.php">Home</a>
                    </li>

                    <li class="nav-item" style="margin-left:15px;">
                        <a class="nav-link text-nowrap" href="all_cust.php">View All Customers</a>
                    </li>

                    <li class="nav-item" style="margin-left:15px; ">
                        <a class="nav-link text-nowrap" href="send_money.php">Send Money</a>
                    </li>
                    
                    <li class="nav-item" style="margin-left:15px;">
                        <a class="nav-link text-nowrap" href="transactions.php">Transactions</a>
                    </li>

                    <li class="nav-item" style="margin-left:15px;">
                        <a class="nav-link text-nowrap" href="contact_us.php">Contact Us</a>
                    </li>

                    <li class="nav-item" style="margin-left:15px; margin-right:75px;">
                        <a class="nav-link text-nowrap", id= "open-btn" href="about_us.php">Donate Now</a>
                    </li>
                  
                </ul>
            </b>
        </div>
    </nav>



    <div class="container-large"
        style="color:white; height:550px; width: 100%; padding:8% 2% 2% 2%; background-color:skyblue;">
       <marquee> <h1> Welcome to all new Customer in our The Spark Foundation Bank</h1> </marquee>
        <div class="row">
            <div class="col" style="margin-left: 5%;
            ">
                <br><br>&nbsp;<p class="zoomfont"
                    style="font-size:0px; text-shadow:3px 3px 3px grey; text-align:center;"><b>Welcome to The <br>Spark Foundation Bank!</b></p>
            </div>
            <div class="col" style="margin:0% 0% 2% 5%; text-align:center;">
                &nbsp;<img src="assets 2\pngfind.com-money-icon-png-1014131.png" class="zoomin" alt="" style="width:0px;">
            </div>
        </div>
        
    </div>
    <!-- <img src="assets/abstbg3.png" alt="" style="width:100%; position:absolute; z-index:-1"> -->

    <center style="margin:60px 0px 20px 0px;">
        <div class="container"
            style="backdrop-filter: blur(10px); box-shadow:3px 3px 15px black; border-radius:30px; padding:20px 0px 20px 0px;">
            <h1 style="text-shadow:2px 2px 2px gray; color:white;"><b>Our Awesome Facilities</b></h1>
            <div class="container" style="margin:30px 0px 20px 0px;">
                <div class="row">
                    <div class="col-lg">
                        <div
                            style="background-color:#15317E; color:white; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                            <i class="fas fa-users fa-7x"></i><br><br>
                            <a href="all_cust.php"><button type="button" class="btn btn-outline-light mybtn">View
                                    Customers</button></a><br>
                            <h6>Here, you can watch every customer of the bank.</h6>
                        </div>
                    </div>

                    <div class="col-lg">
                        <div
                            style="background-color:#15317E; color:white; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                            <i class="fas fa-comments-dollar fa-7x"></i><br><br>
                            <a href="send_money.php"><button type="button" class="btn btn-outline-light mybtn">Transfer
                                    Money</button></a><br>
                            <h6>Here, you can send money from your account.</h6>
                        </div>
                    </div>
                    
                    <div class="col-lg">
                        <div
                            style="background-color:#15317E; color:white; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                            <i class="fas fa-coins fa-7x"></i><br><br>
                            <a href="check_blc.php"><button type="button" class="btn btn-outline-light mybtn">Check
                                    Balance</button></a><br>
                            <h6>Here, you can check the remaining balance in your account.</h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </center>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        
        $(document).ready(function () {

            $(".zoomin").animate({
                width: '400px'
            }, '5000', 'linear');
            $(".zoomfont").animate({
                fontSize: '71px'
            }, '5000', 'linear');
        });
    </script>

</div>
</body>

</html>