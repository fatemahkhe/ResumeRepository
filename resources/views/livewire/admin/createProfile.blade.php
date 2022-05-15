@extends('layouts.master')
@livewire('admin.header')
@livewire('admin.sidebar')

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
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
              </li>

            </ul>
            <div class="tab-content pt-2">

              <div class="tab-pane fade show active profile-overview" id="profile-overview">
                <h5 class="card-title">Create Profile</h5>
                <p class="small fst-italic">Here, You can create your profile...</p>

<!-- Profile Edit Form -->
<form method="POST" action="{{route('addProfile')}}"
      enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
        <input type="file" class="form-control" id="profile_photo_path" name="profile_photo_path" aria-describedby="addUserImage" value="{{old('profile_photo_path')}}">
        <div class="col-md-8 col-lg-9">
            <div class="pt-2">
                <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
            </div>
        </div>
    </div>
    @error('profile_photo_path')
    <span class="text-danger">{{$message}}</span>
    @enderror

    <div class="row mb-3">
        <label for="firstName" class="col-md-4 col-lg-3 col-form-label">First Name</label>
        <div class="col-md-8 col-lg-9">
            <input name="fname" type="text" class="form-control" id="firstName" value="{{old('fname')}}">
        </div>
    </div>
    @error('fname')
    <span class="text-danger">{{$message}}</span>
    @enderror
    <div class="row mb-3">
        <label for="lastName" class="col-md-4 col-lg-3 col-form-label">Last Name</label>
        <div class="col-md-8 col-lg-9">
            <input name="lname" type="text" class="form-control" id="lastName" value="{{old('lname')}}">
        </div>
    </div>
    @error('lname')
    <span class="text-danger">{{$message}}</span>
    @enderror

    <div class="row mb-3">
        <label for="about" class="col-md-4 col-lg-3 col-form-label">Breif Description</label>
        <div class="col-md-8 col-lg-9">
            <textarea name="about" class="form-control" id="about" style="height: 100px">{{old('about')}}</textarea>
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
                    value="female"
                    checked
                />
                <label class="form-check-label" for="femaleGender" >Female</label>
            </div>

            <div class="form-check form-check-inline mb-0 me-4">
                <input
                    class="form-check-input"
                    type="radio"
                    name="gender"
                    id="male"
                    value="male"
                />
                <label class="form-check-label" for="maleGender">Male</label>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <label for="birthDate" class="col-md-4 col-lg-3 col-form-label">Birthdate</label>
        <div class="col-md-8 col-lg-9">
            <input name="birthdate" type="date" class="form-control" id="birthDate" value="{{old('birthdate')}}">
        </div>
    </div>
    @error('birthdate')
    <span class="text-danger">{{$message}}</span>
    @enderror

    <div class="row mb-3">
        <label for="Country" class="col-md-4 col-lg-3 col-form-label">Country</label>
        <div class="col-md-8 col-lg-9">
            <input name="country" type="text" class="form-control" id="Country" value="{{old('country')}}">
        </div>
    </div>
    @error('country')
    <span class="text-danger">{{$message}}</span>
    @enderror

    <div class="row mb-3">
        <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
        <div class="col-md-8 col-lg-9">
            <input name="address" type="text" class="form-control" id="Address" value="{{old('address')}}">
        </div>
    </div>
    @error('address')
    <span class="text-danger">{{$message}}</span>
    @enderror
    <div class="row mb-3">
        <label for="jobTitle" class="col-md-4 col-lg-3 col-form-label">Job Title</label>
        <div class="col-md-8 col-lg-9">
            <input name="jobTitle" type="text" class="form-control" id="Address" value="{{old('jobTitle')}}">
        </div>
    </div>
    @error('jobTitle')
    <span class="text-danger">{{$message}}</span>
    @enderror

    <div class="row mb-3">
        <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
        <div class="col-md-8 col-lg-9">
            <input name="phone" type="text" class="form-control" id="Phone" value="{{old('phone')}}">
        </div>
    </div>
    @error('phone')
    <span class="text-danger">{{$message}}</span>
    @enderror
    <div class="row mb-3">
        <label for="Pin" class="col-md-4 col-lg-3 col-form-label">PIN</label>
        <div class="col-md-8 col-lg-9">
            <input name="pin" type="text" class="form-control" id="Pin" value="{{old('pin')}}">
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
</form><!-- End Profile Edit Form -->

              </div>

            </div><!-- End Bordered Tabs -->

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->