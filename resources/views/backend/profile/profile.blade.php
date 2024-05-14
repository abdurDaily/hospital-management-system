@extends('backend.layout.layout')
@section('backend-contains')
<section class="section">
    <div class="container-fluid">
      <!-- ========== title-wrapper start ========== -->
      <div class="title-wrapper pt-30">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="title">
              <h2>Settings</h2>
            </div>
          </div>
          <!-- end col -->
          <div class="col-md-6">
            <div class="breadcrumb-wrapper">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="#0">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#0">Pages</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Settings
                  </li>
                </ol>
              </nav>
            </div>
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
      <!-- ========== title-wrapper end ========== -->

      
      <form action="{{ route('admin.profile.update') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
            <div class="row">
                <div class="col-lg-6">
                <div class="card-style settings-card-1 mb-30">
                    <div class="title mb-30 d-flex justify-content-between align-items-center">
                    <h6>My Profile</h6>
                    <button class="border-0 bg-transparent">
                        <i class="lni lni-pencil-alt"></i>
                    </button>
                    </div>
                    <div class="profile-info">
                    <div class="d-flex align-items-center mb-30">
                        <div class="profile-image">
                        <img src="{{ asset('backend/assets/images/profile/profile-1.png') }}" alt="">
                        <div class="update-image">
                            <input type="file">
                            <label for=""><i class="lni lni-cloud-upload"></i></label>
                        </div>
                        </div>
                        <div class="profile-meta">
                        <h5 class="text-bold text-dark mb-10">{{ Auth::user()->name }}</h5>
                        <p class="text-sm text-gray">Web &amp; UI/UX Design</p>
                        </div>
                    </div>
                    <div class="input-style-1">
                        <label>Email</label>
                        <input type="email" placeholder="admin@example.com" value="admin@example.com">
                    </div>
                    <div class="input-style-1">
                        <label>Password</label>
                        <input type="text" value="" name="old_password" placeholder="old password">
                    </div>
                    <div class="input-style-1">
                        <label>Confirm Password</label>
                        <input type="text" name="new_password" value="" placeholder="new password">
                    </div>
                    <div class="input-style-1">
                        <label>Website</label>
                        <input type="text" placeholder="www.uideck.com" value="www.uideck.com">
                    </div>
                    <div class="input-style-1">
                        <label>Bio</label>
                        <textarea placeholder="Write your bio here" rows="4">  Crafted for – Business, Startup, SaaS, Apps, Event, Software, Agency, Resume and Portfolio. All Landing Pages comes with clean design and responsive layout. Also packed with all essential sections, elements, and features you need to launch</textarea>
                    </div>
                    </div>
                </div>
                <!-- end card -->
                </div>
                <!-- end col -->

                <div class="col-lg-6">
                <div class="card-style settings-card-2 mb-30">
                    <div class="title mb-30">
                    <h6>My Profile</h6>
                    </div>

                    <div class="row">
                        <div class="col-12">
                        <div class="input-style-1">
                            <label>Full Name</label>
                            <input type="text" placeholder="Full Name">
                        </div>
                        </div>
                        <div class="col-12">
                        <div class="input-style-1">
                            <label>Email</label>
                            <input type="email" placeholder="Email">
                        </div>
                        </div>

                        <div class="col-12">
                        <div class="input-style-1">
                            <label>Address</label>
                            <input type="text" placeholder="Address">
                        </div>
                        </div>
                        
                        <div class="col-12">
                        <div class="input-style-1">
                            <label>About Me</label>
                            <textarea placeholder="Type here" rows="6"></textarea>
                        </div>
                        </div>
                        <div class="col-12">
                        <button class="main-btn primary-btn btn-hover">
                            Update Profile
                        </button>
                        </div>
                    </div>
                
                </div>
                <!-- end card -->
                </div>
            </div>
     </form>
        <!-- end col -->
      <!-- end row -->
    </div>
    <!-- end container -->
</section>
@endsection