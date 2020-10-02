@extends('admin.layout.app')
@section('content')

<body class="sb-nav-fixed"> 
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h2 class="mt-30 page-title">Products</h2>
                    <ol class="breadcrumb mb-30">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="products.html">Products</a></li>
                        <li class="breadcrumb-item active">Add Product</li>
                    </ol>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card card-static-2 mb-30">
                                <div class="card-title-1">
                                    <h4>Add New Product</h4>
                                </div>
                                <div class="card-body-table">
                                    <div class="news-content-right pd-20">
                                        <h3 style="text-decoration: underline;">Product Basic Details</h3>
                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-8">
                                                <div class="form-group">
                                                    <label class="form-label"><b>Product Name</b></label>
                                                    <input type="text" class="form-control" placeholder="Add Product Name" name="Product1">
                                                </div>
                                            </div>
                                            <div class="col-sm-1">
                                                <!-- Default checked -->
                                                <div class="custom-control custom-switch" style="margin-top: 35px;">
                                                    <input type="checkbox" class="custom-control-input" id="customSwitch1" name="virtual">
                                                    <label class="custom-control-label" for="customSwitch1">Virtuals</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <!-- Default switch -->
                                                <div class="custom-control custom-switch" style="margin-top:35px">
                                                    <input type="checkbox" class="custom-control-input" id="customSwitches" name="down">
                                                    <label class="custom-control-label" for="customSwitches">Downloadable</label>
                                                </div>
                                            </div>



                                        </div>

                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label class="form-label"><b>Highlights</b></label>
                                                    <textarea class="form-control " rows="2 " placeholder="Enter Highlights " name="Product2 " id="highlights "></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-12">
                                                <div class="form-group ">
                                                    <label class="form-label"><b>Short Discription</b></label>
                                                    <textarea class="form-control " rows="3 " placeholder="Enter Description " name="Product3 " id="s_desc "></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-12">
                                                <div class="form-group ">
                                                    <label class="form-label"><b>Long Discription</b></label>
                                                    <textarea class="form-control " rows="5 " placeholder="Enter Description " name="Product4 " id="l_desc "></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-12">
                                                <div class="form-group ">
                                                    <label class="form-label"><b>Specifications</b></label>
                                                    <textarea class="form-control " rows="4 " placeholder="Enter Specifications " name="Product5 " id="speci "></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-12">
                                                <div class="form-group ">
                                                    <label class="form-label"><b>Providers</b></label>
                                                    <input type="text " class="form-control " placeholder="Enter Provider Code " name="Product6 " id="pro ">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Weights</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter Weight (e.g.:30 Kg)" name="Product7" id="weight">
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label"><b>Sizes</b></label>
                                                    <select class="form-control" name="Product8">
                                                        <option>XS (Extra Small)</option>
                                                        <option>S (Small)</option>
                                                        <option>M (Medium)</option>
                                                        <option>L (Large)</option>
                                                        <option>XL (Extra Large)</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Dimensions</b></label>
                                                    <input type="text" class="form-control" placeholder="Length-Bregth-height (e.g.:12cm-4cm-7cm)" name="Product9" id="dimension">
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Category ID</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter ID" name="Product10" id="Category_ID">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Varient ID</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter ID" name="Product11" id="v_id">
                                                </div>
                                            </div>
                                        </div>

                                        <hr>
                                        <h3 style="text-decoration: underline;">Pricing and Tax</h3>
                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Regular Price</b></label>
                                                    <div class="input-group mb-6">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fas fa-rupee-sign"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Enter Price" name="Product12">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Sales Price</b></label>
                                                    <div class="input-group mb-6">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fas fa-rupee-sign"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Enter Price" name="Product13">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Tax Class</b></label>
                                                    <div class="input-group mb-6">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fas fa-rupee-sign"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Enter Tax Class" name="Product14">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Shipping Class</b></label>
                                                    <div class="input-group mb-6">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fas fa-rupee-sign"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Enter Shipping Class" name="Product15">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>
                                        <h3 style="text-decoration: underline;">Vendor And Stock Details</h3>
                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-3">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>SKU</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter SKU" name="Product16" id="sku">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Vendor ID</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter ID" name="Product17" id="vendor">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Stock</b></label>
                                                    <input type="number" class="form-control" placeholder="Enter stock" name="Product18" id="stock">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Stock Alert</b></label>
                                                    <input type="number" class="form-control" placeholder="Enter Stock Alert" name="Product19" id="s_alert">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label class="form-label"><b>Back-Order Options</b></label>
                                                    <select class="form-control" name="Product20">
                                                        <option>option 1</option>
                                                        <option>option 2</option>
                                                        <option>option 3</option>
                                                        <option>option 4</option>
                                                        <option>option 5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Max Number of order in bulk</b></label>
                                                    <input type="number" class="form-control" placeholder="Enter Number of Orders" name="Product21" id="bulk">
                                                </div>
                                            </div>
                                        </div>

                                        <hr>
                                        <h3 style="text-decoration: underline">SEO</h3>
                                        <div class="row" style="margin-bottom:1%">

                                            <div class="col-sm-12">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Tags</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter Tags" name="Product22" id="tag">
                                                </div>
                                            </div>

                                        </div>
                                        <button class="save-btn hover-btn " type="submit ">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>   
</body>

@endsection