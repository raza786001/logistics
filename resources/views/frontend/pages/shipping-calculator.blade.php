@extends('frontend.layouts.app')
@section('content')

<main>
        <!--? slider Area Start-->
        <div class="slider-area ">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="{{  asset('assets/frontend/img/hero/about.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap">
                                <h2>Shipment Calculator</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">Shipment Calculator</a></li> 
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
       
    </main>
    <div class="container">
        <div class="row pt-5 pb-5 mt-5 mb-5">
         <div class="col-lg-12 col-md-12">
             <div class="shipment_cal_heading">
                 <h1>Shipping Calculator</h1>
                 <p>Note: This is the country shipping rate only. Other fees such as duties, taxes, and last mile delivery may be applicable. click here for more info</p>
             </div>

             <div class="shipment_cal_content">
                 <h1>Where is your package Coming From?</h1>
                 <span>Country</span>
                 <select class="form-select" aria-label="Default select example" style="display: block !important;">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
             </div>

             <div class="shipment_cal_content">
                <h1>Where is your package going?</h1>
                <span>Country</span>
                <select class="form-select" aria-label="Default select example" style="display: block !important;">
                   <option selected>Open this select menu</option>
                   <option value="1">One</option>
                   <option value="2">Two</option>
                   <option value="3">Three</option>
                 </select>
            </div>


            <div class="shipment_cal_content_2">
                <p>Please tell us about what you'll be shipping: </p>
                <form name="calcForm">
                  <div class="form-group" >
                    <label class="control-label" for="weight">Weight</label>
                    <input name="weight" type="number" class="form-control" id="weight" required >
                    <span class="help-block">Please enter a weight between.</span>
                  </div>
                  <button class="btn">Calculate</button>
                </form>
              </div>

              <div class="shipment_cal_content_price_table">
                <table class="table">
                    <h1>Results</h1>
                  <tbody>
                    <tr>
                        <td>Economy<span style="display: block;">5 - 10 Business Days</span></td>
                        <td></td>
                        <td></td>
                        <td>USD 115.27<span style="display: block;">AED 423.4)</span></td>
                      </tr>
                    <tr>
                        <td>Economy<span style="display: block;">5 - 10 Business Days</span></td>
                        <td></td>
                        <td></td>
                        <td>USD 115.27<span style="display: block;">AED 423.4)</span></td>
                      </tr>
                  </tbody>
                </table>
              </div>
         </div>
        </div>
     </div>

@endsection