@extends('layouts.app')

@section('title')
    Store | View product
@endsection

@section('styles')
<style type="text/css">
    #product-info {
        margin-top:2%;
        margin-left: 3%;
        background-color: #c0c0c0;
    }
    .image-container {
        width: 65px;
        height: 100px;
        background-color: #fff;
        border: 1px solid #000;
    }
    .image-container img {
        width: 100%;
        height: auto;
    }
    .specs {
        margin-left: 10%;
    }
    .image-preview {
        border: 1px solid #000;
        border-radius: 10px;
        width: 300px;
        height: 350px;
        background: #fff;
        margin-top: 5%;
        margin-bottom: 5%;
    }
    .quantity {
        position: relative;

    }
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
          -webkit-appearance: none;
          margin: 0;
    }

    input[type=number]
    {
        -moz-appearance: textfield;
    }

    .quantity input {
          width: 70px;
          height: 42px;
          line-height: 1.65;
          float: left;
          display: block;
          padding: 0;
          margin: 0;
          padding-left: 20px;
          border: 1px solid #eee;

    }

    .quantity input:focus {
          outline: 0;
    }

    .quantity-nav {
          float: left;
          position: relative;
          height: 42px;
    }

    .quantity-button {
          position: relative;
          cursor: pointer;
          border-left: 1px solid #eee;
          width: 20px;
          text-align: center;
          color: #333;
          font-size: 13px;
          font-family: "Trebuchet MS", Helvetica, sans-serif !important;
          line-height: 1.7;
          -webkit-transform: translateX(-100%);
          transform: translateX(-100%);
          -webkit-user-select: none;
          -moz-user-select: none;
          -ms-user-select: none;
          -o-user-select: none;
          user-select: none;
    }

    .quantity-button.quantity-up {
          position: absolute;
          height: 50%;
          top: 0;
          border-bottom: 1px solid #eee;
    }

    .quantity-button.quantity-down {
          position: absolute;
          bottom: -1px;
          height: 50%;
    }
    .btn-cart {
        margin-left: 9px;
    }
</style>
@endsection

@section('content')

<div class="row">
    <div class="col-md-2">
      <p class="lead">Store-up Goodies!</p>
      <div class="list-group">
      @foreach($categories as $category => $data)      
          <a href="#{{ $data->category_id}}" data-toggle="collapse" data-value="{{ $data->category_id }}" class="list-group-item">{{ $data->categoryname }} <span class="caret"></span></a>
          @if($data->subcategory_id != NULL)
          <div class="collapse" id="{{ $data->category_id}}">
              <a href="#" data-value="{{ $data->subcategory_id }}" class="list-group-item target"> {{ $data->name }} </a>
          </div>
          @endif
      @endforeach
      </div>
    </div>
    <div class="col-md-7">
    	<div class="container">
            <div id="product-info">                       
                <h3>{{ $product_info[0]->product_name }}</h3>                                                                
                <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                @foreach($product_images as $product_image)                            
                                <div class="col-md-1">
                                    <div class="image-container">
                                        <img src="{{ asset('image_files/' . $product_image->product_image) }}" />                     
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-md-offset-1">
                                    <div class="image-preview">

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="specs">
                                        < h4>Details</h4>
                                        <p>{{ $product_info[0]->description }}</p>
                                        <label>Quantity</label>                                        
                                        <div class="quantity">
                                            <form action="{{ route('prodcart',['id' => $product_info[0]->product_id, 'maxqty' => $product_info[0]->quantity ]) }}" method="get" id="frmaddcart">
                                              <input type="number" id="qty" name="qty" min="<?php echo ($product_info[0]->quantity - $sessionQty) == 0 ? '0' : '1'; ?>" max="{{ $product_info[0]->quantity - $sessionQty }}" value="<?php echo ($product_info[0]->quantity - $sessionQty) == 0 ? '0' : '1'; ?>" step="1" readonly>
                                              {{ csrf_field() }}
                                            </form>
                                        </div>
                                        <button id="btnaddCart" class="btn btn-success btn-cart"> ADD TO CART </button>
                                    </div>                                    
                                </div>
                            </div>
                        </div>

                </div>
            </div>
		</div>
    </div>
</div>  

@endsection

@section('scripts')
<script type = "text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.quantity input');
    jQuery('.quantity').each(function() {
      var spinner = jQuery(this),
        input = spinner.find('input[type="number"]'),
        btnUp = spinner.find('.quantity-up'),
        btnDown = spinner.find('.quantity-down'),
        min = input.attr('min'),
        max = input.attr('max');

      btnUp.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue >= max) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue + 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });

      btnDown.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue <= min) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue - 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });

});

function getProducts(category_id) {
    window.location = '{{ url('product') }}/' +category_id;
}

$(".target").click(function() {
var value = $(this).data("value");
getProducts(value);
});

$('#btnaddCart').click(function(){
    $('#frmaddcart').submit();
});



</script>
@endsection
