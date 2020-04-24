<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @yield('styles')
</head>
<body>
    <style type="text/css">
.navbrand img {
        position: relative;
        left: 40px;
}
.badge {
    position: absolute;
    top: 0;
    right: 0;
    display:inline-block;
    min-width:10px;
    padding:3px 7px;
    font-size:15px;
    font-weight:700;
    line-height:1;
    color:#fff;
    text-align:center;
    white-space:nowrap;
    vertical-align:baseline;
    background-color:#777;
    border-radius:10px;
}

.links > a {
    color: black;
    padding: 0 25px;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
}

.top-right {
    position: absolute;
    right: 10px;
    top: 18px;
}
 
.input-group-addon.primary {
    color: rgb(255, 255, 255);
    background-color: rgb(50, 118, 177);
    border-color: rgb(40, 94, 142);
}
.input-group-addon.success {
    color: rgb(255, 255, 255);
    background-color: rgb(92, 184, 92);
    border-color: rgb(76, 174, 76);
}
.input-group-addon.info {
    color: rgb(255, 255, 255);
    background-color: rgb(57, 179, 215);
    border-color: rgb(38, 154, 188);
}
.input-group-addon.warning {
    color: rgb(255, 255, 255);
    background-color: rgb(240, 173, 78);
    border-color: rgb(238, 162, 54);
}
.input-group-addon.danger {
    color: rgb(255, 255, 255);
    background-color: rgb(217, 83, 79);
    border-color: rgb(212, 63, 58);
}

body{font-size: 12px}

.panel-heading {
    font-size: 18px
}

.wizard {
    margin: 20px auto;
    background: #fff;
}

    .wizard .nav-tabs {
        position: relative;
        margin: 40px auto;
        margin-bottom: 0;
        border-bottom-color: #e0e0e0;
    }

    .wizard > div.wizard-inner {
        position: relative;
    }

.connecting-line {
    height: 2px;
    background: #e0e0e0;
    position: absolute;
    width: 80%;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: 50%;
    z-index: 1;
}

.wizard .nav-tabs > li.active > a, .wizard .nav-tabs > li.active > a:hover, .wizard .nav-tabs > li.active > a:focus {
    color: #555555;
    cursor: default;
    border: 0;
    border-bottom-color: transparent;
}

span.round-tab {
    width: 70px;
    height: 70px;
    line-height: 70px;
    display: inline-block;
    border-radius: 100px;
    background: #fff;
    border: 2px solid #e0e0e0;
    z-index: 2;
    position: absolute;
    left: 0;
    text-align: center;
    font-size: 25px;
}
span.round-tab i{
    color:#555555;
}
.wizard li.active span.round-tab {
    background: #fff;
    border: 2px solid #5bc0de;
    
}
.wizard li.active span.round-tab i{
    color: #5bc0de;
}

span.round-tab:hover {
    color: #333;
    border: 2px solid #333;
}

.wizard .nav-tabs > li {
    width: 25%;
}

.wizard li:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 0;
    margin: 0 auto;
    bottom: 0px;
    border: 5px solid transparent;
    border-bottom-color: #5bc0de;
    transition: 0.1s ease-in-out;
}

.wizard li.active:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 1;
    margin: 0 auto;
    bottom: 0px;
    border: 10px solid transparent;
    border-bottom-color: #5bc0de;
}

.wizard .nav-tabs > li a {
    width: 70px;
    height: 70px;
    margin: 20px auto;
    border-radius: 100%;
    padding: 0;
}

    .wizard .nav-tabs > li a:hover {
        background: transparent;
    }

.wizard .tab-pane {
    position: relative;
    padding-top: 50px;
}

.wizard h3 {
    margin-top: 0;
}

@media( max-width : 585px ) {

    .wizard {
        width: 90%;
        height: auto !important;
    }

    span.round-tab {
        font-size: 16px;
        width: 50px;
        height: 50px;
        line-height: 50px;
    }

    .wizard .nav-tabs > li a {
        width: 50px;
        height: 50px;
        line-height: 50px;
    }

    .wizard li.active:after {
        content: " ";
        position: absolute;
        left: 35%;
    }
}

@media (max-width: 400px) {
    .navbrand {
        float: left;
    }
    .navbrand img {
        position: relative;
        left: 40px;
    }
    .links > a {
        padding: 0 5px;
        font-size: 9px;
        font-weight: 590;        
    }
    .top-right {
        position: absolute;
        right: 3px;
        top: 28px;
    }
}
</style>
    <div id="app">
        <nav class="navbar navbar-default navbar-fixed-top" style="background-color: #f05b05;height: 80px">            

                <div class="navbrand">
                <a href="{{ route('home') }}"><img  type="image" src="<?php echo asset("shopicon.png")?>" width="40" height="40"><p style="color: white;font-size: 19px;">Storeupgoddies</p></a>
                </div>
                
                        @if (Auth::guest())
                            <div class="top-right links">
                                <a href="{{ route('login') }}">Login</a>
                                <a href="{{ route('register') }}">Register</a>
                            </div>                           
                        @else
                            <br> 
                    <div class="row"> 
                        <div class="col-1"></div>    
                        <div class="col-lg-9">
                           

                            <div class="form-group">
                                <div class="input-group">
                                    <input type="search" name="searchItem" id="searchItem" class="form-control" />
                                    <div class="input-group-btn">
                                        <div class="btn-group">
                                            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><span id="filtertitle" >Choose</span> </button>
                                            <ul class="dropdown-menu dropdown-menu-right " id="searchbar" name="searchbar">
                                              
                                            </ul>
                                        </div>
                                        <button class="btn btn-default" style="background-color: #f05b05;color: white" onclick="search()"> <span class="fa fa-search"></span> </button>
                                    </div>
                                </div>
                            </div>
                            
        

                            <!-- <div class = "form-group">
                                <div class="input-group input-group">
                                    <input type="text" id ="searchItem" name="searchItem" class="form-control" placeholder="Search item">
                                    
                                    <span class="input-group-addon"  style="background:darkorange;color:white" onclick="search()"><span class="fa fa-search"></span></span>
            
                                </div>
                            </div> -->
                        </div>

                        <div class="col-1" id="cartbadge"> 
                            <!-- <form action="{!! URL::route('showcart') !!}" method="GET">
                                <div class="input-group">
                                    <input type="image" src="<?php echo asset("shopcart.png")?>" alt="Submit" width="48" height="48">
                                    <span class="badge"></span>
                                </div>
                            </form> -->

                            <!-- <a href="{{ route('showcart') }}" type="image" src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png" class="btn btn-outline-warning"   data-toggle="tooltip" data-placement="bottom" title="Proceed to Checkout">
                                <i > </i> 
                                <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
                            </a>
 -->                        </div>
                        <div class="col-1">
                            <a  class="dropdown-toggle-right" data-toggle="dropdown" ><img  type="image" src="<?php echo asset("shopuser.png")?>" width="30" height="30"> </a>
                             <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('profile') }}">
                                            View Profile
                                        </a>                                    
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                        </div> 
                    </div>                           
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <br><br><br><br>
        @yield('content')
    </div>

    <!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js') }}"></script>
@yield('scripts')
<script type="text/javascript">
    
    var cat;

    $(document).ready(function(){
        badge(); 
        barCategories();

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

        // $('li ').click(function(e) {
        //     e.preventDefault();
        //     var value = $(this).closest('li').data('value'); // = 9
        //     alert(value);
        //     // do something with the value here...
        // });

    });

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
                    
                    $('#product-list').append('<div class="col-3"  >'+
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
                $('#product-list').append('<h3><center>No result(s) found.</center></h3>');
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

                $('#cartbadge').append('<form action="{!! URL::route('showcart') !!}" method="GET">'+
                    '<center><input type="image" src="<?php echo asset("shopcart.png")?>" alt="Submit" width="30" height="30">'+
                    '<span class="badge">'+data+'</span></center>'+
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
                $('#searchbar').append('<li id = "all" data-value="all" class="list-group-item" >All</li>');
                for(i=0; i<data.length; i++){

                    $('#searchbar').append('<li data-value='+data[i].category_id+' class="list-group-item" >'+
                        data[i].categoryname+'  '+
                    '</li>');
                };          
            }
        }); 
    }
 
    </script>
</body>
</html>
