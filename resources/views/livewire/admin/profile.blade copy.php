@extends('layouts.master')
@livewire('admin.header')
@livewire('admin.sidebar')

<main id="main" class="main">
    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
        <!-- <li class="breadcrumb-item"><a href="{{route('users')}}">Users</li> 
           <li class="breadcrumb-item active"><a href="{{route('showProfile')}}">My Profile</li> -->
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <a href="{{route('showProfiles')}}" class="nav-link">MyProfile</div>
                </li>
              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                {{-- @livewire('admin.overview') --}}
                  
                  
                  <h5 class="card-title">About</h5>
                  <p class="small fst-italic">{{$item->about}}</p>
                  
                  <h5 class="card-title">Profile Details</h5>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8">{{$item->fname}}{{""}}{{$item->lname}}</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Company</div>
                    <div class="col-lg-9 col-md-8">Lueilwitz, Wisoky and Leuschke</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Job</div>
                    <div class="col-lg-9 col-md-8">{{$item->jobTitle}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Country</div>
                    <div class="col-lg-9 col-md-8">{{$item->country}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Address</div>
                    <div class="col-lg-9 col-md-8">{{$item->address}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8">{{$item->phone}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8">{{$item->email}}</div>
                  </div>
                  
                </div>  
             
                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                   {{-- @include('livewire.admin.createProfile') --}}
                   @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   <form method="POST" action="{{route('editProfile')}}"
                   enctype="multipart/form-data">
                     @csrf
                     <div class="row mb-3">
                       <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                       <input type="file" class="form-control" id="profile_photo_path" name="profile_photo_path" aria-describedby="addUserImage">
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
                         <input name="fname" type="text" class="form-control" id="firstName" value="{{$item->fname}}">
                       </div>
                     </div>
                     @error('fname')
                     <span class="text-danger">{{$message}}</span>
                     @enderror
                     <div class="row mb-3">
                       <label for="lastName" class="col-md-4 col-lg-3 col-form-label">Last Name</label>
                       <div class="col-md-8 col-lg-9">
                         <input name="lname" type="text" class="form-control" id="lastName" value="{{$item->lname}}">
                       </div>
                     </div>
                     @error('lname')
                     <span class="text-danger">{{$message}}</span>
                     @enderror
 
                     <div class="row mb-3">
                       <label for="about" class="col-md-4 col-lg-3 col-form-label">Breif Description</label>
                       <div class="col-md-8 col-lg-9">
                         <textarea name="about" class="form-control" id="about" style="height: 100px">{{$item->about}}</textarea>
                       </div>
                     </div>
                     @error('briefDescription')
                     <span class="text-danger">{{$message}}</span>
                     @enderror
                     <div class="row mb-3">
                       <label for="jobTitle" class="col-md-4 col-lg-3 col-form-label">Job Title</label>
                       <div class="col-md-8 col-lg-9">
                         <input name="jobTitle" class="form-control" id="jobTitle" value="{{$item->jobTitle}}">
                       </div>
                     </div>
                     @error('jobTitle')
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
                             value="female"{{$item->gender== 'female' ? 'checked' : ''}}
                             
                           />
                           <label class="form-check-label" for="femaleGender" >Female</label>
                         </div>
       
                         <div class="form-check form-check-inline mb-0 me-4">
                           <input
                             class="form-check-input"
                             type="radio"
                             name="gender"
                             id="male"
                             value="male"{{$item->gender== 'male' ? 'checked' : ''}}
                           />
                           <label class="form-check-label" for="maleGender">Male</label>
                         </div>
                         </div>
                     </div>
 
                     <div class="row mb-3">
                       <label for="birthDate" class="col-md-4 col-lg-3 col-form-label">Birthdate</label>
                       <div class="col-md-8 col-lg-9">
                         <input name="birthdate" type="date" class="form-control" id="birthDate" value="{{$item->birthdate}}">
                       </div>
                     </div>
                     @error('birthdate')
                     <span class="text-danger">{{$message}}</span>
                     @enderror
 
                     <div class="row mb-3">
                       <label for="Country" class="col-md-4 col-lg-3 col-form-label">Country</label>
                       <div class="col-md-8 col-lg-9">
                         <input name="country" type="text" class="form-control" id="Country" value="{{$item->country}}">
                       </div>
                     </div>
                     @error('country')
                     <span class="text-danger">{{$message}}</span>
                     @enderror
 
                     <div class="row mb-3">
                       <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                       <div class="col-md-8 col-lg-9">
                         <input name="address" type="text" class="form-control" id="Address" value="{{$item->address}}">
                       </div>
                     </div>
                     @error('address')
                     <span class="text-danger">{{$message}}</span>
                     @enderror
 
                     <div class="row mb-3">
                       <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                       <div class="col-md-8 col-lg-9">
                         <input name="phone" type="text" class="form-control" id="Phone" value="{{$item->phone}}">
                       </div>
                     </div>
                     @error('phone')
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

                </div>{{--end of create profile--}}
                <div class="tab-pane fade profile-edit pt-3" id="profile-accounts">
                  {{-- @include('livewire.admin.editProfile') --}}
                  {{-- <form method="POST" action="{{route('addAccounts')}}"
                  enctype="multipart/form-data">
                    <div class="row mb-3">
                      <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="twitter" type="text" class="form-control" id="Twitter" value="https://twitter.com/#">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="facebook" type="text" class="form-control" id="Facebook" value="https://facebook.com/#">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="instagram" type="text" class="form-control" id="Instagram" value="https://instagram.com/#">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="linkedin" type="text" class="form-control" id="Linkedin" value="https://linkedin.com/#">
                      </div>
                    </div> 

                    <div class="text-center">
                      <button type="submit" value="submit" class="btn btn-primary">Save</button>
                    </div>
                  </form> --}}

               </div>

                <div class="tab-pane fade pt-3" id="profile-settings">
                  @include('livewire.admin.settingProfile')

                </div>

                <div class="tab-pane fade pt-3" id="profile-change-password">
                 
                  @include('livewire.admin.changePassword')
                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
      @endforeach
    </section>

 
</main>