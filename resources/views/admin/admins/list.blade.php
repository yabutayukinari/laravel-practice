@extends('admin.layouts.layouts')
@section('title', '管理者一覧')
@section('content')
    <div class="container-fluid">
        <a class="btn btn-success" href="{{route("admin::admins.create")}}"><i class="material-icons">add</i>新規登録</a>
        <div class="row">

        </div>
        <div class="row">
            <div class="col-md-4 ">
                <div class="card">
                    <div class="card-body">
                        絞り込み検索
                        <form>
                            <div class="row">
                                <div class="col-md-12">
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
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name-kana">氏名(ふりがな)</label>

                                        <input type="text" class="form-control" data-style="btn btn-link"
                                               id="name-kana">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-primary">検索</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="text-primary">
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th>氏名</th>
                                    <th>氏名（ふりがな）</th>
                                    <th>権限</th>
                                    <th>登録日</th>
                                    <th>更新日</th>
                                    <th class="">アクション</th>
                                </tr>
                                </thead>
                                <tbody>
                                @for($i=1; $i<=6; $i++)
                                    <tr>
                                        <td class="text-center">
                                            {{$i}}
                                        </td>
                                        <td>
                                            山田{{$i}}郎
                                        </td>
                                        <td>やまだ {{$i}}ろう</td>
                                        <td>
                                            管理者
                                        </td>
                                        <td>
                                            2019-06-17 10:00:01
                                        </td>
                                        <td>
                                            2019-06-17 11:24:31
                                        </td>
                                        <td class="">
                                            <a class="btn btn-success" href="{{route("admin::admins.create")}}">編集</a>
                                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                                    data-target="#deleteModal">削除
                                            </button>
                                        </td>
                                    </tr>
                                @endfor
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">削除</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        このアカウントを削除しますか？
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">キャンセル</button>
                        <button type="button" class="btn btn-primary">削除</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection