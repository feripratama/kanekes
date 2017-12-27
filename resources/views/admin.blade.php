@extends('layouts.admin')

{{-- Title --}}

@section('title', 'Admin')
@section('navbar-title', 'Kanekes')

{{-- Content --}}

@section('content')
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <h4 class="alert-heading">Well done!</h4>
    <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
    <hr>
    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>


<div class="row">
    <div class="col-sm-4 mb-3">
        <div class="card admin-card-media text-white bg-primary">
            <div class="card-body">
                <div class="media">
                    <i class="fa fa-user fa-media-avatar mr-3" aria-hidden="true"></i>
                    <div class="media-body">
                        <h5 class="mt-0">Users</h5>
                        <span><i class="fa fa-dot-circle-o" aria-hidden="true"></i> 1500</span>
                    </div>
                </div>
            </div><!-- /.card-body -->
        </div><!-- /.card -->
    </div><!-- /col -->
    <div class="col-sm-4 mb-3">
        <div class="card admin-card-media text-white bg-success">
            <div class="card-body">
                <div class="media">
                    <i class="fa fa-comments fa-media-avatar mr-3" aria-hidden="true"></i>
                    <div class="media-body">
                        <h5 class="mt-0">Comments</h5>
                        <span><i class="fa fa-dot-circle-o" aria-hidden="true"></i> 500</span>
                    </div>
                </div>
            </div><!-- /.card-body -->
        </div><!-- /.card -->
    </div><!-- /col -->
    <div class="col-sm-4 mb-3">
        <div class="card admin-card-media text-white bg-info">
            <div class="card-body">
                <div class="media">
                    <i class="fa fa-calendar fa-media-avatar mr-3" aria-hidden="true"></i>
                    <div class="media-body">
                        <h5 class="mt-0">Agenda</h5>
                        <span><i class="fa fa-dot-circle-o" aria-hidden="true"></i> 30</span>
                    </div>
                </div>
            </div><!-- /.card-body -->
        </div><!-- /.card -->
    </div><!-- /col -->
</div>


<div class="admin-bg-title">
    <h2>Tables</h2>
</div>

<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Username</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table>


<div class="admin-bg-title">
    <h2>List group</h2>
</div>

<div class="row">
    <div class="col-sm-6">
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Cras justo odio
                <span class="badge badge-primary badge-pill">14</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Dapibus ac facilisis in
                <span class="badge badge-primary badge-pill">2</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Morbi leo risus
                <span class="badge badge-primary badge-pill">1</span>
            </li>
        </ul>
    </div><!-- /col -->
    <div class="col-sm-6">
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Cras justo odio
                <span class="badge badge-primary badge-pill">14</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Dapibus ac facilisis in
                <span class="badge badge-primary badge-pill">2</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Morbi leo risus
                <span class="badge badge-primary badge-pill">1</span>
            </li>
        </ul>
    </div><!-- /col -->
</div><!-- /.row -->


<div class="admin-bg-title">
    <h2>Forms</h2>
</div>

<div class="card">
    <div class="card-header">Forms</div>
      <div class="card-body">
          <form>
              <div class="form-row">
                  <div class="form-group col-md-6">
                      <label for="inputEmail4">Email</label>
                      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                  </div>
                  <div class="form-group col-md-6">
                      <label for="inputPassword4">Password</label>
                      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                  </div>
              </div>
              <div class="form-group">
                  <label for="inputAddress">Address</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
              </div>
              <div class="form-group">
                  <label for="inputAddress2">Address 2</label>
                  <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
              </div>
              <div class="form-row">
                  <div class="form-group col-md-6">
                      <label for="inputCity">City</label>
                      <input type="text" class="form-control" id="inputCity">
                  </div>
                  <div class="form-group col-md-4">
                      <label for="inputState">State</label>
                      <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                      </select>
                  </div>
                  <div class="form-group col-md-2">
                      <label for="inputZip">Zip</label>
                      <input type="text" class="form-control" id="inputZip">
                  </div>
              </div>
              <div class="form-group">
                  <div class="form-check">
                      <label class="form-check-label">
                          <input class="form-check-input" type="checkbox"> Check me out
                      </label>
                  </div>
              </div>
              <button type="submit" class="btn btn-primary">Sign in</button>
          </form>
      </div><!-- /.card-body -->
</div><!-- /.card -->


<div class="admin-bg-title">
    <h2>Progress</h2>
</div>

<div class="card">
    <div class="card-header">Progress</div>
    <div class="card-body">
        <div class="progress mb-3">
            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress mb-3">
            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress mb-3">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress mb-3">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div><!-- /.card-body -->
</div><!-- /.card -->
@endsection
