@extends('auth.reg')

@section('title', 'Register')

@section('content')
    <style>
        span.text-danger {
            font-size: 1.5rem;
            font-weight: 800;
        }
    </style>
    <div class="nk-block nk-block-middle nk-auth-body wide-xs" style="max-width: 1000px !important;">

        <div class="card card-bordered">
            <div class="row">
                <div class="col-12">
                    <div class="brand-logo pb-4 text-center mt-4">
                        <a href="html/index.html" class="logo-link">
                            {{-- <img class="logo-light logo-img logo-img-lg"
                                style="width: 125px !important;height: 125px !important;max-height: 125px !important;"
                                src="{{ asset('assets/images/logo.png') }}" srcset="{{ asset('assets/images/logo.png') }}"
                                alt="logo"> --}}
                            <img class="logo-dark logo-img logo-img-lg"
                                style="width: auto;height: 125px !important;max-height: 125px !important;"
                                src="{{ asset('assets/images/logo.png') }}" srcset="{{ asset('assets/images/logo.png') }}"
                                alt="logo-dark">
                        </a>
                    </div>
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h4 class="nk-block-title text-center">National Inland Waterways Authority
                                <br />Self Service Portal
                            </h4>
                            {{-- <div class="nk-block-des">
                            <p>Create New Dashlite Account</p>
                        </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <hr class="m-0">
            <form class="nk-stepper stepper-init is-alter nk-stepper-s1" action="{{ route('register') }}" method="POST"
                id="stepper-create-profile" enctype="multipart/form-data">
                @csrf

                <div class="row g-0 col-sep col-sep-md col-sep-xl">
                    <div class="col-md-12 col-xl-12">
                        <div class="card-inner">
                            <ul class="nk-stepper-nav nk-stepper-nav-s1 stepper-nav is-hr">
                                <li>
                                    <div class="step-item">
                                        <div class="step-text">
                                            <div class="lead-text">Area Office</div>
                                            <div class="sub-text">Select prefered area office</div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="step-item">
                                        <div class="step-text">
                                            <div class="lead-text">Contact Profile</div>
                                            <div class="sub-text">Enter the Contacts' info</div>
                                        </div>
                                    </div>
                                </li>
                                <li id="company_hide">
                                    <div class="step-item">
                                        <div class="step-text">
                                            <div class="lead-text" id="c1">NIN / Addresses</div>
                                            <div class="sub-text" id="c2">Provide NIN / Addresses</div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="step-item">
                                        <div class="step-text">
                                            <div class="lead-text">Password</div>
                                            <div class="sub-text">Set login password</div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="step-item">
                                        <div class="step-text">
                                            <div class="lead-text">Completed</div>
                                            <div class="sub-text">Review and Submit</div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-12 pl-5">
                        <div class="py-2">
                            <div class="tab-content">
                                <div class="tab-pane active" id="private">
                                    <div class="card-inner">
                                        <div class="nk-stepper-content">
                                            <div class="nk-stepper-steps stepper-steps">
                                                <div class="nk-stepper-step">
                                                    <ul class="row g-3" style="display: none;">
                                                        <li class="col-6">
                                                            <div
                                                                class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                                                <input type="radio" class="custom-control-input"
                                                                    name="employer_status" id="new_employer" value="new"
                                                                    checked required>
                                                                <label class="custom-control-label" for="new_employer">
                                                                    <span class="d-flex flex-column text-center px-sm-3">
                                                                        <em
                                                                            class="icon icon-circle icon-circle-lg bg-teal ni ni-briefcase"></em>
                                                                        {{-- <span class="lead-text mb-1 mt-3">New Employer</span> --}}
                                                                        <h4 class="">Pleasure</h4>
                                                                        <span class="sub-text">Class A</span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="col-6">
                                                            <div
                                                                class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                                                <input type="radio" class="custom-control-input"
                                                                    name="employer_status" id="old_employer" value="old"
                                                                    required>
                                                                <label class="custom-control-label" for="old_employer">
                                                                    <span class="d-flex flex-column text-center px-sm-3">
                                                                        <em
                                                                            class="icon icon-circle icon-circle-lg bg-orange ni ni-briefcase"></em>
                                                                        {{-- <span class="lead-text mb-1 mt-3">Old Employer</span> --}}
                                                                        <h4 class="">Domestic</h4>
                                                                        <span class="sub-text">Class B</span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="col-6">
                                                            <div
                                                                class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                                                <input type="radio" class="custom-control-input"
                                                                    name="employer_status" id="new_employer1" value="new"
                                                                    required>
                                                                <label class="custom-control-label" for="new_employer1">
                                                                    <span class="d-flex flex-column text-center px-sm-3">
                                                                        <em
                                                                            class="icon icon-circle icon-circle-lg bg-blue ni ni-briefcase"></em>
                                                                        {{-- <span class="lead-text mb-1 mt-3">Old Employer</span> --}}
                                                                        <h4 class="">Community</h4>
                                                                        <span class="sub-text">Class C</span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="col-6">
                                                            <div
                                                                class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                                                <input type="radio" class="custom-control-input"
                                                                    name="employer_status" id="new_employer2"
                                                                    value="new" required>
                                                                <label class="custom-control-label" for="new_employer2">
                                                                    <span class="d-flex flex-column text-center px-sm-3">
                                                                        <em
                                                                            class="icon icon-circle icon-circle-lg bg-purple ni ni-briefcase"></em>
                                                                        {{-- <span class="lead-text mb-1 mt-3">Old Employer</span> --}}
                                                                        <h4 class="">Commercial</h4>
                                                                        <span class="sub-text">Class D</span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </li>

                                                    </ul>
                                                    <div class="row g-3 mt-1 will-hide d-none">
                                                        <div class="col-sm-8">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control"
                                                                        id="ecs_number" name="ecs_number"
                                                                        placeholder="Enter ECS Number" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <button type="button"
                                                                class="btn btn-info btn-block search-ecs">Search</button>
                                                        </div>
                                                        <div id="alert-div">
                                                            <div class="alert alert-info">
                                                                <strong>INFO:</strong>
                                                                <span>Provide an ECS Number to prepopulate your
                                                                    details!</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 mt-1 otp-div d-none">
                                                        <div class="col-sm-8">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="text" name="otp" id="otp"
                                                                        class="form-control" placeholder="Enter OTP here">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <button type="button"
                                                                class="btn btn-info btn-block verify-otp">Verify
                                                                OTP</button>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 mt-1">

                                                        <!-- EMPLOYER ID HIDDEN FIELD-->
                                                        <input type="hidden" name="employer_id" id="employer_id">

                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <h5 class="title mb-4">User Type</h5>
                                                                <label class="form-label" for="cp1-team-size">Select User
                                                                    Type<span class="text-danger">*</span></label>

                                                                <div class="card-group">
                                                                    <div class="card">
                                                                        <div class="card-body">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="radio" name="user_type"
                                                                                    id="privateRadio" value="private"
                                                                                    checked>
                                                                                <label class="form-check-label"
                                                                                    for="privateRadio">Private</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="card">
                                                                        <div class="card-body">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="radio" name="user_type"
                                                                                    id="companyRadio" value="company">
                                                                                <label class="form-check-label"
                                                                                    for="companyRadio">Registered
                                                                                    Company</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="card">
                                                                        <div class="card-body">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="radio" name="user_type"
                                                                                    id="partnersRadio" value="partners">
                                                                                <label class="form-check-label"
                                                                                    for="partnersRadio">Partners/Investors</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <h5 class="title mb-4">Area Office</h5>
                                                                <label class="form-label" for="cp1-team-size">Select Area
                                                                    Office <span class="text-danger">*</span></label>
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select js-select2" id="branch_id"
                                                                        name="branch_id" data-placeholder="Select Branch"
                                                                        data-search="on" required>
                                                                        <option value=""></option>
                                                                        @foreach ($branches as $branch)
                                                                            <option
                                                                                value="{{ $branch->id ?? $branch->branch_id }}">
                                                                                {{ $branch->branch_name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            {{-- <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="company_email">Email
                                                                        Address <span class="text-danger">*</span></label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="email" class="form-control"
                                                                            id="company_email" name="company_email"
                                                                            placeholder="Email Address" required>
                                                                        <span id="email-error" class="text-danger"></span>
                                                                        <!-- Display error message here -->
                                                                    </div>
                                                                </div>
                                                            </div> --}}
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="nk-stepper-step">
                                                    <h5 class="title mb-4">Contact Profile</h5>
                                                    <div class="row g-3">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="contact_surname">Last
                                                                    Name <span class="text-danger">*</span></label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control"
                                                                        id="contact_surname" name="contact_surname"
                                                                        placeholder="Surname" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="contact_firstname">First
                                                                    Name <span class="text-danger">*</span></label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control"
                                                                        id="contact_firstname" name="contact_firstname"
                                                                        placeholder="First name" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="contact_name">Middle
                                                                    Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control"
                                                                        id="contact_middlename" name="contact_middlename"
                                                                        placeholder="Enter Middle name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="contact_position">Position
                                                                    <span class="text-danger">*</span></label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control"
                                                                        id="contact_position" name="contact_position"
                                                                        placeholder="Contact Company Position" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="company_phone">Contact
                                                                    Phone <span class="text-danger">*</span></label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control"
                                                                        id="company_phone" name="company_phone"
                                                                        placeholder="Enter Contact Phone" required
                                                                        pattern="\d+">
                                                                    <span id="phone-error" class="text-danger"></span>
                                                                    <!-- Display error message here -->

                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                
                                                <div class="nk-stepper-step" id="company_hide-content">
                                                    <div class="" id="company_hide-content1">
                                                        <h5 class="title mb-3" id="comp">NIN / Personal Address</h5>
                                                        <div class="row g-3">
                                                            <div class="col-sm-6" id="contact_number-hide">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="contact_number">NIN <span
                                                                            class="text-danger">*</span></label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="contact_number" name="contact_number"
                                                                            placeholder="Enter Contact NIN" required
                                                                            pattern="\d+">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6" id="personal_address-hide">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="personal_address">Personal
                                                                        Address <span class="text-danger">*</span></label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="personal_address" name="personal_address"
                                                                            placeholder="Personal Address" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                        </div>     
                                                    </div>
                                                 <div id="company_hide-content2" style="display: none;">
                                                    <h5 class="title mb-3" id="comp">Company Details</h5>
                                                    <div class="row g-3">
                                                        <div class="col-sm-6" id="company_name1">
                                                            <div class="form-group">
                                                                <label class="form-label" for="company_name">Company
                                                                    Name <span class="text-danger">*</span></label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control"
                                                                        id="company_name" name="company_name"
                                                                        placeholder="Enter Company Name" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-sm-6" id="company_rcnumber1">
                                                            <div class="form-group">
                                                                <label class="form-label" for="company_rcnumber">RC
                                                                    Number </label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control"
                                                                        id="company_rcnumber" name="company_rcnumber"
                                                                        placeholder="RC Number" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6" id="cac_reg_year1">
                                                            <div class="form-group">
                                                                <label class="form-label" for="cac_reg_year">CAC
                                                                    Registration
                                                                    Date <span class="text-danger">*</span></label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text"
                                                                        class="form-control date-picker-alt"
                                                                        id="cac_reg_year" name="cac_reg_year"
                                                                        placeholder="yyyy-mm-dd"
                                                                        data-date-format="yyyy-mm-dd" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-sm-6" id="company_address1">
                                                            <div class="form-group">
                                                                <label class="form-label" for="company_address">Company
                                                                    Address <span class="text-danger">*</span></label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control"
                                                                        id="company_address" name="company_address"
                                                                        placeholder="Company Address" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6" id="company_state1">
                                                            <div class="form-group">
                                                                <label class="form-label" for="company_state">Company
                                                                    State <span class="text-danger">*</span></label>
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select js-select2"
                                                                        id="company_state" name="company_state"
                                                                        data-placeholder="Select Company State"
                                                                        data-search="on" >
                                                                        <option value=""></option>
                                                                        @foreach ($states as $state)
                                                                            <option value="{{ $state->id }}">
                                                                                {{ $state->name }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6" id="company_localgovt1">
                                                            <div class="form-group">
                                                                <label class="form-label" for="company_localgovt">Company
                                                                    LGA <span class="text-danger">*</span></label>
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select js-select2"
                                                                        id="company_localgovt" name="company_localgovt"
                                                                        data-placeholder="Select Company LGA"
                                                                        data-search="on" >
                                                                        <option value=""></option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                 </div>
                                                </div>
                                                    </div>
                                                
                                                <div class="nk-stepper-step">
                                                    <h5 class="title mb-3">Passwords</h5>
                                                    <p>Set account access.</p>
                                                    {{-- <div class="row g-3">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label"
                                                                    for="certificate_of_incorporation">Certification of
                                                                    Incorporation <span class="text-danger">(PDF
                                                                        only)*</span></label>
                                                                <div class="form-control-wrap">
                                                                    <input type="file" class="form-control"
                                                                        id="certificate_of_incorporation"
                                                                        name="certificate_of_incorporation"
                                                                        placeholder="Certificate of Incorporation"
                                                                        accept=".pdf" required>
                                                                    <small id="coi_error"
                                                                        class="help-block text-danger d-none">Uploaded file
                                                                        too
                                                                        large.</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="other_documents">Other
                                                                    Documents <span class="text-danger">(PDF
                                                                        only)*</span></label>
                                                                <div class="form-control-wrap">
                                                                    <input type="file" class="form-control"
                                                                        id="other_documents" accept=".pdf"
                                                                        name="other_documents"
                                                                        placeholder="Other Documents">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>  --}}
                                                    <hr>
                                                    <div class="row g-3">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="company_email">Email
                                                                    Address <span class="text-danger">*</span></label>
                                                                <div class="form-control-wrap">
                                                                    <input type="email" class="form-control"
                                                                        id="company_email" name="company_email"
                                                                        placeholder="Email Address" required>
                                                                    <span id="email-error" class="text-danger"></span>
                                                                    <!-- Display error message here -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                                    <div class="row g-3">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="cp1-card-number">New
                                                                    Password <span class="text-danger">*</span></label>
                                                                <div class="form-control-wrap">
                                                                    <input type="password" minlength="8" maxlength="12"
                                                                        class="form-control" id="password"
                                                                        name="password" placeholder="********" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label"
                                                                    for="password_confirmation">Confirm
                                                                    Password <span class="text-danger">*</span></label>
                                                                <div class="form-control-wrap">
                                                                    <input type="password" minlength="8" maxlength="12"
                                                                        class="form-control" id="password_confirmation"
                                                                        name="password_confirmation"
                                                                        placeholder="********" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-stepper-step text-center">
                                                    <h5 class="title mb-2">You Are Almost Done!</h5>
                                                    <p class="text-soft">Click submit to complete registration.</p>
                                                    <h6 id="cname"></h6>
                                                    <div class="gfx w-50 mx-auto">
                                                        <svg width="80%" viewBox="0 0 228 157" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_720_229)">
                                                                <path
                                                                    d="M201.738 149.692L201.257 132.76C200.862 132.55 200.591 132.144 200.578 131.675C200.566 130.985 201.134 130.418 201.837 130.406C201.948 130.406 202.059 130.418 202.17 130.455L225.557 106.573C225.482 106.412 225.445 106.24 225.433 106.055C225.433 105.784 225.519 105.537 225.668 105.328L191.631 60.631C191.977 60.4461 192.335 60.2736 192.692 60.0764L226.754 104.786C227.432 104.798 227.988 105.34 228 106.018C228.012 106.708 227.445 107.275 226.741 107.287C226.667 107.287 226.593 107.275 226.531 107.263L203.071 131.219C203.121 131.355 203.145 131.478 203.145 131.626C203.145 132.119 202.861 132.538 202.454 132.747L202.935 149.655L202.96 150.74L202.997 151.91C203.01 152.231 202.75 152.502 202.429 152.514C202.429 152.514 202.429 152.514 202.417 152.514C202.096 152.514 201.837 152.268 201.825 151.947L201.788 150.752L201.738 149.692Z"
                                                                    fill="#323B6E" />
                                                                <path
                                                                    d="M202.948 150.752C208.563 150.752 213.006 151.504 213.018 152.477C213.03 153.488 208.217 154.363 202.257 154.437C196.308 154.498 191.471 153.734 191.458 152.724C191.446 151.738 196.024 150.875 201.763 150.777L201.8 151.972C201.812 152.292 202.072 152.551 202.392 152.539H202.405C202.726 152.527 202.985 152.255 202.972 151.935L202.948 150.752Z"
                                                                    fill="#323B6E" />
                                                                <path
                                                                    d="M178.907 59.7439C181.783 64.1926 182.4 68.9002 180.29 70.2681C178.179 71.636 174.132 69.1343 171.256 64.6856C168.381 60.2368 167.764 55.5293 169.874 54.1614C171.984 52.7935 176.02 55.2952 178.907 59.7439Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M161.729 149.569L160.618 154.991C160.458 155.743 159.804 156.285 159.038 156.297L82.5366 157C81.9196 157.012 81.463 156.408 81.6481 155.817C81.8579 155.114 82.5119 154.634 83.2401 154.634L110.415 154.338L119.263 112.673C119.584 111.169 120.892 110.085 122.435 110.048L167.665 109.037C168.899 109.013 169.824 110.134 169.578 111.329L161.729 149.569Z"
                                                                    fill="#323B6E" />
                                                                <path
                                                                    d="M103.183 6.50673C103.38 7.93624 103.047 9.50131 102.011 10.5118C101.69 10.8199 101.295 11.0664 100.875 11.2143C99.925 11.547 98.839 11.4607 98.0862 10.8076V10.7953C98.6785 10.4995 99.1969 10.0559 99.5548 9.51364C100.48 8.14574 100.567 6.3835 100.295 4.75681C100.209 4.26387 100.085 3.77094 99.9003 3.31497C100.739 3.16709 101.616 3.54912 102.183 4.17761C102.763 4.79378 103.06 5.64409 103.183 6.50673Z"
                                                                    fill="#FEA77C" />
                                                                <path
                                                                    d="M91.7307 10.2284C92.2984 10.0928 92.8661 9.9203 93.3968 9.67383L93.4091 9.7108C93.3844 10.2284 93.1746 10.7336 92.8538 11.128C92.644 11.3868 92.3848 11.5963 92.0886 11.7565H92.0763C92.0392 11.2266 91.9158 10.7213 91.7307 10.2284Z"
                                                                    fill="#FEA77C" />
                                                                <path
                                                                    d="M96.7164 6.39595C96.8151 7.64061 96.7287 8.97154 96.0376 10.019C95.8278 10.3394 95.544 10.6106 95.2231 10.8324C94.5073 11.313 93.6065 11.4978 92.8537 11.1281C93.1869 10.7215 93.3843 10.2285 93.409 9.71095L93.3967 9.67397C93.8162 9.4768 94.2112 9.23033 94.5444 8.8976C95.2972 8.17052 95.6551 6.9505 95.1367 6.03857C94.964 5.74281 94.7048 5.49634 94.3716 5.4224C94.0754 5.36079 93.7669 5.45937 93.483 5.54564C93.1375 5.65655 92.8043 5.76746 92.4587 5.87837C92.1872 4.85553 91.8787 3.83269 91.2987 2.9454C90.8914 2.32923 90.3237 1.79933 89.6697 1.47892L89.682 1.44195C90.7187 0.554664 92.0515 -0.25868 93.3843 0.0494049C94.2729 0.246579 94.9269 0.875072 95.4082 1.66377C95.7291 2.16903 95.9636 2.74823 96.1364 3.3151C96.4325 4.32562 96.6423 5.36079 96.7164 6.39595Z"
                                                                    fill="#FEA77C" />
                                                                <path
                                                                    d="M99.888 3.30255C100.073 3.77084 100.197 4.26377 100.283 4.74439C100.567 6.35875 100.468 8.13332 99.5425 9.50121C99.1723 10.0434 98.6539 10.4871 98.0739 10.7828C97.1854 11.2265 96.1364 11.3251 95.2478 10.8691L95.2231 10.8321C95.544 10.6226 95.8279 10.3392 96.0377 10.0188C96.7287 8.98363 96.8151 7.65271 96.7164 6.39572C96.63 5.34823 96.4326 4.31307 96.124 3.31487C95.9513 2.748 95.7044 2.18112 95.3959 1.66354L95.5564 1.56495C96.3832 0.72696 97.8641 0.874841 98.765 1.63889C99.2833 2.08253 99.6412 2.66173 99.888 3.30255Z"
                                                                    fill="#FEA77C" />
                                                                <path
                                                                    d="M92.4465 5.89069C92.7921 5.77978 93.1253 5.66887 93.4708 5.55796C93.7547 5.4717 94.0632 5.37311 94.3594 5.43473C94.6926 5.49635 94.9641 5.75514 95.1245 6.0509C95.6552 6.95051 95.2849 8.17052 94.5321 8.90992C94.1989 9.23033 93.804 9.48912 93.3844 9.6863C92.8538 9.93277 92.2861 10.1053 91.7184 10.2409C91.9035 10.7338 92.0269 11.239 92.0639 11.769H92.0763C92.3725 11.6211 92.6316 11.3992 92.8414 11.1405C93.6066 11.4978 94.5075 11.3253 95.2109 10.8447L95.2356 10.8817C96.1118 11.3376 97.1608 11.239 98.0617 10.7954V10.8077C98.8145 11.4609 99.9005 11.5595 100.851 11.2144L100.863 11.2514C101.024 12.1263 100.949 13.0383 100.678 13.8763C100.283 15.0593 99.4809 16.0698 99.1353 17.2652C98.9132 18.0539 98.9009 18.8919 99.086 19.8038C95.0628 20.2474 90.9532 19.964 87.0165 18.9781V18.9535C86.6092 16.7969 85.4985 14.8375 84.5976 12.8288C83.6967 10.82 82.9686 8.61416 83.3759 6.44525C83.6721 4.90482 84.5359 3.49996 85.7083 2.44014C86.4735 1.75003 87.4361 1.18316 88.4604 1.20781C88.8676 1.22013 89.2625 1.31872 89.6204 1.49124C90.2745 1.79933 90.8422 2.34156 91.2494 2.95773C91.8665 3.83269 92.175 4.86785 92.4465 5.89069Z"
                                                                    fill="#FEA77C" />
                                                                <path
                                                                    d="M14.7227 11.0417C14.4389 11.5963 14.2167 12.1878 14.081 12.7917C13.501 12.767 12.9333 12.5082 12.5507 12.0769L12.5137 12.0646C12.6247 11.8674 12.7235 11.6579 12.7975 11.4484C13.4516 11.3868 14.118 11.1896 14.7227 11.0417Z"
                                                                    fill="#FEA77C" />
                                                                <path
                                                                    d="M5.91144 4.80621C6.07187 4.86783 6.2323 4.96642 6.36805 5.06501C6.81233 5.41006 7.09617 5.91532 7.34299 6.40825C7.97238 7.65292 8.47837 8.97152 8.8486 10.3148C9.1201 11.313 9.29287 12.4837 8.65114 13.297C8.6388 13.3094 8.6388 13.3217 8.62646 13.3217C7.98473 14.1227 6.83701 14.2336 5.80037 14.2459C5.84973 14.172 5.88676 14.0981 5.91144 14.0241C6.05953 13.6421 6.03485 13.2108 5.97314 12.8041C5.73866 10.9802 4.9982 9.21799 3.85049 7.76383C3.59133 7.44342 3.29514 7.12301 2.93726 6.95048L2.97428 6.86422C3.07301 6.01391 3.36919 5.21289 4.19604 4.81854C4.75138 4.58439 5.38077 4.58439 5.91144 4.80621Z"
                                                                    fill="#FEA77C" />
                                                                <path
                                                                    d="M78.5257 65.043C79.0811 65.0306 79.5377 65.4866 79.5377 66.0412C79.5377 66.5957 79.0934 67.0517 78.5381 67.0517C77.9827 67.0517 77.5261 66.608 77.5261 66.0535C77.5261 65.4989 77.9704 65.0553 78.5257 65.043Z"
                                                                    fill="#20140F" />
                                                                <path
                                                                    d="M14.2415 3.32742C15.5373 4.53511 16.3394 5.81674 16.9195 7.49272C16.6233 7.49272 16.3147 7.51737 16.0062 7.55434L12.6001 7.89939C12.452 7.91172 12.3039 7.93636 12.1558 7.94869C11.8843 6.93817 11.4524 5.97695 10.8724 5.10198C10.6626 4.7939 10.4404 4.49814 10.1936 4.23935L10.2676 4.16541C10.7983 3.40136 11.6498 2.87145 12.5754 2.73589C12.8716 2.6866 13.1925 2.6866 13.4763 2.79751C13.7602 2.8961 14.007 3.1056 14.2415 3.32742Z"
                                                                    fill="#FEA77C" />
                                                                <path
                                                                    d="M66.7524 58.4376C67.0116 58.6348 67.172 59.0045 67.0362 59.3002C66.9375 59.5097 66.7277 59.6329 66.5056 59.6946C66.2834 59.7562 66.0613 59.7439 65.8268 59.7562C65.2098 59.7808 64.5804 59.9164 64.0744 60.2614C63.8029 60.4463 63.5808 60.6804 63.2969 60.8406C63.0131 61.0008 62.6428 61.0501 62.3837 60.8653C62.1245 60.6804 62.0628 60.3231 62.1492 60.0273C62.2356 59.7315 62.4577 59.4851 62.6922 59.2756C63.6178 58.4499 64.9259 58.0556 66.16 58.2158C66.16 58.1665 66.4932 58.2404 66.7524 58.4376Z"
                                                                    fill="#323B6E" />
                                                                <path
                                                                    d="M11.6621 11.3622C12.0324 11.4608 12.415 11.4731 12.7975 11.4485C12.7235 11.658 12.6247 11.8675 12.5137 12.0647C12.1558 12.7055 11.6621 13.26 11.0081 13.5558C10.2676 13.9009 9.31736 13.8516 8.67563 13.3709L8.6386 13.334C8.65095 13.3217 8.65094 13.3093 8.66329 13.3093C9.29268 12.496 9.13224 11.3253 8.86074 10.3271C8.49051 8.98382 7.98453 7.66522 7.35514 6.42056C7.09598 5.92762 6.81214 5.42236 6.3802 5.07731C6.23211 4.9664 6.08402 4.88013 5.92358 4.81852C6.29381 4.26396 6.68873 3.68477 7.29343 3.41365C7.94751 3.11789 8.73733 3.2288 9.36672 3.58618C9.67525 3.75871 9.94675 3.99285 10.1936 4.23932C10.4527 4.49811 10.6749 4.80619 10.8723 5.10196C11.4524 5.97692 11.8843 6.93814 12.1558 7.94866C11.3906 8.05957 10.6132 8.30604 10.28 8.9715C9.79866 9.90808 10.6378 11.0911 11.6621 11.3622Z"
                                                                    fill="#FEA77C" />
                                                                <path
                                                                    d="M5.81252 14.2582C6.84916 14.2458 7.99688 14.1226 8.63861 13.3339L8.67563 13.3709C9.31736 13.8638 10.2676 13.9131 11.0081 13.5557C11.6622 13.2476 12.1558 12.6931 12.5137 12.0646L12.5507 12.0769C12.9333 12.5082 13.501 12.767 14.081 12.7917C14.2167 12.1878 14.4265 11.5963 14.7227 11.0417C14.118 11.1896 13.4639 11.3868 12.7975 11.4484C12.415 11.4854 12.0324 11.4607 11.6622 11.3622C10.6378 11.091 9.79866 9.908 10.2676 8.97142C10.6008 8.30596 11.3783 8.05949 12.1435 7.94858C12.2915 7.92393 12.452 7.91161 12.5877 7.89928L15.9938 7.55423C16.29 7.52958 16.5986 7.49261 16.9071 7.49261C17.2033 7.49261 17.5118 7.52958 17.7956 7.61585C18.9557 7.99787 19.5851 9.29183 19.6468 10.4995C19.7085 11.7195 19.3259 12.9026 19.0791 14.0856C18.5238 16.8337 18.7089 19.7297 19.6344 22.3793C15.0806 23.7225 10.9217 24.733 6.21977 24.7207C6.19509 24.5852 6.15807 24.4496 6.13338 24.314C5.84954 23.131 5.33122 22.0219 4.61544 21.036C3.96137 20.1241 3.13452 19.3477 2.44342 18.4604C0.345454 15.7616 -0.469052 12.1139 0.271408 8.78657C0.370136 8.20737 0.777389 7.61585 1.32039 7.2215C1.71531 6.93806 2.1966 6.76553 2.66556 6.86412C2.76429 6.88877 2.85068 6.91341 2.94941 6.96271C3.31964 7.13523 3.61582 7.45564 3.86264 7.77605C4.99801 9.23021 5.73847 10.9925 5.98529 12.8163C6.03466 13.223 6.07168 13.6543 5.92359 14.0363C5.8989 14.1226 5.86188 14.1965 5.81252 14.2582Z"
                                                                    fill="#FEA77C" />
                                                                <path
                                                                    d="M76.9461 73.361C76.9584 74.1744 76.4771 74.9384 75.8971 75.5053C74.9468 76.4296 73.6757 76.9965 72.3552 77.1074C71.0347 77.2183 69.6895 76.8979 68.5665 76.2078C68.0605 75.8997 67.5916 75.5053 67.2954 75.0001C66.9992 74.4948 66.8881 73.854 67.0979 73.2994C67.4805 72.3382 68.6776 71.9808 69.7142 72.0178C70.7509 72.0548 71.7875 72.3505 72.8118 72.1534C73.7621 71.9685 74.7247 71.3647 75.6379 71.6974C76.2426 71.9439 76.9337 72.5477 76.9461 73.361Z"
                                                                    fill="white" />
                                                                <path
                                                                    d="M44.2302 132.427C41.0956 122.753 35.3817 114.312 29.5938 105.883L29.5568 105.907C28.2733 107.14 27.6686 108.224 27.0639 109.888C25.8421 113.227 25.9409 116.912 26.4345 120.424C27.4341 127.572 29.9394 134.411 32.4322 141.177C33.4442 143.913 34.4438 146.636 35.4558 149.372L45.9827 149.384H49.4628L44.2302 132.427Z"
                                                                    fill="#323B6E" />
                                                                <path
                                                                    d="M65.6664 65.1907C66.2217 65.1907 66.6783 65.6343 66.6783 66.1889C66.6783 66.7434 66.2341 67.1994 65.6787 67.1994C65.1234 67.2117 64.6667 66.7558 64.6667 66.2012C64.6667 65.6466 65.111 65.1907 65.6664 65.1907Z"
                                                                    fill="#20140F" />
                                                                <path
                                                                    d="M80.92 59.83C81.0187 60.1258 80.957 60.4955 80.6979 60.6803C80.4387 60.8775 80.0685 60.8282 79.7723 60.668C79.4885 60.5201 79.254 60.286 78.9825 60.1134C78.4642 59.7807 77.8348 59.6575 77.2177 59.6451C76.9956 59.6451 76.7611 59.6451 76.539 59.5959C76.3168 59.5466 76.107 59.4233 76.0083 59.2138C75.8602 58.9181 76.0206 58.5484 76.2798 58.3389C76.539 58.1294 76.8722 58.0554 76.8722 58.117C78.1063 57.9199 79.4144 58.2896 80.3647 59.1029C80.6115 59.2878 80.8336 59.5342 80.92 59.83Z"
                                                                    fill="#323B6E" />
                                                                <path
                                                                    d="M80.3646 49.0964C78.0075 50.5505 74.9716 51.1174 72.0097 51.2283C70.1709 51.29 68.3445 51.2037 66.518 51.1174C65.6912 51.0805 64.7779 50.9449 63.9511 51.0065C63.2723 51.0558 58.3976 51.8322 55.2507 56.8108C55.1396 56.9834 55.0285 57.1436 54.9175 57.3161C52.9059 60.5571 52.0543 64.6362 53.0663 68.3086C53.1033 68.4564 53.0416 68.629 52.9429 68.7522C52.8318 68.8754 52.6837 68.937 52.5356 68.9987C52.2395 69.1096 51.8939 69.1342 51.5977 69.0356C51.2892 68.937 51.03 68.6906 50.9683 68.3702C50.4007 67.5075 49.5121 66.8544 48.5248 66.7065C48.1669 66.6449 47.809 66.6572 47.4512 66.7188C47.3524 66.5093 47.2414 66.2875 47.1426 66.078C45.1187 61.198 44.1684 55.5785 46.612 51.0681C48.5248 47.5436 52.1901 45.3008 55.9418 43.8713C59.6934 42.4418 63.6796 41.6654 67.3942 40.1373C69.7513 38.5969 72.454 37.1797 75.3788 36.9948C77.2053 36.8839 79.0441 37.2536 80.6855 38.0793C81.4259 38.449 82.1294 38.9173 82.6724 39.5334C83.7707 40.7781 84.1286 42.5896 83.8077 44.2163C83.4869 45.843 82.5243 47.3095 81.3149 48.4432C80.9817 48.6897 80.6855 48.8992 80.3646 49.0964Z"
                                                                    fill="#323B6E" />
                                                                <path
                                                                    d="M50.5612 74.2976C49.179 74.8768 47.4759 74.7043 46.2789 73.7924C44.8103 72.671 44.2303 70.5267 44.9214 68.8137C45.1065 68.3454 45.3903 67.9141 45.7482 67.5567C46.2048 67.1131 46.7972 66.8173 47.4266 66.7064C47.7845 66.6448 48.1424 66.6325 48.5002 66.6941C49.4875 66.8543 50.3761 67.4951 50.9438 68.3578C51.0055 68.6659 51.277 68.9246 51.5732 69.0232C51.8817 69.1218 52.2149 69.0848 52.5111 68.9863C52.6592 68.937 52.8073 68.863 52.9183 68.7398C53.0294 68.6166 53.0911 68.4564 53.0417 68.2962C52.0298 64.6238 52.8813 60.5447 54.8929 57.3037C55.004 57.1312 55.115 56.971 55.2261 56.7984C58.373 51.8321 63.2477 51.0557 63.9265 50.9941C64.7533 50.9325 65.6542 51.0681 66.4934 51.105C68.3199 51.1913 70.1587 51.2776 71.9852 51.2159C74.9347 51.105 77.9829 50.5381 80.34 49.084C80.9941 51.487 81.6605 53.8901 82.3146 56.2932C84.8445 65.5234 85.3752 72.6956 83.8202 77.6003C82.9193 80.4347 81.3273 82.5173 79.0319 83.8236C76.4896 85.2655 73.6265 86.0911 70.7017 86.313C70.8621 87.0277 71.0719 87.7301 71.3188 88.4079C71.5779 89.1227 71.8864 89.8498 72.4295 90.392C72.4912 90.4536 72.5529 90.5029 72.6146 90.5522C70.7387 92.906 67.493 93.9165 64.5065 93.5468C61.483 93.1648 58.7309 91.5257 56.5342 89.4184L56.3491 89.3815C56.4602 88.7653 56.2751 88.1122 56.09 87.5083C54.6954 82.961 52.7085 78.6232 50.7093 74.31L50.5612 74.2976ZM80.7103 60.668C80.9571 60.4831 81.0188 60.1134 80.9324 59.8177C80.8337 59.5219 80.6115 59.2878 80.3771 59.0783C79.4268 58.2772 78.1186 57.9075 76.8845 58.0924C76.8845 58.0308 76.5513 58.117 76.2922 58.3142C76.033 58.5237 75.8849 58.8934 76.0207 59.1892C76.1194 59.3987 76.3415 59.5219 76.5513 59.5712C76.7735 59.6205 77.008 59.6082 77.2301 59.6205C77.8471 59.6328 78.4765 59.756 78.9949 60.0888C79.2664 60.2613 79.5008 60.4954 79.7847 60.6433C80.0809 60.8159 80.4511 60.8651 80.7103 60.668ZM79.5502 66.041C79.5502 65.4864 79.0936 65.0428 78.5382 65.0428C77.9829 65.0551 77.5386 65.4987 77.5386 66.0533C77.551 66.6078 77.9952 67.0515 78.5506 67.0515C79.1059 67.0515 79.5502 66.5955 79.5502 66.041ZM75.8849 75.5053C76.4773 74.9385 76.9463 74.1744 76.9339 73.3611C76.9216 72.5477 76.2305 71.9439 75.6134 71.7097C74.7002 71.377 73.7499 71.9808 72.7873 72.1657C71.7754 72.3629 70.7264 72.0671 69.6897 72.0301C68.6531 71.9932 67.456 72.3382 67.0735 73.3118C66.8513 73.8663 66.9624 74.5071 67.2709 75.0124C67.5671 75.5177 68.0361 75.912 68.542 76.2201C69.6651 76.9102 71.0102 77.2429 72.3307 77.1197C73.6635 76.9965 74.947 76.4296 75.8849 75.5053ZM67.0364 59.3001C67.1722 59.0043 67.0118 58.6346 66.7526 58.4374C66.4934 58.2403 66.1602 58.1663 66.1602 58.2279C64.9261 58.0677 63.6303 58.4621 62.6924 59.2878C62.4579 59.4973 62.2358 59.7437 62.1494 60.0395C62.063 60.3352 62.1371 60.7049 62.3839 60.8775C62.643 61.0623 63.0256 61.0007 63.2971 60.8528C63.581 60.6926 63.8031 60.4585 64.0746 60.2736C64.5806 59.9286 65.21 59.793 65.827 59.7684C66.0492 59.756 66.2836 59.7684 66.5058 59.7067C66.7279 59.6451 66.95 59.5096 67.0364 59.3001ZM66.6909 66.1765C66.6785 65.622 66.2343 65.1783 65.6789 65.1783C65.1236 65.1907 64.6793 65.6343 64.6793 66.1888C64.6793 66.7434 65.1359 67.187 65.6913 67.187C66.2466 67.187 66.6909 66.7311 66.6909 66.1765Z"
                                                                    fill="#FEA77C" />
                                                                <path
                                                                    d="M179.413 64.402C181.806 64.402 183.745 62.4654 183.745 60.0765C183.745 57.6876 181.806 55.751 179.413 55.751C177.021 55.751 175.082 57.6876 175.082 60.0765C175.082 62.4654 177.021 64.402 179.413 64.402Z"
                                                                    fill="white" />
                                                                <path
                                                                    d="M191.631 60.6311C190.125 61.3952 188.62 62.1346 187.003 63.0712C186.09 63.6011 185.177 64.131 184.436 64.8704C182.832 66.4847 182.178 68.9864 180.29 70.268L180.277 70.2557C182.388 68.9001 181.771 64.1803 178.895 59.7315C176.02 55.2828 171.972 52.7811 169.862 54.149C171.182 52.929 173.083 52.892 174.847 52.6332C179.302 51.9555 183.116 49.2073 186.966 46.8536C187.916 46.2744 188.928 45.6952 190.039 45.7321C191.224 45.7691 192.26 46.4839 193.137 47.2849C194.84 48.85 197.234 52.3375 197.271 56.2563C197.185 57.2052 196.666 57.7475 195.691 58.3636C194.655 59.0168 193.667 59.5713 192.692 60.0889C192.335 60.2737 191.989 60.4463 191.631 60.6311ZM189.447 59.8917C189.78 59.7192 189.916 59.3125 189.743 58.9675C189.57 58.6347 189.163 58.4992 188.817 58.6594L186.374 59.904C186.041 60.0766 185.905 60.4832 186.078 60.8283C186.25 61.161 186.658 61.2966 187.003 61.1241L189.447 59.8917ZM188.225 56.9341C188.558 56.7616 188.694 56.3549 188.521 56.0099C188.348 55.6771 187.941 55.5416 187.596 55.7141L185.152 56.9588C184.819 57.1313 184.683 57.538 184.844 57.883C185.016 58.2157 185.424 58.3513 185.769 58.1788L188.225 56.9341ZM186.473 54.2969C186.806 54.1244 186.941 53.7177 186.769 53.3726C186.596 53.0399 186.189 52.9044 185.843 53.0646L183.4 54.3092C183.066 54.4818 182.931 54.8884 183.103 55.2335C183.276 55.5662 183.683 55.7018 184.029 55.5292L186.473 54.2969ZM184.535 51.8692C184.868 51.6967 185.004 51.29 184.831 50.9449C184.658 50.6122 184.251 50.4767 183.906 50.6492L181.462 51.8938C181.129 52.0664 180.993 52.473 181.166 52.8181C181.339 53.1508 181.746 53.2864 182.091 53.1262L184.535 51.8692Z"
                                                                    fill="#323B6E" />
                                                                <path
                                                                    d="M189.743 58.9797C189.916 59.3124 189.78 59.7314 189.447 59.904L187.003 61.1486C186.67 61.3212 186.25 61.1856 186.078 60.8529C185.905 60.5201 186.041 60.1011 186.374 59.9286L188.817 58.6839C189.163 58.4991 189.57 58.6346 189.743 58.9797Z"
                                                                    fill="white" />
                                                                <path
                                                                    d="M188.521 56.0098C188.694 56.3425 188.558 56.7615 188.225 56.934L185.781 58.1787C185.448 58.3512 185.029 58.2157 184.856 57.8829C184.683 57.5502 184.819 57.1312 185.164 56.9587L187.608 55.714C187.941 55.5415 188.348 55.677 188.521 56.0098Z"
                                                                    fill="white" />
                                                                <path
                                                                    d="M186.781 53.385C186.954 53.7177 186.818 54.1367 186.485 54.3092L184.041 55.5539C183.708 55.7264 183.289 55.5909 183.116 55.2581C182.943 54.9254 183.079 54.5064 183.412 54.3339L185.855 53.0892C186.189 52.9044 186.608 53.0399 186.781 53.385Z"
                                                                    fill="white" />
                                                                <path
                                                                    d="M184.831 50.9573C185.004 51.2901 184.868 51.7091 184.535 51.8816L182.092 53.1263C181.758 53.2988 181.339 53.1632 181.166 52.8182C180.993 52.4854 181.129 52.0664 181.462 51.8939L183.906 50.6492C184.251 50.4767 184.659 50.6123 184.831 50.9573Z"
                                                                    fill="white" />
                                                                <path
                                                                    d="M98.7404 120.905C98.4812 119.845 98.2344 118.798 97.9876 117.738C98.8268 102.605 106.478 77.81 106.293 62.3565C106.108 46.9029 103.652 35.4175 99.3081 20.5802C99.2217 20.3091 99.16 20.0503 99.1106 19.7915C95.0875 20.2351 90.9779 19.9517 87.0411 18.9658C87.0165 18.9535 86.9794 18.9535 86.9548 18.9412C88.5591 31.8191 88.3987 44.7833 87.3744 57.6366C86.8313 64.3898 86.0292 71.217 83.9682 77.6498C83.4129 79.3997 82.7588 81.1127 81.9937 82.801C80.4264 86.2515 78.1186 89.7144 74.552 90.9714C73.9103 91.2179 73.1822 90.996 72.6392 90.5647C70.7634 92.9185 67.5177 93.929 64.5312 93.5593C61.5076 93.1773 58.7556 91.5383 56.5589 89.431L56.3738 89.394C56.3614 89.4433 56.3614 89.4926 56.3491 89.5296C56.1886 90.195 55.5469 90.7866 54.8805 90.6633L54.8064 90.688C46.612 86.042 43.28 80.8416 39.3679 74.3841C35.4434 67.9267 32.6297 60.8654 30.0134 53.7794C26.2 43.4401 22.7445 32.9652 19.6963 22.3794L19.6346 22.3917C15.0808 23.735 10.9219 24.7455 6.21993 24.7332C6.19525 24.5976 6.15823 24.462 6.13354 24.3265C6.23227 25.2384 8.19449 68.6044 18.1413 87.7304C21.4364 94.0646 25.5459 99.9798 29.6061 105.895C35.3941 114.324 41.1079 122.766 44.2426 132.44V132.464C44.2426 132.464 44.2426 132.464 44.2549 132.464L49.4751 149.421L59.6811 149.446L105.639 149.508V149.446C103.319 139.908 101.036 130.406 98.7404 120.905Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M138.207 131.232C137.948 133.635 139.688 135.582 142.094 135.582C144.501 135.582 146.661 133.635 146.92 131.232C147.179 128.829 145.439 126.882 143.032 126.882C140.626 126.882 138.466 128.829 138.207 131.232Z"
                                                                    fill="white" />
                                                                <path
                                                                    d="M70.6645 90.996C70.4918 90.9714 70.2943 91.07 70.1462 90.8974C70.0228 91.07 69.85 90.996 69.6773 90.996C69.6279 90.9221 69.5785 90.8481 69.5292 90.7742C69.5662 90.7372 69.6032 90.7003 69.6402 90.6633C69.6773 90.6633 69.7143 90.6633 69.8871 90.7249C69.9488 90.7003 69.9241 90.6633 69.9117 90.6633C69.8624 90.6756 69.8007 90.7003 69.7513 90.7126C69.8254 90.7372 69.8871 90.7496 69.8871 90.7249C69.739 90.6263 69.7266 90.6017 69.7143 90.5647C69.6896 90.6017 69.6649 90.6263 69.6402 90.6633C69.6032 90.7003 69.5662 90.7372 69.5292 90.7742C69.4305 90.7742 69.3441 90.7742 69.2577 90.7742C69.1836 90.6263 69.1219 90.4661 69.0355 90.3429C68.9121 90.1827 68.9245 90.0471 69.0726 89.9116C68.9985 89.813 68.9121 89.7021 68.7764 89.5172C68.7517 89.7637 68.7394 89.8992 68.7147 90.0841C68.6159 90.0841 68.5049 90.0841 68.3938 90.0841C68.3568 90.0471 68.3198 90.0102 68.2704 89.9855C68.2951 89.8623 68.3321 89.7514 68.3691 89.6405C68.1593 89.6405 67.9619 89.6405 67.7644 89.6405C67.7027 89.7021 67.6533 89.7514 67.604 89.813C67.6163 89.8376 67.641 89.85 67.6533 89.8746C67.7644 89.8253 67.8631 89.776 67.9742 89.739C68.0853 89.8376 68.1717 89.9239 68.2704 89.9855C68.3198 90.0102 68.3568 90.0471 68.3938 90.0841C68.4679 90.3306 68.69 90.0964 68.8257 90.2443C68.8504 90.3552 68.8998 90.4784 68.9121 90.5524C68.8751 90.6386 68.8381 90.7249 68.7764 90.8482C68.6406 90.6633 68.5542 90.5401 68.4555 90.4168C68.4061 90.4661 68.3691 90.4908 68.3074 90.5401C68.1964 90.3922 68.0853 90.2443 67.9742 90.0964C67.8755 90.232 67.9742 90.5524 67.6163 90.5401C67.604 90.4415 67.5916 90.3429 67.5793 90.2443C67.4312 90.195 67.2831 90.1334 67.135 90.0841C67.172 89.9485 67.2091 89.813 67.2461 89.6774C66.9993 89.4803 66.8018 89.776 66.5797 89.7267C66.3822 89.6897 66.1848 89.5788 65.9873 89.5049C65.9873 89.394 65.9873 89.2831 65.9873 89.1352C65.9009 89.2091 65.8639 89.2338 65.8269 89.2584C65.6911 89.1845 65.5554 89.1229 65.4073 89.0489C65.4073 89.012 65.4073 88.975 65.4073 88.9134C65.6294 88.8518 65.8516 88.8148 66.0737 88.7778C65.9626 88.6916 65.8639 88.6176 65.7528 88.5437C65.8022 88.4697 65.8269 88.4451 65.9256 88.2972C65.6664 88.4081 65.5307 88.4697 65.3949 88.519C65.3949 88.6669 65.3949 88.8025 65.3949 88.9134C65.3579 88.938 65.3332 88.9503 65.2962 88.9627C65.3332 88.9873 65.3579 89.012 65.3949 89.0366C65.3579 89.1722 65.3209 89.3077 65.2839 89.4433C65.3086 89.4186 65.3332 89.4063 65.3456 89.3817C65.3703 89.4679 65.4073 89.5542 65.4443 89.6774C65.4937 89.5172 65.5184 89.4556 65.5554 89.3447C65.7035 89.394 65.8269 89.4556 65.9503 89.5049C65.8392 89.6035 65.7158 89.6898 65.6418 89.7637C65.6788 89.8869 65.7035 89.9855 65.7281 90.0718C65.6171 90.0595 65.4937 90.0841 65.4073 90.0225C65.2098 89.8992 65.0371 89.9239 64.8519 90.0471C64.7162 89.9485 64.7038 89.7021 64.4694 89.6651C64.5064 89.4556 64.5558 89.2461 64.5928 89.0366C64.6298 88.9996 64.6668 88.9627 64.6668 88.9257C64.8396 88.8764 64.9753 88.8394 65.1111 88.8025C65.1234 88.8025 65.1358 88.7532 65.1481 88.7285C65.0494 88.6792 64.963 88.6423 64.8519 88.593C64.8026 88.6792 64.7409 88.7655 64.6792 88.9257C64.6792 88.9627 64.6421 88.9996 64.6051 89.0366C64.5311 89.0366 64.457 89.0366 64.3706 89.0366C64.3706 88.938 64.3706 88.8518 64.3706 88.7285C64.1362 88.7285 63.9017 88.7285 63.6425 88.7285C63.5191 88.5683 63.3957 88.4204 63.2723 88.2602C63.2476 88.2726 63.2106 88.3095 63.1489 88.3711C62.9884 88.2602 62.8157 88.1493 62.5812 87.9891C62.7416 87.9275 62.8527 87.8905 62.9761 87.8536C62.9514 87.8043 62.9144 87.7303 62.9021 87.6687C62.8897 87.5948 62.9021 87.5208 62.828 87.336C62.8527 87.3237 62.9021 87.3853 62.9884 87.4715C63.0008 87.3606 63.0008 87.2867 63.0131 87.2004C62.9267 87.2127 62.8774 87.2127 62.828 87.3237C62.8404 87.4592 62.7786 87.4962 62.6799 87.5578C62.3714 87.2127 61.8901 87.2374 61.4582 87.1265C61.4335 87.1634 61.3965 87.2497 61.3718 87.3237C61.3224 87.3237 61.2854 87.3237 61.2113 87.3237C61.199 87.2251 61.199 87.1265 61.1867 87.0525C61.3841 86.954 61.5445 86.88 61.7297 86.7937C61.7297 86.7937 61.7667 86.8184 61.816 86.8677C61.8407 86.8307 61.8531 86.7937 61.9024 86.7075C61.6556 86.6089 61.4582 86.3624 61.1743 86.6952C61.0756 86.5719 61.0015 86.4733 60.9275 86.3748C61.1126 86.2392 61.4458 86.3501 61.4088 85.9804C61.2113 85.8695 60.9769 86.2885 60.7794 85.9311C60.7547 86.005 60.7424 86.0543 60.7177 86.1529C60.6313 86.1776 60.5079 86.1899 60.3845 86.2269C60.4215 86.2762 60.4462 86.3008 60.4339 86.2885C60.3351 86.3871 60.2487 86.4733 60.15 86.5719C60.1747 86.5966 60.1994 86.6212 60.2241 86.6459C60.0513 86.6459 59.8785 86.6459 59.7057 86.6459C59.7304 86.5473 59.7551 86.4487 59.7921 86.3131C59.7057 86.3378 59.6194 86.3624 59.4959 86.3994C59.4589 86.3378 59.3972 86.2392 59.2738 86.0174C59.4836 86.1036 59.5823 86.1406 59.7057 86.1899C59.7674 86.1653 59.8538 86.116 59.9896 86.0543C60.0266 86.1406 60.0636 86.2145 60.1007 86.3008C60.1624 86.1406 60.2364 85.9927 60.2981 85.8202C60.3722 85.8818 60.4092 85.9188 60.4462 85.9558C60.4956 85.9065 60.5573 85.8448 60.619 85.7832C60.4215 85.7093 60.2364 85.6477 60.0143 85.5614C60.0883 85.4505 60.15 85.3642 60.1994 85.278C60.3598 85.3519 60.4215 85.5614 60.6313 85.5121C60.7671 85.623 60.7671 85.623 60.9645 85.5244C60.8411 85.5244 60.73 85.5244 60.6313 85.5121C60.4832 85.3396 60.3351 85.1794 60.1747 84.9822C60.076 85.1424 60.0019 85.2533 59.9155 85.3766C59.7921 85.3766 59.6564 85.3766 59.5083 85.3766C59.4959 85.2903 59.4713 85.1794 59.4589 85.0561C59.3972 85.0931 59.3478 85.1178 59.2985 85.1547C59.064 85.0192 59.1504 84.7974 59.1381 84.6002C59.2985 84.5755 59.4466 84.5386 59.6564 84.5016C59.6687 84.5139 59.7304 84.5509 59.7798 84.5879C59.7921 84.5509 59.8291 84.5139 59.8168 84.4893C59.7921 84.4277 59.7551 84.366 59.7181 84.3044C59.7428 84.2921 59.7798 84.2551 59.8045 84.2551C60.2981 84.4523 60.7794 84.6495 61.273 84.8343C61.5075 84.9206 61.742 84.9945 61.9765 85.0808C62.1986 85.1547 62.4084 85.241 62.6306 85.2903C63.0625 85.3766 63.4821 85.5121 63.9017 85.6477C64.1979 85.7339 64.4817 85.8448 64.7902 85.8448C65.1234 85.8448 65.4196 86.0297 65.7652 86.0174C65.8269 86.0174 65.9009 86.0667 65.975 86.0667C66.2341 86.079 66.481 86.079 66.7278 86.1653C66.9623 86.2515 67.2214 86.1653 67.4806 86.2762C67.6657 86.3624 67.9248 86.2885 68.1963 86.2885C68.1223 86.3748 68.0976 86.4117 68.0483 86.4733C68.11 86.4857 68.1717 86.5103 68.2457 86.5226C68.2704 86.4364 68.2951 86.3748 68.3321 86.3008C68.764 86.3008 69.196 86.3008 69.6773 86.3008C69.6279 86.3624 69.6156 86.3994 69.5539 86.461C69.6402 86.4857 69.739 86.5226 69.85 86.5719C69.85 86.5842 69.8747 86.4857 69.8871 86.4117C69.9117 86.424 69.8377 86.3871 69.776 86.3501C69.8377 86.2515 70.0598 86.2515 70.5782 86.3378C70.5041 86.3747 70.4301 86.424 70.356 86.461C70.3437 86.461 70.356 86.498 70.356 86.5719C70.4548 86.5966 70.5658 86.6212 70.6769 86.6582C70.7016 86.7198 70.7263 86.7938 70.7509 86.8677C70.8003 86.8184 70.8373 86.7814 70.8867 86.7568C71.3927 88.556 71.7506 89.3817 72.4293 90.1704C72.3923 90.2443 72.3553 90.3182 72.3059 90.4045C72.2195 90.3552 72.1208 90.3182 72.0097 90.2566C71.985 90.3429 71.9604 90.3922 71.9727 90.4415C71.985 90.4908 72.0344 90.5277 72.0714 90.577C72.0344 90.614 72.0097 90.6633 71.9604 90.6879C71.8369 90.7619 71.7135 90.8112 71.5778 90.8851C71.4544 90.6387 71.331 90.4045 71.2076 90.1457C71.1459 90.1827 71.0841 90.2073 70.9854 90.2689C71.1088 90.4045 71.2076 90.5154 71.3063 90.614C71.2446 90.7003 71.2076 90.7496 71.1705 90.8112C71.1952 90.8358 71.2199 90.8605 71.2816 90.9221C71.1705 90.996 71.0595 91.07 70.9484 91.1562C70.9361 91.2302 70.9361 91.3164 70.9237 91.415C70.825 91.415 70.7386 91.415 70.6399 91.415C70.6275 91.3904 70.5905 91.3534 70.6028 91.3288C70.5905 91.2425 70.6275 91.1193 70.6645 90.996L70.6769 91.0084C70.7139 90.9837 70.7386 90.9591 70.7756 90.9344C70.7633 90.9221 70.7509 90.9098 70.7386 90.8974C70.7139 90.9344 70.6892 90.9591 70.6645 90.996ZM70.2203 89.8499C70.2079 89.8623 70.2079 89.8623 70.1956 89.8746C70.2203 89.9116 70.245 89.9362 70.2696 89.9732C70.282 89.9609 70.2943 89.9485 70.3067 89.9362C70.2696 89.9116 70.245 89.8869 70.1956 89.8746C70.2079 89.8746 70.2203 89.8623 70.2203 89.8499C70.1956 89.8253 70.1709 89.7883 70.1462 89.7637C70.1339 89.776 70.1215 89.7883 70.1092 89.8007C70.1462 89.8253 70.1709 89.8499 70.2203 89.8499ZM64.6792 89.394C64.7532 89.4803 64.7779 89.5295 64.7902 89.5172C64.8396 89.5049 64.9013 89.4803 64.9507 89.4679C64.8766 89.4433 64.8149 89.431 65.0371 89.5172C65 89.5172 64.9753 89.5172 64.9383 89.5172C64.9507 89.5912 64.963 89.6651 64.9877 89.739C65.0124 89.739 65.0371 89.7267 65.0617 89.7267C65.0617 89.6651 65.0494 89.5912 64.6792 89.394ZM69.6773 90.3306C69.85 90.3552 69.9488 90.2443 69.9858 90.0841C69.9611 89.9362 69.6896 90.0348 69.739 89.8253C69.739 89.8253 69.6032 89.7883 69.5045 89.7514C69.5662 89.9732 69.6156 90.1457 69.739 90.4045C69.5292 90.3182 69.4181 90.2813 69.2824 90.2197C69.2947 90.3059 69.2947 90.3675 69.307 90.4415C69.4428 90.4292 69.5415 90.4168 69.6773 90.3306ZM63.0378 87.262C63.4574 87.4839 63.5438 87.6071 63.4451 87.7796C63.3834 87.8043 63.3093 87.8289 63.2476 87.8536C63.2599 87.9768 63.1612 88.137 63.3587 88.1616C63.6672 87.9029 63.5561 87.5701 63.5808 87.2497C63.4204 87.262 63.2846 87.262 63.0378 87.262ZM66.4686 89.32C66.5797 89.4063 66.6537 89.4556 66.7401 89.5172C66.8018 89.394 66.8388 89.3077 66.8882 89.2091C66.8388 89.1598 66.7895 89.1105 66.7278 89.0613C66.6661 89.1352 66.6167 89.1845 66.4686 89.32ZM70.788 90.4045C70.788 90.3799 70.788 90.3675 70.788 90.3429C70.7139 90.3429 70.6399 90.3429 70.5535 90.3429C70.5535 90.3675 70.5535 90.3799 70.5535 90.4045C70.6275 90.4045 70.7139 90.4045 70.788 90.4045ZM64.3706 88.2479C64.3706 88.2109 64.3583 88.1863 64.3583 88.1493C64.2966 88.1616 64.2349 88.174 64.1732 88.1986C64.1732 88.2109 64.1732 88.2356 64.1855 88.2479C64.2472 88.2479 64.3089 88.2479 64.3706 88.2479ZM64.0128 87.4715C63.9881 87.4715 63.9757 87.4715 63.951 87.4715C63.951 87.5455 63.951 87.6194 63.951 87.7057C63.9757 87.7057 63.9881 87.7057 64.0128 87.7057C64.0128 87.6194 64.0128 87.5455 64.0128 87.4715ZM67.5916 86.4733C67.5916 86.498 67.5916 86.5103 67.5916 86.535C67.6657 86.535 67.7397 86.535 67.8261 86.535C67.8261 86.5103 67.8261 86.498 67.8261 86.4733C67.7397 86.4733 67.6657 86.4733 67.5916 86.4733ZM65.2592 88.4944C65.2468 88.4944 65.2345 88.4944 65.2222 88.4944C65.2222 88.5313 65.2222 88.5683 65.2222 88.6053C65.2345 88.6053 65.2468 88.6053 65.2592 88.6053C65.2592 88.5683 65.2592 88.5313 65.2592 88.4944ZM64.963 89.1105C64.963 89.1229 64.963 89.1352 64.963 89.1475C65 89.1475 65.0371 89.1475 65.0741 89.1475C65.0741 89.1352 65.0741 89.1229 65.0741 89.1105C65.0371 89.1105 65 89.1105 64.963 89.1105ZM67.4682 89.1105C67.4682 89.1229 67.4682 89.1352 67.4682 89.1475C67.5053 89.1475 67.5423 89.1475 67.5793 89.1475C67.5793 89.1352 67.5793 89.1229 67.5793 89.1105C67.5423 89.1105 67.5053 89.1105 67.4682 89.1105ZM67.0116 89.2215C67.0116 89.2338 67.0116 89.2461 67.0116 89.2584C67.0486 89.2584 67.0857 89.2584 67.1227 89.2584C67.1227 89.2461 67.1227 89.2338 67.1227 89.2215C67.0857 89.2215 67.0486 89.2215 67.0116 89.2215ZM69.2207 89.9855C69.233 89.9855 69.2453 89.9855 69.2577 89.9855C69.2577 89.9485 69.2577 89.9116 69.2577 89.8746C69.2453 89.8746 69.233 89.8746 69.2207 89.8746C69.2207 89.8992 69.2207 89.9362 69.2207 89.9855ZM71.4297 89.9855C71.4174 89.9855 71.405 89.9855 71.3927 89.9855C71.3927 90.0225 71.3927 90.0594 71.3927 90.0964C71.405 90.0964 71.4174 90.0964 71.4297 90.0964C71.4297 90.0594 71.4297 90.0225 71.4297 89.9855ZM60.2734 84.6988C60.2734 84.6864 60.2734 84.6741 60.2734 84.6618C60.2364 84.6618 60.1994 84.6618 60.1624 84.6618C60.1624 84.6741 60.1624 84.6864 60.1624 84.6988C60.1994 84.6988 60.2364 84.6988 60.2734 84.6988ZM61.3841 85.4135C61.3718 85.4135 61.3594 85.4135 61.3471 85.4135C61.3471 85.4505 61.3471 85.4875 61.3471 85.5244C61.3594 85.5244 61.3718 85.5244 61.3841 85.5244C61.3841 85.4998 61.3841 85.4505 61.3841 85.4135ZM62.1863 85.9927C62.1739 85.9927 62.1616 85.9927 62.1493 85.9927C62.1493 86.0297 62.1493 86.0667 62.1493 86.1036C62.1616 86.1036 62.1739 86.1036 62.1863 86.1036C62.1863 86.0667 62.1863 86.0297 62.1863 85.9927ZM61.8037 86.4487C61.816 86.4487 61.8284 86.4487 61.8407 86.4487C61.8407 86.4117 61.8407 86.3747 61.8407 86.3378C61.8284 86.3378 61.816 86.3378 61.8037 86.3378C61.8037 86.3624 61.8037 86.4117 61.8037 86.4487ZM69.0726 86.5966C69.0726 86.6089 69.0726 86.6212 69.0726 86.6335C69.1096 86.6335 69.1466 86.6335 69.1836 86.6335C69.1836 86.6212 69.1836 86.6089 69.1836 86.5966C69.1466 86.5966 69.1096 86.5966 69.0726 86.5966ZM67.5423 86.6705C67.5299 86.6705 67.5176 86.6705 67.5053 86.6705C67.5053 86.7075 67.5053 86.7445 67.5053 86.7814C67.5176 86.7814 67.5299 86.7814 67.5423 86.7814C67.5423 86.7445 67.5423 86.7075 67.5423 86.6705ZM62.0258 87.0156C62.0382 87.0156 62.0505 87.0156 62.0629 87.0156C62.0629 86.9786 62.0629 86.9416 62.0629 86.9047C62.0505 86.9047 62.0382 86.9047 62.0258 86.9047C62.0258 86.9416 62.0258 86.9786 62.0258 87.0156ZM67.9249 86.9416C67.9249 86.954 67.9249 86.9663 67.9249 86.9786C67.9619 86.9786 67.9989 86.9786 68.0359 86.9786C68.0359 86.9663 68.0359 86.954 68.0359 86.9416C67.9989 86.9416 67.9619 86.9416 67.9249 86.9416ZM70.862 87.2374C70.8497 87.2374 70.8373 87.2374 70.825 87.2374C70.825 87.2744 70.825 87.3113 70.825 87.3483C70.8373 87.3483 70.8497 87.3483 70.862 87.3483C70.862 87.3237 70.862 87.2867 70.862 87.2374ZM70.4424 87.5455C70.4424 87.5332 70.4424 87.5208 70.4424 87.5085C70.4054 87.5085 70.3684 87.5085 70.3313 87.5085C70.3313 87.5208 70.3313 87.5332 70.3313 87.5455C70.3684 87.5455 70.4054 87.5455 70.4424 87.5455Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M8.42899 13.9132C8.54006 13.9132 8.66347 13.9132 8.77454 13.9132C8.77454 14.0734 8.89795 14.0118 8.97199 14.0241C9.04604 14.0487 9.12009 14.0857 9.21881 14.1227C9.21881 13.9378 9.21881 13.7776 9.21881 13.5928C9.32988 13.6297 9.42861 13.6421 9.515 13.679C9.61373 13.7283 9.53968 13.9502 9.74948 13.9132C9.83587 13.9009 9.93459 13.9994 10.0457 14.0487C9.94693 14.1473 9.87289 14.2336 9.7865 14.3199C9.81118 14.4431 9.84821 14.5663 9.88523 14.7512C9.66309 14.6156 9.47798 14.517 9.3052 14.4184C9.10775 14.4431 8.89795 14.4677 8.70049 14.5047C8.44133 14.6649 8.56474 14.8744 8.67581 15.0839C8.5524 15.1702 8.42899 15.2564 8.2809 15.3673C8.33026 15.4536 8.37963 15.5152 8.40431 15.5522C8.31792 15.7617 8.23153 15.9712 8.13281 16.2177C8.05876 16.1807 7.97237 16.1314 7.88599 16.0821C7.99706 15.8726 8.09578 15.6754 8.19451 15.4659C8.12047 15.392 8.04642 15.318 7.94769 15.2071C8.03408 15.1455 8.13281 15.0716 8.23153 14.9976C8.18217 14.9114 8.14515 14.8498 8.10812 14.7881C8.15749 14.6403 8.21919 14.4801 8.26856 14.3445C8.24388 14.2459 8.21919 14.135 8.19451 14.0364C8.2809 14.0118 8.41665 14.0857 8.42899 13.9132Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M97.8518 12.0893C97.8148 12.2002 97.7778 12.3235 97.7408 12.4467C97.5186 12.2742 97.3459 12.1386 97.1484 11.9907C97.1854 11.9168 97.2348 11.8552 97.2965 11.7443C97.1361 11.5348 96.9016 11.3499 96.8152 11.0665C96.9139 11.0418 97.0126 11.0172 97.136 10.9802C97.136 11.0172 97.1361 11.0911 97.1607 11.1651C97.2348 11.3746 97.3459 11.4732 97.5186 11.3992C97.6544 11.3499 97.7284 11.3992 97.8272 11.3992C97.9382 11.4115 98.0616 11.3376 98.1727 11.3006C98.1974 11.3499 98.2221 11.3992 98.2467 11.4608C98.2221 11.5594 98.185 11.695 98.148 11.8429C98.3208 11.9045 98.4812 11.9414 98.6293 11.9907C98.6663 12.0524 98.7034 12.114 98.728 12.1633C98.691 12.2002 98.6663 12.2372 98.6046 12.3111C98.8391 12.3111 99.0366 12.3111 99.2093 12.3111C99.3821 12.4467 99.4809 12.5699 99.3698 12.8041C99.2093 12.7671 99.0489 12.7301 98.8638 12.6809C98.8515 12.7918 98.8268 12.8903 98.8144 13.0013C98.7527 13.0013 98.691 13.0013 98.6293 13.0013C98.6293 12.8287 98.6293 12.6562 98.6293 12.5699C98.4442 12.3851 98.3208 12.2619 98.1604 12.1017C98.1233 12.0893 97.9876 12.0893 97.8518 12.0893C97.8148 12.0524 97.7778 12.0154 97.7408 11.9784C97.7531 11.8675 97.7531 11.7566 97.7531 11.658C97.8395 11.6334 97.9012 11.6087 98.0863 11.5471C97.8765 11.5225 97.7901 11.5225 97.6791 11.5101C97.5927 11.6087 97.4939 11.7073 97.3952 11.8059C97.5186 11.8675 97.6297 11.9168 97.7408 11.9784C97.7778 12.0154 97.8148 12.0524 97.8518 12.0893Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M99.3575 11.7934C99.5549 11.7194 99.6783 11.6701 99.8388 11.6208C99.9128 11.7318 99.9869 11.8427 100.073 11.9906C100.123 11.892 100.147 11.818 100.184 11.7441C100.234 11.7441 100.283 11.7564 100.382 11.7564C100.345 11.8673 100.308 11.9536 100.271 12.0275C100.345 12.0768 100.419 12.1261 100.493 12.1754C100.406 12.3726 100.16 12.3233 99.7153 12.0891C99.6536 12.1508 99.5796 12.2247 99.5179 12.2863C99.4192 12.237 99.3328 12.2 99.197 12.1384C99.2587 12.0275 99.3081 11.9043 99.3575 11.7934Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M95.038 11.9538C94.8899 11.9538 94.7788 11.9538 94.6677 11.9538C94.5937 11.7073 94.8405 11.6827 94.9022 11.5471C95.0503 11.5964 95.1984 11.6334 95.3588 11.695C95.3095 11.8059 95.2601 11.8922 95.2108 12.0031C95.2478 12.0524 95.2848 12.114 95.3342 12.1879C95.2231 12.2496 95.1244 12.3235 94.9886 12.3974C95.0256 12.496 95.075 12.6193 95.149 12.8288C94.9269 12.7425 94.7912 12.6932 94.6431 12.6316C94.6431 12.5083 94.6431 12.3974 94.6431 12.2865C94.7788 12.1879 94.9022 12.1017 95.038 11.9538C94.9886 11.9661 95.001 11.9784 95.001 11.9784C95.038 11.9538 95.0627 11.9291 95.0997 11.9045C95.0873 11.8922 95.075 11.8799 95.0627 11.8675C95.038 11.9045 95.0133 11.9291 95.038 11.9538Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M12.5508 12.656C12.6619 12.656 12.7976 12.656 12.9704 12.656C12.9827 13.075 13.0691 13.5063 12.8223 13.9253C12.6372 13.7158 12.884 13.5803 12.884 13.3831C12.7729 13.3708 12.6742 13.3461 12.5508 13.3215C12.5508 13.0996 12.5508 12.8778 12.5508 12.656Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M8.19451 14.0239C8.13281 14.0239 8.08345 14.0239 7.99706 14.0239C7.97238 14.1225 7.96004 14.2211 7.93535 14.3443C7.81194 14.3443 7.68853 14.3443 7.50342 14.3443C7.54044 14.2827 7.57746 14.2458 7.61449 14.1841C7.58981 14.1595 7.55278 14.1102 7.50342 14.0609C7.61449 13.987 7.7379 13.913 7.84897 13.8391C7.82428 13.8144 7.7996 13.7898 7.7379 13.7282C7.81194 13.7035 7.87365 13.7035 7.92301 13.6789C7.98472 13.6419 8.02174 13.5803 8.08345 13.531C8.16983 13.5926 8.23154 13.6296 8.2809 13.6666C8.31792 13.6296 8.35495 13.6049 8.44133 13.531C8.44133 13.6912 8.44133 13.8021 8.44133 13.9007C8.34261 13.9254 8.20686 13.8514 8.19451 14.0239Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M8.98415 15.5521C8.95947 15.5151 8.92244 15.4782 8.89776 15.4412C8.93478 15.3919 8.97181 15.3549 8.98415 15.3426C8.94713 15.1208 8.9101 14.9359 8.86074 14.6895C9.0582 14.862 9.20629 14.9852 9.35438 15.1208C9.28033 15.1454 9.21863 15.1701 9.1199 15.1947C9.15692 15.2563 9.19395 15.3056 9.24331 15.3672C9.20629 15.4289 9.16926 15.5028 9.13224 15.5767C9.19395 15.6014 9.26799 15.626 9.36672 15.6753C9.31736 15.7739 9.26799 15.8602 9.21863 15.9341C9.05819 15.9341 8.9101 15.9341 8.71265 15.9341C8.82372 15.7739 8.89776 15.663 8.98415 15.5521Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M100.32 12.6808C100.357 12.5575 100.382 12.4959 100.406 12.4097C100.468 12.4343 100.542 12.4343 100.567 12.4713C100.653 12.5822 100.727 12.7054 100.851 12.8903C100.678 12.841 100.554 12.804 100.382 12.7547C100.246 12.8287 100.073 12.9149 99.8264 13.0382C99.9621 13.1244 100.061 13.186 100.172 13.2477C100.061 13.3216 100.011 13.3709 99.9375 13.4202C99.5796 13.297 99.9375 12.8656 99.6042 12.6685C99.9004 12.6808 100.098 12.6808 100.32 12.6808Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M95.9143 11.3992C96.013 11.0171 96.0994 10.9802 96.482 11.165C96.4079 11.2266 96.3339 11.2759 96.2475 11.3499C96.3956 11.4115 96.5314 11.4854 96.7041 11.5594C96.7041 11.6456 96.6918 11.7565 96.6795 11.8921C96.5437 11.8305 96.445 11.7812 96.3586 11.7319C96.3092 11.5101 96.0624 11.5224 95.9143 11.3992Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M11.8596 13.8022C12.0571 13.8022 12.2052 13.8022 12.3656 13.8022C12.489 13.9378 12.6248 14.0734 12.7358 14.1843C12.6865 14.2459 12.6371 14.3198 12.5877 14.3814C12.3903 14.2705 12.2175 14.1843 11.9707 14.0364C11.9707 14.0364 11.9213 13.9255 11.8596 13.8022Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M11.4402 13.9502C11.4649 14.0611 11.4896 14.1597 11.5142 14.246C11.4402 14.3076 11.65 14.4062 11.6253 14.5294C11.4896 14.6157 11.3661 14.7019 11.1934 14.8128C11.1687 14.7759 11.1193 14.7019 11.07 14.6403C11.0946 14.6157 11.1193 14.591 11.1563 14.554C11.1193 14.4924 11.0823 14.4185 11.0576 14.3569C11.1563 14.246 11.2551 14.1474 11.4402 13.9502Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M97.8641 12.8657C97.6296 12.9396 97.4198 13.0135 97.1976 13.0875C97.1729 13.0628 97.1112 13.0012 97.0742 12.9643C97.0742 12.8657 97.0742 12.7794 97.0742 12.6562C97.21 12.6808 97.321 12.6931 97.4938 12.7301C97.5432 12.6931 97.6419 12.6069 97.8024 12.4836C97.827 12.6562 97.8517 12.7671 97.8641 12.8657Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M98.5183 11.3375C98.617 11.2636 98.7034 11.202 98.8268 11.1157C98.9009 11.4115 98.9626 11.6703 99.0243 11.966C98.8885 11.966 98.8268 11.9784 98.7528 11.966C98.7158 11.966 98.6541 11.9414 98.6417 11.9167C98.6047 11.7442 98.5677 11.5717 98.5183 11.3375Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M10.712 13.5681C10.7367 13.6667 10.7613 13.7653 10.786 13.8516C10.6132 13.9871 10.4281 14.135 10.1813 14.3198C10.169 14.1473 10.1566 14.0241 10.1443 13.9132C10.1813 13.8762 10.2183 13.8392 10.2554 13.8023C10.3171 13.7283 10.3788 13.6544 10.4405 13.5681C10.5269 13.5681 10.6132 13.5681 10.712 13.5681Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M96.3091 11.7441C96.4202 11.9167 96.5066 12.0645 96.6176 12.2371C96.5806 12.311 96.5436 12.385 96.5189 12.4589C96.4942 12.5205 96.4695 12.5945 96.4449 12.6561C96.3832 12.6437 96.3338 12.6437 96.2351 12.6314C96.2844 12.5082 96.3338 12.3973 96.3832 12.2617C96.3091 12.2248 96.2351 12.2001 96.1487 12.1631C96.1487 12.0399 96.1487 11.9167 96.1487 11.7688C96.2227 11.7565 96.2968 11.7441 96.3091 11.7441Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M64.42 89.2089C64.1978 89.3199 64.0127 89.4061 63.7782 89.517C63.7412 89.4924 63.6795 89.4308 63.6178 89.3815C63.5808 89.2829 63.7165 89.2089 64.0127 89.172C64.0374 89.0611 64.0497 88.9501 64.0744 88.8269C64.3582 88.8516 64.2842 89.1104 64.42 89.2089Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M67.1967 90.0962C67.1227 90.2194 67.0856 90.281 67.061 90.3427C67.0363 90.392 67.0239 90.4413 66.9993 90.5029C66.9005 90.5522 66.7771 90.6138 66.6414 90.6754C66.5797 90.6138 66.5303 90.5645 66.5056 90.5522C66.6414 90.4166 66.7771 90.281 66.9622 90.0962C66.9375 90.0962 67.0363 90.0962 67.1967 90.0962Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M7.21948 15.1453C6.9233 15.2686 6.67648 14.8742 6.41732 15.1823C6.35561 15.0961 6.29391 15.0098 6.20752 14.8989C6.442 14.8126 6.61477 14.8003 6.77521 14.9359C6.83691 14.8989 6.89862 14.8619 6.985 14.8003C7.07139 14.9112 7.14544 15.0221 7.21948 15.1453Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M99.5426 13.6912C99.4192 13.7281 99.2958 13.7774 99.1601 13.8144C99.1107 13.6419 99.0613 13.5063 99.012 13.3338C99.1107 13.2968 99.2341 13.2352 99.3822 13.1736C99.4439 13.3461 99.4809 13.4817 99.5426 13.6912Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M9.82339 15.1208C10.1072 15.2564 10.3047 15.392 10.243 15.7247C10.1319 15.7247 10.0455 15.7247 10.0085 15.7247C9.88509 15.6138 9.7987 15.5275 9.67529 15.4166C9.71232 15.355 9.74934 15.2564 9.82339 15.1208Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M61.5322 87.7671C61.5446 87.6316 61.5446 87.496 61.5569 87.3481C61.8531 87.3851 61.9148 87.6562 62.1246 87.7425C62.0506 87.8164 62.0012 87.8657 61.9271 87.9397C61.8037 87.8904 61.6803 87.8288 61.5322 87.7671Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M100.888 11.7442C100.554 11.7442 100.616 11.4115 100.443 11.2759C100.517 11.1897 100.567 11.1404 100.616 11.0911C100.752 11.0294 100.912 11.4115 100.888 11.7442Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M10.2924 14.3197C10.4035 14.3813 10.4775 14.4182 10.5516 14.4675C10.6133 14.4059 10.675 14.3443 10.786 14.2334C10.8231 14.3073 10.8601 14.3813 10.9218 14.5045C10.8971 14.5292 10.8477 14.6154 10.786 14.714C10.6133 14.6647 10.4405 14.6154 10.2554 14.5538C10.2554 14.4922 10.2677 14.4306 10.2924 14.3197Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M6.96034 14.3321C6.86161 14.2581 6.72586 14.1719 6.56543 14.0733C6.84927 14.0117 7.08375 13.9747 7.37994 13.9131C7.36759 13.987 7.37994 14.0979 7.33057 14.1349C7.24418 14.2088 7.12077 14.2581 6.96034 14.3321Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M98.5552 13.7159C98.4688 13.6542 98.3948 13.5926 98.2837 13.5064C98.3454 13.3462 98.3948 13.186 98.4565 13.0134C98.7897 13.1736 98.5922 13.4447 98.6786 13.6542C98.6292 13.6666 98.5922 13.6912 98.5552 13.7159Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M98.2096 11.2882C98.1355 11.1403 98.0615 11.0048 97.9751 10.8692C98.2096 10.7336 98.3577 10.9555 98.5551 11.0048C98.4934 11.2019 98.3947 11.3128 98.2096 11.2882Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M60.7177 86.4609C60.7177 86.6581 60.7177 86.7444 60.7177 86.843C60.545 86.8676 60.3969 87.1264 60.113 86.9292C60.2982 86.7937 60.4586 86.6581 60.7177 86.4609Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M95.9144 11.3991C95.8773 11.5101 95.8403 11.6333 95.8033 11.7442C95.4948 11.6579 95.4948 11.6579 95.4824 11.3252C95.6429 11.202 95.7663 11.3499 95.9144 11.3991Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M59.3108 85.5491C59.4589 85.5491 59.5453 85.5491 59.644 85.5491C59.5823 85.7586 60.0513 85.697 59.8908 85.9927C59.5206 85.8448 59.5206 85.8448 59.3108 85.5491Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M63.3587 89.0243C63.1489 88.975 62.9761 88.938 62.791 88.901C62.791 88.8394 62.8034 88.7901 62.8157 88.6915C62.9144 88.7285 62.9885 88.7531 63.0625 88.7778C63.1859 88.7531 63.3093 88.7285 63.5315 88.6792C63.4328 88.8764 63.3834 88.975 63.3587 89.0243Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M59.064 84.6124C59.0023 84.5385 58.9406 84.4523 58.8542 84.3413C59.0764 84.2674 59.2492 84.2058 59.4219 84.1565C59.4466 84.2058 59.459 84.2304 59.4836 84.2797C59.3602 84.3783 59.2368 84.4892 59.064 84.6124Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M100.937 12.2989C100.814 12.2989 100.715 12.2989 100.616 12.2989C100.554 12.077 100.604 11.9168 100.9 11.8306C100.912 12.0031 100.925 12.1386 100.937 12.2989Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M10.2554 14.9975C10.2554 14.9482 10.2554 14.9112 10.2554 14.8249C10.3541 14.8496 10.4528 14.8742 10.5639 14.9112C10.6009 14.8865 10.675 14.8496 10.7984 14.7756C10.8107 14.9235 10.8231 15.0344 10.8354 15.1207C10.786 15.1453 10.7367 15.17 10.712 15.17C10.5516 15.1084 10.4035 15.0467 10.2554 14.9975Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M96.5931 13.1491C96.4327 13.0998 96.2846 13.0505 96.1118 13.0012C96.4204 12.7054 96.4203 12.7054 96.7042 12.9396C96.6672 12.9765 96.6302 13.0135 96.5931 13.0628C96.5931 13.0751 96.5931 13.0998 96.5931 13.1491Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M7.17004 15.1702C7.23174 15.1702 7.28111 15.1702 7.36749 15.1702C7.36749 15.4166 7.36749 15.6754 7.36749 15.9465C7.33047 15.9589 7.28111 15.9712 7.24408 15.9712C7.00961 15.8603 7.40452 15.6754 7.18238 15.5768C7.39218 15.429 7.23174 15.3057 7.17004 15.1702Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M62.4085 88.6914C62.2357 88.7161 62.137 88.7284 62.0259 88.7407C62.0012 88.6545 61.9765 88.5929 61.9395 88.5313C61.9272 88.4943 61.8902 88.482 61.8655 88.445C61.9148 88.3957 61.9766 88.3341 62.0383 88.2725C62.1617 88.3834 62.2604 88.5066 62.4085 88.6914Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M96.5684 13.0012C96.7658 13.1491 96.8645 13.223 97.0003 13.3216C96.8892 13.4325 96.8028 13.5065 96.6424 13.6544C96.6177 13.4202 96.593 13.2723 96.5684 13.0012Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M98.5676 12.841C98.2961 12.9273 98.148 12.8533 98.074 12.6192C98.3578 12.5329 98.3578 12.5329 98.5676 12.841Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M5.09692 14.8127C5.30672 14.9729 5.39311 15.0469 5.51652 15.1578C5.39311 15.2687 5.30672 15.3427 5.14629 15.4905C5.13395 15.2564 5.12161 15.1085 5.09692 14.8127Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M12.378 13.4448C12.2422 13.3709 12.1065 13.2846 11.9707 13.2106C12.0324 13.0874 12.0818 12.9888 12.1435 12.8533C12.2545 13.0504 12.3409 13.223 12.4397 13.3955C12.4273 13.4078 12.4026 13.4201 12.378 13.4448Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M97.9136 14.0117C97.9876 13.8392 98.037 13.6913 98.1357 13.4448C98.2344 13.6913 98.2838 13.8268 98.3579 14.0117C98.1974 14.0117 98.111 14.0117 97.9136 14.0117Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M95.8155 11.7812C95.9019 11.8305 95.9759 11.8675 96.0993 11.9291C96.0006 12.04 95.9513 12.114 95.8772 12.1633C95.8402 12.1879 95.7785 12.1879 95.7291 12.1879C95.6304 12.0154 95.6551 11.8675 95.8155 11.7812Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M11.3661 13.408C11.4278 13.5435 11.4772 13.6298 11.5266 13.7284C11.3291 13.8762 11.1934 13.8023 11.0576 13.6051C11.1563 13.5435 11.2674 13.4819 11.3661 13.408Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M96.0994 13.6913C95.939 13.8022 95.8526 13.8762 95.7045 13.9871C95.6922 13.8269 95.6798 13.7283 95.6675 13.642C95.7415 13.5681 95.7909 13.5188 95.8156 13.4941C95.902 13.5311 95.976 13.5804 96.0994 13.6913Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M100.172 13.7899C100.332 13.679 100.419 13.6051 100.567 13.4941C100.579 13.6543 100.591 13.7529 100.604 13.8392C100.53 13.9131 100.48 13.9624 100.456 13.9871C100.369 13.9501 100.308 13.8885 100.172 13.7899Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M96.0254 14.6772C96.2475 14.4923 96.3586 14.4061 96.4573 14.3198C96.4573 14.3938 96.4573 14.517 96.4573 14.6772C96.371 14.6772 96.2475 14.6772 96.0254 14.6772Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M100.382 11.2512C100.32 11.2758 100.246 11.3005 100.184 11.3251C100.197 11.3498 100.209 11.3621 100.234 11.3867C100.024 11.3867 99.8017 11.3867 99.5919 11.3867C99.5919 11.3744 99.5919 11.3498 99.5796 11.3375C99.8264 11.2882 100.086 11.2265 100.332 11.1772C100.345 11.1896 100.369 11.2142 100.382 11.2512Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M11.6252 13.0012C11.6376 13.1984 11.6499 13.3956 11.3907 13.4572C11.3537 13.3832 11.3167 13.3093 11.2673 13.2354C11.329 13.0628 11.4401 12.9766 11.6252 13.0012Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M97.8519 10.8568C97.8519 10.9554 97.8519 11.0293 97.8519 11.1402C97.7531 11.1526 97.6544 11.1526 97.531 11.1649C97.531 11.054 97.531 10.9677 97.531 10.8445C97.6174 10.8568 97.7408 10.8568 97.8519 10.8568Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M2.43115 14.7881C2.52988 14.7142 2.61627 14.6772 2.715 14.6033C2.76436 14.7142 2.81372 14.8621 2.87543 15.0223C2.62861 14.9976 2.62861 14.9976 2.43115 14.7881Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M98.8513 14.4431C98.8513 14.554 98.8513 14.6896 98.8513 14.8744C98.7279 14.8005 98.6415 14.7512 98.5798 14.7142C98.6786 14.6156 98.7773 14.5171 98.8513 14.4431Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M64.0251 89.8622C64.0251 89.9731 64.0251 90.0717 64.0251 90.1826C63.914 90.1826 63.803 90.1826 63.6919 90.1826C63.7166 89.9362 63.84 89.8499 64.0251 89.8622Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M12.5384 12.6561C12.4397 12.6561 12.3286 12.6561 12.1929 12.6561C12.1929 12.5575 12.1929 12.4959 12.1929 12.4219C12.2793 12.3726 12.3656 12.3357 12.5014 12.2617C12.5137 12.4219 12.5261 12.5452 12.5384 12.6561Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M8.77455 13.913C8.77455 13.8144 8.77455 13.7158 8.77455 13.6296C8.77455 13.5679 8.62646 13.5679 8.71285 13.457C8.99669 13.4694 9.02138 13.6542 8.99669 13.9007C8.91031 13.9007 8.83626 13.913 8.77455 13.913Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M58.7801 85.8079C58.7801 85.9927 58.7801 86.079 58.7801 86.2022C58.6937 86.2022 58.595 86.2145 58.4715 86.2269C58.4222 85.9927 58.5579 85.9311 58.7801 85.8079Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M95.9513 12.8656C95.7909 12.8656 95.6922 12.8656 95.5317 12.8656C95.6058 12.73 95.6552 12.6314 95.7292 12.4958C95.8156 12.6314 95.8773 12.73 95.9513 12.8656Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M65.7776 90.0347C65.9257 90.1333 66.0121 90.1825 66.1355 90.2688C66.0121 90.3427 65.9133 90.4044 65.7776 90.4906C65.7776 90.3058 65.7776 90.2072 65.7776 90.0347Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M68.0977 91.3163C68.2334 91.2177 68.3198 91.1561 68.4555 91.0452C68.4679 91.23 68.4802 91.3409 68.4802 91.5011C68.3445 91.4395 68.2457 91.3902 68.0977 91.3163Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M68.2087 91.378C68.073 91.4766 67.9866 91.5382 67.8509 91.6491C67.8385 91.4642 67.8262 91.3533 67.8262 91.1931C67.9743 91.2547 68.0607 91.304 68.2087 91.378Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M7.25659 14.7756C7.36766 14.6894 7.44171 14.6278 7.57746 14.5168C7.60214 14.6894 7.61448 14.8003 7.63916 14.9851C7.46639 14.8989 7.36766 14.8496 7.25659 14.7756Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M58.4839 85.364C58.6196 85.4503 58.706 85.4996 58.8171 85.5735C58.706 85.6598 58.6196 85.7214 58.4839 85.82C58.4839 85.6475 58.4839 85.5366 58.4839 85.364Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M94.421 11.313C94.421 11.3869 94.421 11.4362 94.421 11.4978C94.3099 11.4978 94.2112 11.4978 94.1001 11.4978C94.1001 11.4239 94.1001 11.3746 94.1001 11.313C94.1988 11.313 94.3099 11.313 94.421 11.313Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M63.0254 90.1702C63.0254 89.9607 63.0254 89.8745 63.0254 89.7759C63.1365 89.8252 63.2352 89.8621 63.371 89.9114C63.2722 89.9977 63.1858 90.0593 63.0254 90.1702Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M64.0745 89.8745C64.0128 89.8005 63.9757 89.7512 63.9387 89.6896C63.9881 89.6403 64.0498 89.5787 64.1115 89.5171C64.1732 89.591 64.2473 89.6773 64.346 89.8005C64.2102 89.8375 64.1238 89.8621 64.0745 89.8745Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M94.7295 13.6667C94.7912 13.7777 94.8406 13.8762 94.9023 13.9748C94.6802 14.1104 94.6432 13.9379 94.5444 13.8516C94.6061 13.79 94.6555 13.7284 94.7295 13.6667Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M63.223 89.5171C63.1613 89.5171 63.0995 89.5171 63.0378 89.5171C63.0378 89.4062 63.0378 89.3076 63.0378 89.1844C63.3587 89.1721 63.2106 89.3692 63.223 89.5171Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M57.5215 84.3782C57.5215 84.5261 57.5215 84.6123 57.5215 84.7109C57.4597 84.7232 57.4104 84.7356 57.324 84.7479C57.3117 84.637 57.3117 84.5384 57.2993 84.4151C57.3734 84.4028 57.4227 84.3905 57.5215 84.3782Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M97.8519 12.8904C97.9136 12.8904 97.9629 12.8904 98.0246 12.8904C98.074 12.989 98.1234 13.0999 98.1974 13.2354C97.9382 13.2108 97.8395 13.0999 97.8519 12.8904Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M59.496 87.151C59.4096 87.2496 59.3603 87.3112 59.2862 87.3852C59.2245 87.2743 59.1752 87.1757 59.0518 86.9539C59.2739 87.0524 59.3726 87.0894 59.496 87.151Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M3.85036 15.7616C3.85036 15.8232 3.85036 15.8849 3.85036 15.9465C3.73929 15.9465 3.64056 15.9465 3.51715 15.9465C3.50481 15.6261 3.70227 15.7616 3.85036 15.7616Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M94.4088 13.9007C94.3347 13.9007 94.2853 13.9007 94.2236 13.9007C94.2236 13.7898 94.2236 13.6912 94.2236 13.5803C94.2977 13.5803 94.347 13.5803 94.4088 13.5803C94.4088 13.6912 94.4088 13.7898 94.4088 13.9007Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M12.7482 10.3886C12.6371 10.3023 12.5877 10.253 12.5137 10.1914C12.6371 10.1298 12.7358 10.0805 12.9579 9.95728C12.8469 10.1791 12.7975 10.2777 12.7482 10.3886Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M69.1714 91.3286C69.2578 91.23 69.3071 91.1684 69.3812 91.0945C69.4429 91.2054 69.4922 91.304 69.6157 91.5258C69.3935 91.4272 69.2948 91.3779 69.1714 91.3286Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M57.8917 83.8113C58.0028 83.8975 58.0521 83.9468 58.1262 84.0085C58.0028 84.0701 57.904 84.1194 57.6819 84.2426C57.8053 84.0208 57.8423 83.9222 57.8917 83.8113Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M58.2865 85.5244C58.0891 85.5244 58.0027 85.5244 57.8669 85.5244C57.8916 85.4381 57.904 85.3642 57.941 85.241C58.0644 85.3396 58.1508 85.4012 58.2865 85.5244Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M12.4274 14.6155C12.4151 14.7017 12.4027 14.7634 12.378 14.8743C12.2546 14.788 12.1682 14.7141 12.0078 14.6155C12.2053 14.6155 12.304 14.6155 12.4274 14.6155Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M58.5086 84.6123C58.5703 84.6739 58.6196 84.7109 58.6567 84.7602C58.669 84.7725 58.669 84.7848 58.669 84.7848C58.6196 84.8465 58.5703 84.8957 58.5209 84.9574C58.4592 84.8957 58.4098 84.8465 58.3481 84.7848C58.3852 84.7355 58.4345 84.6862 58.5086 84.6123Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M97.4323 13.6049C97.2965 13.4078 97.2471 13.3338 97.1731 13.2475C97.2718 13.2352 97.3705 13.2352 97.531 13.2229C97.494 13.3215 97.4816 13.3954 97.4323 13.6049Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M70.0353 92.1914C69.9489 92.3146 69.8749 92.4009 69.7761 92.5488C69.7761 92.3639 69.7761 92.2653 69.7761 92.1421C69.8625 92.1544 69.9242 92.1667 70.0353 92.1914Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M71.4668 91.4395C71.294 91.5873 71.2076 91.6613 71.0966 91.7475C71.0472 91.649 71.0225 91.5997 70.9731 91.5011C71.1212 91.4764 71.2323 91.4641 71.4668 91.4395Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M68.875 91.2917C68.9737 91.415 69.0354 91.5012 69.1342 91.6122C69.0354 91.6491 68.9737 91.6738 68.875 91.7107C68.875 91.5752 68.875 91.4643 68.875 91.2917Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M62.7416 88.8516C62.5935 88.9625 62.5071 89.0241 62.3714 89.1104C62.3467 88.9994 62.3344 88.9378 62.322 88.8516C62.4578 88.8516 62.5565 88.8516 62.7416 88.8516Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M60.2117 87.5701C60.3598 87.4592 60.4585 87.3975 60.5819 87.3113C60.5942 87.4222 60.6066 87.4961 60.6189 87.5701C60.4955 87.5701 60.3968 87.5701 60.2117 87.5701Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M93.224 11.6208C93.2981 11.6948 93.3475 11.7441 93.3845 11.7934C93.3228 11.855 93.2734 11.9166 93.224 11.9659C93.1623 11.9043 93.113 11.855 93.0513 11.7934C93.113 11.7564 93.1623 11.6948 93.224 11.6208Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M59.7057 86.6211C59.7057 86.732 59.7057 86.7813 59.7057 86.8799C59.5946 86.8922 59.4835 86.8922 59.3848 86.9045C59.3725 86.8799 59.3724 86.8552 59.3601 86.8306C59.4712 86.7566 59.5699 86.695 59.7057 86.6211Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M11.1316 15.5891C11.255 15.4905 11.3414 15.4289 11.4771 15.3303C11.3784 15.5768 11.3784 15.5768 11.1316 15.5891Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M9.79869 15.1702C9.72464 15.1702 9.66294 15.1579 9.57655 15.1579C9.57655 15.0839 9.56421 15.0346 9.56421 14.9607C9.63825 14.9484 9.69996 14.9484 9.77401 14.936C9.78635 15.0346 9.79869 15.0962 9.79869 15.1702Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M62.2232 87.8164C62.3096 87.8164 62.359 87.8164 62.4207 87.8164C62.433 87.878 62.4453 87.9273 62.4577 87.9889C62.3096 88.0752 62.2109 88.0752 62.2232 87.8164Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M61.6433 88.0505C61.7297 88.0505 61.7791 88.0505 61.8408 88.0505C61.8531 88.1122 61.8654 88.1615 61.8778 88.2231C61.7297 88.3093 61.6433 88.3093 61.6433 88.0505Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M97.4815 14.2581C97.3581 14.2457 97.2594 14.2457 97.1113 14.2334C97.2101 14.1472 97.2594 14.0979 97.3581 14.0239C97.3952 14.0855 97.4322 14.1595 97.4815 14.2581Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M100.875 13.1492C100.777 13.2847 100.715 13.371 100.628 13.4942C100.641 13.2478 100.641 13.2478 100.875 13.1492Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M58.6815 84.3783C58.5951 84.3783 58.5457 84.3783 58.484 84.3783C58.4717 84.3167 58.4594 84.2674 58.447 84.2058C58.5951 84.1195 58.6815 84.1318 58.6815 84.3783Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M11.6252 12.9395C11.724 12.8902 11.8227 12.8409 11.9338 12.7793C11.9461 12.8286 11.9585 12.8779 11.9831 12.9641C11.8597 12.9765 11.7363 13.0011 11.6252 13.0134C11.6252 12.9888 11.6252 12.9641 11.6252 12.9395Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M12.9703 14.9729C12.8839 14.8867 12.8222 14.825 12.7605 14.7634C12.8099 14.7018 12.8592 14.6402 12.9703 14.5046C12.9703 14.7265 12.9703 14.825 12.9703 14.9729Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M10.1444 13.913C9.98393 13.8883 9.99628 13.7774 10.0827 13.7035C10.1444 13.6542 10.2554 13.6665 10.2554 13.8021C10.2184 13.8391 10.1814 13.876 10.1444 13.913Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M95.0626 11.3499C95.0009 11.2267 94.9639 11.1527 94.9392 11.1034C95.0873 11.0665 95.0873 11.0665 95.0626 11.3499Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M99.5796 14.9483C99.5796 14.8497 99.5796 14.7881 99.5796 14.7634C99.6413 14.8004 99.7153 14.8497 99.8017 14.9113C99.7277 14.9236 99.6783 14.936 99.5796 14.9483Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M94.0383 12.2865C93.9766 12.2495 93.9149 12.2126 93.7915 12.1386C94.0754 12.114 94.0754 12.114 94.0383 12.2865Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M5.75099 14.2212C5.80036 14.3075 5.84972 14.3814 5.89909 14.4677C5.75099 14.4923 5.61524 14.517 5.75099 14.2212Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M71.3557 91.4642C71.3557 91.4026 71.3681 91.3287 71.3681 91.2424C71.4421 91.2424 71.5038 91.2548 71.5902 91.2548C71.5161 91.3657 71.4668 91.4396 71.4174 91.5259C71.3927 91.5012 71.3681 91.4766 71.3557 91.4642Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M99.9499 12.3728C99.8511 12.4221 99.7771 12.459 99.6907 12.496C99.6784 12.3974 99.6167 12.2495 99.9499 12.3728Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M99.197 12.9765C99.1353 12.9765 99.0736 12.9765 99.0118 12.9765C99.0118 12.9519 99.0119 12.9395 98.9995 12.9149C99.0612 12.9026 99.1229 12.8903 99.1846 12.8779C99.197 12.9149 99.197 12.9519 99.197 12.9765Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M4.40586 14.9607C4.40586 15.0223 4.40586 15.0839 4.40586 15.1455C4.39352 15.1455 4.36883 15.1455 4.35649 15.1579C4.34415 15.0963 4.33181 15.0346 4.30713 14.973C4.34415 14.9607 4.38118 14.9607 4.40586 14.9607Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M93.8286 12.4343C93.8286 12.5083 93.8286 12.5822 93.8286 12.6685C93.8039 12.6685 93.7915 12.6685 93.7668 12.6685C93.7668 12.5945 93.7668 12.5206 93.7668 12.4343C93.7915 12.4343 93.8039 12.4343 93.8286 12.4343Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M13.0814 14.936C13.0937 15.01 13.0937 15.0839 13.1061 15.1579C13.0814 15.1579 13.0567 15.1702 13.032 15.1702C13.0197 15.0962 13.0073 15.0223 12.9827 14.9484C13.0197 14.936 13.0444 14.936 13.0814 14.936Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M10.4651 15.4413C10.5021 15.3057 10.5268 15.2318 10.5391 15.1702C10.5515 15.2195 10.5762 15.2811 10.5885 15.3304C10.5885 15.3427 10.5515 15.3673 10.4651 15.4413Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M1.90049 13.7036C1.90049 13.7652 1.90049 13.8268 1.90049 13.8885C1.8758 13.8885 1.86346 13.8885 1.83878 13.9008C1.82644 13.8392 1.8141 13.7776 1.80176 13.7159C1.82644 13.7036 1.86346 13.7036 1.90049 13.7036Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M70.467 92.1419C70.467 92.0679 70.467 91.994 70.467 91.9077C70.4917 91.9077 70.5041 91.9077 70.5287 91.9077C70.5287 91.9817 70.5287 92.0556 70.5287 92.1419C70.5041 92.1419 70.4917 92.1419 70.467 92.1419Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M96.4819 11.1772C96.4943 11.0047 96.6177 11.0786 96.7164 11.0663C96.7041 11.2265 96.5683 11.1526 96.4819 11.1772Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M58.5828 83.9592C58.6445 83.9592 58.7062 83.9592 58.7679 83.9592C58.7679 83.9716 58.7679 83.9962 58.7802 84.0085C58.7185 84.0208 58.6568 84.0332 58.5951 84.0578C58.5951 84.0208 58.5828 83.9839 58.5828 83.9592Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M62.1245 84.8711C62.1862 84.8711 62.2479 84.8711 62.3096 84.8711C62.3096 84.8834 62.3096 84.9081 62.322 84.9204C62.2603 84.9327 62.1986 84.945 62.1369 84.9697C62.1245 84.9327 62.1245 84.8957 62.1245 84.8711Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M62.6552 85.0561C62.5935 85.0561 62.5318 85.0561 62.4701 85.0561C62.4701 85.0438 62.4701 85.0191 62.4578 85.0068C62.5195 84.9945 62.5812 84.9822 62.6429 84.9575C62.6429 84.9945 62.6552 85.0191 62.6552 85.0561Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M62.8157 85.093C62.8774 85.093 62.9391 85.093 63.0008 85.093C63.0008 85.1177 63.0008 85.13 63.0131 85.1546C62.9514 85.167 62.8897 85.1793 62.828 85.1916C62.8157 85.1546 62.8157 85.13 62.8157 85.093Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M63.7907 85.4011C63.729 85.4011 63.6673 85.4011 63.6056 85.4011C63.6056 85.3764 63.6056 85.3641 63.5933 85.3395C63.655 85.3271 63.7167 85.3148 63.7784 85.3025C63.7907 85.3271 63.7907 85.3641 63.7907 85.4011Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M92.718 11.0911C92.7921 11.0911 92.8661 11.0911 92.9525 11.0911C92.9525 11.1157 92.9525 11.128 92.9525 11.1527C92.8785 11.1527 92.8044 11.1527 92.718 11.1527C92.718 11.128 92.718 11.1034 92.718 11.0911Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M96.8398 11.9538C96.8398 11.8921 96.8398 11.8305 96.8398 11.7689C96.8522 11.7689 96.8769 11.7689 96.8892 11.7566C96.9015 11.8182 96.9139 11.8798 96.9386 11.9414C96.9139 11.9414 96.8769 11.9538 96.8398 11.9538Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M7.98462 16.5133C7.98462 16.4517 7.98462 16.3901 7.98462 16.3285C7.99696 16.3285 8.02164 16.3285 8.03398 16.3162C8.04632 16.3778 8.05867 16.4394 8.08335 16.501C8.05867 16.5133 8.02164 16.5133 7.98462 16.5133Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M9.0954 16.2915C9.0337 16.2915 8.97199 16.2915 8.91029 16.2915C8.91029 16.2791 8.91029 16.2545 8.89795 16.2422C8.95965 16.2298 9.02136 16.2175 9.08306 16.1929C9.08306 16.2175 9.08306 16.2545 9.0954 16.2915Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M96.7041 11.0542C96.7288 11.0172 96.7535 10.9925 96.7781 10.9556C96.7905 10.9925 96.8028 11.0172 96.8152 11.0542C96.7905 11.0542 96.7535 11.0542 96.7041 11.0542Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M12.0818 12.4343C12.1065 12.3973 12.1312 12.3727 12.1558 12.3357C12.1682 12.3727 12.1805 12.3973 12.1929 12.4343C12.1558 12.4343 12.1188 12.4343 12.0818 12.4343Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M12.0942 12.4342C12.0695 12.4712 12.0449 12.4958 12.0202 12.5328C12.0078 12.5205 11.9955 12.5081 11.9832 12.4958C12.0202 12.4712 12.0449 12.4465 12.0819 12.4219C12.0819 12.4219 12.0819 12.4342 12.0942 12.4342Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M72.2811 90.429C72.3182 90.4536 72.3428 90.4782 72.3799 90.5029C72.3675 90.5152 72.3552 90.5275 72.3428 90.5399C72.3182 90.5029 72.2935 90.4782 72.2688 90.4413C72.2688 90.4413 72.2688 90.429 72.2811 90.429Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M61.9878 84.8092C61.9511 84.8092 61.9144 84.8092 61.8777 84.8092C61.8777 84.797 61.8777 84.7849 61.8777 84.7727C61.9144 84.7727 61.9511 84.7727 61.9878 84.7727C61.9878 84.7849 61.9878 84.797 61.9878 84.8092Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M63.3577 85.265C63.321 85.265 63.2843 85.265 63.2476 85.265C63.2476 85.2528 63.2476 85.2407 63.2476 85.2285C63.2843 85.2285 63.321 85.2285 63.3577 85.2285C63.3577 85.2407 63.3577 85.2528 63.3577 85.265Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M65.8393 85.7585C65.8393 85.7955 65.8393 85.8325 65.8393 85.8695C65.8269 85.8695 65.8146 85.8695 65.8022 85.8695C65.8022 85.8325 65.8022 85.7955 65.8022 85.7585C65.8146 85.7585 65.8269 85.7585 65.8393 85.7585Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M68.1222 85.9927C68.1222 86.0296 68.1222 86.0666 68.1222 86.1036C68.1099 86.1036 68.0975 86.1036 68.0852 86.1036C68.0852 86.0666 68.0852 86.0296 68.0852 85.9927C68.0975 85.9927 68.1099 85.9927 68.1222 85.9927Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M4.19506 16.3773C4.15836 16.3773 4.12166 16.3773 4.08496 16.3773C4.08496 16.3652 4.08496 16.353 4.08496 16.3408C4.12166 16.3408 4.15836 16.3408 4.19506 16.3408C4.19506 16.353 4.19506 16.3652 4.19506 16.3773Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M12.0808 15.5885C12.0441 15.5885 12.0074 15.5885 11.9707 15.5885C11.9707 15.5763 11.9707 15.5642 11.9707 15.552C12.0074 15.552 12.0441 15.552 12.0808 15.552C12.0808 15.552 12.0808 15.5763 12.0808 15.5885Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M94.7294 14.48C94.7294 14.517 94.7294 14.5539 94.7294 14.5909C94.7171 14.5909 94.7047 14.5909 94.6924 14.5909C94.6924 14.5539 94.6924 14.517 94.6924 14.48C94.7047 14.48 94.7171 14.48 94.7294 14.48Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M10.6997 13.5556C10.7244 13.5186 10.7491 13.494 10.7738 13.457C10.7861 13.4694 10.7984 13.4817 10.8108 13.494C10.7738 13.5186 10.7491 13.5433 10.712 13.5679C10.712 13.5679 10.6997 13.5679 10.6997 13.5556Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M8.39176 13.3462C8.39176 13.3832 8.39176 13.4201 8.39176 13.4571C8.37942 13.4571 8.36708 13.4571 8.35474 13.4571C8.35474 13.4201 8.35474 13.3832 8.35474 13.3462C8.36708 13.3462 8.37942 13.3462 8.39176 13.3462Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M94.8405 13.2229C94.8405 13.2599 94.8405 13.2968 94.8405 13.3338C94.8281 13.3338 94.8158 13.3338 94.8035 13.3338C94.8035 13.2968 94.8035 13.2599 94.8035 13.2229C94.8158 13.2229 94.8281 13.2229 94.8405 13.2229Z"
                                                                    fill="#F57D77" />
                                                                <path
                                                                    d="M83.3759 148.756C83.4993 148.522 83.598 148.337 83.6967 148.152C83.8201 148.152 83.9065 148.152 84.0053 148.152C84.0916 148.435 83.9929 148.657 83.8201 148.854C83.6474 149.052 83.4499 149.199 83.1784 149.162C83.1167 149.064 83.0673 148.99 82.981 148.854C82.9193 149.002 82.8822 149.076 82.8452 149.15C82.6601 149.15 82.475 149.15 82.2775 149.15C82.1788 149.052 82.0677 148.953 81.969 148.867C81.9813 148.805 81.9813 148.756 82.006 148.731C82.1047 148.596 82.2282 148.546 82.4133 148.596C82.4256 148.633 82.4256 148.694 82.438 148.743C82.4503 148.793 82.4503 148.854 82.4626 148.904C82.5614 148.904 82.6601 148.904 82.7588 148.904C82.7712 148.842 82.7835 148.793 82.7835 148.731C82.7095 148.706 82.6477 148.682 82.586 148.657C82.5367 148.497 82.4873 148.349 82.4256 148.164C82.4873 148.127 82.5737 148.078 82.6848 148.016C82.7218 148.053 82.8205 148.127 82.9316 148.214C82.8205 148.337 82.7465 148.435 82.6231 148.583C82.7958 148.583 82.9193 148.559 83.0427 148.583C83.1661 148.633 83.2771 148.706 83.3759 148.756ZM83.2278 148.978C83.2278 148.99 83.2278 149.002 83.2278 149.015C83.2648 149.015 83.3018 149.015 83.3388 149.015C83.3388 149.002 83.3388 148.99 83.3388 148.978C83.3142 148.978 83.2648 148.978 83.2278 148.978Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M89.6326 147.807C89.7066 147.758 89.7807 147.721 89.8547 147.671C90.0522 147.856 90.0522 147.856 90.0769 148.053C89.8424 148.201 89.6202 148.349 89.3981 148.472C89.4598 148.756 89.8794 148.657 89.8424 149.002C89.5956 149.101 89.3487 149.052 89.1143 148.904C89.0649 149.002 89.0279 149.076 88.9908 149.162C88.9415 149.15 88.8798 149.138 88.8304 149.138C88.8674 149.064 88.9045 149.002 88.9538 148.928C88.8304 148.83 88.6947 148.731 88.4849 148.559C88.6576 148.509 88.7687 148.472 88.9415 148.423C88.8921 148.386 88.9538 148.435 88.9908 148.46C89.1143 148.312 89.2253 148.164 89.3487 148.016C89.4475 148.016 89.5215 148.016 89.6202 148.016C89.6202 147.942 89.6326 147.869 89.6326 147.807Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M86.5352 148.029C86.5722 147.893 86.6216 147.757 86.6709 147.622C86.7943 147.585 86.9301 147.536 87.0658 147.486C87.1399 147.523 87.2263 147.573 87.362 147.634C87.2756 147.757 87.2016 147.868 87.0905 148.041C87.1152 148.238 87.1522 148.509 87.2016 148.817C86.9548 148.854 86.8314 148.669 86.7079 148.472C86.6339 148.583 86.5722 148.694 86.5105 148.78C86.4488 148.706 86.3747 148.608 86.2637 148.497C86.276 148.411 86.313 148.25 86.3624 148.053C86.3994 148.041 86.4735 148.029 86.5352 148.029C86.5845 148.066 86.6216 148.102 86.6709 148.139L86.6586 148.152C86.6833 148.189 86.7079 148.213 86.7326 148.25C86.745 148.238 86.7573 148.226 86.7696 148.213C86.7326 148.189 86.7079 148.164 86.6709 148.139C86.6216 148.102 86.5845 148.066 86.5352 148.029Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M87.9543 148.83C87.9049 148.83 87.8309 148.83 87.7198 148.83C87.6581 148.682 87.5964 148.522 87.5347 148.349C87.7445 148.164 87.9296 148.004 88.1394 147.807C88.1394 147.795 88.1394 147.721 88.1394 147.622C88.3985 147.622 88.6454 147.622 88.9045 147.622C89.0896 147.893 89.102 147.955 88.9539 148.09C88.8181 148.226 88.6947 148.201 88.3862 147.93C88.2505 148.214 88.1024 148.509 87.9543 148.83Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M94.5443 144.837C94.4949 144.701 94.4456 144.578 94.3715 144.406C94.3222 144.393 94.2234 144.381 94.063 144.356C94.1247 144.245 94.1741 144.134 94.2234 144.024C94.3222 144.122 94.4085 144.196 94.4826 144.27C94.606 144.27 94.7171 144.27 94.8281 144.27C94.9886 143.974 94.9886 143.974 95.2971 143.937C95.3094 143.95 95.3341 143.962 95.3341 143.974C95.3341 144.048 95.3341 144.122 95.3341 144.208C95.5563 144.221 95.5686 144.43 95.6673 144.541C95.5439 144.775 95.3341 144.701 95.1367 144.714C95.112 144.578 95.0996 144.479 95.075 144.319C94.9886 144.566 94.9145 144.763 94.8528 144.935C94.7664 144.935 94.7171 144.935 94.6554 144.935C94.6183 144.911 94.5813 144.874 94.5443 144.837Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M99.1228 148.14C99.1968 148.14 99.2956 148.14 99.382 148.14C99.4437 148.3 99.5177 148.46 99.6041 148.657C99.7522 148.546 99.8509 148.472 99.9743 148.374C100.073 148.374 100.196 148.374 100.332 148.374C100.419 148.707 100.283 148.941 100.061 149.175C99.7645 149.039 99.456 148.904 99.1228 148.756C99.1228 148.583 99.1228 148.361 99.1228 148.14ZM99.7892 148.756C99.7892 148.768 99.7892 148.78 99.7892 148.793C99.8262 148.793 99.8633 148.793 99.9003 148.793C99.9003 148.78 99.9003 148.768 99.9003 148.756C99.8633 148.756 99.8262 148.756 99.7892 148.756Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M100.394 141.374C100.554 141.337 100.666 141.325 100.826 141.288C100.826 141.411 100.863 141.534 100.814 141.584C100.628 141.805 100.406 142.003 100.085 141.99C100.024 141.929 99.9744 141.879 99.9127 141.818C99.9497 141.781 99.9744 141.744 100.011 141.707C99.8387 141.547 99.4808 141.584 99.4314 141.189C99.5918 141.214 99.7276 141.226 99.8757 141.251C99.888 141.189 99.9127 141.078 99.9374 140.93C100.184 141.029 100.332 141.165 100.394 141.374ZM100.369 141.608C100.369 141.596 100.369 141.584 100.369 141.571C100.332 141.571 100.295 141.571 100.258 141.571C100.258 141.584 100.258 141.596 100.258 141.608C100.283 141.608 100.32 141.608 100.369 141.608Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M88.744 146.439C88.8674 146.439 89.0032 146.439 89.1019 146.439C89.1883 146.303 89.25 146.205 89.3487 146.044C89.4351 146.205 89.4968 146.316 89.5832 146.476C89.4598 146.525 89.3734 146.55 89.3117 146.599C89.25 146.636 89.2253 146.71 89.1759 146.772C89.1266 146.833 89.0772 146.882 89.0032 146.956C89.0155 147.03 89.0525 147.166 89.0649 147.227C88.9785 147.338 88.9291 147.412 88.8798 147.474C88.744 147.412 88.6329 147.363 88.5342 147.314C88.4849 147.215 88.4355 147.117 88.3738 146.993C88.4848 146.833 88.6083 146.636 88.744 146.439Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M100.826 142.668C100.888 142.582 100.949 142.508 101.036 142.385C101.147 142.483 101.221 142.545 101.307 142.631C101.27 142.705 101.233 142.767 101.184 142.853C101.233 142.865 101.283 142.89 101.394 142.927C101.381 143.025 101.369 143.161 101.344 143.333C101.394 143.407 101.48 143.531 101.579 143.666C101.628 143.629 101.702 143.592 101.826 143.518C101.838 143.666 101.85 143.765 101.863 143.851C101.727 143.987 101.307 143.839 101.036 143.568C101.073 143.518 101.11 143.457 101.184 143.346C101.048 143.37 100.962 143.383 100.826 143.407C100.826 143.247 100.826 143.062 100.826 142.877C100.9 142.877 100.962 142.877 101.134 142.877C100.974 142.779 100.9 142.73 100.826 142.668Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M80.093 148.595C79.9696 148.595 79.9202 148.595 79.9202 148.595C79.7474 148.805 79.587 148.977 79.4266 149.162C79.2168 148.842 78.9083 149.421 78.7231 149.051C78.5627 149.261 78.3282 149.113 78.0938 149.199C78.1555 149.051 78.1925 148.953 78.2542 148.805C78.4146 148.842 78.6244 148.953 78.7231 148.891C78.9206 148.768 79.0934 148.867 79.2785 148.805C79.3525 148.608 79.4513 148.411 79.7474 148.484C79.7721 148.411 79.7968 148.337 79.8462 148.213C79.9449 148.361 80.0066 148.472 80.093 148.595Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M91.5948 146.303C91.5454 146.229 91.4714 146.106 91.3973 145.983C91.3727 146.007 91.3973 145.983 91.3973 145.983C91.2863 145.872 91.1752 145.761 91.1382 145.724C91.1999 145.441 91.2246 145.268 91.2616 145.083C91.348 145.083 91.4344 145.083 91.5701 145.083C91.5454 145.231 91.5208 145.354 91.4961 145.527C91.5084 145.552 91.5454 145.625 91.5948 145.736C91.7923 145.761 92.0884 145.773 92.002 146.131C91.9897 146.279 91.8416 146.353 91.5948 146.303Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M94.1866 145.884C94.1866 146.069 94.1866 146.23 94.1866 146.39C94.0015 146.501 93.8657 146.427 93.7546 146.266C93.7423 146.143 93.7423 146.02 93.73 145.847C93.6683 145.897 93.6312 145.921 93.5695 145.971C93.3968 145.786 93.2363 145.589 93.3227 145.268C93.6929 145.392 93.8657 145.737 94.1866 145.884Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M98.7774 148.386C98.5059 148.201 98.2591 148.029 97.9875 147.844C97.9875 147.795 97.9875 147.708 97.9875 147.622C98.0863 147.573 98.1727 147.523 98.3084 147.449C98.3578 147.585 98.4195 147.733 98.4689 147.868C98.6169 147.844 98.7897 147.807 98.9378 147.782C98.9995 147.918 99.1229 148.053 99.0982 148.14C99.0612 148.238 98.9008 148.287 98.7774 148.386Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M102.369 144.27C102.393 144.295 102.418 144.319 102.48 144.381C102.554 144.282 102.628 144.171 102.739 144.036C102.764 144.036 102.85 144.011 102.899 144.036C103.06 144.11 103.06 144.134 103.097 144.443C102.973 144.504 102.85 144.566 102.689 144.64C102.64 144.726 102.566 144.837 102.467 144.985C102.356 144.898 102.258 144.825 102.146 144.738C102.221 144.652 102.258 144.59 102.307 144.541C102.27 144.504 102.233 144.467 102.208 144.418C102.258 144.369 102.307 144.319 102.369 144.27Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M94.5321 148.485C94.4457 148.534 94.3593 148.583 94.2729 148.62C94.1989 148.522 94.1371 148.448 94.0754 148.374C94.0754 148.263 94.0754 148.152 94.0754 147.967C94.2606 148.09 94.3716 148.164 94.5074 148.263C94.6555 148.263 94.8406 148.263 95.0751 148.263C95.0874 148.398 95.0874 148.546 95.0997 148.719C94.964 148.768 94.8282 148.817 94.7048 148.854C94.6431 148.706 94.5938 148.596 94.5321 148.485L94.5444 148.497C94.5814 148.472 94.6061 148.448 94.6431 148.423C94.6308 148.411 94.6184 148.398 94.6061 148.386C94.5814 148.411 94.5567 148.448 94.5321 148.485Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M99.9003 142.422C99.9003 142.532 99.9003 142.693 99.9003 142.853C99.8386 142.914 99.7892 142.964 99.7029 143.038C99.6041 142.964 99.5177 142.89 99.4067 142.804C99.4807 142.717 99.5177 142.656 99.5548 142.606C99.4437 142.532 99.3203 142.459 99.2216 142.397C99.1969 142.175 99.2462 142.04 99.4807 141.966C99.5424 142.027 99.6041 142.101 99.6782 142.187C99.7399 142.261 99.8016 142.323 99.9003 142.422Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M103.998 147.979C104.109 148.016 104.183 148.041 104.282 148.078C104.22 148.176 104.17 148.275 104.096 148.386C103.899 148.226 103.825 147.955 103.603 147.905C103.64 147.708 103.677 147.536 103.714 147.326C103.936 147.425 104.158 147.523 104.356 147.622C104.38 147.881 104.17 147.881 103.998 147.979Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M89.7561 146.87C89.7561 146.648 89.7561 146.439 89.7561 146.242C89.8178 146.18 89.8795 146.131 89.9289 146.082C90.2004 146.082 90.2621 146.279 90.0893 146.624C90.2004 146.636 90.2991 146.661 90.4225 146.673C90.4225 146.772 90.4225 146.858 90.4225 146.944C90.1634 147.129 89.9782 146.883 89.7561 146.87Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M84.8445 148.559C84.9926 148.325 85.2888 148.238 85.4122 147.979C85.4245 147.943 85.5109 147.93 85.5603 147.93C85.6096 147.93 85.6713 147.942 85.733 147.942C85.733 148.078 85.733 148.201 85.733 148.337C85.2641 148.78 85.1777 148.805 84.8445 148.559Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M80.5498 147.338C80.6485 147.215 80.7102 147.141 80.8213 147.018C80.9571 147.191 81.0434 147.302 81.1422 147.425C81.2532 147.363 81.4013 147.289 81.5618 147.215C81.6235 147.277 81.6728 147.326 81.6975 147.338C81.6111 147.437 81.5124 147.536 81.389 147.671C81.3766 147.659 81.3026 147.622 81.2286 147.573C81.1915 147.647 81.1545 147.721 81.1175 147.819C80.92 147.671 80.7596 147.536 80.5498 147.338Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M103.479 141.362C103.282 141.67 103.344 142.089 102.936 142.224C102.875 142.039 102.813 141.879 102.751 141.682C102.813 141.657 102.875 141.633 102.936 141.608C102.998 141.472 103.06 141.312 103.158 141.103C103.282 141.226 103.368 141.288 103.479 141.362Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M82.5242 145.934C82.5982 145.86 82.6476 145.811 82.7216 145.737C82.808 146.02 83.3017 145.934 83.2276 146.377C83.1536 146.451 83.0795 146.538 83.0055 146.612C83.0425 146.648 83.0795 146.685 83.1042 146.735C83.0425 146.796 82.9931 146.846 82.9438 146.895C82.808 146.562 82.6723 146.242 82.5242 145.934Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M97.1976 147.425C97.0248 147.252 96.9014 147.129 96.778 147.006C96.6669 147.092 96.5682 147.178 96.4324 147.289C96.3954 147.154 96.3831 147.067 96.3584 146.993C96.4818 146.87 96.5929 146.759 96.6916 146.648C96.8274 146.698 96.9508 146.747 97.1235 146.809C97.1482 146.969 97.3827 147.117 97.1976 147.425Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M90.4471 145.601C90.3607 145.835 90.2126 145.897 90.0028 145.835C89.9781 145.773 89.9534 145.7 89.9288 145.613C89.8424 145.65 89.7683 145.687 89.6696 145.724C89.6326 145.687 89.5832 145.65 89.4968 145.564C89.5956 145.515 89.6819 145.465 89.719 145.441C89.7436 145.268 89.756 145.157 89.7683 145.046C89.9658 145.083 90.0275 145.182 90.0892 145.33C90.1509 145.441 90.3113 145.502 90.4471 145.601Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M95.7168 142.545C95.9513 142.508 95.8773 142.237 95.9883 142.04C96.0994 142.15 96.1981 142.249 96.3216 142.372C96.1981 142.409 96.1364 142.434 96.05 142.459C96.0747 142.52 96.1241 142.594 96.1364 142.656C96.1488 142.742 96.1364 142.841 96.1364 142.952C95.9637 143.001 95.7909 143.062 95.5564 143.136C95.6181 142.927 95.6675 142.742 95.7168 142.545Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M87.8556 146.451C87.9297 146.501 87.9544 146.525 87.9914 146.55C88.0161 146.476 88.0407 146.414 88.0654 146.34C88.1888 146.34 88.3122 146.34 88.4603 146.34C88.4603 146.427 88.4603 146.513 88.4603 146.648C88.3493 146.661 88.2135 146.673 88.0901 146.685C88.0037 146.809 87.9297 146.92 87.8309 147.067C87.6829 146.944 87.5718 146.833 87.436 146.71C87.5965 146.599 87.7322 146.525 87.8556 146.451Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M103.652 145.391C103.541 145.404 103.455 145.416 103.356 145.428C103.344 145.478 103.331 145.527 103.319 145.613C103.232 145.589 103.146 145.539 103.06 145.527C102.973 145.515 102.875 145.527 102.813 145.527C102.751 145.404 102.714 145.318 102.665 145.231C102.714 145.182 102.764 145.133 102.838 145.046C102.936 145.12 103.035 145.182 103.183 145.281C103.208 145.207 103.232 145.096 103.245 145.071C103.467 145.071 103.553 145.071 103.664 145.071C103.652 145.17 103.652 145.256 103.652 145.391Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M87.5842 145.108C87.5718 145.157 87.5595 145.207 87.5472 145.268C87.4608 145.268 87.362 145.268 87.251 145.268C87.251 145.133 87.251 144.997 87.251 144.812C87.3991 144.849 87.5225 144.874 87.6706 144.898C87.6706 144.874 87.6829 144.812 87.6953 144.751C87.868 144.615 87.9914 144.714 88.1149 144.849C88.0778 144.935 88.0408 145.022 87.9791 145.157C87.8804 145.157 87.7446 145.145 87.5842 145.108Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M99.2217 140.413C99.2217 140.29 99.2217 140.203 99.2217 140.105C99.3698 139.932 99.5302 139.821 99.7277 140.043C99.7647 140.006 99.8017 139.969 99.8511 139.932C99.9498 140.031 100.036 140.117 100.098 140.179C100.049 140.265 100.012 140.339 99.9621 140.425C99.8758 140.376 99.8264 140.351 99.7647 140.326C99.6043 140.351 99.4068 140.376 99.2217 140.413Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M97.4816 145.761C97.5309 145.86 97.5556 145.946 97.5926 146.008C97.5556 146.131 97.5186 146.266 97.4816 146.414C97.3582 146.414 97.2348 146.414 97.0867 146.414C97.0867 146.217 97.0867 145.995 97.0867 145.761C97.1977 145.761 97.3211 145.761 97.4816 145.761Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M86.8436 146.106C86.8806 146.18 86.93 146.279 86.9793 146.377C86.9053 146.451 86.9176 146.513 86.9917 146.611C87.041 146.685 87.004 146.833 87.004 146.981C86.9053 146.981 86.7942 146.993 86.6955 146.993C86.6338 146.685 86.5844 146.402 86.5227 146.094C86.6461 146.106 86.7449 146.106 86.8436 146.106Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M84.6964 147.573C84.6223 147.523 84.5606 147.499 84.4742 147.437C84.3508 147.548 84.2151 147.671 84.0917 147.794C83.993 147.696 83.9066 147.61 83.8325 147.536C83.8325 147.425 83.8325 147.339 83.8325 147.203C83.9436 147.252 84.0176 147.289 84.1287 147.326C84.1781 147.265 84.2398 147.178 84.3015 147.092C84.4002 147.191 84.4619 147.252 84.5359 147.326C84.5853 147.302 84.6347 147.277 84.7087 147.24C84.6964 147.339 84.6964 147.425 84.6964 147.573Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M98.222 148.287C98.1479 148.361 98.0862 148.423 98.0492 148.46C97.8024 148.411 97.5555 148.374 97.2964 148.324C97.2964 148.238 97.2964 148.152 97.2964 148.041C97.4815 148.016 97.6543 147.955 97.8024 148.115C97.8641 148.078 97.9134 148.029 97.9998 147.967C98.0862 148.103 98.1479 148.201 98.222 148.287Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M96.6177 143.802C96.6177 143.678 96.6177 143.555 96.6177 143.432C96.7658 143.309 96.9385 143.173 97.136 143.013C97.1977 143.136 97.2471 143.272 97.3088 143.407C97.0249 143.494 96.9509 143.839 96.6177 143.802Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M100.135 145.453C100.246 145.404 100.332 145.367 100.431 145.33C100.567 145.539 100.949 145.244 101.06 145.65C101.023 145.7 100.962 145.786 100.9 145.86C100.776 145.86 100.665 145.86 100.542 145.86C100.517 145.626 100.246 145.638 100.135 145.453Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M98.8267 145.391C98.8761 145.564 98.9131 145.687 98.9625 145.86C98.8638 145.897 98.728 145.958 98.5552 146.032C98.5552 145.872 98.5552 145.786 98.5552 145.675C98.3948 145.712 98.2591 145.736 98.0986 145.761C98.0986 145.638 98.0986 145.552 98.0986 145.441C98.1357 145.428 98.185 145.404 98.2344 145.416C98.3084 145.428 98.3701 145.453 98.4318 145.478C98.5923 145.564 98.7157 145.539 98.8267 145.391Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M103.109 142.877C103.06 142.619 103.232 142.421 103.368 142.212C103.467 142.212 103.541 142.212 103.627 142.212C103.8 142.446 103.615 142.643 103.553 142.877C103.393 142.877 103.257 142.877 103.109 142.877Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M98.5429 143.013C98.5429 143.075 98.5429 143.124 98.5429 143.21C98.654 143.235 98.7774 143.259 98.8885 143.272C98.8885 143.333 98.8885 143.37 98.8885 143.457C98.7898 143.432 98.7034 143.42 98.58 143.383C98.5676 143.407 98.5553 143.469 98.5306 143.53C98.2221 143.567 98.111 143.518 98.0863 143.321C98.0493 143.112 98.1604 143.038 98.5429 143.013Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M101.196 148.016C101.307 148.041 101.406 148.041 101.492 148.078C101.579 148.103 101.653 148.152 101.752 148.214C101.702 148.411 101.641 148.608 101.579 148.842C101.517 148.83 101.455 148.817 101.344 148.793C101.406 148.682 101.455 148.608 101.505 148.522C101.406 148.522 101.32 148.522 101.196 148.522C101.196 148.337 101.196 148.177 101.196 148.016Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M93.0882 144.43C92.9278 144.479 92.792 144.516 92.6316 144.566C92.5576 144.529 92.4589 144.467 92.3354 144.393C92.4342 144.221 92.5329 144.06 92.6316 143.888C92.9525 143.974 92.9525 144.245 93.0882 144.43Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M97.1606 147.72C97.1606 147.856 97.1606 147.979 97.1606 148.127C97.0496 148.139 96.9508 148.152 96.8521 148.176C96.8891 148.275 96.9261 148.361 97.0002 148.558C96.7904 148.448 96.6917 148.398 96.5806 148.349C96.6423 148.287 96.6793 148.25 96.704 148.213C96.667 148.152 96.6176 148.103 96.5559 148.016C96.741 147.868 96.8151 147.61 97.1606 147.72Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M94.8652 145.342C94.8652 145.613 94.8652 145.823 94.8652 145.983C94.8035 146.081 94.7541 146.155 94.6924 146.266C94.569 146.155 94.4949 146.094 94.4209 146.02C94.4579 145.736 94.532 145.502 94.8652 145.342Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M101.258 146.599C101.48 146.71 101.616 146.772 101.801 146.87C101.628 147.043 101.48 147.166 101.295 147.339C101.27 147.339 101.184 147.339 101.048 147.339C101.06 147.24 101.036 147.117 101.085 147.043C101.159 146.907 101.332 146.846 101.258 146.599Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M95.359 144.948C95.4577 145.256 95.5194 145.453 95.5811 145.626C95.4947 145.835 95.359 145.897 95.1615 145.86C95.1122 145.81 95.0628 145.761 95.0134 145.712C95.1245 145.478 95.2232 145.256 95.359 144.948Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M102.998 147.955C102.899 148.053 102.862 148.09 102.825 148.127C102.689 148.127 102.566 148.127 102.443 148.127C102.443 147.93 102.443 147.758 102.443 147.511C102.603 147.622 102.714 147.708 102.838 147.795C102.862 147.733 102.887 147.659 102.949 147.499C102.973 147.721 102.986 147.844 102.998 147.955Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M84.2645 145.946C84.2521 146.094 84.1164 146.205 83.9683 146.205C83.8078 146.192 83.6968 146.082 83.6968 145.921C83.6968 145.736 83.8449 145.613 84.03 145.638C84.1657 145.663 84.2768 145.798 84.2645 145.946Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M100.826 139.858C100.838 140.018 100.727 140.142 100.567 140.154C100.382 140.166 100.246 140.043 100.258 139.858C100.271 139.698 100.382 139.587 100.542 139.587C100.69 139.587 100.814 139.71 100.826 139.858Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M82.5984 147.24C82.8699 147.24 83.0303 147.24 83.1907 147.24C83.3388 147.462 83.129 147.61 83.0797 147.795C83.0056 147.795 82.9439 147.807 82.8205 147.807C82.7588 147.647 82.6971 147.474 82.5984 147.24Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M92.6808 147.881C92.9523 148.053 93.0634 148.275 93.0511 148.583C92.903 148.583 92.7796 148.583 92.6438 148.583C92.6068 148.472 92.5574 148.337 92.5081 148.189C92.5574 148.103 92.6068 148.004 92.6808 147.881Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M79.365 147.338C79.4884 147.289 79.5995 147.252 79.7229 147.203C79.8093 147.301 79.871 147.388 79.945 147.462C79.8093 147.573 79.6735 147.634 79.5871 147.733C79.5131 147.807 79.4761 147.93 79.365 148.139C79.365 147.807 79.365 147.61 79.365 147.338Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M95.1245 139.378C95.2726 139.378 95.396 139.378 95.5688 139.378C95.6182 139.489 95.6675 139.624 95.7169 139.747C95.5935 139.809 95.4947 139.858 95.396 139.908C95.322 139.871 95.2356 139.834 95.1245 139.784C95.1245 139.673 95.1245 139.55 95.1245 139.378Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M103.381 143.863C103.553 143.691 103.664 143.58 103.837 143.395C103.874 143.494 103.899 143.592 103.936 143.678C103.961 143.654 103.973 143.641 103.998 143.617C103.998 143.74 103.998 143.876 103.998 144.011C103.862 144.011 103.726 144.011 103.603 144.011C103.627 143.999 103.64 143.974 103.664 143.962C103.578 143.937 103.479 143.9 103.381 143.863Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M92.9647 145.453C92.8413 145.515 92.7303 145.576 92.5822 145.65C92.4958 145.515 92.3971 145.379 92.2983 145.231C92.36 145.194 92.4835 145.12 92.5575 145.083C92.7056 145.206 92.8167 145.317 92.9647 145.453Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M101.764 146.34C101.949 146.242 102.109 146.069 102.233 145.823C102.319 145.934 102.381 146.02 102.467 146.131C102.369 146.168 102.307 146.192 102.208 146.229C102.208 146.451 102.109 146.648 101.875 146.759C101.85 146.624 101.813 146.488 101.764 146.34Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M96.1487 145.946C96.2227 146.008 96.2844 146.045 96.2968 146.082C96.3338 146.266 96.3462 146.439 96.3708 146.685C96.1857 146.636 96.0623 146.611 95.9512 146.575C95.9265 146.168 95.9265 146.168 96.1487 145.946Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M101.147 136.691C101.036 136.74 100.912 136.802 100.801 136.864C100.616 136.753 100.53 136.617 100.616 136.445C100.678 136.321 100.801 136.247 100.949 136.284C101.135 136.346 101.209 136.482 101.147 136.691Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M88.5219 145.367C88.4725 145.268 88.4355 145.194 88.3738 145.071C88.5589 144.985 88.7687 144.886 89.0155 144.763C89.0402 144.886 89.0525 144.96 89.0525 145.022C89.0649 145.182 89.0772 145.33 88.8181 145.293C88.7317 145.281 88.6329 145.342 88.5219 145.367Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M89.46 142.668C89.5217 142.73 89.5834 142.791 89.6698 142.89C89.5587 143.013 89.46 143.136 89.3119 143.296C89.2132 143.186 89.1021 143.112 89.0775 143.013C89.0034 142.804 89.1021 142.73 89.46 142.668Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M93.4708 142.988C93.3968 143.149 93.3351 143.309 93.261 143.469C93.15 143.407 93.0759 143.37 92.9402 143.296C92.9772 143.333 92.9525 143.309 92.9525 143.309C93.0142 143.099 93.0883 142.89 93.15 142.717C93.2857 142.828 93.3968 142.914 93.4708 142.988Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M94.4581 142.964C94.5692 143.099 94.6432 143.198 94.742 143.321C94.7173 143.37 94.6803 143.469 94.6185 143.58C94.5075 143.58 94.3717 143.58 94.2483 143.58C94.1372 143.457 94.199 143.21 94.4581 142.964Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M100.073 143.309C100.184 143.642 100.123 143.9 99.9621 144.171C99.8634 144.024 99.7646 143.876 99.6536 143.716C99.74 143.531 99.8881 143.407 100.073 143.309Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M81.2778 148.978C81.4753 148.731 81.4753 148.731 81.8825 148.608C81.8332 148.731 81.7962 148.817 81.7591 148.916C81.8085 148.965 81.8825 149.039 81.9689 149.125C81.6974 149.249 81.4876 149.125 81.2778 148.978Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M97.9876 146.55C98.0986 146.55 98.1727 146.55 98.2714 146.55C98.3578 146.673 98.4442 146.809 98.5306 146.944C98.2714 147.154 98.2714 147.154 97.9629 146.956C97.9752 146.821 97.9752 146.685 97.9876 146.55Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M101.69 141.091C101.591 141.14 101.529 141.177 101.418 141.226C101.406 141.041 101.394 140.906 101.369 140.721C101.48 140.721 101.591 140.684 101.653 140.733C101.801 140.819 101.924 140.943 102.097 141.078C101.961 141.238 101.838 141.238 101.69 141.091Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M100.789 144.59C100.826 144.442 100.863 144.307 100.9 144.171C101.085 144.171 101.221 144.171 101.418 144.171C101.381 144.319 101.344 144.455 101.307 144.59C101.122 144.59 100.986 144.59 100.789 144.59Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M91.7923 148.83C91.7923 148.965 91.7923 149.039 91.7923 149.138C91.6195 149.138 91.4344 149.138 91.2616 149.138C91.2493 148.682 91.3604 148.62 91.7923 148.83Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M98.8638 140.265C98.765 140.265 98.691 140.265 98.5799 140.265C98.5182 140.117 98.4565 139.944 98.3701 139.735C98.5676 139.735 98.7033 139.735 98.8638 139.735C98.8638 139.883 98.8638 140.055 98.8638 140.265Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M99.1476 142.027C99.0118 142.101 98.9131 142.15 98.7774 142.212C98.691 142.015 98.6046 141.805 98.5059 141.559C98.6169 141.547 98.7033 141.534 98.802 141.522C98.9008 141.682 99.0118 141.842 99.1476 142.027Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M99.197 144.418C98.9995 144.332 98.8884 144.282 98.765 144.221C98.765 144.159 98.7527 144.085 98.7527 143.987C98.8391 143.937 98.9255 143.9 99.0365 143.839C99.1106 143.876 99.2216 143.925 99.3574 143.999C99.3204 144.122 99.271 144.258 99.197 144.418Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M91.9158 146.944C91.9158 146.87 91.9158 146.796 91.9158 146.685C92.0515 146.673 92.1873 146.673 92.3354 146.661C92.3724 146.858 92.5945 146.993 92.4341 147.252C92.2613 147.141 92.0885 147.043 91.9158 146.944Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M93.9521 144.258C93.804 144.258 93.6806 144.258 93.5325 144.258C93.5325 144.073 93.5325 143.9 93.5325 143.728C93.6682 143.765 93.804 143.802 93.9521 143.851C93.9521 143.95 93.9521 144.085 93.9521 144.258Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M100.036 137.689C100.135 137.64 100.221 137.603 100.332 137.554C100.382 137.652 100.444 137.763 100.53 137.911C100.382 138.01 100.258 138.096 100.135 138.17C100.123 138.158 100.086 138.121 100.024 138.059C100.036 137.96 100.036 137.837 100.036 137.689Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M94.1125 147.647C94.1619 147.523 94.1989 147.449 94.2236 147.363C94.347 147.289 94.4458 147.338 94.6556 147.573C94.5445 147.683 94.4334 147.794 94.2853 147.942C94.2236 147.844 94.1743 147.745 94.1125 147.647Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M86.572 147.055C86.4856 147.117 86.4116 147.166 86.2882 147.24C86.2511 147.228 86.1277 147.215 86.066 147.141C85.992 147.067 85.9796 146.932 85.9426 146.809C86.2141 146.759 86.4239 146.71 86.572 147.055Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M101.196 135.496C100.875 135.767 100.875 135.767 100.592 135.52C100.814 135.163 100.863 135.151 101.196 135.496Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M94.532 139.168C94.532 139.415 94.532 139.538 94.532 139.686C94.3963 139.686 94.2729 139.686 94.1001 139.686C94.1001 139.587 94.0507 139.452 94.0877 139.341C94.1618 139.131 94.3592 139.328 94.532 139.168Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M91.5209 143.974C91.4962 143.876 91.4716 143.777 91.4469 143.678C91.4098 143.703 91.3852 143.728 91.3481 143.765C91.3481 143.641 91.3481 143.518 91.3481 143.37C91.4098 143.358 91.4592 143.333 91.5086 143.346C91.6196 143.383 91.7184 143.444 91.8294 143.506C91.743 143.666 91.6937 143.789 91.632 143.913C91.595 143.937 91.5579 143.962 91.5209 143.974Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M77.5879 148.83C77.3781 148.854 77.2424 148.805 77.1807 148.608C77.23 148.411 77.3781 148.361 77.5879 148.374C77.6373 148.423 77.7113 148.485 77.7977 148.571C77.7113 148.669 77.6496 148.756 77.5879 148.83Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M95.001 147.228C95.0997 147.228 95.1861 147.228 95.3218 147.228C95.3588 147.425 95.4082 147.61 95.1861 147.782C95.0873 147.733 94.9886 147.684 94.8899 147.634C94.8899 147.536 94.8899 147.437 94.8899 147.351C94.9146 147.301 94.9639 147.265 95.001 147.228Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M99.5918 144.948C99.7029 145.17 99.7646 145.305 99.851 145.49C99.5918 145.49 99.4067 145.49 99.2092 145.49C99.2092 145.244 99.419 145.194 99.5918 144.948Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M104.405 145.441C104.578 145.576 104.701 145.687 104.812 145.773C104.701 145.884 104.615 145.983 104.503 146.081C104.183 145.884 104.183 145.884 104.405 145.441Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M99.5671 146.427C99.5918 146.008 99.5918 146.008 99.9867 145.983C100.036 146.094 100.085 146.205 100.147 146.303C99.962 146.464 99.7646 146.427 99.5671 146.427Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M99.6042 138.614C99.7153 138.49 99.7894 138.404 99.8387 138.342C100.049 138.33 100.197 138.367 100.258 138.626C100.197 138.65 100.098 138.675 99.9992 138.7C100.024 138.737 100.036 138.774 100.061 138.811C99.9868 138.761 99.9251 138.712 99.8387 138.675C99.7894 138.65 99.7277 138.65 99.6042 138.614Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M95.8526 137.369C96.0131 137.443 96.1241 137.48 96.3092 137.566C96.0871 137.739 95.9143 137.874 95.7416 137.997C95.5811 137.763 95.7909 137.615 95.8526 137.369Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M80.0438 148.595C80.1796 148.669 80.2783 148.719 80.4141 148.793C80.3523 148.928 80.303 149.064 80.2413 149.199C79.8587 148.965 79.8587 148.965 80.0438 148.595Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M100.69 147.831C100.53 147.955 100.369 148.09 100.16 148.25C100.098 148.127 100.049 147.992 99.9868 147.881C100.086 147.782 100.135 147.733 100.147 147.72C100.357 147.77 100.517 147.807 100.69 147.831Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M101.48 142.298C101.603 142.175 101.69 142.089 101.789 141.99C101.998 142.126 101.986 142.323 101.949 142.52C101.727 142.619 101.579 142.532 101.48 142.298Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M83.45 143.728C83.6474 143.728 83.7831 143.728 83.9929 143.728C83.8325 143.95 83.7091 144.122 83.561 144.332C83.3882 144.097 83.5117 143.9 83.45 143.728Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M89.0649 144.11C89.0649 144.011 89.0649 143.937 89.0649 143.863C89.1266 143.802 89.176 143.752 89.213 143.715C89.3118 143.765 89.4105 143.814 89.5462 143.888C89.4845 144.023 89.4228 144.159 89.3365 144.344C89.213 144.233 89.1266 144.159 89.0649 144.11Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M104.109 144.122C104.121 144.233 104.133 144.319 104.146 144.43C104.047 144.516 103.948 144.627 103.812 144.751C103.726 144.689 103.64 144.615 103.553 144.553C103.738 144.418 103.837 144.196 104.109 144.122Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M91.1383 146.981C91.4715 147.178 91.5085 147.351 91.3111 147.647C91.2987 147.659 91.274 147.671 91.274 147.671C91.1753 147.585 91.0889 147.486 91.0396 147.437C91.0766 147.277 91.1013 147.141 91.1383 146.981Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M87.4359 143.962C87.4113 143.789 87.473 143.74 87.547 143.678C87.7568 143.814 87.9789 143.925 87.9049 144.27C87.6087 144.27 87.5594 143.962 87.4359 143.962C87.5594 144.036 87.5717 144.048 87.584 144.048C87.6211 144.024 87.6457 143.999 87.6828 143.974C87.6704 143.962 87.6581 143.95 87.6457 143.937C87.6087 143.962 87.584 143.999 87.4359 143.962Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M96.8152 144.59C96.6548 144.59 96.5314 144.59 96.3833 144.59C96.3833 144.492 96.3833 144.405 96.3833 144.282C96.5437 144.282 96.7165 144.282 96.951 144.282C96.9016 144.405 96.8523 144.504 96.8152 144.59Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M97.1853 144.245C97.3828 144.381 97.4568 144.529 97.3704 144.677C97.284 144.837 97.1236 144.911 96.9138 144.775C97.0002 144.603 97.0866 144.43 97.1853 144.245Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M93.6312 145.404C93.6312 145.305 93.6312 145.219 93.6312 145.108C93.5695 145.083 93.5078 145.071 93.4214 145.034C93.4091 144.985 93.4091 144.936 93.3967 144.862C93.5078 144.899 93.5942 144.936 93.6806 144.948C93.767 144.96 93.8657 144.948 93.9521 144.948C93.9397 145.318 93.9397 145.318 93.6312 145.404Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M91.7554 148.694C91.8541 148.608 91.9528 148.534 92.0516 148.448C92.1379 148.608 92.1996 148.719 92.2737 148.879C92.212 148.953 92.1379 149.027 92.0392 149.15C91.9281 148.965 91.8541 148.842 91.7554 148.694Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M90.2249 149.051C90.0522 148.719 90.0522 148.719 90.336 148.46C90.4101 148.534 90.4841 148.596 90.5705 148.682C90.4841 148.854 90.373 148.953 90.2249 149.051Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M87.2386 142.187C87.5347 142.471 87.5347 142.471 87.5347 142.791C87.3743 142.729 87.2386 142.668 87.0535 142.606C87.1275 142.471 87.1892 142.335 87.2386 142.187Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M99.2956 147.166C99.4437 147.302 99.5795 147.425 99.7769 147.61C99.6165 147.659 99.5054 147.696 99.3944 147.733C99.308 147.807 99.2216 147.523 99.2956 147.166Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M90.7558 148.065C90.7558 148.152 90.7558 148.238 90.7558 148.324C90.583 148.497 90.3362 148.337 90.2004 147.905C90.3979 147.967 90.5707 148.016 90.7558 148.065Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M99.4068 136.925C99.5426 136.987 99.6783 137.061 99.8511 137.147C99.74 137.283 99.666 137.369 99.5796 137.468C99.3575 137.332 99.2588 137.196 99.4068 136.925Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M98.6786 149.15C98.4564 149.15 98.2713 149.15 98.0986 149.15C98.0492 148.953 98.1603 148.867 98.3083 148.83C98.5058 148.793 98.6045 148.916 98.6786 149.15Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M100.221 147.487C100.135 147.4 100.086 147.351 100.024 147.289C100.073 147.24 100.123 147.191 100.197 147.104C100.258 147.129 100.332 147.154 100.431 147.191C100.493 147.166 100.579 147.129 100.69 147.08C100.69 147.215 100.69 147.314 100.69 147.437C100.616 147.4 100.555 147.376 100.481 147.339C100.406 147.376 100.332 147.425 100.221 147.487Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M94.1741 146.747C94.1741 146.883 94.1741 146.969 94.1741 147.043C94.0754 147.141 93.9643 147.24 93.8409 147.376C93.7792 147.326 93.7175 147.265 93.6064 147.178C93.7916 147.031 93.9643 146.907 94.1741 146.747Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M77.3288 147.166C77.193 147.104 77.0573 147.03 76.8845 146.944C76.9956 146.809 77.0696 146.722 77.156 146.624C77.3905 146.759 77.4892 146.895 77.3288 147.166Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M93.4708 147.068C93.298 146.981 93.1623 146.92 92.9895 146.833C93.0882 146.71 93.1623 146.624 93.2363 146.538C93.4708 146.587 93.5572 146.735 93.4708 147.068Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M100.135 146.316C100.32 146.303 100.505 146.291 100.604 146.562C100.554 146.624 100.48 146.698 100.419 146.772C100.122 146.735 100.135 146.525 100.135 146.316Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M103.417 146.279C103.504 146.217 103.566 146.155 103.652 146.094C103.812 146.094 103.874 146.192 103.886 146.525C103.677 146.599 103.541 146.525 103.417 146.279Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M81.4382 145.059C81.537 145.059 81.611 145.059 81.6974 145.059C81.7468 145.145 81.7838 145.243 81.8578 145.379C81.7468 145.428 81.611 145.49 81.4382 145.576C81.4382 145.367 81.4382 145.219 81.4382 145.059Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M98.543 142.988C98.543 142.877 98.543 142.742 98.543 142.606C98.5923 142.557 98.654 142.508 98.7034 142.446C98.9626 142.557 98.8638 142.779 98.8885 142.988C98.7528 142.988 98.6417 142.988 98.543 142.988Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M97.9257 142.076C97.9751 142.274 98.0121 142.409 98.0615 142.606C97.8393 142.458 97.5802 142.446 97.4814 142.138C97.6295 142.126 97.7653 142.101 97.9257 142.076Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M90.8667 142.532C90.6445 142.594 90.4964 142.532 90.3977 142.261C90.4594 142.212 90.5458 142.163 90.6322 142.101C90.842 142.15 90.9284 142.286 90.8667 142.532Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M90.1633 140.684C90.2991 140.745 90.4348 140.819 90.6076 140.906C90.4966 141.041 90.4225 141.127 90.3361 141.226C90.1016 141.091 90.0029 140.955 90.1633 140.684Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M97.5679 140.548C97.4815 140.721 97.4198 140.856 97.3334 141.029C97.1977 140.918 97.1113 140.844 97.0249 140.782C97.1236 140.524 97.2717 140.462 97.5679 140.548Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M101.727 140.277C101.801 140.166 101.85 140.08 101.912 139.994C102.171 140.228 102.171 140.228 102.183 140.474C101.974 140.561 101.826 140.487 101.727 140.277Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M102.714 139.71C102.652 139.661 102.615 139.624 102.566 139.599C102.517 139.575 102.467 139.575 102.356 139.55C102.48 139.39 102.578 139.267 102.677 139.156C102.912 139.242 102.924 139.378 102.714 139.71Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M76.3292 147.918C76.502 148.14 76.502 148.14 76.4403 148.485C76.07 148.287 76.0577 148.25 76.3292 147.918Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M86.2758 146.353C85.992 146.242 85.9303 146.106 86.0043 145.884C86.0907 145.884 86.1771 145.884 86.2758 145.884C86.3128 145.958 86.3622 146.044 86.4239 146.168C86.3746 146.229 86.3128 146.303 86.2758 146.353Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M86.7819 145.108C86.893 145.219 86.9547 145.293 87.0411 145.379C86.967 145.465 86.9053 145.552 86.8189 145.662C86.7202 145.588 86.6215 145.515 86.498 145.416C86.5844 145.317 86.6585 145.231 86.7819 145.108Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M91.8541 148.078C91.7183 148.14 91.5826 148.201 91.4345 148.275C91.4221 148.25 91.3604 148.115 91.2864 147.942C91.5085 147.942 91.6566 147.942 91.8047 147.942C91.817 147.992 91.8294 148.029 91.8541 148.078Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M93.2855 149.039C93.2608 149.002 93.2361 148.965 93.1868 148.891C93.2238 148.805 93.2732 148.706 93.3225 148.608C93.5076 148.583 93.5817 148.682 93.594 149.039C93.4953 149.039 93.3966 149.039 93.2855 149.039Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M93.6436 141.115C93.7176 141.078 93.8163 141.029 93.9397 140.967C93.9644 141.017 94.0138 141.078 94.0878 141.177C94.0385 141.374 93.878 141.423 93.6436 141.399C93.6436 141.3 93.6436 141.214 93.6436 141.115Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M95.6428 141.152C95.7045 140.992 95.7539 140.857 95.8033 140.721C95.939 140.795 96.0377 140.857 96.1488 140.918C96.0871 141.128 95.9637 141.239 95.6428 141.152Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M102.85 139.797C102.862 139.957 102.862 140.092 102.875 140.216C102.801 140.29 102.751 140.339 102.702 140.388C102.443 140.055 102.443 140.018 102.85 139.797Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M94.9516 142.249C94.8899 142.114 94.8405 142.027 94.7788 141.916C94.7788 141.929 94.7788 141.904 94.7911 141.904C94.8652 141.867 94.9516 141.842 95.0133 141.805C95.112 141.879 95.2107 141.966 95.3465 142.089C95.2107 142.15 95.0873 142.2 94.9516 142.249Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M101.714 137.751C101.616 137.628 101.542 137.541 101.455 137.43C101.554 137.332 101.616 137.246 101.714 137.147C101.813 137.233 101.887 137.295 101.998 137.381C101.912 137.492 101.85 137.591 101.714 137.751Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M101.529 141.929C101.406 141.805 101.332 141.744 101.246 141.657C101.32 141.571 101.394 141.485 101.48 141.374C101.579 141.448 101.665 141.51 101.776 141.596C101.69 141.707 101.616 141.793 101.529 141.929Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M97.4075 141.386C97.4075 141.288 97.4075 141.202 97.4075 141.115C97.5062 141.066 97.5926 141.017 97.679 140.98C97.7407 141.029 97.8147 141.078 97.8764 141.128C97.79 141.362 97.679 141.46 97.4075 141.386Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M102.492 147.376C102.381 147.326 102.356 147.314 102.307 147.302C102.344 147.265 102.369 147.228 102.406 147.178C102.369 147.129 102.331 147.067 102.27 146.981C102.369 146.895 102.455 146.821 102.578 146.722C102.615 146.809 102.665 146.858 102.652 146.895C102.603 147.055 102.554 147.203 102.492 147.376Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M97.9875 139.02C97.9875 139.02 98.0122 139.033 98.0246 139.02C98.0493 138.996 98.0739 138.971 98.0739 138.983C98.1603 139.07 98.2591 139.168 98.3578 139.267C98.3084 139.291 98.1603 139.341 97.9875 139.415C97.9875 139.23 97.9875 139.131 97.9875 139.02Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M100.974 138.577C101.06 138.577 101.147 138.577 101.258 138.577C101.258 138.725 101.258 138.86 101.258 138.996C100.949 138.934 100.949 138.922 100.974 138.577Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M93.73 138.059C93.6559 138.121 93.6066 138.17 93.5202 138.256C93.4338 138.195 93.3474 138.121 93.2363 138.034C93.3104 137.936 93.3844 137.837 93.4955 137.702C93.5942 137.837 93.6559 137.936 93.73 138.059Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M100.308 144.603C100.357 144.652 100.419 144.714 100.505 144.8C100.308 144.886 100.123 144.96 99.9375 145.034C99.9869 144.788 99.9869 144.788 100.308 144.603Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M84.4001 145.083C84.4001 144.898 84.4001 144.763 84.4001 144.59C84.5236 144.615 84.6963 144.615 84.7087 144.664C84.758 144.874 84.684 145.022 84.4001 145.083Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M99.5796 136.26C99.3945 136.26 99.2587 136.26 99.0859 136.26C99.1106 136.137 99.1106 135.964 99.16 135.952C99.3698 135.89 99.5179 135.976 99.5796 136.26Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M93.1746 142.385C93.2733 142.286 93.3597 142.2 93.4584 142.101C93.5941 142.212 93.7052 142.335 93.6065 142.545C93.5201 142.545 93.4337 142.545 93.335 142.545C93.2733 142.495 93.2239 142.434 93.1746 142.385Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M88.7071 141.879C88.7071 141.99 88.7071 142.076 88.7071 142.187C88.485 142.261 88.3245 142.2 88.2505 141.928C88.3862 141.818 88.5467 141.879 88.7071 141.879Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M98.9502 134.116C98.7528 134.152 98.6047 134.091 98.5183 133.869C98.5677 133.82 98.6294 133.746 98.6911 133.672C98.7775 133.783 98.8639 133.894 98.9749 134.042C98.9873 134.017 98.9626 134.066 98.9502 134.116Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M104.343 145.515C104.269 145.515 104.17 145.515 104.072 145.515C104.022 145.465 103.973 145.404 103.911 145.355C103.998 145.182 104.133 145.133 104.331 145.194C104.343 145.305 104.343 145.416 104.343 145.515Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M88.1394 145.342C88.1394 145.527 88.1394 145.601 88.1394 145.712C88.0407 145.724 87.9419 145.736 87.8556 145.736C87.7938 145.675 87.7321 145.613 87.6458 145.527C87.8062 145.478 87.9419 145.428 88.1394 145.342Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M96.0748 143.937C96.0007 144.122 95.9513 144.258 95.8526 144.504C95.7539 144.258 95.7045 144.122 95.6428 143.937C95.7909 143.937 95.8773 143.937 96.0748 143.937Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M90.657 143.531C90.657 143.457 90.657 143.383 90.657 143.309C90.7557 143.198 90.8544 143.21 91.1136 143.42C90.9902 143.555 90.8544 143.691 90.657 143.531Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M85.301 147.006C85.1529 147.055 85.0295 147.104 84.8567 147.178C84.8444 147.031 84.8444 146.92 84.832 146.821C85.0295 146.735 85.1652 146.759 85.301 147.006Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M90.9161 143.592C90.9778 143.728 91.0148 143.814 91.0642 143.913C91.0271 143.95 90.9284 144.036 90.8173 144.135C90.768 144.085 90.7063 144.024 90.6199 143.95C90.7063 143.839 90.7803 143.752 90.9161 143.592Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M105.614 149.15C105.454 149.15 105.318 149.15 105.096 149.15C105.207 149.002 105.281 148.904 105.392 148.743C105.479 148.916 105.54 149.027 105.614 149.15Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M81.9812 148.349C81.9812 148.238 81.9812 148.152 81.9812 148.041C82.0799 148.041 82.1663 148.041 82.2897 148.041C82.3021 148.127 82.3021 148.226 82.3144 148.349C82.2157 148.349 82.117 148.349 81.9812 148.349Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M97.5186 143.999C97.5803 143.913 97.6296 143.863 97.7037 143.765C97.8024 143.863 97.9011 143.95 97.9875 144.036C97.8888 144.208 97.7777 144.196 97.5186 143.999Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M92.5328 141.201C92.6192 141.263 92.6685 141.312 92.7672 141.386C92.6685 141.485 92.5821 141.583 92.4958 141.67C92.3106 141.571 92.3353 141.46 92.5328 141.201Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M92.6808 146.094C92.5821 146.094 92.5081 146.094 92.397 146.094C92.3847 145.995 92.3847 145.897 92.3723 145.773C92.4834 145.773 92.5698 145.773 92.6932 145.773C92.6808 145.86 92.6808 145.971 92.6808 146.094Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M94.816 140.856C94.9024 140.918 94.9517 140.967 95.0505 141.041C94.9517 141.14 94.8653 141.238 94.779 141.325C94.5938 141.226 94.6185 141.115 94.816 140.856Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M104.862 147.807C104.985 147.696 105.034 147.647 105.096 147.597C105.281 147.684 105.318 147.832 105.232 148.078C105.108 147.979 105.01 147.918 104.862 147.807Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M93.2979 147.585C93.4089 147.585 93.4953 147.585 93.6064 147.585C93.6064 147.684 93.6064 147.77 93.6064 147.893C93.5323 147.905 93.4213 147.905 93.2979 147.918C93.2979 147.807 93.2979 147.721 93.2979 147.585Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M96.1365 138.983C96.1365 138.885 96.1365 138.811 96.1365 138.7C96.2352 138.688 96.3339 138.688 96.4573 138.675C96.4573 138.786 96.4573 138.872 96.4573 138.996C96.3709 138.983 96.2475 138.983 96.1365 138.983Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M94.8775 147.351C94.7665 147.314 94.643 147.277 94.4209 147.203C94.569 147.104 94.6184 147.055 94.6924 147.03C94.7788 147.006 94.8652 147.006 95.0009 146.993C95.0009 147.092 95.0009 147.166 95.0009 147.228C94.9639 147.265 94.9145 147.301 94.8775 147.351Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M99.6905 146.427C99.5177 146.611 99.419 146.71 99.3449 146.796C99.1598 146.698 99.1845 146.587 99.3943 146.316C99.4313 146.353 99.4683 146.39 99.5177 146.427C99.5177 146.439 99.5424 146.427 99.6905 146.427Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M101.221 139.994C101.085 139.883 100.999 139.809 100.838 139.661C100.974 139.612 101.073 139.575 101.196 139.525C101.283 139.587 101.32 139.723 101.221 139.994Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M83.3635 146.957C83.4252 146.87 83.4746 146.821 83.5486 146.722C83.6474 146.821 83.7461 146.907 83.8325 146.994C83.7338 147.178 83.6227 147.154 83.3635 146.957Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M99.8879 134.978C99.8879 135.138 99.8879 135.225 99.8879 135.348C99.8016 135.348 99.7028 135.36 99.5671 135.373C99.5424 135.151 99.6658 135.077 99.8879 134.978Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M102.443 142.878C102.443 142.791 102.443 142.705 102.443 142.582C102.541 142.582 102.652 142.582 102.862 142.582C102.726 142.73 102.64 142.828 102.554 142.927C102.504 142.915 102.467 142.89 102.443 142.878Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M95.6798 142.545C95.5687 142.545 95.47 142.545 95.3589 142.545C95.3589 142.434 95.3589 142.335 95.3589 142.212C95.6057 142.224 95.6921 142.347 95.6798 142.545Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M103.084 142.89C103.084 143.013 103.084 143.112 103.084 143.223C102.838 143.297 102.813 143.112 102.702 142.939C102.875 142.915 102.986 142.902 103.084 142.89Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M96.0253 148.004C96.013 147.77 96.1241 147.708 96.3462 147.671C96.3586 147.795 96.3586 147.893 96.3709 148.004C96.2475 148.004 96.1488 148.004 96.0253 148.004Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M104.454 148.374C104.516 148.3 104.59 148.214 104.652 148.14C104.751 148.238 104.837 148.325 104.973 148.46C104.788 148.472 104.652 148.485 104.504 148.497C104.479 148.448 104.467 148.411 104.454 148.374Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M91.854 148.349C91.9404 148.213 91.9898 148.127 92.0761 147.979C92.1255 148.078 92.1749 148.164 92.2366 148.287C92.2242 148.497 92.0515 148.337 91.854 148.349Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M103.492 148.916C103.331 148.916 103.232 148.916 103.072 148.916C103.146 148.78 103.195 148.682 103.269 148.546C103.356 148.682 103.405 148.78 103.492 148.916Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M82.2527 144.516C82.4255 144.516 82.5489 144.516 82.7093 144.516C82.6353 144.64 82.5736 144.726 82.4995 144.849C82.4255 144.751 82.3514 144.664 82.2527 144.516Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M80.3892 148.398C80.5619 148.263 80.6607 148.189 80.7717 148.115C80.8088 148.201 80.8334 148.238 80.8334 148.263C80.7594 148.398 80.6977 148.559 80.3892 148.398Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M93.224 144.948C93.1253 145.046 93.0759 145.108 93.0019 145.182C92.9402 145.083 92.8908 144.985 92.8291 144.886C92.8785 144.837 92.9278 144.788 92.9772 144.738C93.0512 144.8 93.113 144.849 93.224 144.948Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M94.3347 137.64C94.5692 137.652 94.6679 137.665 94.8284 137.665C94.742 137.8 94.6926 137.887 94.6186 138.01C94.5322 137.911 94.4581 137.825 94.3347 137.64Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M101.937 138.65C101.998 138.946 101.826 138.971 101.677 139.069C101.566 138.786 101.714 138.724 101.937 138.65Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M97.9875 137.122C97.9875 136.962 97.9875 136.864 97.9875 136.703C98.1233 136.777 98.222 136.827 98.3578 136.901C98.222 136.987 98.1233 137.036 97.9875 137.122Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M95.2479 146.463C95.1862 146.18 95.359 146.143 95.5194 146.044C95.6181 146.328 95.4701 146.389 95.2479 146.463Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M100.184 142.865C100.271 142.976 100.332 143.05 100.443 143.186C100.271 143.21 100.159 143.223 99.9744 143.247C100.061 143.087 100.11 142.988 100.184 142.865Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M93.4585 143.025C93.6189 143.025 93.73 143.025 93.8904 143.025C93.8164 143.149 93.7794 143.235 93.693 143.383C93.6066 143.247 93.5325 143.149 93.4585 143.025Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M103.393 146.414C103.294 146.587 103.232 146.685 103.171 146.809C103.084 146.698 103.023 146.624 102.924 146.488C103.097 146.451 103.195 146.439 103.393 146.414Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M102.677 138.269C102.566 138.355 102.492 138.416 102.356 138.527C102.332 138.355 102.319 138.244 102.295 138.059C102.467 138.145 102.566 138.195 102.677 138.269Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M96.3091 141.029C96.3955 141.165 96.4448 141.251 96.5312 141.386C96.3708 141.386 96.2474 141.386 96.0869 141.386C96.1733 141.251 96.2227 141.165 96.3091 141.029Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M93.7051 140.573C93.8161 140.487 93.8902 140.425 94.026 140.314C94.0506 140.487 94.063 140.598 94.0877 140.782C93.9272 140.696 93.8285 140.635 93.7051 140.573Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M102.369 143.444C102.27 143.617 102.208 143.715 102.146 143.839C102.06 143.728 101.998 143.654 101.9 143.518C102.06 143.494 102.171 143.481 102.369 143.444Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M94.3962 142.569C94.4579 142.483 94.5196 142.409 94.5937 142.311C94.6677 142.397 94.7294 142.483 94.8405 142.619C94.6677 142.643 94.5567 142.656 94.4579 142.68C94.4333 142.643 94.4209 142.606 94.3962 142.569Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M90.2004 144.356C90.2004 144.282 90.2004 144.245 90.2004 144.171C90.2992 144.159 90.3979 144.159 90.583 144.147C90.509 144.307 90.4596 144.406 90.4102 144.516C90.3238 144.442 90.2621 144.406 90.2004 144.356Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M85.1653 147.314C85.2517 147.376 85.3257 147.437 85.4121 147.511C85.3257 147.585 85.2393 147.647 85.1036 147.758C85.0789 147.585 85.0665 147.474 85.0542 147.376C85.0912 147.351 85.1282 147.339 85.1653 147.314Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M92.1501 142.816C92.0637 142.754 91.9897 142.693 91.9033 142.619C91.9897 142.545 92.0761 142.483 92.2118 142.372C92.2365 142.545 92.2488 142.656 92.2612 142.754C92.2242 142.779 92.1871 142.791 92.1501 142.816Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M96.0499 143.469C96.1116 143.469 96.1487 143.469 96.2227 143.469C96.2351 143.568 96.2351 143.666 96.2474 143.789C96.1734 143.802 96.124 143.814 96.0376 143.826C96.0499 143.691 96.0499 143.58 96.0499 143.469Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M102.862 143.42C102.961 143.395 103.072 143.37 103.196 143.346C103.208 143.432 103.22 143.481 103.245 143.555C103.121 143.555 102.998 143.555 102.887 143.555C102.875 143.506 102.862 143.457 102.862 143.42Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M97.9751 141.275C97.9751 141.214 97.9751 141.152 97.9751 141.091C98.0862 141.091 98.1849 141.091 98.3083 141.091C98.3206 141.411 98.1108 141.275 97.9751 141.275Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M100.826 142.902C100.715 142.902 100.616 142.902 100.493 142.902C100.493 142.816 100.493 142.767 100.493 142.668C100.616 142.668 100.715 142.668 100.826 142.668C100.826 142.742 100.826 142.816 100.826 142.902Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M97.8148 147.092C97.9012 147.141 97.9876 147.203 98.1233 147.289C98.0246 147.339 97.9382 147.375 97.8765 147.412C97.8395 147.351 97.6297 147.302 97.8148 147.092Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M99.1229 138.404C99.1352 138.416 99.1846 138.515 99.308 138.737C99.0858 138.638 98.9871 138.601 98.802 138.515C98.9501 138.466 99.0365 138.441 99.1229 138.404Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M92.3105 141.966C92.3352 142.064 92.3599 142.175 92.3846 142.298C92.2982 142.311 92.2488 142.323 92.1748 142.348C92.1748 142.224 92.1748 142.101 92.1748 141.99C92.2118 141.978 92.2612 141.978 92.3105 141.966Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M78.4023 147.227C78.3406 147.227 78.3036 147.227 78.2295 147.227C78.2172 147.129 78.2172 147.03 78.2048 146.907C78.2789 146.895 78.3282 146.882 78.4146 146.87C78.4023 147.006 78.4023 147.117 78.4023 147.227Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M88.2505 140.659C88.3616 140.585 88.448 140.536 88.5344 140.487C88.7195 140.684 88.5097 140.746 88.4356 140.857C88.3739 140.795 88.3245 140.746 88.2505 140.659Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M85.6343 144.344C85.6343 144.282 85.6343 144.245 85.6343 144.171C85.733 144.159 85.8317 144.159 85.9551 144.147C85.9675 144.221 85.9798 144.27 85.9922 144.356C85.8564 144.344 85.7453 144.344 85.6343 144.344Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M97.9629 138.996C97.9012 139.045 97.8395 139.094 97.7778 139.144C97.7161 139.057 97.6544 138.971 97.5803 138.872C97.8271 138.712 97.8888 138.897 97.9629 138.996Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M95.2848 143.469C95.2355 143.42 95.1861 143.37 95.1121 143.297C95.2108 143.235 95.2972 143.161 95.3836 143.099C95.5563 143.309 95.3589 143.37 95.2848 143.469Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M100.814 138.922C100.814 138.983 100.814 139.045 100.814 139.106C100.703 139.106 100.604 139.106 100.481 139.106C100.468 138.798 100.666 138.934 100.814 138.922Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M90.8298 144.849C90.731 144.8 90.6323 144.738 90.5212 144.677C90.5953 144.615 90.657 144.566 90.731 144.492C90.7928 144.566 90.8545 144.664 90.9162 144.75C90.8791 144.787 90.8545 144.824 90.8298 144.849Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M95.8155 148.09C95.7662 148.189 95.7045 148.287 95.6427 148.411C95.581 148.337 95.5317 148.275 95.47 148.201C95.544 148.14 95.6304 148.078 95.7168 148.016C95.7415 148.029 95.7785 148.053 95.8155 148.09Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M87.7816 146.192C87.7199 146.192 87.6581 146.192 87.5964 146.192C87.5964 146.081 87.5964 145.983 87.5964 145.86C87.9173 145.86 87.7692 146.057 87.7816 146.192Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M75.8108 149.138C75.8108 149.076 75.8108 149.039 75.8108 148.965C75.9095 148.953 76.0082 148.953 76.1317 148.94C76.144 149.014 76.1563 149.064 76.1687 149.15C76.0329 149.138 75.9219 149.138 75.8108 149.138Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M97.6421 145.071C97.7161 145.071 97.7655 145.071 97.8272 145.071C97.8272 145.182 97.8272 145.281 97.8272 145.391C97.7532 145.391 97.7038 145.391 97.6421 145.391C97.6421 145.281 97.6421 145.182 97.6421 145.071Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M81.5 148.201C81.5494 148.103 81.6111 148.004 81.6728 147.881C81.7345 147.955 81.7838 148.016 81.8455 148.09C81.7715 148.152 81.6851 148.214 81.5987 148.275C81.574 148.263 81.537 148.226 81.5 148.201Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M85.2764 146.155C85.3257 146.057 85.3874 145.958 85.4491 145.835C85.5108 145.909 85.5602 145.971 85.6219 146.044C85.5479 146.106 85.4615 146.168 85.3751 146.229C85.3381 146.205 85.301 146.18 85.2764 146.155Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M102.973 149.039C102.899 149.039 102.85 149.039 102.788 149.039C102.788 148.928 102.788 148.83 102.788 148.719C102.862 148.719 102.911 148.719 102.973 148.719C102.973 148.83 102.973 148.941 102.973 149.039Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M91.0889 148.904C91.0148 148.854 90.9408 148.805 90.842 148.744C90.9284 148.645 90.9901 148.571 91.0889 148.448C91.0889 148.645 91.0889 148.793 91.0889 148.904Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M100.851 141.312C101.06 141.312 101.147 141.312 101.307 141.312C101.208 141.411 101.147 141.485 101.048 141.584C100.999 141.497 100.949 141.436 100.851 141.312Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M91.2863 148.102C91.1752 148.127 91.1135 148.139 91.0271 148.152C91.0271 148.029 91.0271 147.918 91.0271 147.745C91.1258 147.893 91.1875 147.979 91.2863 148.102Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M90.9407 147.117C90.8914 147.067 90.8296 147.006 90.7803 146.956C90.8296 146.907 90.879 146.858 90.916 146.809C91.1135 146.956 91.1135 146.956 90.9407 147.117Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M88.7935 146.008C88.8306 146.045 88.8799 146.094 88.9416 146.155C88.8799 146.205 88.8306 146.254 88.7689 146.316C88.7318 146.279 88.6701 146.229 88.5837 146.143C88.6578 146.094 88.7318 146.045 88.7935 146.008Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M101.122 145.921C101.147 146.032 101.159 146.094 101.184 146.18C101.06 146.18 100.949 146.18 100.777 146.18C100.912 146.082 100.999 146.008 101.122 145.921Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M84.2027 146.291C84.2521 146.365 84.3014 146.439 84.3508 146.525C84.2767 146.525 84.178 146.537 84.0176 146.55C84.0423 146.439 84.0669 146.377 84.0793 146.303C84.1163 146.303 84.1657 146.303 84.2027 146.291Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M94.6555 144.948C94.6062 145.022 94.5568 145.096 94.4951 145.182C94.4334 145.12 94.384 145.083 94.2976 145.009C94.384 144.948 94.4581 144.899 94.5321 144.837C94.5815 144.874 94.6185 144.911 94.6555 144.948Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M100.16 136.543C100.197 136.506 100.246 136.457 100.308 136.395C100.357 136.457 100.406 136.506 100.468 136.568C100.431 136.605 100.382 136.666 100.295 136.753C100.246 136.679 100.209 136.617 100.16 136.543Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M99.1105 144.627C99.0982 144.714 99.0858 144.775 99.0612 144.886C98.9377 144.8 98.8514 144.726 98.6909 144.627C98.8884 144.627 98.9871 144.627 99.1105 144.627Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M85.918 149.138C86.0414 149.039 86.1278 148.977 86.2388 148.879C86.2759 148.977 86.3005 149.039 86.3376 149.138C86.2018 149.138 86.0907 149.138 85.918 149.138Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M101.961 145.009C101.887 145.083 101.838 145.133 101.788 145.17C101.727 145.108 101.665 145.059 101.616 145.009C101.677 144.948 101.727 144.899 101.788 144.837C101.838 144.886 101.9 144.935 101.961 145.009Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M89.3736 145.096C89.4106 145.133 89.46 145.182 89.5217 145.244C89.46 145.293 89.4106 145.342 89.3489 145.404C89.3119 145.367 89.2502 145.318 89.1638 145.231C89.2255 145.17 89.2996 145.133 89.3736 145.096Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M98.5182 140.709C98.4195 140.709 98.3208 140.709 98.2097 140.709C98.2097 140.635 98.2097 140.585 98.2097 140.474C98.3455 140.536 98.4442 140.585 98.5429 140.622C98.5306 140.659 98.5182 140.684 98.5182 140.709Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M94.7788 143.21C94.7788 143.001 94.7788 142.914 94.7788 142.754C94.8775 142.853 94.9516 142.914 95.0503 143.013C94.9639 143.062 94.9022 143.112 94.7788 143.21Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M89.9535 143.185C89.8424 143.038 89.7807 142.951 89.6943 142.828C89.8054 142.803 89.8671 142.791 89.9535 142.779C89.9535 142.902 89.9535 143.001 89.9535 143.185Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M101.751 142.705C101.949 142.693 102.048 142.68 102.196 142.668C102.183 142.767 102.183 142.841 102.171 142.951C102.023 142.865 101.924 142.804 101.751 142.705Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M96.3709 145.502C96.3586 145.613 96.3462 145.675 96.3339 145.786C96.2105 145.712 96.1241 145.663 95.9636 145.564C96.1364 145.539 96.2351 145.527 96.3709 145.502Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M91.0149 145.687C91.126 145.835 91.1877 145.921 91.2741 146.057C91.163 146.082 91.1013 146.094 91.0149 146.106C91.0149 145.971 91.0149 145.872 91.0149 145.687Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M102.677 141.214C102.64 141.312 102.615 141.362 102.578 141.473C102.467 141.386 102.381 141.312 102.258 141.214C102.418 141.214 102.529 141.214 102.677 141.214Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M102.319 148.633C102.418 148.817 102.467 148.916 102.517 149.027C102.467 149.039 102.406 149.052 102.319 149.064C102.319 148.941 102.319 148.842 102.319 148.633Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M92.4835 143.481C92.5698 143.481 92.6192 143.481 92.6809 143.481C92.6933 143.543 92.7056 143.592 92.7179 143.654C92.5698 143.728 92.4711 143.728 92.4835 143.481Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M93.0389 145.638C93.0389 145.724 93.0389 145.774 93.0389 145.835C92.9772 145.847 92.9278 145.86 92.8661 145.872C92.7921 145.724 92.7921 145.626 93.0389 145.638Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M101.739 145.317C101.739 145.379 101.739 145.416 101.739 145.478C101.677 145.49 101.616 145.502 101.542 145.515C101.529 145.441 101.517 145.391 101.505 145.305C101.579 145.317 101.653 145.317 101.739 145.317Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M100.727 149.015C100.579 148.867 100.53 148.817 100.48 148.768C100.53 148.719 100.579 148.67 100.666 148.583C100.69 148.706 100.703 148.817 100.727 149.015Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M81.7468 146.858C81.7468 146.796 81.7468 146.759 81.7468 146.698C81.8085 146.685 81.8702 146.673 81.9443 146.661C81.9566 146.735 81.969 146.784 81.9813 146.87C81.8949 146.858 81.8209 146.858 81.7468 146.858Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M70.7633 149.175C70.6399 149.162 70.5412 149.162 70.3931 149.15C70.4918 149.064 70.5412 149.014 70.6399 148.94C70.6646 149.002 70.7139 149.076 70.7633 149.175Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M96.1364 144.985C96.1364 145.046 96.1364 145.083 96.1364 145.145C96.0746 145.157 96.0129 145.17 95.9389 145.182C95.9265 145.108 95.9142 145.059 95.9019 144.972C95.9883 144.985 96.0623 144.985 96.1364 144.985Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M98.5306 144.75C98.3949 144.861 98.3331 144.911 98.2344 144.997C98.2097 144.886 98.1974 144.837 98.1851 144.75C98.2714 144.75 98.3455 144.75 98.5306 144.75Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M100.863 140.98C100.801 140.93 100.74 140.881 100.616 140.782C100.764 140.758 100.826 140.745 100.9 140.733C100.912 140.807 100.925 140.856 100.937 140.906C100.912 140.93 100.888 140.955 100.863 140.98Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M100.505 137.307C100.567 137.307 100.604 137.307 100.665 137.307C100.678 137.369 100.69 137.431 100.702 137.505C100.628 137.517 100.579 137.529 100.493 137.542C100.505 137.455 100.505 137.381 100.505 137.307Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M86.3623 147.93C86.3006 147.881 86.2389 147.831 86.1155 147.733C86.2636 147.708 86.3253 147.696 86.3993 147.684C86.4117 147.758 86.424 147.807 86.4363 147.856C86.4117 147.881 86.387 147.905 86.3623 147.93Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M100.826 140.511C100.752 140.511 100.69 140.499 100.604 140.499C100.604 140.425 100.592 140.376 100.592 140.302C100.666 140.29 100.727 140.29 100.801 140.277C100.814 140.364 100.826 140.438 100.826 140.511Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M95.4576 140.08C95.4576 140.142 95.4576 140.179 95.4576 140.24C95.3959 140.252 95.3342 140.265 95.2602 140.277C95.2478 140.203 95.2355 140.154 95.2231 140.068C95.2972 140.08 95.3712 140.08 95.4576 140.08Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M98.6663 147.092C98.802 146.981 98.8637 146.932 98.9625 146.846C98.9871 146.957 98.9995 147.006 99.0118 147.092C98.9131 147.092 98.839 147.092 98.6663 147.092Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M98.3947 138.219C98.333 138.219 98.296 138.219 98.2343 138.219C98.2219 138.158 98.2096 138.096 98.1973 138.022C98.2713 138.01 98.3207 137.997 98.4071 137.985C98.3947 138.071 98.3947 138.145 98.3947 138.219Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M92.8413 139.562C92.9771 139.451 93.0388 139.402 93.1375 139.316C93.1622 139.427 93.1745 139.476 93.1869 139.562C93.0881 139.562 93.0141 139.562 92.8413 139.562Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M100.703 134.313C100.703 134.251 100.703 134.214 100.703 134.152C100.764 134.14 100.826 134.128 100.9 134.115C100.912 134.189 100.925 134.239 100.937 134.325C100.863 134.313 100.789 134.313 100.703 134.313Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M91.7922 141.497C91.7922 141.436 91.7922 141.399 91.7922 141.337C91.8539 141.325 91.9157 141.312 91.9897 141.3C92.002 141.374 92.0144 141.423 92.0267 141.51C91.9527 141.497 91.8786 141.497 91.7922 141.497Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M103.331 146.784C103.418 146.784 103.467 146.784 103.529 146.784C103.541 146.846 103.553 146.895 103.566 146.956C103.418 147.043 103.319 147.043 103.331 146.784Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M95.0998 146.34C95.0998 146.402 95.0998 146.451 95.0998 146.525C95.0257 146.525 94.9641 146.525 94.7666 146.525C94.9394 146.439 95.0134 146.39 95.0998 146.34Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M101.604 147.474C101.702 147.474 101.764 147.474 101.789 147.474C101.752 147.536 101.702 147.61 101.641 147.696C101.628 147.622 101.628 147.573 101.604 147.474Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M84.8445 145.995C84.8445 145.897 84.8445 145.835 84.8445 145.811C84.9062 145.848 84.9802 145.897 85.0666 145.958C84.9926 145.971 84.9432 145.971 84.8445 145.995Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M89.4229 147.955C89.4105 147.844 89.4105 147.794 89.3982 147.696C89.4846 147.708 89.5586 147.708 89.6697 147.72C89.571 147.807 89.5216 147.856 89.4229 147.955Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M97.9382 142.705C98.037 142.693 98.0863 142.68 98.1604 142.668C98.1727 142.742 98.1851 142.804 98.2344 142.988C98.0863 142.841 98.0246 142.779 97.9382 142.705Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M103.985 142.446C103.985 142.557 103.985 142.68 103.985 142.791C103.961 142.791 103.948 142.791 103.924 142.791C103.924 142.68 103.924 142.557 103.924 142.446C103.948 142.446 103.973 142.446 103.985 142.446Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M94.0015 142.508C94.0385 142.446 94.0755 142.384 94.1496 142.261C94.1742 142.545 94.1742 142.545 94.0015 142.508Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M95.3959 140.647C95.3465 140.561 95.2972 140.487 95.2478 140.4C95.3836 140.376 95.5193 140.351 95.3959 140.647Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M99.2464 140.462C99.1723 140.487 99.1106 140.499 99.0119 140.524C98.9995 140.438 98.9995 140.376 98.9749 140.228C99.1106 140.327 99.16 140.388 99.2464 140.462Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M101.653 139.907C101.554 139.92 101.505 139.932 101.431 139.944C101.418 139.87 101.406 139.809 101.357 139.624C101.505 139.76 101.566 139.821 101.653 139.907Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M93.2857 149.15C93.1747 149.15 93.0636 149.162 92.9525 149.162C92.9525 149.138 92.9525 149.113 92.9402 149.088C93.0513 149.076 93.1623 149.064 93.2734 149.039C93.2857 149.076 93.2857 149.113 93.2857 149.15Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M86.7695 144.59C86.7695 144.689 86.7695 144.751 86.7695 144.775C86.7078 144.738 86.6337 144.689 86.5474 144.627C86.6091 144.615 86.6584 144.615 86.7695 144.59Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M85.153 149.15C85.0543 149.15 84.9556 149.15 84.8445 149.15C84.8445 149.125 84.8445 149.113 84.8445 149.088C84.9432 149.076 85.0419 149.064 85.1407 149.052C85.153 149.088 85.153 149.113 85.153 149.15Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M95.7909 147.314C95.7168 147.314 95.6428 147.314 95.5564 147.314C95.5564 147.289 95.5564 147.277 95.5564 147.252C95.6304 147.252 95.7045 147.252 95.7909 147.252C95.7909 147.277 95.7909 147.301 95.7909 147.314Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M89.4969 146.685C89.4969 146.747 89.4969 146.809 89.4969 146.87C89.4722 146.87 89.4599 146.87 89.4352 146.882C89.4229 146.821 89.4105 146.759 89.3982 146.698C89.4352 146.685 89.4599 146.685 89.4969 146.685Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M93.9521 148.645C93.9892 148.509 94.0139 148.435 94.0262 148.374C94.0385 148.423 94.0632 148.485 94.0756 148.534C94.0756 148.546 94.0385 148.571 93.9521 148.645Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M104.8 146.636C104.738 146.636 104.676 146.636 104.615 146.636C104.615 146.624 104.615 146.599 104.602 146.587C104.664 146.575 104.726 146.562 104.787 146.538C104.787 146.575 104.8 146.612 104.8 146.636Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M92.8043 147.018C92.8043 147.08 92.8043 147.141 92.8043 147.203C92.792 147.203 92.7673 147.203 92.7549 147.215C92.7426 147.154 92.7302 147.092 92.7056 147.03C92.7426 147.03 92.7796 147.03 92.8043 147.018Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M87.8186 147.474C87.8803 147.474 87.942 147.474 88.0037 147.474C88.0037 147.486 88.0037 147.511 88.0161 147.523C87.9544 147.536 87.8927 147.548 87.8309 147.573C87.8309 147.548 87.8186 147.511 87.8186 147.474Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M98.8637 147.548C98.802 147.548 98.7403 147.548 98.6786 147.548C98.6786 147.523 98.6786 147.511 98.6663 147.486C98.728 147.474 98.7897 147.462 98.8514 147.449C98.8514 147.486 98.8514 147.523 98.8637 147.548Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M102.788 138.244C102.85 138.244 102.911 138.244 102.973 138.244C102.973 138.269 102.973 138.281 102.986 138.306C102.924 138.318 102.862 138.33 102.8 138.342C102.788 138.306 102.788 138.269 102.788 138.244Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M99.0117 134.707C99.0734 134.707 99.1351 134.707 99.1968 134.707C99.1968 134.719 99.1968 134.744 99.2092 134.756C99.1475 134.769 99.0858 134.781 99.0241 134.806C99.0241 134.769 99.0117 134.744 99.0117 134.707Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M100.271 143.678C100.271 143.617 100.271 143.555 100.271 143.494C100.283 143.494 100.308 143.494 100.32 143.481C100.332 143.543 100.345 143.604 100.369 143.666C100.332 143.666 100.308 143.678 100.271 143.678Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M103.319 149.15C103.257 149.15 103.195 149.15 103.134 149.15C103.134 149.125 103.134 149.113 103.121 149.088C103.183 149.076 103.245 149.064 103.306 149.052C103.306 149.088 103.306 149.113 103.319 149.15Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M96.6177 142.237C96.6794 142.237 96.7411 142.237 96.8028 142.237C96.8028 142.261 96.8028 142.274 96.8151 142.298C96.7534 142.311 96.6917 142.323 96.63 142.335C96.6177 142.298 96.6177 142.261 96.6177 142.237Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M89.7192 142.076C89.6575 142.076 89.5958 142.076 89.5341 142.076C89.5341 142.064 89.5341 142.039 89.5217 142.027C89.5834 142.015 89.6451 142.002 89.7068 141.978C89.7192 142.015 89.7192 142.052 89.7192 142.076Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M93.3103 141.3C93.3103 141.226 93.3103 141.152 93.3103 141.066C93.335 141.066 93.3473 141.066 93.372 141.066C93.372 141.14 93.372 141.214 93.372 141.3C93.3473 141.3 93.335 141.3 93.3103 141.3Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M96.1611 139.957C96.2228 139.957 96.2845 139.957 96.3462 139.957C96.3462 139.969 96.3462 139.994 96.3586 140.006C96.2969 140.018 96.2352 140.031 96.1735 140.055C96.1611 140.018 96.1611 139.981 96.1611 139.957Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M78.6616 148.411C78.6983 148.411 78.735 148.411 78.7717 148.411C78.7717 148.423 78.7717 148.435 78.7717 148.447C78.735 148.447 78.6983 148.447 78.6616 148.447C78.6616 148.435 78.6616 148.423 78.6616 148.411Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M80.8335 149.088C80.8702 149.088 80.9069 149.088 80.9436 149.088C80.9436 149.101 80.9436 149.113 80.9436 149.125C80.9069 149.125 80.8702 149.125 80.8335 149.125C80.8335 149.113 80.8335 149.101 80.8335 149.088Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M76.5266 149.051C76.5266 149.014 76.5266 148.977 76.5266 148.94C76.539 148.94 76.5513 148.94 76.5636 148.94C76.5636 148.977 76.5636 149.014 76.5636 149.051C76.5636 149.051 76.5513 149.051 76.5266 149.051Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M103.492 148.374C103.492 148.337 103.492 148.3 103.492 148.263C103.504 148.263 103.516 148.263 103.529 148.263C103.529 148.3 103.529 148.337 103.529 148.374C103.516 148.374 103.504 148.374 103.492 148.374Z"
                                                                    fill="#564C93" />
                                                                <path.3271 148.485C81.3395 148.485 81.3518 148.485 81.3642
                                                                    148.485C81.3642 148.522 81.3642 148.559 81.3642
                                                                    148.596C81.3518 148.596 81.3395 148.596 81.3271
                                                                    148.596Z" fill="#564C93" />
                                                                <path
                                                                    d="M87.1521 149.175C87.1521 149.138 87.1521 149.101 87.1521 149.064C87.1644 149.064 87.1768 149.064 87.1891 149.064C87.1891 149.101 87.1891 149.138 87.1891 149.175C87.1768 149.175 87.1644 149.175 87.1521 149.175Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M102.455 136.506C102.455 136.469 102.455 136.432 102.455 136.395C102.467 136.395 102.48 136.395 102.492 136.395C102.492 136.432 102.492 136.469 102.492 136.506C102.48 136.506 102.467 136.506 102.455 136.506Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M102.615 136.74C102.615 136.777 102.615 136.814 102.615 136.851C102.603 136.851 102.591 136.851 102.578 136.851C102.578 136.814 102.578 136.777 102.578 136.74C102.591 136.74 102.603 136.74 102.615 136.74Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M97.9629 138.034C97.9996 138.034 98.0363 138.034 98.073 138.034C98.073 138.047 98.073 138.059 98.073 138.071C98.0363 138.071 97.9996 138.071 97.9629 138.071C97.9629 138.059 97.9629 138.047 97.9629 138.034Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M102.578 139.02C102.578 138.983 102.578 138.946 102.578 138.909C102.591 138.909 102.603 138.909 102.615 138.909C102.615 138.946 102.615 138.983 102.615 139.02C102.603 139.02 102.591 139.02 102.578 139.02Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M87.6086 140.499C87.6086 140.462 87.6086 140.425 87.6086 140.388C87.621 140.388 87.6333 140.388 87.6457 140.388C87.6457 140.425 87.6457 140.462 87.6457 140.499C87.6333 140.499 87.621 140.499 87.6086 140.499Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M97.9629 145.108C97.9996 145.108 98.0363 145.108 98.073 145.108C98.073 145.12 98.073 145.132 98.073 145.144C98.0363 145.144 97.9996 145.144 97.9629 145.144C97.9629 145.132 97.9629 145.12 97.9629 145.108Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M90.7311 146.205C90.7311 146.242 90.7311 146.279 90.7311 146.316C90.7188 146.316 90.7064 146.316 90.6941 146.316C90.6941 146.279 90.6941 146.242 90.6941 146.205C90.7064 146.205 90.7188 146.205 90.7311 146.205Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M103.072 146.205C103.072 146.242 103.072 146.279 103.072 146.316C103.06 146.316 103.047 146.316 103.035 146.316C103.035 146.279 103.035 146.242 103.035 146.205C103.047 146.205 103.06 146.205 103.072 146.205Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M93.5447 146.427C93.5447 146.39 93.5447 146.353 93.5447 146.316C93.557 146.316 93.5694 146.316 93.5817 146.316C93.5817 146.353 93.5817 146.39 93.5817 146.427C93.5694 146.427 93.557 146.427 93.5447 146.427Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M91.7553 146.427C91.7553 146.463 91.7553 146.5 91.7553 146.537C91.7429 146.537 91.7306 146.537 91.7183 146.537C91.7183 146.5 91.7183 146.463 91.7183 146.427C91.7306 146.427 91.7429 146.427 91.7553 146.427Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M101.27 146.673C101.233 146.649 101.209 146.624 101.172 146.599C101.184 146.587 101.196 146.575 101.209 146.562C101.233 146.599 101.258 146.624 101.283 146.661C101.283 146.661 101.27 146.661 101.27 146.673Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M82.5488 146.809C82.5855 146.809 82.6222 146.809 82.6589 146.809C82.6589 146.821 82.6589 146.833 82.6589 146.845C82.6222 146.845 82.5855 146.845 82.5488 146.845C82.5488 146.833 82.5488 146.821 82.5488 146.809Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M80.2649 147.646C80.2282 147.646 80.1915 147.646 80.1548 147.646C80.1548 147.634 80.1548 147.622 80.1548 147.61C80.1915 147.61 80.2282 147.61 80.2649 147.61C80.2649 147.622 80.2649 147.634 80.2649 147.646Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M92.4094 147.918C92.4094 147.881 92.4094 147.844 92.4094 147.807C92.4218 147.807 92.4341 147.807 92.4464 147.807C92.4464 147.844 92.4464 147.881 92.4464 147.918C92.4341 147.918 92.4218 147.918 92.4094 147.918Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M94.8405 148.029C94.8405 148.066 94.8405 148.102 94.8405 148.139C94.8281 148.139 94.8158 148.139 94.8035 148.139C94.8035 148.102 94.8035 148.066 94.8035 148.029C94.8158 148.029 94.8281 148.029 94.8405 148.029Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M100.826 140.487C100.863 140.511 100.888 140.536 100.925 140.561C100.912 140.573 100.9 140.585 100.888 140.598C100.863 140.561 100.838 140.536 100.814 140.499C100.814 140.499 100.826 140.499 100.826 140.487Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M91.4592 142.594C91.4959 142.594 91.5326 142.594 91.5693 142.594C91.5693 142.606 91.5693 142.618 91.5693 142.63C91.5326 142.63 91.4959 142.63 91.4592 142.63C91.4592 142.618 91.4592 142.606 91.4592 142.594Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M95.4205 142.668C95.4205 142.705 95.4205 142.742 95.4205 142.779C95.4082 142.779 95.3959 142.779 95.3835 142.779C95.3835 142.742 95.3835 142.705 95.3835 142.668C95.3835 142.668 95.4082 142.668 95.4205 142.668Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M101.863 142.791C101.838 142.828 101.813 142.853 101.788 142.89C101.776 142.877 101.764 142.865 101.751 142.853C101.788 142.828 101.813 142.803 101.85 142.779C101.85 142.779 101.85 142.791 101.863 142.791Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M85.7444 143.432C85.7077 143.432 85.671 143.432 85.6343 143.432C85.6343 143.419 85.6343 143.407 85.6343 143.395C85.671 143.395 85.7077 143.395 85.7444 143.395C85.7444 143.407 85.7444 143.419 85.7444 143.432Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M100.443 143.814C100.443 143.851 100.443 143.888 100.443 143.925C100.431 143.925 100.419 143.925 100.406 143.925C100.406 143.888 100.406 143.851 100.406 143.814C100.419 143.814 100.431 143.814 100.443 143.814Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M103.33 143.888C103.294 143.888 103.257 143.888 103.22 143.888C103.22 143.875 103.22 143.863 103.22 143.851C103.257 143.851 103.294 143.851 103.33 143.851C103.33 143.863 103.33 143.875 103.33 143.888Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M90.2126 144.393C90.188 144.43 90.1633 144.455 90.1386 144.492C90.1263 144.479 90.1139 144.467 90.1016 144.455C90.1386 144.43 90.1633 144.406 90.2003 144.381C90.2003 144.381 90.2003 144.381 90.2126 144.393Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M91.0024 144.763C91.0391 144.763 91.0758 144.763 91.1125 144.763C91.1125 144.775 91.1125 144.787 91.1125 144.799C91.0758 144.799 91.0391 144.799 91.0024 144.799C91.0024 144.787 91.0024 144.775 91.0024 144.763Z"
                                                                    fill="#564C93" />
                                                                <path
                                                                    d="M46.5625 70.2557C46.5255 70.2557 46.4885 70.2434 46.4638 70.2311C46.3774 70.1818 46.3527 70.0586 46.4021 69.9723C46.6489 69.5903 47.0315 69.3192 47.4634 69.2206C47.8954 69.122 48.3767 69.1959 48.7592 69.4178C48.8456 69.467 48.8703 69.5903 48.821 69.6765C48.7716 69.7628 48.6482 69.7875 48.5618 69.7382C48.2656 69.5533 47.8954 69.504 47.5498 69.578C47.2043 69.6642 46.8958 69.8737 46.7106 70.1695C46.6736 70.2311 46.6119 70.2557 46.5625 70.2557Z"
                                                                    fill="#BF453F" />
                                                                <path
                                                                    d="M73.2314 70.0338C73.145 70.0338 73.0587 69.9599 73.0463 69.8736C73.034 69.775 73.108 69.6764 73.2067 69.6641C73.8115 69.5902 74.5149 69.2081 74.7247 68.5303C74.9715 67.7663 74.4779 66.9776 74.2557 66.6818C74.0336 66.3861 73.7744 66.115 73.5153 65.8438C73.2808 65.5974 73.034 65.3509 72.8242 65.0675C72.5527 64.7101 72.3058 64.3034 72.0714 63.8105C72.022 63.7119 72.0714 63.601 72.1578 63.564C72.2565 63.5147 72.3676 63.564 72.4046 63.6503C72.6267 64.1186 72.8612 64.5129 73.1204 64.8457C73.3178 65.1044 73.5646 65.3509 73.7868 65.5851C74.0459 65.8562 74.3174 66.1396 74.5519 66.46C75.0949 67.1994 75.28 67.9881 75.0826 68.6413C74.8604 69.356 74.12 69.9229 73.2561 70.0338C73.2561 70.0338 73.2438 70.0338 73.2314 70.0338Z"
                                                                    fill="#BF453F" />
                                                                <path
                                                                    d="M92.4342 6.07545C92.3478 6.07545 92.2738 6.02616 92.2491 5.9399C91.9652 4.91706 91.669 3.91886 91.1014 3.06855C90.6941 2.45238 90.1388 1.95944 89.5464 1.676C89.4477 1.62671 89.4106 1.5158 89.46 1.42954C89.5094 1.33095 89.6204 1.29398 89.7068 1.34327C90.3609 1.65136 90.9656 2.19359 91.4099 2.87137C92.0023 3.77098 92.3108 4.79382 92.607 5.85363C92.6316 5.95222 92.5699 6.05081 92.4712 6.08778C92.4712 6.07545 92.4589 6.07545 92.4342 6.07545Z"
                                                                    fill="#BF453F" />
                                                                <path
                                                                    d="M91.0643 15.626C91.0272 15.626 90.9902 15.6136 90.9532 15.589C90.8668 15.5274 90.8545 15.4165 90.9162 15.3302C91.9405 13.9007 92.1873 11.9289 91.5579 10.2899C91.5332 10.2406 91.5456 10.179 91.5702 10.142C91.5949 10.0928 91.6443 10.0558 91.6937 10.0435C92.6316 9.80932 93.6806 9.47659 94.421 8.76183C95.0628 8.13334 95.4823 6.99958 94.9764 6.13695C94.8159 5.85351 94.5815 5.66866 94.3346 5.61936C94.0755 5.57007 93.7916 5.65633 93.5448 5.7426L89.534 7.02423C88.7812 7.25838 88.0037 7.51717 87.3496 7.94849C86.6338 8.41677 86.1649 9.08224 86.0662 9.76002C86.0538 9.85861 85.9551 9.93255 85.8564 9.92023C85.7576 9.9079 85.6836 9.80932 85.6959 9.71073C85.8193 8.93436 86.3377 8.18263 87.1398 7.65272C87.8433 7.18443 88.6454 6.92564 89.4229 6.67918L93.4337 5.39754C93.7176 5.31128 94.0631 5.20037 94.4087 5.26199C94.7542 5.33593 95.0874 5.58239 95.2972 5.96442C95.9019 6.99958 95.4453 8.29354 94.6802 9.04527C93.9397 9.77235 92.9154 10.1297 91.9898 10.3762C92.5699 12.0891 92.286 14.0979 91.237 15.5643C91.1753 15.6013 91.1136 15.626 91.0643 15.626Z"
                                                                    fill="#BF453F" />
                                                                <path
                                                                    d="M88.1765 7.46803C88.1024 7.46803 88.0284 7.41874 88.0037 7.3448C87.7939 6.70398 87.4607 6.11246 87.0288 5.59487C86.9671 5.52093 86.9794 5.3977 87.0534 5.33608C87.1275 5.27447 87.2509 5.28679 87.3126 5.36073C87.7692 5.91528 88.1271 6.54378 88.3493 7.23388C88.3863 7.33247 88.3246 7.43106 88.2258 7.46803C88.2258 7.46803 88.2012 7.46803 88.1765 7.46803Z"
                                                                    fill="#BF453F" />
                                                                <path
                                                                    d="M92.0762 11.9413C92.0145 11.9413 91.9405 11.9044 91.9158 11.8428C91.8664 11.7565 91.9035 11.6456 92.0022 11.5963C92.7056 11.2389 93.1869 10.4995 93.224 9.71081C93.224 9.61223 93.3227 9.52596 93.4214 9.53829C93.5201 9.53829 93.6065 9.63687 93.5942 9.73546C93.5448 10.6597 92.9895 11.5224 92.1626 11.9413C92.1256 11.929 92.1009 11.9413 92.0762 11.9413Z"
                                                                    fill="#BF453F" />
                                                                <path
                                                                    d="M93.7175 11.4978C93.3842 11.4978 93.0757 11.4362 92.8042 11.3129C92.7055 11.276 92.6685 11.1651 92.7055 11.0665C92.7425 10.9679 92.8536 10.9309 92.9523 10.9679C94.0013 11.4485 95.2848 10.783 95.8771 9.90808C96.4325 9.07009 96.6546 7.92401 96.5312 6.40823C96.4448 5.38539 96.2474 4.36255 95.9388 3.37668C95.7537 2.76051 95.5069 2.2306 95.2231 1.77464C95.1737 1.68837 95.1984 1.57746 95.2848 1.51585C95.3711 1.46655 95.4822 1.4912 95.5439 1.57746C95.8401 2.05808 96.0993 2.62495 96.2967 3.26577C96.6176 4.27629 96.8151 5.32377 96.9014 6.38359C97.0249 7.98563 96.7904 9.20564 96.1857 10.1176C95.5563 11.0665 94.5813 11.4978 93.7175 11.4978Z"
                                                                    fill="#BF453F" />
                                                                <path
                                                                    d="M96.5068 11.3621C96.0501 11.3621 95.5935 11.2635 95.1616 11.0417C95.0752 10.9924 95.0382 10.8815 95.0875 10.7952C95.1369 10.7089 95.248 10.672 95.3344 10.7213C96.4697 11.3005 98.3332 10.9677 99.3945 9.41497C100.382 7.94849 100.32 6.09998 100.098 4.7937C99.9869 4.16521 99.8265 3.59833 99.6167 3.14237C99.5797 3.04378 99.6167 2.93287 99.7154 2.8959C99.8141 2.85893 99.9252 2.8959 99.9622 2.99449C100.184 3.49974 100.357 4.06662 100.468 4.74441C100.703 6.1123 100.764 8.0594 99.7031 9.63679C99.0243 10.598 97.7779 11.3621 96.5068 11.3621Z"
                                                                    fill="#BF453F" />
                                                                <path
                                                                    d="M99.777 11.584C99.0859 11.584 98.4442 11.3622 97.9505 10.9309C97.8765 10.8693 97.8641 10.746 97.9382 10.6721C97.9999 10.5982 98.1233 10.5858 98.1973 10.6598C98.8514 11.2267 99.851 11.3745 100.801 11.0295C100.9 10.9925 100.999 11.0418 101.036 11.1404C101.073 11.239 101.023 11.3376 100.925 11.3745C100.542 11.5224 100.147 11.584 99.777 11.584Z"
                                                                    fill="#BF453F" />
                                                                <path
                                                                    d="M98.9501 24.7208C98.4195 24.7085 97.9135 24.7085 97.4199 24.6961C95.1615 24.6715 93.1992 24.6592 90.1387 24.1293L90.2374 23.5747C93.2486 24.1046 95.1861 24.1169 97.4199 24.1416C97.9135 24.1416 98.4195 24.1539 98.9625 24.1662L98.9501 24.7208Z"
                                                                    fill="#323B6E" />
                                                                <path
                                                                    d="M14.3279 17.0064C14.2539 17.0064 14.1798 16.9571 14.1551 16.8831C13.5011 15.1086 13.5875 13.0629 14.3773 11.3376C13.5134 11.5594 12.5508 11.8059 11.6129 11.5594C10.9712 11.3869 10.3788 10.8817 10.1073 10.2778C9.8975 9.80952 9.8975 9.31659 10.1073 8.90991C10.5392 8.04728 11.6006 7.83778 12.5878 7.73919L15.994 7.39414C16.2778 7.36949 16.5987 7.33252 16.9195 7.33252C17.0183 7.33252 17.1046 7.41878 17.1046 7.51737C17.1046 7.61596 17.0183 7.70222 16.9195 7.70222H16.9072C16.611 7.70222 16.3025 7.73919 16.031 7.76384L12.6249 8.10889C11.7487 8.19516 10.7984 8.38001 10.4405 9.08244C10.243 9.48911 10.3294 9.87114 10.4528 10.1423C10.6873 10.6475 11.181 11.0788 11.7116 11.2144C12.5755 11.4362 13.4764 11.2021 14.3403 10.9802C14.4513 10.9556 14.5624 10.9186 14.6735 10.894C14.7475 10.8817 14.8216 10.9063 14.8709 10.9556C14.9203 11.0172 14.9203 11.0912 14.8833 11.1528C13.9824 12.8657 13.8466 14.9607 14.513 16.7722C14.5501 16.8708 14.5007 16.9694 14.402 17.0064C14.3649 17.0064 14.3526 17.0064 14.3279 17.0064Z"
                                                                    fill="#BF453F" />
                                                                <path
                                                                    d="M12.1435 8.14576C12.0571 8.14576 11.9831 8.09647 11.9584 8.01021C11.6992 7.01201 11.2673 6.07543 10.6996 5.2128C10.4775 4.88007 10.2677 4.60895 10.0455 4.37481C9.97149 4.30087 9.97149 4.17763 10.0579 4.11602C10.1319 4.04208 10.2553 4.04208 10.317 4.12834C10.5515 4.37481 10.786 4.67057 11.0081 5.01562C11.6005 5.90291 12.0448 6.88878 12.3163 7.92394C12.341 8.02253 12.2793 8.12112 12.1805 8.14576C12.1682 8.14576 12.1558 8.14576 12.1435 8.14576Z"
                                                                    fill="#BF453F" />
                                                                <path
                                                                    d="M9.98382 13.987C9.4655 13.987 8.95951 13.8268 8.5646 13.531C8.47822 13.4694 8.46587 13.3462 8.52758 13.2722C8.58928 13.186 8.71269 13.1737 8.78674 13.2353C9.34209 13.6666 10.2183 13.7282 10.9217 13.4078C11.6375 13.0751 12.2299 12.3726 12.6001 11.4484C12.6371 11.3498 12.7482 11.3005 12.8469 11.3375C12.9457 11.3744 12.995 11.4854 12.958 11.5839C12.5507 12.6068 11.8967 13.3708 11.0945 13.7405C10.7366 13.9007 10.354 13.987 9.98382 13.987Z"
                                                                    fill="#BF453F" />
                                                                <path
                                                                    d="M5.73858 14.4677C5.63985 14.4677 5.55347 14.3814 5.55347 14.2828C5.55347 14.1842 5.63985 14.098 5.73858 14.098C6.77523 14.0857 7.92294 13.9747 8.51531 13.2107C9.13236 12.4097 8.91022 11.2143 8.67574 10.3886C8.30551 9.05771 7.81187 7.75143 7.18248 6.51909C6.96034 6.07545 6.6765 5.55787 6.2569 5.23746C6.12115 5.13887 5.97306 5.05261 5.81263 4.99099C5.7139 4.95402 5.66454 4.84311 5.70156 4.74452C5.73858 4.64594 5.84965 4.59664 5.94838 4.63361C6.14583 4.70755 6.33095 4.80614 6.49138 4.9417C6.97268 5.3114 7.28121 5.86595 7.52803 6.34656C8.15742 7.60355 8.67574 8.93448 9.04597 10.2901C9.29279 11.202 9.53961 12.5083 8.82383 13.4448C8.10805 14.3198 6.87395 14.4554 5.73858 14.4677Z"
                                                                    fill="#BF453F" />
                                                                <path
                                                                    d="M4.23299 15.2565C3.88744 15.2565 3.55423 15.1825 3.25805 15.0347C2.41886 14.628 1.77713 13.7284 1.43158 12.5207C1.4069 12.4221 1.45626 12.3235 1.55499 12.2865C1.65372 12.2619 1.75245 12.3112 1.78947 12.4098C1.97459 13.0506 2.41886 14.1967 3.41848 14.6896C3.8751 14.9114 4.46747 14.9361 4.94877 14.7389C5.33134 14.591 5.61518 14.3199 5.73859 13.9748C5.87434 13.6175 5.83732 13.2231 5.78796 12.8411C5.55348 11.0419 4.8377 9.32892 3.71467 7.89941C3.50487 7.64062 3.22103 7.30789 2.88782 7.14768C2.78909 7.09839 2.75207 6.98748 2.80143 6.90122C2.8508 6.80263 2.96187 6.76566 3.04825 6.81495C3.45551 7.01213 3.77637 7.38183 4.01085 7.67759C5.18325 9.1564 5.92371 10.9433 6.17053 12.8041C6.23223 13.2354 6.25691 13.6914 6.09648 14.1227C5.93605 14.5664 5.57816 14.9114 5.09686 15.0963C4.82536 15.2072 4.52917 15.2565 4.23299 15.2565Z"
                                                                    fill="#BF453F" />
                                                                <path
                                                                    d="M14.0318 12.9889C14.0194 12.9889 14.0194 12.9889 14.0318 12.9889C13.4024 12.9519 12.8224 12.6685 12.4028 12.2125C12.3287 12.1386 12.3411 12.0153 12.4151 11.9537C12.4892 11.8798 12.6126 11.8921 12.6743 11.9661C13.0198 12.3481 13.5135 12.5822 14.0318 12.6192C14.1305 12.6192 14.2169 12.7178 14.2046 12.8164C14.2046 12.915 14.1305 12.9889 14.0318 12.9889Z"
                                                                    fill="#BF453F" />
                                                                <path
                                                                    d="M64.4816 96.7755C63.7042 96.7755 62.939 96.7139 62.1739 96.5413C60.3968 96.1347 58.8295 95.2104 57.3115 94.2985L57.5954 93.8179C59.0763 94.7051 60.5942 95.6171 62.285 95.9991C64.0867 96.4058 65.9996 96.184 67.8137 95.9252L67.8878 96.4797C66.7894 96.6276 65.6294 96.7755 64.4816 96.7755Z"
                                                                    fill="#323B6E" />
                                                                <path
                                                                    d="M12.0942 31.1781L12.0078 30.6236C14.1551 30.2662 16.2531 29.4652 18.0796 28.2944L18.3758 28.7627C16.4876 29.9827 14.3032 30.8207 12.0942 31.1781Z"
                                                                    fill="#323B6E" />
                                                                <path d="M45.9826 149.125H18.1289V149.68H45.9826V149.125Z"
                                                                    fill="#323B6E" />
                                                                <path d="M219.522 149.162H59.6562V149.717H219.522V149.162Z"
                                                                    fill="#323B6E" />
                                                                <path d="M59.6565 149.138H45.9827V149.692H59.6565V149.138Z"
                                                                    fill="#323B6E" />
                                                                <path
                                                                    d="M59.8045 154.4C59.6441 155.09 59.4713 155.792 59.2862 156.495L59.2615 156.581L47.2661 156.593C46.8465 155.952 46.4762 155.201 46.1307 154.387C45.4273 152.724 44.8719 150.752 44.44 148.756C44.3166 148.213 44.2055 147.671 44.1068 147.129C43.7489 145.28 43.4897 143.481 43.3046 141.953C43.2182 141.189 43.1318 140.499 43.0825 139.895C42.9344 138.416 42.885 137.48 42.885 137.48L44.3906 137.443L61.7791 136.95C61.7791 136.925 62.0259 144.886 59.8045 154.4Z"
                                                                    fill="white" />
                                                                <path
                                                                    d="M44.0944 147.129C44.1932 147.671 44.3042 148.213 44.4276 148.755C42.2556 149.335 39.7381 148.657 38.3065 146.919C36.8379 145.157 36.7022 142.36 38.1214 140.56C38.7508 139.759 39.701 139.168 40.713 139.131C41.5522 139.106 42.342 139.439 43.0701 139.895C43.1318 140.499 43.2059 141.201 43.2923 141.953C42.4407 141.14 41.0092 141.016 40.0342 141.682C39.0963 142.335 38.6891 143.604 38.9606 144.701C39.2321 145.798 40.133 146.71 41.1943 147.092C42.1322 147.425 43.1565 147.412 44.0944 147.129Z"
                                                                    fill="white" />
                                                                <path
                                                                    d="M59.2611 156.288L47.2656 156.308L47.2665 156.862L59.262 156.843L59.2611 156.288Z"
                                                                    fill="#323B6E" />
                                                                <path
                                                                    d="M175.008 151.96C173.712 148.164 173.07 144.159 173.107 140.154V140.117L178.439 140.018L182.56 139.945L188.151 139.846V139.982C188.324 144.948 187.423 149.951 185.535 154.548L176.044 154.659C175.674 153.771 175.316 152.872 175.008 151.96Z"
                                                                    fill="#323B6E" />
                                                                <path
                                                                    d="M181.882 123.468C182.054 128.915 182.548 135.496 182.573 139.907V139.944L178.451 140.018V139.994C178.352 138.983 178.266 137.96 178.167 136.95C178.093 136.173 178.007 135.36 177.525 134.756C176.97 134.017 175.711 133.425 174.563 132.698C173.996 132.341 173.44 131.934 173.132 131.343C172.823 130.751 172.836 129.95 173.329 129.494C173.65 129.198 174.131 129.1 174.563 129.186C174.995 129.272 175.39 129.506 175.711 129.802C176.02 130.086 176.291 130.418 176.637 130.653C176.921 130.85 177.414 131.072 177.649 130.69C177.735 130.554 177.747 130.394 177.76 130.234C177.76 130.172 177.76 130.098 177.76 130.036C177.772 129.408 177.636 128.742 177.587 128.114C177.525 127.399 177.476 126.697 177.451 125.982C177.377 124.552 177.365 123.123 177.476 121.693C177.538 120.88 177.673 119.98 178.315 119.488C179.191 118.81 180.573 119.327 181.178 120.252C181.783 121.188 181.845 122.359 181.882 123.468Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M185.448 154.412C185.386 154.412 185.337 154.412 185.263 154.412C185.201 154.277 185.152 154.141 185.078 153.981C185.164 153.969 185.214 153.956 185.263 153.944C185.325 154.03 185.386 154.104 185.448 154.178C185.448 154.264 185.448 154.338 185.448 154.412Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M176.205 152.699C176.242 152.933 176.415 152.724 176.513 152.872C176.538 152.687 176.55 152.588 176.587 152.379C176.711 152.847 177.093 152.859 177.352 153.032C177.389 153.093 177.427 153.155 177.476 153.241C177.439 153.328 177.389 153.438 177.34 153.549C177.365 153.574 177.377 153.586 177.402 153.611C177.439 153.574 177.488 153.537 177.525 153.5C177.797 153.636 177.797 153.636 177.945 153.956C177.821 153.931 177.723 153.907 177.599 153.87C177.562 153.931 177.501 154.03 177.402 154.203C177.575 154.129 177.661 154.092 177.834 154.018C177.772 154.19 177.747 154.276 177.71 154.375C177.735 154.387 177.784 154.412 177.834 154.412C178.081 154.424 178.229 154.264 178.389 154.116C178.463 154.042 178.562 153.993 178.759 153.857C178.685 154.092 178.648 154.203 178.611 154.313C178.648 154.387 178.698 154.486 178.735 154.572C178.364 154.831 177.982 154.4 177.599 154.609C177.587 154.597 177.55 154.56 177.513 154.523C177.488 154.548 177.451 154.585 177.439 154.597C177.278 154.511 177.106 154.424 176.896 154.326C176.822 154.129 177.019 153.981 177.093 153.771C176.995 153.673 176.945 153.549 177.13 153.438C177.069 153.389 177.019 153.34 176.945 153.266C176.896 153.562 176.859 153.845 176.797 154.178C176.538 154.178 176.316 154.178 176.094 154.178C176.094 154.104 176.094 154.03 176.094 153.944C176.131 153.919 176.168 153.882 176.205 153.857C176.168 153.808 176.131 153.759 176.094 153.71C176.094 153.685 176.106 153.66 176.094 153.66C176.044 153.611 175.983 153.562 175.909 153.475C175.847 153.562 175.785 153.648 175.711 153.771C175.649 153.574 175.6 153.426 175.563 153.278C175.637 153.278 175.723 153.278 175.835 153.278C175.835 153.019 175.946 152.81 176.205 152.699ZM176.538 153.389C176.612 153.389 176.674 153.389 176.772 153.389C176.76 153.291 176.76 153.229 176.748 153.167C176.55 153.167 176.55 153.167 176.427 153.266C176.316 153.266 176.217 153.266 175.97 153.266C176.242 153.451 176.427 153.549 176.55 153.71C176.538 153.722 176.538 153.722 176.526 153.734C176.55 153.771 176.575 153.796 176.6 153.833C176.612 153.82 176.624 153.808 176.637 153.796C176.6 153.771 176.575 153.747 176.538 153.734C176.538 153.623 176.538 153.5 176.538 153.389Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M177.624 152.909C177.772 152.835 177.871 152.785 178.007 152.711C178.093 152.884 178.179 153.069 178.278 153.278C178.352 153.229 178.402 153.192 178.451 153.167C178.599 153.217 178.747 153.266 178.932 153.315C178.932 153.389 178.932 153.475 178.932 153.623C178.87 153.574 178.821 153.549 178.772 153.512C178.722 153.549 178.673 153.586 178.55 153.673C178.5 153.562 178.451 153.451 178.402 153.365C178.266 153.438 178.192 153.463 178.118 153.5C177.92 153.352 177.957 153.02 177.624 152.909Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M176.97 151.627C176.871 151.762 176.723 151.96 176.55 152.206C176.451 152.046 176.39 151.935 176.316 151.812C176.353 151.713 176.402 151.627 176.427 151.528C176.451 151.43 176.451 151.319 176.451 151.22C176.525 151.22 176.562 151.22 176.612 151.22C176.637 151.282 176.661 151.343 176.686 151.442C176.723 151.417 176.76 151.38 176.846 151.331C176.883 151.405 176.908 151.479 176.97 151.627Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M175.082 151.578C175.143 151.578 175.18 151.565 175.254 151.565C175.279 151.75 175.291 151.947 175.329 152.231C175.44 151.96 175.39 151.676 175.723 151.676C175.723 151.861 175.723 152.046 175.723 152.219C175.563 152.268 175.415 152.317 175.267 152.366C175.032 152.132 175.02 151.861 175.082 151.578Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M179.734 154.535C179.71 154.757 179.537 154.56 179.463 154.683C179.413 154.572 179.376 154.498 179.352 154.437C179.29 154.474 179.228 154.511 179.167 154.535C179.167 154.437 179.167 154.35 179.167 154.215C179.265 154.215 179.376 154.215 179.487 154.19C179.586 154.165 179.685 154.116 179.771 154.067C179.944 154.165 180.018 154.301 179.944 154.535C179.882 154.535 179.808 154.535 179.734 154.535L179.747 154.523C179.722 154.486 179.697 154.461 179.672 154.424C179.66 154.437 179.648 154.449 179.635 154.461C179.672 154.486 179.697 154.511 179.734 154.535Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M177.414 151.997C177.464 151.96 177.513 151.923 177.599 151.861C177.673 151.984 177.723 152.083 177.809 152.231C177.612 152.317 177.402 152.403 177.143 152.502C177.13 152.292 177.118 152.12 177.106 151.873C177.241 151.935 177.328 151.96 177.414 151.997Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M179.265 153.414C179.438 153.315 179.599 153.229 179.833 153.094C179.808 153.254 179.808 153.34 179.784 153.488C179.796 153.5 179.821 153.586 179.858 153.685C179.562 153.821 179.426 153.611 179.265 153.414Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M180.882 154.005C181.079 153.907 181.215 153.968 181.326 154.128C181.326 154.252 181.326 154.375 181.326 154.523C181.227 154.523 181.141 154.523 181.03 154.523C180.993 154.35 180.931 154.178 180.882 154.005Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M178.451 151.8C178.5 151.886 178.562 151.984 178.648 152.12C178.5 152.132 178.414 152.132 178.29 152.145C178.278 152.194 178.253 152.256 178.216 152.342C178.13 152.342 178.019 152.342 177.908 152.342C177.908 152.28 177.896 152.206 177.92 152.182C178.093 152.046 178.278 151.935 178.451 151.8Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M175.403 150.9C175.341 151.097 175.292 151.282 175.218 151.479C174.958 151.344 174.921 151.146 174.934 150.9C175.106 150.9 175.242 150.9 175.403 150.9Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M174.749 149.865C174.736 149.778 174.724 149.741 174.724 149.704C174.724 149.692 174.736 149.667 174.749 149.643C174.884 149.618 175.02 149.593 175.168 149.569C175.279 149.544 175.39 149.52 175.551 149.581C175.501 149.63 175.452 149.692 175.39 149.717C175.168 149.815 174.958 149.828 174.749 149.865Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M181.573 154.535C181.536 154.276 181.672 154.326 181.783 154.301C181.882 154.276 181.968 154.215 182.067 154.166C182.116 154.264 182.141 154.35 182.19 154.412C182.264 154.498 182.24 154.535 182.141 154.535C181.956 154.535 181.771 154.535 181.573 154.535Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M176.538 154.535C176.402 154.585 176.279 154.732 176.106 154.609C175.97 154.511 175.933 154.387 175.995 154.227C176.007 154.203 176.057 154.203 176.081 154.19C176.131 154.227 176.18 154.301 176.217 154.301C176.39 154.301 176.501 154.375 176.538 154.535Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M174.526 150.395C174.637 150.247 174.711 150.148 174.773 150.062C175.032 150.136 175.082 150.284 175.02 150.53C174.958 150.493 174.909 150.431 174.847 150.419C174.773 150.407 174.687 150.407 174.526 150.395Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M178.796 153.081C178.735 152.872 178.698 152.761 178.648 152.601C178.636 152.613 178.71 152.539 178.759 152.477C179.019 152.477 179.043 152.613 178.796 153.081Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M176.168 152.194C176.118 152.255 176.081 152.305 176.032 152.366C175.797 152.058 175.797 152.046 176.007 151.738C176.069 151.923 176.118 152.071 176.168 152.194Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M179.376 153.623C179.401 153.759 179.438 153.907 179.475 154.055C179.376 154.055 179.228 154.055 179.093 154.055C179.142 153.907 179.179 153.759 179.228 153.623C179.278 153.623 179.339 153.623 179.376 153.623Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M174.946 150.542C174.897 150.764 174.835 150.986 174.761 151.319C174.736 151.122 174.736 151.023 174.711 150.924C174.687 150.838 174.65 150.764 174.625 150.69C174.674 150.641 174.711 150.579 174.773 150.542C174.822 150.518 174.884 150.542 174.946 150.542Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M180.401 153.968C180.277 153.833 180.179 153.71 180.031 153.549C180.179 153.525 180.277 153.512 180.364 153.5C180.413 153.611 180.462 153.697 180.524 153.808C180.487 153.833 180.45 153.894 180.401 153.968Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M182.844 153.623C182.955 153.623 183.042 153.623 183.153 153.623C183.153 153.722 183.153 153.808 183.153 153.931C183.066 153.944 182.968 153.944 182.844 153.956C182.844 153.857 182.844 153.759 182.844 153.623Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M179.648 152.305C179.784 152.391 179.87 152.44 180.018 152.526C179.919 152.576 179.833 152.625 179.71 152.687C179.5 152.674 179.66 152.502 179.648 152.305Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M175.674 150.173C175.76 150.284 175.822 150.358 175.921 150.493C175.748 150.518 175.637 150.53 175.452 150.555C175.551 150.382 175.612 150.284 175.674 150.173Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M174.28 149.002C174.415 149.088 174.502 149.138 174.65 149.224C174.551 149.273 174.465 149.322 174.341 149.384C174.131 149.372 174.292 149.187 174.28 149.002Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M179.969 151.627C179.919 151.676 179.87 151.725 179.796 151.799C179.734 151.701 179.66 151.615 179.598 151.528C179.808 151.356 179.87 151.553 179.969 151.627Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M175.563 153.081C175.403 152.859 175.329 152.761 175.18 152.563C175.403 152.662 175.501 152.699 175.625 152.761C175.625 152.81 175.612 152.872 175.563 153.081Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M181.104 153.414C181.104 153.488 181.104 153.537 181.104 153.599C180.993 153.599 180.894 153.599 180.783 153.599C180.783 153.525 180.783 153.475 180.783 153.414C180.882 153.414 180.993 153.414 181.104 153.414Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M181.363 152.835C181.425 152.835 181.487 152.835 181.548 152.835C181.548 152.946 181.548 153.044 181.548 153.167C181.227 153.167 181.363 152.97 181.363 152.835Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M183.979 152.995C183.93 153.094 183.868 153.192 183.807 153.303C183.733 153.229 183.683 153.18 183.622 153.106C183.708 153.044 183.794 152.97 183.893 152.909C183.918 152.933 183.955 152.958 183.979 152.995Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M179.265 154.609C179.068 154.622 178.969 154.634 178.821 154.646C178.833 154.548 178.833 154.474 178.846 154.363C178.994 154.449 179.093 154.498 179.265 154.609Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M183.227 154.289C183.252 154.35 183.276 154.412 183.326 154.511C183.19 154.523 183.091 154.535 182.98 154.548C183.079 154.375 183.079 154.375 183.227 154.289Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M175.896 150.592C176.02 150.678 176.106 150.752 176.254 150.851C176.069 150.851 175.97 150.851 175.847 150.851C175.859 150.777 175.872 150.715 175.896 150.592Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M182.412 153.833C182.239 153.833 182.153 153.833 182.067 153.833C182.178 153.685 182.178 153.685 182.314 153.599C182.338 153.66 182.363 153.722 182.412 153.833Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M177.994 153.931C178.031 153.833 178.056 153.784 178.093 153.673C178.204 153.759 178.29 153.833 178.414 153.931C178.253 153.931 178.142 153.931 177.994 153.931Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M176.785 150.259C176.735 150.321 176.686 150.382 176.587 150.505C176.563 150.358 176.55 150.296 176.538 150.222C176.612 150.21 176.661 150.197 176.711 150.185C176.735 150.21 176.76 150.234 176.785 150.259Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M175.365 149.039C175.254 148.903 175.205 148.842 175.119 148.743C175.23 148.718 175.279 148.706 175.365 148.694C175.365 148.792 175.365 148.866 175.365 149.039Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M184.325 153.685C184.276 153.747 184.226 153.808 184.128 153.931C184.103 153.784 184.091 153.722 184.078 153.648C184.152 153.636 184.202 153.623 184.251 153.611C184.276 153.636 184.3 153.66 184.325 153.685Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M175.686 152.342C175.785 152.391 175.884 152.453 175.995 152.514C175.785 152.699 175.736 152.49 175.686 152.342Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M177.538 152.921C177.427 152.785 177.377 152.724 177.291 152.625C177.402 152.601 177.451 152.588 177.538 152.576C177.538 152.662 177.538 152.748 177.538 152.921Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M178.907 150.974C178.759 151.122 178.71 151.171 178.648 151.233C178.599 151.183 178.55 151.122 178.476 151.035C178.599 151.011 178.698 150.999 178.907 150.974Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M182.017 153.389C182.017 153.475 182.017 153.525 182.017 153.586C181.956 153.599 181.906 153.611 181.845 153.623C181.758 153.475 181.758 153.377 182.017 153.389Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M182.56 154.412C182.499 154.412 182.462 154.412 182.4 154.412C182.387 154.351 182.375 154.289 182.363 154.215C182.437 154.203 182.486 154.19 182.573 154.178C182.56 154.264 182.56 154.338 182.56 154.412Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M178.414 153.069C178.352 153.019 178.29 152.97 178.167 152.872C178.315 152.847 178.377 152.835 178.451 152.822C178.463 152.896 178.475 152.945 178.488 152.995C178.463 153.019 178.438 153.044 178.414 153.069Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M175.859 153.845C175.871 153.673 175.995 153.747 176.094 153.734C176.094 153.808 176.094 153.882 176.094 153.968C176.057 153.968 176.02 153.968 175.983 153.968C175.933 153.919 175.896 153.882 175.859 153.845Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M184.325 154.437C184.424 154.437 184.523 154.437 184.634 154.437C184.634 154.461 184.634 154.474 184.634 154.498C184.535 154.511 184.424 154.523 184.325 154.535C184.325 154.498 184.325 154.474 184.325 154.437Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M177.686 152.933C177.636 153.155 177.451 153.007 177.34 153.044C177.389 152.822 177.575 152.983 177.686 152.933Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M180.573 153.007C180.623 152.97 180.685 152.921 180.722 152.884C180.746 153.032 180.746 153.032 180.573 153.007Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M179.339 152.835C179.191 152.798 179.129 152.773 179.055 152.748C179.105 152.736 179.166 152.711 179.216 152.699C179.228 152.711 179.253 152.748 179.339 152.835Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M178.858 154.19C178.858 154.116 178.858 154.042 178.858 153.956C178.883 153.956 178.895 153.956 178.92 153.956C178.92 154.03 178.92 154.104 178.92 154.19C178.895 154.19 178.87 154.19 178.858 154.19Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M180.425 154.622C180.351 154.634 180.277 154.634 180.203 154.646C180.203 154.622 180.191 154.597 180.191 154.572C180.265 154.56 180.339 154.548 180.413 154.523C180.425 154.548 180.425 154.585 180.425 154.622Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M183.943 154.511C183.881 154.511 183.819 154.511 183.757 154.511C183.757 154.486 183.757 154.474 183.745 154.449C183.807 154.437 183.869 154.424 183.93 154.412C183.943 154.449 183.943 154.474 183.943 154.511Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M180.45 154.203C180.512 154.203 180.573 154.203 180.635 154.203C180.635 154.227 180.635 154.24 180.647 154.264C180.586 154.277 180.524 154.289 180.462 154.301C180.45 154.277 180.45 154.24 180.45 154.203Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M184.634 154.165C184.572 154.165 184.51 154.165 184.449 154.165C184.449 154.153 184.449 154.129 184.436 154.116C184.498 154.104 184.56 154.092 184.621 154.067C184.621 154.104 184.634 154.141 184.634 154.165Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M175.834 151.208C175.773 151.208 175.711 151.208 175.649 151.208C175.649 151.196 175.649 151.171 175.637 151.159C175.699 151.146 175.76 151.134 175.822 151.109C175.834 151.134 175.834 151.171 175.834 151.208Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M174.452 149.741C174.452 149.815 174.452 149.889 174.452 149.976C174.428 149.976 174.415 149.976 174.391 149.976C174.391 149.902 174.391 149.828 174.391 149.741C174.415 149.741 174.44 149.741 174.452 149.741Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M176.192 152.613C176.266 152.6 176.34 152.6 176.415 152.588C176.415 152.613 176.427 152.637 176.427 152.662C176.353 152.674 176.279 152.687 176.205 152.711C176.205 152.687 176.192 152.65 176.192 152.613Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M180.413 154.523C180.438 154.486 180.462 154.461 180.487 154.424C180.499 154.437 180.512 154.449 180.524 154.461C180.487 154.486 180.462 154.511 180.425 154.535C180.425 154.535 180.425 154.523 180.413 154.523Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M176.55 154.523C176.587 154.548 176.612 154.572 176.649 154.597C176.637 154.609 176.624 154.622 176.612 154.634C176.587 154.597 176.563 154.572 176.538 154.535L176.55 154.523Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M180.647 152.169C180.684 152.169 180.721 152.169 180.758 152.169C180.758 152.181 180.758 152.194 180.758 152.206C180.721 152.206 180.684 152.206 180.647 152.206C180.647 152.194 180.647 152.181 180.647 152.169Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M182.893 152.933C182.893 152.97 182.893 153.007 182.893 153.044C182.881 153.044 182.869 153.044 182.856 153.044C182.856 153.007 182.856 152.97 182.856 152.933C182.869 152.933 182.881 152.933 182.893 152.933Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M179.093 152.243C179.093 152.206 179.093 152.169 179.093 152.132C179.105 152.132 179.117 152.132 179.13 152.132C179.13 152.169 179.13 152.206 179.13 152.243C179.117 152.243 179.105 152.243 179.093 152.243Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M174.872 151.565C174.872 151.528 174.872 151.491 174.872 151.454C174.884 151.454 174.896 151.454 174.909 151.454C174.909 151.491 174.909 151.528 174.909 151.565C174.896 151.565 174.884 151.565 174.872 151.565Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M175.859 153.956C175.822 153.931 175.798 153.907 175.76 153.882C175.798 153.87 175.822 153.858 175.859 153.845C175.859 153.882 175.859 153.919 175.859 153.956Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M175.97 153.956C175.946 153.993 175.921 154.018 175.896 154.055C175.884 154.018 175.871 153.993 175.859 153.956C175.896 153.956 175.933 153.956 175.97 153.956Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M180.438 153.944C180.475 153.968 180.499 153.993 180.536 154.018C180.524 154.03 180.512 154.042 180.499 154.055C180.475 154.018 180.45 153.993 180.425 153.956C180.425 153.969 180.425 153.956 180.438 153.944Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M183.585 153.956C183.585 153.993 183.585 154.03 183.585 154.067C183.572 154.067 183.56 154.067 183.548 154.067C183.548 154.03 183.548 153.993 183.548 153.956C183.56 153.956 183.572 153.956 183.585 153.956Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M174.786 148.139C174.786 148.176 174.786 148.213 174.786 148.25C174.773 148.25 174.761 148.25 174.749 148.25C174.749 148.213 174.749 148.176 174.749 148.139C174.761 148.139 174.773 148.139 174.786 148.139Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M176.427 153.278C176.464 153.315 176.501 153.352 176.538 153.389C176.501 153.352 176.464 153.315 176.427 153.278Z"
                                                                    fill="#010101" />
                                                                <path
                                                                    d="M50.6843 156.088C50.6843 156.014 50.6843 155.94 50.6843 155.866C50.6226 155.841 50.5609 155.817 50.5115 155.78C50.5115 155.731 50.5115 155.681 50.5115 155.632L50.5238 155.644C50.5485 155.62 50.5732 155.607 50.5979 155.583C50.5855 155.57 50.5732 155.558 50.5732 155.558C50.5485 155.583 50.5362 155.607 50.5115 155.632C50.4128 155.62 50.3387 155.866 50.2277 155.632C50.1042 155.706 50.0302 155.915 49.8204 155.78C49.8204 155.731 49.8204 155.657 49.8204 155.583C49.7587 155.558 49.7093 155.546 49.623 155.521C49.623 155.447 49.623 155.361 49.623 155.275C49.6847 155.238 49.7464 155.201 49.7957 155.164C49.7587 155.077 49.7217 155.003 49.6847 154.93C49.5612 154.966 49.4255 155.003 49.2651 155.04C49.3514 155.164 49.5366 155.238 49.4255 155.447C49.3021 155.447 49.1787 155.447 49.0676 155.447C49.0059 155.509 48.9689 155.546 48.9195 155.595C48.9689 155.632 49.0059 155.669 49.0676 155.718C49.1046 155.657 49.1417 155.57 49.1787 155.509C49.3638 155.669 49.4625 155.841 49.6847 155.841C49.734 155.841 49.7834 155.989 49.8327 156.051C49.734 156.199 49.6476 156.322 49.5736 156.445C49.3761 156.396 49.4378 156.31 49.5366 156.223C49.4995 156.15 49.4625 156.076 49.4255 155.989C49.3885 156.014 49.3638 156.039 49.3268 156.076C49.2527 155.977 49.191 155.891 49.1046 155.78C49.0182 155.891 48.9565 155.989 48.8578 156.113C48.7097 156.051 48.574 155.989 48.3518 155.891C48.2531 155.915 48.068 155.94 47.8705 155.977C47.7718 155.817 47.9693 155.78 48.0186 155.669C48.0186 155.558 48.0186 155.435 48.0186 155.299C48.0927 155.25 48.1667 155.201 48.2531 155.139C48.1914 154.991 48.1173 154.831 48.3025 154.671C48.2284 154.658 48.1914 154.646 48.1297 154.634C48.1297 154.474 48.1297 154.301 48.1297 154.104C48.2037 154.129 48.2531 154.141 48.3395 154.165C48.4135 154.141 48.5123 154.116 48.6233 154.079C48.7344 153.956 48.8455 153.82 48.9936 153.648C48.9812 153.623 48.9442 153.537 48.9072 153.438C49.0429 153.389 49.1787 153.34 49.3391 153.291C49.3514 153.377 49.3638 153.451 49.3885 153.537C49.4255 153.549 49.4749 153.574 49.5242 153.586C49.6229 153.833 49.4625 154.055 49.4255 154.276C49.3638 154.276 49.3144 154.276 49.2651 154.276L49.2774 154.264C49.2527 154.239 49.2404 154.215 49.2157 154.19C49.2034 154.202 49.191 154.215 49.191 154.215C49.2157 154.239 49.2404 154.252 49.2651 154.276C49.2897 154.449 49.4502 154.301 49.5366 154.437C49.5612 154.523 49.6106 154.658 49.66 154.806C49.7217 154.745 49.7834 154.695 49.8698 154.609C49.9315 154.671 49.9932 154.732 50.0672 154.806C50.0672 154.695 50.0425 154.584 50.0796 154.498C50.1166 154.424 50.1783 154.363 50.1536 154.264L50.166 154.276C50.1906 154.252 50.2153 154.239 50.24 154.215C50.2277 154.202 50.2153 154.19 50.2153 154.19C50.1906 154.215 50.1783 154.239 50.1536 154.264C49.9932 154.313 49.8698 154.178 49.6847 154.153C49.734 153.956 49.771 153.771 49.8081 153.562C49.8821 153.562 49.9438 153.562 50.0302 153.562C50.0425 153.599 50.0549 153.648 50.0796 153.722C50.1536 153.722 50.24 153.722 50.3264 153.722C50.3017 153.808 50.2647 153.907 50.2277 154.03C50.277 154.055 50.3387 154.079 50.4251 154.104C50.4251 154.202 50.4251 154.313 50.4251 154.461C50.5115 154.412 50.5609 154.387 50.6102 154.375C50.6473 154.363 50.6843 154.35 50.7707 154.313C50.746 154.424 50.7336 154.486 50.7213 154.584C50.8077 154.597 50.9188 154.609 51.0668 154.634C51.0175 154.745 50.9805 154.843 50.9311 154.942C50.7953 155.016 50.6966 154.954 50.5609 154.708C50.4868 154.708 50.4251 154.708 50.3387 154.708C50.3387 154.757 50.314 154.819 50.3387 154.831C50.4992 154.967 50.6719 155.09 50.82 155.201C50.8817 155.176 50.9434 155.151 50.9928 155.127C51.1162 155.336 50.9558 155.435 50.8077 155.595C50.9928 155.546 51.1039 155.521 51.2149 155.484C51.2396 155.509 51.2766 155.546 51.3013 155.57C51.1903 155.768 50.9928 155.928 51.0298 156.199C51.0422 156.26 50.9434 156.322 50.8817 156.408C50.82 156.359 50.7707 156.334 50.7213 156.297C50.6966 156.322 50.6719 156.347 50.6102 156.396C50.5609 156.273 50.5238 156.174 50.4621 156.014C50.5609 156.088 50.6226 156.088 50.6843 156.088L50.6719 156.1C50.6966 156.125 50.709 156.15 50.7336 156.174C50.746 156.162 50.7583 156.15 50.7583 156.15C50.7336 156.125 50.709 156.1 50.6843 156.088ZM48.9565 154.4C48.8578 154.437 48.7344 154.474 48.5986 154.523C48.7221 154.572 48.8208 154.621 48.9565 154.683C48.9565 154.56 48.9565 154.474 48.9565 154.387L48.9689 154.4C48.9936 154.375 49.0182 154.363 49.0429 154.338C49.0306 154.326 49.0182 154.313 49.0182 154.313C49.0059 154.338 48.9936 154.363 48.9565 154.4ZM48.3518 155.509C48.4629 155.558 48.5616 155.607 48.648 155.657C48.7221 155.496 48.7961 155.361 48.8578 155.213C48.8331 155.188 48.8208 155.176 48.7961 155.151C48.8578 155.09 48.9072 155.028 48.9565 154.979C48.9195 154.905 48.8825 154.831 48.8455 154.745C48.7221 154.782 48.5863 154.819 48.4752 154.856C48.4382 155.065 48.3888 155.275 48.3518 155.509ZM50.0302 155.188C50.1042 155.312 50.1413 155.385 50.1906 155.472C50.2523 155.385 50.2894 155.312 50.3511 155.213C50.24 155.201 50.1536 155.201 50.0302 155.188ZM48.7097 154.141C48.7097 154.153 48.7097 154.165 48.7097 154.19C48.7714 154.19 48.8331 154.19 48.8825 154.19C48.8825 154.178 48.8825 154.165 48.8825 154.141C48.8331 154.141 48.7714 154.141 48.7097 154.141ZM50.0796 155.016C50.0919 155.016 50.1042 155.016 50.1042 155.016C50.1042 154.991 50.1042 154.954 50.1042 154.93C50.0919 154.93 50.0796 154.93 50.0796 154.93C50.0796 154.954 50.0796 154.991 50.0796 155.016ZM48.3765 154.658C48.3888 154.658 48.4012 154.658 48.4012 154.658C48.4012 154.634 48.4012 154.597 48.4012 154.572C48.3888 154.572 48.3765 154.572 48.3765 154.572C48.3765 154.597 48.3765 154.634 48.3765 154.658ZM49.2404 153.919C49.2404 153.907 49.2404 153.894 49.2404 153.894C49.2157 153.894 49.1787 153.894 49.154 153.894C49.154 153.907 49.154 153.919 49.154 153.919C49.191 153.919 49.2157 153.919 49.2404 153.919Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M46.6488 154.215C46.7229 154.239 46.8093 154.252 46.8833 154.276C46.9203 154.165 46.9574 154.042 47.0067 153.894C46.9574 153.882 46.908 153.857 46.834 153.845C46.834 153.746 46.834 153.648 46.834 153.549C47.0314 153.488 47.0561 153.217 47.2782 153.143C47.3153 153.167 47.3646 153.204 47.4016 153.241C47.4387 153.217 47.4633 153.192 47.488 153.167C47.5374 153.217 47.5744 153.253 47.6114 153.29C47.5251 153.34 47.414 153.377 47.377 153.451C47.3276 153.549 47.2782 153.611 47.1548 153.636C47.1672 153.709 47.1918 153.796 47.2042 153.87C47.2165 153.931 47.2042 153.993 47.2042 154.104C47.3399 153.981 47.451 153.894 47.5621 153.796C47.6238 153.796 47.6978 153.796 47.7719 153.796C47.8212 153.993 47.7472 154.116 47.6114 154.227C47.5991 154.202 47.5868 154.178 47.5868 154.153C47.5621 154.178 47.5497 154.202 47.5251 154.227C47.5004 154.239 47.4757 154.252 47.451 154.252C47.4757 154.276 47.5004 154.289 47.5251 154.313C47.5374 154.338 47.5497 154.363 47.5497 154.387C47.5744 154.363 47.5868 154.338 47.6114 154.313C47.6608 154.326 47.7719 154.338 47.7719 154.338C47.7719 154.474 47.9076 154.486 48.0064 154.535C47.957 154.609 47.9323 154.658 47.8829 154.732C47.9446 154.769 48.0064 154.819 48.1298 154.905C47.9817 154.929 47.8953 154.942 47.8089 154.954C47.8089 155.016 47.8089 155.09 47.8089 155.188C47.6731 155.188 47.5621 155.188 47.4387 155.188C47.4016 154.966 47.6114 154.991 47.6978 154.905C47.6978 154.856 47.6978 154.819 47.6978 154.769L47.7102 154.782C47.7348 154.757 47.7595 154.745 47.7842 154.72C47.7719 154.708 47.7595 154.695 47.7595 154.695C47.7348 154.72 47.7225 154.745 47.6978 154.769C47.6485 154.745 47.5868 154.708 47.5127 154.671C47.4633 154.708 47.4263 154.732 47.377 154.769C47.2659 154.732 47.1425 154.695 46.9944 154.646C46.982 154.597 46.9697 154.51 46.9574 154.363C46.908 154.474 46.8833 154.523 46.8586 154.597C46.7476 154.584 46.6242 154.56 46.439 154.535C46.402 154.474 46.328 154.35 46.2292 154.178C46.328 154.165 46.3897 154.153 46.4514 154.141C46.4761 154.165 46.5131 154.202 46.5378 154.227C46.5501 154.289 46.5625 154.338 46.5625 154.4C46.5871 154.4 46.5995 154.4 46.6242 154.387C46.6488 154.326 46.6488 154.264 46.6488 154.215ZM47.5497 154.535C47.5497 154.523 47.5497 154.51 47.5497 154.51C47.5251 154.51 47.488 154.51 47.4633 154.51C47.4633 154.523 47.4633 154.535 47.4633 154.535C47.488 154.535 47.5127 154.535 47.5497 154.535Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M47.2784 152.514C47.2167 152.453 47.1549 152.379 47.0562 152.268C47.0192 152.428 47.0069 152.514 46.9822 152.601C46.8341 152.625 46.7971 152.576 46.7354 152.317C47.0069 152.095 47.2907 151.886 47.6979 151.997C47.6979 151.91 47.6979 151.836 47.6979 151.738C47.8214 151.726 47.9324 151.713 48.0805 151.701C48.0435 151.763 48.0188 151.787 48.0065 151.812C47.9941 151.861 47.9818 151.923 47.9695 151.972C47.9201 151.972 47.8584 151.972 47.7843 151.972C47.8214 152.046 47.8584 152.095 47.8954 152.169C47.772 152.268 47.6486 152.354 47.4758 152.49C47.6239 152.539 47.735 152.588 47.8831 152.65C47.846 152.81 47.7967 152.97 47.735 153.18C47.6239 153.069 47.5375 152.995 47.4264 152.884C47.4264 152.847 47.4141 152.785 47.4018 152.699C47.3771 152.711 47.3401 152.711 47.3401 152.724C47.266 152.835 47.2043 152.933 47.1303 153.057C47.0686 153.007 47.0315 152.97 47.0069 152.933C47.0315 152.798 47.0686 152.662 47.0932 152.502C47.1673 152.514 47.229 152.514 47.2784 152.514L47.266 152.527C47.2907 152.551 47.303 152.576 47.3277 152.601C47.3401 152.588 47.3524 152.576 47.3524 152.576C47.3401 152.551 47.3154 152.527 47.2784 152.514Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M51.2151 155.546C51.2151 155.435 51.1781 155.312 51.3015 155.225C51.2151 155.176 51.1288 155.127 51.03 155.065C51.1164 154.954 51.2028 154.856 51.3015 154.732C51.3015 154.695 51.3139 154.597 51.3139 154.486C51.4003 154.474 51.462 154.474 51.536 154.461C51.5854 154.363 51.6347 154.264 51.7211 154.079C51.5977 154.153 51.5484 154.178 51.499 154.203C51.3509 154.178 51.3386 154.104 51.3756 153.956C51.4003 153.857 51.3262 153.747 51.3015 153.66C51.4003 153.512 51.499 153.451 51.6471 153.5C51.7458 153.673 51.6224 153.821 51.5607 154.03C51.6964 153.993 51.7705 153.968 51.9062 153.931C51.9309 153.956 51.9803 154.005 52.042 154.055C52.0173 154.079 51.9926 154.116 51.9556 154.166C51.9926 154.24 52.0297 154.326 52.0667 154.412C51.9926 154.449 51.9309 154.474 51.8692 154.498C51.8692 154.548 51.8692 154.597 51.8692 154.634C51.7335 154.609 51.6594 154.683 51.5977 154.794C51.5484 154.905 51.4866 155.016 51.4249 155.151C51.4743 155.188 51.536 155.25 51.5977 155.287C51.6101 155.496 51.5484 155.62 51.3262 155.607C51.2645 155.607 51.2398 155.583 51.2151 155.546Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M46.1181 152.071C46.1798 152.034 46.2415 152.009 46.3402 151.96C46.3649 152.021 46.3896 152.095 46.4143 152.182C46.3896 152.194 46.3032 152.255 46.1922 152.317C46.3402 152.366 46.4883 152.416 46.5994 152.453C46.6611 152.588 46.7228 152.711 46.7845 152.835C46.7722 152.921 46.7475 153.02 46.7228 153.13C46.8339 153.143 46.9203 153.155 47.0067 153.18C46.7969 153.389 46.5994 153.586 46.402 153.784C46.3156 153.784 46.2292 153.784 46.1428 153.784C46.1058 153.71 46.0687 153.636 46.0194 153.549C46.0564 153.439 46.2662 153.611 46.2785 153.426C46.3279 153.426 46.3649 153.426 46.4266 153.426C46.4637 153.241 46.4883 153.056 46.5254 152.822C46.476 152.785 46.3773 152.711 46.2909 152.65C46.1798 152.613 46.0441 152.576 45.9207 152.539C45.9207 152.342 46.0687 152.231 46.1181 152.071Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M47.2783 151.454C47.2043 151.405 47.1426 151.356 47.0562 151.307C46.9821 151.331 46.8957 151.356 46.7847 151.393C46.7353 151.307 46.6983 151.233 46.686 151.196C46.5132 151.183 46.4144 151.183 46.2664 151.171C46.3157 151.023 46.3527 150.888 46.3774 150.814C46.5502 150.678 46.686 150.579 46.8217 150.469C46.8464 150.444 46.8834 150.407 46.9081 150.382C47.0809 150.444 47.266 150.506 47.4388 150.555C47.4141 150.641 47.377 150.727 47.3524 150.826C47.2783 150.826 47.2043 150.826 47.1179 150.826C47.1055 150.777 47.0809 150.727 47.0562 150.666C46.9821 150.703 46.8957 150.74 46.8217 150.777C46.8587 150.851 46.8957 150.925 46.9328 150.998C46.9821 150.974 47.0438 150.949 47.1302 150.9C47.1796 151.097 47.3153 151.245 47.2783 151.454Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M50.9435 154.042C51.0052 154.092 51.0669 154.129 51.1533 154.203C51.0916 154.277 51.0422 154.326 51.0052 154.375C50.9929 154.375 50.9682 154.387 50.9682 154.387C50.8324 154.19 50.6103 154.129 50.3635 154.018C50.4745 153.944 50.5486 153.882 50.635 153.821C50.635 153.821 50.6226 153.784 50.6103 153.784C50.5116 153.784 50.4005 153.784 50.3018 153.784C50.3018 153.71 50.3018 153.636 50.3018 153.549C50.4992 153.414 50.672 153.71 50.8694 153.599C50.9558 153.537 51.0422 153.463 51.178 153.377C51.1903 153.5 51.1903 153.574 51.2027 153.66C51.1163 153.71 51.0299 153.771 50.9312 153.833C50.9435 153.882 50.9435 153.956 50.9435 154.042L50.9312 154.03C50.9065 154.055 50.8818 154.067 50.8571 154.092C50.8694 154.104 50.8818 154.116 50.8818 154.116C50.9065 154.092 50.9312 154.067 50.9435 154.042Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M46.1183 152.071C46.0196 152.071 45.9085 152.071 45.7974 152.071C45.7727 152.009 45.7481 151.947 45.711 151.898C45.674 151.923 45.6493 151.96 45.6123 151.984C45.6123 151.775 45.6123 151.775 45.9579 151.664C45.8961 151.652 45.8591 151.639 45.8098 151.639C45.7727 151.627 45.7234 151.627 45.6493 151.627C45.674 151.553 45.6987 151.491 45.7234 151.43C45.6987 151.356 45.674 151.257 45.637 151.159C45.7727 151.097 45.8962 151.048 46.0566 150.999C46.106 151.072 46.143 151.122 46.2047 151.208C46.1553 151.27 46.1059 151.344 46.0319 151.43C46.1059 151.504 46.1553 151.602 46.0196 151.689C46.18 151.775 46.0936 151.935 46.1183 152.071ZM45.9085 151.27C45.8961 151.27 45.8838 151.27 45.8838 151.27C45.8838 151.294 45.8838 151.331 45.8838 151.356C45.8961 151.356 45.9085 151.356 45.9085 151.356C45.9085 151.331 45.9085 151.294 45.9085 151.27Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M45.5876 150C45.6616 150.025 45.7357 150.062 45.8097 150.086C45.8468 150.062 45.8838 150.025 45.9578 149.976C46.0195 150.086 46.0689 150.185 46.1183 150.271C45.8714 150.715 45.8221 150.789 45.5012 151.035C45.5382 151.097 45.5629 151.146 45.6123 151.233C45.5382 151.245 45.4765 151.257 45.4395 151.27C45.4148 151.196 45.3901 151.146 45.3655 151.097C45.2914 151.085 45.2297 151.085 45.1433 151.072C45.1433 150.998 45.1433 150.937 45.1433 150.838C45.2544 150.801 45.3778 150.752 45.5999 150.666C45.6616 150.579 45.7604 150.419 45.8714 150.271C45.748 150.185 45.6493 150.111 45.5506 150.037C45.5753 150.037 45.5752 150.025 45.5876 150Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M46.1675 151.75C46.2415 151.578 46.2909 151.467 46.3156 151.393C46.4266 151.405 46.513 151.405 46.6735 151.417C46.7352 151.467 46.8586 151.565 46.9943 151.676C46.9943 151.689 46.9696 151.713 46.945 151.738C46.9696 151.775 46.9943 151.824 47.0437 151.898C46.9696 151.96 46.8833 152.021 46.8215 152.083C46.5747 151.972 46.3896 151.873 46.1675 151.75Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M48.1791 153.18C48.3396 153.217 48.4753 153.241 48.5987 153.266C48.7591 153.365 48.6974 153.512 48.7098 153.66C48.5987 153.673 48.4876 153.685 48.3396 153.697C48.3766 153.747 48.4013 153.784 48.4506 153.845C48.4013 153.907 48.3396 153.981 48.2408 154.129C48.1668 154.03 48.1174 153.956 48.0681 153.882C48.0927 153.845 48.1051 153.808 48.1421 153.734C48.1298 153.71 48.1051 153.648 48.0804 153.599C48.0557 153.549 48.031 153.5 48.0063 153.463C48.0681 153.352 48.1421 153.241 48.1791 153.18ZM48.3519 153.438C48.3519 153.451 48.3519 153.463 48.3519 153.488C48.4136 153.488 48.4753 153.488 48.5247 153.488C48.5247 153.475 48.5247 153.463 48.5247 153.438C48.4753 153.438 48.4136 153.438 48.3519 153.438Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M47.6363 150.998C47.772 150.937 47.8707 151.072 48.0188 151.035C48.1176 151.011 48.2533 151.085 48.3644 151.085C48.5125 151.097 48.6482 151.085 48.8087 151.085C48.784 151.307 48.6606 151.319 48.5125 151.368C48.4137 151.405 48.2903 151.319 48.2163 151.442C48.1546 151.381 48.0929 151.319 48.0312 151.257C47.9201 151.294 47.8214 151.331 47.735 151.356C47.5992 151.294 47.5252 151.22 47.5499 151.085C47.5746 151.06 47.6116 151.035 47.6363 150.998Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M51.8321 155.928C51.8815 155.891 51.9309 155.854 52.0049 155.804C52.0543 155.915 52.0913 156.014 52.153 156.137C52.3258 156.199 52.5356 156.285 52.7577 156.371C52.7083 156.421 52.696 156.433 52.696 156.433C52.4739 156.421 52.2394 156.334 52.0419 156.396C51.8198 156.47 51.6223 156.408 51.3508 156.47C51.4249 156.334 51.4742 156.248 51.5113 156.174C51.573 156.223 51.6223 156.248 51.6594 156.285C51.7581 156.199 51.8321 156.113 51.9185 156.039C51.8938 156.002 51.8568 155.965 51.8321 155.928Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M53.7821 155.731C53.8068 155.805 53.8438 155.879 53.8438 155.903C53.8068 155.989 53.7821 156.051 53.7451 156.137C53.6587 156.063 53.6093 156.039 53.5723 156.002C53.5476 156.026 53.5353 156.039 53.4859 156.088C53.3748 155.953 53.2638 155.817 53.1404 155.657C53.0786 155.644 53.0046 155.632 52.9182 155.62C52.9182 155.484 52.9182 155.349 52.9182 155.213C53.0293 155.213 53.128 155.213 53.2638 155.213C53.2514 155.275 53.2267 155.349 53.2021 155.447C53.3131 155.546 53.4489 155.669 53.6217 155.817C53.6587 155.805 53.7327 155.768 53.7821 155.731Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M49.5119 152.97C49.4749 152.982 49.4378 153.007 49.3885 153.032C49.2034 153.019 49.2527 152.847 49.2527 152.748C49.154 152.748 49.08 152.748 48.9936 152.748C48.9936 152.798 48.9936 152.859 48.9936 152.945C48.8578 152.945 48.7467 152.945 48.574 152.945C48.7097 152.748 48.8208 152.588 48.9442 152.416C49.0059 152.452 49.0676 152.489 49.117 152.514C49.1663 152.489 49.2034 152.452 49.2404 152.428C49.4378 152.477 49.4132 152.736 49.6106 152.748C49.6106 152.748 49.6106 152.835 49.6106 152.871C49.5736 152.908 49.5489 152.933 49.5119 152.97Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M45.427 149.766C45.3159 149.717 45.2296 149.667 45.1185 149.618C45.1432 149.557 45.1802 149.495 45.2049 149.433C45.1925 149.409 45.1555 149.384 45.1185 149.347C45.0198 149.359 44.921 149.396 44.8223 149.396C44.7729 149.396 44.7359 149.322 44.6619 149.261C44.7236 149.236 44.7729 149.212 44.8223 149.199C44.81 149.187 44.7976 149.162 44.7853 149.15C45.0321 149.15 45.2789 149.15 45.5628 149.15C45.5628 149.224 45.5751 149.298 45.5751 149.384C45.4764 149.396 45.4147 149.396 45.3406 149.409C45.3776 149.52 45.4023 149.631 45.427 149.766Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M55.0531 155.903C55.0531 156.026 55.0531 156.137 55.0531 156.26C55.0161 156.31 54.9791 156.359 54.905 156.433C54.6706 156.482 54.4731 156.384 54.251 156.125C54.4484 156.1 54.5595 156.076 54.6706 156.063C54.6829 156.014 54.6952 155.977 54.7076 155.903C54.831 155.903 54.9421 155.903 55.0531 155.903Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M50.6474 152.761C50.8449 152.859 51.0053 152.933 51.1904 153.02C51.2151 153.007 51.2891 152.983 51.3508 152.958C51.4372 153.13 51.3755 153.229 51.2398 153.328C51.2274 153.266 51.2151 153.229 51.1904 153.155C51.0053 153.155 50.8202 153.155 50.6598 153.155C50.5857 153.093 50.524 153.044 50.45 152.983C50.524 152.909 50.5734 152.847 50.6474 152.761Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M54.6705 154.584C54.7198 154.634 54.7569 154.683 54.7816 154.708C54.7816 154.856 54.6705 154.905 54.4237 154.88C54.4483 154.843 54.4854 154.819 54.5347 154.757C54.436 154.745 54.362 154.745 54.3003 154.732C54.2385 154.794 54.1768 154.856 54.1151 154.917C54.0781 154.868 54.0287 154.806 53.967 154.732C54.0041 154.683 54.0411 154.634 54.0905 154.56C54.2756 154.584 54.4607 154.584 54.6705 154.584Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M50.129 156.433C50.1661 156.384 50.1908 156.347 50.2401 156.298C50.0303 156.273 49.8082 156.248 49.8822 155.916C49.9686 155.928 50.055 155.952 50.1414 155.965C50.2278 155.977 50.3018 156.002 50.3882 156.026C50.3882 156.15 50.3882 156.285 50.3882 156.433C50.3142 156.433 50.2278 156.433 50.129 156.433Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M52.1406 155.422C52.2023 155.361 52.264 155.275 52.3381 155.201C52.3998 155.201 52.4615 155.201 52.5355 155.201C52.5972 155.312 52.6713 155.435 52.77 155.595C52.7083 155.644 52.6466 155.694 52.5726 155.755C52.4121 155.632 52.2764 155.521 52.1406 155.422Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M49.5984 152.872C49.6478 152.872 49.6848 152.872 49.7588 152.872C49.7712 153.007 49.7835 153.143 49.7835 153.303C49.8205 153.315 49.8699 153.328 49.8946 153.315C49.9316 153.303 49.9563 153.266 50.018 153.204C50.0303 153.303 50.0303 153.389 50.0427 153.512C49.9193 153.463 49.8452 153.438 49.7465 153.402C49.7095 153.426 49.6724 153.463 49.6724 153.463C49.5984 153.426 49.5244 153.401 49.4626 153.365C49.5244 153.266 49.5614 153.204 49.5861 153.143C49.549 153.081 49.5244 153.019 49.4873 152.958C49.549 152.933 49.5737 152.909 49.5984 152.872Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M51.8197 153.291C51.7456 153.217 51.6839 153.155 51.6099 153.093C51.795 152.822 52.0418 152.859 52.2763 152.761C52.2763 152.884 52.2763 152.958 52.2763 153.044C52.2022 153.057 52.1158 153.057 52.0418 153.106C51.9678 153.118 51.906 153.204 51.8197 153.291Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M46.3157 153.463C46.1553 153.389 46.0689 153.352 45.9702 153.303C45.9455 153.217 45.9085 153.106 45.8591 152.945C45.9579 152.982 46.0319 153.019 46.1183 153.056C46.18 153.032 46.2664 152.995 46.4145 152.933C46.3775 153.13 46.3528 153.266 46.3157 153.463Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M44.8841 146.685C45.0075 146.858 45.0815 147.018 45.0198 147.24C44.9211 147.24 44.8223 147.24 44.7113 147.24C44.6372 147.166 44.6743 146.993 44.8841 146.685Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M46.834 150.468C46.7599 150.468 46.6859 150.468 46.6118 150.468C46.5625 150.345 46.5254 150.21 46.4761 150.074C46.5254 150.025 46.5871 149.963 46.6612 149.902C46.6982 149.963 46.7229 149.988 46.7476 150.013C46.7723 150.062 46.7969 150.111 46.834 150.148C46.8586 150.185 46.908 150.21 46.9203 150.247C46.9327 150.284 46.9203 150.333 46.9203 150.382C46.8957 150.407 46.8586 150.432 46.834 150.468Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M56.1021 156.174C56.0404 156.125 55.991 156.1 55.9293 156.051C55.8799 156.137 55.8429 156.199 55.8059 156.26C55.6578 156.26 55.6208 156.199 55.5837 155.903C55.6948 155.915 55.7935 155.928 55.917 155.94C55.991 155.928 56.0897 155.915 56.2625 155.878C56.1761 156.026 56.1391 156.1 56.1021 156.174Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M47.8213 149.618C47.7719 149.667 47.7349 149.704 47.6732 149.766C47.5992 149.729 47.5128 149.692 47.4017 149.643C47.377 149.593 47.3277 149.507 47.303 149.446C47.34 149.396 47.377 149.347 47.4264 149.285C47.5621 149.396 47.7966 149.384 47.8213 149.618Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M45.7849 148.004C45.6738 148.053 45.6121 148.09 45.5257 148.127C45.4887 148.09 45.4394 148.041 45.3776 147.992C45.4147 147.942 45.4394 147.893 45.4764 147.831C45.427 147.807 45.3776 147.782 45.2913 147.745C45.3283 147.671 45.3653 147.61 45.4147 147.536C45.4517 147.548 45.4764 147.548 45.4887 147.56C45.5874 147.696 45.6738 147.831 45.7849 148.004Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M46.8094 155.213C46.76 155.201 46.7107 155.176 46.6243 155.151C46.6736 155.065 46.7107 155.004 46.7724 154.905C46.8958 155.078 47.0068 155.225 47.1303 155.398C47.0685 155.472 47.0192 155.534 46.9451 155.62C46.8217 155.472 46.76 155.386 46.8094 155.213Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M47.562 155.312C47.5126 155.459 47.4756 155.595 47.4262 155.73C47.3645 155.73 47.2905 155.73 47.2041 155.73C47.2041 155.595 47.2041 155.472 47.2041 155.312C47.3152 155.312 47.4262 155.312 47.562 155.312Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M54.7198 155.349C54.6334 155.669 54.4236 155.706 54.2015 155.731C54.1521 155.484 54.1521 155.484 54.3249 155.46C54.436 155.447 54.547 155.398 54.7198 155.349Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M48.537 152.822C48.3272 152.773 48.1668 152.724 47.9817 152.674C48.1298 152.576 48.2409 152.489 48.3889 152.391C48.426 152.526 48.463 152.637 48.537 152.822Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M47.5251 151.344C47.5251 151.479 47.5251 151.578 47.5251 151.701C47.4141 151.701 47.303 151.701 47.1672 151.701C47.2289 151.491 47.3277 151.393 47.5251 151.344Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M46.5379 147.388C46.3898 147.462 46.291 147.499 46.18 147.56C46.1183 147.425 46.0689 147.314 46.0195 147.203C46.0689 147.178 46.1059 147.154 46.1183 147.166C46.2417 147.227 46.3651 147.301 46.5379 147.388Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M49.0061 150.58C48.8827 150.518 48.7963 150.469 48.6482 150.382C48.7963 150.296 48.895 150.234 49.0061 150.173C49.0554 150.271 49.1048 150.345 49.1542 150.419C49.1048 150.469 49.0678 150.518 49.0061 150.58Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M47.9941 151.984C48.1422 151.997 48.315 151.923 48.4384 152.12C48.3644 152.169 48.2903 152.231 48.2039 152.28C48.1793 152.342 48.0435 152.169 47.9941 151.984Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M52.4739 154.326C52.5603 154.4 52.6343 154.474 52.7207 154.547C52.7207 154.584 52.7207 154.646 52.7207 154.732C52.6467 154.732 52.5603 154.745 52.4739 154.745C52.4739 154.597 52.4739 154.461 52.4739 154.326Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M45.0075 146.094C45.0446 146.168 45.0816 146.242 45.131 146.34C45.0446 146.377 44.9458 146.426 44.8471 146.476C44.8101 146.426 44.7854 146.402 44.7854 146.377C44.7977 146.205 44.8101 146.205 45.0075 146.094Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M45.9826 149.643C45.9085 149.729 45.8468 149.803 45.7851 149.877C45.6 149.778 45.526 149.667 45.6247 149.47C45.7358 149.52 45.8468 149.569 45.9826 149.643Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M55.2629 154.942C55.2136 155.077 55.1765 155.176 55.1272 155.336C55.0408 155.213 54.9791 155.127 54.905 155.028C54.9421 154.93 55.0531 154.917 55.2629 154.942Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M44.9581 147.831C44.9087 147.881 44.8717 147.918 44.8223 147.967C44.7236 147.856 44.6125 147.745 44.5015 147.609C44.5138 147.585 44.5261 147.548 44.5508 147.499C44.7483 147.572 44.8223 147.733 44.9581 147.831Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M48.3273 156.433C48.1668 156.433 48.0928 156.433 48.0311 156.433C47.9447 156.285 48.0064 156.187 48.1422 156.076C48.2039 156.187 48.2532 156.285 48.3273 156.433Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M53.1032 152.761C53.1156 152.773 53.1526 152.822 53.2143 152.884C53.1526 152.958 53.1032 153.007 53.0292 153.093C52.9675 153.044 52.9058 153.007 52.8811 152.983C52.9428 152.896 53.0169 152.822 53.1032 152.761Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M55.7564 155.188C55.6701 155.188 55.6083 155.188 55.5343 155.188C55.4849 155.139 55.4479 155.102 55.4109 155.065C55.4479 155.028 55.4973 154.979 55.5343 154.942C55.596 154.942 55.6701 154.942 55.7564 154.942C55.7564 155.016 55.7564 155.077 55.7564 155.188Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M53.7942 156.224C53.8929 156.137 53.9793 156.051 54.0534 155.99C54.1027 156.002 54.1151 156.014 54.1151 156.014C54.1274 156.088 54.1397 156.15 54.1521 156.211C54.1027 156.261 54.0534 156.31 54.0287 156.335C53.967 156.31 53.8929 156.273 53.7942 156.224Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M46.0936 152.847C45.9701 152.859 45.9331 152.872 45.8961 152.872C45.8221 152.736 45.748 152.6 45.6616 152.428C45.9825 152.416 45.9208 152.699 46.0936 152.847Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M53.4242 156.421C53.1774 156.421 53.0169 156.421 52.8318 156.421C52.8195 156.384 52.8195 156.347 52.8071 156.31C52.9429 156.137 53.1033 156.396 53.2391 156.273C53.2514 156.285 53.3255 156.347 53.4242 156.421Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M49.7218 152.588C49.7959 152.625 49.8576 152.65 49.9316 152.674C49.944 152.662 49.981 152.637 50.018 152.6C50.055 152.65 50.0797 152.687 50.1414 152.761C50.1167 152.773 50.055 152.798 49.981 152.835C49.9193 152.81 49.8082 152.785 49.6848 152.748C49.6972 152.699 49.6972 152.662 49.7218 152.588Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M55.5837 155.422C55.6331 155.373 55.6701 155.336 55.7195 155.287C55.7812 155.287 55.8676 155.299 55.991 155.312C55.9046 155.422 55.8553 155.496 55.7812 155.595C55.7072 155.521 55.6454 155.472 55.5837 155.422Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M47.4634 150.555C47.5004 150.456 47.5374 150.37 47.5744 150.247C47.6855 150.296 47.7472 150.333 47.8213 150.37C47.7719 150.579 47.6115 150.567 47.4634 150.555Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M46.0442 145.835C45.9084 145.823 45.8344 145.823 45.6863 145.81C45.7974 145.687 45.8714 145.613 45.9825 145.49C46.0072 145.626 46.0195 145.712 46.0442 145.835Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M51.2149 151.257C51.2026 151.393 51.2026 151.467 51.1903 151.615C51.0668 151.504 50.9928 151.43 50.8694 151.319C51.0175 151.282 51.0915 151.27 51.2149 151.257Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M51.2891 155.854C51.3384 155.842 51.4125 155.805 51.4742 155.792C51.4742 155.792 51.5359 155.829 51.6223 155.879C51.5482 155.965 51.4989 156.014 51.4248 156.1C51.3878 156.039 51.3508 155.977 51.2891 155.854Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M47.5374 153.365C47.6731 153.438 47.7472 153.488 47.8459 153.537C47.7595 153.599 47.6978 153.648 47.5867 153.734C47.562 153.599 47.5497 153.512 47.5374 153.365Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M53.8189 155.731C53.7943 155.681 53.7696 155.657 53.7202 155.583C53.7819 155.533 53.8436 155.484 53.9547 155.41C53.967 155.533 53.9794 155.62 53.9794 155.718C53.9177 155.718 53.856 155.731 53.8189 155.731Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M47.3647 150.826C47.5005 150.813 47.5992 150.863 47.6363 150.998C47.6116 151.023 47.5745 151.06 47.5499 151.085C47.5005 151.085 47.4388 151.085 47.3771 151.085C47.3647 150.986 47.3647 150.9 47.3647 150.826Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M49.8574 152.97C49.9685 152.97 50.0425 152.97 50.1166 152.97C50.1289 153.02 50.1289 153.056 50.1413 153.13C50.0549 153.143 49.9685 153.143 49.8821 153.155C49.8821 153.093 49.8698 153.056 49.8574 152.97Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M49.4132 151.972C49.3639 151.972 49.3145 151.972 49.2651 151.972C49.2651 151.886 49.2651 151.812 49.2651 151.713C49.3145 151.713 49.3639 151.713 49.4132 151.713C49.4132 151.812 49.4132 151.886 49.4132 151.972Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M48.7222 156.433C48.8209 156.298 48.8826 156.236 48.932 156.174C48.969 156.261 49.0184 156.347 49.0554 156.433C48.969 156.433 48.8949 156.433 48.7222 156.433Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M55.9045 154.498C55.8305 154.461 55.7441 154.412 55.6577 154.363C55.7194 154.313 55.7688 154.276 55.8305 154.227C55.8675 154.289 55.9292 154.35 55.9786 154.424C55.9416 154.437 55.9292 154.474 55.9045 154.498Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M51.8816 155.903C51.7952 155.903 51.7581 155.903 51.6841 155.903C51.6718 155.817 51.6718 155.731 51.6594 155.644C51.6841 155.644 51.6964 155.632 51.7211 155.632C51.7705 155.718 51.8199 155.805 51.8816 155.903Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M54.9668 155.768C55.0038 155.731 55.0532 155.681 55.0902 155.644C55.1272 155.681 55.1643 155.718 55.2136 155.755C55.0779 155.903 55.0779 155.903 54.9668 155.768Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M47.4387 156.15C47.4634 156.076 47.4881 156.026 47.5251 155.952C47.6115 156.026 47.6732 156.076 47.7719 156.15C47.6362 156.15 47.5498 156.15 47.4387 156.15Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M52.9674 153.808C52.8687 153.734 52.807 153.685 52.6836 153.599C52.8193 153.599 52.9057 153.599 53.0045 153.599C52.9921 153.673 52.9798 153.722 52.9674 153.808Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M51.1534 152.65C51.1287 152.563 51.1287 152.514 51.104 152.44C51.2027 152.44 51.2891 152.44 51.4249 152.44C51.3261 152.526 51.2521 152.576 51.1534 152.65Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M44.6373 147.141C44.5509 147.153 44.5015 147.166 44.4275 147.178C44.4275 147.08 44.4275 146.993 44.4275 146.858C44.5262 146.969 44.5756 147.043 44.6373 147.141Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M48.2284 149.717C48.2408 149.803 48.2531 149.852 48.2654 149.926C48.1667 149.926 48.0803 149.926 47.9446 149.926C48.068 149.828 48.1297 149.778 48.2284 149.717Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M45.5999 148.669C45.5135 148.719 45.4395 148.755 45.3531 148.805C45.3284 148.731 45.3161 148.682 45.3037 148.632C45.4271 148.583 45.5135 148.558 45.5999 148.669Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M45.5752 148.694C45.6616 148.694 45.748 148.694 45.8961 148.694C45.785 148.78 45.7233 148.829 45.6246 148.916C45.5999 148.805 45.5875 148.743 45.5752 148.694Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M46.6119 149.31C46.649 149.347 46.6983 149.396 46.7477 149.446C46.7107 149.483 46.6736 149.532 46.5996 149.594C46.5626 149.544 46.5255 149.483 46.4885 149.433C46.5255 149.396 46.5626 149.347 46.6119 149.31Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M46.4761 154.129C46.5131 154.067 46.5501 154.018 46.6118 153.919C46.6488 154.005 46.6735 154.067 46.6982 154.141C46.7106 154.129 46.6859 154.178 46.6488 154.215C46.6242 154.215 46.5871 154.215 46.5625 154.215C46.5378 154.19 46.5008 154.153 46.4761 154.129Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M44.8718 150.049C44.8718 149.914 44.8718 149.852 44.8718 149.778C44.9706 149.791 45.0446 149.828 45.0446 149.975C45.0076 150 44.9706 150.012 44.8718 150.049Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M51.832 154.658C51.8937 154.658 51.9431 154.671 52.0048 154.671C52.0048 154.72 52.0172 154.757 52.0172 154.819C51.9678 154.819 51.9184 154.831 51.8444 154.831C51.8444 154.769 51.832 154.708 51.832 154.658Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M47.1796 154.868C47.1796 154.942 47.1796 155.003 47.1796 155.09C47.1302 155.102 47.0932 155.102 47.0068 155.127C47.0562 155.016 47.0932 154.93 47.1302 154.843C47.1549 154.843 47.1673 154.856 47.1796 154.868Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M52.116 152.342C52.116 152.268 52.116 152.231 52.116 152.181C52.1653 152.169 52.2024 152.169 52.2517 152.157C52.3134 152.268 52.3134 152.342 52.116 152.342Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M47.8088 150.382C47.8088 150.321 47.8212 150.271 47.8212 150.21C47.8705 150.21 47.9076 150.198 47.9693 150.198C47.9693 150.247 47.9816 150.296 47.9816 150.37C47.9199 150.37 47.8705 150.382 47.8088 150.382Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M52.3752 155.842C52.3752 155.891 52.3752 155.915 52.3752 155.965C52.3258 155.977 52.2765 155.989 52.2148 156.002C52.2024 155.94 52.1901 155.903 52.1777 155.842C52.2518 155.842 52.3135 155.842 52.3752 155.842Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M52.1899 154.461C52.1899 154.412 52.1899 154.387 52.1899 154.338C52.2393 154.326 52.2887 154.313 52.3504 154.301C52.3627 154.363 52.3751 154.4 52.3874 154.461C52.3134 154.461 52.2516 154.461 52.1899 154.461Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M46.0317 146.525C46.0317 146.476 46.0317 146.451 46.0317 146.402C46.0811 146.389 46.1305 146.377 46.1922 146.365C46.2045 146.426 46.2169 146.463 46.2292 146.525C46.1428 146.525 46.0934 146.525 46.0317 146.525Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M55.053 156.26C55.1147 156.26 55.164 156.273 55.2258 156.273C55.2258 156.322 55.2381 156.359 55.2381 156.421C55.1887 156.421 55.1394 156.433 55.0653 156.433C55.053 156.371 55.053 156.322 55.053 156.26Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M44.6619 148.324C44.6619 148.41 44.6619 148.497 44.6619 148.595C44.6496 148.595 44.6372 148.595 44.6125 148.595C44.6125 148.509 44.6125 148.423 44.6125 148.324C44.6372 148.324 44.6496 148.324 44.6619 148.324Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M45.1803 148.115C45.2174 148.189 45.2544 148.25 45.2791 148.312C45.1927 148.324 45.0816 148.374 45.1803 148.115Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M50.1044 152.243C50.1291 152.305 50.1537 152.379 50.1661 152.428C50.0797 152.465 50.0427 152.403 50.1044 152.243Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M44.9089 145.576C44.8842 145.515 44.8472 145.453 44.8225 145.404C44.9212 145.354 44.9583 145.404 44.9089 145.576Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M53.5476 156.371C53.6217 156.371 53.708 156.371 53.7821 156.371C53.7821 156.384 53.7821 156.396 53.7821 156.421C53.708 156.433 53.6217 156.445 53.5476 156.458C53.5476 156.421 53.5476 156.396 53.5476 156.371Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M55.3369 156.371C55.411 156.371 55.4974 156.371 55.5714 156.371C55.5714 156.384 55.5714 156.396 55.5714 156.421C55.4974 156.433 55.411 156.445 55.3369 156.458C55.3369 156.421 55.3369 156.396 55.3369 156.371Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M49.6724 154.412C49.7464 154.4 49.7834 154.387 49.8451 154.375C49.8575 154.424 49.8698 154.474 49.8945 154.634C49.7834 154.523 49.7341 154.486 49.6724 154.412Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M55.1024 154.19C55.053 154.067 55.0283 154.005 55.0283 153.968C55.127 153.956 55.127 153.956 55.1024 154.19Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M46.7475 153.833C46.6858 153.833 46.6241 153.833 46.5747 153.833C46.5747 153.82 46.5747 153.808 46.5747 153.783C46.6364 153.783 46.6981 153.783 46.7475 153.783C46.7475 153.808 46.7475 153.82 46.7475 153.833Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M45.4766 150.185C45.4272 150.185 45.3779 150.185 45.3285 150.185C45.3285 150.173 45.3285 150.16 45.3162 150.148C45.3655 150.136 45.4149 150.123 45.4643 150.111C45.4766 150.136 45.4766 150.16 45.4766 150.185Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M49.5368 155.287C49.5368 155.225 49.5244 155.176 49.5244 155.114C49.5491 155.114 49.5614 155.114 49.5861 155.102C49.5985 155.164 49.6108 155.213 49.6231 155.275C49.5861 155.287 49.5614 155.287 49.5368 155.287Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M56.6821 155.644C56.6821 155.583 56.6821 155.521 56.6821 155.472C56.6945 155.472 56.7068 155.472 56.7315 155.472C56.7315 155.533 56.7315 155.595 56.7315 155.644C56.7068 155.644 56.6945 155.644 56.6821 155.644Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M56.6328 155.817C56.6328 155.842 56.6328 155.878 56.6328 155.903C56.6205 155.903 56.6082 155.903 56.6082 155.903C56.6082 155.878 56.6082 155.842 56.6082 155.817C56.6082 155.817 56.6205 155.817 56.6328 155.817Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M52.7947 156.002C52.7947 156.026 52.7947 156.063 52.7947 156.088C52.7824 156.088 52.77 156.088 52.77 156.088C52.77 156.063 52.77 156.026 52.77 156.002C52.77 156.002 52.7824 156.002 52.7947 156.002Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M47.6362 154.215C47.6362 154.239 47.6362 154.276 47.6362 154.301C47.6115 154.301 47.5745 154.301 47.5498 154.301C47.5498 154.276 47.5498 154.239 47.5498 154.215C47.5745 154.215 47.6115 154.215 47.6362 154.215Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M51.2644 156.359C51.2644 156.384 51.2644 156.421 51.2644 156.445C51.2521 156.445 51.2397 156.445 51.2397 156.445C51.2397 156.421 51.2397 156.384 51.2397 156.359C51.2521 156.359 51.2644 156.359 51.2644 156.359Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M53.8066 154.424C53.8311 154.424 53.8678 154.424 53.8923 154.424C53.8923 154.436 53.8923 154.449 53.8923 154.449C53.8678 154.449 53.8311 154.449 53.8066 154.449C53.8066 154.436 53.8066 154.436 53.8066 154.424Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M49.8452 151.454C49.8452 151.479 49.8452 151.516 49.8452 151.541C49.8329 151.541 49.8206 151.541 49.8206 151.541C49.8206 151.516 49.8206 151.479 49.8206 151.454C49.8206 151.454 49.8329 151.454 49.8452 151.454Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M45.5753 150.025C45.5506 150 45.5259 149.988 45.5012 149.963C45.5136 149.951 45.5259 149.939 45.5259 149.939C45.5506 149.963 45.5629 149.988 45.5876 150.013C45.5876 150.025 45.5753 150.025 45.5753 150.025Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M45.4147 149.741C45.4394 149.766 45.464 149.778 45.4887 149.803C45.4764 149.815 45.464 149.828 45.464 149.828C45.4394 149.803 45.427 149.778 45.4023 149.754C45.4023 149.754 45.4023 149.754 45.4147 149.741Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M52.042 153.944C52.042 153.919 52.042 153.882 52.042 153.857C52.0543 153.857 52.0667 153.857 52.0667 153.857C52.0667 153.882 52.0667 153.919 52.0667 153.944C52.0667 153.944 52.0543 153.944 52.042 153.944Z"
                                                                    fill="#CCCCCC" />
                                                                <path
                                                                    d="M179.404 65.6826C179.329 65.7318 179.255 65.7318 179.181 65.7318C179.218 65.6702 179.255 65.6209 179.28 65.5593C179.231 65.51 179.181 65.4607 179.157 65.4361C178.848 65.51 178.577 65.584 178.243 65.6826C178.355 65.7442 178.441 65.8058 178.515 65.8428C178.416 66.0153 178.219 66.0892 178.281 66.2864C178.231 66.2864 178.169 66.2864 178.12 66.2864C177.96 65.7442 177.96 65.7442 178.046 65.3868C177.898 65.3868 177.75 65.3868 177.602 65.3868L177.614 65.3745C177.589 65.3498 177.565 65.3129 177.54 65.2882C177.528 65.3005 177.515 65.3129 177.503 65.3252C177.528 65.3498 177.565 65.3745 177.602 65.3991C177.639 65.51 177.676 65.6209 177.725 65.7688C177.491 65.9167 177.651 66.1755 177.54 66.5329C177.565 66.5945 177.602 66.5698 177.602 66.5452C177.589 66.4959 177.565 66.4466 177.552 66.385C177.528 66.4466 177.515 66.5205 177.54 66.5205C177.713 66.3973 177.836 66.4096 178.058 66.422C177.886 66.5452 177.799 66.6068 177.738 66.6561C177.775 66.8286 177.799 66.9888 177.836 67.1614C177.75 67.2107 177.651 67.2476 177.478 67.3339C177.528 67.1737 177.552 67.0874 177.577 66.9765C177.466 66.8779 177.429 66.7054 177.355 66.5575C177.256 66.3603 177.269 66.2371 177.38 66.0769C177.417 66.0153 177.429 65.8674 177.38 65.8058C177.195 65.584 177.33 65.3129 177.256 65.0787C177.157 65.0294 177.071 64.9801 176.96 64.9308C176.701 65.0048 176.442 65.1773 176.121 65.1526C176.096 65.1526 176.059 65.2266 176.034 65.2636C175.775 65.3005 175.862 65.5716 175.738 65.7565C175.627 65.6702 175.541 65.5963 175.393 65.4731C175.528 65.4114 175.603 65.3868 175.689 65.3498C175.689 65.3005 175.701 65.2512 175.701 65.2019C175.578 65.2266 175.479 65.2512 175.368 65.2759C175.368 65.2266 175.368 65.165 175.368 65.0787C175.183 65.1034 174.998 65.2636 174.788 65.091C174.899 64.8692 175.01 64.6474 175.121 64.4132C175.084 64.3763 175.035 64.327 174.985 64.2777C174.85 64.3516 174.714 64.4132 174.578 64.4872C174.554 64.3023 174.405 64.4009 174.294 64.364C174.233 64.4379 174.171 64.5365 174.097 64.6351C174.023 64.5488 173.974 64.4995 173.924 64.4256C174.023 64.2777 174.122 64.1298 174.233 63.9573C173.998 63.871 173.764 63.908 173.542 64.0559C173.48 63.9819 173.431 63.9203 173.381 63.8587C173.406 63.7355 173.751 63.5506 174.011 63.5876C174.233 63.6245 174.43 63.7231 174.652 63.7971C174.763 63.6122 174.899 63.4151 174.8 63.1686C174.603 63.1809 174.492 63.3165 174.405 63.5013C174.22 63.3781 174.035 63.2672 173.85 63.1563C173.838 63.1932 173.813 63.2672 173.788 63.3411C173.739 63.3534 173.69 63.3534 173.591 63.3781C173.628 63.2549 173.653 63.1686 173.653 63.1563C173.628 62.9591 173.616 62.8235 173.591 62.688C173.628 62.6633 173.665 62.6264 173.702 62.6017C173.665 62.5524 173.628 62.5031 173.591 62.4662C173.628 62.3552 173.665 62.2443 173.702 62.1334C173.949 62.1827 173.912 62.4169 173.974 62.5894C174.023 62.5401 174.048 62.5154 174.109 62.4538C174.233 62.6017 174.344 62.7496 174.467 62.9098C174.492 62.9098 174.541 62.9098 174.603 62.9098C174.615 62.9468 174.628 62.9714 174.64 63.0084C174.665 62.9714 174.689 62.9468 174.702 62.9098C174.825 62.8975 174.936 62.8975 175.134 62.8975C175.01 62.7989 174.948 62.7496 174.887 62.7003C174.825 62.7619 174.776 62.8112 174.702 62.9098C174.677 62.9221 174.64 62.9221 174.603 62.9221C174.603 62.7866 174.603 62.6387 174.603 62.5154C174.455 62.4415 174.381 62.3799 174.27 62.2567C174.381 62.2443 174.492 62.232 174.702 62.2074C174.517 62.1088 174.418 62.0595 174.282 61.9979C174.27 62.1211 174.27 62.1827 174.27 62.2567C174.035 62.3306 173.986 62.0102 173.776 62.0225C173.764 62.0595 173.739 62.0964 173.714 62.1334C173.64 62.0964 173.566 62.0595 173.492 62.0225C173.517 61.9732 173.542 61.9239 173.542 61.9239C173.431 61.813 173.332 61.7144 173.221 61.6035C173.245 61.5789 173.258 61.5542 173.282 61.5419C173.27 61.4556 173.27 61.3694 173.258 61.2585C173.134 61.2585 173.011 61.2585 172.85 61.2585C172.838 61.1106 172.826 60.9627 172.813 60.8518C172.69 60.7778 172.591 60.7162 172.505 60.6546C172.456 60.1986 172.517 59.8043 172.937 59.4839C172.937 59.3607 172.937 59.1758 172.937 59.0033C172.999 59.0033 173.073 59.0033 173.159 59.0033C173.159 58.9047 173.159 58.8431 173.159 58.7938C173.221 58.7568 173.282 58.7198 173.332 58.6705C173.369 58.7075 173.406 58.7322 173.443 58.7691C173.406 58.7198 173.356 58.6829 173.319 58.6336C173.418 58.6213 173.517 58.6213 173.616 58.6089C173.603 58.5843 173.579 58.572 173.566 58.5473C173.431 58.5596 173.295 58.5596 173.159 58.572C173.159 58.6705 173.159 58.7198 173.159 58.7938C173.085 58.8554 173.011 58.9293 172.937 59.0033C172.826 59.0033 172.715 59.0033 172.604 59.0033C172.641 58.9293 172.678 58.8554 172.715 58.7691L172.727 58.7815C172.752 58.7568 172.789 58.7322 172.813 58.7075C172.801 58.6952 172.789 58.6829 172.776 58.6705C172.752 58.6952 172.727 58.7322 172.702 58.7691C172.591 58.7322 172.48 58.6952 172.369 58.6582C172.332 58.6213 172.295 58.5843 172.258 58.5473C172.307 58.4734 172.357 58.3994 172.406 58.3378C172.53 58.2146 172.752 58.4734 172.826 58.2146C172.887 58.2392 172.937 58.2885 173.011 58.3501C173.06 58.153 173.06 57.9928 172.826 57.8942C172.826 58.0051 172.826 58.116 172.813 58.2146C172.69 58.1776 172.579 58.153 172.443 58.1037C172.517 58.0174 172.542 57.9804 172.542 57.9928C172.505 57.9188 172.468 57.8449 172.443 57.7956C172.344 57.8449 172.283 57.8818 172.233 57.9188C172.024 57.7833 171.974 57.4752 171.69 57.4505C171.69 57.3766 171.69 57.3026 171.69 57.2287C171.727 57.1917 171.764 57.1548 171.802 57.1178C171.913 57.1178 172.024 57.1178 172.135 57.1178C172.135 57.2657 172.135 57.4012 172.135 57.5245C172.258 57.5738 172.344 57.6107 172.505 57.6847C172.456 57.5491 172.419 57.4629 172.382 57.3643C172.542 57.2534 172.715 57.1424 172.875 57.0315C172.937 57.0685 172.999 57.1055 173.036 57.1178C173.134 57.0562 173.196 57.0069 173.27 56.9576C173.221 56.9083 173.196 56.8837 173.147 56.8344C173.258 56.6988 173.468 56.5879 173.332 56.3414C173.295 56.3661 173.258 56.4154 173.221 56.4277C173.147 56.4523 173.073 56.44 172.974 56.4523C172.912 56.3661 172.85 56.2675 172.789 56.1689C172.9 56.1196 172.962 56.0826 173.036 56.058C173.036 56.0333 173.023 56.021 173.023 55.9964C172.912 55.9964 172.813 55.9964 172.702 55.9964C172.702 55.9224 172.702 55.8485 172.702 55.7376C172.801 55.676 172.912 55.5897 173.097 55.4541C173.097 55.4541 173.221 55.4541 173.492 55.4541C173.295 55.5651 173.208 55.6143 173.11 55.6636C173.307 55.8855 173.554 55.9717 173.628 56.2552C173.727 55.9471 174.072 55.9348 174.159 55.6636C174.122 55.5897 174.085 55.5158 174.035 55.4418L174.048 55.4541C174.072 55.4295 174.109 55.4048 174.134 55.3802C174.122 55.3679 174.109 55.3556 174.097 55.3432C174.072 55.3679 174.048 55.4048 174.023 55.4418C173.961 55.4418 173.887 55.4418 173.776 55.4418C173.85 55.2693 173.899 55.1461 173.961 55.0105C174.048 55.0105 174.134 55.0105 174.159 55.0105C174.331 55.1584 174.455 55.2693 174.591 55.3925C174.554 55.4295 174.529 55.4541 174.467 55.5158C174.541 55.5527 174.615 55.5897 174.689 55.639C174.702 55.5281 174.702 55.3802 174.714 55.257C174.739 55.2446 174.763 55.2323 174.763 55.2323C174.776 55.2446 174.788 55.257 174.8 55.2693C175.43 55.7376 176.034 56.2305 176.565 56.8097C176.602 56.859 176.602 56.9453 176.614 57.0562C176.244 57.1055 176.195 57.4875 175.973 57.7093C175.763 57.9311 175.664 58.2392 175.479 58.572C175.479 58.6213 175.479 58.7322 175.479 58.8677C175.405 58.9293 175.319 58.991 175.282 59.0279C175.232 59.3976 175.171 59.6934 175.146 59.9891C175.121 60.2849 175.146 60.5807 175.146 60.8395C175.356 61.2215 175.528 61.5542 175.479 61.9362C175.627 62.1457 175.825 62.3183 175.886 62.5278C176.022 62.9591 176.368 63.1316 176.713 63.3411C176.689 63.3658 176.664 63.3904 176.627 63.4274C176.787 63.5629 176.948 63.6985 177.12 63.834C177.145 63.8094 177.17 63.7848 177.219 63.7355C177.503 64.1052 177.91 64.2407 178.342 64.3023C178.453 64.4995 178.675 64.1175 178.774 64.3886C178.959 64.3886 179.144 64.4009 179.33 64.4009C179.502 64.4009 179.663 64.4132 179.835 64.4009C180.008 64.3886 180.181 64.4256 180.354 64.3147C180.539 64.2037 180.798 64.2284 181.033 64.1791C181.156 64.6474 181.279 65.1157 181.415 65.6209C181.316 65.6333 181.23 65.6333 181.144 65.6456C181.07 65.7318 180.983 65.8304 180.847 65.9906C180.847 65.9906 180.835 66.0769 180.823 66.1755C180.724 66.1878 180.625 66.2001 180.44 66.2371C180.588 66.3234 180.675 66.385 180.761 66.4466C180.502 66.7177 180.699 67.0135 180.601 67.2476C180.687 67.3339 180.761 67.4078 180.823 67.4694C180.823 67.605 180.823 67.7529 180.823 67.8884C180.761 67.8884 180.724 67.8884 180.662 67.8884C180.601 67.7406 180.551 67.5804 180.465 67.3709C180.354 67.3092 180.144 67.2599 180.181 67.0012C180.23 67.0012 180.292 67.0012 180.378 67.0012C180.391 66.8656 180.391 66.73 180.403 66.5575C180.267 66.5082 180.144 66.4589 179.971 66.385C179.959 66.3727 179.934 66.2864 179.872 66.1755C179.848 66.3357 179.823 66.4466 179.798 66.5698C179.391 66.5329 179.589 66.0276 179.268 65.9783C179.33 65.8428 179.367 65.7935 179.404 65.6826C179.404 65.6702 179.404 65.7072 179.404 65.7318C179.478 65.7195 179.552 65.7072 179.626 65.6949C179.626 65.6702 179.613 65.6456 179.613 65.6209C179.539 65.6333 179.465 65.6333 179.404 65.6826ZM173.566 60.6053C173.579 60.593 173.579 60.593 173.591 60.5807C173.566 60.556 173.542 60.5191 173.517 60.4944C173.505 60.5067 173.492 60.5191 173.48 60.5314C173.505 60.556 173.542 60.5807 173.628 60.5314C173.566 60.6916 173.529 60.7902 173.48 60.9134C173.554 60.9504 173.653 60.9997 173.862 61.1106C173.764 60.8518 173.702 60.7162 173.566 60.6053ZM174.344 57.1178C174.307 57.1178 174.282 57.1178 174.245 57.1178C174.257 57.1917 174.27 57.2657 174.282 57.3396C174.307 57.3396 174.331 57.3273 174.356 57.3273C174.356 57.2534 174.344 57.1794 174.22 57.1178C174.27 56.896 174.307 56.6865 174.344 56.4647C174.233 56.5632 174.134 56.6495 174.048 56.7234C174.085 56.7851 174.122 56.8344 174.146 56.8837C174.097 56.9699 174.06 57.0315 174.023 57.1055C174.122 57.1301 174.159 57.1301 174.344 57.1178ZM173.023 60.6793C173.023 60.593 173.048 60.5067 173.023 60.4821C172.974 60.4328 172.888 60.4205 172.727 60.3465C172.875 60.6053 172.974 60.7655 173.06 60.9134C173.196 60.8518 173.282 60.8025 173.406 60.7409C173.27 60.7162 173.171 60.7039 173.023 60.4698C173.036 60.4821 173.036 60.4821 173.048 60.4944C173.073 60.4698 173.11 60.4451 173.134 60.4205C173.122 60.4081 173.11 60.3958 173.097 60.3835C173.06 60.4081 173.036 60.4328 173.023 60.6793ZM176.614 64.1545C176.602 64.1668 176.602 64.1668 176.59 64.1791C176.614 64.2038 176.639 64.2407 176.664 64.2654C176.676 64.253 176.689 64.2407 176.701 64.2284C176.676 64.2037 176.639 64.1791 176.614 64.1545C176.59 63.9819 176.442 64.0805 176.355 64.0559C176.17 64.1298 176.121 64.3886 175.886 64.4009C175.862 64.4009 175.849 64.5365 175.825 64.5981C175.973 64.4502 176.121 64.5118 176.244 64.4625C176.244 64.6104 176.244 64.709 176.244 64.8076C176.158 64.8322 176.096 64.8569 176.034 64.8815C176.034 64.9062 176.047 64.9308 176.047 64.9555C176.183 64.9308 176.318 64.9062 176.466 64.8815C176.491 64.8939 176.528 64.9185 176.577 64.9555C176.565 64.6351 176.565 64.6351 176.269 64.4995C176.306 64.4502 176.38 64.3886 176.368 64.3393C176.355 64.1421 176.479 64.1668 176.614 64.1545ZM180.835 65.4238C180.687 65.4607 180.564 65.4977 180.514 65.51C180.378 65.6333 180.292 65.7072 180.181 65.8181C180.181 65.8674 180.193 65.9537 180.206 66.0769C180.28 66.0153 180.317 65.9783 180.354 65.9537C180.403 65.9906 180.44 66.0153 180.514 66.0892C180.576 65.9167 180.625 65.7688 180.675 65.6333C180.773 65.6209 180.86 65.6086 180.996 65.584C180.921 65.5224 180.884 65.4854 180.835 65.4238ZM175.479 64.0435C175.479 63.9573 175.479 63.9203 175.479 64.0066C175.294 63.8217 175.158 63.6862 175.047 63.5753C175.047 63.6985 175.047 63.871 175.047 64.0435C175.195 64.0435 175.319 64.0435 175.479 64.0435ZM174.615 61.776C174.43 61.6282 174.257 61.4926 174.109 61.3817C173.986 61.4433 173.887 61.5049 173.751 61.5789C173.825 61.6528 173.875 61.6898 173.912 61.7267C174.011 61.6651 174.085 61.6282 174.146 61.5912C174.319 61.6158 174.344 61.8993 174.615 61.776ZM173.282 59.6071C173.258 59.6318 173.233 59.6441 173.221 59.6687C173.295 59.7796 173.381 59.8906 173.455 59.9891C173.43 60.0261 173.393 60.0631 173.27 60.211C173.492 60.1124 173.591 60.0754 173.677 60.0261C173.616 59.9029 173.579 59.8166 173.542 59.7304C173.455 59.6811 173.369 59.6441 173.282 59.6071ZM175.368 64.5611C175.38 64.672 175.38 64.8076 175.393 64.9924C175.504 64.8815 175.565 64.8199 175.677 64.6967C175.553 64.6351 175.467 64.5981 175.368 64.5611ZM173.332 57.734C173.282 57.6847 173.233 57.6231 173.159 57.5368C173.159 57.7216 173.159 57.8695 173.159 58.079C173.233 57.9311 173.27 57.8449 173.332 57.734ZM173.591 56.9946C173.468 57.0192 173.418 57.0315 173.356 57.0439C173.369 57.1548 173.369 57.2534 173.381 57.4136C173.455 57.2534 173.517 57.1548 173.591 56.9946ZM175.627 63.9573C175.627 64.1298 175.627 64.2037 175.627 64.29C175.714 64.2777 175.763 64.2654 175.862 64.2407C175.788 64.1545 175.738 64.0928 175.627 63.9573ZM174.652 56.1073C174.615 56.0333 174.578 55.9471 174.541 55.8731C174.529 55.8855 174.504 55.8978 174.492 55.9101C174.492 55.9717 174.492 56.0333 174.492 56.1073C174.566 56.1073 174.615 56.1073 174.652 56.1073ZM172.875 60.1986C172.875 60.1863 172.875 60.1124 172.875 60.0261C172.801 60.0384 172.752 60.0508 172.727 60.0508C172.776 60.1001 172.838 60.1494 172.875 60.1986ZM173.431 57.734C173.751 57.8572 173.702 57.7216 173.677 57.6107C173.603 57.6477 173.529 57.6847 173.431 57.734ZM175.097 63.3534C175.134 63.1809 175.134 63.1809 174.862 63.2056C174.973 63.2795 175.047 63.3165 175.097 63.3534ZM177.133 64.6104C177.108 64.6104 177.096 64.6104 177.071 64.6104C177.071 64.6844 177.071 64.7583 177.071 64.8322C177.096 64.8322 177.108 64.8322 177.133 64.8322C177.133 64.7583 177.133 64.6844 177.133 64.6104ZM173.714 59.5702C173.751 59.5702 173.776 59.5578 173.813 59.5578C173.801 59.4962 173.788 59.4346 173.764 59.373C173.751 59.373 173.727 59.373 173.714 59.3853C173.714 59.4469 173.714 59.5085 173.714 59.5702ZM174.22 60.1494C174.196 60.1494 174.183 60.1494 174.159 60.1494C174.159 60.2233 174.159 60.2972 174.159 60.3712C174.183 60.3712 174.196 60.3712 174.22 60.3712C174.22 60.2972 174.22 60.2233 174.22 60.1494ZM178.243 65.0664C178.231 65.0664 178.219 65.0664 178.206 65.0664C178.206 65.1034 178.206 65.1403 178.206 65.1773C178.219 65.1773 178.231 65.1773 178.243 65.1773C178.243 65.1403 178.243 65.1034 178.243 65.0664ZM175.442 63.2672C175.43 63.2672 175.417 63.2672 175.405 63.2672C175.405 63.3041 175.405 63.3411 175.405 63.3781C175.417 63.3781 175.43 63.3781 175.442 63.3781C175.442 63.3534 175.442 63.3041 175.442 63.2672ZM179.885 65.8428C179.897 65.8428 179.91 65.8428 179.922 65.8428C179.922 65.8058 179.922 65.7688 179.922 65.7318C179.91 65.7318 179.897 65.7318 179.885 65.7318C179.885 65.7688 179.885 65.8058 179.885 65.8428ZM178.799 65.2882C178.786 65.2882 178.774 65.2882 178.762 65.2882C178.762 65.3252 178.762 65.3621 178.762 65.3991C178.774 65.3991 178.786 65.3991 178.799 65.3991C178.799 65.3621 178.799 65.3252 178.799 65.2882ZM174.591 56.4154C174.591 56.403 174.591 56.3907 174.591 56.3784C174.554 56.3784 174.517 56.3784 174.479 56.3784C174.479 56.3907 174.479 56.403 174.479 56.4154C174.517 56.4154 174.554 56.4154 174.591 56.4154ZM173.949 56.2305C173.961 56.2305 173.974 56.2305 173.986 56.2305C173.986 56.1935 173.986 56.1566 173.986 56.1196C173.974 56.1196 173.961 56.1196 173.949 56.1196C173.949 56.1566 173.949 56.1935 173.949 56.2305ZM173.801 61.1845C173.801 61.1968 173.801 61.2092 173.801 61.2215C173.838 61.2215 173.875 61.2215 173.912 61.2215C173.912 61.2092 173.912 61.1968 173.912 61.1845C173.875 61.1845 173.838 61.1845 173.801 61.1845ZM173.727 59.2497C173.739 59.2497 173.751 59.2497 173.764 59.2497C173.764 59.2128 173.764 59.1758 173.764 59.1388C173.751 59.1388 173.739 59.1388 173.727 59.1388C173.727 59.1758 173.727 59.2128 173.727 59.2497ZM174.097 58.0174C174.085 58.0174 174.072 58.0174 174.06 58.0174C174.06 58.0544 174.06 58.0913 174.06 58.1283C174.072 58.1283 174.085 58.1283 174.097 58.1283C174.097 58.0913 174.097 58.0544 174.097 58.0174ZM173.764 58.0174C173.751 58.0174 173.739 58.0174 173.727 58.0174C173.727 58.0544 173.727 58.0913 173.727 58.1283C173.739 58.1283 173.751 58.1283 173.764 58.1283C173.764 58.0913 173.764 58.0544 173.764 58.0174ZM173.579 57.9804C173.579 57.9681 173.579 57.9558 173.579 57.9435C173.542 57.9435 173.505 57.9435 173.468 57.9435C173.468 57.9558 173.468 57.9681 173.468 57.9804C173.505 57.9804 173.542 57.9804 173.579 57.9804ZM172.567 57.6107C172.567 57.6231 172.567 57.6354 172.567 57.6477C172.604 57.6477 172.641 57.6477 172.678 57.6477C172.678 57.6354 172.678 57.6231 172.678 57.6107C172.641 57.6107 172.604 57.6107 172.567 57.6107ZM173.505 56.7974C173.517 56.7974 173.529 56.7974 173.542 56.7974C173.542 56.7604 173.542 56.7235 173.542 56.6865C173.529 56.6865 173.517 56.6865 173.505 56.6865C173.505 56.7111 173.505 56.7481 173.505 56.7974Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M179.07 66.5946C179.095 66.7302 179.132 66.8411 179.181 66.9643L179.169 66.952C179.144 66.9767 179.107 67.0013 179.083 67.0259C179.095 67.0383 179.107 67.0506 179.12 67.0629C179.144 67.0383 179.169 67.0013 179.194 66.9643C179.243 66.9643 179.305 66.9643 179.391 66.9643C179.404 67.0506 179.404 67.1369 179.416 67.2601C179.601 67.3587 179.811 67.4696 180.058 67.5928C180.058 67.6791 180.058 67.8146 180.058 67.9995C179.947 67.9502 179.872 67.9132 179.774 67.8639C179.638 67.8886 179.465 67.9255 179.292 67.9625C179.329 67.8023 179.379 67.6298 179.428 67.4326C179.268 67.4203 179.132 67.408 178.984 67.3956C178.959 67.334 178.935 67.2724 178.91 67.2108C178.811 67.2601 178.712 67.3094 178.614 67.3587C178.614 67.4203 178.614 67.4696 178.614 67.5312C178.515 67.5312 178.404 67.5312 178.28 67.5312C178.28 67.4449 178.28 67.371 178.293 67.3094C178.392 67.2601 178.503 67.1985 178.626 67.1369C178.503 67.0752 178.404 67.0383 178.305 66.989C178.305 67.0999 178.305 67.2108 178.293 67.3094C178.157 67.3956 178.034 67.4696 177.873 67.5928C177.861 67.4203 177.849 67.3094 177.836 67.1985C177.91 67.1985 177.972 67.1985 178.058 67.1985C177.997 67.0876 177.96 67.0259 177.923 66.9397C178.034 66.8781 178.132 66.8165 178.219 66.7672C178.268 66.7918 178.317 66.8288 178.429 66.8904C178.367 66.6316 178.317 66.4714 178.28 66.2989C178.564 66.2989 178.675 66.1387 178.737 65.8799C178.762 65.7813 178.86 65.695 178.922 65.5964C179.033 65.6581 179.107 65.695 179.181 65.732C179.181 65.9168 179.181 66.1017 179.181 66.2989L179.169 66.2865C179.144 66.3112 179.107 66.3358 179.083 66.3605C179.095 66.3728 179.107 66.3851 179.12 66.3975C179.144 66.3728 179.169 66.3358 179.194 66.2989C179.243 66.2619 179.305 66.2249 179.391 66.1756C179.404 66.2742 179.404 66.3728 179.416 66.4714C179.28 66.5207 179.169 66.57 179.07 66.5946C178.898 66.5207 178.712 66.4837 178.515 66.4221C178.515 66.496 178.515 66.5823 178.515 66.6809C178.552 66.7179 178.601 66.7672 178.663 66.8288C178.799 66.7672 178.86 66.5577 179.07 66.5946ZM179.823 67.7284C179.823 67.6914 179.823 67.6668 179.811 67.6298C179.749 67.6421 179.687 67.6544 179.626 67.6668C179.626 67.6791 179.626 67.7037 179.638 67.7161C179.7 67.7284 179.761 67.7284 179.823 67.7284Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M172.122 57.1302C172.048 57.0193 171.974 56.9084 171.9 56.7975C172.048 56.7482 172.196 56.6866 172.369 56.625C172.344 56.5387 172.307 56.4401 172.283 56.3415C172.258 56.2429 172.233 56.1443 172.209 56.0581C172.073 56.0827 171.95 56.1074 171.814 56.1443C171.801 56.0581 171.801 56.0088 171.789 55.9348C171.9 55.9225 171.999 55.8979 172.122 55.8855C172.122 55.75 172.122 55.6268 172.122 55.4666C172.283 55.4666 172.431 55.4666 172.579 55.4666C172.554 55.5651 172.53 55.6514 172.493 55.7746C172.542 55.8363 172.616 55.9225 172.69 56.0211C172.69 56.132 172.69 56.2306 172.69 56.3292C172.591 56.3662 172.53 56.3785 172.394 56.4278C172.579 56.4647 172.69 56.4894 172.776 56.5017C172.727 56.6496 172.69 56.7852 172.665 56.8344C172.443 56.9454 172.283 57.0316 172.122 57.1302Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M172.567 61.4925C172.567 61.702 172.579 61.9239 172.567 62.1334C172.567 62.1826 172.493 62.2196 172.456 62.2812L172.468 62.2689C172.443 62.2443 172.419 62.2073 172.394 62.1826C172.382 62.195 172.369 62.2073 172.357 62.2196C172.382 62.2443 172.419 62.2689 172.456 62.2936C172.456 62.3429 172.456 62.4045 172.456 62.4538C172.369 62.5031 172.27 62.5523 172.159 62.6016C172.098 62.5154 172.024 62.4168 171.913 62.2443C171.913 62.2196 171.913 62.0964 171.913 61.9239C172.061 61.9485 172.184 61.9732 172.32 61.9978C172.345 61.9485 172.369 61.8746 172.419 61.7637C172.394 61.6527 172.357 61.5049 172.308 61.2954C172.233 61.2337 172.11 61.1352 171.987 61.0489C172.073 60.901 172.135 60.8024 172.196 60.6792C172.357 60.7901 172.493 60.8764 172.665 60.9996C172.616 61.1352 172.801 61.3447 172.567 61.4925L172.579 61.4802C172.554 61.4556 172.53 61.4186 172.505 61.394C172.493 61.4063 172.48 61.4186 172.468 61.4309C172.505 61.4432 172.53 61.4679 172.567 61.4925Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M171.345 54.4436C171.382 54.5052 171.419 54.5545 171.444 54.6161C171.382 54.6777 171.32 54.7394 171.234 54.8256C171.345 54.8996 171.444 54.9612 171.616 55.0721C171.456 55.0967 171.369 55.1091 171.246 55.1337C171.246 55.22 171.246 55.3309 171.246 55.4541C171.308 55.4048 171.369 55.3802 171.444 55.3186C171.518 55.3802 171.592 55.4418 171.69 55.5157C171.653 55.5897 171.629 55.6513 171.555 55.7869C171.555 55.7992 171.838 55.9224 171.555 56.0087C171.407 55.7745 171.135 55.6759 170.999 55.3062C171.012 55.22 171.061 55.0228 171.098 54.8256C171.073 54.801 171.049 54.7763 171.024 54.7517C171.073 54.6531 171.123 54.5545 171.172 54.4559C171.234 54.4436 171.283 54.4436 171.345 54.4436Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M173.578 62.7127C173.48 62.688 173.381 62.6634 173.282 62.6387C173.233 62.6634 173.159 62.7003 173.048 62.7496C173.048 62.5771 173.048 62.4539 173.048 62.306C172.974 62.2813 172.9 62.269 172.85 62.2444C172.801 62.2197 172.776 62.1704 172.715 62.1088C172.715 61.9856 172.715 61.85 172.715 61.6775C172.937 61.7268 173.085 61.813 173.233 61.9486C173.295 61.9979 173.393 62.0102 173.48 62.0349C173.455 62.1335 173.418 62.2444 173.393 62.3553C173.455 62.3922 173.529 62.4415 173.591 62.4785C173.578 62.5648 173.578 62.6387 173.578 62.7127Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M171.678 57.9064C171.579 57.931 171.481 57.9557 171.32 58.005C171.258 57.9803 171.123 57.9064 170.999 57.8448C171.061 57.6476 171.16 57.549 171.345 57.5737C171.357 57.6476 171.369 57.7215 171.369 57.7339C171.444 57.7092 171.518 57.6846 171.592 57.6476C171.579 57.623 171.567 57.6106 171.555 57.586C171.493 57.586 171.419 57.5737 171.345 57.5737C171.345 57.4381 171.394 57.2902 171.221 57.1793C171.357 57.0931 171.481 57.0068 171.641 56.9082C171.69 56.9821 171.752 57.0561 171.801 57.13C171.764 57.167 171.727 57.204 171.69 57.2409C171.653 57.2656 171.616 57.3026 171.579 57.3272C171.616 57.3765 171.653 57.4258 171.69 57.4628C171.678 57.6106 171.678 57.7585 171.678 57.9064Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M175.134 65.5224C175.183 65.7935 175.232 66.0893 175.282 66.422C175.047 66.3481 174.874 66.2988 174.64 66.2249C174.739 66.1386 174.813 66.077 174.899 66.003C174.85 65.9414 174.776 65.8552 174.689 65.7566C174.751 65.6457 174.8 65.5224 174.85 65.4238C174.948 65.4608 175.047 65.4978 175.134 65.5224Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M172.567 54.9982C172.332 55.0475 172.085 55.0968 171.814 55.1461C171.814 54.9366 171.814 54.7641 171.814 54.5793C172.098 54.5669 172.357 54.6162 172.567 54.7148C172.567 54.8134 172.567 54.912 172.567 54.9982Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M178.836 68.7512C178.762 68.8621 178.688 68.973 178.614 69.0839C178.54 69.01 178.392 68.936 178.404 68.8744C178.429 68.6033 178.231 68.554 178.058 68.4677C178.108 68.2706 178.157 68.0611 178.219 67.8639C178.256 67.8639 178.293 67.8516 178.342 67.8516C178.404 68.1104 178.478 68.3815 178.54 68.6403C178.614 68.6403 178.675 68.6403 178.725 68.6403C178.762 68.6772 178.799 68.7142 178.836 68.7512Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M174.294 66.7916C174.208 66.8286 174.122 66.8655 173.974 66.9395C173.998 66.9518 173.924 66.9148 173.85 66.8655C173.813 66.8902 173.776 66.9272 173.751 66.9518C173.69 66.8902 173.64 66.8409 173.579 66.7916C173.603 66.6807 173.628 66.5821 173.653 66.4712C173.714 66.3972 173.801 66.2987 173.887 66.1877C174.011 66.3726 174.134 66.5574 174.294 66.7916Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M171.567 56.0088C171.604 56.0704 171.629 56.1197 171.666 56.1813C171.641 56.206 171.604 56.2429 171.567 56.2922C171.666 56.3538 171.777 56.4031 171.9 56.4771C171.9 56.588 171.9 56.6866 171.9 56.7852C171.814 56.7852 171.715 56.7852 171.592 56.7852C171.53 56.6866 171.456 56.5633 171.382 56.4524C171.308 56.4524 171.234 56.4524 171.123 56.4524C171.11 56.3538 171.11 56.2553 171.098 56.169C171.283 56.1197 171.419 56.0581 171.567 56.0088Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M172.344 58.6953C172.283 58.7815 172.221 58.8555 172.147 58.9664C172.048 58.8678 171.962 58.8062 171.875 58.7199C171.912 58.646 171.949 58.5843 171.986 58.5227C171.789 58.4488 171.752 58.19 171.567 58.0914C171.604 58.0175 171.641 57.9682 171.678 57.9066C171.912 57.8449 171.912 58.1653 172.11 58.1653C172.196 58.2886 171.999 58.4981 172.246 58.572C172.27 58.6213 172.307 58.6583 172.344 58.6953Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M177.639 67.7158C177.713 67.7898 177.762 67.8391 177.811 67.9007C177.676 68.1964 177.416 68.4429 177.503 68.8496C177.379 68.8496 177.281 68.8619 177.17 68.8619C177.17 68.7387 177.17 68.6524 177.17 68.5538C177.231 68.5292 177.293 68.5045 177.367 68.4799C177.33 68.4306 177.293 68.369 177.256 68.3073C177.379 68.1348 177.503 67.9376 177.639 67.7158Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M171.345 59.4716C171.308 59.4962 171.246 59.5209 171.234 59.5579C171.184 59.6811 171.147 59.8043 171.11 59.9276C171.012 59.8659 170.95 59.8413 170.888 59.8043C170.888 59.755 170.888 59.6934 170.888 59.6318C170.962 59.5948 171.036 59.5702 171.11 59.5332C171.073 59.4839 171.036 59.4469 170.975 59.3977C171.036 59.2867 171.086 59.1635 171.16 59.0156C171.271 59.0403 171.382 59.0772 171.518 59.1142C171.53 59.1019 171.567 59.0772 171.604 59.0403C171.653 59.0896 171.703 59.1389 171.764 59.2005C171.715 59.2498 171.678 59.2991 171.629 59.3484C171.542 59.3114 171.456 59.2867 171.32 59.2251C171.345 59.336 171.345 59.41 171.345 59.4716Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M179.663 68.4061C179.724 68.4553 179.761 68.4923 179.823 68.5539C179.934 68.4677 180.045 68.3814 180.23 68.2458C180.304 68.3198 180.391 68.406 180.514 68.517C180.341 68.6155 180.243 68.6648 180.169 68.7141C180.094 68.7634 180.033 68.825 179.971 68.8867C179.798 68.8127 179.65 68.7634 179.465 68.6772C179.539 68.5786 179.601 68.4923 179.663 68.4061Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M172.48 64.3517C172.344 64.5243 172.196 64.6845 172.036 64.8816C171.752 64.7091 171.641 64.4873 171.69 64.1792C171.764 64.1792 171.801 64.1792 171.851 64.1792C171.875 64.2408 171.888 64.3024 171.937 64.4133C172.098 64.3764 172.258 64.3271 172.418 64.2901C172.431 64.3024 172.455 64.3271 172.48 64.3517Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M173.628 55.2571C173.653 55.405 173.665 55.5405 173.69 55.6884C173.394 55.5652 173.48 55.3434 173.468 55.1585C173.295 55.0722 173.036 55.2201 172.925 54.9244C173.011 54.8751 173.122 54.8135 173.221 54.7642C173.406 54.8874 173.554 54.986 173.714 55.0969C173.69 55.1339 173.653 55.1955 173.628 55.2571Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M175.936 66.1755C176.01 66.1385 176.084 66.1015 176.219 66.0276C176.257 66.1015 176.294 66.1878 176.331 66.2741C176.306 66.2987 176.232 66.3726 176.158 66.4589C176.306 66.5082 176.454 66.5575 176.651 66.6314C176.528 66.7423 176.466 66.804 176.343 66.9149C176.294 66.7916 176.257 66.7177 176.232 66.6438C176.059 66.6191 175.874 66.6191 175.812 66.3973C175.985 66.3973 175.911 66.2617 175.936 66.1755Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M171.801 60.1616C171.9 60.1616 171.999 60.1616 172.122 60.1616C172.122 60.2356 172.122 60.2849 172.122 60.3218C171.925 60.3711 171.752 60.4081 171.493 60.4697C171.48 60.4328 171.443 60.3465 171.369 60.1863C171.394 59.9521 171.394 59.9521 171.789 59.9275C171.777 60.0014 171.789 60.0754 171.801 60.1616C171.801 60.1493 171.789 60.137 171.777 60.137C171.752 60.1616 171.715 60.1863 171.69 60.2109C171.703 60.2233 171.715 60.2356 171.727 60.2479C171.752 60.2109 171.777 60.1863 171.801 60.1616Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M172.554 59.3608C172.48 59.5826 172.406 59.8167 172.344 60.0139C172.246 59.9523 172.172 59.9153 172.048 59.8414C172.196 59.8167 172.246 59.8044 172.344 59.7798C172.233 59.6072 172.135 59.447 172.036 59.2745C172.11 59.2006 172.196 59.1143 172.357 58.9541C172.456 59.0527 172.542 59.1513 172.641 59.2375C172.604 59.2868 172.579 59.3238 172.554 59.3608Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M175.812 66.3975C175.677 66.3975 175.528 66.3975 175.38 66.3975C175.38 66.2003 175.38 66.0277 175.38 65.8306C175.578 65.8922 175.751 65.9415 175.923 66.0031C175.923 66.0647 175.923 66.1263 175.923 66.1756C175.763 66.1879 175.837 66.3235 175.812 66.3975Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M180.921 65.9291C181.094 66.0154 181.168 66.0524 181.255 66.0894C181.292 65.9908 181.316 65.9291 181.353 65.8059C181.44 66.0031 181.501 66.1633 181.575 66.3481C181.316 66.4221 181.106 66.4714 180.897 66.533C180.872 66.5083 180.86 66.4714 180.835 66.4467C180.946 66.4221 181.057 66.3974 181.156 66.3728C181.119 66.3358 181.082 66.2988 181.045 66.2619C181.02 66.1756 180.983 66.0893 180.921 65.9291Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M178.725 68.6401C178.836 68.258 179.008 68.0485 179.28 67.9746C179.317 68.0485 179.354 68.1225 179.403 68.2087C179.206 68.3936 179.021 68.5784 178.836 68.7633C178.799 68.714 178.762 68.677 178.725 68.6401Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M174.245 65.8427C174.282 65.818 174.331 65.7934 174.381 65.7687C174.331 65.6578 174.282 65.5716 174.208 65.436C174.344 65.4237 174.43 65.399 174.591 65.3867C174.566 65.5469 174.553 65.6702 174.529 65.8304C174.541 65.892 174.578 66.0029 174.628 66.1631C174.455 66.1754 174.319 66.1754 174.146 66.1877C174.146 66.1015 174.146 66.0275 174.146 65.9536C174.171 65.9166 174.208 65.8797 174.245 65.8427Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M171.641 60.9011C171.727 60.9627 171.826 61.0367 171.962 61.1353C171.863 61.1969 171.801 61.2462 171.69 61.3078C171.678 61.3571 171.666 61.4557 171.641 61.5789C171.53 61.5296 171.431 61.4803 171.345 61.431C171.258 61.1969 171.468 61.086 171.641 60.9011Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M172.073 62.9961C171.986 63.0331 171.9 63.0577 171.801 63.0947C171.826 63.1193 171.838 63.1316 171.863 63.1563C171.74 63.1563 171.616 63.1563 171.493 63.1563C171.431 63.0207 171.382 62.8975 171.32 62.7743C171.604 62.5894 171.764 62.9838 172.036 62.7743C172.048 62.8482 172.061 62.9221 172.073 62.9961Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M176.664 65.8797C176.602 65.6825 176.54 65.5223 176.491 65.3498C176.54 65.3005 176.59 65.2512 176.676 65.1526C176.713 65.2265 176.762 65.3005 176.799 65.3744C176.787 65.3867 176.75 65.4237 176.688 65.51C176.861 65.51 177.009 65.51 177.157 65.51C177.133 65.5716 177.133 65.6086 177.108 65.6209C176.96 65.7071 176.812 65.7811 176.664 65.8797Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M176.269 68.8128C176.269 68.6279 176.269 68.5416 176.269 68.4677C176.38 68.4184 176.491 68.3568 176.639 68.2952C176.701 68.3691 176.775 68.4554 176.886 68.5909C176.676 68.6526 176.503 68.7142 176.269 68.8128Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M177.737 69.1084C177.947 69.0221 178.071 69.096 178.182 69.2809C178.145 69.3302 178.108 69.4041 178.071 69.4657C178.095 69.515 178.132 69.5643 178.157 69.6136C177.873 69.552 177.663 69.4288 177.737 69.1084Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M170.357 56.132C170.357 55.9842 170.357 55.8363 170.357 55.713C170.592 55.6021 170.543 55.8116 170.604 55.8979C170.691 55.9102 170.777 55.9102 170.802 55.9225C170.74 55.9842 170.641 56.0827 170.506 56.2183C170.518 56.206 170.419 56.1567 170.357 56.132Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M172.394 63.9328C172.147 63.9328 171.987 63.9328 171.826 63.9328C171.95 63.6493 171.974 63.6124 172.172 63.4768C172.246 63.6124 172.307 63.7479 172.394 63.9328Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M170.345 56.1813C170.259 56.2183 170.185 56.2553 170.098 56.2922C170.135 56.3292 170.172 56.3785 170.172 56.3662C170.123 56.4524 170.086 56.5264 170.024 56.6373C169.901 56.5264 169.827 56.4648 169.753 56.3908C169.777 56.3292 169.79 56.2676 169.827 56.2429C169.938 56.1567 170.049 56.0951 170.172 56.0088C170.222 56.0581 170.283 56.1197 170.345 56.1813Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M180.971 68.3074C180.835 68.3567 180.712 68.406 180.588 68.443C180.527 68.3198 180.477 68.2335 180.416 68.0979C180.539 68.0487 180.662 67.987 180.798 67.9377C180.86 68.0856 180.909 68.1965 180.971 68.3074Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M170.888 57.2411C170.826 57.1918 170.74 57.1302 170.629 57.0439C170.703 56.9454 170.777 56.8591 170.839 56.7852C170.888 56.8345 170.925 56.8714 170.974 56.9207C170.999 57.0686 171.036 57.2411 171.073 57.426C171.024 57.4506 170.925 57.4999 170.752 57.5862C170.802 57.4506 170.839 57.3644 170.888 57.2411Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M173.307 65.2882C173.122 65.3252 172.986 65.2636 172.9 65.0418C172.986 64.9802 173.085 64.9185 173.171 64.8569C173.258 64.8939 173.344 64.9432 173.455 64.9802C173.406 65.0788 173.356 65.1773 173.307 65.2882Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M176.281 67.3216C176.22 67.605 176.084 67.679 175.849 67.6174C175.763 67.4079 175.837 67.2723 176.034 67.186C176.109 67.223 176.183 67.26 176.281 67.3216Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M170.432 60.3957C170.185 60.2355 170.197 60.0384 170.247 59.8289C170.345 59.8289 170.432 59.8289 170.518 59.8289C170.543 60.1123 170.543 60.1616 170.432 60.3957Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M173.356 64.4133C173.406 64.3763 173.443 64.3393 173.492 64.3147C173.517 64.3024 173.554 64.29 173.628 64.2654C173.69 64.3886 173.764 64.5118 173.838 64.6597C173.764 64.6844 173.727 64.7213 173.677 64.7213C173.43 64.7337 173.344 64.6104 173.356 64.4133Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M175.726 67.9993C175.64 68.0856 175.59 68.1349 175.553 68.1719C175.454 68.1719 175.368 68.1719 175.245 68.1719C175.269 68.0486 175.269 67.9377 175.319 67.8638C175.393 67.7282 175.479 67.7406 175.566 67.8761C175.603 67.9254 175.677 67.9624 175.726 67.9993Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M178.947 69.4165C178.873 69.4534 178.799 69.4904 178.663 69.5644C178.626 69.4904 178.589 69.4041 178.552 69.3179C178.564 69.2809 178.589 69.1823 178.614 69.0837C178.861 69.1084 178.922 69.17 178.947 69.4165Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M180.415 69.4658C180.354 69.6013 180.304 69.7369 180.23 69.9217C180.119 69.8108 180.02 69.7369 179.897 69.6137C180.082 69.5274 180.206 69.4535 180.341 69.3918C180.366 69.4165 180.391 69.4411 180.415 69.4658Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M170.283 60.7163C170.481 60.7163 170.604 60.7163 170.765 60.7163C170.777 60.8026 170.777 60.9012 170.789 60.9997C170.53 61.0983 170.407 60.9997 170.283 60.7163Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M172.159 54.0862C172.406 54.1355 172.653 54.1848 172.9 54.2341C172.9 54.2957 172.9 54.345 172.9 54.3943C172.752 54.4682 172.641 54.4312 172.505 54.3203C172.406 54.2341 172.258 54.2094 172.135 54.1601C172.147 54.1478 172.159 54.1108 172.159 54.0862Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M176.047 65.2144C176.207 65.3129 176.293 65.3746 176.368 65.4239C176.368 65.5717 176.368 65.695 176.368 65.7566C176.293 65.6827 176.195 65.5841 176.047 65.4362C176.047 65.4731 176.047 65.3746 176.047 65.2144Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M171.123 61.4062C171.234 61.5418 171.308 61.6281 171.382 61.7267C171.184 61.8992 170.987 61.7513 170.839 61.8252C170.925 61.702 171.012 61.5788 171.123 61.4062Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M176.985 68.1842C176.972 68.1472 176.935 68.1103 176.948 68.0856C176.972 68.024 177.009 67.9624 177.034 67.9131C176.997 67.8391 176.96 67.7652 176.898 67.6543C177.046 67.6543 177.145 67.6543 177.293 67.6543C177.194 67.8515 177.182 68.0733 176.985 68.1842Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M173.184 62.9961C173.221 63.107 173.245 63.2179 173.282 63.3535C173.27 63.3658 173.159 63.4274 173.06 63.489C173.011 63.4397 172.974 63.4028 172.925 63.3535C172.974 63.2549 173.023 63.1563 173.073 63.0577C173.11 63.0331 173.147 63.0084 173.184 62.9961Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M174.59 66.8779C174.726 67.0751 174.825 67.223 174.948 67.3955C174.825 67.3955 174.739 67.3955 174.64 67.3955C174.664 67.2476 174.356 67.1614 174.59 66.8779Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M172.715 65.3745C172.567 65.4361 172.431 65.4854 172.258 65.547C172.258 65.3991 172.258 65.3129 172.258 65.202C172.431 65.0787 172.554 65.202 172.715 65.3745Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M171.703 54C171.801 54 171.875 54 171.986 54C171.999 54.0986 171.999 54.1972 172.011 54.3204C171.9 54.3204 171.814 54.3204 171.703 54.3204C171.703 54.2218 171.703 54.1109 171.703 54Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M170.333 61.8994C170.333 61.8008 170.333 61.7269 170.333 61.616C170.431 61.6036 170.53 61.6036 170.654 61.5913C170.654 61.7022 170.654 61.7885 170.654 61.8994C170.555 61.8994 170.444 61.8994 170.333 61.8994Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M172.567 55.4541C172.529 55.3802 172.492 55.3063 172.443 55.2323C172.48 55.1584 172.529 55.0844 172.567 55.0105C172.789 55.0721 172.826 55.22 172.764 55.4541C172.702 55.4541 172.641 55.4541 172.567 55.4541Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M170.456 58.2639C170.543 58.2639 170.654 58.2639 170.765 58.2639C170.765 58.3625 170.765 58.4488 170.765 58.5597C170.666 58.5597 170.58 58.5597 170.456 58.5597C170.456 58.4488 170.456 58.3502 170.456 58.2639Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M181.119 67.2845C181.107 66.9271 181.107 66.9271 181.255 66.7053C181.304 66.7916 181.341 66.8532 181.403 66.9764C181.366 67.038 181.279 67.1243 181.119 67.2845Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M174.862 64.7829C174.776 64.8199 174.689 64.8569 174.615 64.8939C174.603 64.8815 174.541 64.8076 174.492 64.7337C174.455 64.6844 174.405 64.6227 174.418 64.4995C174.553 64.5488 174.702 64.6104 174.837 64.6597C174.837 64.6967 174.85 64.7337 174.862 64.7829Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M170.654 63.6862C170.518 63.4151 170.444 63.2549 170.345 63.0577C170.444 63.0577 170.543 63.0454 170.654 63.0454C170.654 63.2426 170.654 63.4151 170.654 63.6862Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M175.479 67.8145C175.43 67.605 175.393 67.4695 175.331 67.2107C175.528 67.3339 175.627 67.3955 175.751 67.4818C175.664 67.5927 175.59 67.679 175.479 67.8145Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M174.825 68.8989C174.825 68.7018 174.825 68.5909 174.825 68.4307C174.911 68.4307 175.01 68.4183 175.121 68.406C175.133 68.4799 175.158 68.5416 175.146 68.5785C175.059 68.6771 174.961 68.7634 174.825 68.8989Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M173.727 65.091C173.936 65.0047 174.06 64.9554 174.22 64.8938C174.22 65.054 174.22 65.1649 174.22 65.3128C174.072 65.2512 173.949 65.1896 173.727 65.091Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M177.602 68.7018C177.676 68.6279 177.713 68.5909 177.775 68.5293C177.861 68.6649 178.071 68.7141 178.046 68.9606C177.812 69.0222 177.75 68.7881 177.602 68.7018Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M170.419 58.264C170.259 58.1284 170.148 58.0175 170.247 57.8203C170.432 57.8573 170.432 57.8573 170.567 58.0175C170.518 58.0914 170.481 58.1654 170.419 58.264Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M169.852 59.5086C169.728 59.6565 169.666 59.7428 169.568 59.866C169.481 59.7797 169.42 59.7181 169.358 59.6688C169.333 59.5579 169.494 59.4963 169.852 59.5086Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M172.826 63.834C172.665 63.8217 172.567 63.8094 172.369 63.7971C172.517 63.6368 172.591 63.5506 172.739 63.3904C172.776 63.5876 172.789 63.6738 172.826 63.834Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M170.444 55.5035C170.357 55.4542 170.271 55.4172 170.086 55.3063C170.259 55.2447 170.345 55.2201 170.469 55.1708C170.456 55.1584 170.518 55.2201 170.604 55.3063C170.518 55.4049 170.456 55.4912 170.444 55.5035Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M175.504 66.9395C175.38 66.9519 175.282 66.9642 175.158 66.9765C175.158 66.8533 175.158 66.7547 175.158 66.6438C175.393 66.6068 175.454 66.7424 175.504 66.9395Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M173.998 67.8269C174.084 67.753 174.171 67.679 174.307 67.5681C174.331 67.7283 174.356 67.8269 174.368 67.9501C174.245 67.9501 174.121 67.9501 174.01 67.9501C174.023 67.9008 174.01 67.8639 173.998 67.8269Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M177.392 67.753C177.392 67.6175 177.392 67.5312 177.392 67.4203C177.491 67.4203 177.577 67.408 177.663 67.408C177.787 67.5435 177.688 67.6791 177.392 67.753Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M179.292 70.2175C179.391 70.2175 179.502 70.2175 179.613 70.2175C179.613 70.3284 179.613 70.427 179.613 70.5379C179.366 70.5256 179.28 70.4024 179.292 70.2175Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M171.345 59.4839C171.444 59.4839 171.555 59.4839 171.666 59.4839C171.666 59.5948 171.666 59.6934 171.666 59.8043C171.419 59.8043 171.333 59.6811 171.345 59.4839Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M176.553 66.9395C176.738 67.0257 176.837 67.075 176.985 67.149C176.874 67.2599 176.787 67.3461 176.701 67.4447C176.676 67.4324 176.651 67.4077 176.627 67.3954C176.651 67.3338 176.701 67.2722 176.688 67.2229C176.676 67.1489 176.627 67.075 176.553 66.9395Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M172.468 63.415C172.394 63.3533 172.307 63.2917 172.221 63.2178C172.307 63.1438 172.394 63.0822 172.517 62.9836C172.542 63.1562 172.554 63.2548 172.566 63.3657C172.542 63.378 172.505 63.3903 172.468 63.415Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M170.518 54.4683C170.678 54.4683 170.777 54.4683 170.925 54.4683C170.851 54.6038 170.802 54.7024 170.728 54.838C170.654 54.6901 170.592 54.6038 170.518 54.4683Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M174.134 65.9537C174.084 65.9537 174.023 65.9537 173.936 65.9537C173.924 65.8551 173.924 65.7442 173.912 65.6333C174.121 65.5963 174.195 65.6949 174.245 65.8428C174.208 65.8798 174.171 65.9167 174.134 65.9537Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M176.985 69.9341C177.145 69.8355 177.231 69.7862 177.367 69.7C177.38 69.8478 177.38 69.9464 177.392 70.1189C177.244 70.0573 177.145 70.008 176.985 69.9341Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M179.786 69.4535C179.7 69.3179 179.65 69.2316 179.576 69.1084C179.737 69.1084 179.848 69.1084 180.008 69.1084C179.934 69.244 179.872 69.3302 179.786 69.4535Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M171.493 58.3008C171.579 58.461 171.616 58.5473 171.678 58.6705C171.579 58.6828 171.481 58.6828 171.32 58.6951C171.382 58.5596 171.419 58.461 171.493 58.3008Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M171.184 54.0369C171.382 54.1478 171.468 54.1971 171.592 54.2587C171.53 54.3203 171.493 54.3696 171.443 54.4066C171.345 54.4559 171.345 54.4559 171.184 54.0369Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M170.345 57.1795C170.296 57.2781 170.234 57.3767 170.185 57.4753C170.111 57.4013 170.061 57.3521 170 57.2781C170.086 57.2165 170.172 57.1549 170.259 57.0933C170.283 57.1302 170.32 57.1549 170.345 57.1795Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M180.181 66.9519C180.07 66.9519 179.971 66.9519 179.86 66.9519C179.86 66.8903 179.848 66.841 179.848 66.7671C179.959 66.7671 180.057 66.7671 180.169 66.7671C180.181 66.8287 180.181 66.8903 180.181 66.9519Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M171.16 64.5118C171.098 64.4009 171.036 64.327 170.987 64.2407C171.184 64.0682 171.246 64.2654 171.345 64.3393C171.295 64.3886 171.234 64.4379 171.16 64.5118Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M173.356 64.364C173.282 64.4256 173.233 64.4626 173.184 64.4996C173.134 64.4503 173.085 64.401 173.023 64.3394C173.097 64.2778 173.184 64.2161 173.307 64.1052C173.332 64.2285 173.344 64.3147 173.356 64.364Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M178.947 69.429C179.058 69.429 179.157 69.429 179.268 69.429C179.268 69.4906 179.28 69.5399 179.28 69.6138C179.169 69.6138 179.07 69.6138 178.959 69.6138C178.959 69.5522 178.947 69.4906 178.947 69.429Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M176.849 66.1509C176.947 66.2495 176.997 66.2988 177.059 66.3604C176.96 66.422 176.861 66.4713 176.762 66.5329C176.738 66.5083 176.725 66.4836 176.701 66.459C176.738 66.422 176.787 66.385 176.812 66.348C176.849 66.2988 176.836 66.2495 176.849 66.1509Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M171.555 60.9257C171.505 60.9257 171.431 60.9134 171.357 60.9134C171.357 60.8517 171.345 60.8024 171.345 60.7162C171.456 60.7162 171.542 60.7039 171.678 60.7039C171.629 60.7901 171.592 60.8641 171.555 60.9257Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M180.958 68.2952C181.045 68.3075 181.107 68.3075 181.23 68.3198C181.168 68.4554 181.119 68.5416 181.02 68.7388C180.983 68.5293 180.971 68.4184 180.958 68.2952Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M181.316 68.6155C181.316 68.4799 181.316 68.3444 181.316 68.1965C181.39 68.2088 181.514 68.1102 181.477 68.2827C181.452 68.3936 181.403 68.5046 181.366 68.6155C181.353 68.6155 181.341 68.6155 181.316 68.6155Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M175.812 68.8374C175.825 68.7511 175.837 68.6895 175.862 68.5786C175.985 68.6649 176.071 68.7265 176.207 68.8374C176.034 68.8374 175.936 68.8374 175.812 68.8374Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M180.909 69.1948C180.958 69.2441 181.02 69.3057 181.069 69.355C181.02 69.4043 180.971 69.4536 180.897 69.5399C180.847 69.4783 180.798 69.4043 180.749 69.3427C180.81 69.3057 180.86 69.2441 180.909 69.1948Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M176.257 67.2847C176.257 67.2354 176.269 67.1615 176.269 67.0875C176.331 67.0875 176.38 67.0752 176.466 67.0752C176.466 67.1861 176.479 67.2724 176.479 67.4079C176.392 67.3586 176.331 67.3217 176.257 67.2847Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M169 58.6582C169.136 58.5473 169.197 58.498 169.296 58.4241C169.321 58.535 169.333 58.5843 169.346 58.6582C169.247 58.6582 169.173 58.6582 169 58.6582Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M170.901 58.3625C170.987 58.3625 171.036 58.3625 171.098 58.3625C171.11 58.4242 171.123 58.4735 171.135 58.5228C170.975 58.6213 170.888 58.609 170.901 58.3625Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M169.864 62.1212C169.765 61.9363 169.716 61.85 169.667 61.7391C169.716 61.7268 169.778 61.7145 169.864 61.7021C169.864 61.8254 169.864 61.924 169.864 62.1212Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M175.368 65.2883C175.368 65.3499 175.368 65.4239 175.368 65.5102C175.269 65.5102 175.207 65.5102 175.146 65.5102C175.146 65.4485 175.146 65.3746 175.146 65.2883C175.244 65.2883 175.306 65.2883 175.368 65.2883Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M173.801 67.5435C173.801 67.6051 173.801 67.642 173.801 67.7036C173.739 67.716 173.677 67.7283 173.603 67.7406C173.591 67.6667 173.579 67.6174 173.566 67.5435C173.653 67.5435 173.727 67.5435 173.801 67.5435Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M172.801 65.9661C172.887 65.9661 172.937 65.9661 172.998 65.9661C173.011 66.0277 173.023 66.077 173.035 66.1263C172.875 66.2125 172.789 66.2125 172.801 65.9661Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M170.901 59.8042C170.901 59.8781 170.888 59.9398 170.888 60.0137C170.827 60.0137 170.777 60.026 170.703 60.026C170.691 59.9644 170.691 59.9028 170.678 59.8165C170.765 59.8165 170.827 59.8042 170.901 59.8042Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M173.134 61.5912C173.048 61.5912 172.998 61.5912 172.937 61.5912C172.924 61.5296 172.912 61.4803 172.9 61.431C173.048 61.3324 173.134 61.3324 173.134 61.5912Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M173.529 54.5176C173.578 54.6038 173.628 54.6778 173.677 54.7517C173.529 54.7887 173.406 54.8257 173.529 54.5176Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M173.764 65.6087C173.714 65.6087 173.677 65.6087 173.603 65.6087C173.603 65.5347 173.603 65.4731 173.603 65.4115C173.616 65.3992 173.64 65.3868 173.653 65.3745C173.69 65.4608 173.727 65.5347 173.764 65.6087Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M178.552 67.8884C178.601 67.9254 178.675 67.9624 178.786 68.0363C178.515 68.061 178.515 68.061 178.552 67.8884Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M174.825 66.8163C174.825 66.7547 174.825 66.7054 174.825 66.6438C174.899 66.6438 174.961 66.6438 175.158 66.6438C174.973 66.7424 174.899 66.7794 174.825 66.8163Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M176.269 67.7775C176.269 67.7775 176.269 67.7282 176.269 67.6543C176.343 67.6543 176.405 67.6543 176.466 67.6543C176.479 67.6666 176.491 67.6913 176.503 67.7036C176.417 67.7282 176.331 67.7529 176.269 67.7775Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M179.453 66.6562C179.416 66.6932 179.354 66.7548 179.305 66.8041C179.305 66.7795 179.292 66.7302 179.28 66.6562C179.366 66.6562 179.44 66.6562 179.453 66.6562Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M171.184 58.9048C171.135 58.9048 171.086 58.9048 171.024 58.9048C171.024 58.8309 171.024 58.7692 171.024 58.7076C171.036 58.6953 171.061 58.683 171.073 58.6707C171.11 58.7446 171.147 58.8309 171.184 58.9048Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M170.444 60.3589C170.506 60.3589 170.58 60.3712 170.666 60.3712C170.666 60.4452 170.654 60.5068 170.654 60.5807C170.555 60.5191 170.469 60.4575 170.395 60.4082C170.407 60.4082 170.432 60.3835 170.444 60.3589Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M172.135 61.813C172.036 61.813 171.987 61.813 171.937 61.813C171.925 61.8007 171.912 61.7883 171.9 61.776C171.987 61.7514 172.073 61.7267 172.11 61.7144C172.11 61.6651 172.122 61.7144 172.135 61.813Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M174.677 65.1527C174.615 65.1527 174.554 65.1527 174.492 65.1527C174.492 65.1403 174.492 65.1157 174.479 65.1034C174.541 65.0911 174.603 65.0787 174.665 65.0664C174.677 65.0911 174.677 65.128 174.677 65.1527Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M178.885 67.6544C178.75 67.6174 178.675 67.5928 178.614 67.5805C178.663 67.5681 178.713 67.5435 178.774 67.5312C178.787 67.5188 178.811 67.5681 178.885 67.6544Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M177.367 69.0592C177.305 69.0592 177.244 69.0592 177.182 69.0592C177.182 69.0468 177.182 69.0222 177.17 69.0099C177.231 68.9975 177.293 68.9852 177.355 68.9729C177.355 68.9975 177.367 69.0345 177.367 69.0592Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M178.638 70.6366C178.638 70.575 178.638 70.5134 178.638 70.4518C178.651 70.4518 178.675 70.4518 178.688 70.4395C178.7 70.5011 178.712 70.5627 178.737 70.6243C178.7 70.6243 178.663 70.6243 178.638 70.6366Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M169.753 56.9946C169.691 56.9946 169.629 56.9946 169.568 56.9946C169.568 56.9823 169.568 56.9576 169.555 56.9453C169.617 56.933 169.679 56.9206 169.741 56.896C169.753 56.933 169.753 56.9576 169.753 56.9946Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M170.432 59.2744C170.432 59.336 170.432 59.3976 170.432 59.4593C170.419 59.4593 170.395 59.4593 170.382 59.4716C170.37 59.41 170.358 59.3484 170.345 59.2867C170.358 59.2744 170.395 59.2744 170.432 59.2744Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M169.136 55.4542C169.136 55.3803 169.136 55.3064 169.136 55.2324C169.16 55.2324 169.173 55.2324 169.197 55.2324C169.197 55.3064 169.197 55.3803 169.197 55.4542C169.173 55.4542 169.148 55.4542 169.136 55.4542Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M171.431 61.9485C171.431 62.0101 171.431 62.0717 171.431 62.1333C171.419 62.1333 171.394 62.1333 171.382 62.1457C171.369 62.084 171.357 62.0224 171.345 61.9608C171.369 61.9608 171.406 61.9485 171.431 61.9485Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M172.838 62.7127C172.838 62.6757 172.838 62.6388 172.838 62.6018C172.85 62.6018 172.863 62.6018 172.875 62.6018C172.875 62.6388 172.875 62.6757 172.875 62.7127C172.863 62.7127 172.85 62.7127 172.838 62.7127Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M172.838 66.8533C172.838 66.8164 172.838 66.7794 172.838 66.7424C172.85 66.7424 172.863 66.7424 172.875 66.7424C172.875 66.7794 172.875 66.8164 172.875 66.8533C172.863 66.8533 172.85 66.8533 172.838 66.8533Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M181.452 66.7425C181.452 66.7055 181.452 66.6686 181.452 66.6316C181.464 66.6316 181.477 66.6316 181.489 66.6316C181.489 66.6686 181.489 66.7055 181.489 66.7425C181.477 66.7425 181.464 66.7425 181.452 66.7425Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M174.924 67.7776C174.96 67.7776 174.997 67.7776 175.034 67.7776C175.034 67.7898 175.034 67.8019 175.034 67.8141C174.997 67.8141 174.96 67.8141 174.924 67.8141C174.924 67.8019 174.924 67.7898 174.924 67.7776Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M181.525 67.9249C181.488 67.9249 181.452 67.9249 181.415 67.9249C181.415 67.9128 181.415 67.9006 181.415 67.8884C181.452 67.8884 181.488 67.8884 181.525 67.8884C181.525 67.9006 181.525 67.9128 181.525 67.9249Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M179.502 68.5416C179.477 68.5169 179.44 68.4923 179.416 68.4676C179.428 68.4553 179.44 68.443 179.453 68.4307C179.477 68.4553 179.502 68.4923 179.527 68.5169C179.515 68.5169 179.502 68.5292 179.502 68.5416Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M179.28 70.2176C179.255 70.193 179.218 70.1683 179.194 70.1437C179.206 70.1313 179.218 70.119 179.231 70.1067C179.255 70.1313 179.28 70.1683 179.305 70.193C179.292 70.193 179.28 70.2053 179.28 70.2176Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M171.826 55.4542C171.826 55.4172 171.826 55.3802 171.826 55.3433C171.839 55.3433 171.851 55.3433 171.863 55.3433C171.863 55.3802 171.863 55.4172 171.863 55.4542C171.851 55.4542 171.839 55.4542 171.826 55.4542Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M173.801 54.7024C173.837 54.7024 173.874 54.7024 173.911 54.7024C173.911 54.7146 173.911 54.7267 173.911 54.7389C173.874 54.7389 173.837 54.7389 173.801 54.7389C173.801 54.7267 173.801 54.7146 173.801 54.7024Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M170.592 54.1109C170.592 54.0739 170.592 54.037 170.592 54C170.604 54 170.617 54 170.629 54C170.629 54.037 170.629 54.0739 170.629 54.1109C170.617 54.1109 170.604 54.1109 170.592 54.1109Z"
                                                                    fill="#3fbd9a" />
                                                                <path
                                                                    d="M172.456 59.1387C172.493 59.1018 172.53 59.0648 172.567 59.0278C172.53 59.0648 172.493 59.1018 172.456 59.1387Z"
                                                                    fill="#3fbd9a" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_720_229">
                                                                    <rect width="228" height="157"
                                                                        fill="white" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="nk-stepper-pagination pt-4 gx-4 gy-2 stepper-pagination">
                                                <li class="step-prev"><button class="btn btn-dim btn-primary"
                                                        style="background: #392C70;">Back</button></li>
                                                <li class="step-next"><button class="btn btn-primary">Continue</button>
                                                </li>
                                                <li class="step-submit"><button type="submit" class="btn btn-primary"
                                                        onclick="formSubmit()">Submit</button></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="public">

                                    <div class="row ml-3 g-3 mt-1">
                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="ippis"
                                                        name="ippis" placeholder="Enter Your IPPIS" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <button type="button"
                                                class="btn btn-info btn-block search-ecs">Search</button>
                                        </div>
                                        <div id="alert-div">
                                            <div class="alert alert-info">
                                                <strong>INFO:</strong>
                                                <span>Provide Your IPPIS to view your contributions!</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
        <div class="form-note-s2 text-center pt-4">
            <p>All fields marked with asterisks are compulsory.</p>
            Already have an account? <a href="{{ route('login') }}"><strong>Sign in instead</strong></a>
        </div>
    </div>
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> --}}
    

@endsection


@push('scripts')
    
<script>
    const companyContent = document.getElementById('company_hide-content');
    const companyContent1 = document.getElementById('company_hide-content1');
    const companyContent2 = document.getElementById('company_hide-content2');
function hideCompanyFields() {

                document.getElementById('personal_address-hide').style.display = 'block';
    document.getElementById('contact_number-hide').style.display = 'block';
    //document.getElementById('company_hide').style.display = 'none';
    document.getElementById('company_name1').style.display = 'none';
    document.getElementById('company_rcnumber1').style.display = 'none';
    document.getElementById('cac_reg_year1').style.display = 'none';
    document.getElementById('company_address1').style.display = 'none';
    document.getElementById('company_state1').style.display = 'none';
    document.getElementById('company_localgovt1').style.display = 'none';
    $('#c1').html('NIN / Personal Address');
    $('#c2').html('Provide NIN / Personal Address');

    // companyContent.classList.remove('nk-stepper-step');
    companyContent2.style.display = 'none';
     companyContent1.style.display = 'block';
}

hideCompanyFields();

document.querySelectorAll('input[name="user_type"]').forEach(function(radio) {
radio.addEventListener('change', function() {
var userType = this.value;


if (userType === 'private') {

    hideCompanyFields();

} else {
    document.getElementById('contact_number-hide').style.display = 'none';
    document.getElementById('personal_address-hide').style.display = 'none';
    document.getElementById('company_hide').style.display = 'block';
    document.getElementById('company_name1').style.display = 'block';
    document.getElementById('company_rcnumber1').style.display = 'block';
    document.getElementById('cac_reg_year1').style.display = 'block';
    document.getElementById('company_address1').style.display = 'block';
    document.getElementById('company_state1').style.display = 'block';
    document.getElementById('company_localgovt1').style.display = 'block';
    $('#c1').html('Company Details');
    $('#c2').html('Provide Company Details');
    // companyContent.classList.add('nk-stepper-step');
    companyContent2.style.display = 'block';
     companyContent1.style.display = 'none';
}
// Update UserType column value based on selected radio button
// document.getElementById('UserType').value = userType;
});
});
</script>
    <script>
        // Add click event listener to each radio button
        document.querySelectorAll('input[name="user_type"]').forEach(function(radio) {
            radio.addEventListener('click', function() {
                // Remove border from all cards
                document.querySelectorAll('.card').forEach(function(card) {
                    card.classList.remove('border', 'border-primary');
                });
                // Add border to the clicked card
                this.closest('.card').classList.add('border', 'border-primary');
            });
        });
    </script>


    <script>
        function formSubmit() {
            document.getElementById("stepper-create-profile").submit();
        }

        $(document).ready(function() {
            let lga_holder = '';

            //check uploaded file size on client
            $('#certificate_of_incorporation').on('change', function() {
                let numberOfBytes = this.files[0].size;
                // Approximate to the closest prefixed unit
                const units = [
                    "B",
                    "KiB",
                    "MiB",
                    "GiB",
                    "TiB",
                    "PiB",
                    "EiB",
                    "ZiB",
                    "YiB",
                ];
                const exponent = Math.min(
                    Math.floor(Math.log(numberOfBytes) / Math.log(1024)),
                    units.length - 1,
                );
                const approx = numberOfBytes / 1024 ** exponent;
                const output =
                    exponent === 0 ?
                    `${numberOfBytes} bytes` :
                    `${approx.toFixed(3)} ${
                  units[exponent]
                }`;
                if (this.files[0].size > 5 * 1024 * 1024) {
                    $('#coi_error').removeClass('d-none')
                    $('#coi_error').html('File size is greater than 5MiB: [' + output + ']');
                } else {
                    $('#coi_error').addClass('d-none')
                }
            });

            //IF OLD OR NEW EMPLOYERR
            $('input[name="employer_status"]').change(function() {
                if ($('input[name="employer_status"]:checked').val() == 'new') {
                    $('.otp-div').addClass('d-none'); //hide otp div
                    $('.will-hide').addClass('d-none'); //hide search ecs div
                    $('#ecs_number').val('');
                    $('.step-next').show();
                } else {
                    $('.will-hide').removeClass('d-none');
                    $('.step-next').hide();
                }
            });
            $('input[name="employer_status"]').trigger('change');

            //set company name
            $('#company_name').change(function() {
                $('#cname').html($(this).val());
            })

            //FETCH LGAs FROM STATE ID
            const lUrl = "{{ route('employer.lgas') }}?state=";
            $('#company_state').change(function() {
                $.ajax({
                    url: lUrl + $(this).val(), //eUrl+$("ecs_number").val(),
                    type: "GET",
                    data: null,
                    dataType: 'json',
                }).done(function(response) {
                    $('#company_localgovt').empty();
                    var lgas = '';
                    $.each(response.data, function(a, b) {
                        lgas += '<option value="' + b.id + '" ' + (b.id = lga_holder ?
                            'selected' : '') + '>' + b.name + '</option>';
                    });
                    $('#company_localgovt').html(lgas);
                    $('#company_localgovt').trigger('change');
                });
            });

            $('#company_state').trigger('change');

            //SEARCH EMPLOYER INFO WITH ECS NUMBER
            const eUrl = "{{ route('employer.ecs') }}?ecs=";

            $('.search-ecs').click(function() {
                const ecs = $("#ecs_number").val();

                $.ajax({
                    url: eUrl + ecs, //eUrl+$("ecs_number").val(),
                    type: "GET",
                    data: null,
                    dataType: 'json',
                    beforeSend: function(xhr) {
                        $('#ecs_number').prop('disabled', true);
                        $('.search-ecs').html(
                                '<em class="icon ni ni-loader ni-animate"></em> Loading...')
                            .prop('disabled', true);
                    },

                }).done(function(response) {
                    //display message
                    $('#alert-div').empty().html('<div class="alert alert-' + (response.status ==
                            'error' ? 'danger' : response.status) + '"><strong class="me-1">' +
                        response.status.toUpperCase() + ':</strong><span>' + response.message +
                        '</span></div>');
                    $('.search-ecs').html('Search').prop('disabled', false);

                    data = response.employer;

                    if (response.status == 'success') {
                        //show opt verification
                        $('.otp-div').removeClass('d-none');

                        // Pre-fill the form fields with the retrieved data
                        //$('#branch_id').val(data.branch_id);
                        //$('#branch_id').trigger('change');
                        $('#contact_surname').val(data.contact_surname)
                            .focus() //.prop('readonly',false);
                        $('#contact_firstname').val(data.contact_firstname)
                            .focus() //.prop('readonly',false);
                        $('#contact_middlename').val(data.contact_middlename)
                            .focus() //.prop('readonly',false);
                        $('#contact_position').val(data.contact_position)
                            .focus() //.prop('readonly',true);
                        $('#company_phone').val(data.company_phone)
                            .focus() //.prop('readonly', false);
                        $('#contact_number').val(data.contact_number)
                            .focus() //.prop('readonly',false);
                        $('#company_name').val(data.company_name).focus() //.prop('readonly', true);
                        $('#business_area').val(data.business_area);
                        $('#business_area').trigger('change');
                        $('#company_rcnumber').val(data.company_rcnumber)
                            .focus() //.prop('readonly',true);
                        //$('#cac_reg_year').val(new Date(cac_reg_year).toLocaleDateString('en-US')).focus();
                        $('#cac_reg_year').val(data.cac_reg_year); //.focus();
                        //$('#cac_reg_year').datepicker({defaultDate: new Date (queryDate)});
                        $('#company_email').val(data.company_email)
                            .focus() //.prop('readonly', true);
                        $('#company_localgovt').val(data
                            .company_localgovt) //.prop('readonly', false);
                        lga_holder = data.company_localgovt;
                        $('#company_state').val(data.company_state) //.prop('readonly', false);
                        $('#company_state').trigger('change');
                        $('#company_address').val(data.company_address) //.prop('readonly', false);
                        $('#employer_id').val(data.id);
                        /*
                        $('#address').val(data.address).prop('readonly', true).focus();
                         */
                    } else {
                        //hide otp div
                        $('.otp-div').addClass('d-none');
                    }

                    $('#ecs_number').prop('disabled', false);
                });
            });

            //hide otp if employer changed until searched
            $('#ecs_number').bind('input', function() {
                $('.otp-div').addClass('d-none');
            });

            //VERIFY OTP
            const oUrl = "{{ route('employer.otp') }}";

            $('.verify-otp').click(function() {
                $.ajax({
                    url: oUrl,
                    type: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}",
                        ecs: $("#ecs_number").val(),
                        otp: $("#otp").val(),
                    },
                    dataType: 'json',
                    beforeSend: function(xhr) {
                        $('#otp').prop('disabled', true);
                        $('.verify-otp').html(
                                '<em class="icon ni ni-loader ni-animate"></em> Verifying...')
                            .prop('disabled', true);
                    },
                }).done(function(response) {
                    $('.verify-otp').html('Verify OTP').prop('disabled', false);
                    $('#otp').prop('disabled', false);

                    if (response.status == 'success') {
                        $('.otp-div').addClass('d-none'); //remove opt row
                        $('.step-next').show(); //show continue button
                    } else {
                        $('.step-next').hide(); //hide continue button
                    }
                    Swal.fire({
                        title: response.message,
                        //text: 'Verification successful!',
                        icon: response.status,
                    });
                });
            })
        });
    </script>

    <script>
        document.getElementById('company_email').addEventListener('blur', function() {
            var email = this.value.trim();
            var emailError = document.getElementById('email-error');

            // Clear previous error message
            emailError.textContent = '';

            // Check if email is empty
            if (email === '') {
                return;
            }

            // Perform AJAX request to check if email already exists
            var xhr = new XMLHttpRequest();
            xhr.open('GET', '/check-email?email=' + encodeURIComponent(email), true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        var response = JSON.parse(xhr.responseText);
                        if (response.exists) {
                            emailError.textContent = 'Email already exists';
                        }
                    } else {
                        console.error('Request failed:', xhr.status, xhr.statusText);
                    }
                }
            };
            xhr.send();
        });
    </script>
    <script>
        document.getElementById('company_phone').addEventListener('blur', function() {
            var phone = this.value.trim();
            var phoneError = document.getElementById('phone-error');

            // Clear previous error message
            phoneError.textContent = '';

            // Check if email is empty
            if (phone === '') {
                return;
            }

            // Perform AJAX request to check if email already exists
            var xhr = new XMLHttpRequest();
            xhr.open('GET', '/check-phone?phone=' + encodeURIComponent(phone), true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        var response = JSON.parse(xhr.responseText);
                        if (response.exists) {
                            phoneError.textContent = 'Phone number already exists';
                        }
                    } else {
                        console.error('Request failed:', xhr.status, xhr.statusText);
                    }
                }
            };
            xhr.send();
        });
    </script>
@endpush
