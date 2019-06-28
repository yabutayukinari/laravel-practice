<nav id="sidebar">
    <div class="sidebar-header">
        {{-- メインタイトル --}}
        <h3>@yield('productTitle')</h3>
        {{-- 画面タイトル --}}
        <p>@yield('title')</p>
    </div>
    <ul class="list-unstyled components">
        <li @if($pageContents === 'dashboard')class="active" @endif>
            @if($pageContents === 'dashboard')
                <span>ダッシュボード</span>
            @else
                <a href="{{route('admin::dashboard')}}">ダッシュボード</a>

            @endif
        </li>
        <li @if(url()->current() === route('admin::users.list'))class="active" @endif>
            @if(url()->current() === route('admin::users.list'))
                <span>会員管理</span>
            @else
                <a href="{{route('admin::admins.list')}}">会員管理</a>
            @endif
        </li>
        <li>
            <a href="#">問い合わせ管理</a>
        </li>
        <li @if($pageContents === 'admins') class="active" @endif>
            <a href="#adminsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">管理者管理 <i class="fas fa-angle-down"></i></a>
            <ul class="collapse list-unstyled @if($pageContents === 'admins') show @endif" id="adminsSubmenu">
                <li @if($pageContents === 'admins' && $pageType === 'list') class="active" @endif>
                    <a href="{{route('admin::admins.list')}}">管理者一覧</a>
                </li>
                <li @if($pageContents === 'admins' && $pageType === 'create') class="active" @endif>
                    <a href="{{route('admin::admins.create.start')}}">管理者登録</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{route('admin::auth.logout')}}">ログアウト</a>
        </li>
    </ul>
</nav>