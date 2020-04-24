@extends('layouts.admin_app')
@section('title')
Admin | User Accounts
@endsection

@section('styles')
<style type="text/css">
   
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
                        <a href="{{ route('admin.reg') }}" class="list-group-item"> Admin Register </a>                        
                        <a href="#" class="list-group-item"> User Accounts </a>
                    </div>                
            </div>
        </div>

        <div class="col-md-8 col-sm-offset-1">
            <div class="row">
                <h4>List of Users</h4>
            </div>
            <div class="row">
                <div class="col-md-5">
                    
                </div>
                <div class="col-md-5">
                    
                </div>
            </div>
                <div class="table-controls">
                    <form action="" method="get" id="delprod">
                        {{ csrf_field() }}
                        
                    <table class="table table-hover table-responsive">                                    
                        <thead class="thead-inverse">                        
                            <tr>
                              <th width="3%">USER ID</th>                              
                              <th width="8%">NAME</th>
                              <th width="20%">EMAIL</th>
                              <th width="5%">GENDER</th>
                              <th width="10%">BIRTHDATE</th>                             
                              <th width="10%">REG DATE</th>
                            </tr>
                        </thead>                        
                        <tbody>
                             @foreach($users as $key => $data)
                            <tr>
                                <td><a href="#" data-value="{{ $data->id }}" class="linkedit"> {{ $data->id }} </a></td>                                        
                                <td><a href="#" data-value="{{ $data->name }}" class="linkedit"> {{ $data->name }} </a></td>
                                <td><a href="#" data-value="{{ $data->email }}" class="linkedit"> {{ $data->email }} </a></td>
                                <td><a href="#" data-value="{{ $data->gender }}" class="linkedit"> {{ $data->gender }} </a></td>
                                <td><a href="#" data-value="{{ $data->birthdate }}" class="linkedit"> {{ $data->birthdate }} </a></td>
                                <td><a href="#" data-value="{{ $data->created_at }}" class="linkedit"> {{ $data->created_at }} </a></td>                                                    
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                        <div class="text-center">
                                {{-- {!! $products->links() !!} --}}
                        </div>
                    </form>
                </div>            
        </div>

    </div>


<!-- modals -->

@endsection

@section('scripts')
<script type="text/javascript">

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

</script>
@endsection
