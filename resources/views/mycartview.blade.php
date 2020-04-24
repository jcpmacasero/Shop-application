@extends('layouts.user2')

@section('title')
    Store | My Cart
@endsection

@section('content')
@if(Session::has('cart'))
    <div class="container">
        <br>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xs-12">
                @include('tables')
            </div>
        </div>
    </div>
@else
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xs-12" align="center">
            <h2>No items in cart</h2>
            <a href="{{ route('home') }}" class="btn btn-primary"><i class="fa fa-caret-left"></i> <span class="fa fa-shopping-cart"></span> Continue Shopping
            </a>
        </div>
    </div>
@endif

@endsection

@section('scripts')
<script type = "text/javascript">
var url = window.location.href;

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$(document).on('keyup mouseup', ".productqty", function () {
    var product_id = $(this).attr('id');
    var value = $(this).val();
    if(value >= 1) {
        updateQty(product_id,value);
        RefreshTable();
    }    
});


function updateQty(id,newqty) {
    $.ajax({         
         url: "{{ url('updateqty') }}/" +id+"/"+newqty,        
         type: "GET",
         dataType: "JSON",
            success: function(data) {
            }
    }); 
}

function RefreshTable() {
    $("#mytable").fadeOut();
    $("#mytable").empty();
    $("#mytable").load(url+" #mytable", function() {
      $("#mytable").fadeIn();
    });
}

</script>
@endsection
