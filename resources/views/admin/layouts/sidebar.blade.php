<nav id="sidebar">
    <div class="sidebar-header">
        {{-- メインタイトル --}}
        <h3>@yield('productTitle')</h3>
        {{-- 画面タイトル --}}
        <p>@yield('title')</p>
    </div>
    <ul class="list-unstyled components">
        <li class="active">
            @if(url()->current() === route('admin::dashboard'))
                <span><p class="oi oi-dashboard"></p>ダッシュボード</span>
            @else
                <a href="{{route('admin::dashboard')}}">
                    <span class="oi oi-dashboard"></span>ダッシュボード</a>

            @endif
        </li>
        <li>
            <a href="#"><i class="material-icons">person</i>会員管理</a>
        </li>
        <li>
            <a href="#">問い合わせ管理</a>
        </li>
        <li>
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">設定</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="{{route('admin::admins.list')}}">管理者管理</a>
                </li>
            </ul>
        </li>
    </ul>

    <ul class="list-unstyled CTAs">
        <li>
            <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
        </li>
        <li>
            <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
        </li>
    </ul>
</nav>