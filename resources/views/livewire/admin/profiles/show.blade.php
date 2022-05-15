@extends('layouts.master')
@livewire('admin.header')
{{-- @livewire('admin.sidebar',['title1'=>'Home','title2'=>'Who Am I','title3'=>'Educations','title4'=>'Experiances','title5'=>'Courses And Skills','title6'=>'Certificates','title7'=>'FAQs']) --}}
@livewire('admin.sidebar')
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Profile</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Show Profiles</button>
              </li>
            </ul>
            <div class="tab-content pt-2">
              <div class="tab-pane fade show active profile-overview" id="profile-overview">
                <h5 class="card-title">About</h5>
              </div>
              <!--content here -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">S.NO</th>
                    <th scope="col">Profile Id</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">User Id</th>
                    <th scope="col">Created At</th>
                   
                  </tr>
                </thead>
                <tbody>
                  @php($i=1)
                  @foreach ($profiles as $item)
                  <tr>
                    <th scope="row">{{$profiles->firstItem()+$loop->index}}</th>
                    <td>{{ $item->id}}</td>
                    <td>{{ $item->fname}}{{ $item->lname}}</td>
                    <td>{{ $item->user_id}}</td>
                    <td>{{ $item->created_at->diffForHumans()}}</td>
                    <td> 
                      {{-- <a href="{{url('showProfile/'.$item->id)}}" class="btn btn-infor">Show</a> --}}
                      <a href="{{url('editProfile/'.$item->id)}}" class="btn btn-infor">Edit</a>   
                      <a href="{{url('profiles/delete/soft/'.$item->id)}}" class="btn btn-danger">Delete</a>
                      
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="d-flex">
              
              {{ $profiles->links()}}
              </div>
            </div><!-- End Bordered Tabs -->
          </div>
         
        </div>
      </div>
    </div>
  </section>
</main><!-- End #main -->
