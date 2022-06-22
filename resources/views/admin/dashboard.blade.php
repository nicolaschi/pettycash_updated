@include('admin.header')
@include('admin.navbar')
            <!-- Page Container START -->
            <div class="page-container">

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <p class="m-b-0">Administrators</p>
                                            <h2 class="m-b-0">
                                                <span>{{ $count }}</span>
                                            </h2>
                                        </div>
                                        <div class="avatar avatar-icon avatar-lg avatar-blue">
                                            <i class="anticon anticon-dollar"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <p class="m-b-0">Approved</p>
                                            <h2 class="m-b-0">
                                                <span>{{ $approved }}</span>
                                            </h2>
                                        </div>
                                        <div class="avatar avatar-icon avatar-lg avatar-cyan">
                                            <i class="anticon anticon-bar-chart"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <p class="m-b-0">Pending </p>
                                            <h2 class="m-b-0">
                                                <span>{{ $progress }}</span>
                                            </h2>
                                        </div>
                                        <div class="avatar avatar-icon avatar-lg avatar-gold">
                                            <i class="anticon anticon-bar-chart"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <p class="m-b-0">Denied</p>
                                            <h2 class="m-b-0">
                                                <span>{{ $deny }}</span>
                                            </h2>
                                        </div>
                                        <div class="avatar avatar-icon avatar-lg avatar-red">
                                            <i class="anticon anticon-bar-chart"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5>Latest Transactions</h5>
                            <div>
                                <a href="javascript:void(0);" class="btn btn-sm btn-default">View All</a>
                            </div>
                        </div>
                        <div class="m-t-30">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Requested by</th>
                                            <th>Company</th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    @foreach ($data as $data )
                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="font-size-12"><a href="{{url('/managepettycash',$data->id)}}">OO{{$data->id}}</a></span>
                                            </td>
                                            <td>
                                                <span class="font-size-12"><a href="{{url('/managepettycash',$data->id)}}">{{$data->requestedby}}</a></span>
                                            </td>
                                            <td>@if ($data->company == 'AOA')
                                                <span class="badge badge-pill-blue  font-size-12">AOA WINDSTREAM</span></td>
                                                @else
                                                <span class="badge badge-pill-blue  font-size-12">E-TICKET SOLUTIONS</span></td>

                                            @endif
                                            <td>
                                                <p class="m-b-0 font-size-13">{{$data->date}}</p>
                                            </td>
                                            <td>
                                                <p class="m-b-0 font-size-13">{{$data->amount}}</p>
                                            </td>

                                            <td>

                                                    <p class="m-b-0 font-size-13">
                                                        @if($data->status=='In Progress')
                                                        <div class="d-flex align-items-center">
                                                            <span class="badge badge-primary badge-dot m-r-10"></span>
                                                            <span>In Progress</span>
                                                        </div>
                                                        @elseif ($data->status=='Approved')
                                                        <div class="d-flex align-items-center">
                                                            <span class="badge badge-success badge-dot m-r-10"></span>
                                                            <span>Approved</span>
                                                        </div>

                                                        @else
                                                        <div class="d-flex align-items-center">
                                                            <span class="badge badge-danger badge-dot m-r-10"></span>
                                                            <span>Denied</span>
                                                        </div>
                                                        @endif
                                                    </p>
                                            </td>

                                            <td>
                                                <button class="btn btn-success m-r-5">Approve</button>
                                                <button class="btn btn-danger m-r-5">Deny</button>
                                            </td>
                                        </tr>
                                    </tbody>

                                    @endforeach

                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Content Wrapper END -->
@include('admin.footer')
