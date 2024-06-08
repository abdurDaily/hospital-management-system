@extends('backend.layout.layout')
@section('backend-contains')
    <section class="bg-light p-5 shadow">
        <div class="container">
            <form action="{{ route('admin.sote.doctor.data') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  {{-- IMAGE --}}
                  <div class="col-lg-4 text-center">
                    <div class="input-style-1">
                      <label for="image">
                        <img class="display-img" style="height: 200px; cursor: pointer;" src="{{ asset('images/placeholder.avif') }}" alt="">
                      </label>
                      <input hidden class="doctor_image" name="doctor_image" id="image" type="file" placeholder="Abdur Rahman">
                    </div>
                  </div>
                  {{-- IMAGE END --}}
                  <div class="col-lg-8">
                    <div class="row">
                       <div class="col-lg-12">
                          <div class="input-style-1">
                            <label>Doctot Name</label>
                            <input name="doctor_name" type="text" placeholder="Abdur Rahman">
                          </div>
                       </div>
                    </div>
                    <div class="col-12">
                      <div class="input-style-1">
                        <label>Designation</label>
                        <input name="doctor_dessignation" type="text" placeholder="Cardiologist">
                      </div>
                    </div>
                  </div>
                  <!-- end col -->
                  
                  <!-- end col -->
                  <div class="col-12">
                    <div class="input-style-1">
                      <label>Doctor's Educational Qualification</label>
                      <input name="doctor_qualification" type="text" placeholder="MBBS,FCPS,MD">
                    </div>
                  </div>
                  <!-- end col -->

                  <!-- end col -->
                  <div class="col-12">
                    <div class="input-style-1">
                      <label>Doctor Phone No</label>
                      <input name="doctor_number" type="number" placeholder="016-47465050">
                    </div>
                  </div>
                  <!-- end col -->
                  <!-- end col -->
                  <div class="col-12">
                    <div class="input-style-1">
                      <label>Doctor Email Address</label>
                      <input name="doctor_email" type="email" placeholder="acdur@gmail.com">
                    </div>
                  </div>
                  <!-- end col -->
                  <div class="col-12">
                    <div class="input-style-1">
                      <label>About Doctor</label>
                      <textarea name="doctor_about" placeholder="write somthing about doctor" id="" cols="30" rows="5"></textarea>
                    </div>
                  </div>
                  
                  
                
                  <div class="col-12">
                    <div class="button-group d-flex justify-content-center flex-wrap">
                      <button type="submit" class="main-btn primary-btn btn-hover m-2">
                        Save Information
                      </button>
                      <button type="reset" class="main-btn danger-btn-outline m-2">
                        Reset
                      </button>
                    </div>
                  </div>
                </div>
                <!-- end row -->
              </form>
        </div>
    </section>


    @push('backend_custom_js')
      {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
      <script>
         let doctor_input_image = document.querySelector('.doctor_image');
         let doctor_image = document.querySelector('.display-img');

         doctor_input_image.addEventListener('change', function(e){
          let url = URL.createObjectURL(e.target.files[0]);
          display_image.src = url;
         })
      </script>
    @endpush
@endsection