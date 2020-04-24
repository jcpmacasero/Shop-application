<table id="mytable" class="table table-responsive">
        <thead class="thead">
        <tr>
            <th class="text-center">Product</th>
            <th class="text-center">Quantity</th>
            <th class="text-center">Price</th>
            <th class="text-center">Sub-Total</th>
            <th class="text-center"> Action </th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
            <tr>
                <td class="col-4">
                    <div class="pull-left">  <img class="media-object" src="<?php echo asset("image_files/{$product['item']->featured_img} ")?> " style="width: 50px; height: 50px;">  
                    </div>
                    <h4>&nbsp; {{ $product['item']->product_name }}</h4>
                          
                </td>

                <td class="col-2 text-center">
                    <input type="number" class="form-control productqty" id="{{ $product['item']->product_id }}" max="{{ $product['maxqty'] }}" min="1" value="{{ $product['qty'] }}">
                </td>
                
                <td class="col-2 text-center"><strong>&#x20B1;{{ number_format($product['item']->price, 2) }}</strong></td>
                
                <td class="col-2 text-center"><strong>&#x20B1;{{ number_format($product['item']->price * $product['qty'],2) }}</strong></td>
                
                <td class="col-2 text-center">
                    <a href="{{ route('removeitem',['id' => $product['item']->product_id]) }}" class="btn btn-danger">
                        <span class="fa fa-trash"> </span>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
           
            <td colspan="3" align="right"><h3 style="font-weight: bolder;color:#000;">Total:</h3></td>
            <td colspan="2" align="left"><h3><p style="font-weight: bolder;color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#x20B1;{{  number_format($totalPrice,2) }}</p></h3></td>
        </tr>
        <tr>
            <td>   </td>
            <td>   </td>
            <td>   </td>
            <td>
            <a href="{{ route('home') }}" class="btn" style="background: teal;color:white"><i class="fa fa-caret-left"></i> 
                            <span class="fa fa-shopping-cart"></span> Continue Shopping
                </a></td>
            <td>
            <a href="{{ route('checkout') }}" class="btn" style="background: #f05b05;color:white"> <i class="fa fa-credit-card"></i> 
                Proceed to Payment <span class="fa fa-caret-right"></span>
            </a></td>
        </tr>
    </tfoot>
</table>