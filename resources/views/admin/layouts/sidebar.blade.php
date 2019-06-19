<div class="sidebar" data-color="purple" data-background-color="white" data-image="/admin_asset/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            Management Screen
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin::dashboard')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{route('admin::admins.list')}}">
                    <i class="material-icons">person</i>
                    <p>管理者一覧</p>
                </a>
            </li>

            {{-- 一番下に表示 --}}
            <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Logout</p>
                </a>
            </li>
        </ul>
    </div>
</div>