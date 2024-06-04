@extends('backend.layout.layout')
@section('backend-contains')
    <section class="bg-light p-5 shadow">
        <div class="container">
            <form action="" method="POST">
                @csrf
                <div class="row">
                  <div class="col-12">
                    <div class="input-style-1">
                      <label>Doctot Name</label>
                      <input name="doctor_name" type="text" placeholder="Abdur Rahman">
                    </div>
                  </div>
                  <!-- end col -->
                  <div class="col-12">
                    <div class="input-style-1">
                      <label>Designation</label>
                      <input name="doctor_dessignation" type="text" placeholder="Cardiologist">
                    </div>
                  </div>
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
@endsection