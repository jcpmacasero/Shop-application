@extends('layouts.app')

@section('title')
    Store | Products
@endsection
@section('content')

<div class="row">
    <div class="col-md-2">
        <div class="col-lg-12">
             
            <div class="list-group">
            <h3>Categories</h3>
            <div id = "catlist">
                
            </div>
                
            </div>
        </div>
    </div>      
   
    <div class="col-md-7">
    	<div class="container">
            <div class="row">    
        		<div id="product-list">
                     @foreach($products as $product)                        
                        <div class="col-md-3 col-sm-3 hero-feature">
                            <div class="thumbnail">
                                <img src="{{ asset('image_files/' . $product->featured_img) }}" />
                                <div class="caption">
                                    <h4><a href="#" data-value="{{ $product->product_id }}" class="product-target">
                                        {{ $product->product_name }}
                                    </a></h4>
                                <p>{{ $product->description }}</p>
                                <p><a href="#" class="btn btn-info">P {{ $product->price }}</a><a href="#" data-value="{{ $product->product_id }}" class="btn btn-success btn-sm pull-right btn-target"><i class="fa fa-bars" aria-hidden="true"></i> Show details</a></p>
                                </div>
                            </div>
                        </div>
                     @endforeach
                </div>

            </div>
		</div>
    </div>
</div>  

<!-- modals -->


@endsection

@section('scripts')
<script type = "text/javascript">

$(document).ready(function(){
    Categories();  
});

function Categories(){
    $('#catlist').empty();
    $.ajax({         
        url: "{{ url('getCat') }}",        
        type: "GET",
        dataType: "JSON",
            success: function(data) {
                for(i=0; i<data.length; i++){

                    $('#catlist').append('<a href=#'+data[i].category_id+' data-toggle="collapse" data-value='+data[i].category_id+' class="list-group-item">'+
                        data[i].categoryname+'<span class="caret"></span>'+
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
                    $('#'+data[i].category_id).append('<a href="#" data-value="'+data[i].subcategory_id+'" class="list-group-item target" onclick="getProducts('+data[i].subcategory_id+') ">'+data[i].name+'</a>');
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
    window.location = '{{ url('product') }}/' +category_id;
}

$(".target").click(function() {
var value = $(this).data("value");
getProducts(value);
});

$('#product-list').on('click','.caption .product-target',function() {
  var value = $(this).data("value");
  showProduct(value);
});

$('#product-list').on('click','.caption .btn-target',function() {
  var value = $(this).data("value");
  showProduct(value);
});

function showProduct(product_id) {
    window.location = '{{ url('product-info') }}/' +product_id;   
}

</script>
@endsection
