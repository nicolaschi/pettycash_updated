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
                                        <h4 class="card-title">Update Information</h4>
                                    </div>
                                    <div class="card-body">

                                        @if(session()->has('message'))
                                        <div class="alert alert-success">
                                             {{ session()->get('message') }}
                                        </div>
                                   @endif

                                        <form method="POST" action="{{ url ('/updatua',$data->id) }}">
                                            @csrf

                                            <div class="form-row">
                                                                 <div class="form-group col-md-4">
                                                                    <label class="font-weight-semibold" for="userName">Name:</label>
                                                                    <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$data->name}}" required autocomplete="name" autofocus>

                                                                    @error('name')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                                                        </div>
                                                                <div class="form-group col-md-4">
                                                                    <label class="font-weight-semibold" for="email">Email:</label>
                                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$data->email}}" required autocomplete="email" autofocus>

                                                                    @error('email')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                 </div>



                                                                <div class="form-group col-md-4">
                                                                    <label class="font-weight-semibold" for="Role">Role:</label>
                                                                    <select name="role" class="form-control" value="{{ $data->role }}">
                                                                        <option value="Admin">Admin</option>
                                                                        <option value='agent'>Agent </option>
                                                                    </select>
                                                                </div>
                                                                        <button type="submit" class="btn btn-primary col-md-12">Update User Account</button>
                                                                    </div>
                                                                </div>

                                                                </div>
                                                            </form>
                                    </div>
                                                </div>
                 </div>

@include('admin.footer')
