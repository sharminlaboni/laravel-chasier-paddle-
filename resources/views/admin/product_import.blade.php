@section('title') 
Theta - Datatable
@endsection 
@extends('admin_layouts.main')
@section('style')
<!-- DataTables css -->
<link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Responsive Datatable css -->
<link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start Breadcrumbbar -->                    
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Product Table</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Product Import List</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <button class="btn btn-primary">Add Widget</button>
            </div>                        
        </div>
    </div>          
</div>
<!-- End Breadcrumbbar -->
<!-- Start Contentbar -->    
<div class="contentbar"> 
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="card m-b-30 ">
                <div class="card-header">
                    <h5 class="card-title">Product </h5>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs custom-tab-line mb-3" id="defaultTabLine" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab-line" data-toggle="tab" href="#home-line" role="tab" aria-controls="home-line" aria-selected="true"><i class="feather icon-home mr-2"></i>Search By Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab-line" data-toggle="tab" href="#profile-line" role="tab" aria-controls="profile-line" aria-selected="false"><i class="feather icon-user mr-2"></i>Search By ASIN</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="defaultTabContentLine">
                        <div class="tab-pane fade show active" id="home-line" role="tabpanel" aria-labelledby="home-tab-line">
                            {{-- select counrty --}}
                        
                            <div class=" custom-control-inline">
                                <p class="p-0">Select Country: </p>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" name="country" value="usa" class="custom-control-input country">
                                <label class="custom-control-label" for="customRadioInline1">US</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="country" value="uk" class="custom-control-input country">
                                <label class="custom-control-label" for="customRadioInline2">Uk</label>
                            </div>
                            {{-- search bar --}}
                            <div class="mt-3">
                                <p>Product Name</p>
                            </div>
                        
                            <div class="input-group mb-3">
                                <div class="form-group">
                                    <select class="form-control category" name="category" id="formControlSelect">
                                    <option value="aps">All Departments</option>
                    <option value="alexa-skills">Alexa Skills</option>
                    <option value="amazon-devices">Amazon Devices</option>
                    <option value="amazon-global-store">Amazon Global Store</option>
                    <option value="pantry">Amazon Pantry</option>
                    <option value="warehouse-deals">Amazon Warehouse Deals</option>
                    <option value="mobile-apps">Apps & Games</option>
                    <option value="baby">Baby</option>
                    <option value="beauty">Beauty</option>
                    <option value="stripbooks">Books</option>
                    <option value="automotive">Car & Motorbike</option>
                    <option value="popular">CDs & Vinyl</option>
                    <option value="classical">Classical Music</option>
                    <option value="clothing">Clothing</option>
                    <option value="computers">Computers & Accessories</option>
                    <option value="digital-music">Digital Music</option>
                    <option value="diy">DIY & Tools</option>
                    <option value="dvd">DVD & Blu-ray</option>
                    <option value="electronics">Electronics & Photo</option>
                    <option value="fashion">Fashion</option>
                    <option value="outdoor">Garden & Outdoors</option>
                    <option value="gift-cards">Gift Cards</option>
                    <option value="grocery">Grocery</option>
                    <option value="handmade">Handmade</option>
                    <option value="drugstore">Health & Personal Care</option>
                    <option value="local-services">Home & Business Services</option>
                    <option value="kitchen">Home & Kitchen</option>
                    <option value="industrial">Industrial & Scientific</option>
                    <option value="jewelry">Jewellery</option>
                    <option value="digital-text">Kindle Store</option>
                    <option value="appliances">Large Appliances</option>
                    <option value="lighting">Lighting</option>
                    <option value="luggage">Luggage</option>
                    <option value="luxury-beauty">Luxury Beauty</option>
                    <option value="mi">Musical Instruments & DJ</option>
                    <option value="videogames">PC & Video Games</option>
                    <option value="pets">Pet Supplies</option>
                    <option value="instant-video">Prime Video</option>
                    <option value="shoes">Shoes & Bags</option>
                    <option value="software">Software</option>
                    <option value="sports">Sports & Outdoors</option>
                    <option value="office-products">Stationery & Office Supplies</option>
                    <option value="toys">Toys & Games</option>
                    <option value="vhs">VHS</option>
                    <option value="watches">Watches</option>
                                    </select>
                                </div>
                                <input type="text" class="form-control search_keyword" name="search_keyword" placeholder="Search Product By Product Name" aria-label="Recipient's username" aria-describedby="button-addon-group">
                                <div class="input-group-append">
                                    <button class="btn btn-primary submit"  id="button-addon-group">Search</button>
                                </div>
                            </div>
                            <!-- <div class="acl-row wpas-no-aws-import-products-row">
                           </div>   -->
                        
                            <div class="row">
                                 <!-- Start col -->
                                <div class="col-lg-12">
                                    <div class="card m-b-30">
                                        <div class="card-header">
                                            <h5 class="card-title">Product Data List</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="datatable-buttons" class="table table-striped table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th>title</th>
                                                        <th>rating</th>
                                                        <th>review</th>
                                                        <th>top review</th>
                                                        
        
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                   
                                                    <tr class="table-data">
                                                        <!-- <td>A</td>
                                                        <td>A</td>
                                                        <td>A</td>
                                                        <td>A</td> -->
                                                    </tr>
                                                    
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End col -->    
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile-line" role="tabpanel" >
                            {{-- select counrty --}}
                            <div class=" custom-control-inline">
                                <p class="p-0">Select Country: </p>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" id="customCheckboxInline1" name="customCheckboxInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customCheckboxInline1">Usa</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" id="customCheckboxInline2" name="customCheckboxInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customCheckboxInline2">Uk</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" id="customCheckboxInline3" name="customCheckboxInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customCheckboxInline3">In</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" id="customCheckboxInline4" name="customCheckboxInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customCheckboxInline4">EU</label>
                            </div>
                            {{-- search bar --}}
                            <div class="mt-3">
                                <p>Product Name</p>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search Product By Product Name" aria-label="Recipient's username" aria-describedby="button-addon-group">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button" id="button-addon-group">Search</button>
                                </div>
                            </div>
                            <div class="row">
                                 <!-- Start col -->
                                <div class="col-lg-12">
                                    <div class="card m-b-30">
                                        <div class="card-header">
                                            <!-- <h5 class="card-title">Product Data List</h5> -->
                                        </div>
                                        <div class="import_data"></div>
                                        <!-- <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="default-datatable_length" class="table table-striped table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th>Q/A</th>
                                                        <th>Top reviews</th>
                                                        <th>cupon</th>
                                                        <th>Rating</th>
                                                        <th>Demand</th>
                                                        
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                     <tr>
                                                        <td>Tiger Nixon</td>
                                                        <td>System Architect</td>
                                                        <td>Edinburgh</td>
                                                        <td>61</td>
                                                        <td>2011/04/25</td>
                                                        <td>$320,800</td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td>Herrod Chandler</td>
                                                        <td>Sales Assistant</td>
                                                        <td>San Francisco</td>
                                                        <td>59</td>
                                                        <td>2012/08/06</td>
                                                        <td>$137,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rhona Davidson</td>
                                                        <td>Integration Specialist</td>
                                                        <td>Tokyo</td>
                                                        <td>55</td>
                                                        <td>2010/10/14</td>
                                                        <td>$327,900</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Colleen Hurst</td>
                                                        <td>Javascript Developer</td>
                                                        <td>San Francisco</td>
                                                        <td>39</td>
                                                        <td>2009/09/15</td>
                                                        <td>$205,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sonya Frost</td>
                                                        <td>Software Engineer</td>
                                                        <td>Edinburgh</td>
                                                        <td>23</td>
                                                        <td>2008/12/13</td>
                                                        <td>$103,600</td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td>Michael Silva</td>
                                                        <td>Marketing Designer</td>
                                                        <td>London</td>
                                                        <td>66</td>
                                                        <td>2012/11/27</td>
                                                        <td>$198,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Paul Byrd</td>
                                                        <td>Chief Financial Officer (CFO)</td>
                                                        <td>New York</td>
                                                        <td>64</td>
                                                        <td>2010/06/09</td>
                                                        <td>$725,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gloria Little</td>
                                                        <td>Systems Administrator</td>
                                                        <td>New York</td>
                                                        <td>59</td>
                                                        <td>2009/04/10</td>
                                                        <td>$237,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bradley Greer</td>
                                                        <td>Software Engineer</td>
                                                        <td>London</td>
                                                        <td>41</td>
                                                        <td>2012/10/13</td>
                                                        <td>$132,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dai Rios</td>
                                                        <td>Personnel Lead</td>
                                                        <td>Edinburgh</td>
                                                        <td>35</td>
                                                        <td>2012/09/26</td>
                                                        <td>$217,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jenette Caldwell</td>
                                                        <td>Development Lead</td>
                                                        <td>New York</td>
                                                        <td>30</td>
                                                        <td>2011/09/03</td>
                                                        <td>$345,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Yuri Berry</td>
                                                        <td>Chief Marketing Officer (CMO)</td>
                                                        <td>New York</td>
                                                        <td>40</td>
                                                        <td>2009/06/25</td>
                                                        <td>$675,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Caesar Vance</td>
                                                        <td>Pre-Sales Support</td>
                                                        <td>New York</td>
                                                        <td>21</td>
                                                        <td>2011/12/12</td>
                                                        <td>$106,450</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Doris Wilder</td>
                                                        <td>Sales Assistant</td>
                                                        <td>Sidney</td>
                                                        <td>23</td>
                                                        <td>2010/09/20</td>
                                                        <td>$85,600</td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td>Prescott Bartlett</td>
                                                        <td>Technical Author</td>
                                                        <td>London</td>
                                                        <td>27</td>
                                                        <td>2011/05/07</td>
                                                        <td>$145,000</td>
                                                    </tr>
                                                 
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                                <!-- End col -->    
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        
    </div>
    <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection 
@section('script')
<!-- Datatable js -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-table-datatable.js') }}"></script>
<script src="{{ asset('assets/js/product_js/productimport.js') }}"></script>
{{-- ajax code for get category --}}
<script>
    $('.country').change(function (){
        let country = $(this).val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
        });
        $.ajax({
            url:'/getcategory',
            type:'POST',
            data:{'country':country},
            success:function(data){
                $('#formControlSelect').html(data);
                //alert(data)
            }
        });
    });
</script>

@endsection 