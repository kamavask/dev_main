@extends('admin.layout.app')
@section('content')

<body class="sb-nav-fixed">
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h2 class="mt-30 page-title">Services</h2>
                    <ol class="breadcrumb mb-30">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="areas.html">Services</a></li>
                        <li class="breadcrumb-item active">Add Services</li>
                    </ol>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card card-static-2 mb-30">
                                <div class="card-title-1">
                                    <h4>Add Category</h4>
                                </div>
                                <div class="card-body-table">
                                    <div class="news-content-right pd-20">
                                        <h3 style="text-decoration: underline;">Services' Details</h3>
                                        <div class="row" style="margin-bottom:1%">

                                            <div class="col-sm-12">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Service name</b></label>
                                                    <input type="text" class="form-control" placeholder="Service Name" id="Service_name" name="service_name">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row" style="margin-bottom:1%">

                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Providers</b></label>
                                                    <input type="text" class="form-control" placeholder="Providers" name="providers" id="Providers">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Category ID</b></label>
                                                    <input type="text" class="form-control" placeholder="Category ID" name="category_ID" id="Category_ID">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-12">
                                                <!-- textarea -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Short Description</b></label>
                                                    <textarea class="form-control" rows="3" placeholder="Short Discription..." id="Short_desc" name="short_desc"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-12">
                                                <!-- textarea -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Long Description</b></label>
                                                    <textarea class="form-control" rows="5" placeholder="Long Discription..." id="Long_desc" name="long_desc"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-12">
                                                <!-- textarea -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Specification</b></label>
                                                    <textarea class="form-control" rows="5" id="speci" placeholder="Specification..." name="speci"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-12">
                                                <!-- textarea -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Highlights</b></label>
                                                    <textarea class="form-control" rows="2" id="highlights" placeholder="Highlights..." name="high"></textarea>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row" style="margin-bottom:1%">

                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Start Time</b></label>
                                                    <input type="text" class="form-control" placeholder="Title" id="Start_Time" name="startime">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>End Time</b></label>
                                                    <input type="text" class="form-control" placeholder="Title" name="endtime">
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