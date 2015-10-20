<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" value="The images in this example scroll up, while the associated texts scroll down. This is possible by creating two seperate carousels and letting the first control the second." />
        <meta name="keywords" value="header, carousel, slider, image, text" />




        <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('css/datepicker.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('css/bootstrap-timepicker.min.css'); ?>" rel="stylesheet" type="text/css">

        <!-- Le fav and touch icons -->

        <!-- Le scripts-->
        <script type="text/javascript" src="<?php echo base_url('js/jquery.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('js/bootstrap-datepicker.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('js/bootstrap-timepicker.min.js'); ?>"></script>

        <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script> 
        <script type="text/javascript" src="<?php echo base_url('js/bootstrap.js'); ?>"></script> 

        <script type="text/javascript" src="<?php echo base_url('js/car2.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('js/car1.js'); ?>"></script>

        <style type="text/css">
            h2{
                margin: 0;     
                color: #666;
                padding-top: 0px;
                font-size: 52px;
                font-family: "trebuchet ms", sans-serif;    

            }
            .item{
                top:0px;
                background-color: lightskyblue;

                height: 370px !important;


            }
            .carousel{
                margin-top: 0px;
                height: 370px;

            }
            .bs-example{
                top:400px;
                margin: 0px;
                height: 370px;

            }
        </style>
        <style>

            #cssmenu ul,
            #cssmenu li,
            #cssmenu a {
                list-style: none;
                margin: 0;
                padding: 0;
                border: 0;
                line-height: 1;
                font-family: 'Lato', sans-serif;
            }
            #cssmenu {
                border: 1px solid #133e40;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                -ms-border-radius: 5px;
                -o-border-radius: 5px;
                border-radius: 5px;
                width: auto;
            }
            #cssmenu ul {
                zoom: 1;
                background: lightskyblue;
                background: -moz-linear-gradient(top, #0000FF 100%, #00003D 100%);
                background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #0000FF), color-stop(100%, #00003D));
                background: -webkit-linear-gradient(top, #66CCFF 0%, #0000FF 100%);
                background: -o-linear-gradient(top, #0000FF 100%, #0000ff 100%);
                background: -ms-linear-gradient(top, #0000FF 100%, #00003D 100%);
                background: linear-gradient(top, #0000FF 0%, #00003D 100%);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#0000FF, endColorstr=#00003D, GradientType=0);
                padding: 5px 10px;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                -ms-border-radius: 5px;
                -o-border-radius: 5px;
                border-radius: 5px;
            }
            #cssmenu ul:before {
                content: '';
                display: block;
            }
            #cssmenu ul:after {
                content: '';
                display: table;
                clear: both;
            }
            #cssmenu li {
                float: left;
                margin: 0 5px 0 0;
                border: 1px solid transparent;
            }
            #cssmenu li a {
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                -ms-border-radius: 5px;
                -o-border-radius: 5px;
                border-radius: 5px;
                padding: 8px 15px 9px 15px;
                display: block;
                text-decoration: none;
                color: white;
                border: 1px solid transparent;
                font-size: 17px;
                font-weight:bold;
            }
            #cssmenu li.active {
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                -ms-border-radius: 5px;
                -o-border-radius: 5px;
                border-radius: 5px;
                border: 1px solid #36b0b6;
            }
            #cssmenu li.active a {
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                -ms-border-radius: 5px;
                -o-border-radius: 5px;
                border-radius: 5px;
                display: block;
                background: green
                    ;
                border: 1px solid #133e40;
                -moz-box-shadow: inset 0 5px 10px #133e40;
                -webkit-box-shadow: inset 0 5px 10px #133e40;
                box-shadow: inset 0 5px 10px #133e40;
            }
            #cssmenu li:hover {
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                -ms-border-radius: 5px;
                -o-border-radius: 5px;
                border-radius: 5px;
                border: 1px solid #36b0b6;
            }
            #cssmenu li:hover a {
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                -ms-border-radius: 5px;
                -o-border-radius: 5px;
                border-radius: 5px;
                display: block;
                background: blue;
                border: 1px solid #133e40;
                -moz-box-shadow: inset 0 5px 10px #133e40;
                -webkit-box-shadow: inset 0 5px 10px #133e40;
                box-shadow: inset 0 5px 10px #133e40;
            }

            html { height: 100%; background: transparent url("/ims/car/fm_bg.gif") repeat center top; overflow-y: scroll; background-attachment: fixed;}
            body {font: normal 12.2px/1.3 Arial, Helvetica, Sans-Serif; height: 100%; background: transparent url("/ims/car/fm_bg.gif") repeat center top;background-attachment: fixed;}
         

            @media (max-width: 768px) {
                .btn-responsive {
                    padding:2px 3px;
                    font-size:80%;
                    line-height: 1;
                    border-radius:3px;
                }
            }

            @media (min-width: 769px) and (max-width: 992px) {
                .btn-responsive {
                    padding:4px 9px;
                    font-size:90%;
                    line-height: 1.2;
                }
            }



        </style>

        <style>
            html { height: 100%;width:100%; background: transparent url("/newlogin/car/fm_bg.gif") repeat center top; overflow-y: scroll; background-size:1842px 5px;background-attachment: fixed;}
            body {font: normal 12.2px/1.3 Arial, Helvetica, Sans-Serif; height: 100%; background: transparent url("/newlogin/car/fm_bg.gif") repeat center top;background-size: 1542px 5px;background-attachment: fixed;}
           
        </style>
        <style>
            @media (max-width: 768px) {
                .btn-responsive {
                    padding:2px 3px;
                    font-size:80%;
                    line-height: 1;
                    border-radius:3px;
                }
            }

            @media (min-width: 769px) and (max-width: 992px) {
                .btn-responsive {
                    padding:4px 9px;
                    font-size:90%;
                    line-height: 1.2;
                }
            }


        </style>
    </head>



    <body style="color:white;" >

        <table border="0" cellpadding=0 cellspacing=0 frame="box" align="center" style="border-collapse: collapse;position:static;alignment-adjust: central;width:75%;">
            <tr style="background-color:black;color:#0052A3;">
                <td >

                    <table>
                        <tr>
                            <td style="color:black">_</td>
                            <td> <a href = "#" valign="top"  style="color:white;left:5%;font-weight: bold;font-size: 14px;">Great Lake Solutions - A Chemtura business</a>
                            </td>
                            <td><a href = "#" valign="top"  style="color:black"></a>  
                            </td>

                            <td style="color:goldenrod;font-weight: bold;font-size:15px;" </td>
                            <td><a href = "#" valign="top"  style="color:white;left:5%;font-weight: bold;font-size: 14px;"> </a>  
                            </td>

                            <td> <a href = "#" valign="top"  style="color:white;left:5%;font-weight: bold;font-size: 16px;"> </a>  
                            </td>
                            <td> <a href = "#" valign="top"  style="color:white;left:5%;font-weight: bold;font-size: 14px;">  </a>  
                            </td>








                    </table>




                </td>

            </tr>























            <tr>
                <td style="height:35px;color:black;"> <div id='cssmenu'>
                        <ul>
                            <li class='' style="width:53%;margin-left:30%;"><a href='#' ><span style="font-size: 18px;font-weight: bold;">ISO CONTAINER MANAGEMENT SYSTEM</span></a></li>

                        </ul>
                    </div>

                </td>

            </tr>



            <tr  style="background-color:white;height:100px;">
                <td >




                    <div style="float:left;height:30%;width:50%;margin-top:0%;margin-left:10%;">
                        <img src="\ims\car\greatlakes.png" style="width:75%;"   />
                    </div>

                    <div float="right" style="margin-left:60%;">


                        <form class="form-horizontal" action="<?php echo site_url('login/check'); ?>" method="POST">
                            <fieldset>
                                <div id="legend">
                                    <legend class="">Login </legend>
                                </div>
                                <div class="control-group">
                                    <!-- Username -->

                                    <div class="controls" style="color:black;"><label class="control-label"  for="username"> Username</label>
                                        <input type="text" id="username" name="username" placeholder=""  class="input-xlarge" style="width:70%;height:25px;">
                                    </div>
                                </div>
                                <p></p>
                                <div class="control-group">
                                    <!-- Password-->

                                    <div class="controls" style="color:black;"><label class="control-label" for="password">Password&nbsp;</label>
                                        <input type="password" id="password" name="password" class="input-xlarge" placeholder=""  style="width:70%;height:25px;">
                                    </div>
                                </div>


                                <div class="control-group" style="float: left;margin-left: 25%;margin-bottom: 2%;">
                                    <!-- Button -->
                                    <div class="controls">

                                        <p></p>
                                        <p></p>
                                        <a class="btn btn-primary btn-responsive" href="<?php echo site_url('login/forgot') ?>" style="height:40%;width:60%;font-weight: bold;" type="submit">  Forgot Password </a>&nbsp;&nbsp&nbsp;

                                        <button class="btn btn-success btn-responsive" style="height:40%;width:65px;font-weight: bold; ">Login</button>

                                    </div>
                            </fieldset></form>

                    </div>

                    <div style="margin-left:63%;margin-bottom: 0.5%;">        
                        <?php
                        if ($error) {


                            echo "<font color='red'><strong>$error_message </strong></font>";
                        } else if (isset($message)) {

                            echo $message;
                        }
                        ?> 


                    </div>

                </td>

            </tr>


            <tr>
                <td height="280" colspan="5" align="left" valign="top">


                    <div class="bs-example" style="margin-left:0%;" >
                        <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel" >
                            <!-- Carousel indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>   
                            <!-- Carousel items -->
                            <div class="carousel-inner" style="margin-left:0%;" >
                                <div class="active item"  >

                                    <div class="carousel-caption" style="height:100%;margin-left:-40%;" >

                                        <p><img src="\ims\car\PIC3.jpg" style="height:100%;width:120%;opacity:2"  /></p>
                                    </div>
                                </div>
                                <div class="item" >

                                    <div class="carousel-caption"  style="height:100%;margin-left:-40%;">
                                        <p><img src="\ims\car\PIC2.jpg" style="height:100%;width:120%;" /><p>
                                    </div>
                                </div>
                                <div class="item" >

                                    <div class="carousel-caption" style="height:100%;margin-left:-40%;" >
                                        <p><img src="\ims\car\pic1.jpg"style="height:100%;width:120%;"  /></p>

                                    </div>
                                </div>
                                <div class="item" >

                                    <div class="carousel-caption" style="height:100%;margin-left:-40%;" >
                                        <p><img src="\ims\car\PIC4.jpg"style="height:100%;width:120%;"  /></p>

                                    </div>
                                </div>
                                <div class="item" >

                                    <div class="carousel-caption" style="height:100%;margin-left:-40%;" >
                                        <p><img src="\ims\car\pic10.jpg"style="height:100%;width:120%;"  /></p>

                                    </div>
                                </div>
                                <div class="item">

                                    <div class="carousel-caption" style="height:100%;margin-left:-40%;" >
                                        <p><img src="\ims\car\pic12.jpg"style="height:100%;width:120%;"  /></p>

                                    </div>
                                </div>
                                <div class="item" >

                                    <div class="carousel-caption" style="height:100%;margin-left:-40%;" >
                                        <p><img src="\ims\car\pic13.jpg"style="height:100%;width:120%;"  /></p>

                                    </div>
                                </div>
                                <div class="item" >

                                    <div class="carousel-caption" style="height:100%;margin-left:-40%;" >
                                        <p><img src="\ims\car\pic14.jpg"style="height:100%;width:120%;"  /></p>

                                    </div>
                                </div>
                                <div class="item">

                                    <div class="carousel-caption" style="height:100%;margin-left:-40%;" >
                                        <p><img src="\ims\car\pic15.jpg"style="height:100%;width:120%;"  /></p>

                                    </div>
                                </div>
                            </div>
                            <!-- Carousel nav -->
                            <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="carousel-control right" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </td>
            </tr>
            <tr>
                <td>
                    <div style="width:33.2%;float:left;height:100%;background-color:grey;color:white;margin-top:0.2%; margin-left: 0%; ">
                         
                        <p style="font-weight:bold;display:block;margin-left:30%;margin-top: 2%;" >About Product</p>
                        </div>	
                     <div style="width:33.2%;float:left;height:100%;background-color:grey;color:white;margin-top:0.25%;margin-left: 0.2%; ">                         
                         <p style="font-weight:bold;display:block;margin-left:30%;margin-top: 2%;" >User-Guide</p>
                        </div>	
                     <div style="width:33.2%;float:left;height:100%;background-color:grey;color:white;margin-top:0.2%;margin-left: 0.2%;  ">
                         
                        <p style="font-weight:bold;display:block;margin-left:30%;margin-top: 2%;" >Contact & Support </p>
                        </div>	
<div>
                    </div></td>

            </tr>
           <tr>
                <td>
                    <div style="width:33.2%;float:left;height:100%;background-color:white;color:black;margin-top:0%;border: 1px solid gray; ">
                         
  <p style="display:block;margin-left:5%;margin-right: 3%;margin-right: 2%;margin-top: 2%;color:darkslategray;" > ISO Container Management system(IMS) is a software to control and manage the ISO container work-flow and work-orders.  </p>
           <p style="display:block;margin-right: 3%;margin-left:5%;margin-top: 2%;color:darkslategray;" > The primary purpose and goal of IMS is to reduce effort and time spent on each work-order.  </p>
                  
                        </div>	
                     <div style="width:33.2%;float:left;height:100%;background-color:white;color:white;margin-top:0%;margin-left: 0.2%;border: 1px solid gray; ">
                         
<p style="display:block;margin-right: 3%;margin-left:5%;margin-top: 2%;color:darkslategray;" > Basic and formal training is suggested to use this software with ease and to feel comfortable. </p>
   <p style="display:block;margin-right: 3%;margin-left:5%;margin-top: 2%;color:darkslategray;" >   User manual provided here will walk the users through various instructions and functionalities .
     </br>  <a href="url">User Manual</a> </p>
    
                     </div>	
                     <div style="width:33.2%;float:left;height:100%;background-color:white;color:white;margin-top:0%;margin-left: 0.2%;border: 1px solid gray;  ">
                         
                          <p style="display:block;margin-right: 3%;margin-left:10%;margin-top: 2%;color:darkslategray;" > Louisiana Tech University</br> 305 Wisteria St, Ruston, LA 71272.</br>Phone:
                              (318) 257-2000 </p>
                      <p    style="display:block;margin-right: 3%;margin-left:10%;margin-top: 2%;color:darkslategray;">Email: naibox@gmail.com, apa034@latech.edu </br> Phone: (318) 243-6597 , (318) 514-9437</p>
    
                        </div>	
<div>
                    </div></td>

            </tr>
            <tr  ><td >
            <div style="width:100%;color:darkblue;font-weight:bolder;margin-top: 1%;margin-left:0%;" ></div>
               <div style="width:100%;margin-left:25%;margin-top: 1%;color:darkslategray;" >2015 Copyright DR Box and Team &nbsp; |&nbsp;  All rights reserved&nbsp; |&nbsp; Terms of Use &nbsp;|&nbsp; Privacy Policy</div>
        <p></p> <p></p> 
                </td> </tr>
        </table>
    </div>
</body>

</html>


