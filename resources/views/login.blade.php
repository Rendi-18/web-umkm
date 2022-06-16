@extends('Layouts.login')
@section('content')
    <!-- Navbar-->
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light py-3">
            <div class="container">
                <!-- Navbar Brand -->
                <a href="#" class="navbar-brand">
                    <h1 class="comp-name">SIBADU</h1>
                </a>
            </div>
        </nav>
    </header>


    <div class="container">
        <div class="row py-5 mt-4 align-items-center">
            <!-- For Demo Purpose -->
            <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
                <img src="public\img\illustrasion-regist.svg" alt="" class="img-fluid mb-3 d-none d-md-block">
                <h1>Create an Account</h1>
                <p class="font-italic text-muted mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dolorum
                    porro magni incidunt beatae delectus saepe, laboriosam non perferendis nam odio earum perspiciatis,
                    quibusdam placeat sapiente, atque architecto similique voluptatum.</p>

            </div>

            <!-- Registeration Form -->
            <div class="col-md-7 col-lg-6 ml-auto">

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <form action="#" class="">
                            <div class="row">

                                <!-- Email Address -->
                                <div class=" col-lg-12 mb-4">
                                    <div class="shadow-in-log input-group">
                                        <div class="bx_ic input-group-prepend">
                                            <span class="input-group-text bg-white px-4  border-0">
                                                <i class="fa fa-envelope text-muted"></i>
                                            </span>
                                        </div>
                                        <input id="email" type="email" name="email" placeholder="Email Address"
                                            class="form-control bg-white border-0 ">
                                    </div>
                                </div>

                                <!-- Password -->
                                <div class="col-lg-12 mb-4">
                                    <div class="shadow-in-log input-group">
                                        <div class="bx_ic input-group-prepend">
                                            <span class="input-group-text bg-white px-4  border-0">
                                                <i class="fa fa-lock text-muted"></i>
                                            </span>
                                        </div>
                                        <input id="password" type="password" name="password" placeholder="Password"
                                            class="form-control bg-white border-0 ">
                                    </div>

                                </div>



                                <!-- Submit Button -->
                                <div class="form-group col-lg-12 mx-auto mb-0">
                                    <a href="#" class="btn btn-submit btn-primary btn-block py-2 border-0">
                                        <span class="font-weight-bold">LOGIN</span>
                                    </a>
                                </div>

                                <!-- Dont have an account -->
                                <div class="text-center w-100">
                                    <p class="text-muted font-weight-bold">Dont have an account <a
                                            class="text-primary ml-2 btr" id="pills-profile-tab" data-toggle="pill"
                                            href="#pills-profile" role="tab" aria-controls="pills-profile"
                                            aria-selected="false">Register</a></p>
                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <form action="#" class="">
                            <div class="row">

                                <!-- First Name -->
                                <div class="col-lg-6 mb-4">
                                    <div class="shadow-in-log input-group">
                                        <div class="bx_ic input-group-prepend">
                                            <span class="input-group-text bg-white px-4 border-0">
                                                <i class="fa fa-user text-muted"></i>
                                            </span>
                                        </div>
                                        <input id="firstName" type="text" name="firstname" placeholder="First Name"
                                            class="border-0 form-control bg-white border-0 ">
                                    </div>
                                </div>

                                <!-- Last Name -->
                                <div class=" col-lg-6 mb-4">
                                    <div class="shadow-in-log input-group">
                                        <div class=" input-group-prepend">
                                            <span class="input-group-text bg-white px-4  border-0">
                                                <i class="fa fa-user text-muted"></i>
                                            </span>
                                        </div>
                                        <input id="lastName" type="text" name="lastname" placeholder="Last Name"
                                            class="form-control bg-white border-0 ">
                                    </div>
                                </div>

                                <!-- Email Address -->
                                <div class=" col-lg-12 mb-4">
                                    <div class="shadow-in-log input-group">
                                        <div class="bx_ic input-group-prepend">
                                            <span class="input-group-text bg-white px-4  border-0">
                                                <i class="fa fa-envelope text-muted"></i>
                                            </span>
                                        </div>
                                        <input id="email" type="email" name="email" placeholder="Email Address"
                                            class="form-control bg-white border-0 ">
                                    </div>
                                </div>

                                <!-- Phone Number -->
                                <div class="col-lg-12 mb-4">
                                    <div class="shadow-in-log input-group">
                                        <div class="bx_ic input-group-prepend">
                                            <span class="input-group-text bg-white px-4 border-0">
                                                <i class="fa fa-phone-square text-muted"></i>
                                            </span>
                                        </div>

                                        <input id="phoneNumber" type="tel" name="phone" placeholder="Phone Number"
                                            class="form-control bg-white  border-0">
                                    </div>
                                </div>

                                <!-- Password -->
                                <div class="input-group col-lg-6 mb-4">
                                    <div class="shadow-in-log input-group">
                                        <div class="bx_ic input-group-prepend">
                                            <span class="input-group-text bg-white px-4  border-0">
                                                <i class="fa fa-lock text-muted"></i>
                                            </span>
                                        </div>
                                        <input id="password" type="password" name="password" placeholder="Password"
                                            class="form-control bg-white border-0 ">
                                    </div>

                                </div>

                                <!-- Password Confirmation -->
                                <div class="input-group col-lg-6 mb-4">
                                    <div class="shadow-in-log input-group">
                                        <div class="bx_ic input-group-prepend">
                                            <span class="input-group-text bg-white px-4  border-0">
                                                <i class="fa fa-lock text-muted"></i>
                                            </span>
                                        </div>
                                        <input id="passwordConfirmation" type="text" name="passwordConfirmation"
                                            placeholder="Confirm Password" class="form-control bg-white border-0 ">
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="form-group col-lg-12 mx-auto mb-0">
                                    <a href="#" class="btn btn-submit btn-primary btn-block py-2 border-0">
                                        <span class="font-weight-bold">Register</span>
                                    </a>
                                </div>

                                <!-- Already Registered -->
                                <div class="text-center w-100">
                                    <p class="text-muted font-weight-bold">Already Registered?
                                        <a class="text-primary ml-2 btl" id="pills-home-tab" data-toggle="pill"
                                            href="#pills-home" role="tab" aria-controls="pills-home"
                                            aria-selected="true">Login</a>
                                    </p>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
