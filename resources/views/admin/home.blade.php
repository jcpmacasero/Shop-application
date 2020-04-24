@extends('layouts.admin_app')


@section('title')
Admin | Home
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <div class="list-group">                
                <a href="{{ route('admin.category') }}" class="list-group-item">Categories</a>
                <a href="{{ route('admin.subcategory') }}" class="list-group-item">Sub-Categories</a>
                <a href="{{ route('admin.product') }}" class="list-group-item">Products</a>
                <a href="#orders" data-toggle="collapse" class="list-group-item">Orders <span class="caret"></span></a>
                    <div class="collapse" id="orders">
                        <a href="{{ route('admin.pending') }}" class="list-group-item"> Pending Orders </a>                        
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

        <div class="col-7">
            
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Admin Dashboard</div>
                <div class="panel-body">
                    You are logged in as Admin!
                </div>
                        </div>
                    </div>
                </div>
            
        </div>

    </div>
</div>
@endsection
