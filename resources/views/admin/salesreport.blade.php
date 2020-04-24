@extends('layouts.admin_app')


@section('title')
Admin | Product
@endsection

@section('styles')
<style type="text/css">
  .buttons-options {
    margin-bottom: 10px;
  }
  .btn-warning {
    color: #fff !important;
    background-color: #292b2c !important;
    border-color:  #242b2c !important;
  }
  @media print{
    .no-print {
      display: none;
    }
    printable {
      display: block;      
      margin-right:0;
      margin-top:0;

    }
    html,body {
      margin: 0;
      padding: 0;
    }
    .tpname {
      width: 27%;
    }
    .tdsold {
      width: 23%;
    }
    .tprice{
      width: 18%;
    }
    .tqty {
      width: 20%;
    }
    .tsales {
      width: 20%;
    }
  
  @page {
    margin-right:0;
    margin-top:0;
    margin-left:3cm;
 }
</style>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-2 no-print">
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
                        <a href="#" class="list-group-item"> Sales </a>                        
                    </div>
                <a href="#accounts" data-toggle="collapse" class="list-group-item">Accounts <span class="caret"></span></a>
                    <div class="collapse" id="accounts">
                        <a href="{{ route('admin.reg') }}" class="list-group-item"> Admin Register </a>                        
                        <a href="{{ route('admin.controlusers') }}" class="list-group-item"> User Accounts </a>
                    </div>
            </div>
        </div>

        <div class="col-8 offset-1">
            <div class="row no-print">
                <h3>Sales Report</h3>
            </div>
            <form id="genReport">
            <div class="row no-print">
              <div class="col-md-4">
                <label class="selectdate">Select report type: </label>
                <select class="form-control" size="1" id="report-select">
                  <option value="">------------ Select type -----------</option>
                  <option value="daily">Daily</option>
                  <option value="custom">Custom</option>
                </select>
              </div>
            </div>
            <br>
            <div class="no-print" id="custom-rep" style="display:none;">
              <div class="row"><label class="selectmonth"> Select date</label></div>            
                  From: &nbsp;<input id="datepicker" name="datepicker">              
                  To: &nbsp;<input id="datepicker1" name="datepicker1">
                  &nbsp;<button class="btn btn-primary btn-sm" onclick="getcustom(event)">Generate</button>
              </div>
            <div class="no-print" id="daily-rep" style="display:none;">
                <div class="row"><label class="selectdaily"> Select date</label></div>
                Daily: &nbsp;<input id="datepicker2" name="datepicker2">
                &nbsp;<button class="btn btn-primary btn-sm" onclick="getdaily(event)">Generate</button>
            </div>
            </form>
            <div class="row">
                <div class="container" id="tbl-rep">
                    <div class="reports-table" style="margin-top: 40px;">
                      <div class="buttons-options no-print">
                        <button id="btnPrint" onclick="window.print();return false;" title="Print" class="btn btn-warning btn-sm"><i class="fa fa-print" aria-hidden="true"></i></button>
                        {{-- <button title="Save as PDF" class="btn btn-warning btn-sm"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></button> --}}
                      </div>
                        <div class="dvContainer printable">
                          <table class="table table-hover table-responsive">                          
                              <thead class="thead-inverse">
                                <th class="tpname">PRODUCT NAME</th>                              
                                <th class="tdsold">DATE SOLD</th>
                                <th class="tprice">PRICE</th>
                                <th class="tqty">QTY SOLD</th>
                                <th class="tsales">TOTAL SALES</th>
                              </thead>
                              <tbody id="table_reportbody">
                                
                              </tbody>
                          </table>
                        </div>
                        <div class="pagi no-print" style="margin-top: -55px;"></div>
                    </div>
                </div>
            </div>
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

$('.pagi').delegate('.pagination a','click',function(event){
    event.preventDefault();
    var pagiurl = $(this).attr('href');
    $.ajax({
            url: pagiurl,
            data: $("#genReport").serialize(),
            type:"POST",
            dataType: "json",
            success: function(json) {
                $('#table_reportbody').html(json.success);
                $('.pagi').html(json.pagi);
            }
    });
});

function getdaily(e) {
  e.preventDefault();
  $.ajax({
    url: "{{ route('admin.gendailyrep') }}",  
    data: $("#genReport").serialize(),
    type: "POST",
    dataType: "JSON",
    success: function(json) {
      $('#table_reportbody').html(json.success);
      $('.pagi').html(json.pagi);
    }
  });
}

function getcustom(e) {
  e.preventDefault();
  $.ajax({
    url: "{{ route('admin.gencustomrep') }}",  
    data: $("#genReport").serialize(),
    type: "POST",
    dataType: "JSON",
    success: function(json) {
      $('#table_reportbody').html(json.success);
      $('.pagi').html(json.pagi);
    }
  });
  
}

$(function() {
  $('#report-select').change(function(){      
      var selectedItem = $(this).val();
        if(selectedItem == "") {
          $('#custom-rep').hide();
          $('#daily-rep').hide();
        }
        else if(selectedItem == "daily") {
          $('#custom-rep').hide();
          $('#daily-rep').show();
        }
        else if(selectedItem == "custom") {
          $('#custom-rep').show();
          $('#daily-rep').hide();
        }
  });
});

$(function() {
$( "#datepicker" ).datepicker();
});

$(function() {
$( "#datepicker1" ).datepicker();
});

$(function() {
$( "#datepicker2" ).datepicker();
});
</script>
@endsection
