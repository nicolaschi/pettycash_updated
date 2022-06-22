@include('admin.header')
@include('admin.navbar')


<div class="page-container">

    <div class="main-content">
         <!--<div class="page-header">
<h2 class="header-title">Manage Admin.</h2>
<div class="header-sub-title">
<nav class="breadcrumb breadcrumb-dash">
                                    <a href="/dashboard" class="breadcrumb-item">
            <i class="anticon anticon anticon-home m-r-5"></i>                        Home                    </a>

                                                    <span class="breadcrumb-item active">Administrators</span>
                        </nav>


</div>
</div>-->
<div class="page-header">
<h2 class="header-title">Manage Admin.</h2>
    <div class="header-sub-title">
<nav class="breadcrumb breadcrumb-dash">
                                                <a href="/dashboard" class="breadcrumb-item">
                <i class="anticon anticon anticon-home m-r-5"></i>                            Home                        </a>

                                                                    <span class="breadcrumb-item active">Administrators</span>
                                    </nav>


</div>
                        </div>
<div class="modal fade" id="deleteModal">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title" id="deltitle"></h5>
    <button type="button" class="close" data-dismiss="modal">
        <i class="anticon anticon-close"></i>
    </button>
</div>
<div class="modal-body">
    <p id="deltext"></p>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default m-r-10" data-dismiss="modal">Close</button>

    <form id="deleteModalForm" method="post" action="" style="display: inline-block" class="form-horizontal">
        <input type="hidden" id="delobj" name="id" />                    <button type="submit" class="btn btn-danger">Yes, proceed</button>
    </form>
</div>
</div>
</div>
</div>
<div class="modal fade" id="pwdModal">
<div class="modal-dialog">
<div class="modal-content">
<form id="assignModalForm" method="post" action="" style="display: inline-block" class="form-horizontal">
    <div class="modal-header">
        <h5 class="modal-title" id="passtitle"></h5>
        <button type="button" class="close" data-dismiss="modal">
            <i class="anticon anticon-close"></i>
        </button>
    </div>
    <div class="modal-body">
        <p id="passtext" ></p>
        <div class="form-group">
            <div class="form-group">
                <label class="label-primary">New Password</label>

                <input type="password" class="form-control" required name="password" />
            </div>
        </div>
    </div>
    <div class="modal-footer">

        <button type="button" class="btn btn-default m-r-10" data-dismiss="modal">Close</button>
        <input type="hidden" id="passobj" name="id" />                    <button type="submit" class="btn btn-danger">Update</button>

    </div>
</form>
</div>
</div>
</div>

        <div class="card">
            <div class="card-body">
                                            <div class="row m-b-30">
                    <div class="col-lg-8">
                        <div class="d-md-flex">

                            <div class="m-b-10">
                                <select class="custom-select" style="min-width: 180px;">
                                    <option selected="">Status</option>
                                    <option value=" ">All</option>
                                    <option value="ACTIVE">ACTIVE</option>
                                    <option value="IN-ACTIVE">IN ACTIVE</option>
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 text-right">
                        <a class="btn btn-primary" href="{{url('/createuser')}}">
                            <i class="anticon anticon-plus-circle m-r-5"></i>
                            <span>Add New Admin.</span>
                        </a>
                    </div>
                </div>


                @if (Session()->has('success'))

                <div class="valid-feedback" role="alert">
                    <strong>{{ Session::get('success') }}</strong>
                </div>

                @endif
                <div class="m-t-25 table-responsive">


                    <table id="data-table-admin" class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Created</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach ($data as $data )
                        <tbody>
                            <tr>
                                <td>
                                    <span class="font-size-12">{{$data->name}}</span>
                                </td>
                                <td><span class="badge badge-pill-blue font-size-12">{{$data->role}} </span></td>

                                <td>
                                    <p class="m-b-0 font-size-13">
                                        @if($data->status==1)
                                        Active
                                        @else
                                        Inactive
                                        @endif
                                    </p>
                            </td>

                            <td>
                                <p class="m-b-0 font-size-13">{{$data->email}}</p>
                            </td>
                                <td>
                                    <p class="m-b-0 font-size-13">{{$data->created_at}}</p>
                                </td>
                                <td>
                                    <div class="dropdown dropdown-animated scale-left">
                                            <a class="text-gray font-size-18" href="javascript:void(0);" data-toggle="dropdown">
                                                <i class="anticon anticon-ellipsis"></i>
                                            </a>
                                        <div class="dropdown-menu">
                                            <button class="dropdown-item" type="button">
                                                <i class="anticon anticon-edit"></i>
                                                <span class="m-l-10"><a href="{{url('/updateuser',$data->id)}}">Edit</a></span>
                                            </button>
                                            <button class="dropdown-item" type="button">
                                                <i class="anticon anticon-delete"></i>
                                                <span class="m-l-10">Disable</span>
                                            </button>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>

                        @endforeach

                    </table>
                </div>

            </div>
        </div>

              </div>




@include('admin.footer')
