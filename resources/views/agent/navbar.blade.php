

            <!-- Side Nav START -->
            <div class="side-nav" >
                <div class="side-nav-inner" style="margin-top:40px;">
                    <ul class="side-nav-menu scrollable">
                        <li class="nav-item dropdown open">
                            <a class="dropdown-toggle" href="{{ url('home') }}">
                                <span class="icon-holder">
                                    <i class="anticon anticon-dashboard"></i>
                                </span>
                                <span class="title">Dashboard</span>
                            </a>

                        </li>


                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="anticon anticon-car"></i>
                                </span>
                                <span class="title">Manage Petty Cash</span>
                                <span class="arrow">
                                    <i class="arrow-icon"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">

                                <li>
                                    <a href="{{ url('/agentcreatepettycash') }}">Create Petty Cash</a>
                                </li>
                                <li>
                                    <a href="{{ url('/agentlistpettycash') }}">Petty Cash List</a>
                                </li>

                            </ul>
                        </li>

                </div>
            </div>
            <!-- Side Nav END -->
