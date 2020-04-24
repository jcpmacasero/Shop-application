@extends('layouts.admin_app')


@section('title')
Admin | Product
@endsection

@section('styles')
<style type="text/css">
    .thumb {
        height: 75px;
        border: 1px solid #000;
        margin: 10px 5px 0 0;
    }
    .upimage {
        margin-left: 2.5%;
        margin-top: 1.5%;
    }
    .table-controls {
        margin-top:2%;
    }
    .img-container {
      position: relative;
      margin-top: 5px;
      margin-bottom: 8px;
      margin-left: 0px;
      width: 200px;
      height: 300px;
    }

    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0);
      transition: background 0.5s ease;
    }

    .img-container:hover .overlay {
      display: block;
      background: rgba(0, 0, 0, .3);
    }

    #feature_img img {
      position: absolute;
      width: 200px;
      height: 300px;
      left: 0;
    }

    .img-container:hover .title {
      top: 90px;
    }

    .button {
      position: absolute;
      width: 100px;
      left:28px;
      top: 180px;
      text-align: center;
      opacity: 0;
      transition: opacity .35s ease;
    }

    .button a {
      width: 200px;
      padding: 12px 48px;
      text-align: center;
      color: white;
      border: solid 2px white;
      z-index: 1;
    }

    .img-container:hover .button {
      opacity: 1;
    }
    .img-wrap {
      position: relative;
      display: inline-block;
      border: 1px #000 solid;
      font-size: 0;
      margin-right: 3px;
    }
    .img-wrap .close {
      position: absolute;
      top: 2px;
      right: 2px;
      z-index: 100;
      background-color: #FFF;
      padding: 5px 2px 2px;
      color: red;
      font-weight: bold;
      cursor: pointer;
      opacity: .2;
      text-align: center;
      font-size: 20px;
      line-height: 10px;
      border-radius: 50%;
    }
    .img-wrap:hover .close {
      opacity: 1;
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
                <a href="#" class="list-group-item">Products</a>
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
                <h3>Products</h3>
            </div>
            <div class="row">
                <h5>Operations</h5>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <button class="btn btn-primary btn-sm btn-marg" data-toggle="modal" data-target="#addcategory"><i class="fa fa-plus" aria-hidden="true"></i> Category</button>
                    <button class="btn btn-primary btn-sm btn-marg" data-toggle="modal" data-target="#addsubcategory"><i class="fa fa-plus" aria-hidden="true"></i> Sub-Category</button>  
                    <button class="btn btn-primary btn-sm btn-marg" data-toggle="modal" data-target="#addproduct"><i class="fa fa-plus" aria-hidden="true"></i> Product</button>
                </div>
                <div class="col-md-5">
                    <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-sm pull-right delbtn" data-title="Delete" data-toggle="modal" data-target="#delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button></p>
                </div>
            </div>
                <div class="table-controls">
                    <form action="{{ route('admin.delproducts') }}" method="get" id="delprod">
                        {{ csrf_field() }}
                        
                    <table class="table table-hover table-responsive">                                    
                        <thead class="thead-inverse">                        
                            <tr>
                              <th width="4%"><input type="checkbox" id="selectAll" /></th>
                              <th width="17%">SUB-CATEGORY</th>
                              <th width="30%">PRODUCT NAME</th>
                              <th width="10%">QTY</th>
                              <th width="12%">PRICE</th>
                              <th width="10%">STATUS</th>
                              <th width="25%">UPDATED</th>                
                            </tr>
                        </thead>                        
                        <tbody>
                             @foreach($products as $key => $data)
                            <tr>
                                <td><input type="checkbox" name="products[]" value="{{ $data->product_id }}" />&nbsp;</td>                            
                                <td><a href="#" data-value="{{ $data->product_id }}" class="linkedit"> {{ $data->name }} </a></td>
                                <td><a href="#" data-value="{{ $data->product_id }}" class="linkedit"> {{ $data->product_name }} </a></td>
                                <td><a href="#" data-value="{{ $data->product_id }}" class="linkedit"> {{ $data->quantity }} </a></td>
                                <td><a href="#" data-value="{{ $data->product_id }}" class="linkedit"> {{ $data->price }} </a></td>
                                <td><a href="#" data-value="{{ $data->product_id }}" class="linkedit"> {{ $data->status }} </a></td>
                                <td>{{ $data->updated_at }}</td>                            
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                        <div class="text-center">
                                {!! $products->links() !!}
                        </div>
                    </form>
                </div>            
        </div>

    </div>


<!-- modals -->
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

<div class="modal fade" id="addproduct" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign"></span> Add Product</h4>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1" style="margin-top: 6px;">
                <div class="print-error-msg-addprod" style="display:none">
                    <ul style="list-style: none;"></ul>
                </div>
            </div>
        </div>
        <form id="addProdFrm">
        <div class="modal-body" style="padding: 5px;">
              <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                        <select class="form-control col-lg-12 col-md-12 col-sm-12" size="1" name="prodsubcat" placeholder="Choose category">
                            <option value="">Choose category</option>
                            @foreach($subcategories as $subcategory)
                            <option value="{{ $subcategory->subcategory_id }}">{{ $subcategory->name }}</option>
                            @endforeach
                        </select>
                    </div>
              </div>
              <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                        <input class="form-control" name="prodname" placeholder="Product name" type="text" required />
                    </div>
              </div>
              <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                        <input class="form-control" name="prodprice" placeholder="Product price" type="number" min="0" step="0.01" required  />
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                        <input class="form-control" name="prodqty" placeholder="Product quantity" type="number" min="0" required />
                    </div>
              </div>
              <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <textarea style="resize:vertical;" class="form-control" placeholder="Description" rows="4" name="proddesc" required></textarea>
                    </div>
              </div>
              <div class="row">
                    <div class="upimage">
                    <input required type="file" id="files" name="files[]" multiple />
                    <output id="list"></output>
                    </div>
              </div>
                            
            </div>  
            <div class="panel-footer" style="margin-bottom:-14px;">
                <button class="btn btn-success btn-sm" onclick="addProductAjax(event)">Submit</button>
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

<div class="modal fade" id="editproduct" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign"></span> Edit Product</h4>
        </div>
        <div class="alert alert-danger print-error-msg" style="display:none">
          <ul></ul>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1" style="margin-top: 6px;">
                <div class="print-error-msg-editprod" style="display:none">
                    <ul style="list-style: none;"></ul>
                </div>
            </div>
        </div>
        <form id="editProd">
        <input class="form-control" name="editprodid" id="editprodid" placeholder="Product name" type="hidden" required />
        <div class="modal-body" style="padding: 5px;">
              <div class="row">
                    <div class="col-sm-6">
                        <div class="container">
                            <div class="img-container">
                                  <img src="" alt="" id="feature_img" style="max-width:200px; max-height: 300px;" />
                                  <div class="overlay"></div>
                                  <div class="button"><a href="#" id="upfile1">Change</a><input type="file" name="file1" id="file1" onchange="readURL(this);" style="display:none" /></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row">
                            <h5>Add Image</h5>
                            <div class="upimage">
                                <input type="file" id="addfiles" name="addfiles[]" multiple />
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px;">
                            <h5>Uploaded Images</h5>
                                <div class="uploaded-images">

                                </div>
                        </div>
                    </div>
              </div>
              <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                        <select class="form-control col-lg-12 col-md-12 col-sm-12" size="1" name="editprodsubcat" id="editprodsubcat">
                            @foreach($subcategories as $subcategory)
                            <option value="{{ $subcategory->subcategory_id }}">{{ $subcategory->name }}</option>
                            @endforeach
                        </select>
                    </div>
              </div>
              <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                        <select class="form-control col-lg-12 col-md-12 col-sm-12" size="1" name="editpub">
                            <option value="published">published</option>
                            <option value="hide">hide</option>                            
                        </select>
                    </div>
              </div>
              <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                        <input class="form-control" name="editprodname" id="editprodname" placeholder="Product name" type="text" required />
                    </div>
              </div>
              <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                        <input class="form-control" name="editprodprice" id="editprodprice" placeholder="Product price" type="number" min="0" step="0.01" required  />
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                        <input class="form-control" name="editprodqty" id="editprodqty" placeholder="Product quantity" type="number" min="0" step="1" required />
                    </div>
              </div>
              <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <textarea style="resize:vertical;" class="form-control" placeholder="Description" rows="4" name="editproddesc" id="editproddesc" required></textarea>
                    </div>
              </div>
                            
            </div>  
            <div class="panel-footer" style="margin-bottom:-14px;">
                <button class="btn btn-success btn-sm" onclick="editProductAjax(event)">Submit</button>
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
var url = window.location.href;

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('#selectAll').click(function (e) {
    $(this).closest('table').find('td input:checkbox').prop('checked', this.checked);
});

$(".delbtn").click( function() {
    $('#delprod').submit();
});

$(".linkedit").click(function() {
  var value = $(this).data("value");
  getProductDetails(value);
});

$("#upfile1").click(function () {
    $("#file1").trigger('click');
});

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

function editProductAjax(e) {
    e.preventDefault();
    var formData = new FormData($("#editProd")[0]); 

    jQuery.each(jQuery('#addfiles')[0].files, function(i, file) {
    formData.append('file-'+i, file);
    });

    $.ajax({         
        url: "{{ route('admin.editProduct') }}",        
        type: "POST",
        data: formData,
        dataType: "JSON",
        processData: false,
        contentType: false,
        cache: false,
        success: function(data) {
             if($.isEmptyObject(data.error)){
                $('.print-error-msg-editprod').removeClass('alert alert-danger');
                $('.print-error-msg-editprod').addClass('alert alert-success');
                $('.print-error-msg-editprod').find("ul").html('');
                $('.print-error-msg-editprod').css('display','block');
                $(".print-error-msg-editprod ul").append('<li class="tick">'+data.success+'</li>');
                $('#editProd')[0].reset();
                location.reload();
                }else{
                printErrorMsgEditProduct(data.error);
            }
        }
    }); 
}

function printErrorMsgEditProduct (msg) {            
    $('.print-error-msg-editprod').removeClass('alert alert-success');
    $(".print-error-msg-editprod").addClass('alert alert-danger');
    $(".print-error-msg-editprod").find("ul").html('');
    $(".print-error-msg-editprod").css('display','block');
    $.each( msg, function( key, value ) {
        $(".print-error-msg-editprod").find("ul").append('<li class="cross">'+value+'</li>');
    });
}

function addProductAjax(e) {
    e.preventDefault();
    var formData = new FormData($("#addProdFrm")[0]);     
    formData.append('file', $('#files')[0].files);
    

    $.ajax({         
        url: "{{ route('admin.addProduct') }}",        
        type: "POST",
        data: formData,
        dataType: "JSON",
        processData: false,
        contentType: false,
        cache: false,
        success: function(data) {
             if($.isEmptyObject(data.error)){
                $('.print-error-msg-addprod').removeClass('alert alert-danger');
                $('.print-error-msg-addprod').addClass('alert alert-success');
                $('.print-error-msg-addprod').find("ul").html('');
                $('.print-error-msg-addprod').css('display','block');
                $(".print-error-msg-addprod ul").append('<li class="tick">'+data.success+'</li>');
                $('#addProdFrm')[0].reset();
                location.reload();
                }else{
                printErrorMsgAddProduct(data.error);
            }
        }
    }); 
}

function printErrorMsgAddProduct (msg) {            
    $('.print-error-msg-addprod').removeClass('alert alert-success');
    $(".print-error-msg-addprod").addClass('alert alert-danger');
    $(".print-error-msg-addprod").find("ul").html('');
    $(".print-error-msg-addprod").css('display','block');
    $.each( msg, function( key, value ) {
        $(".print-error-msg-addprod").find("ul").append('<li class="cross">'+value+'</li>');
    });
}


function handleFileSelect(evt) {
    var files = evt.target.files; // FileList object

    // Loop through the FileList and render image files as thumbnails.
    for (var i = 0, f; f = files[i]; i++) {

      // Only process image files.
      if (!f.type.match('image.*')) {
        continue;
      }

      var reader = new FileReader();

      // Closure to capture the file information.
      reader.onload = (function(theFile) {
        return function(e) {
          // Render thumbnail.
          var span = document.createElement('span');
          span.innerHTML = ['<img class="thumb" src="', e.target.result,
                            '" title="', escape(theFile.name), '"/>'].join('');
          document.getElementById('list').insertBefore(span, null);
        };
      })(f);

      // Read in the image file as a data URL.
      reader.readAsDataURL(f);
    }
}
document.getElementById('files').addEventListener('change', handleFileSelect, false);

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#feature_img').attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

function getProductDetails(product_id) {
    $( ".uploaded-images" ).empty();
    $.ajax({         
        url: "{{ url('admin/get-product') }}/" +product_id,        
        type: "GET",
        dataType: "JSON",
        success: function(data) {
            $('#editprodid').val(product_id);
            $('#editprodname').val(data.product[0].product_name);
            $('#editprodprice').val(data.product[0].price);
            $('#editprodqty').val(data.product[0].quantity);
            $('#editproddesc').val(data.product[0].description);
            $('#editprodsubcat').val(data.product[0].subcategory_id);
            $('#editpub').val(data.product[0].status);
            $("#feature_img").attr('src',"{{asset('image_files')}}/"+data.product[0].featured_img);
            $('#editproduct').modal('show');
            for(var i=1;i<data.product_images.length;i++) {
                 $(".uploaded-images").append('<div class="img-wrap">'+'<span class="close">&times;</span>'+'<img src="'+"{{ asset('image_files') }}/"+data.product_images[i].product_image+'" data-id="'+data.product_images[i].product_img_id+'" style="max-height:50px; max-width:90px;">'+'</div>');
            };   
        }
    }); 
}

function deleteImage(product_img_id) {
  $.ajax({
    url: "{{ url('admin/del-img') }}/" +product_img_id,
    type: "GET",
    dataType: "JSON",
    success: function(data) {
      RefreshDiv(product_img_id);
    }
  });
}

function RefreshDiv(product_img_id) {
  $("img[data-id="+product_img_id+"]").closest('.img-wrap').remove();
}

$(document).on('click', ".img-wrap .close", function () {
    var id = $(this).closest('.img-wrap').find('img').data('id');
    if (confirm('Are you sure you want to delete this image?')) {
      deleteImage(id);
    } else {
        // Do nothing!
    }
});

</script>
@endsection
