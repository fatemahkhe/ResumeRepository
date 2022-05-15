@extends('layouts.master')
@livewire('admin.header')
@livewire('admin.sidebar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
</head>
<body>
   
<main id="main" class="main">

    <div class="pagetitle">
    <h1>Profile</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Users</li>
        <li class="breadcrumb-item active">Profile</li>
        </ol>
    </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
    <div class="row">

        <div class="col-xl-12"> 
        <div class="card">
            <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">  
                <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Edit Profile</button>
                </li>  
            </ul>
            <form method="POST" action="{{url('updateProfile/'.$profile->id)}}" enctype="multipart/form-data">
                @csrf    
            <img id="output" height="300px" width="300px" src="{{$profile->profile_photo_path }}"/>
            @if(!isset($profile->profile_photo_path))

            <div class="fileinput fileinput-new input-group m-b-none" data-provides="fileinput">
            <div class="form-control" data-trigger="fileinput"><i class="fa fa-image m-r-xs"></i> 
                <span class="fileinput-filename">No file selected</span></div>
            <span class="input-group-addon btn btn-default btn-file">
                <span class="fileinput-new">Select file</span>
                <span class="fileinput-exists">Change</span><input type="hidden">
                <input id="g" type="file" accept="image/*" onchange="loadFile(event)" name="profile_photo_path" value=""></span>
            <button type="reset"  onclick() class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</button>
            </div>
        
            @else
        
            <div class="fileinput input-group m-b-none fileinput-exists" data-provides="fileinput">
            <div class="form-control" data-trigger="fileinput"><i class="fa fa-image m-r-xs"></i> 
                <span class="fileinput-filename"><?=$profile->profile_photo_path;?></span></div>
            <input id="g" type="hidden" accept="image/*" onchange="loadFile(event)" name="profile_photo_path_name" value="{{$profile->profile_photo_path}}"/>
            <span class="input-group-addon btn btn-default btn-file">
                <input id="g" type="hidden" accept="image/*" onchange="loadFile(event)" value="" name="profile_photo_path">
            <input id="g" type="file" accept="image/*" onchange="loadFile(event)" name="profile_photo_path" value="{{$profile->profile_photo_path}}"></span>
            <button type="reset" class="remove-img input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</button>
            </div>                                      
        
            @endif

            <script>
                var loadFile = function(event) {
                  var output = document.getElementById('output');
                  output.src = URL.createObjectURL(event.target.files[0]);
                  output.onload = function() {
                    URL.revokeObjectURL(output.src) // free memory
                  }
                };

                $(document).ready(function() {
                $("button").click(function() {
                    $('#g').trigger("reset");
                    //$("#d").get(0).reset();
                // $("g")[0].reset()
                });
            });
              </script>
                {{-- </form> --}}
                {{-- <form method="POST" action="{{url('updateProfile/'.$profile->id)}}" enctype="multipart/form-data">
                    @csrf         --}}
                <div class="row mb-3">
                <label for="firstName" class="col-md-4 col-lg-3 col-form-label">First Name</label>
                    <div class="col-md-8 col-lg-9">
                        <input name="fname" type="text" class="form-control" id="firstName" value="{{$profile->fname}}">
                    </div>
                </div>
                @error('fname')
                <span class="text-danger">{{$message}}</span>
                @enderror
                <div class="row mb-3">
                <label for="lastName" class="col-md-4 col-lg-3 col-form-label">Last Name</label>
                    <div class="col-md-8 col-lg-9">
                        <input name="lname" type="text" class="form-control" id="lastName" value="{{$profile->lname}}">
                    </div>
                </div>
                @error('lname')
                <span class="text-danger">{{$message}}</span>
                @enderror
                <div class="row mb-3">
                <label for="about" class="col-md-4 col-lg-3 col-form-label">Breif Description</label>
                    <div class="col-md-8 col-lg-9">
                        <textarea name="about" class="form-control" id="about" style="height: 100px">{{$profile->about}}</textarea>
                    </div>
                </div>
                @error('briefDescription')
                <span class="text-danger">{{$message}}</span>
                @enderror
                <div class="row mb-3">
                <label for="gender" class="col-md-4 col-lg-3 col-form-label">Gender</label>
                <div class="col-md-8 col-lg-9">
                    <div class="form-check form-check-inline mb-0 me-4">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="gender"
                        id="female"
                        value="female"{{$profile->gender== 'female' ? 'checked' : ''}}
                        
                    />
                    <label class="form-check-label" for="femaleGender" >Female</label>
                    </div>
            
                    <div class="form-check form-check-inline mb-0 me-4">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="gender"
                        id="male"
                        value="male"{{$profile->gender== 'male' ? 'checked' : ''}}
                    />
                    <label class="form-check-label" for="maleGender">Male</label>
                    </div>
                    </div>
                </div>
            
                <div class="row mb-3">
                <label for="birthDate" class="col-md-4 col-lg-3 col-form-label">Birthdate</label>
                    <div class="col-md-8 col-lg-9">
                        <input name="birthdate" type="date" class="form-control" id="birthDate" value="{{$profile->birthdate}}">
                    </div>
                </div>
                @error('birthdate')
                <span class="text-danger">{{$message}}</span>
                @enderror
            
                <div class="row mb-3">
                <label for="Country" class="col-md-4 col-lg-3 col-form-label">Country</label>
                    <div class="col-md-8 col-lg-9">
                        <input name="country" type="text" class="form-control" id="Country" value="{{$profile->country}}">
                    </div>
                </div>
                @error('country')
                <span class="text-danger">{{$message}}</span>
                @enderror
            
                <div class="row mb-3">
                <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                    <div class="col-md-8 col-lg-9">
                        <input name="address" type="text" class="form-control" id="Address" value="{{$profile->address}}">
                    </div>
                </div>
                @error('address')
                <span class="text-danger">{{$message}}</span>
                @enderror
                <div class="row mb-3">
                    <label for="jobTitle" class="col-md-4 col-lg-3 col-form-label">Job Title</label>
                    <div class="col-md-8 col-lg-9">
                        <input name="jobTitle" type="text" class="form-control" id="Address" value="{{$profile->jobTitle}}">
                    </div>
                </div>
                @error('jobTitle')
                <span class="text-danger">{{$message}}</span>
                @enderror
                <div class="row mb-3">
                <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                    <div class="col-md-8 col-lg-9">
                        <input name="phone" type="text" class="form-control" id="Phone" value="{{$profile->phone}}">
                    </div>
                </div>
                @error('phone')
                <span class="text-danger">{{$message}}</span>
                @enderror

                <div class="row mb-3">
                    <label for="Pin" class="col-md-4 col-lg-3 col-form-label">PIN</label>
                    <div class="col-md-8 col-lg-9">
                        <input name="pin" type="text" class="form-control" id="Pin" value="{{$profile->pin}}">
                    </div>
                </div>
                @error('pin')
                <span class="text-danger">{{$message}}</span>
                @enderror
            
                <div class="row mb-3">
                <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                    <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="Email" value="{{Auth::user()->email}}">
                    </div>
                </div>
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
                <div class="text-center">
                    <button type="submit" value="submit" class="btn btn-primary">Save</button>
                </div>
                </form>
                    <!-- End Profile Edit Form --> 

                </div>

            </div><!-- End Bordered Tabs -->

            </div>
        </div>

        </div>
    </div>
    </section>

</main><!-- End #main -->
 
</body>
</html>