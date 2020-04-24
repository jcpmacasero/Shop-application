@extends('layouts.admin_app')


@section('title')
Admin | Sub-category
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
                <a href="#" class="list-group-item">Sub-Categories</a>
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

        <div class="col-md-8 col-sm-offset-1">
            <div class="row">
                <h3>Sub-Categories</h3>
            </div>
            <div class="row">
                <h5>Operations</h5>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <button class="btn btn-primary btn-sm btn-marg" data-toggle="modal" data-target="#addcategory"><i class="fa fa-plus" aria-hidden="true"></i> Category</button>
                    <button class="btn btn-primary btn-sm btn-marg" data-toggle="modal" data-target="#addsubcategory"><i class="fa fa-plus" aria-hidden="true"></i> Sub-Category</button>  
                </div>
                <div class="col-md-5">
                    <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-sm pull-right delbtnsubcat" data-title="Delete" data-toggle="modal" data-target="#delete" ><i class="fa fa-trash-o" aria-hidden="true"></i></button></p>
                </div>
            </div>
                <div class="table-controls">
                    <form action="{{ route('admin.delsubcategories') }}" method="get" id="delsubcat">
                        {{ csrf_field() }}
                    <table class="table table-hover table-responsive">
                        <thead class="thead-inverse">
                            <tr>
                              <th width="3%"><input type="checkbox" id="selectAll" /></th>
                              <th width="15%">CATEGORY</th>
                              <th width="15%">SUB-CATEGORY</th>
                              <th width="29%">DESCRIPTION</th>
                              <th width="10%">STATUS</th>
                              <th width="15%">UPDATED</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($subcategories as $key => $data)
                            <tr>
                                <td><input type="checkbox" name="subcategories[]" value="{{ $data->subcategory_id }}" />&nbsp;</td>
                                <td><a href="#" data-value="{{ $data->subcategory_id }}" class="linkeditsubcat"> {{ $data->name }} </a></td>
                                <td><a href="#" data-value="{{ $data->subcategory_id }}" class="linkeditsubcat"> {{ $data->subname }} </a></td>
                                <td><a href="#" data-value="{{ $data->subcategory_id }}" class="linkeditsubcat"> {{ $data->description }} </a></td>
                                <td><a href="#" data-value="{{ $data->subcategory_id }}" class="linkeditsubcat"> {{ $data->status }} </a></td>
                                <td>{{ $data->updated_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                        <div class="text-center">
                                {!! $subcategories->links() !!}
                        </div>
                    </form>
                </div>
            </div>
    </div>

{{-- modals --}}

<div class="modal fade" id="addcategory" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign"></span> Add Category</h4>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1" style="margin-top: 6px;">
                <div class="print-error-msg-addcat" style="display:none">
                    <ul style="list-style: none;"></ul>
                </div>
            </div>
        </div>
        <form id="frmProdCategory">
        <div class="modal-body" style="padding: 5px;">
                <div class="row">
                   <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                        <input class="form-control" name="catname" placeholder="Category name" type="text" required />
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <textarea style="resize:vertical;" class="form-control" placeholder="Description" rows="4" name="catdesc" required></textarea>
                    </div>
                </div>                
            </div>  
            <div class="panel-footer" style="margin-bottom:-14px;">
                <button class="btn btn-success btn-sm" onclick="addCategoryAjax(event)">Submit</button>
                    <!--<span class="glyphicon glyphicon-ok"></span>-->
                <input type="reset" class="btn btn-danger btn-sm" value="Clear" />
                    <!--<span class="glyphicon glyphicon-remove"></span>-->
                <button style="float: right;" type="button" class="btn btn-default btn-close btn-sm" data-dismiss="modal">Close</button>
            </div>
            {{ csrf_field() }}
        </form>
        </div>
    </div>
</div>

<div class="modal fade" id="addsubcategory" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign"></span> Add Sub-Category</h4>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1" style="margin-top: 6px;">
                <div class="print-error-msg-addsubcat" style="display:none">
                    <ul style="list-style: none;"></ul>
                </div>
            </div>
        </div>
        <form id="frmAddSubCat">
        <div class="modal-body" style="padding: 5px;">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                        <select class="form-control col-lg-12 col-md-12 col-sm-12" size="1" name="prodcat" placeholder="Choose category">
                            <option value="">Choose category</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->category_id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                   <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                        <input class="form-control" name="subcatname" placeholder="Sub-category name" type="text" required />
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <textarea style="resize:vertical;" class="form-control" placeholder="Description" rows="4" name="subcatdesc" required></textarea>
                    </div>
                </div>                
            </div>  
            <div class="panel-footer" style="margin-bottom:-14px;">
                <button class="btn btn-success btn-sm" onclick="addSubCategoryAjax(event)">Submit</button>
                    <!--<span class="glyphicon glyphicon-ok"></span>-->
                <input type="reset" class="btn btn-danger btn-sm" value="Clear" />
                    <!--<span class="glyphicon glyphicon-remove"></span>-->
                <button style="float: right;" type="button" class="btn btn-default btn-close btn-sm" data-dismiss="modal">Close</button>
            </div>
            {{ csrf_field() }}
        </form>
        </div>
    </div>
</div>

<div class="modal fade" id="editsubcategory" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign"></span> Edit Sub-Category</h4>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1" style="margin-top: 6px;">
                <div class="print-error-msg-addsubcat" style="display:none">
                    <ul style="list-style: none;"></ul>
                </div>
            </div>
        </div>
        <form action="{{ route('admin.editsubCategory') }}" method="post" id="frmEditSubCat">
            <input class="form-control" name="esubcat_id" id="esubcat_id" placeholder="Sub-category name" type="hidden"/>
        <div class="modal-body" style="padding: 5px;">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                        <select class="form-control col-lg-12 col-md-12 col-sm-12" size="1" name="eprodcat" id="eprodcat" placeholder="Choose category">
                            <option value="">Choose category</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->category_id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                        <select class="form-control col-lg-12 col-md-12 col-sm-12" size="1" name="editpub" id="editpub">
                            <option value="published">published</option>
                            <option value="hide">hide</option>                            
                        </select>
                    </div>
                </div>
                <div class="row">
                   <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                        <input class="form-control" name="esubcatname" id="esubcatname" placeholder="Sub-category name" type="text" required />
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <textarea style="resize:vertical;" class="form-control" placeholder="Description" rows="4" name="esubcatdesc" id="esubcatdesc" required></textarea>
                    </div>
                </div>                
            </div>  
            <div class="panel-footer" style="margin-bottom:-14px;">
                <input type="submit" class="btn btn-success btn-sm" value="Submit"/>
                    <!--<span class="glyphicon glyphicon-ok"></span>-->
                <input type="reset" class="btn btn-danger btn-sm" value="Clear" />
                    <!--<span class="glyphicon glyphicon-remove"></span>-->
                <button style="float: right;" type="button" class="btn btn-default btn-close btn-sm" data-dismiss="modal">Close</button>
            </div>
            {{ csrf_field() }}
        </form>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script type="text/javascript">

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('#selectAll').click(function (e) {
    $(this).closest('table').find('td input:checkbox').prop('checked', this.checked);
});

$(".delbtnsubcat").click( function() {
    $('#delsubcat').submit();
});

$(".linkeditsubcat").click(function() {
    var value = $(this).data("value");
    getSubCategoryDetails(value);
});

function getSubCategoryDetails(subcategory_id){
    $.ajax({         
        url: "{{ url('admin/get-subcat') }}/" +subcategory_id,        
        type: "GET",
        dataType: "JSON",
            success: function(data) { 
                $('#esubcat_id').val(data.subcategory[0].subcategory_id);
                $('#eprodcat').val(data.subcategory[0].category_id);
                $('#editpub').val(data.subcategory[0].status);
                $('#esubcatname').val(data.subcategory[0].subname);
                $('#esubcatdesc').val(data.subcategory[0].description);
                $('#editsubcategory').modal('show');
            }
    });
}

function addCategoryAjax(e) {
    e.preventDefault();
    $.ajax({         
        url: "{{ route('admin.addcat') }}",        
        type: "POST",
        data: $("#frmProdCategory").serialize(),
        dataType: "JSON",
        success: function(data) {
             if($.isEmptyObject(data.error)){
                $('.print-error-msg-addcat').removeClass('alert alert-danger');
                $('.print-error-msg-addcat').addClass('alert alert-success');
                $('.print-error-msg-addcat').find("ul").html('');
                $('.print-error-msg-addcat').css('display','block');
                $(".print-error-msg-addcat ul").append('<li class="tick">'+data.success+'</li>');
                $('#frmAddcategory')[0].reset();
                location.reload();
                }else{
                printErrorMsgCat(data.error);
            }
        }
    }); 
}

function printErrorMsgCat (msg) {            
    $('.print-error-msg-addcat').removeClass('alert alert-success');
    $(".print-error-msg-addcat").addClass('alert alert-danger');
    $(".print-error-msg-addcat").find("ul").html('');
    $(".print-error-msg-addcat").css('display','block');
    $.each( msg, function( key, value ) {
        $(".print-error-msg-addcat").find("ul").append('<li class="cross">'+value+'</li>');
    });
}

function addSubCategoryAjax(e) {
    e.preventDefault();
    $.ajax({         
        url: "{{ route('admin.subcategory') }}",        
        type: "POST",
        data: $("#frmAddSubCat").serialize(),
        dataType: "JSON",
        success: function(data) {
             if($.isEmptyObject(data.error)){
                $('.print-error-msg-addsubcat').removeClass('alert alert-danger');
                $('.print-error-msg-addsubcat').addClass('alert alert-success');
                $('.print-error-msg-addsubcat').find("ul").html('');
                $('.print-error-msg-addsubcat').css('display','block');
                $(".print-error-msg-addsubcat ul").append('<li class="tick">'+data.success+'</li>');
                $('#frmAddSubCat')[0].reset();
                location.reload();
                }else{
                printErrorMsgSubCat(data.error);
            }
        }
    }); 
}

function printErrorMsgSubCat (msg) {            
    $('.print-error-msg-addsubcat').removeClass('alert alert-success');
    $(".print-error-msg-addsubcat").addClass('alert alert-danger');
    $(".print-error-msg-addsubcat").find("ul").html('');
    $(".print-error-msg-addsubcat").css('display','block');
    $.each( msg, function( key, value ) {
        $(".print-error-msg-addsubcat").find("ul").append('<li class="cross">'+value+'</li>');
    });
}


</script>
@endsection
