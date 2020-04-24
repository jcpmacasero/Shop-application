@extends('layouts.admin_app')


@section('title')
Admin | Product
@endsection

@section('styles')
<style type="text/css">
    .table-controls {
        margin-top:2%;
    }
    li.tick:before {
        content: "\2713";
        color: darkgreen;
    }
    li.cross:before {
      content: "\2717";
      color: crimson;
    }      
</style>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-2">
            <div class="list-group">
                <a href="{{ route('admin.category') }}" class="list-group-item">Categories</a>
                <a href="{{ route('admin.subcategory') }}" class="list-group-item">Sub-Categories</a>
                <a href="{{ route('admin.product') }}" class="list-group-item">Products</a>
                <a href="#orders" data-toggle="collapse" class="list-group-item">Orders <span class="caret"></span></a>
                    <div class="collapse" id="orders">
                        <a href="#" class="list-group-item"> Pending Orders </a>                        
                        <a href="{{ route('admin.approve') }}" class="list-group-item"> Approved Orders </a>
                    </div>
                <a href="#reports" data-toggle="collapse" class="list-group-item">Reports <span class="caret"></span></a>
                    <div class="collapse" id="reports">
                        <a href="{{ route('admin.salesrep') }}" class="list-group-item"> Sales </a>                        
                    </div>
                <a href="#accounts" data-toggle="collapse" class="list-group-item">Accounts <span class="caret"></span></a>
                    <div class="collapse" id="accounts">
                        <a href="{{ route('admin.reg') }}" class="list-group-item"> Admin Register </a>                        
                        <a href="{{ route('admin.controlusers') }}" class="list-group-item"> User Accounts </a>
                    </div>
            </div>
        </div>

        <div class="col-md-8 col-sm-offset-1">
            <div class="row">
                <h3>Pending Orders</h3>
            </div>
            @if(session()->has('message'))
                <div class="alert alert-success">
                    <ul style="list-style: none;">
                        <li class="tick"> {{ session()->get('message') }}</li>
                    </ul>
                </div>
            @endif
            @if(session()->has('Errormessage'))
                <div class="alert alert-danger">
                    <ul style="list-style: none;">
                        <li class="cross"> {{ session()->get('Errormessage') }}</li>
                    </ul>
                </div>
            @endif
            <div class="row">
                <h5>Operations</h5>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <button class="btn btn-success btn-sm btn-marg btn-Approve"><i class="fa fa-check" aria-hidden="true"></i> Approve</button>                    
                </div>                
            </div>
                <div class="table-controls">
                    <form action="{{ route('admin.updatestat') }}" method="get" id="updateStatus">
                        {{ csrf_field() }}
                        
                    <table class="table table-hover table-responsive" id="tableOrders">                                    
                        <thead class="thead-inverse">                        
                            <tr>
                              <th width="4%"><input type="checkbox" id="selectAll" /></th>
                              <th width="7%">USER ID</th>
                              <th width="12%">AMOUNT</th>
                              <th width="15%">SHIP DATE</th>
                              <th width="15%">RECEIVER</th>
                              <th width="20%">ADDRESS</th>
                              <th width="14%">MOBILE #</th>
                            </tr>
                        </thead>                        
                        <tbody>
                             <?php $i=0 ?>                             
                             @foreach($shippings as $data)                             
                            <tr>

                                <td><input type="checkbox" class="parent" data-target=".{{ $data->shipping_id }}" name="shippings[][]" value="{{ $data->shipping_id }}" />&nbsp;</td>                                
                                <td><a href="#" data-value="{{ $data->user_id }}" class="linkedit"> {{ $data->user_id }} </a></td>
                                <td><a href="#" data-value="{{ $data->total_amount }}" class="linkedit"> {{ $data->total_amount }} </a></td>
                                <td><a href="#" data-value="{{ $data->shipping_date }}" class="linkedit"> {{ $data->shipping_date }} </a></td>
                                <td><a href="#" data-value="{{ $data->shipping_receiver }}" class="linkedit"> {{ $data->shipping_receiver }} </a></td>
                                <td><a href="#" data-value="{{ $data->shipping_address }}" class="linkedit"> {{ $data->shipping_address }} </a></td>   
                                <td><a href="#" value="{{ $data->mobile_number }}" data-value="{{ $data->mobile_number }}" class="linkedit"> {{ $data->mobile_number }} </a></td>                                
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><p style="font-weight:bold;">Product Name</p></td>
                                <td><p style="font-weight:bold;">Price</p></td>
                                <td><p style="font-weight:bold;">Ordered Qty</p></td>
                                <td><p style="color:red;font-weight: bold;">Available Qty</p></td>
                            </tr>                              
                              @foreach($data->products as $product)
                              
                                    <tr>
                                      <td></td>
                                      <td class="{{ $data->shipping_id }}"><input type="checkbox" class="child" name="shippings[{{$i}}][products][]" value="{{ $product->product_id }}" />&nbsp;</td>                
                                      <td>{{ $product->product_name }}</td>
                                      <td>{{ $product->price }}</td>                              
                                      <td>{{ $product->quantity }}</td>
                                      <td><p style="color:red;"> {{ $product->available_qty }}</p></td>                                      
                                    </tr>                              
                              @endforeach                        
                              <?php $i++; ?>                            
                            @endforeach
                        </tbody>
                    </table>
                        <div class="text-center">
                                {!! $shippings->links() !!}
                        </div>
                    </form>
                </div>            
        </div>

    </div>

<!-- modals -->

@endsection

@section('scripts')
<script type="text/javascript">
var url = window.location.href;

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).on('change', 'input[type="checkbox"]', function(e) {
    var checked = $(this).prop("checked")
    var target = $(this).data('target')
    console.log(checked)
    if(checked){

        $(target).find('input').prop('checked', true)
    } else {
        $(target).find('input').prop('checked', false)
    }
});

$('#selectAll').click(function (e) {
    $('#tableOrders').find('td input[name="shippings[][]"]').prop('checked', this.checked);
});

$(".btn-Approve").click( function() {
    $('#updateStatus').submit();
});

</script>
@endsection
