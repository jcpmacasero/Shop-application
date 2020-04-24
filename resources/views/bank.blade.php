@extends('layouts.user2')

@section('title')
    Store | My Cart
@endsection

@section('content')
 
<div class="container">
	<br>
    <div class="row">
    	<div class = "col-xs-12 col-xs-12 col-md-12 col-lg-12 col-xl-12 ">
			<a href="{{ route('home') }}"  class="btn btn-primary"  data-toggle="tooltip" data-placement="top" title="Return to Home">
		        <span><i class="fa fa-caret-left" > </i> <i class="fa fa-shopping-cart" aria-hidden="true"> Continue Shopping</i> </span>
            </a>&nbsp;&nbsp;&nbsp;

            <a href="{{ route('showcart') }}"   class="btn btn-warning"  data-toggle="tooltip" data-placement="top" title="Return to Cart">
                <span><i class="fa fa-user" > </i> <i class="fa fa-cart-plus" aria-hidden="true"> Return to Mycart</i> </span>
            </a>&nbsp;&nbsp;&nbsp;

            <a href="{{ route('checkout') }}"  class="btn btn-danger"  data-toggle="tooltip" data-placement="top" title="Return to Cart">
                <span> <i class="fa fa-credit-card" aria-hidden="true"> Return to Payment</i> </span>
            </a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class = "col-xs-12 col-xs-12 col-md-12 col-lg-12 col-xl-12 ">		
            <div class="row">
            <div class="col-xs-12 col-xs-12 col-md-5 col-lg-5 col-xl-5 ">
				<h3><u>Summary:</u></h3>
				<table class= "table table-hover well table-responsive">
					<thead>
						<tr>
							<th>Product Name</th>
							<th>Quantity</th>
							<th>Price</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($cart->items as $c)
						<tr>
							<td>{{$c['item']->product_name}}</td>
							<td>{{$c['qty']}}</td>
							<td>&#x20B1;{{ number_format($c['qty'] * $c['price'],2)}}</td>
						</tr>	
						@endforeach
					</tbody>
					<tfoot>
						<tr>
							<td style="color:#000;font-weight: 800;"><b>Total:</b></td>
							<td></td>
							<td style="color:#000;font-weight: 900;"><b>&#x20B1;{{ number_format($cart->totalPrice,2)}}</b></td>
						</tr>		
					</tfoot>	
				</table>
			</div>

			<div class="col-md-5 col-lg-1 col-xl-1"></div>
			<br>
			<div class="col-xs-12 col-xs-12 col-md-5 col-lg-5 col-xl-5 ">
				<h3> Bank Accounts</h3>

				<hr>
				<h5 style="color: darkgreen;font-weight: bolder;font-family:Lato, Helvetica, Arial, sans-serif;">BPI BANK DEPOSIT</h4>
				<h5>Account Name: TRIAL_ACCOUNT_NAME</h5>
				<h5>Account Number: XXX-XXXXX-XX</h5>	

				<hr>
				<h5 style="color: darkgreen;font-weight: bolder;">BDO BANK DEPOSIT</h4>
				<h5>Account Name: TRIAL_ACCOUNT_NAME</h5>
				<h5>Account Number: ZZZ-ZZZZZ-ZZ</h5>	

				<hr>
				<h5 style="color: darkgreen;font-weight: bolder;">METRO BANK DEPOSIT</h4>
				<h5>Account Name: TRIAL_ACCOUNT_NAME</h5>
				<h5>Account Number: YYY-YYYYY-YY</h5>			
			</div>
		</div>
        </div>
    </div>
</div>
    
@endsection

@section('scripts')
 
 <script type="text/javascript">$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})


</script>
@endsection
