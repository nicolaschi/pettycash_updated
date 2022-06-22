
@include('admin.header')
@include('admin.navbar')


    <div class="page-container">

        <div class="main-content">

            <div class="page-header">
              <h2 class="header-title">Account setting</h2>
                <div class="header-sub-title">
                     <nav class="breadcrumb breadcrumb-dash">
                          <a href="{{ url('dashboard') }}" class="breadcrumb-item">
                            <i class="anticon anticon anticon-home m-r-5"></i>Home</a>

                                <a href="{{ url('/profile') }}" class="breadcrumb-item">Profile</a>
                                     <span class="breadcrumb-item active">Account setting</span>
                     </nav>
                </div>
            </div>

                                            <div class="container">
                                                <div class="tab-content m-t-15">
                            <div class="tab-pane fade show active" id="tab-account" >
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Basic Information</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="media align-items-center">
                                            <div class="avatar avatar-image  m-h-10 m-r-15" style="height: 80px; width: 80px">
                                                <img src="{{asset('assets/img/avatar/thumb.jpg')}}" alt="">
                                            </div>
                                            <div class="m-l-20 m-r-20">
                                                <h5 class="m-b-5 font-size-18">Change Avatar</h5>
                                                <p class="opacity-07 font-size-13 m-b-0">
                                                    Recommended Dimensions: <br>
                                                    120x120 Max file size: 1MB
                                                </p>
                                            </div>
                                            <div>
                                                <button class="btn btn-tone btn-primary">Upload</button>
                                            </div>
                                        </div>
                                        <hr class="m-v-25">
                                        <form method="POST" action="{{ route('user-profile-information.update') }}">
                                            @csrf
                                            @method('PUT')

                                            <div class="form-row">
                                                                 <div class="form-group col-md-4">
                                                                    <label class="font-weight-semibold" for="userName">Name:</label>
                                                                    <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? auth()->user()->name }}" required autocomplete="name" autofocus>

                                                                    @error('name')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                                                        </div>
                                                                <div class="form-group col-md-4">
                                                                    <label class="font-weight-semibold" for="email">Email:</label>
                                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? auth()->user()->email }}" disabled autocomplete="email" autofocus>

                                                                    @error('email')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                 </div>

                                                                <div class="form-group col-md-4">
                                                                    <label class="font-weight-semibold" for="Phone Number">Phone Number:</label>
                                                                    <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') ?? auth()->user()->phone_number }}" required autocomplete="email" autofocus>

                                                                    @error('phone_number')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                 </div>

                                                                <div class="form-group col-md-4">
                                                                    <label class="font-weight-semibold" for="Role">Role:</label>
                                                                    <select name="role" class="form-control" value="{{ old('role') ?? auth()->user()->role }}">
                                                                        <option value="Admin">Admin</option>
                                                                        <option value='Vendor'>Vendor </option>
                                                                        <option value="Vendor_agent">Vendor Agent</option>
                                                                    </select>
                                                                </div>
                                                                        <button type="submit" class="btn btn-primary col-md-12">Update Account</button>
                                                                    </div>
                                                                </div>

                                                                </div>
                                                            </form>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Change Password</h4>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('user-password.update') }}">
                                            @csrf
                                                @method('PUT')

                                                @if (session('status') == "password-updated")
                                                  <div class="alert alert-success">
                                                         Password updated successfully.
                                                  </div>
                                                @endif

                                    <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label class="font-weight-semibold" for="current_password">Current Password:</label>
                                                    <input id="current_password" type="password" class="form-control @error('current_password', 'updatePassword') is-invalid @enderror" name="current_password" required autofocus>

                                                    @error('current_password', 'updatePassword')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                 </div>

                                                 <div class="form-group col-md-4">
                                                    <label class="font-weight-semibold" for="current_password"> Password:</label>
                                                    <input id="password" type="password" class="form-control @error('password', 'updatePassword') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                    @error('password', 'updatePassword')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                 </div>

                                                 <div class="form-group col-md-4">
                                                    <label class="font-weight-semibold" for="current_password">Confirm Password:</label>
                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                                                    @error('password', 'updatePassword')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                 </div>

                                    </div>

                                    <button type="submit" class="btn btn-primary col-md-12">Update Password</button>
                                                </div>
                                            </form>


                                    </div>
                                </div>
                            </div>

@include('admin.footer')

