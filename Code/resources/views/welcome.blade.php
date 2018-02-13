<!doctype html>
@extends('layouts.main')
@section('content')
<link href="{!! asset('css/welcome.css') !!}" rel="stylesheet" type="text/css"/>
<div class="container-fluid background-image first-section">
    <div class="text-overlap">
        <span class="text-overlap-top-text">We've created the product that will help your startup to look even better.</span>
        <br>
        <br class="hidden-sm-down">
    <span class="text-overlap-bottom-text">You have the design, you have the code</span>
    </div>
</div>

<div class="container-fluid second-section">
    <div class="second-text-overlap">
        <div class="row">
        <div class="col-md-12">
        <span class="second-text-overlap-top-text">We've created the product that will help your startup to look even better.</span>
        </div>
        </div>
        <br class="hidden-sm-down">
        <div class="row">
        <div class="col-md-12">
        <span class="second-text-overlap-bottom-text">Startup Design Framework contains components and complex blocks which can easily be integrated into almost any design, Responsive layout, clear grid, retina ready.</span>
        </div>
        </div>
    </div>
</div>

<div class="container-fluid third-section hidden-md-up">
    <div class="third-text-overlap">
        <div class="row">

            <div class="col-md-4">
                <a data-toggle="collapse" href="#High" aria-expanded="false" aria-controls="High">
                <span class="third-section-title">High Resolution</span><br>
                </a>
                <div class="collapse" id="High">
                <div class="card card-block">
                <span class="third-section-text" >We did a 2.5K size high resolution photo that will suit even for a very large site.</span>
                </div>
                </div>
            </div>

            <div class="col-md-4">
                <a data-toggle="collapse" href="#Easy" aria-expanded="false" aria-controls="Easy">
                <span class="third-section-title">Easy to use</span></a><br>
                <div class="collapse" id="Easy">
                <div class="card card-block">
                <span class="third-section-text">To get started, you select the desired sample and base the entire website on it. It's that simple.</span>
                </div>
                </div>
            </div>

            <div class="col-md-4">
                <a data-toggle="collapse" href="#Feel" aria-expanded="false" aria-controls="Feel">
                <span class="third-section-title">Feel our design</span></a><br>
                <div class="collapse" id="Feel">
                <div class="card card-block">
                <span class="third-section-text" id="Feel">Samples will show you the feeling on how to play around using the components.</span>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid third-section hidden-sm-down">
    <div class="third-text-overlap">
        <div class="row">

            <div class="col-md-4">
                <span class="third-section-title">High Resolution</span><br><br>
                <span class="third-section-text" >We did a 2.5K size high resolution photo that will suit even for a very large site.</span>
            </div>

            <div class="col-md-4">
                <span class="third-section-title">Easy to use</span><br><br>
                <span class="third-section-text">To get started, you select the desired sample and base the entire website on it. It's that simple.</span>
            </div>

            <div class="col-md-4">
                <span class="third-section-title">Feel our design</span><br><br>
                <span class="third-section-text" id="Feel">Samples will show you the feeling on how to play around using the components.</span>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid fourth-section">
    <div class="row">
        <div class="col col-md">
            <img class="image-fluid" src="../images/product-image.jpg"> 
        </div>
        <div class="col">
            <div class="row icons">
                <p> Wierd icons go here.</p>
            </div>
            <div class ="row">
             <h2>Multi useful components</h2>
             <p>Startup Design Framework contains components and complex blocks which can easily be integrated into almost any design. All of these components are made in the same style.</p>
              <br>
              <button class="btn btn-outline-success" data-toggle="modal" data-target="#myModal"> TRY IT NOW </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      </div>
      <div class="modal-body">
        <form id="leadform">
            <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" class="form-control" id="Name" name='Name' placeholder="Enter your Full Name" required>
            <div class="form-group">
            <label for="Email">Email</label>
            <input type="text" class="form-control" id="Email" name='Email' placeholder="Enter your Email" required>
            </div>
            <div class="form-group">
            <label for="Phone">Phone Number</label>
            <input type="text" class="form-control" id="Phone" name='Phone' placeholder="Enter your Phone Number" required>
            </div>
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button id="formSubmit" type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
</div>


@endsection
