<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="<?php echo asset('favicon.ico')?>" rel="icon" type="image/png" />
    <title>@yield('title')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?php echo asset('font-awesome-4.7.0/css/font-awesome.min.css')?>">
    
    @yield('styles')
</head>

<style type="text/css">

.dropdown-menu2{
 border-radius: 1px;
} 
.dropdown-submenu { position: relative }
.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 1px;
    -moz-border-radius: 4px;
    border-radius: 1px;
} 
.dropdown-submenu:hover>.dropdown-menu { display: block; }
.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}
.dropdown-submenu:hover>a:after { border-left-color: #ccc }
.dropdown-submenu.pull-left { float: none }
.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}
.footer {
    position: relative;

     
    bottom: 0;
    width: 100%;
    background-color: lightgray; 
    text-align: center; 
    margin-top:auto;
}

.navb {border-bottom:1px solid  rgb(211,211,211); padding-bottom:10px};


 #social-fb:hover {
     color: #3B5998;
 }
 #social-tw:hover {
     color: #4099FF;
 }
 #social-gp:hover {
     color: #d34836;
 }
 #social-em:hover {
     color: #f39c12;
 }
 
    
.card{
    border-radius: 1px;
    margin-top:  5px;
    margin-right: 5px;
    margin-left:5px;
    align-items:  center;
}

#MyImage {
    position: relative;
    margin: 20px auto 0;
    width: auto; 
}
#theImage {
    display: block;
    position: relative;
    width: 100%;
}
#myButton{
position:absolute;
width:100px;
height:30px;
top:50%;
left:50%;
margin: -15px 0px 0px -50px;
    border-radius: 1px;
}

#myButton2{
position:absolute;
width:100px; 
top:80%;
left:50%;
margin: -15px 0px 0px -50px;
border-radius: 1px;
background-color: : gray;
white-space: normal;
}

.body{
    background-color: #efefef;color:gray;
    font-family: "Lato", Helvetica, Arial, sans-serif;
    font-weight: 300;
}

</style>


<body class="body">
 

<div id="app" class="container-fluid">

<nav class="navbar navbar-expand-md navb navbar-light" style="background-color: #efefef;color:gray;" >
    <div class="container-fluid">
        <div class="col-lg-2">
            <a class="navbar-head" style="text-decoration:none; color:white;" href="#"><a class="navbar-brand"  href="{{ route('home') }}"> &nbsp;&nbsp;&nbsp;
                <img src="<?php echo asset("sug.png")?>" class="d-inline-block pull-center"  alt="">
            </a></a>
        </div>
        <div class="col-lg-10">
            
            <div class="collapse navbar" id="navbarNavDropdown"> 
                <div class="col-lg-10">
                   <br>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="search" name="searchItem" id="searchItem" class="form-control" placeholder="Search product here..." />
                            <div class="input-group-btn">
                                <div class="btn-group">
                                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><span id="filtertitle" >All</span> </button>
                                    <ul class="dropdown-menu dropdown-menu-right " id="searchbar" name="searchbar">
                                      
                                    </ul>
                                </div>
                                <button class="btn btn-outline-warning"   onclick="search()"> <span class="fa fa-search"></span> </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-1"  id="cartbadge"> 
                </div>
                <div class="col-lg-1"> 

                    <a  class="dropdown" data-toggle="dropdown" ><img  type="image" src="<?php echo asset("orange-user.png")?>" width="20" height="20"> </a>
                    <div class="dropdown-menu  dropdown-menu-left">
                   
                    @if (Route::has('login'))
                        <div class="top-right links" >
                            @auth
                        <a class="dropdown-item" href="{{ route('profile') }}">
                        View Profile
                        </a>
                        <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                            Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                    @else
                                <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                                <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                            @endauth
                        </div>
                    @endif
            </div>
        </div>
  </div>
</nav> 
<nav class="navbar navb navbar-expand-md navbar-light navbar-fixed-top justify-content-between">
    <div class="container">
        <div class="dropdown">
            <a  data-toggle="dropdown">SHOP BY CATEGORY</a>
            <ul class="dropdown-menu dropdown-menu2" id="catlist" >
               
            </ul>
        </div>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            @if (Route::has('login'))
            @auth
                <a class="nav-link" href="{{ route('home') }}"><strong>HOME</strong></a>
            @else
                <a class="nav-link" href="{{ url('/') }}"><strong>HOME</strong></a>
            @endauth
            @endif
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="search2('coffee')"><strong>COFFEE</strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="search2('cacao')"><strong>CACAO</strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="search2('vco')"><strong>VCO</strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="search2('oil')"><strong>ESSENTIAL OIL</strong></a>
            </li>
            
        </ul>
    </div>
</nav>  
 
    @yield('content')
    <br><br>
    <hr> 
   <!--  <footer   style="background-color: #efefef;color:black;" >
                <div class="container" id="contact">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="  text-center">Contact Us</h2>
                                <p class="text-faded text-center">Call or Text Us! Send us a message! Let creative sparks fly over a cup of hot chocolate with us.</p>
                            <br> 
                        </div> 
                     
                    
                         <div class="col-lg-3"> 
                                 <div class="text-center">             
                                    <i class="fa fa-map-marker fa-3x wow bounceIn"></i>
                                    <p>237 Mission Road, Bakakeng Central, Baguio City, Philippines, 2600</p>
                                </div> 
                        </div>
                        
                        <div class="col-lg-3"> 
                                 <div class="text-center">
                                    <a href="https://www.facebook.com/codesandcreatives/"><i class="fa fa-3x fa-facebook"></i></a> <p>facebook.com</p>
                                </div> 
                        </div>
                        <div class="col-lg-3"> 
                                 <div class="text-center">             
                                    <i class="fa fa-envelope-o fa-3x wow bounceIn"></i>
                                    <p><a href="#contact"><span class="__cf_email__" data-cfemail="d3a4a1baa7b6a6a093b0bcb7b6b1bcaba3bbfdb0bcbe">writeus@codeboxph.com</span></a></p>
                                </div> 
                        </div>
                        <div class="col-lg-3"> 
                                 <div class="text-center">
                                    <i class="fa fa-3x fa-mobile wow bounceIn"></i>
                                    <p>+63 908 860 0839</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
     

                <div>
                
                    <hr>
                    <div class="row text-center" style="background-color: transparent;color:black;">
                       
                       <div class=".col-xs-6 col-md-4">
                            <div class="row"> </div>
                            <div class="text-center"></div>
                        </div>
                        <div class=".col-xs-6 col-md-4">
                             
                                <div class="text-center">             
                                   <p>&copy; 2016 codeboxph. All Rights Reserved.
                                   designed <i class="fa fa-coffee" aria-hidden="true"></i> by the codeboxph team.</p>
                                </div>
                            
                        </div>
                        
                       <div class=".col-xs-6 col-md-4">
                            <div class="row"> </div>
                            <div class="text-center"></div>
                        </div> 
                    </div>
                </div>
    </footer>  -->
<!--Newsletter area start-->
        <div class=" ">
            <div class="container" style="background-color: #efefef;color:gray;">
                <div class="col-lg-12">
                    <div class="text-center">
                        <div class="newsletter-title">
                            <br>
                            <h5>JOIN THE NEWSLETTER</h5>
                            <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt labore</p>
                        </div>
                        <div class="row">
                        <div class="col-lg-3 "  ></div>
                        <div class="col-lg-6 "  >
                            <div class="form-group">
                                <div class="input-group">
                                    <input  class="form-control" placeholder="Enter your e-mail" />
                                    <div class="input-group-btn">
                                        <div class="btn-group">
                                            <button class="btn bg-black" type="button"  ><span id="filtertitle" >Subscribe</span> </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="col-lg-3 "  ></div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!--Newsletter area end-->

<hr>
        
        <!--Footer area end-->
    </div>
</div>
<footer class="footer" style="background-color: #333333;color:white;"  >
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12"  >
                        <br>
                        <div class="text-left"   >
                            <div class=" ">
                                <h5>ABOUT US</h5>
                            </div>
                            <div class="">
                                <div class="single-short-desc">
                                    <div class="desc-icon">
                                        <i class="zmdi zmdi-pin"></i>
                                    </div>
                                    <div class="desc-text">
                                        <p>House 08, Road No 08,<br> Dhaka, Bangladesh</p>
                                    </div>
                                </div>
                                <div class="single-short-desc">
                                    <div class="desc-icon">
                                        <i class="zmdi zmdi-email"></i>
                                    </div>
                                    <div class="desc-text">
                                        <p>info@example.com <br> info@example.com</p>
                                    </div>
                                </div>
                                <div class="single-short-desc">
                                    <div class="desc-icon">
                                        <i class="zmdi zmdi-phone"></i>
                                    </div>
                                    <div class="desc-text">
                                        <p>+660 256 24857 <br> +660 256 24857</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <br>
                        <div class="text-left">
                            <div class="widget-title">
                                <h5>COSTUMER CARE</h5>
                            </div>
                            <div class="widget-description">
                                <div class="custom-menu text-left">
                                    <ul>
                                        <li><a href="#"><i class="zmdi zmdi-chevron-right"></i>Hot Sale</a></li>
                                        <li><a href="#"><i class="zmdi zmdi-chevron-right"></i>best Seller</a></li>
                                        <li><a href="#"><i class="zmdi zmdi-chevron-right"></i> Suppliers</a></li>
                                        <li><a href="#"><i class="zmdi zmdi-chevron-right"></i> Our store</a></li>
                                        <li><a href="#"><i class="zmdi zmdi-chevron-right"></i> Deal of The Day</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <br>
                        <div class="text-left">
                            <div class="widget-title">
                                <h5>ACCOUNTS</h5>
                            </div>
                            <div class="widget-description">
                                <div class="custom-menu">
                                    <ul>
                                        <li><a href="#"><i class="zmdi zmdi-chevron-right"></i>My account</a></li>
                                        <li><a href="#"><i class="zmdi zmdi-chevron-right"></i> Personal Information</a></li>
                                        <li><a href="#"><i class="zmdi zmdi-chevron-right"></i> Discount</a></li>
                                        <li><a href="#"><i class="zmdi zmdi-chevron-right"></i> Order history</a></li>
                                        <li><a href="#"><i class="zmdi zmdi-chevron-right"></i>Payment</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <br>
                        <div class="text-left">
                            <div class=" ">
                                <h5>GUARANTEED</h5>
                            </div>
                            <div class=" searchbar">
                                <img src="<?php echo asset('allnatural3.png')?>" width="200px">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="copyight text-center">
                            <p>
                                Copyright <i class="fa fa-copyright"></i> 2018 
                                <a href="#">Storeup</a>. 
                                All rights reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script><script src="{{ asset('js/app.js') }}"></script>
@yield('scripts')

<script type="text/javascript">
    
var cat="all";
var cat2="all";

 

$(document).ready(function(){
    badge(); 
    barCategories();
    Categories();

      

 $('.carousel').carousel();

    function getEventTarget(e) {
        e = e || window.event;
        return e.target || e.srcElement; 
    }
    var ul = document.getElementById('searchbar');
    ul.onclick = function(event) {
        var target = getEventTarget(event);
        //cat = target.innerHTML
        $("#filtertitle").text(target.innerHTML);
        cat = $(target).closest('li').data('value');
         
    };

 

});

function Categories(){
    $('#catlist').empty();
    $.ajax({         
        url: "{{ url('getCat') }}",        
        type: "GET",
        dataType: "JSON",
            success: function(data) {
                for(i=0; i<data.length; i++){

                       $('#catlist').append('<li class="dropdown-submenu">'+
                        '<a tabindex="-1"   class="dropdown-toggle-right dropdown-item test"  data-value='+data[i].category_id+'>'+ data[i].categoryname+' </a>'+
                        '<ul class="dropdown-menu"  id='+data[i].category_id+'>'+
                            
                        '</ul>'+
                    '</li>');
                };          
            }
    }); 
    addSubCat();
}

function addSubCat(){

    $.ajax({         
        url: "{{ url('getSub') }}",        
        type: "GET",
        dataType: "JSON",
            success: function(data) {
                if (data.length>0){
                    for(i=0; i<data.length; i++){
                        $('#'+data[i].category_id).append('<li><a tabindex="-1" href="#" class="dropdown-item" data-value="'+data[i].subcategory_id+'"   onclick="getProducts('+data[i].subcategory_id+') ">&nbsp;&nbsp;&nbsp;'+data[i].name+'</a></li>');
                    };
                }       
            }
    }); 
}

function search(){
    var value = document.getElementById('searchItem').value;
    $('#product-list').empty();
    $('#carAdd').empty();
    
    $.ajax({         
        url: "{{ url('productsearch') }}/"+value +"/" +cat,        
        type: "GET",
        dataType: "JSON",
        success: function(data) {
            if(data.length >0){
                for(i=0; i<data.length; i++){
                    var value = data[i].price;
                    var num =  value.toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
                    
                    $('#product-list').append('<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3" >'+
                        '<div class="panel"  onclick="showProduct('+data[i].product_id+')" >'+
                            '<img src="<?php echo asset("image_files/'+data[i].featured_img+'")?>" width="100%" height="150"  />'+
                            '<div class="panel-body"><div class="caption">'+
                            '<h4  align="left"><a  data-value="'+data[i].product_id+'" class="product-target"> '+data[i].product_name+'</a></h4>'+
                            '<p class="text-warning"><b>&#x20B1; '+num+'</b></p>'+
                            '<p>'+data[i].description+'...</p></div></div><div class="panel-footer"'+
                            '<p style="color:#d6ac03"><text style="color:black">Rating:</text> <i class="fa fa-star"> </i><i class="fa fa-star"> </i><i class="fa fa-star-o"> </i><i class="fa fa-star-o"> </i><i class="fa fa-star-o"> </i></b></p>'+
                       '</div>'+
                    '</div>');
                };          
            }
            else{
                $('#product-list').append('<div class="col"> <h3><center>No result(s) found.</center></h3></div>');
            }
        }
    }); 
}


        
    function badge(){
        $('#cartbadge').empty();
        $.ajax({         
        url: "{{ url('refbadge')}}",        
        type: "GET",
        dataType: "JSON",
            success: function(data) {

                $('#cartbadge').append('@if (Route::has('login')) @auth<form action="{!! URL::route('showcart') !!}" method="GET">'+
                    '<input type="image" src="<?php echo asset("orange-cart.png")?>" alt="Submit" width="20px" height="20px">'+
                    '<span class="badge badge-success">'+data+'</span>  @else  <form action="{!! URL::route('login') !!}" method="GET">'+
                    '<input type="image" src="<?php echo asset("orange-cart.png")?>" alt="Submit" width="20px" height="20px"> @endauth @endif '+
                '</form>');
            }
        }); 
        
    }

 

    function barCategories(){
        $('#searchbar').empty();

        $.ajax({         
            url: "{{ url('getCat2') }}",        
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                $('#searchbar').append('<li id = "all" data-value="all" class="dropdown-item" >All</li>');
                for(i=0; i<data.length; i++){

                    $('#searchbar').append('<li data-value='+data[i].category_id+' class="dropdown-item" >'+
                        data[i].categoryname+'  '+
                    '</li>');
                };          
            }
        }); 
    }
 
    </script>
</body>
</html>
