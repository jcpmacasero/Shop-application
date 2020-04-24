@extends('layouts.user2')

@section('title')
    Store | My Cart
@endsection

@section('content')
 
<div class="container">
	<br>
    <div class="row">
	 	<div class="col-3">
	 		<div class="card bg-success">
				<center><img  type="image" src="<?php echo asset("shopuser.png")?>" width="150" height="150"></center>
				<div class="card-body">
					Name:<p class="lead"><strong>&nbsp;&nbsp;&nbsp;{{ Auth::user()->name }}</strong></p>		
					Email:<p><strong>&nbsp;&nbsp;&nbsp;{{ Auth::user()->email }}</strong></p>	
					Member since:<p ><strong>&nbsp;&nbsp;&nbsp;{{ date('M-d-Y', strtotime(Auth::user()->created_at))  }}</strong></p>	
				</div> 
				 
	 		</div>
	 	</div>
	 	<div class="col bg-info" id="cardinfo">
	 		<div class="card-body">
	 			<h3> Order History </h3>
	 		
                
                <div class="col" >
                    <table class= "table table-hover ">
                        <thead>
                            <tr>
                                <th>Shipping Id</th>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Date Ordered</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody  id ="result">
                            
                        </tbody>
                               
                    </table>
                </div>
	 		</div>
            
	 	</div>
    </div>
</div>
    
@endsection

@section('scripts')
 
 <script type="text/javascript">

    $(document).ready(function(){
        getOrder();
    });



 	$(function () {
	  $('[data-toggle="tooltip"]').tooltip()
	})

// function editprof(){

// 	$('#cardinfo').empty();
// 	$('#cardinfo').append('<div class="card">'+
// 	 			'<div class="card-head">'+
// 	 			'<div class="card-title">EDit Profile</div></div>'+
// 	 			'<div class="card-body">'+
//                     '<form class="form-horizontal" method="POST" action="{{ route('register') }}">'+
//                         '{{ csrf_field() }}'+

//                         '<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">'+
//                             '<label for="name" class="col-md-4 control-label">First & Last Name</label>'+

//                             '<div class="col-md-6">'+
//                                '<input id="name" type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" required autofocus>'+

//                                 '@if ($errors->has('name'))'+
//                                     '<span class="help-block">'+
//                                         '<strong>{{ $errors->first('name') }}</strong>'+
//                                     '</span>'+
//                                 '@endif'+
//                             '</div>'+
//                         '</div>'+
//                     '<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">'+
//                             '<label for="email" class="col-md-4 control-label">E-Mail Address</label>'+

//                             '<div class="col-md-6">'+
//                                 '<input id="email" type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" required>'+

//                                 '@if ($errors->has('email'))'+
//                                     '<span class="help-block">'+
//                                         '<strong>{{ $errors->first('email') }}</strong>'+
//                                     '</span>'+
//                                 '@endif'+
//                             '</div>'+
//                         '</div>'+

//                         '<div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">'+
//                             '<label for="gender" class="col-md-4 control-label">Gender</label>'+

//                             '<div class="col-md-6">'+
//                                 '<label class="radio-inline"><input type="radio" value="Male" name="gender">Male</label>'+
//                                 '<label class="radio-inline"><input type="radio" value="Female" name="gender">Female</label>'+

//                                 '@if ($errors->has('gender'))'+
//                                     '<span class="help-block">'+
//                                         '<strong>{{ $errors->first('gender') }}</strong>'+
//                                     '</span'+                                '@endif'+
//                             '</div>'+
//                         '</div>'+

//                         '<div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">'+
//                             '<label for="birthday" class="col-md-4 control-label">Birthday</label>'+

//                             '<div class="col-md-6">'+
//                                 '<div class="row">'+
//                                     '<div class="col-xs-4"> '+
//                                     '<select class="form-control" id="month" name="month">'+
//                                         '<option>Month</option>'+
//                                         '<option value="Jan">Jan</option>'+
//                                         '<option value="Feb">Feb</option>'+
//                                         '<option value="Mar">Mar</option>'+
//                                         '<option value="Apr">Apr</option>'+
//                                         '<option value="May">May</option>'+
//                                         '<option value="Jun">Jun</option>'+
//                                         '<option value="Jul">Jul</option>'+
//                                         '<option value="Aug">Aug</option>'+
//                                         '<option value="Sep">Sep</option>'+
//                                         '<option value="Oct">Oct</option>'+
//                                         '<option value="Nov">Nov</option>'+
//                                         '<option value="Dec">Dec</option>'+
//                                     '</select>'+
//                                     '</div>'+
                                
//                                     '<div class="col-xs-4">                      '+
//                                     '<select class="form-control" id="day" name="day">'+
//                                         '<option value="day">Day</option>'+
//                                         '@for ($i = 0; $i <= 31; $i++)'+
//                                             '<option value="{{ $i }}">{{ $i }}</option>'+'+'+
//                                         '@endfor'+
//                                     '</select>'+
//                                     '</div>'+

//                                     '<div class="col-xs-4">'+
//                                     '<select class="form-control" id="year" name="year">'+
//                                         '<option>Year</option>                   '+                
//                                         '<option value="1992">1992</option>'+
//                                         '<option value="1993">1993</option>'+
//                                         '<option value="1994">1994</option>'+
//                                         '<option value="1995">1995</option>'+                                      
//                                     '</select>'+
//                                     '</div>'+
//                             '</div>  '+

//                                 '@if ($errors->has('birthday'))'+
//                                     '<span class="help-block">'+
//                                         '<strong>{{ $errors->first('birthday') }}</strong>'+
//                                     '</span>'+
//                                 '@endif'+
//                             '</div>'+
//                         '</div>'+
 
//                         '<div class="form-group">'+
//                             '<div class="col-md-6 col-md-offset-4">'+
//                                 '<button type="submit" class="btn btn-primary">Register'+
                                    
//                                 '</button>'+
//                             '</div>'+
//                         '</div>'+
//                     '</form>'+
//                 '</div>'+
// 	 		'</div>');
// }


    function getOrder(){
        $('#result').empty();
        $.ajax({         
            url: "{{ url('getOrder') }}",        
            type: "GET",
            dataType: "JSON",
                success: function(data) {
                    for(i=0; i<data.length; i++){
                        var value = data[i].quantity * data[i].price ;
                        var num =  value.toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
                        var stat = data[i].status;
                        var p = "";

                        if (stat == "0"){
                            p = "Pending";
                        }
                        else {
                            p = "Delivered"
                        }

                        $("#result").append('<tr>'+
                            '<td>'+data[i].shipping_id+'</td>'+
                            '<td>'+data[i].product_name+'</td>'+
                            '<td>'+data[i].quantity+'</td>'+
                            '<td>&#x20B1;'+num+'</td>'+
                            '<td>'+data[i].shipping_date+'</td>'+
                            '<td>'+p+'</td>'+
                        '</tr>');
                    };          
                }
        }); 
    }


</script>
@endsection
