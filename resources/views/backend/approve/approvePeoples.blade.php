@extends('backend.layout.layout')
@section('backend-contains')
<div class="tables-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <div class="card-style mb-30">
          <h6 class="mb-10">Panding Request's</h6>
          <p class="text-sm mb-20">
            without an admin approval no one will be able to get dashboard access.
          </p>
          <div class="table-wrapper table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th class="lead-info">
                    <h6>Id</h6>
                  </th>
                  <th class="lead-email">
                    <h6>Nane</h6>
                  </th>
                  <th class="lead-phone">
                    <h6>Email</h6>
                  </th>
                  <th class="lead-phone">
                    <h6>Send Time</h6>
                  </th>
                  <th class="lead-phone">
                    <h6>Status</h6>
                  </th>
                </tr>
                <!-- end table row-->
              </thead>
              <tbody>
               
                @forelse ($allUsers as $key=>$user)
                <tr>
                  <td class="min-width">
                      <div class="lead-text">
                        <p>{{ ++$key }}</p>
                      </div>
                  </td>
                  <td class="min-width">
                    <p>{{ $user->name }}</p>
                  </td>
                  <td class="min-width">
                    <p>{{ $user->email }}</p>
                  </td>
                  <td class="min-width">
                    <p>{{ $user->created_at }}</p>
                  </td>
                  
                  <td>
                    <div class="action">
                      <button class="text-danger">
                        <i class="lni lni-trash-can"></i>
                      </button>
                      <a href="{{ route('admin.approved.user',$user->id) }}">
                         ✔
                      </a>
                    </div>
                  </td>
                </tr>
                @empty
                  <tr>
                    <td colspan="5" style="background: #ccc; text-align:center; padding:10px 0;">No Data Found!</td>
                  </tr>
                @endforelse
                <!-- end table row -->
              </tbody>
            </table>
            <!-- end table -->
          </div>
        </div>
        <!-- end card -->
      </div>
      <!-- end col -->
    </div>
    <!-- end row -->

   
  </div>
@endsection