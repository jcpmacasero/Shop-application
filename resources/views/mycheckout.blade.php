@extends('layouts.user2')

@section('title')
    Store | Checkout
@endsection
@section('content')
 <br> <br> <br>

<div class="container">
	<div class="row justify-content-center">
		
		<div class="col-lg-6" id ="preview">
			<div class="card" style="background: lightgray;color: black">
				<div class="card-body">
					<h3><u>Items to Pay:</u></h3>
					<table class= "table table-hover table-bordered table-responsive">
						<thead class="thead">
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
								<td>&#x20B1;{{ number_format($c['qty'] * $c['price'] ,2)}}</td>
							</tr>	
							@endforeach
						</tbody>
						<tfoot>
							<tr>
								<td colspan="2"><b>Total:</b></td>
								
								<td style="font-weight: 900;"><b>&#x20B1;{{number_format($cart->totalPrice,2)}}</b></td>
							</tr>		
						</tfoot>	
					</table><hr>
		 			<h3><u>Shipping Form</u></h3>
					<form id="formship">
						<div class="form-group">
						    <label for="exampleFormControlInput1">Name of receiver:</label>
							<input type="text" class="form-control" name="shipping_receiver" id="shipping_receiver" placeholder="Complete Name (Firstname Middlename. Lastname)" />
						</div>
						
						<div class="form-group " hidden>
						   
							<input type="text" class="form-control" name="total_amount" id="total_amount" value="{{ $cart->totalPrice}}">
						</div>
						
						<div class="form-group">
						    <label for="exampleFormControlInput1">Address</label>
							<input type="text" class="form-control" name="shipping_address" id="shipping_address" placeholder="Full Address">
						</div>


						
						<div class="form-group">
						    <label for="exampleFormControlInput1">Contact Number</label>
							<input type="text" class="form-control" name="mobile_number" id="mobile_number" placeholder="Contact number">							
							<button class="btn btn-sm" onclick="verifyNumber(event)" style="margin-top: 5px">Send verification code</button>
					 	</div>					 	

					 	<div class="form-group">
						    <label for="exampleFormControlInput1">Verification Code</label>
							<input type="text" class="form-control" name="verifyCode" id="verifyCode" placeholder="Verification Code">
							<button class="btn btn-sm" onclick="checkverify(event)" style="margin-top: 5px">Verify</button>							
					 	</div>				


				       	<div class="form-group">
						    <label for="exampleFormControlSelect1">Paywith:</label>
						    <select class="form-control form-control col" id="paywith" name="paywith">
						      <option></option>
						      <option value="paypal">Paypal</option>
						      <option value="bank">Bank Accounts</option>
						    </select>
						</div>
					</form>

					<div>
						<button class="btn btn-block" id="btnSaveme"  style="background: #f05b05;color: white" onclick="addtoship()" disabled="disabled">Save</button>
					</div>
	                
	                <br>*Note: Please click Save before procedding to payment. Thank You!
		 			
	                @if ($message = Session::get('success'))
		                <div class=" alert alert-success fade in">
		                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
		                    {!! $message !!}
		                </div>
		                <?php Session::forget('success');?>
		                @endif
		                @if ($message = Session::get('error'))
		                <div class=" alert alert-danger fade in">
		                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
		                    {!! $message !!}
		                </div>
		                <?php Session::forget('error');?>
		                @endif
	                    <form class="form-horizontal" method="POST" id="payment-form" role="form" action="{!! URL::route('addmoney.paypal') !!}" >
	                        {{ csrf_field() }}
	                        <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }} d-print-none">
	                            <label for="amount" class="col-md-4 control-label hidden"></label>
	                            <div class="col-md-6">
	                                <input id="amount" type="text" class="form-control " name="amount" value="{{ $cart->totalPrice}}" hidden>
	                                @if ($errors->has('amount'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('amount') }}</strong>
	                                    </span>
	                                @endif
	                            </div>
	                        </div>
                          	<div class="form-group" id ="paypalbtn">
                            	<div class="col">
                               		<button type="submit" id="paypbtn" class="btn btn-primary form-control"><i class="fa fa-paypal"> </i> Paywith Paypal</button>
                            	</div> 
                            </div>
                        </form> 
			        	<form action="bank" id ="bankbtn">
						    <button id="bnkbtn" class="btn btn-warning form-control"><i class="fa fa-bank"> Paywith Bank Accounts </i></button>
						</form>

					</div>
				</div>
			</div>

	 
	        
	</div>
</div>

@endsection

@section('scripts')


<script type = "text/javascript">

$(document).ready(function(){
 
  //document.getElementById('btnSearch').disabled = 'true';

	$("#paypalbtn").hide();
	$("#bankbtn").hide();


	document.getElementById('paypbtn').disabled = true;
	document.getElementById('bnkbtn').disabled = true; 
          
	$(function () {
        $("#paywith").change(function () {
            if ($(this).val() == "paypal") {
                $("#bankbtn").hide();
    			$("#paypalbtn").show();

            } 

            else if ($(this).val() == "bank") {
    		  	$("#paypalbtn").hide();
    			$("#bankbtn").show();
            } 
            
            else {
          		$("#paypalbtn").hide();
    			$("#bankbtn").hide();
          
            }
        });
    });

}); 


$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('#province_id').change(function(){
    var selectedprovince = $(this).val();
    getCities(selectedprovince);
});

$('#city_id').change(function(){
    var selectedcity = $(this).val();
    getBarangays(selectedcity);
});

function getCities(province_id) {
	$('#city_id').empty();
	$.ajax({		 
		 url: "{{ url('city') }}/" +province_id,        
		 type: "GET",
		 dataType: "JSON",
		 	success: function(data) {
		 		var opts = data;
                // Use jQuery's each to iterate over the opts value
                $.each(opts, function(i, d) {                    
                    $('#city_id').append('<option value="' + d.city_id + '">' + d.city_name + '</option>');
                });
		 	}
	});	
}

function verifyNumber(e) {
	e.preventDefault();
	var num = $('#mobile_number').val();

	$.ajax({
		url: "{{ url('verifymobile') }}/" +num,    
		type: "GET",
		dataType: "JSON",
			success:function(data) {
				if(data == 'Success') {
					alert('Verification successfully sent!');
				}else {
					alert(data);
				}
			}
	});
}

function checkverify(e) {
	e.preventDefault();
	var code = $('#verifyCode').val();
	$.ajax({
		url: "{{ url('checkverify') }}/" +code,    
		type: "GET",
		dataType: "JSON",
			success:function(data) {			
				if(data == 'Verification Success') {
					$('#mobile_number').prop('readonly', true);
					$('#verifyCode').prop('readonly', true);
					$('#btnSaveme').removeAttr('disabled');
					alert('Successfully verified!');
				} else {
					alert(data);
				}
			}
	});

}

function getBarangays(city_id) {
	$('#barangay_id').empty();
	$.ajax({		 
		 url: "{{ url('barangay') }}/" +city_id,        
		 type: "GET",
		 dataType: "JSON",
		 	success: function(data) {
		 		var opts = data;
                // Use jQuery's each to iterate over the opts value
                $.each(opts, function(i, d) {                    
                    $('#barangay_id').append('<option value="' + d.barangay_id + '">' + d.barangay_name + '</option>');
                });
		 	}
	});	
}

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

 


function addtoship(){
	
	if(($("#shipping_receiver").val() == "") || ($("#shipping_address").val() == "") || ($("#mobile_number").val() == "")){
		alert('Please complete credentials. Thank you!');
	}

	else{
		$.ajax({		 
			 url: "{{ url('addship') }}",        
			 type: "POST",
			 data:$("#formship").serialize(),
			 dataType: "JSON",
			 	success: function(data) {
  					document.getElementById('paypbtn').disabled = false; 
			 		document.getElementById('bnkbtn').disabled = false;
			 	}
		});
	}
}


</script>

@endsection
