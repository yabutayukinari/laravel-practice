@extends('admin.layouts.layouts',['pageContents' => 'admins', 'pageType' => 'create'])
@section('title', '管理者登録')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">管理者登録</h4>
                        <p class="card-category">新規登録を行います</p>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-floating">氏名</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-floating">氏名(ふりがな)</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group bmd-form-group has-danger">
                                        <label class="bmd-label-floating">ユーザーID</label>
                                        <input type="text" class="form-control">
                                        <label class="control-label" style="color: red">ユーザーIDを入力してください。</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-floating">パスワード</label>
                                        <input type="password" class="form-control">
                                        <small id="passwordHelp" class="form-text text-muted">半角英数字8~25文字</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
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
                            <button type="button" class="btn btn-success pull-right" data-toggle="modal"
                                    data-target="#createConfirmModal">確認</button>
                            <div class="clearfix"></div>
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
                                    <label >氏名</label>
                                    山田　太郎
                                </div>
                            </div>
                            <div class="row">
                                <div>
                                    <label >氏名（ふりがな）</label>
                                    やまだ　たろう
                                </div>
                            </div>
                            <div class="row">
                                <div>
                                    <label >ユーザーID</label>
                                    t_yamada
                                </div>

                            </div>
                            <div class="row">
                                <div>
                                    <label >パスワード</label>
                                    ********
                                </div>
                            </div>
                            <div class="row">
                                <div>
                                    <label >権限</label>
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

@endsection