<!-- <div class="layout-wrapper layout-content-navbar  ">
    <div class="layout-container"> -->


<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    @php $role=DB::table('role')->where('id', Auth::user()->role )->get();
    $permissionArray = [];
    if(count($role) > 0){
    $permissionArray = json_decode($role[0]->permission);
    }

    @endphp

    <div class="app-brand demo ">
        <a href="/" class="app-brand-link">
            <span class="app-brand-logo demo"><img src="frontend_css/assets/img/favicon.jpeg" alt=""
                    style="width: 30px;"></span>
            <span class="app-brand-text demo menu-text fw-bold ms-2">Devakrishna</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx menu-toggle-icon d-none d-xl-block fs-4 align-middle"></i>
            <i class="bx bx-x d-block d-xl-none bx-sm align-middle"></i>
        </a>
    </div>


    <div class="menu-divider mt-0  ">
    </div>

    <div class="menu-inner-shadow"></div>



    <ul class="menu-inner py-1">


        <li class="menu-item gallery_page">
            <a href="/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-image-add"></i>
                <div data-i18n="Gallery">Gallery</div>
            </a>
        </li>

        <li class="menu-item category">
            <a href="/category" class="menu-link">
                <i class="menu-icon tf-icons bx bx-archive"></i>
                <div data-i18n="Category">Category</div>
            </a>
        </li>




    </ul>
    </li>


    </ul>



</aside>
<!-- / Menu -->