<!DOCTYPE html>
<html lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ODIRS e-TCC Portal</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="shortcut icon" href="../img/bir_logo.png" />

    </head>
    <body>
        <!-- Content-wrapper -->
        <div class="content-wrapper">
            <!-- Container -->
            <!-- <div class="bg-danger pt-2 mb-0"></div> -->

            <!-- nav -->
            <nav class="navbar navbar-expand-sm bg-danger navbar-dark
                header sticky-top">
                <div class="container">
                    <a href="index.html" class="navbar-brand"
                        style="font-family: cursive;">
                        ODIRS <span class="text-light">e-TCC Portal</span>
                    </a>
                    <button class="navbar-toggler" data-toggle="collapse"
                        data-target="#navbar-collapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar-collapse">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="" class="nav-link" data-toggle="modal"
                                    data-target="#tccVerificationFormModal">Verify
                                    TCC</a>
                            </li>

                            <li class="nav-item">
                                <a href="" class="nav-link" data-toggle="modal"
                                    data-target="#">Apply
                                    for
                                    TCC</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link" data-toggle="modal"
                                    data-target="#odtinFormModal">Apply
                                    for
                                    ODTIN</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Download TCC</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Visit Web Site</a>
                            </li>

                        </ul>
                    </div>
                    <!-- End container -->
                </div>
                <!-- End nav -->
            </nav>
            <div id="main-content">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-md-8">

                            <h3 id="show-case" class="text-danger display-5">
                                <img src="../img/bir_logo.png" alt="" width="50px"
                                    height="50px">
                                ODIRS TCC
                                Verification Portal
                            </h3>
                            <div class="alert alert-success mb-5 py-2
                                rounded-0" role="alert" style="background:
                                none;">
                                <b>WELCOME TO TCC PORTAL</b>
                                <p>This is the official verification page of
                                    <span><b>Ondo State
                                            Internal Revenue Service (ODIRS)
                                            e-TCC Portal</b></span>. Kindly
                                    contact us
                                    for futher
                                    assistance. Thank you for your patronage.<br>
                                    <b>Mr.Tolu Adegbie</b><br>
                                    The Executive Chairman (ODIRS)
                                </p>

                            </div>
                            <div class="row">
                                <div class="col-md-4 text-center mb-5">
                                    <h4>Verify TCC</h4>
                                    <p>Kindly Click here to verify and
                                        authenticate your TCC.</p>
                                    <a id="tccModalBtn" class="btn btn-danger"
                                        href=""
                                        data-toggle="modal"
                                        data-target="#tccVerificationFormModal">Verify
                                        TCC</a>

                                </div>

                                <div class="col-md-4 text-center mb-5">
                                    <h4>Apply For TIN</h4>
                                    <p>Please, do not re-apply for TIN if you
                                        have alredy gotten one.</p>
                                    <a id="odtinModalBtn" class="btn btn-info"
                                        href=""
                                        data-toggle="modal"
                                        data-target="#odtinFormModal">Apply For
                                        TIN</a>
                                </div>

                                <div class="col-md-4 text-center mb-5">
                                    <h4>Download TCC</h4>
                                    <p>Click on the download button to download
                                        your TCC</p>
                                    <a class="btn btn-secondary" href="">Download
                                        TCC</a>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3 offset-1 p-4 pt-3 border bg-light
                            login_wrapper">
                            <h3>Login</h3>
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">OD-TIN/JTB-TIN
                                    </label>
                                    <input type="email" class="form-control"
                                        id="exampleInputEmail1"
                                        aria-describedby="emailHelp"
                                        placeholder="Enter your TIN">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control"
                                        id="exampleInputPassword1"
                                        placeholder="Enter your password">
                                </div>

                                <div class="text-right">
                                    <button type="submit" class="btn
                                        btn-primary">Clear</button>
                                    <button type="submit" class="btn
                                        btn-primary">Submit</button>
                                </div>
                                <p class="mt-2" style="font-style: italic;">Note:
                                    After a successful application of the Tax
                                    Clearance Certificate, your credentials and
                                    relevant documents will be sent to your email.
									Use this information to login here </p>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- ODTIN form modal -->
                <div class="modal fade" id="odtinFormModal"
                    tabindex="-1"
                    role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document" style="max-width:
                        1100px;">
                        <div class="modal-content">
                            <div class="modal-header bg-light">
                                <h5 class="modal-title" id="exampleModalLabel">Application
                                    for
                                    ODTIN</h5>
                                <button type="button" class="close"
                                    data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div id="odtinFormContainer"
                                    class="">
                                    <p class="mt-2 p-2">Please fill out
                                        the form
                                        to apply for ODTIN if your have already
                                        applied and your ODTIN is ready it will
                                        return a result containing your ODTIN.
                                        all field with
                                        <span class="text-danger">*</span>
                                        are mandatory</p>
                                    <form name="odtinApplicationForm"
                                        id="odtin-application-form">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="custom-control
                                                    custom-radio
                                                    custom-control-inline">
                                                    <input type="radio"
                                                        id="IndividualCustomRadio"
                                                        name="customRadio"
                                                        class="custom-control-input"
                                                        required>
                                                    <label
                                                        class="custom-control-label"
                                                        for="IndividualCustomRadio">
                                                        I am an Individual
                                                        applicant</label>
                                                </div>
                                            </div>
                                            <!--div class="col-md-6">
                                                <div class="custom-control
                                                    custom-radio
                                                    custom-control-inline">
                                                    <input type="radio"
                                                        id="OrgganisationCustomRadio"
                                                        name="customRadio"
                                                        class="custom-control-input"
                                                        required>
                                                    <label
                                                        class="custom-control-label"
                                                        for="OrgganisationCustomRadio">Or
                                                        I am an Organisation
                                                        applicant</label>
                                                </div>
                                            </div-->

                                        </div><br>

                                        <div class="row mb-3 mt-2"
                                            id="individualRow"
                                            style="display: none;">
                                            <div class="col-md-4">
                                                <div class="form-group row">
                                                    <label for="firstname"
                                                        class="col-sm-4
                                                        col-form-label">First
                                                        Name </label>
                                                    <div class="col-sm-8">
                                                        <input
                                                            placeholder="Enter  your firstname"
                                                            id="firstname"
                                                            class="form-control"
                                                            />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group row">
                                                    <label class="col-sm-4
                                                        col-form-label">Middle
                                                        Name</label>
                                                    <div class="col-sm-8">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            placeholder="Enter your middlename"
                                                            id="middlename"
                                                            />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group row">
                                                    <label class="col-sm-4
                                                        col-form-label">Last
                                                        Name <span
                                                            class="text-danger">*</span></label>
                                                    <div class="col-sm-8">
                                                        <input type="text"
                                                            class="form-control"
                                                            placeholder="Enter  your last name"
                                                            id="lastname"
                                                            />
                                                        <div
                                                            class="invalid-feedback">
                                                            Please provide a
                                                            valid record.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Organisation data field start-->
                                        <!--div class="row mb-2"
                                            id="organisationRow" style="display:
                                            none;">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3
                                                        col-form-label">Organisation
                                                        Name <span
                                                            class="text-danger">*</span></label>
                                                    <div class="col-sm-9">
                                                        <input type="text"
                                                            class="form-control"
                                                            id="organisation-name"
                                                            placeholder="Enter the name of your organisation"
                                                            />
                                                        <div
                                                            class="invalid-feedback">
                                                            Please provide a
                                                            valid record.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3
                                                        col-form-label">Date of
                                                        Incorporation <span
                                                            class="text-danger">*</span></label>
                                                    <div class="col-sm-9">
                                                        <input
                                                            class="form-control"
                                                            placeholder="Pick the date of your company  registration"
                                                            id="doc" type="date"
                                                            />
                                                        <div
                                                            class="invalid-feedback">
                                                            Please provide a
                                                            valid record.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div-->

                                        <!-- Organisation data field ends here-->
                                        <!--div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3
                                                        col-form-label">Email
                                                        <span
                                                            class="text-danger">*</span></label>
                                                    <div class="col-sm-9">
                                                        <input type="text"
                                                            class="form-control"
                                                            id="email"
                                                            placeholder="E.g johnDoe@gmail.com"
                                                            required/>
                                                        <div
                                                            class="invalid-feedback">
                                                            Please provide a
                                                            valid record.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3
                                                        col-form-label">Phone
                                                        <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-sm-9">
                                                        <input
                                                            class="form-control"
                                                            placeholder="E.g 08090209020"
                                                            id="phone"
                                                            required
                                                            />
                                                        <div
                                                            class="invalid-feedback">
                                                            Please provide a
                                                            valid record.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3
                                                        col-form-label">Current
                                                        Address<span
                                                            class="text-danger">*</span></label>
                                                    <div class="col-sm-9">
                                                        <textarea
                                                            class="form-control"
                                                            id="address"
                                                            required>
                                                        </textarea>
                                                        <div
                                                            class="invalid-feedback">
                                                            Please provide a
                                                            valid record.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div-->


                                        </div><br>
                                        <div class="text-center">
                                            <button type="submit" id="odtinBtn"
                                                class="btn
                                                btn-primary">Submit</button>
                                            <button type="reset" class="btn
                                                btn-secondary">Reset</button>
                                        </div>
                                    </form>
                                </div>

                                <div id="odtinResultContainer"
                                    style="display: none;">
                                    <p class="mt-2" id="odtin-msg-returned">
                                    </p>
                                    <ul class="tcc-navbar-nav">
                                        <li class="py-2">OD TIN: <span
                                                class="text-success"
                                                id="odtin-returned"><strong>Null</strong></span></li>
                                        <li class="py-2"> Name:
                                            <span
                                                class="text-success"
                                                id="name-returned"><strong>null</strong></span></li>
                                        <li class="py-2">Email Address: <span
                                                class="text-success"
                                                id="email-returned"><strong>Null</strong></span>
                                        </li>
                                        <li class="py-2">Phone Number
                                            <span
                                                class="text-success"
                                                id="phone-returned"><strong>null</strong></span></li>
                                    </ul>
                                    <div id="reg-success-box" class="col-md-12
                                        btn btn-success" style="display:none">
                                        <span id="odtin-reg-success"></span>
                                    </div>

                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-dismiss="modal">Close</button>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End OdTIN form modal -->

                <!-- Verification form modal -->
                <div class="modal fade" id="tccVerificationFormModal"
                    tabindex="-1"
                    role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document" style="max-width:
                        700px;">
                        <div class="modal-content">
                            <div class="modal-header bg-light">
                                <h5 class="modal-title" id="exampleModalLabel">TCC
                                    Verification</h5>
                                <button type="button" class="close"
                                    data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h4>Search TCC</h4>
                                <div id="tccVerificationFormContainer"
                                    class="">
                                    <p class="mt-2">Please fill out the form
                                        and click on the search button to verify
                                        your TCC</p>
                                    <form id="tcc-verification-form">
                                        <!-- <div class="form-group row">
                                            <label for="staticEmail"
                                                class="col-sm-3
                                                col-form-label">TIN</label>
                                            <div class="col-sm-8">
                                                <input type="text"
                                                    class="form-control"
                                                    id="odtin"
                                                    placeholder="Provide ODTIN"
                                                    required>
                                            </div>
                                        </div> -->
                                        <div class="form-group row">
                                            <label for="inputPassword"
                                                class="col-sm-3 col-form-label">TCC
                                                Number</label>
                                            <div class="col-sm-8">
                                                <input type="text"
                                                    class="form-control"
                                                    id="tccno"
                                                    placeholder="TCC Number"
                                                    required>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn
                                            btn-primary">Verify
                                            TCC</button>
                                    </form>
                                </div>

                                <div id="tccVerificationResultContainer"
                                    style="display: none;">
                                    <p class="mt-2" id="cert-msg">
                                        This Tax Clearance Certificate is valid
                                        and generated by ODIRS with the
                                        following entries
                                    </p>
                                    <ul class="tcc-navbar-nav">
                                        <li class="py-2">TIN: <span
                                                class="text-success" id="odTin"><strong>Null</strong></span></li>
                                        <li class="py-2"> Certicate
                                            Number:
                                            <span
                                                class="text-success"
                                                id="application-number"><strong>null</strong></span></li>
                                        <li class="py-2">Applicant Name: <span
                                                class="text-success" id="name"><strong>Null</strong></span>
                                        </li>
                                        <li class="py-2">Registration Date:
                                            <span
                                                class="text-success"
                                                id="dateReg"><strong>null</strong></span></li>
                                        <li class="py-2">Expiring Date:

                                            <span
                                                class="text-success"
                                                id="dateExp"><strong>null</strong></span></li>
                                    </ul>

                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-dismiss="modal">Close</button>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End verification form modal -->
                <!-- End main-content -->
                <footer class="p-3 mt-4 border-top mb-0 text-center text-muted"
                    style="font-size: 12px; font-weight: bold;">
                    Copyright © <span id="footer-year"></span> ODIRS. All rights
                    reserved.
                    System by ODIRS-ICT Unit
                </footer>


            </div>

            <!-- End content wrapper -->
        </div>
        <script src="js/jquery-3.4.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>