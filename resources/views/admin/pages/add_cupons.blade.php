@extends('admin.layout.app')
@section('content')

<body class="sb-nav-fixed">
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h2 class="mt-30 page-title">Cupons</h2>
                    <ol class="breadcrumb mb-30">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="offers.html">Cupons</a></li>
                        <li class="breadcrumb-item active">Add Cupons</li>
                    </ol>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card card-static-2 mb-30">
                                <div class="card-title-1">
                                    <h4>Add Cupons</h4>
                                </div>
                                <div class="card-body-table">
                                    <div class="news-content-right pd-20">
                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-4">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Cupon ID</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter ID" name="cid">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>User Code</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter User Code" name="user">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Product Code</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter Product Code" name="p_code">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-4">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Price Range</b> </label>
                                                    <input type="text" class="form-control" placeholder="Enter Price Range" name="Price_range">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Usage Limit</b> </label>
                                                    <input type="text" class="form-control" placeholder="Enter Usage Limit" name="usage_limit">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-12">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Product Description</b></label>
                                                    <textarea class="form-control" rows="5" placeholder="Enter Product Description" name="desc"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-12">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Properties</b> </label>
                                                    <input type="text" class="form-control" placeholder="Enter Properties" name="properties">
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