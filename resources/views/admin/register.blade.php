@extends('layouts.admin_app')


@section('title')
Admin | Category
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
                        <a href="{{ route('admin.approve') }}" class="list-group-item"> Approved Orders </a>
                    </div>                
                <a href="#reports" data-toggle="collapse" class="list-group-item">Reports <span class="caret"></span></a>
                    <div class="collapse" id="reports">
                        <a href="{{ route('admin.salesrep') }}" class="list-group-item"> Sales </a>                        
                    </div>
                <a href="#accounts" data-toggle="collapse" class="list-group-item">Accounts <span class="caret"></span></a>
                    <div class="collapse" id="accounts">
                        <a href="#" class="list-group-item"> Admin Register </a>
                        <a href="{{ route('admin.controlusers') }}" class="list-group-item"> User Accounts </a>
                    </div>
            </div>
        </div>

        <div class="col-8 offset-1">
            
                
                    
                        <div class="panel panel-default">
                            <div class="panel-heading">Admin Register</div>
                            <div class="panel-body">
                                @if(session()->has('message'))
                                    <div class="alert alert-success">
                                        <ul style="list-style: none;">
                                            <li class="tick"> {{ session()->get('message') }}</li>
                                        </ul>
                                    </div>
                                @endif
                                <form class="form-horizontal" method="POST" action="{{ route('admin.regnewuser') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Name</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password" class="col-md-4 control-label">Password</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control" name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">
                                                Register
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
        </div>
    </div>

@endsection
