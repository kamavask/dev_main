@extends('admin.layout.app')
@section('content')

<body class="sb-nav-fixed">
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h2 class="mt-30 page-title">Categories</h2>
                    <ol class="breadcrumb mb-30">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="category.html">Categories</a></li>
                        <li class="breadcrumb-item active">Add Category</li>
                    </ol>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card card-static-2 mb-30">
                                <div class="card-title-1">
                                    <h4>Add Category</h4>
                                </div>
                                <div class="card-body-table">
                                    <div class="news-content-right pd-20">
                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-4">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Category Name</b></label>
                                                    <input type="text" class="form-control" placeholder="Category Name" name="category_name">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <!-- select -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Category Type</b></label>
                                                    <select class="form-control" name="category_type">
                        					 				<option>Product</option>
                        					 				<option>Service</option>
                        					 			</select>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <!-- select -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Parent Category</b></label>
                                                    <br>
                                                    <input list="browsers" class="form-control" name="parent_category" id="browser">
                                                    <datalist id="browsers">
                        					 				<option value="Edge">
                        					 				<option value="Firefox">
                        					 				<option value="Chrome">
                        					 				<option value="Opera">
                        					 				<option value="Safari">
                        					 			</datalist>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-12">
                                                <div class="form-group ">
                                                    <label class="form-label"><b>Category Discription</b></label>
                                                    <textarea class="form-control " rows="3 " placeholder="Enter Description " name="Product3 " id="category_desc "></textarea>
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
            

