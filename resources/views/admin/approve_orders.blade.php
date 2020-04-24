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
                        <a href="{{ route('admin.pending') }}" class="list-group-item"> Pending Orders </a>                        
                        <a href="#" class="list-group-item"> Approved Orders </a>
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
                <h3>Approved Orders</h3>
            </div>           
           
                <div class="table-controls">
                    <form action="" method="get" id="updateStatus">
                        {{ csrf_field() }}
                        
                    <table class="table table-hover table-responsive">                                    
                        <thead class="thead-inverse">                        
                            <tr>                              
                              <th width="9%">USER ID</th>
                              <th width="12%">AMOUNT</th>
                              <th width="15%">SHIP DATE</th>
                              <th width="15%">RECEIVER</th>
                              <th width="20%">ADDRESS</th>
                              <th width="14%">MOBILE #</th>
                            </tr>
                        </thead>                        
                        <tbody>
                             @foreach($shippings as $data)
                            <tr>
                                <td><a href="#" data-value="{{ $data->user_id }}" class="linkedit"> {{ $data->user_id }} </a></td>
                                <td><a href="#" data-value="{{ $data->total_amount }}" class="linkedit"> {{ $data->total_amount }} </a></td>
                                <td><a href="#" data-value="{{ $data->shipping_date }}" class="linkedit"> {{ $data->shipping_date }} </a></td>
                                <td><a href="#" data-value="{{ $data->shipping_receiver }}" class="linkedit"> {{ $data->shipping_receiver }} </a></td>
                                <td><a href="#" data-value="{{ $data->shipping_address }}" class="linkedit"> {{ $data->shipping_address }} </a></td>   
                                <td><a href="#" data-value="{{ $data->mobile_number }}" class="linkedit"> {{ $data->mobile_number }} </a></td>                                
                            </tr>
                            <tr>
                                <td></td>
                                <td><p style="font-weight:bold;">Product Name</p></td>
                                <td><p style="font-weight:bold;">Price</p></td>
                                <td><p style="font-weight:bold;">Qty</p></td>
                            </tr>                              
                              @foreach($data->products as $product)                              
                                    <tr>
                                      <td></td>                
                                      <td>{{ $product->product_name }}</td>
                                      <td>{{ $product->price }}</td>                              
                                      <td>{{ $product->quantity }}</td>                                      
                                    </tr>                              
                              @endforeach                            
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

</script>
@endsection
