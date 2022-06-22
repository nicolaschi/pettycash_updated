@include('agent.header')
@include('agent.navbar')


<div class="page-container">

    <div class="main-content">

<div class="page-header">
<h2 class="header-title">Manage Admin.</h2>
    <div class="header-sub-title">
        <nav class="breadcrumb breadcrumb-dash">
            <a href="{{ url('home') }}" class="breadcrumb-item">
              <i class="anticon anticon anticon-home m-r-5"></i>Home</a>

                  <a href="{{ url('/agentlistpettycash') }}" class="breadcrumb-item">Invoice</a>
                       <span class="breadcrumb-item active">Create PETTY CASH </span>
       </nav>


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
                                    <option value="ACTIVE">IN PROGRESS</option>
                                    <option value="IN-ACTIVE">APPROVED</option>
                                    <option value="IN-ACTIVE">DENIED</option>

                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 text-right">
                        <a class="btn btn-primary" href="{{url('/agentcreatepettycash')}}">
                            <i class="anticon anticon-plus-circle m-r-5"></i>
                            <span>CREATE PETTY CASH</span>
                        </a>
                    </div>
                </div>

                <div class="m-t-25 table-responsive">
                    <table id="data-table-admin" class="table">
                        <thead>
                            <tr>

                                <th>ID</th>
                                <th>Requested by</th>
                                <th>Company</th>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        @foreach ($data as $data )
                        <tbody>
                            <tr>
                                <td>
                                    <span class="font-size-12"><a href="{{url('/agentmanagepettycash',$data->id)}}">OO{{$data->id}}</a></span>
                                </td>
                                <td>
                                    <span class="font-size-12"><a href="{{url('/agentmanagepettycash',$data->id)}}">{{$data->requestedby}}</a></span>
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
                            </tr>
                        </tbody>

                        @endforeach

                    </table>
                </div>

            </div>
        </div>

              </div>




              @include('agent.footer')
