
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

                                <a href="{{ url('/listpettycash') }}" class="breadcrumb-item">Invoice</a>
                                     <span class="breadcrumb-item active">Create Invoice</span>
                     </nav>
                </div>
            </div>

                            <div class="container">
                            <div class="tab-content m-t-15">
                            <div class="tab-pane fade show active" id="tab-account" >
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">PETTY CASH REQUEST</h4>
                                    </div>
                                    <div class="card-body">
                                        @if(session()->has('message'))
                                             <div class="alert alert-success">
                                                  {{ session()->get('message') }}
                                             </div>
                                        @endif

                                        <form method="POST" action="{{ url ('/addpettycash') }}">
                                            @csrf

                                               <div class="row">
                                                <div class="col-md-12">
                                                     <div class="row">
                                                     <div class="col form-group">
                                                   <label for="name">Department</label>
                                              <input type="text" id="department" name="department" class="form-control @error('department') is-invalid @enderror"  placeholder="Toiletries ..." />                        </div>

                                              @error('department')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror

                             <div class="col form-group">
                                <label>Date</label>
                                <div class="input-affix m-b-10">
                                 <i class="prefix-icon anticon anticon-calendar"></i>
                                 <input type="text" class="form-control datepicker-input @error('date') is-invalid @enderror" name="date" placeholder="Date of transaction">

                                 @error('date')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                               </div>
                             </div>
                         </div>



                         <div class="row">
                        <div class="col form-group">
                            <label for="name">Amount Requested</label>
                            <input type="text" id="amount" name="amount" class="form-control @error('amount') is-invalid @enderror" placeholder="less than N20,000..." />

                            @error('amount')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                         </div>

                        <div class="col form-group">
                            <label for="name">Requested By</label>
                            <input type="text" id="Requested_by" name="requestedby" class="form-control @error('requestedby') is-invalid @enderror" placeholder="Requested By....." />

                            @error('requestedby')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 form-group">
                            <label for="name">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Requested by Igwe for fuel ..." > </textarea>

                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>

                        <div class="col-6 form-group">
                            <label class="font-weight-semibold" for="Company">Company:</label>
                                    <select name="company" class="form-control">
                                        <option value="eticket">E-ticket</option>
                                        <option value='AOA'>AOA Windstream </option>
                                    </select>
                                </div>
                         </div>
                        </div>


                    </div>
                 </div>


                 <button type="submit" class="btn btn-primary col-md-12">SEND FOR APPROVAL</button>


                    </div>

                </div>
            </div>
            </form>
                                    </div>
                                </div>

                            </div>
</div>
@include('admin.footer')

