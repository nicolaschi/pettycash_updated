@include('agent.header')
@include('agent.navbar')
<!-- Page Container START -->
<div class="page-container">


    <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">Profile</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="{{ url('home') }}" class="breadcrumb-item">
                      <i class="anticon anticon anticon-home m-r-5"></i>Home</a>

                          <a href="{{ url('/agentlistpettycash') }}" class="breadcrumb-item">Petty Cash</a>
                               <span class="breadcrumb-item active">Create user</span>
               </nav>
            </div>
        </div>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div id="invoice" class="p-h-30">
                        <div class="m-t-15 lh-2">
                            <div class="inline-block">
                                @if($data->company=='AOA')
                                <img class="img-fluid" src="{{asset('assets/images/logo/aoa.png')}}" alt="">
                                @else
                                <img class="img-fluid" src="{{asset('assets/images/logo/eticket.jpg')}}" alt="">
                                @endif
                            </div>
                            <div class="float-right">
                                <h2>PETTY CASH</h2>
                            </div>
                        </div>
                        <div class="row m-t-20 lh-2">
                            <div class="col-sm-9">
                                <h3 class="p-l-10 m-t-10">Invoice To:</h3>
                                <address class="p-l-10 m-t-10">
                                    <span class="font-weight-semibold text-dark">Genting Holdings.</span><br>
                                    <span>8626 Maiden Dr. </span><br>
                                    <span>Niagara Falls, New York 14304</span>
                                </address>
                            </div>
                            <div class="col-sm-3">
                                <div class="m-t-80">
                                    <div class="text-dark text-uppercase d-inline-block">
                                        <span class="font-weight-semibold text-dark">Invoice No :</span></div>
                                    <div class="float-right">0000{{$data->id}}</div>
                                </div>
                                <div class="text-dark text-uppercase d-inline-block">
                                    <span class="font-weight-semibold text-dark">Date :</span>
                                </div>
                                <div class="float-right">{{$data->date}}</div>
                            </div>
                        </div>



                            <h4 class="card-title"></h4>
                            <div class="table-responsive">
                                <table class="product-info-table m-t-20">
                                    <tbody>
                                        <tr>
                                            <td>Department:</td>
                                            <td class="text-dark font-weight-semibold">{{$data->department}}</td>
                                        </tr>
                                        <tr>
                                            <td>Requested By:</td>
                                            <td>{{$data->requestedby}}</td>
                                        </tr>
                                        <tr>
                                            <td>Amount:</td>
                                            <td>{{$data->amount}}</td>
                                        </tr>
                                        <tr>
                                            <td>Description:</td>
                                            <td>{{$data->description}}</td>
                                        </tr>
                                        <tr>
                                            <td>Status:</td>
                                            <td>

                                                @if($data->status=='In Progress')
                                                <span class="badge badge-pill badge-blue">In Progress</span>
                                                @elseif ($data->status=='Approved')
                                                <span class="badge badge-pill badge-cyan">Approved</span>
                                                @else
                                                <span class="badge badge-pill badge-red">Denied</span>
                                                @endif

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                            <div id="invoice" class="p-h-30">
                                <div class="m-t-15 lh-2">
                                    <div class="inline-block">
                                        <img class="img-fluid" src="{{asset('assets/images/logo/yu.png')}}" alt="">
                                    </div>
                                    <div class="float-right">
                                        <div class="m-t-15 lh-2">
                                            <div class="inline-block">
                                                @if($data->status=='Approved')
                                                <img class="img-fluid" src="{{asset('assets/images/logo/yu.png')}}" alt="">
                                                @else
                                                <img class="img-fluid" src="{{asset('assets/images/logo/logo-white.png')}}" alt="">
                                                @endif
                                            </div>
                                    </div>
                                </div>



                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('agent.footer')
