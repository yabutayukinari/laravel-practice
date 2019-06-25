@extends('admin.layouts.layouts',['pageContents' => 'admins', 'pageType' => 'create'])
@section('title', '管理者登録')
@section('content')
    <div id="content">
        <div class="row">
            <div class="col-sm-9 col-md-5 col-lg-3 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">ログイン</h5>
                        <form class="form-signin" method="post" action="{{route('admin::auth.auth')}}">
                            @csrf
                            @if($error_message)
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <p style="color: red">{{$error_message}}</p>
                                    </div>
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-label-group">
                                        <label for="inputEmail">管理者コード</label>
                                        <input type="text" id="admin_code" name="admin_code" class="form-control" placeholder="管理者コード"
                                               autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <div class="form-label-group">
                                        <label for="inputPassword">パスワード</label>
                                        <input type="password" id="inputPassword" name="password" class="form-control"
                                               placeholder="パスワード">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">ログイン
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>

    <script>
        var vm = new Vue({
            el: '#content',
            data: {
                password: '',
                roleId: 0,
                roleName: "",
                isDirty: false,
                passwordFieldType: 'password',
                showPassword: true,
                hidePassword: false

            },
            methods: {
                /**
                 * プルダウン選択イベント
                 * MDLにはプルダウンデザインがないため独自実装が必要
                 *
                 * @param roleId
                 */
                selectRole: function (roleId) {
                    this.roleId = roleId;
                    this.isDirty = true;
                    switch (this.roleId) {
                        case 0 :
                            this.roleName = '';
                            this.isDirty = false;
                            break;
                        case 1 :
                            this.roleName = '管理者';
                            break;
                        case 2 :
                            this.roleName = '編集者';
                            break;
                        case 3 :
                            this.roleName = 'アカウント管理者';
                            break;
                    }
                },
                /**
                 * パスワード表示
                 */
                switchVisibility: function (status) {
                    this.passwordFieldType = this.passwordFieldType === 'password' ? 'text' : 'password';

                    this.showPassword = (status !== 'show');
                    this.hidePassword = (status !== 'hide');
                },
            }
        })
    </script>
@endsection