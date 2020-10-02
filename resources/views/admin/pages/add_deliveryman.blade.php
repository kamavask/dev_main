@extends('admin.layout.app')
@section('content')

<body class="sb-nav-fixed">
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h2 class="mt-30 page-title">Deliveryman</h2>
                    <ol class="breadcrumb mb-30">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="shops.html">Shops</a></li>
                        <li class="breadcrumb-item active">Add Deliveryman</li>
                    </ol>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card card-static-2 mb-30">
                                <div class="card-title-1">
                                    <h4>Add Deliveryman</h4>
                                </div>
                                <div class="card-body-table">
                                    <div class="news-content-right pd-20">
                                        <h3 style="text-decoration: underline;">Deliveryman Basic Details</h3>
                                        <div class="row" style="margin-bottom:1%">

                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>First Name</b></label>
                                                    <input type="text" class="form-control" placeholder="First Name" name="first_name">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Last Name</b></label>
                                                    <input type="text" class="form-control" placeholder="Last Name" name="last_name">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label"><b>Email</b></label>
                                                    <div class="input-group mb-6">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                     class="fas fa-envelope"></i></span>
                                                        </div>
                                                        <input type="email" class="form-control" placeholder="Enter EMAIL" name="email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Password</b></label>
                                                    <div class="input-group mb-6">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                     class="fas fa-key"></i></span>
                                                        </div>
                                                        <input type="password" class="form-control" placeholder="Enter Password" name="password">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlFile1" class="form-label"><b>Put
                                                            Image</b></label>
                                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="put_image">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Mobile Number</b></label>
                                                    <div class="input-group mb-6">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                     class="fas fa-mobile"></i></span>
                                                        </div>
                                                        <input type="tel" class="form-control" placeholder="Enter Mobile Number" name="number">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-12">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Employee Address</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter Employee Address" name="employee_address">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>DOB</b></label>
                                                    <input type="date" class="form-control" placeholder="yyyy-mm-dd" name="dob">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Adhaar-Number</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter Aadhar Number" name="adhaar">
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <h3 style="text-decoration: underline;">Vehicles Detail</h3>
                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Vehicle 1</b></label>
                                                    <input type="text" class="form-control" placeholder="Shop Name" name="v1">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Vehicle 2</b></label>
                                                    <input type="number" class="form-control" placeholder="Orders completed" name="v2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Orders Completed</b></label>
                                                    <input type="number" class="form-control" placeholder="Orders completed" name="order">
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