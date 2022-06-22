
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

                                <a href="{{ url('/viewpark') }}" class="breadcrumb-item">Parks</a>
                                     <span class="breadcrumb-item active">Create Park</span>
                     </nav>
                </div>
            </div>

                                            <div class="container">
                                                <div class="tab-content m-t-15">
                            <div class="tab-pane fade show active" id="tab-account" >
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Add Park</h4>
                                    </div>
                                    <div class="card-body">

                                        <form method="POST" action="{{ url ('/updateprk', $data->id) }}">
                                            @csrf

                                               <div class="row">
                                                <div class="col-md-8">
                                                     <div class="row">
                                                     <div class="col form-group">
                                                   <label for="name">Park Name</label>
                                              <input type="text" id="facility" name="name" class="form-control" required="required" value="{{$data->name}}"/>
                                            </div>

                             <div class="col form-group">
                            <label for="address">Address</label>
                            <div class="m-b-15">
                                <input type="text" id="address" name="address" class="form-control" required="required" value="{{$data->address}}" />                            </div>
                           </div>
                         </div>

                        {{-- <input type="hidden" id="address" name="unique_id" value="{{$data->name}}" class="form-control" value="LGA" /> --}}


                         <div class="row">
                        <div class="col form-group">
                            <label for="name">City</label>
                            <input type="text" id="city" name="city" class="form-control" value="{{$data->address}}" />
                         </div>

                        <div class="col form-group">
                            <label for="name">LGA</label>
                            <div class="m-b-15">
                                <select id="lga" name="lga" class="form-control">
	                                <option value="{{$data->lga}}">{{$data->lga}}</option>
	                                 <option value="Alimosho">Alimosho</option>
	                                <option value="Ajeromi-Ifelodun">Ajeromi-Ifelodun</option>
	                                <option value="Kosofe">Kosofe</option>
	                                <option value="Mushin">Mushin</option>
	                                <option value="Oshodi-Isolo">Oshodi-Isolo</option>
	                                <option value="Ojo">Ojo</option>
	                                <option value="Ikorodu">Ikorodu</option>
	                                <option value="Surulere">Surulere</option>
	                                <option value="Ifako-Ijaiye">Ifako-Ijaiye</option>
	                                <option value="Agege">Agege</option>
	                                <option value="Somolu">Somolu</option>
	                                <option value="Amuwo-Odofin">Amuwo-Odofin</option>
	                                <option value="Lagos Mainland">Lagos Mainland</option>
	                                <option value="Ikeja">Ikeja</option>
	                                <option value="Eti-Osa">Eti-Osa</option>
	                                <option value="Badagry">Badagry</option>
	                                <option value="Apapa">Apapa</option>
	                                <option value="Lagos Island">Lagos Island</option>
	                                <option value="Epe">Epe</option>
	                                <option value="Ibeju-Lekki">Ibeju-Lekki</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col form-group">
                            <label for="name">Owner</label>
                            <div class="m-b-15">
                                <select id="type" name="user_id" class="form-control">
                                    <option value=" ">{{$data->user->name}}</option>
                                    @foreach ($data as $vendor)
                                    <option value="{{$vendor->user->id}}">{{$vendor->user->name}}</option>
                                    @endforeach
                        </select>
                         </div>
                        </div>

                        <div class="col form-group">
                            <label for="name">size</label>
                            <div class="m-b-15">
                                <input type="text" id="park_size" name="size" class="form-control" required="required" {{$data->size}} />                        </div>
                        </select>
                         </div>
                        </div>


                    </div>
                                               </div>

                    <div class="row">
                        <div class="col">
                        <input type="submit" value="UPDATE PARK" class="btn btn-primary" />
                     </div>
                    </div>

                </div>
            </div>
            </form>
                                    </div>
                                </div>

                            </div>
</div>
@include('admin.footer')

