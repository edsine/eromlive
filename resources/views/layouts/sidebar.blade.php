<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">NIWA Service Portal</li>
                <li class="active">
                    <a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                </li>
                <?php
                        if(auth()->user()->id === 1){
                    ?>
                   <li class="submenu">
                    <a href="#"><i class="fa fa-list"></i> <span> Services </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('services.index') }}">Service List</a></li>
                        <li><a href="{{ route('services.create') }}">Add Service</a></li>
                    </ul>
                </li> 
                <li class="submenu">
                    <a href="#"><i class="fa fa-columns"></i> <span> Sub-Services </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('sub-services.index') }}">Sub-Service List</a></li>
                        <li><a href="{{ route('sub-services.create') }}">Add Sub-Services</a></li>
                    </ul>
                </li> 
                
                <?php
            }
        ?>
        <li class="submenu">
            <a href="#"><i class="fa fa-book"></i> <span> My Documents </span> <span class="menu-arrow"></span></a>
            <ul style="display: none;">
                <li><a href="{{ route('documents.index') }}">Documents List</a></li>
                <li><a href="{{ route('documents.create') }}">Add Documents</a></li>
            </ul>
        </li> 
        <li>
            <a href="{{ route('payment.index') }}"><i class="fa fa-user-md"></i> <span>Payments</span></a>
        </li>
        
            </ul>
        </div>
    </div>
</div>