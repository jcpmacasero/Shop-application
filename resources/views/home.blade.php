@extends('layouts.user2')

@section('title')
    Store | Home
@endsection
@section('content')
  
<div class="container" > 
    <div class="row">
        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2 col-xl-2" >
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" >
                     
                    <div class="list-group">
                    <h4 class="para">Categories</h4>
                    <div id = "catlist" style="font-size: 13px"  >
                        
                    </div>
                        
                    </div>
                </div>
            </div>
        </div>
            
        <div class="col-xs-6 col-sm-9 col-md-9 col-lg-10 col-xl-10" >
            <br>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 "  id="carAdd">
                   
                   <div id="myCarousel" class="carousel slide" data-ride="carousel">
                       
                    </div>
                </div>
            </div>
            <br>
           <div id="product-list" class="row" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 " >
                                            
                         
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script type = "text/javascript">

$(document).ready(function(){
    Categories();   
    bannerAd();
});

 

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})


function bannerAd(){
    $('#myCarousel').empty();
    $.ajax({         
        url: "{{ url('getAdd') }}",        
        type: "GET",
        dataType: "JSON",
            success: function(data) {
                $('#myCarousel').append('<div class="carousel-inner" id ="innerc">');
                for(i=0; i<data.length; i++){
                    if (i==0){
                        $('#innerc').append('<div class="carousel-item active">'+
                        '<img src="<?php echo asset("image_files/'+data[i].featured_img+'")?>"    style="width:100%; height:300px;display: block;margin: 0 auto;" onclick="showProduct('+data[i].product_id+')" >'+
                        '<div class="carousel-caption d-none d-md-block"> <h3>'+data[i].product_name+'</h3> <p class="text-truncate">'+data[i].description+'</p>'+
                        '</div>');
                        //alert('1');
                    }
                    else{   
                       // alert('2');
                      $('#innerc').append('<div class="carousel-item">'+
                        '<img src="<?php echo asset("image_files/'+data[i].featured_img+'")?>"  style="width:100%; height:300px;display: block;margin: 0 auto;"  onclick="showProduct('+data[i].product_id+')">'+
                        '<div class="carousel-caption d-none d-md-block"> <h3>'+data[i].product_name+'</h3> <p class="text-truncate">'+data[i].description+'</p>'+
                      '</div>');
                    }
                }; 

                $('#myCarousel').append('</div><a class="carousel-control-prev" href="#myCarousel" data-slide="prev">'+
                  '<span class="fa fa-chevron-left"></span>'+
                  '<span class="sr-only">Previous</span>'+
                '</a>'+
                '<a class="carousel-control-next" href="#myCarousel" data-slide="next">'+
                  '<span class="fa fa-chevron-right"></span>'+
                  '<span class="sr-only">Next</span>'+
                '</a>');
                         
            }
    }); 
}



function Categories(){
    $('#catlist').empty();
    $.ajax({         
        url: "{{ url('getCat') }}",        
        type: "GET",
        dataType: "JSON",
            success: function(data) {
                for(i=0; i<data.length; i++){

                    $('#catlist').append('<a href=#'+data[i].category_id+' data-toggle="collapse" data-value='+data[i].category_id+'  class="list-group-item list-group-item-action">'+
                        data[i].categoryname+' <i class="fa fa-caret-down pull-right"></i>'+
                    '</a>'+
                    '<div class="collapse" id='+data[i].category_id+'>'+
                    '</div>');
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
                for(i=0; i<data.length; i++){
                    $('#'+data[i].category_id).append('<a  data-value="'+data[i].subcategory_id+'" class="list-group-item target" onclick="getProducts('+data[i].subcategory_id+') ">&nbsp;&nbsp;&nbsp;'+data[i].name+'</a>');
                };          
            }
    }); 
}

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function getProducts(category_id) {
    //window.location = '{{ url('product') }}/' +category_id;
    $('#carAdd').empty();
    $('#product-list').empty();
    $.ajax({         
        url: "{{ url('product') }}/"+category_id,        
        type: "GET",
        dataType: "JSON",
            success: function(data) {
                for(i=0; i<data.length; i++){
                    var value = data[i].price;
                    var num =  value.toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
                    
                    $('#product-list').append('<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3"  >'+
                        '<div class="card"  onclick="showProduct('+data[i].product_id+')" >'+
                            '<img src="<?php echo asset("image_files/'+data[i].featured_img+'")?>" width="100%" height="100"  />'+
                            '<div class="card-body"><div class="caption">'+
                            '<p class="text-center"><strong><a data-value="'+data[i].product_id+'" class="product-target "> '+data[i].product_name+'</a></strong></p>'+
                            '<p class="text-warning"><small>&#x20B1; '+num+'</small></p>'+
                            '<p class="text-truncate"><small>'+data[i].description+'</small></p></div>'+
                            '<p style="color:#d6ac03"><text style="color:black">Rating:</text> <i class="fa fa-star"> </i><i class="fa fa-star"> </i><i class="fa fa-star-o"> </i><i class="fa fa-star-o"> </i><i class="fa fa-star-o"> </i></b></p>'+
                       
                    '</div></div><br>');
                };          
            }
    }); 
}
 
function showProduct(product_id) {
    //window.location = '{{ url('product-info') }}/' +product_id;   
    $('#carAdd').empty();
    $('#product-list').empty();
    $.ajax({         
        url: "{{ url('product-info') }}/"+product_id,        
        type: "GET",
        dataType: "JSON",
            success: function(data) {

                var value =data['product_info'][0].price;
                var num =  value.toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
                
                $('#product-list').append('<div class="col-xs-12 col-sm-12 col-md-12 col-xl-12 col-lg-12 ">'+
                '<div class="card" >'+
                  '<div class="card-title">'+
                    '</div>'+
                  '<div class="card-body row">'+
                    '<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 " id ="thbimg"></div>'+
                    '<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 ">'+
                      '<div class="">'+
                        '<img src="<?php echo asset("image_files/'+data['product_info'][0].featured_img+'")?>"   class="rounded mx-auto d-block img-fluid" style="height:300px"  />'+
                      '</div>'+
                       
                    '</div>'+
                    '<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"  align="text-left">'+
                      '<h3 class="prod_title">'+data['product_info'][0].product_name+'</h3>'+
                      '<p class="lead">'+data['product_info'][0].description+'.</p>'+
                      '<br />'+
                      '<div class="">'+
                        '<div class="" >'+
                          '<h1 class="text-danger" style="font-size:20px;font-weight">&#x20B1;'+num+'</h1>'+
                           '<br>'+
                        '</div>'+
                      '</div>'+
                      '<div class="row"><div class="col"><div class="form-group">'+
                        
                        '<label>Quantity</label>'+
                                
                                '<input type="number" id="qty" name="qty" class="form-control" min=1  name="qty" max="'+data['product_info'][0].quantity+'"   >'+
                               
                        ' </div> </div></div><div class="row"><div class="col"><div class="form-group"> '+
                        '<button class="btn btn-default form-control" onclick="getProducts('+data['product_info'][0].subcategory_id+')" ><i class="fa fa-caret-left"></i> Back</button></div></div><div class="col"><div class="form-group">'+
                        '<button id="btnaddCart" onclick="addtocart('+data['product_info'][0].product_id+', '+data['product_info'][0].quantity+', '+data['product_info'][0].subcategory_id+');" class="form-control btn btn-success"><i class="fa fa-plus"> ADD</i></button>'+
                      '</div></div></div>'+
                    '</div>'+
                '</div>'+
              '</div>'+
            '</div>');

            $('#thbimg').empty();
            for (var i =0; i < data['product_images'].length ; i++) {
                //alert();
                $('#thbimg').append('<img   src="<?php echo asset("image_files/'+data['product_images'][i].product_image+'")?>" alt="..." width="50%" class="rounded  mx-auto d-block " ><br><br>'); 
            };     
            }
    });
}


function addtocart(id, max, catid){


    var value = document.getElementById('qty').value;
     
    $.ajax({         
        url: "{{ url('add-to-cart') }}/"+id+"/"+max+"/"+value,        
        type: "GET",
        dataType: "JSON",
            success: function(data) {
                badge();
               // alert(catid);
                getProducts(catid);
            }
    }); 

 }


$('#btnaddCart').click(function(){
    $('#frmaddcart').submit();
});


function badge(){
    $('#cartbadge').empty();
   // $('#cartbadge').append('lol');

   $.ajax({         
    url: "{{ url('refbadge')}}",        
    type: "GET",
    dataType: "JSON",
        success: function(data) {

            $('#cartbadge').append('<form action="{!! URL::route('showcart') !!}" method="GET">'+
                '<input type="image" src="<?php echo asset("shopcart.png")?>" alt="Submit" width="44" height="44">'+
                '<span  class="badge badge-info">'+data+'</span>'+
            '</form>');

             // $('#cartbadge').append('<a href="{{ route('showcart') }}" type="button" class="btn btn-warning" >'+
            //     '<i class="fa fa-shopping-cart" aria-hidden="true"></i> '+
            //     '<span class="badge">'+data+'</span>'+
            // '</a>');
        }
    }); 
    
}


</script>
@endsection
