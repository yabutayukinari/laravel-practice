@extends('admin.layouts.layouts',['pageContents' => 'admins', 'pageType' => 'create'])
@section('title', '管理者登録')
@section('content')
    <div id="content">
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">管理者登録</h4>
                        <p class="card-text">新規登録を行います</p>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-floating">氏名</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-floating">氏名(ふりがな)</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group has-danger">
                                        <label class="bmd-label-floating">ユーザーID</label>
                                        <input type="text" class="form-control">
                                        <label class="control-label" style="color: red">ユーザーIDを入力してください。</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-10">

                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-floating">パスワード <i class="far fa-question-circle" data-toggle="tooltip" data-placement="top" data-html="true" data-container="body" title="パスワードは以下の条件で入力してください。<br/>・半角英数字<br>・8~25文字"></i></label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" :type="passwordFieldType" v-model="password" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">
                                                <i v-show="showPassword" class="fas fa-eye" v-on:click="switchVisibility('show')"
                                                   data-toggle="tooltip" data-placement="top" title="パスワードを表示します"></i>
                                        <i v-show="hidePassword" class="fas fa-eye-slash" v-on:click="switchVisibility('hide')" data-toggle="tooltip" data-placement="top" title="パスワードを非表示にします"></i>

                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="role">権限</label>
                                        <select class="form-control"
                                                id="role">
                                            <option></option>
                                            <option>システム管理者</option>
                                            <option>編集者</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="text-right">
                                <button type="button" class="btn btn-success pull-right" data-toggle="modal"
                                        data-target="#createConfirmModal">確認
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- 確認Modal -->
        <div class="modal fade" id="createConfirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">入力確認</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                            <p class="text-center">この入力内容で登録します。よろしいですか？</p>
                            <div class="row">
                                <div>
                                    <label>氏名</label>
                                    山田　太郎
                                </div>
                            </div>
                            <div class="row">
                                <div>
                                    <label>氏名（ふりがな）</label>
                                    やまだ　たろう
                                </div>
                            </div>
                            <div class="row">
                                <div>
                                    <label>ユーザーID</label>
                                    t_yamada
                                </div>

                            </div>
                            <div class="row">
                                <div>
                                    <label>パスワード</label>
                                    ********
                                </div>
                            </div>
                            <div class="row">
                                <div>
                                    <label>権限</label>
                                    システム管理者
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">キャンセル</button>
                        <button type="button" class="btn btn-success">作成</button>
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