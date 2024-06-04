@extends('backend.layout.layout')
@section('backend-contains')
    <section class="bg-light p-5 shadow">
        <div class="container">
            <form action="{{ route('admin.store.patient') }}" method="POST">
                @csrf
                <div class="row">
                  <div class="col-12">
                    <div class="input-style-1">
                      <label>Patient Name</label>
                      <input name="patient_name" type="text" placeholder="Abdur Rahman">
                    </div>
                  </div>
                  <!-- end col -->
                  <div class="col-12">
                    <div class="input-style-1">
                      <label>Patient Age</label>
                      <input name="patient_age" type="text" placeholder="40 year's">
                    </div>
                  </div>
                  <!-- end col -->
                  <div class="col-12">
                    <div class="input-style-1">
                      <label>Patient Contact Number</label>
                      <input name="patient_phone" type="number" placeholder="617-802-1898">
                    </div>
                  </div>
                  <!-- end col -->


                  <!-- end col -->
                  <div class="col-12">
                    <div class="input-style-1">
                      <label>Consultant Doctor Name</label>
                      <input name="doctor_name" type="number" placeholder="Dr. Maruf (MBBS, FCPS)">
                    </div>
                  </div>
                  <!-- end col -->
                  <div class="col-12">
                    <div class="input-style-1">
                      <label>Patient Address</label>
                      <textarea name="patient_address" placeholder="enter your address" id="" cols="30" rows="5"></textarea>
                    </div>
                  </div>
                  
                  
                
                  <div class="col-12">
                    <div class="button-group d-flex justify-content-center flex-wrap">
                      <button type="submit" class="main-btn primary-btn btn-hover m-2">
                        Save Address
                      </button>
                      <button type="reset" class="main-btn danger-btn-outline m-2">
                        Cancel
                      </button>
                    </div>
                  </div>
                </div>
                <!-- end row -->
              </form>
        </div>
    </section>
@endsection