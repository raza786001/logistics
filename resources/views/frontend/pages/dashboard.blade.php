<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Dashboard</title>
        <link rel="stylesheet" href="{{  asset('assets/frontend/login_asset/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="{{  asset('assets/frontend/login_asset/css/style.css')}}" />
    </head>

    <body>
        <div class="container">
            <div class="row dashboard_inc_row">
                <div class="col-md-3">
                    <div class="dashboard_inc_shiping">
                        <a href="#" class="add_incomming_shipment">
                            <img src="{{  asset('assets/frontend/login_asset/img/plus.png')}}" />
                            <h1>Add Incoming Shipment</h1>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="dashboard_inc_shiping">
                        <a href="#" class="add_notification">
                            <img src="{{  asset('assets/frontend/login_asset/img/bell.png')}}" />
                            <h1>Notifications</h1>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="dashboard_inc_shiping">
                        <a href="#" class="myadress_bookk">
                            <img src="{{  asset('assets/frontend/login_asset/img/location.png')}}" />
                            <h1>My Address Book</h1>
                        </a>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="dashboard_inc_shiping">
                        <h2>Shopping Address</h2>
                        <h3>USA</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row mt-5 mb-5">
                <!-- DASHBOARD PROFILE OPTION START HERE -->

                <div class="col-lg-3 col-sm-3 sidenavclass">
                    <a href="#" class="menubtn"><i class="fa fa-th-large"></i> </a>
                    <div class="sideNav">
                        <i class="fa fa-times close-menu" aria-hidden="true"></i>
                        <ul>
                            <li class="my-packages"><a href="#">My Packages</a></li>
                            <li id="step2" class="shipping_cal"><a href="#">Shipping Calculator</a></li>
                            <li id="step3" class="shipping_tracking"><a href="#">Shipment Tracking</a></li>

                            <li class="drop-prnt">
                                <a href="#" class="my-wallet">My Wallet <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="subNav" id="my-wallet_step">
                                    <li class="addwallet-amount"><a href="#">Add Wallet Amount</a></li>
                                    <li class=""><a href="#">Wallet History</a></li>
                                </ul>
                            </li>
                            <li class="drop-prnt">
                                <a href="#" class="buyfor-me">Buy4Me<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="subNav" id="buyfor-me-step">
                                    <li class="addnew-req"><a href="#">Add New Request</a></li>
                                    <li class="buy4me-req"><a href="#">My Buy4me request</a></li>
                                    <li class="buy4me-history"><a href="#">Buy4me History</a></li>
                                </ul>
                            </li>
                            <li><a href="#" id="my-reward">My Rewards</a></li>
                            <li><a href="#" id="my-referrals">My Referrals</a></li>
                            <li><a href="#" id="country-guide">Country Guide</a></li>
                            <li class="drop-prnt">
                                <a href="#" class="account-setting">Account Settings <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="subNav" id="account-setting-step">
                                    <li class=""><a href="#" id="my-profile">My Profile</a></li>
                                    <li class=""><a href="#" id="payment-setting">Payment Settings</a></li>
                                    <li id="step4"><a href="#" id="shipping-preferences">Shipping Preferences</a></li>
                                    <li class=""><a href="#" id="change-password">Change Password</a></li>
                                    <li id="historypage"><a href="#" id="order-history">Order History</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- DASHBOARD PROFILE OPTION END HERE -->

                <div class="col-md-7 sideNav_content">
                    <!-- Add Incoming Shipment START here -->

                    <div class="add-adress border-0" id="add_incomming_toggle">
                        <form style="padding: 0px;">
                            <h2>Incoming Shipment</h2>
                            <div class="incomingshipin">
                                <h4>Add Document</h4>
                                <div class="fileSec">
                                    <div class="uploadfile uploadThumb">
                                        <input type="file" multiple="" name="ImagesList" class="incomingitemImage" />
                                        <a href="#" class="uploadbtn" style="background: white;"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="incomingshipin">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>Shipper Name<span class="text-danger">*</span></h4>
                                        <div class="col-lg-12">
                                            <input id="ShipperName" maxlength="100" name="ShipperName" placeholder="Shipper Name" type="text" value="" />
                                            <span class="field-validation-valid text-danger"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Courier Name<span class="text-danger">*</span></h4>
                                        <div class="col-lg-12">
                                            <input id="CourierName" maxlength="100" name="CourierName" placeholder="Courier Name" type="text" value="" />
                                            <span class="field-validation-valid text-danger"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="incomingshipin">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>Tracking Number<span class="text-danger">*</span></h4>
                                        <div class="col-lg-12">
                                            <input id="CourierTrackingNumber" maxlength="100" name="CourierTrackingNumber" placeholder="Tracking Number" type="text" value="" />
                                            <span class="field-validation-valid text-danger" data-valmsg-for="CourierTrackingNumber" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Value<span class="text-danger">*</span></h4>
                                        <div class="col-md-12">
                                            <div class="shipmentType">
                                                <div class="select" style="background: none;">
                                                    <select id="Currency" name="Currency">
                                                        <option value="USD">USD</option>
                                                    </select>
                                                </div>
                                                <input class="numberRestriction" id="TotalPrice" placeholder="Value" style="position: absolute; width: 54%;" type="text" value="0" />
                                                <span class="field-validation-valid text-danger"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="incomingshipin">
                                <h4>Expected Warehouse to Receive Shipment<span class="text-danger">*</span></h4>
                                <div class="col-lg-12">
                                    <div class="checkBx">
                                        <div>
                                            <input class="styled-checkbox" id="onea0D0N00000pHNS0UAO" name="WareHouseAddressId" type="radio" value="a0D0N00000pHNS0UAO" />
                                            <label for="onea0D0N00000pHNS0UAO">USA Hub </label>
                                        </div>
                                        <span class="field-validation-valid text-danger"></span>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="UploadedFiles" value="" id="UploadedFiles" />
                            <div>
                                <div class="col-md-6">
                                    <input type="submit" value="Submit" class="margtp" />
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Add Incoming Shipment end here -->

                    <!--  Notifications START  here -->

                    <div class="notification_row">
                        <div style="margin-left: 73%;" id="deleteall">
                            &nbsp;&nbsp;&nbsp;&nbsp; <a style="font-size: 14px; color: green;" href="#">Read All</a> &nbsp;&nbsp; | &nbsp;&nbsp;
                            <a style="font-size: 14px; color: red;" href="#">Delete All</a>
                        </div>

                        <div class="row" id="divnot">
                            <article class="notificationBlock" id="dv_a0F5p00001DKrKjEAL">
                                <img src="{{  asset('assets/frontend/login_asset/img/bell.png')}}" alt="" />
                                <p>Your Buy4me Request is Received Sucessfully.</p>
                                <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </article>
                            <article class="notificationBlock" id="dv_a0F5p00001DKoekEAD">
                                <img src="{{  asset('assets/frontend/login_asset/img/bell.png')}}" alt="" />
                                <p>Your account Settings have been updated</p>
                                <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </article>
                        </div>
                    </div>

                    <!--  Notifications END  here -->

                    <!-- My Address Book START HERE -->

                    <div class="add-adress" id="myadresbook_toogle">
                        <h2>
                            My Address Book <a href="#"><i class="fa fa-plus" id="mybooking_details"></i></a>
                        </h2>
                        <div class="">
                            <article class="adress-block">
                                <h4 class="text-capitalize">Default (Default)</h4>
                                <p>Sulimanyah, Jeddah, Jeddah, Western Area, Saudi Arabia</p>
                                <a href="#" class="cust-btn" id="edit-address">Edit Address</a>
                            </article>
                        </div>
                    </div>

                    <!-- My Address Book END HERE -->

                    <!-- My Address Book FOAM START HERE -->

                    <div class="add-adress" id="mybooking_details_toggle">
                        <h2>Add Address</h2>
                        <form>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 form-group">
                                    <label>Nickname<span class="text-danger">*</span></label>
                                    <input id="Nickname" name="Nickname" placeholder="Nickname" type="text" value="" />
                                    <span class="field-validation-valid text-danger"></span>
                                </div>
                                <div class="col-lg-6 col-sm-6 form-group">
                                    <label>Email<span class="text-danger">*</span></label>
                                    <input data-val="true" data-val-email="Email is incorrect" id="Email" name="Email" placeholder="Email" type="email" value="" />
                                    <span class="field-validation-valid text-danger"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 form-group">
                                    <label>Address Line 1<span class="text-danger">*</span></label>
                                    <input data-val="true" id="Address" placeholder="Address Line 1" type="text" value="" />
                                    <span class="field-validation-valid text-danger"></span>
                                </div>
                                <div class="col-lg-6 col-sm-6 form-group">
                                    <label>Address Line 2</label>
                                    <input id="Address2" maxlength="100" name="Address2" placeholder="Address Line 2" type="text" value="" />
                                    <span class="field-validation-valid text-danger"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 form-group">
                                    <label>City<span class="text-danger">*</span></label>
                                    <input data-val="true" id="City" name="City" placeholder="City" type="text" value="" />
                                    <span class="field-validation-valid text-danger"></span>
                                </div>
                                <div class="col-lg-6 col-sm-6 form-group">
                                    <label>State or Province</label>
                                    <input data-val="true" id="State" name="State" placeholder="State" type="text" value="" />
                                    <span class="field-validation-valid text-danger"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 form-group">
                                    <label>Country<span class="text-danger">*</span></label>
                                    <div class="select">
                                        <select data-val="true" id="Country" name="Country" title="Select Country">
                                            <option value="Pakistan">Pakistan</option>
                                        </select>
                                        <span class="field-validation-valid text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 form-group">
                                    <label>Postal Code<span class="text-danger" id="postalCodeAsteric" style="display: none;">*</span></label>
                                    <input id="PostalCode" name="PostalCode" placeholder="Postal Code" type="text" value="" />
                                    <span class="field-validation-valid text-danger"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 form-group phonecodegroup">
                                    <label>Phone<span class="text-danger">*</span></label>
                                    <div dir="ltr">
                                        <div class="intl-tel-input allow-dropdown separate-dial-code iti-sdc-3">
                                            <input class="pncode phoneRestriction phoneerror" placeholder="Phone" type="tel" value="" autocomplete="off" />
                                        </div>
                                        <span class="field-validation-valid text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 form-group mobilecodegroup">
                                    <label>Mobile</label>
                                    <div class="intl-tel-input allow-dropdown separate-dial-code iti-sdc-3">
                                        <input class="pncode phoneRestriction mobileerror" placeholder="Mobile" type="tel" value="" autocomplete="off" />
                                    </div>
                                    <span class="field-validation-valid text-danger"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 form-group">
                                    <input type="submit" value="Add Address" />
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- My Address Book FOAM END HERE -->

                    <!-- Update Address START HERE -->

                    <div class="add-adress" id="edit-address-toggle">
                        <h2>Update Address</h2>
                        <form>
                            <input id="Id" name="Id" type="hidden" value="a025p0000260LHiAAM" /><input id="AddressNumber" name="AddressNumber" type="hidden" value="0015p00005onUszAAE_null" />
                            <input id="Type" name="Type" type="hidden" value="Primary" /> <input type="hidden" value="" id="CountryCodePhone" name="CountryCodePhone" />
                            <input type="hidden" value="" id="CountryCodeMobile" name="CountryCodeMobile" />
                            <div class="row">
                                <div class="col-lg-12"></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 form-group">
                                    <label>Nickname<span class="text-danger">*</span></label>
                                    <input id="Nickname" name="Nickname" placeholder="Nickname" type="text" value="Default" />
                                    <span class="field-validation-valid text-danger"></span>
                                </div>
                                <div class="col-lg-6 col-sm-6 form-group">
                                    <label>Email<span class="text-danger">*</span></label>
                                    <input data-val="true" data-val-email="Email is incorrect" id="Email" name="Email" placeholder="Email" type="email" value="aalsaery@kau.edu.sa" />
                                    <span class="field-validation-valid text-danger"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 form-group">
                                    <label>Address Line 1<span class="text-danger">*</span></label>
                                    <input data-val="true" id="Address" placeholder="Address Line 1" type="text" value="Sulimanyah" />
                                    <span class="field-validation-valid text-danger"></span>
                                </div>
                                <div class="col-lg-6 col-sm-6 form-group">
                                    <label>Address Line 2</label>
                                    <input id="Address2" maxlength="100" name="Address2" placeholder="Address Line 2" type="text" value="Jeddah" />
                                    <span class="field-validation-valid text-danger"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 form-group">
                                    <label>City<span class="text-danger">*</span></label>
                                    <input data-val="true" id="City" name="City" placeholder="City" type="text" value="Jeddah" />
                                    <span class="field-validation-valid text-danger"></span>
                                </div>
                                <div class="col-lg-6 col-sm-6 form-group">
                                    <label>State or Province</label>
                                    <input data-val="true" id="State" name="State" placeholder="State" type="text" value="Western Area" />
                                    <span class="field-validation-valid text-danger"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 form-group">
                                    <label>Country<span class="text-danger">*</span></label>
                                    <div class="select">
                                        <select id="Country" name="Country" title="Select Country">
                                            <option value="Afghanistan">Afghanistan</option>
                                        </select>
                                        <span class="field-validation-valid text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 form-group">
                                    <label>Postal Code<span class="text-danger" id="postalCodeAsteric" style="display: none;">*</span></label>
                                    <input id="PostalCode" name="PostalCode" placeholder="Postal Code" type="text" value="11223" />
                                    <span class="field-validation-valid text-danger"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 form-group phonecodegroup">
                                    <label>Phone<span class="text-danger">*</span></label>
                                    <div dir="ltr">
                                        <div class="intl-tel-input allow-dropdown separate-dial-code iti-sdc-4">
                                            <input class="pncode phoneRestriction phoneerror" id="Phone" maxlength="23" name="Phone" placeholder="Phone" type="tel" value="+966-540009413" autocomplete="off" />
                                        </div>
                                        <span class="field-validation-valid text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 form-group mobilecodegroup">
                                    <label>Mobile</label>
                                    <div class="intl-tel-input allow-dropdown separate-dial-code iti-sdc-4">
                                        <input class="pncode phoneRestriction mobileerror" id="Mobile" name="Mobile" placeholder="Mobile" type="tel" value="+966-540009413" autocomplete="off" />
                                    </div>
                                    <span class="field-validation-valid text-danger"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 form-group">
                                    <input type="submit" value="Update Address" />
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Update Address END HERE -->

                    <!-- My Packages START HERE -->

                    <div class="my-packages-toggle">
                        <div class="head2">
                            <div class="row">
                                <div class="col-lg-12 txt-center">
                                    <a id="step5" href="#" class="ReadyToShip status-menu cust-btn green-btn">
                                        Ready to Ship
                                    </a>
                                    <a id="step7" href="#" class="ActionRequired status-menu cust-btn">
                                        Action Required
                                    </a>
                                    <a id="step6" href="#" class="InReview status-menu cust-btn">
                                        In Review
                                    </a>
                                    <a href="#" class="All status-menu cust-btn">
                                        All Orders
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="head2 drpaddressbook">
                            <div class="row">
                                <div class="col-md-12 addDropdown">
                                    <label>Shipping to:</label>
                                    <div class="field">
                                        <div class="select">
                                            <select id="addressBookId" name="AddressBookID">
                                                <option selected="selected" value="a025p0000260LHiAAM">Default</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="cart-wrap" id="dvorderparent">
                            <div class="col-md-12 text-center">
                                <h2 class="norecd">No result found!</h2>
                            </div>
                        </div>
                    </div>

                    <!-- My Packages END HERE -->

                    <!-- Shipping Calculator START HERE -->

                    <div class="shipmentCal" id="shipmentCal-toggle">
                        <form id="ShipmentCalculatorForm">
                            <div class="incomingshipin border-0 custCol">
                                <div class="col-md-12">
                                    <p>
                                        <b>Note</b>: This is the country shipping rate only. Other fees such as duties, taxes, and last mile delivery may be applicable.
                                        <u>
                                            <b> <a href="#" style="color: green;">click here</a></b>
                                        </u>
                                        for more info
                                    </p>
                                    <p></p>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label>Where is your package Coming From? <span class="red">*</span></label>
                                            <div class="select">
                                                <select id="FromCountry" name="SelectedFromAddress" tabindex="1">
                                                    <option selected="selected" value="US">United States</option>
                                                    <option value="UK">United Kingdom</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <label>Where is your package going? <span class="red">*</span></label>
                                            <div class="select">
                                                <select data-val="true" id="SelectedToAddress" name="SelectedToAddress" tabindex="4" title="Select Country">
                                                    <option value="AF">Afghanistan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="mainDiv" class="col-md-12 mt-3">
                                    <div class="row newRow">
                                        <div class="col-md-12">
                                            <label class="mb-1">Please tell us about what you'll be shipping:</label>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label class="mb-2">Weight<span style="color: red;">*</span></label>
                                                    <div class="field">
                                                        <input type="number" name="Dimensions[0].Weight" step="0.001" min="0.001" max="1000" required="" style="width: 86%;" />
                                                        <span>KG</span>
                                                    </div>
                                                </div>

                                                <div class="row" id="divaddDimention">
                                                    <div class="col-md-12">
                                                        <br />
                                                        <a href="#" class="addnewaddress mt-4 addPck" style="width: auto;"> <i class="fa fa-plus-circle"></i> <span>Add Dimensions </span> </a>
                                                        <br />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 mt-3" id="divchargeableweight">
                                    <div class="field">
                                        <label class="mb-3">
                                            Chargeable Weight&nbsp;&nbsp;
                                            <i class="fa fa-question-circle tip" aria-hidden="true"> </i>
                                        </label>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="background: white; width: 50%;" id="lbchageableweight" />
                                        <div class="select"></div>
                                    </div>
                                </div>

                                <div class="col-md-12 mt-3 text-center">
                                    <button type="button" class="cust-btn green-btn">Calculate</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Shipping Calculator END HERE -->

                    <!-- ShipmentTracking START HERE -->

                    <div class="shipmentCal" id="shipmentTrac-toggle">
                        <div class="incomingshipin border-0">
                            <div class="head2">
                                <div class="row">
                                    <div class="col-md-12 addDropdown">
                                        <label>SEARCH</label>
                                        <div class="field">
                                            <input type="text" id="TrackingNumber" name="" placeholder="Tracking #" />
                                        </div>
                                        <a href="#" class="cust-btn green-btn">SEARCH</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 shiptrck">
                                <div class="scroll-container shipAccor">
                                    <div id="accordion2" class="address-accor panel-group">
                                        <div class="row joinShiment">
                                            <div class="col-md-12">
                                                <div class="col-md-12" style="font-weight: 700; margin-right: 20px; font-size: 14px; color: red;" id="NotFound">No result found.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ShipmentTracking END HERE -->

                    <!-- Add Wallet Amount START HERE -->

                    <div id="add-wallet-toggle">
                        <div class="head2">
                            <div class="row">
                                <div class="col-lg-12 txt-center" style="color: #01af40;">
                                    <span style="color: gray;"> Current Balance</span><br />
                                    <h4>USD 0.00</h4>
                                </div>
                            </div>
                        </div>

                        <div class="head2">
                            <span style="color: gray;"> Other Amount</span>
                            <div class="row">
                                <div class="col-md-12 proCodeRow" id="divpromocode">
                                    <div class="row no-gutters">
                                        <div class="col-md-12 dollar"><input type="number" id="otheramount" placeholder="Enter Other Amount" /></div>
                                    </div>
                                </div>
                                <input type="hidden" id="hdnbankpromo" value="" />
                            </div>
                            <div class="row">
                                <div class="col-md-12" id="button-container">
                                    <a id="submitBtn" style="cursor: pointer;" class="cust-btn green-btn mt-4">Pay</a>
                                    <a id="btnhistory" href="#" style="cursor: pointer;" class="cust-btn green-btn mt-4">Wallet History</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Add Wallet Amount END HERE -->

                    <!-- Add New Request START HERE -->

                    <div class="add-adress border-0" id="addnew-req-toggle">
                        <form action="{{route('sub.scription')}}" method="post" id="Buy4meRequestForm" style="padding: 0px;">
                           @csrf
                            <input id="Buy4MeRequestId" name="Buy4MeRequestId" type="hidden" value="" />
                            <h2>New Request Form</h2>
                            <p>
                                Please enter the items you want us to buy on your behalf. Enter each product separately and click buy4me to complete it. Please fill in all information to the best of your knowledge. We will finally verify
                                your order before placing the order with the merchant/supplier .
                            </p>
                            <div class="row">
                                <div class="col-lg-12"></div>
                            </div>
                            <div class="Buy4meRequest">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>Product name<span class="text-danger">*</span></h4>
                                        <div class="col-lg-12">
                                            <input id="ProductName" maxlength="100" name="ProductName" placeholder="Product name" type="text" value="" />
                                            <span class="field-validation-valid text-danger" id="ProductNameValidator"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h4>URL<span class="text-danger">*</span></h4>
                                        <div class="col-lg-12">
                                            <input id="ProductURL" maxlength="200" name="ProductURL" placeholder="URL" type="text" value="" />
                                            <span class="field-validation-valid text-danger" id="ProductURLValidator"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Buy4meRequest">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>Quantity<span class="text-danger">*</span></h4>
                                        <div class="col-lg-12">
                                            <input id="Quantity" maxlength="100" name="Quantity" placeholder="Quantity" type="text" value="" />
                                            <span class="field-validation-valid text-danger" id="QuantityValidator"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Unit price in $<span class="text-danger">*</span></h4>
                                        <div class="col-lg-12">
                                            <input id="ProductValue" maxlength="100" name="ProductValue" placeholder="Unit price in $" type="text" value="" />
                                            <span class="field-validation-valid text-danger" id="ProductValueValidator"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Buy4meRequest">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>Part number/Order Number</h4>
                                        <div class="col-lg-12">
                                            <input id="OrderNumber" maxlength="100" name="OrderNumber" placeholder="Part number/Order Number" type="text" value="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Size</h4>
                                        <div class="col-lg-12">
                                            <input id="ProductSize" maxlength="100" name="ProductSize" placeholder="Size" type="text" value="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Buy4meRequest">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>Color</h4>
                                        <div class="col-lg-12">
                                            <input id="ProductColor" maxlength="100" name="ProductColor" placeholder="Color" type="text" value="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Merchant/supplier</h4>
                                        <div class="col-lg-12">
                                            <input id="MerchantName" maxlength="100" name="MerchantName" placeholder="Merchant/supplier" type="text" value="" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="Buy4meRequest">
                                <h4>Comment</h4>
                                <div class="col-lg-12">
                                    <textarea cols="20" id="CustomerComment" maxlength="100" name="CustomerComment" placeholder="Comment" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="Buy4meRequest peddingleftright">
                                <div class="row prefen peddingleftright">
                                    <div class="col-md-6">
                                        <div class="chek">
                                            <label class="custom-chck">
                                                <input class="styled-checkbox" id="Isbuy4me" name="Isbuy4me" type="checkbox" value="true" />
                                                <input name="Isbuy4me" type="hidden" value="false" />
                                                <span class="checkmark" style="top: 0px;"></span>
                                            </label>
                                            <div class="content">
                                                <h5 style="margin-left: 80%;">Buy4Me</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="chek">
                                            <label class="custom-chck">
                                                <input class="styled-checkbox" id="IsPickup" name="IsPickup" type="checkbox" value="true" />
                                                <input name="IsPickup" type="hidden" value="false" />
                                                <span class="checkmark" style="top: 0px;"></span>
                                            </label>
                                            <div class="content">
                                                <h5 style="margin-left: 80%;">Collect4Me</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="field-validation-valid text-danger"></span>
                                </div>
                            </div>
                            <h3>Buy it for me</h3>
                            <p>Please buy and pay for me.(Please make sure to submit the suitable merchant-url within that form).</p>
                            <h3>Collect It For Me</h3>
                            <p>Please Collect an item on my behalf. (please enter the detailed pickup address).</p>
                            <p><strong>Note: </strong>Select both, if you with us to buy and collect the item.</p>
                            <div>
                                <div class="col-md-12 text-center">
                                    <input type="submit" value="Submit" class="margtp" />
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Add New Request END HERE -->

                    <!-- My Buy4me request START HERE -->

                    <div id="buy4me-req-toggle">
                        <div class="head2">
                            <div class="row">
                                <div class="col-lg-12 txt-center">
                                    <a id="step5" href="#" class="ReadyToPay status-menu cust-btn green-btn">
                                        Ready To Pay
                                    </a>
                                    <a id="step7" href="#" class="ActionRequired status-menu cust-btn">
                                        Action Required
                                    </a>
                                    <a id="step6" href="#" class="InReview status-menu cust-btn">
                                        In Review
                                        <span>1</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 text-center">
                            <h2 class="norecd">No result found!</h2>
                        </div>
                    </div>

                    <!-- My Buy4me request END HERE -->

                    <!-- Buy4me History START HERE -->

                    <div class="shipmentCal" id="buy4me-history-toggle">
                        <div class="incomingshipin border-0">
                            <div class="col-lg-12 shiptrck">
                                <div class="scroll-container shipAccor" style="height: 900px;">
                                    <div id="accordion2" class="address-accor panel-group">
                                        <div class="row joinShiment">
                                            <div class="col-md-12">
                                                <div class="cart-blk brdr mb-1 margintop20 col-lg-12 shipTrack">
                                                    <div class="card">
                                                        <div class="card-header clearfix" role="tab" id="headingOne">
                                                            <h5 class="mb-0">
                                                                <a class="collapsed" href="#">
                                                                    Order Id BUY-0005291
                                                                </a>
                                                            </h5>
                                                        </div>
                                                        <div id="accor-1" class="collapse show" role="tabpanel">
                                                            <div class="card-block">
                                                                <div class="row joinShiment justify-content-center">
                                                                    <div class="cart-blk brdr col-lg-10">
                                                                        <div class="cart-head clearfix">
                                                                            <h3 class="ellipsis" title="F2f Eminem">F2f Eminem</h3>
                                                                            <div class="links"></div>
                                                                        </div>
                                                                        <div class="col-md-12 br-top">
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="table-parent">
                                                                                        <table class="table table-responsive">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td><strong>Value</strong></td>
                                                                                                    <td>20.00</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td><strong>Color</strong></td>
                                                                                                    <td>blue</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td><strong>Status</strong></td>
                                                                                                    <td>Canceled</td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="table-parent">
                                                                                        <table class="table table-responsive">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td><strong>Quantity</strong></td>
                                                                                                    <td>2</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td><strong>Size</strong></td>
                                                                                                    <td>M</td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Buy4me History END HERE -->

                    <!-- MY REWARD START HERE -->
                    <div class="head2" id="my-reward-toogle">
                        <div class="row">
                            <div class="col-lg-12 txt-center" style="color: #01af40;">
                                <img src="{{  asset('assets/frontend/login_asset/img/ic_Rewads.png')}}" style="width: 25%;" /><br />
                                <span style="color: gray;"> Total Reward Points</span><br />
                                <h4>0</h4>
                                <span style="color: gray;">1 point equals to 0.06 USD. You need to have minimum 200 points to start redeeming.</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 card-header-dissable" id="button-container">
                                <a id="submitBtn" style="text-align: center; background: gray;" class="cust-btn green-btn mt-4 disabled" disabled="">Add to Wallet</a>
                            </div>
                        </div>
                    </div>

                    <!-- MY REWARD END HERE -->

                    <!-- My Referrals START HERE -->

                    <div class="myreferrals-toogle">
                        <div class="col-lg-12 txt-center profile">
                            <div class="dpSec">
                                <p>Get Free Credits By Following 3 Simple Steps</p>
                            </div>
                            <div class="row mb-4 notiBox">
                                <div class="col-md-4 text-center">
                                    <div class="brdr boxshadow" style="background-color: white; border-radius: 14px;">
                                        <a>
                                            <figure>
                                                <img src="{{  asset('assets/frontend/login_asset/img/Share.png')}}" alt="" style="width: 50%;" />
                                                <span class="count" id="notcount">
                                                    1
                                                </span>
                                            </figure>
                                            <p></p>
                                        </a>
                                    </div>
                                    <p class="mt-4">Copy and share your referral code</p>
                                </div>
                                <div class="col-md-4 text-center">
                                    <div class="brdr boxshadow" style="background-color: white; border-radius: 14px;">
                                        <a>
                                            <figure>
                                                <img src="{{  asset('assets/frontend/login_asset/img/friend-all.png')}}" alt="" style="width: 50%;" />
                                                <span class="count" id="notcount">
                                                    2
                                                </span>
                                            </figure>
                                            <p></p>
                                        </a>
                                    </div>
                                    <p class="mt-4">Your friends get $5 on registration</p>
                                </div>
                                <div class="col-md-4 text-center">
                                    <div class="brdr boxshadow" style="background-color: white; border-radius: 14px;">
                                        <a>
                                            <figure>
                                                <img src="{{  asset('assets/frontend/login_asset/img/customer-all.png')}}" alt="" style="width: 50%;" />
                                                <span class="count" id="notcount">
                                                    3
                                                </span>
                                            </figure>
                                            <p></p>
                                        </a>
                                    </div>
                                    <p class="mt-4"></p>
                                    <p>You get rewarded $5 on their 1<sup>st</sup>order</p>
                                    <p></p>
                                </div>
                            </div>
                            <div class="statusSec">
                                <p><span> Your Referrals </span>0</p>
                                <p class="border-0"><span>Your Rewards</span> $ 0</p>
                            </div>
                        </div>
                        <br />
                        <div class="row mb-12 notiBox ml-5 mr-5">
                            <div class="col-md-12 text-center" id="step8">
                                <div class="brdr boxshadow profile" style="border-radius: 14px;">
                                    <div class="dpSec">
                                        <p class="mt-2">Give $5 &amp; Get $5!</p>
                                    </div>
                                    <div class="col-lg-12 txt-center boxshadow" style="color: #01af40; background-color: #eeeee4; width: 50%; margin-left: 25%;">
                                        <div class="col-md-12 text-center">
                                            <p class="mt-2 mb-1">Share your code</p>
                                            B1063031
                                            <br />
                                        </div>
                                    </div>
                                    <div class="mt-2 mb-2">
                                        <button class="copy-btn" style="position: inherit; font-size: 27px;"><i class="fa fa-clone mr-2" aria-hidden="true"></i></button>
                                        <a href="#" target="_blank">
                                            <i class="fa fa-whatsapp fa-2x greenColr mr-2" aria-hidden="true"></i>
                                        </a>
                                        <i class="fa fa-facebook-official bluecolor fa-2x mr-2" style="cursor: pointer;" id="requestsBtn" aria-hidden="true"></i>
                                        <a class="twitter-share-button" href="#" data-size="large" target="_blank">
                                            <i class="fa fa-twitter fa-2x mr-2" style="color: #1da1f2;" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" style="color: black;">
                                            <i class="fa fa-envelope fa-2x mr-2" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-2 profile">
                            <div class="dpSec">
                                <p>There are no limits to the number of referrals. Start sharing happiness with your friends now. T&amp;C Apply</p>
                            </div>
                        </div>
                    </div>

                    <!-- My Referrals END HERE -->

                    <!-- Country Guide START HERE -->

                    <div class="shipmentCal add-adress" id="country-guide-toggle">
                        <div class="incomingshipin border-0">
                            <div class="">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-lg-6" id="CountryDropDown">
                                            <h4 class="pl-0 pt-0 pb-3">Select Country</h4>
                                            <div class="select">
                                                <select id="contryGuideSelect" name="contryGuideSelect">
                                                    <option value="">Please Select</option>
                                                    <option value="Algeria">Algeria</option>

                                                    <option selected="selected" value="United Arab Emirates">United Arab Emirates</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 flag-parent my-auto sa region text-right">
                                            <label class="sa regionLabel pb-2" id="CurrencyLabel">UAE Dirham (AED)</label>
                                            <img id="CountryGuideImage" class="flag-wrap regionFlag sa" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="CountryGuideContent">
                                <div class="col-lg-12 term prohab">
                                    <h3>United Arab Emirates Import Prohibitions &amp; Shipping Guidelines</h3>
                                    <p>All shipments with a value over $300 will require a Formal Clearance Process, hence, UAE Customs may require additional documentation from consignee.</p>
                                    <p>
                                        Additional clearance charges, approvals and processing time maybe applicable. Additional information can be found at the
                                        <a href="#" target="_blank"> United Arab Emirates Customs Website</a>.
                                    </p>
                                    <h4>These are some of the items the United Arab Emirates government prohibits:</h4>
                                    <br />
                                    <ul>
                                        <li>All kinds of Narcotic drugs (Hashish, Cocaine, Heroin, Poppy Seeds, Hallucination Pills, etc..).</li>
                                        <li>Goods intended to be imported from boycotted countries.</li>
                                        <li>Goods from Israeli origin or bearing Israeli trademarks or logos</li>
                                        <li>Crude Ivory and Rhinoceros horn.</li>
                                        <li>Gambling tools and machineries.</li>
                                        <li>Three layers fishing nets.</li>
                                        <li>Original engravings, prints, lithographs, sculpture and statues in any material.</li>
                                        <li>Used, reconditioned and inlaid tires.</li>
                                        <li>Radiation polluted substances.</li>
                                        <li>
                                            Printed publications, oil paintings, photographs, pictures, cards, books, magazines stony sculptures and mannequins which contradict Islamic teachings, decencies, or deliberately implying
                                            immorality or turmoil.
                                        </li>
                                        <li>Any other goods, the importation of which is prohibited under the authority of U.A.E. customs laws or any other laws in the country.</li>
                                        <li>Forged and duplicate currency.</li>
                                        <li>Cooked and home-made foods.</li>
                                    </ul>
                                    <br />
                                    <p><strong>ANIMALS / PLANTS</strong></p>
                                    <ul>
                                        <li>Live Animals or Insects</li>
                                        <li>Animal Carcasses</li>
                                        <li>Furs</li>
                                        <li>Live plants and plant materials</li>
                                        <li>Plant Seeds</li>
                                    </ul>
                                    <br />
                                    <p><strong>HIGH VALUE ITEMS</strong></p>
                                    <ul>
                                        <li>Antiques (breakable and/or fragile)</li>
                                        <li>Precious metals and stones</li>
                                        <li>Jewelry</li>
                                        <li>Bullion</li>
                                    </ul>
                                    <br />
                                    <p>
                                        <strong>UNIDENTIFIABLE ITEMS</strong><br />
                                        Including but not limited to items listed below without manufacturer label
                                    </p>
                                    <ul>
                                        <li>Substances or chemicals</li>
                                        <li>Liquids</li>
                                        <li>Non-prescription medications</li>
                                        <li>Vitamins or supplements</li>
                                        <li>Food items</li>
                                    </ul>
                                    <br />
                                    <p><strong>HAZARDOUS MATERIALS</strong></p>
                                    <ul>
                                        <li>Asbestos</li>
                                        <li>Wastes as defined in the IATA regulation</li>
                                        <li>Garbage</li>
                                        <li>Disinterred human remains</li>
                                        <li>Combustible material</li>
                                        <li>Lithium Batteries*</li>
                                        <li>Human remains, including ashes</li>
                                        <li>Embryos</li>
                                    </ul>
                                    <br />
                                    <p><strong>MONETARY ITEMS</strong></p>
                                    <ul>
                                        <li>Cash/Currency</li>
                                        <li>Lottery Tickets or any gambling devices that are prohibited by law</li>
                                    </ul>
                                    <br />
                                    <p><strong>MILITARY ITEMS</strong></p>
                                    <ul>
                                        <li>Mounted or non-mounted optics (scopes)</li>
                                        <li>Night vision and related items</li>
                                        <li>Infrared/Thermal imagers/cameras</li>
                                        <li>Range finders</li>
                                        <li>Law enforcement tactical gear or training apparatus</li>
                                        <li>Military tactical gear or training apparatus</li>
                                        <li>Training equipment</li>
                                        <li>Law enforcement uniforms, IDs and badges (genuine or imitations)</li>
                                        <li>Military uniforms, IDs and badges (genuine or imitations)</li>
                                    </ul>
                                    <br />
                                    <p><strong>WEAPONS</strong></p>
                                    <ul>
                                        <li>Firearms, ammunition or firearm parts and accessories</li>
                                        <li>Ammunition</li>
                                        <li>Firearm parts and accessories (Including Holsters)</li>
                                        <li>Stun Guns</li>
                                        <li>Tasers</li>
                                        <li>Pepper Spray</li>
                                        <li>Hunting Knives over 5 in Length</li>
                                        <li>Swords &amp; Bayonets</li>
                                        <li>Air Soft Guns</li>
                                        <li>BB Guns</li>
                                    </ul>
                                    <br />
                                    <p><strong>ALCOHOL, DRUGS, AND TOBACCO PRODUCTS</strong></p>
                                    <ul>
                                        <li>Illegal Narcotics</li>
                                        <li>Prescription Drugs</li>
                                        <li>Alcohol</li>
                                        <li>Electronic cigarette cartridges</li>
                                        <li>Cigarettes</li>
                                        <li>Cigars</li>
                                    </ul>
                                    <br />
                                    <p></p>
                                    <p class="mt-4 mb-4">For an Extensive List please check below Links depending on the Service Provider of your choice;</p>
                                    <ul class="no-bulit">
                                        <li>
                                            <p><a href="#" target="_blank">DHL import restrictions for United Arab Emirates</a></p>
                                        </li>
                                        <li>
                                            <p><a href="#" target="_blank">FedEx import restrictions for United Arab Emirates</a></p>
                                        </li>
                                        <li>
                                            <p><a href="#" target="_blank">UPS import restrictions for United Arab Emirates</a></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Country Guide END HERE -->

                    <!-- My Profile START HERE -->

                    <div id="my-profile-toggle">
                        <div class="col-lg-12">
                            <div class="profile">
                                <div class="dpSec">
                                    <img id="profileImage" class="img-thumbnail" style="height: 100px; width: 100px; border-radius: 50%;" src="{{  asset('assets/frontend/login_asset/img/default.jpg')}}" />
                                    <p>Abdul - BOX1063031</p>
                                </div>
                                <div class="statusSec">
                                    <p>
                                        0
                                        <span>
                                            Shipping Requests<br />
                                            (In-Progress)
                                        </span>
                                    </p>
                                    <p class="border-0">0 <span>Shipping Orders</span></p>
                                </div>
                            </div>
                            <div class="cart-blk">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        <div class="table-parent">
                                            <table class="table table-responsive">
                                                <tbody>
                                                    <tr>
                                                        <td><strong>Membership type</strong></td>
                                                        <td>Premium</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Email</strong></td>
                                                        <td>aalsaery@kau.edu.sa</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Address Line 1</strong></td>
                                                        <td>Sulimanyah</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Address Line 2</strong></td>
                                                        <td>Jeddah</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>City</strong></td>
                                                        <td>Jeddah</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="table-parent">
                                            <table class="table table-responsive">
                                                <tbody>
                                                    <tr>
                                                        <td><strong>Expiry date</strong></td>
                                                        <td>2022-04-21</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>State</strong></td>
                                                        <td>Western Area</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Postal Code</strong></td>
                                                        <td>11223</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Phone</strong></td>
                                                        <td>+966-540009413</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row no-gutters table-parent"></div>
                            </div>
                            <div class="text-center mt-4">
                                <a id="processupgrad" class="cust-btn green-btn marginbtm20" href="#">Upgrade Membership</a>
                                <a href="#" class="cust-btn green-btn marginbtm20" id="update_edit_profile">Edit Profile</a>
                            </div>
                        </div>
                    </div>

                    <!-- My Profile END HERE -->

                    <!-- My Profile Personal Information Updated START HERE -->

                    <div class="update_edit_profile_toggle">
                        <div class="col-lg-12">
                            <form>
                                <div class="edit-wrap user-registraion">
                                    <h3>Personal Information</h3>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <img id="profileImage" class="img-thumbnail" style="height: 100px; width: 100px; border-radius: 50%;" />
                                        </div>
                                        <div class="col-md-6">
                                            <label>Upload Profile Picture</label>
                                            <input id="profileImageFile" type="file" name="ProfileImage" class="profile-upload" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label>First Name</label>
                                            Abdulaziz
                                        </div>
                                        <div class="col-md-6">
                                            <label>Last Name</label>
                                            Ahmed
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label>Email Address</label>
                                            <input class="feildn" id="EmailAddress" maxlength="100" name="EmailAddress" placeholder="Email Address" readonly="readonly" style="color: #9a9a9a;" type="text" value="aalsaery@kau.edu.sa" />
                                            <span class="field-validation-valid text-danger"></span>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Phone Number</label>
                                            <div dir="ltr">
                                                <div class="intl-tel-input allow-dropdown separate-dial-code iti-sdc-4">
                                                    <input class="pncode" id="PhoneNumber" maxlength="23" name="Phone" placeholder="Phone" type="text" value="+966-540009413" autocomplete="off" />
                                                </div>
                                                <span class="field-validation-valid text-danger"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="edit-wrap user-registraion">
                                    <h3>Contact Details</h3>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label>Address Line 1<span class="text-danger">*</span></label>
                                            <input class="feildn" data-val="true" id="Address" maxlength="100" name="Address" placeholder="Address Line 1" type="text" value="Sulimanyah" />
                                            <span class="field-validation-valid text-danger"></span>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Address Line 2</label>
                                            <input class="feildn" id="Address2" maxlength="100" name="Address2" placeholder="Address Line 2" type="text" value="Jeddah" />
                                            <span class="field-validation-valid text-danger"></span>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label>City<span class="text-danger">*</span></label>
                                            <input class="feildn" data-val="true" id="City" maxlength="100" name="City" placeholder="City" type="text" value="Jeddah" />
                                            <span class="field-validation-valid text-danger"></span>
                                        </div>
                                        <div class="col-md-6">
                                            <label>State or Province</label>
                                            <input class="feildn" id="State" maxlength="100" name="State" placeholder="State or Province" type="text" value="Western Area" />
                                            <span class="field-validation-valid text-danger"></span>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label>Country<span class="text-danger">*</span></label>
                                            <div class="select">
                                                <select id="Country" name="Country" title="Select Country">
                                                    <option value="Afghanistan">Afghanistan</option>
                                                </select>
                                                <span class="field-validation-valid text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Postal Code<span class="text-danger" id="postalCodeAsteric" style="display: none;">*</span></label>
                                            <input class="feildn" id="PostalCode" maxlength="6" name="PostalCode" placeholder="Postal Code" type="text" value="11223" />
                                            <span class="field-validation-valid text-danger"></span>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label>Nickname<span class="text-danger">*</span></label>
                                            <input class="feildn" id="NickName" name="NickName" placeholder="Nickname" type="text" value="Default" />
                                            <span class="field-validation-valid text-danger"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3 cardUpload">
                                        <label>National ID or Passport</label>
                                        <div class="row cardsUpload">
                                            <div class="col-md-2">
                                                <div class="chek">
                                                    <label class="custom-chck">
                                                        Passport
                                                        <input type="radio" name="IsPassportSelected" id="IsPassportSelected1" />
                                                        <span class="checkmark" for="IsPassportSelected1"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="chek">
                                                    <label class="custom-chck">
                                                        National ID
                                                        <input type="radio" name="IsPassportSelected" id="IsPassportSelected2" checked="" />
                                                        <span class="checkmark" for="IsPassportSelected"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="id-uploads mt-3 IdCardInput">
                                            <div class="uploadfile">
                                                <img id="idCardFrontImage" class="card1" src="" />
                                                <input type="file" id="idCardFrontInput" name="IdFrontImage" />
                                                <a href="#" class="uploadbtn" id="idCardFrontPlus"><i class="fa fa-plus"></i><span>Front</span></a>
                                            </div>
                                            <div class="uploadfile">
                                                <img id="idCardBackImage" class="card1" src="" />
                                                <input type="file" id="idCardBackInput" name="IdBackImage" />
                                                <a href="#" class="uploadbtn" id="idCardBackPlus"><i class="fa fa-plus"></i><span>Back</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="edit-wrap user-registraion txt-center">
                                    <a href="#" class="cust-btn green-btn marginbtm20">Update</a>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- My Profile Personal Information Updated END HERE -->

                    <!-- Payment Settings START HERE -->

                    <div id="payment-setting-toogle">
                        <div class="col-lg-12">
                            <div class="cart-blk brdr mb-4 margintop20">
                                <h3>Payment Method</h3>
                                <p>Please select your preferred payment method (Credit Card or PayPal)</p>
                                <ul class="selectedmethod">
                                    <li><a href="#" class="cust-btn green-btn">Credit Card</a></li>
                                    <li><a href="#" class="cust-btn">Paypal</a></li>
                                </ul>
                                <div id="dvCreditCardInfo">
                                    <div class="alert-p alert-warning">Please update your Credit Card information for seamless payment</div>
                                    <div>
                                        <ul class="noPadding">
                                            <li class="text-center" style="width: 100%;">
                                                <div class="btn-holder">
                                                    <a id="btnCreditCardInfo" href="#" class="cust-btn green-btn marginbtm20">Update Credit Card Information</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-blk text-center">
                                <a href="#" class="cust-btn green-btn marginbtm20">Update</a>
                            </div>
                        </div>
                    </div>

                    <!-- Payment Settings END HERE -->

                    <!-- Shipping Preferences START HERE -->

                    <div id="shipping-preferences-toggle">
                        <form>
                            <div class="col-12">
                                <div class="row mt-3 CustomTab" dir="ltr">
                                    <div id="dvEasyShip" class="col pt-2 active"><a href="#">Easy ship Preferences</a></div>
                                    <div id="dvAdvancedShip" class="col pt-2"><a href="#">Advanced-Ship Preferences</a></div>
                                </div>
                            </div>
                            <div class="col-12 ShippingPreferenceHolder ShippingPreferenceHolderSub">
                                <div class="row pt-4">
                                    <div class="col"><h5 class="bluecolor pt-1">Minimize Packaging</h5></div>
                                    <div class="col-auto pr-3 pl-3">
                                        <div class="can-toggle">
                                            <input id="chkMinimizePackage" type="checkbox" checked="" />
                                            <label for="chkMinimizePackage">
                                                <div id="dvchkMinimizePackage" class="can-toggle__switch"></div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 greycolor">
                                        Minimize Packaging Discard Promotional Material, Shoe Boxes and All Unnecessary Packaging.
                                    </div>
                                </div>
                                <div class="row mt-3" id="dvConsolidate">
                                    <div class="col"><h5 class="bluecolor pt-1">Consolidation</h5></div>
                                    <div class="col-auto pr-3 pl-3">
                                        <div class="can-toggle">
                                            <input id="chkConsolidate" type="checkbox" checked="" />
                                            <label for="chkConsolidate">
                                                <div id="dvchkConsolidate" class="can-toggle__switch"></div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row pt-1">
                                        <div class="col-12 no-pad">
                                            <div class="row mt-4">
                                                <div class="col"><h5 class="bluecolor pt-1">Preferred Shipping Method</h5></div>
                                            </div>
                                            <div class="row">
                                                <div class="cart-blk">
                                                    <ul id="shippingoption">
                                                        <li>
                                                            <a id="aexpress" href="#" data-enumval="Express" data-type="1" class="cust-btn">
                                                                Express
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a id="aeconomy" href="#" data-enumval="Economy" data-type="1" class="cust-btn green-btn">
                                                                Economy
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-12 no-pad">
                                                <div class="row mt-0">
                                                    <div class="col"><h5 class="bluecolor">Preferred Units</h5></div>
                                                </div>
                                                <div class="row">
                                                    <div class="cart-blk">
                                                        <ul id="measuremtnsoption">
                                                            <li>
                                                                <a id="ameasurementmetric" href="#" data-enumval="Metric" data-type="1" class="cust-btn green-btn">
                                                                    Kg/cm
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a id="ameasurementenglish" href="#" data-enumval="English" data-type="1" class="cust-btn">
                                                                    lb/inch
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="dvPremiumButton" class="cart-blk txt-center mt-5">
                                <button type="submit" name="submit" class="cust-btn green-btn marginbtm20" style="cursor: pointer;">Update &amp; Save</button>
                            </div>
                        </form>
                    </div>

                    <!-- Shipping Preferences END HERE -->

                    <!-- CHANGE PASSWORD START HERE -->

                    <div id="change-pass-toggle">
                        <form action="/Account/ChangePassword" method="post" novalidate="novalidate">
                            <div class="shipmentCal changePassword">
                                <div class="col-lg-8 form-group">
                                    <label>Current Password</label>
                                    <input class="feildn" id="CurrentPassword" name="CurrentPassword" placeholder="Current Password" type="password" />
                                    <span class="field-validation-valid text-danger"></span>
                                </div>
                                <div class="col-lg-8 form-group">
                                    <label>New Password</label>
                                    <input class="feildn" id="NewPassword" name="NewPassword" placeholder="New Password" type="password" />
                                    <span class="field-validation-valid text-danger"></span>
                                </div>
                                <div class="col-lg-8 form-group">
                                    <label>Confirm New Password</label>
                                    <input class="feildn" id="ConfirmPassword" name="ConfirmPassword" placeholder="Confirm New Password" type="password" />
                                    <span class="field-validation-valid text-danger"></span>
                                </div>
                                <div class="col-lg-8 form-group">
                                    <input type="submit" value="Update" />
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- CHANGE PASSWORD END HERE -->

                    <!-- Order History START HERE -->

                    <div id="order-history-toggle">
                        <div class="col-md-12 mt-3">
                            <div class="accor-table">
                                <div class="row">
                                    <div class="col-md-5 sortParnt">
                                        <span>Show Last:</span>
                                        <ul>
                                            <li><a href="#" class="active">30 days</a></li>
                                            <li><a href="#" class="">60 days</a></li>
                                            <li><a href="#" class="">90 days</a></li>
                                            <li><a href="#" class="">All</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-7 filterParent text-right">
                                        <span>Search for Order Number: </span>
                                        <div class="field"><input id="orderhistorysearch" type="text" name="" placeholder="I.E. 123456789" /></div>
                                        <a href="#" class="btn">search</a>
                                        <a href="#">search</a>
                                        <a href="#" class="btn">export as csv</a>
                                    </div>
                                </div>
                                <form>
                                    <input id="SelectedIds" name="SelectedIds" type="hidden" value="" />
                                    <table class="fold-table">
                                        <thead>
                                            <tr>
                                                <th>view</th>
                                                <th>date</th>
                                                <th>type</th>
                                                <th>description</th>
                                                <th>charges</th>
                                                <th>Order Number <input type="checkbox" id="selectAll" name="" /></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr id="NotFound">
                                                <td colspan="7">
                                                    <div class="col-md-12" style="font-weight: 700; margin-right: 20px; font-size: 14px; color: red; text-align: center;">No result found.</div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Order History END HERE -->
                </div>
            </div>
        </div>
    </body>

    <script src="{{  asset('assets/frontend/login_asset/js/jquery.min.js')}}"></script>
    <!-- JQUERY.MIN JS -->
    <script src="{{  asset('assets/frontend/login_asset/js/popper.min.js')}}"></script>
    <!-- BOOTSTRAP.MIN JS -->
    <script src="{{  asset('assets/frontend/login_asset/js/bootstrap.min.js')}}"></script>
    <!-- BOOTSTRAP.MIN JS -->
    <script src="{{  asset('assets/frontend/login_asset/js/main.js')}}"></script>

  
</html>
