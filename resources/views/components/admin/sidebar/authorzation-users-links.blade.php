<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAuth" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Authorization</span>
    </a>
    <div id="collapseAuth" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Posts</h6>
            <a class="collapse-item" href="{{route('role.index')}}">User Roles</a>
            <a class="collapse-item" href="{{route('permission.index')}}">User Permissions</a>
        </div>
    </div>
</li>
