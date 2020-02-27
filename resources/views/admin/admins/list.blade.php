@extends('admin.layouts.layouts',['pageContents' => 'admins', 'pageType' => 'list'])
@section('title', '管理者一覧')
@section('content')
    <div id="content">
        @if (session('create_complete'))
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success" role="alert">
                    aaaaa
                </div>
            </div>
        </div>
        @endif
        <div class="row mb-3">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">
                            管理者一覧検索
                        </h4>
                        <p class="card-text">管理者の検索を行えます</p>
                    </div>
                    <div class="card-body">
                        <form method="get">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="role">権限</label>
                                        <select class="form-control" name="role_id"
                                                id="role">
                                            <option></option>
                                            <option value="1" >システム管理者</option>
                                            <option value="2">管理者</option>
                                            <option value="3">編集者</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name-kana">氏名 <i class="far fa-question-circle" data-toggle="tooltip" data-placement="top" title="氏名または氏名（ふりがな）の部分一致で検索できます。"></i></label>

                                        <input type="text" class="form-control" data-style="btn btn-link"
                                               id="name-kana">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <button type="submit" class="btn btn-primary">検索</button>
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
                                <thead class="">
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th>氏名</th>
                                    <th>氏名（ふりがな）</th>
                                    <th>権限</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($adminList as $admin)
                                    <tr>
                                    <td class="text-center">
                                        {{$admin->id}}
                                    </td>
                                    <td>
                                        {{$admin->name}}
                                    </td>
                                    <td>{{$admin->name_kana}}</td>
                                    <td>
                                        {{$admin->RoleName}}
                                    </td>
                                    <td class="">
                                        <a class="btn btn-success" href="{{route("admin::admins.create.input",['id' => $admin->id])}}">編集</a>
                                        <button type="button" class="btn btn-danger" v-on:click="clickDeleteConfirm({{$admin->id}})">削除
                                        </button>
                                    </td>
                                </tr>
                                    @endforeach
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
                        この管理者を削除しますか？
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">キャンセル</button>
                        <button type="button" class="btn btn-primary" v-on:click="clickDelete">削除</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        const vm = new Vue({
            el: '#content',
            data: {
                deleteId: null
            },
            methods: {
                // 削除確認モーダル表示
                clickDeleteConfirm: function(id){
                    $('#deleteModal').modal('show');
                    this.deleteId = id;
                },
                /**
                 * 削除処理実行
                 */
                clickDelete: function () {
                    axios.post('{{route('admin::admins.delete')}}/'+this.deleteId)
                        .then(function (response) {
                            console.log(response);
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
                }
            }
        });
    </script>
@endsection