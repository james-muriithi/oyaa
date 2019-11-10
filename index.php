<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Oyaa Tickets</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/nice-select.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/confetti.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrapValidator.css">
    <link rel="stylesheet" type="text/css" href="assets/sweetalert/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- end of css -->
    <link href="assets/css/facebook.css" rel="stylesheet">
    <style type="text/css">
    .bt .col-md-1 {
        margin-right: 10px !important;
    }
    </style>
    <style type="text/css">
    /*.btn-primary {
        background-color: #fe010142;
        border-color: #fed136;
    }

    .btn-primary:active,
    .btn-primary:focus,
    .btn-primary:hover {
        background-color: #fed136 !important;
        border-color: #df0101 !important;
        color: white;
    }

    .btn-primary:active,
    .btn-primary:focus {
        -webkit-box-shadow: 0 0 0 0.2rem rgba(254, 209, 55, 0.5) !important;
        box-shadow: 0 0 0 0.2rem rgba(254, 209, 55, 0.5) !important;
    }*/

    #mainNav .navbar-brand {
        color: #f70b09;
        font-family: 'Kaushan Script', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
    }

    .navbar-brand {
        display: inline-block;
        padding-top: .3125rem;
        padding-bottom: .3125rem;
        margin-right: 1rem;
        font-size: 4.25rem;
        line-height: inherit;
        white-space: nowrap;
    }

    .form-group label {
        text-align: left;

    }
    </style>
</head>

<body>
    <div id="particles-js"></div>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-fixed-top" style="position: fixed; top: 0; ">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <h1>O<span>y</span>aa</h1>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active item1">
                        <a class="nav-link" href="#home">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="#" data-toggle="modal" data-target=".bd-example-modal-lg">Flickers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Why Oyaa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="col-md-12 m-t-15">
        <!-- campaigns -->
        <div id="campaigns" class="campaigns">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 p-3">
                        <div class="row">
                            <!-- New card -->
                            <div class="col-sm-6 col-md-4 col-lg-3 ">
                                <div class="card">
                                    <img class="card-img-top" src="assets/img/bg_4.jpg" alt="Card image" height="170">
                                    <div class="card-body">
                                        <h4 class="card-title">Mombasa Twerk Night</h4>
                                        <div class="ribbon ribbon-left ribbon-shadow ribbon-color-danger uppercase"><i class="fa fa-calendar"></i> 20 Sep, 2017</div>
                                        <p class="card-text">
                                            Happening live at Aura Lounge form 8pm till <i>cheeee!</i> Ladies ni 200/- shillings only and 300 for joma chuo!
                                        </p>
                                        <div class="event-latest-details">
                                            <a class="author" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 8.00pm - 5.00am</a>
                                            <a class="comments" href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> Club Azura</a>
                                        </div>
                                        <div class="mx-auto float-left">
                                            <a href="info.html" class="btn btn-success">Learn More</a>
                                        </div>
                                        <div class="mx-auto" style="float: right;">
                                            <button href="#" class="btn  btn-participate" data-toggle="modal" data-target="#buy-now" id="1">Buy Ticket</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of card -->
                            <!-- New card -->
                            <div class="col-sm-6 col-md-4 col-lg-3 ">
                                <div class="card">
                                    <img class="card-img-top" src="assets/img/bg_4.jpg" alt="Card image" height="170">
                                    <div class="card-body">
                                        <h4 class="card-title">Azura Night</h4>
                                        <div class="ribbon ribbon-left ribbon-shadow ribbon-color-danger uppercase"><i class="fa fa-calendar"></i> 20 Sep, 2017</div>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum eligendi modi praesentium quas, harum facilis nisi incidunt fuga!
                                        </p>
                                        <div class="event-latest-details">
                                            <a class="author" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 10.00am - 3.00pm</a>
                                            <a class="comments" href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> California, USA</a>
                                        </div>
                                        <div class="mx-auto" style="float: left;">
                                            <button href="#" class="btn  btn-success">Learn More</button>
                                        </div>
                                        <div class="mx-auto" style="float: right;">
                                            <button href="#" class="btn  btn-participate">Buy Ticket</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of card -->
                            <!-- New card -->
                            <div class="col-sm-6 col-md-4 col-lg-3 ">
                                <div class="card">
                                    <img class="card-img-top" src="assets/img/bg_4.jpg" alt="Card image" height="170">
                                    <div class="card-body">
                                        <h4 class="card-title">Azura Night</h4>
                                        <div class="ribbon ribbon-left ribbon-shadow ribbon-color-danger uppercase"><i class="fa fa-calendar"></i> 20 Sep, 2017</div>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum eligendi modi praesentium quas, harum facilis nisi incidunt fuga!
                                        </p>
                                        <div class="event-latest-details">
                                            <a class="author" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 10.00am - 3.00pm</a>
                                            <a class="comments" href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> California, USA</a>
                                        </div>
                                        <div class="mx-auto" style="float: left;">
                                            <button href="#" class="btn  btn-success">Event Info</button>
                                        </div>
                                        <div class="mx-auto" style="float: right;">
                                            <button href="#" class="btn  btn-participate">Buy Ticket</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of card -->
                            <!-- New card -->
                            <div class="col-sm-6 col-md-4 col-lg-3 ">
                                <div class="card">
                                    <img class="card-img-top" src="assets/img/bg_4.jpg" alt="Card image" height="170">
                                    <div class="card-body">
                                        <h4 class="card-title">Azura Night</h4>
                                        <div class="ribbon ribbon-left ribbon-shadow ribbon-color-danger uppercase"><i class="fa fa-calendar"></i> 20 Sep, 2017</div>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum eligendi modi praesentium quas, harum facilis nisi incidunt fuga!
                                        </p>
                                        <div class="event-latest-details">
                                            <a class="author" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 10.00am - 3.00pm</a>
                                            <a class="comments" href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> California, USA</a>
                                        </div>
                                        <div class="mx-auto" style="float: left;">
                                            <button href="#" class="btn  btn-success">Learn More</button>
                                        </div>
                                        <div class="mx-auto" style="float: right;">
                                            <button href="#" class="btn  btn-participate">Buy Ticket</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of card -->
                            <!-- New card -->
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="card">
                                    <img class="card-img-top" src="assets/img/bg_4.jpg" alt="Card image" height="170">
                                    <div class="card-body">
                                        <h4 class="card-title">Azura Night</h4>
                                        <div class="ribbon ribbon-left ribbon-shadow ribbon-color-danger uppercase"><i class="fa fa-calendar"></i> 20 Sep, 2017</div>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum eligendi modi praesentium quas, harum facilis nisi incidunt fuga!
                                        </p>
                                        <div class="event-latest-details">
                                            <a class="author" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 10.00am - 3.00pm</a>
                                            <a class="comments" href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> California, USA</a>
                                        </div>
                                        <div class="mx-auto" style="float: left;">
                                            <button href="#" class="btn  btn-success">Learn More</button>
                                        </div>
                                        <div class="mx-auto" style="float: right;">
                                            <button href="#" class="btn  btn-participate">Buy Ticket</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of card -->
                            <!-- New card -->
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="card">
                                    <img class="card-img-top" src="assets/img/bg_4.jpg" alt="Card image" height="170">
                                    <div class="card-body">
                                        <h4 class="card-title">Azura Night</h4>
                                        <div class="ribbon ribbon-left ribbon-shadow ribbon-color-danger uppercase"><i class="fa fa-calendar"></i> 20 Sep, 2017</div>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum eligendi modi praesentium quas, harum facilis nisi incidunt fuga!
                                        </p>
                                        <div class="event-latest-details">
                                            <a class="author" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 10.00am - 3.00pm</a>
                                            <a class="comments" href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> California, USA</a>
                                        </div>
                                        <div class="mx-auto" style="float: left;">
                                            <button href="#" class="btn  btn-success">Learn More</button>
                                        </div>
                                        <div class="mx-auto" style="float: right;">
                                            <button href="#" class="btn  btn-participate">Buy Ticket</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of card -->
                            <!-- New card -->
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="card">
                                    <img class="card-img-top" src="assets/img/bg_4.jpg" alt="Card image" height="170">
                                    <div class="card-body">
                                        <h4 class="card-title">Azura Night</h4>
                                        <div class="ribbon ribbon-left ribbon-shadow ribbon-color-danger uppercase"><i class="fa fa-calendar"></i> 20 Sep, 2017</div>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum eligendi modi praesentium quas, harum facilis nisi incidunt fuga!
                                        </p>
                                        <div class="event-latest-details">
                                            <a class="author" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 10.00am - 3.00pm</a>
                                            <a class="comments" href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> California, USA</a>
                                        </div>
                                        <div class="mx-auto" style="float: left;">
                                            <button href="#" class="btn  btn-success">Learn More</button>
                                        </div>
                                        <div class="mx-auto" style="float: right;">
                                            <button href="#" class="btn  btn-participate">Buy Ticket</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of card -->
                            <!-- New card -->
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="card">
                                    <img class="card-img-top" src="assets/img/bg_4.jpg" alt="Card image" height="170">
                                    <div class="card-body">
                                        <h4 class="card-title">Azura Night</h4>
                                        <div class="ribbon ribbon-left ribbon-shadow ribbon-color-danger uppercase"><i class="fa fa-calendar"></i> 20 Sep, 2017</div>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum eligendi modi praesentium quas, harum facilis nisi incidunt fuga!
                                        </p>
                                        <div class="event-latest-details">
                                            <a class="author" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 10.00am - 3.00pm</a>
                                            <a class="comments" href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> California, USA</a>
                                        </div>
                                        <div class="mx-auto" style="float: left;">
                                            <button href="#" class="btn  btn-success">Learn More</button>
                                        </div>
                                        <div class="mx-auto" style="float: right;">
                                            <button href="#" class="btn  btn-participate">Buy Ticket</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of card -->
                            <!-- New card -->
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="card">
                                    <img class="card-img-top" src="assets/img/bg_4.jpg" alt="Card image" height="170">
                                    <div class="card-body">
                                        <h4 class="card-title">Azura Night</h4>
                                        <div class="ribbon ribbon-left ribbon-shadow ribbon-color-danger uppercase"><i class="fa fa-calendar"></i> 20 Sep, 2017</div>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum eligendi modi praesentium quas, harum facilis nisi incidunt fuga!
                                        </p>
                                        <div class="event-latest-details">
                                            <a class="author" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 10.00am - 3.00pm</a>
                                            <a class="comments" href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> California, USA</a>
                                        </div>
                                        <div class="mx-auto" style="float: left;">
                                            <button href="#" class="btn  btn-success">Learn More</button>
                                        </div>
                                        <div class="mx-auto" style="float: right;">
                                            <button href="#" class="btn  btn-participate">Buy Ticket</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of card -->
                            <!-- New card -->
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="card">
                                    <img class="card-img-top" src="assets/img/bg_4.jpg" alt="Card image" height="170">
                                    <div class="card-body">
                                        <h4 class="card-title">Azura Night</h4>
                                        <div class="ribbon ribbon-left ribbon-shadow ribbon-color-danger uppercase"><i class="fa fa-calendar"></i> 20 Sep, 2017</div>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum eligendi modi praesentium quas, harum facilis nisi incidunt fuga!
                                        </p>
                                        <div class="event-latest-details">
                                            <a class="author" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 10.00am - 3.00pm</a>
                                            <a class="comments" href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> California, USA</a>
                                        </div>
                                        <div class="mx-auto" style="float: left;">
                                            <button href="#" class="btn  btn-success">Learn More</button>
                                        </div>
                                        <div class="mx-auto" style="float: right;">
                                            <button href="#" class="btn  btn-participate">Buy Ticket</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of card -->
                            <!-- New card -->
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="card">
                                    <img class="card-img-top" src="assets/img/bg_4.jpg" alt="Card image" height="170">
                                    <div class="card-body">
                                        <h4 class="card-title">Azura Night</h4>
                                        <div class="ribbon ribbon-left ribbon-shadow ribbon-color-danger uppercase"><i class="fa fa-calendar"></i> 20 Sep, 2017</div>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum eligendi modi praesentium quas, harum facilis nisi incidunt fuga!
                                        </p>
                                        <div class="event-latest-details">
                                            <a class="author" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 10.00am - 3.00pm</a>
                                            <a class="comments" href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> California, USA</a>
                                        </div>
                                        <div class="mx-auto" style="float: left;">
                                            <button href="#" class="btn  btn-success">Learn More</button>
                                        </div>
                                        <div class="mx-auto" style="float: right;">
                                            <button href="#" class="btn  btn-participate">Buy Ticket</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of card -->
                            <!-- New card -->
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="card">
                                    <img class="card-img-top" src="assets/img/bg_4.jpg" alt="Card image" height="170">
                                    <div class="card-body">
                                        <h4 class="card-title">Azura Night</h4>
                                        <div class="ribbon ribbon-left ribbon-shadow ribbon-color-danger uppercase"><i class="fa fa-calendar"></i> 20 Sep, 2017</div>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum eligendi modi praesentium quas, harum facilis nisi incidunt fuga!
                                        </p>
                                        <div class="event-latest-details">
                                            <a class="author" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 10.00am - 3.00pm</a>
                                            <a class="comments" href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> California, USA</a>
                                        </div>
                                        <div class="mx-auto" style="float: left;">
                                            <button href="#" class="btn  btn-success">Learn More</button>
                                        </div>
                                        <div class="mx-auto" style="float: right;">
                                            <button href="#" class="btn  btn-participate">Buy Ticket</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of card -->
                            <!-- New card -->
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="card">
                                    <img class="card-img-top" src="assets/img/bg_4.jpg" alt="Card image" height="170">
                                    <div class="card-body">
                                        <h4 class="card-title">Azura Night</h4>
                                        <div class="ribbon ribbon-left ribbon-shadow ribbon-color-danger uppercase"><i class="fa fa-calendar"></i> 20 Sep, 2017</div>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum eligendi modi praesentium quas, harum facilis nisi incidunt fuga!
                                        </p>
                                        <div class="event-latest-details">
                                            <a class="author" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 10.00am - 3.00pm</a>
                                            <a class="comments" href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> California, USA</a>
                                        </div>
                                        <div class="mx-auto" style="float: left;">
                                            <button href="#" class="btn  btn-success">Learn More</button>
                                        </div>
                                        <div class="mx-auto" style="float: right;">
                                            <button href="#" class="btn  btn-participate">Buy Ticket</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of card -->
                            <!-- New card -->
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="card">
                                    <img class="card-img-top" src="assets/img/bg_4.jpg" alt="Card image" height="170">
                                    <div class="card-body">
                                        <h4 class="card-title">Azura Night</h4>
                                        <div class="ribbon ribbon-left ribbon-shadow ribbon-color-danger uppercase"><i class="fa fa-calendar"></i> 20 Sep, 2017</div>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum eligendi modi praesentium quas, harum facilis nisi incidunt fuga!
                                        </p>
                                        <div class="event-latest-details">
                                            <a class="author" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 10.00am - 3.00pm</a>
                                            <a class="comments" href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> California, USA</a>
                                        </div>
                                        <div class="mx-auto" style="float: left;">
                                            <button href="#" class="btn  btn-success">Learn More</button>
                                        </div>
                                        <div class="mx-auto" style="float: right;">
                                            <button href="#" class="btn  btn-participate">Buy Ticket</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of card -->
                            <!-- New card -->
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="card">
                                    <img class="card-img-top" src="assets/img/bg_4.jpg" alt="Card image" height="170">
                                    <div class="card-body">
                                        <h4 class="card-title">Azura Night</h4>
                                        <div class="ribbon ribbon-left ribbon-shadow ribbon-color-danger uppercase"><i class="fa fa-calendar"></i> 20 Sep, 2017</div>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum eligendi modi praesentium quas, harum facilis nisi incidunt fuga!
                                        </p>
                                        <div class="event-latest-details">
                                            <a class="author" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 10.00am - 3.00pm</a>
                                            <a class="comments" href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> California, USA</a>
                                        </div>
                                        <div class="mx-auto" style="float: left;">
                                            <button href="#" class="btn  btn-success">Learn More</button>
                                        </div>
                                        <div class="mx-auto" style="float: right;">
                                            <button href="#" class="btn  btn-participate">Buy Ticket</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of card -->
                            <!-- New card -->
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="card">
                                    <img class="card-img-top" src="assets/img/bg_4.jpg" alt="Card image" height="170">
                                    <div class="card-body">
                                        <h4 class="card-title">Azura Night</h4>
                                        <div class="ribbon ribbon-left ribbon-shadow ribbon-color-danger uppercase"><i class="fa fa-calendar"></i> 20 Sep, 2017</div>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum eligendi modi praesentium quas, harum facilis nisi incidunt fuga!
                                        </p>
                                        <div class="event-latest-details">
                                            <a class="author" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 10.00am - 3.00pm</a>
                                            <a class="comments" href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> California, USA</a>
                                        </div>
                                        <div class="mx-auto" style="float: left;">
                                            <button href="#" class="btn  btn-success">Learn More</button>
                                        </div>
                                        <div class="mx-auto" style="float: right;">
                                            <button href="#" class="btn  btn-participate">Buy Ticket</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of card -->
                            <!-- New card -->
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="card">
                                    <img class="card-img-top" src="assets/img/bg_4.jpg" alt="Card image" height="170">
                                    <div class="card-body">
                                        <h4 class="card-title">Azura Night</h4>
                                        <div class="ribbon ribbon-left ribbon-shadow ribbon-color-danger uppercase"><i class="fa fa-calendar"></i> 20 Sep, 2017</div>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum eligendi modi praesentium quas, harum facilis nisi incidunt fuga!
                                        </p>
                                        <div class="event-latest-details">
                                            <a class="author" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 10.00am - 3.00pm</a>
                                            <a class="comments" href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> California, USA</a>
                                        </div>
                                        <div class="mx-auto" style="float: left;">
                                            <button href="#" class="btn  btn-success">Learn More</button>
                                        </div>
                                        <div class="mx-auto" style="float: right;">
                                            <button href="#" class="btn  btn-participate">Buy Ticket</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of card -->
                            <!-- New card -->
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="card">
                                    <img class="card-img-top" src="assets/img/bg_4.jpg" alt="Card image" height="170">
                                    <div class="card-body">
                                        <h4 class="card-title">Azura Night</h4>
                                        <div class="ribbon ribbon-left ribbon-shadow ribbon-color-danger uppercase"><i class="fa fa-calendar"></i> 20 Sep, 2017</div>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum eligendi modi praesentium quas, harum facilis nisi incidunt fuga!
                                        </p>
                                        <div class="event-latest-details">
                                            <a class="author" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 10.00am - 3.00pm</a>
                                            <a class="comments" href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> California, USA</a>
                                        </div>
                                        <div class="mx-auto" style="float: left;">
                                            <button href="#" class="btn  btn-success">Learn More</button>
                                        </div>
                                        <div class="mx-auto" style="float: right;">
                                            <button href="#" class="btn  btn-participate">Buy Ticket</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of card -->
                            <!-- New card -->
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="card">
                                    <img class="card-img-top" src="assets/img/bg_4.jpg" alt="Card image" height="170">
                                    <div class="card-body">
                                        <h4 class="card-title">Azura Night</h4>
                                        <div class="ribbon ribbon-left ribbon-shadow ribbon-color-danger uppercase"><i class="fa fa-calendar"></i> 20 Sep, 2017</div>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum eligendi modi praesentium quas, harum facilis nisi incidunt fuga!
                                        </p>
                                        <div class="event-latest-details">
                                            <a class="author" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 10.00am - 3.00pm</a>
                                            <a class="comments" href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> California, USA</a>
                                        </div>
                                        <div class="mx-auto" style="float: left;">
                                            <button href="#" class="btn  btn-success">Learn More</button>
                                        </div>
                                        <div class="mx-auto" style="float: right;">
                                            <button href="#" class="btn  btn-participate">Buy Ticket</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of card -->
                            <!-- New card -->
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="card">
                                    <img class="card-img-top" src="assets/img/bg_4.jpg" alt="Card image" height="170">
                                    <div class="card-body">
                                        <h4 class="card-title">Azura Night</h4>
                                        <div class="ribbon ribbon-left ribbon-shadow ribbon-color-danger uppercase"><i class="fa fa-calendar"></i> 20 Sep, 2017</div>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum eligendi modi praesentium quas, harum facilis nisi incidunt fuga!
                                        </p>
                                        <div class="event-latest-details">
                                            <a class="author" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 10.00am - 3.00pm</a>
                                            <a class="comments" href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> California, USA</a>
                                        </div>
                                        <div class="mx-auto" style="float: left;">
                                            <button href="#" class="btn  btn-success">Learn More</button>
                                        </div>
                                        <div class="mx-auto" style="float: right;">
                                            <button href="#" class="btn  btn-participate">Buy Ticket</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of card -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- </campaigns -->
        <div>
            <!-- Modal form-->
            <div class="modal animated animated fadeInDown" id="buy-now" role="dialog" data-keyboard="false" data-backdrop="static">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h5>Buy Your Ticket Now!!!</h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                        </div>
                        <!-- Modal Body -->
                        <div class="modal-body">
                            <p class="statusMsg"></p>
                            <form role="form" id="details-form">
                                <div class="form-group">
                                    <label for="inputName">Name</label>
                                    <input type="text" class="form-control" name="inputName" id="inputName" placeholder=" Please enter your name" value="j a" />
                                </div>
                                <div class="form-group">
                                    <label for="inputGender">Gender</label>
                                    <select class="form-control" name="inputGender" id="inputGender">
                                        <option disabled>Select Gender</option>
                                        <option value="M" selected>Female</option>
                                        <option value="F">Male</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputPhone">Phone</label>
                                    <input type="text" class="form-control" name="inputPhone" id="inputPhone" placeholder="eg. 0710100100" value="0710100100" />
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail">Email</label>
                                    <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder=" username@mail.com" value="username@mail.com" />
                                </div>
                            </form>
                        </div>
                        <!-- Modal Footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success submitBtn" form="details-form">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end form modal -->
            <!-- payment modal -->
            <div class="modal animated animated fadeInUp" id="pay-now" role="dialog" data-keyboard="false" data-backdrop="static">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h5>Payment</h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                        </div>
                        <!-- Modal Body -->
                        <div class="modal-body">
                            <p class="statusMsg"></p>
                            <form role="form" id="billingform">
                                <div class="form-group">
                                    <label for="checkoutPhone">Phone Number (Safaricom only)</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">+254</span>
                                        </div>
                                        <input type="text" class="form-control" name="checkoutPhone" id="inputPhone" placeholder="710100100" value="746792699" aria-describedby="basic-addon1" />
                                    </div>
                                    <label>We will send an mpesa payment request to this number</label>
                                </div>
                            </form>
                        </div>
                        <!-- Modal Footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary btn-back">Back</button>
                            <button href="#" class="btn checkout" form="billingform"><img style="width: 45px; display: inline; margin: -8px;" src="assets/img/mpesa.png" class="p-r-5" form="billingform"> Pay With Mpesa</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end confirm modal -->

            <!-- payment modal -->
            <div class="modal animated animated fadeInUp" id="print-now" role="dialog" data-keyboard="false" data-backdrop="static">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h5>Print Ticket</h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                        </div>
                        <!-- Modal Body -->
                        <div class="modal-body">
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, eos repellendus totam sequi fuga doloremque.</h3>
                        </div>
                        <!-- Modal Footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary btn-reload" data-dismiss="modal">Close</button>
                            <a href="#" class="btn checkout btn-print" form="billingform"><i class="fa fa-print"></i> Print Ticket</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end confirm modal -->

        </div>
    </main>
    <!-- START FOOTER  -->
    <footer>
    </footer>
    <!-- END FOOTER  -->
</body>

</html>
<!-- javascript -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/smoothscroll.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/jquery.nice-select.js"></script>
<script type="text/javascript" src="js/bootstrapValidator.js"></script>
<script type="text/javascript" src="assets/sweetalert/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script type="text/javascript" src="js/script.js"></script>
<?php
if (isset($_SESSION['error'])) { 
    echo '<script type="text/javascript">console.log("hello");swal({
                title: "Sorry!",
                text: "'.$_SESSION['error'].'", //put the error message here
                type: "error",
                confirmButtonClass: "btn btn-danger m-t-10",
                confirmButtonText: "Ok",
                closeOnConfirm: true
            })</script>';
            unset($_SESSION['error']);
}else if(isset($_SESSION['success'])){
    echo '<script type="text/javascript"> console.log("hello");swal({
                title: "Good Job!",
                text: "'.$_SESSION['success'].'", //put the error message here
                type: "success",
                confirmButtonClass: "btn btn-success m-t-10",
                confirmButtonText: "Ok",
                closeOnConfirm: true
            })</script>';
            unset($_SESSION['success']);
}

?>
<script type="text/javascript">
$(document).ready(function() {
    let id = 0;
    $('body').on('click', '.btn-participate', function(event) {
        id = $(this).attr('id');
    });
    $('#inputGender').niceSelect();
    $('body').on('click', '.btn-reload', function(event) {
        location.reload();
    });
    $('body').on('click', '.btn-back', function(event) {
        $('#buy-now').modal('show')
        $('#pay-now').modal('hide')
    });
    $('form#details-form').bootstrapValidator({
        // container: 'tooltip',
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh'
        },
        fields: {
            inputName: {
                // message: 'The email is not valid',
                validators: {
                    //when empty it will bring this error message
                    notEmpty: {
                        message: 'Full name is required and cannot be empty'
                    },
                    //this is a regular expression to validate email
                    regexp: {
                        regexp: /^[a-zA-Z]+\s+[a-zA-Z\s]+$/,
                        message: 'Full name can only consist of alphabetical and atlest two names'
                    }
                }
            },
            inputPhone: {
                // message: 'The phone  number is not valid',
                validators: {
                    notEmpty: {
                        message: 'The phone number is required and cannot be empty'
                    },
                    regexp: {
                        regexp: /^(0|\+?254)7(\d){8}$/,
                        message: 'Please provide a valid phone number'
                    }
                }
            },
            inputEmail: {
                // message: 'The email is not valid',
                validators: {
                    //when empty it will bring this error message
                    notEmpty: {
                        message: 'The email is required and cannot be empty'
                    },
                    //this is a regular expression to validate email
                    regexp: {
                        regexp: /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i,
                        message: 'Please provide a valid email address'
                    }
                }
            }
        },
        // what to do if the form is filled correctly
        onSuccess: function(e, data) {
            $('#buy-now').modal('hide')
            $('#pay-now').modal('show')
        }
    });
    $('form#billingform').bootstrapValidator({
        // container: 'tooltip',
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh'
        },
        fields: {
            'checkoutPhone': {
                validators: {
                    notEmpty: {
                        message: 'Your Phone Number is required for payment'
                    },
                    regexp: {
                        regexp: /^7(\d){8}$/,
                        message: 'Please provide a valid phone number'
                    }
                }
            }
        },
        // what to do if the form is filled correctly
        onSuccess: function(e, data) {
            $('#pay-now .modal-footer button').css('pointer-events', 'none!important');
            let customerDetails = $('form#details-form').serialize();
            let checkoutPhone = '254' + $.trim($('input[name="checkoutPhone"]').val())
            $('<div id="loader"></div>').appendTo('form#billingform');
            $('#pay-now .modal-content').addClass('unclickable');
            $.post('pay_now.php', {
                customerDetails:customerDetails,
                checkoutPhone: checkoutPhone,
                eventId: id
            }, function(data, textStatus, xhr) {
                console.log(data);
                data = JSON.parse(data);
                if (Number(data.ResponseCode) == 0) {
                    swal({
                        title: "Good Job!",
                        text: "A payment request was sent to your phone. Please enter your pin to complete your payment",
                        type: "success",
                        showConfirmButton: false
                    });

                    var CheckoutRequestID = data.CheckoutRequestID;
                    var timer = setInterval(function() {
                        $.post('stk-query.php', { checkoutRequestID: CheckoutRequestID },
                            function(data, textStatus, xhr) {
                                data = $.trim(data);
                                console.log(data);
                                paymentStatus = JSON.parse(data);
                                if (paymentStatus.ResultCode) {
                                    if (Number(paymentStatus.ResultCode) != 0) {
                                        let desc = paymentStatus.ResultDesc.split(']')[1];
                                        clearInterval(timer);
                                        $('#pay-now .modal-content').removeClass('unclickable');
                                        $('#loader').remove();
                                        swal({
                                            title: "Sorry!",
                                            text: desc, //put the error message here
                                            type: "error",
                                            confirmButtonClass: "btn btn-danger",
                                            confirmButtonText: "Ok",
                                            closeOnConfirm: true
                                        })
                                    }else{
                                        clearInterval(timer);
                                        $('#pay-now .modal-content').removeClass('unclickable');
                                        $('#loader').remove();
                                        swal({
                                            title: "Hurray!",
                                            text: "Your payment was successful",
                                            type: "success",
                                            confirmButtonClass: "btn btn-success print",
                                            confirmButtonText: "Continue",
                                            closeOnConfirm: false
                                        },function() {
                                            swal.close();
                                            $('#pay-now').modal('hide');
                                            $('.btn-print').attr('href', 'print_ticket.php?ticket='+CheckoutRequestID);
                                            $('#print-now').modal('show');
                                        });

                                    }
                                }
                            })
                        },3000);
                } else {
                    if (typeof data == 'object') {
                        $('#pay-now .modal-content').removeClass('unclickable');
                        $('#loader').remove();
                        swal({
                            title: "Sorry!",
                            text: data.errorMessage, //put the error message here
                            type: "error",
                            confirmButtonClass: "btn btn-danger",
                            confirmButtonText: "Ok",
                            closeOnConfirm: true
                        })
                    } else {
                        $('#pay-now .modal-content').removeClass('unclickable');
                        $('#loader').remove();
                        swal({
                            title: "Apologies!",
                            text: 'An error occurred', //put the error message here
                            type: "error",
                            confirmButtonClass: "btn btn-danger",
                            confirmButtonText: "Ok",
                            closeOnConfirm: true
                        })
                    }
                }
            });
        }
    });
});

function submitLoginForm() {
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var name = $('#inputName').val();
    var email = $('#inputEmail').val();
    var password = $('#inputPasword').val();

    if (email.trim() == '') {
        alert('Please enter your email.');
        $('#inputEmail').focus();
        return false;
    } else if (email.trim() != '' && !reg.test(email)) {
        alert('Please enter valid email.');
        $('#inputEmail').focus();
        return false;
    } else if (password.trim() == '') {
        alert('Please enter your current town.');
        $('#inputMessage').focus();
        return false;
    } else {
        $.ajax({
            type: 'POST',
            url: 'submit_form.php',
            data: 'loginFrmSubmit=1&email=' + email + '&password=' + password,
            beforeSend: function() {
                $('.submitBtn').attr("disabled", "disabled");
                $('.modal-body').css('opacity', '.5');
            },
            success: function(msg) {
                if (msg == 'ok') {
                    $('#inputName').val('');
                    $('#inputEmail').val('');
                    $('#inputMessage').val('');
                    $('.statusMsg').html('<span style="color:green;">Thanks for contacting us, we\'ll get back to you soon.</p>');
                } else {
                    $('.statusMsg').html('<span style="color:red;">Some problem occurred, please try again.<br>' + msg + '</span>');
                }
                $('.submitBtn').removeAttr("disabled");
                $('.modal-body').css('opacity', '');
            }
        });
    }
}
</script>
</body>

</html>