@extends('admin.layouts.layouts',['pageContents' => 'admins', 'pageType' => 'create'])
@section('title', '管理者登録')
@section('head')
    <style type="text/css" xmlns:v-bind="http://www.w3.org/1999/xhtml" xmlns:v-bind="http://www.w3.org/1999/xhtml"
           xmlns:v-bind="http://www.w3.org/1999/xhtml">
        /*初期表示時にテンプレートが一瞬表示されてしまうのを防ぐ*/
        [v-cloak] {
            display: none;
        }
    </style>
@endsection
@section('content')
    <div id="content" v-cloak>
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">管理者登録</h4>
                        <p class="card-text">新規登録を行います</p>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin::admins.create.save')}}" method="post">
                            {{-- 氏名 --}}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group" v-bind:class="{'has-danger':allErrors.name}">
                                        <label class="bmd-label-floating">@lang('admin/admins/attributes.name')</label>
                                        <input type="text" class="form-control" v-model="form.name"
                                               v-bind:class="{'is-invalid':allErrors.name}">
                                        <label v-if="allErrors.name" class="invalid-feedback">
                                            @{{ allErrors.name[0] }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            {{-- 氏名(ふりがな) --}}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group"
                                         v-bind:class="{'has-danger':allErrors.name_kana}">
                                        <label class="bmd-label-floating">@lang('admin/admins/attributes.name_kana')</label>
                                        <input type="text" class="form-control" v-model="form.name_kana"
                                               v-bind:class="{'is-invalid':allErrors.name_kana}">
                                        <label v-if="allErrors.name_kana" class="invalid-feedback">
                                            @{{ allErrors.name_kana[0] }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            {{-- 管理者コード --}}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group has-danger"
                                         v-bind:class="{'has-danger':allErrors.admin_code}">
                                        <label class="bmd-label-floating ">@lang('admin/admins/attributes.admin_code')</label>
                                        <input type="text" class="form-control" v-model="form.admin_code"
                                               v-bind:class="{'is-invalid':allErrors.admin_code}" autocomplete="off">
                                        <label v-if="allErrors.admin_code" class="invalid-feedback">
                                            @{{ allErrors.admin_code[0] }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            {{-- パスワード --}}
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-floating">@lang('admin/admins/attributes.password') <i
                                                    class="far fa-question-circle" data-toggle="tooltip"
                                                    data-placement="top" data-html="true" data-container="body"
                                                    title="パスワードは以下の条件で入力してください。<br/>半角英数字<br>8~25文字"></i></label>
                                        <div class="input-group mb-3">
                                            {{-- 2019/07/01 yabuta パスワードのautocompleteを無効にする URL:https://developer.mozilla.org/ja/docs/Web/Security/Securing_your_site/Turning_off_form_autocompletion#The_autocomplete_attribute_and_login_fields --}}
                                            <input type="text" class="form-control" :type="passwordFieldType"
                                                   v-bind:class="{'is-invalid':allErrors.admin_code}"
                                                   v-model="form.password" aria-label="Recipient's username"
                                                   aria-describedby="basic-addon2" autocomplete="new-password">
                                            <label v-if="allErrors.password" class="invalid-feedback order-last">
                                                @{{ allErrors.password[0] }}
                                            </label>
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2">
                                                    <i v-show="showPassword" class="fas fa-eye"
                                                       v-on:click="switchVisibility('show')"
                                                       data-toggle="tooltip" data-placement="top"
                                                       title="パスワードを表示します"></i>
                                                    <i v-show="hidePassword" class="fas fa-eye-slash"
                                                       v-on:click="switchVisibility('hide')" data-toggle="tooltip"
                                                       data-placement="top" title="パスワードを非表示にします"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- 権限 --}}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="role">@lang('admin/admins/attributes.role_id')</label>
                                        <select class="custom-select" v-bind:class="{'is-invalid':allErrors.role_id}"
                                                id="role" v-model="form.role_id">
                                            <option></option>
                                            <option value="1">システム管理者</option>
                                            <option value="2">編集者</option>
                                        </select>
                                        <label v-if="allErrors.role_id" class="invalid-feedback">
                                            @{{ allErrors.role_id[0] }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="text-right">
                                <button type="button" class="btn btn-success pull-right" v-on:click="clickConfirm">確認
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
                                {{-- 氏名 --}}
                                <div>
                                    <label>@lang('admin/admins/attributes.name')</label>
                                    @{{ form.name }}
                                </div>
                            </div>
                            {{-- 氏名（ふりがな） --}}
                            <div class="row">
                                <div>
                                    <label>@lang('admin/admins/attributes.name_kana')</label>
                                    @{{ form.name_kana }}
                                </div>
                            </div>
                            {{-- 管理者コード --}}
                            <div class="row">
                                <div>
                                    <label>@lang('admin/admins/attributes.admin_code')</label>
                                    @{{ form.admin_code }}
                                </div>
                            </div>
                            {{-- パスワード --}}
                            <div class="row">
                                <div>
                                    <label>@lang('admin/admins/attributes.password')</label>
                                    ********
                                </div>
                            </div>
                            {{-- 権限 --}}
                            <div class="row">
                                <div>
                                    <label>@lang('admin/admins/attributes.role_id')</label>
                                    @{{ role_name }}
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
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>

        var vm = new Vue({
            el: '#content',
            data: {
                form: {
                    name: '',
                    name_kana: '',
                    admin_code: '',
                    password: '',
                    role_id: '',
                },
                role_name: '',
                allErrors: [],
                passwordFieldType: 'password',
                showPassword: true,
                hidePassword: false,
            },
            watch: {
                role_id: function (value) {
                    switch (value) {
                        case '1':
                            this.role_name = '管理者';
                            break;
                        case '2':
                            this.role_name = '編集者';
                            break;
                        default:
                            this.role_name = '';
                    }
                }
            },
            methods: {
                /**
                 * パスワード表示
                 */
                switchVisibility: function (status) {
                    this.passwordFieldType = this.passwordFieldType === 'password' ? 'text' : 'password';
                    this.showPassword = (status !== 'show');
                    this.hidePassword = (status !== 'hide');
                },
                /**
                 * 確認ボタン押下
                 */
                clickConfirm: function () {
                    dataform = new FormData();
                    dataform.append('name', this.form.name);
                    dataform.append('name_kana', this.form.name_kana);
                    dataform.append('admin_code', this.form.admin_code);
                    dataform.append('password', this.form.password);
                    dataform.append('role_id', this.form.role_id);

                    axios.post('{{route('admin::admins.create.validate')}}', dataform)
                        .then(function (response) {
                            console.log(response);
                            $('#createConfirmModal').modal('show')
                        })
                        .catch(function (error) {
                            // console.log(error);

                            vm.allErrors = error.response.data.errors;
                        });
                },
                clickSave: function () {
                  submit
                }
            }
        });
    </script>
@endsection