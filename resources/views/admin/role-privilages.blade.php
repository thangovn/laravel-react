@extends('admin.layout')
@section('pageTitle', 'Trang chủ')
@section('breadcrumb-first', 'Trang chủ')
@section('breadcrumb-second', 'Trang chủ')
@section('main')
<div class="blance-detail">
    <div class="main-admin">
        <div class="main-left">
            @include('admin.navbar');
        </div>
        <div class="main-right">
            <div class="content-profile">
                <div class="info-user">
                    <div class="row">
                        <div class="col-sm-12 col-md-1 col-lg-1">
                            <div class="border-image-user">
                                <img src="{{ asset('images/User.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-5 col-lg-5 user-row">
                            <strong>user*******@gmail.com</strong><br>
                            <span>Last login time: 13:00 - 2022/02/11</span><br>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 user-row ">
                            <span>User ID: ********</span><br>
                            <span>IP Address: AB126537</span><br>

                        </div>
                    </div>
                </div>

            </div>
            <!-- ROLE -->
            <section class="mx-4 mb-5 user-form">
                <div class="bg-white p-4 rounded-4">
                    <h4 class="mb-3 user-title-form">Add New User</h4>
                    <div class="d-flex justify-content-end bd-highlight mb-3">
                            <button type="button" class="btn pm-btn-gradient"><span class="d-flex align-items-center">Add New <span class="material-symbols-outlined">
add
</span></span></button>
                      
                    </div>
                    <table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>#</th>
      <th>ID</th>
      <th>Role</th>
      <th>Discription</th>
      <th>Create by</th>
      <th>Status</th>
      <th>Created At</th>
      <th>Privileges</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <div class="d-flex align-items-center">
         1
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">524864</p>
      </td>
      <td>
      <p class="fw-normal mb-1">Super Admin</p>
      </td>
      <td>
      Quisque porta euismod est sed suscipit. Proin placerat rhoncus felis.
      </td>
      <td>
        <div class="d-flex align-items-center">
          <img
              src="https://mdbootstrap.com/img/new/avatars/8.jpg"
              alt=""
              style="width: 45px; height: 45px"
              class="rounded-circle"
              />
          <div class="ms-3">
            <p class="fw-bold mb-1">John Doe</p>
            <p class="text-muted mb-0">john.doe@gmail.com</p>
          </div>
        </div>
      </td>
      <td>
      <span class="badge badge-success rounded-pill d-inline">Enable</span>
      
      </td>
      <td>
      <p class="fw-normal mb-1">Nov. 15 2021</p>
      </td>
      <td>
      <p class="fw-bold mb-1"><a style="color: black;" href="/admin/role-privilages/permission">Permission</a></p>
    </td>
    </tr>
    <tr>
      <td>
        <div class="d-flex align-items-center">
         2
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">524126</p>
      </td>
      <td>
      <p class="fw-normal mb-1">Leader</p>
      </td>
      <td>
      Quisque porta euismod est sed suscipit. Proin placerat rhoncus felis.
      </td>
      <td>
        <div class="d-flex align-items-center">
          <img
              src="https://mdbootstrap.com/img/new/avatars/7.jpg"
              alt=""
              style="width: 45px; height: 45px"
              class="rounded-circle"
              />
          <div class="ms-3">
            <p class="fw-bold mb-1">Kate Hunington</p>
            <p class="text-muted mb-0">kate.hunington@gmail.com</p>
          </div>
        </div>
      </td>
      <td>
      <span class="badge badge-danger rounded-pill d-inline">Disable</span>
      
      </td>
      <td>
        <p class="fw-normal mb-1">Nov. 15 2021</p>
      </td>
      <td>
      <p class="fw-bold mb-1"><a style="color: black;" href="/admin/role-privilages/permission">Permission</a></p>
    </td>
    </tr>
    <tr>
      <td>
        <div class="d-flex align-items-center">
         3
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">524862</p>
      </td>
      <td>
      <p class="fw-normal mb-1">Staff</p>
      </td>
      <td>
      Quisque porta euismod est sed suscipit. Proin placerat rhoncus felis.
      </td>
      <td>
        <div class="d-flex align-items-center">
          <img
              src="https://mdbootstrap.com/img/new/avatars/6.jpg"
              alt=""
              style="width: 45px; height: 45px"
              class="rounded-circle"
              />
          <div class="ms-3">
            <p class="fw-bold mb-1">Alex Ray</p>
            <p class="text-muted mb-0">alex.ray@gmail.com</p>
          </div>
        </div>
      </td>
      <td>
      <span class="badge badge-success rounded-pill d-inline">Enable</span>
      
      </td>
      <td>
         <p class="fw-normal mb-1">Nov. 15 2021</p>
      </td>
      <td>
      <p class="fw-bold mb-1"><a style="color: black;" href="/admin/role-privilages/permission">Permission</a></p>
    </td>
    </tr>
  </tbody>
</table>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection