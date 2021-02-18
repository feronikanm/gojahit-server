@extends('adminlayouts.main_edit_page')

@section('title', 'Edit Data Pelanggan')

@section('page_name', 'Edit Data Pelanggan')

@section('content')

<div class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-10">
        <div class="card">
            <div class="card-header card-header-primary">
            <h4 class="card-title ">Edit Data Pelanggan</h4>
            </div>
            <div class="card-body">
            
                <form>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary">Close</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                    
                  </form> 
            
            </div>
        </div>
        </div>
    </div>
    </div>



    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Edit Data Pelanggan</h4>
              <p class="card-category">Complete your profile</p>
            </div>
            <div class="card-body">
              <form>
                <div class="row">
                  <div class="col-md-5">
                    <div class="form-group">
                      <label class="bmd-label-floating">Company (disabled)</label>
                      <input type="text" class="form-control" disabled>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label class="bmd-label-floating">Username</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">Email address</label>
                      <input type="email" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Fist Name</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Last Name</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">Adress</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">City</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">Country</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">Postal Code</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>About Me</label>
                      <div class="form-group">
                        <label class="bmd-label-floating"> Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</label>
                        <textarea class="form-control" rows="5"></textarea>
                      </div>
                    </div>
                  </div>

                  {{-- <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary">Close</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div> --}}

                </div>
                <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                <button type="submit" class="btn btn-secondary pull-right">Close</button>
                
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-profile">
            <div class="card-avatar">
              <a href="javascript:;">
                <img class="img" src="../assets/img/faces/marc.jpg" />
              </a>
            </div>
            <div class="card-body">
              <h6 class="card-category text-gray">CEO / Co-Founder</h6>
              <h4 class="card-title">Alec Thompson</h4>
              <p class="card-description">
                Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
              </p>
              <a href="javascript:;" class="btn btn-primary btn-round">Follow</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>






@endsection