@extends('admin.layouts.layouts')
@section('content')
    <div class="container-fluid">
        <button class="btn btn-primary"><i class="material-icons">add</i>新規登録</button>
        <div class="row">

        </div>
        <div class="row">
            <div class="col-md-4 ">
                <div class="card">
                    <div class="card-body">
                        絞り込み検索
                        <form>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">権限</label>
                                        <select class="form-control" data-style="btn btn-link"
                                                id="exampleFormControlSelect1">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">氏名(ふりがな)</label>
                                        <input type="text" class="form-control" data-style="btn btn-link"
                                                id="exampleFormControlSelect1">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <button type="button" class="btn btn-info">検索</button>
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
                                <thead class=" text-primary">
                                <tr>
                                    <th>ID</th>
                                    <th>名前</th>
                                    <th>権限</th>
                                    <th>登録日</th>
                                    <th>アクション</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        Dakota Rice
                                    </td>
                                    <td>
                                        管理者
                                    </td>
                                    <td>
                                        2019-06-17
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-info">編集</button>
                                        <button type="button" class="btn btn-danger">削除</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        Minerva Hooper
                                    </td>
                                    <td>
                                        Curaçao
                                    </td>
                                    <td>
                                        Sinaai-Waas
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-info">編集</button>
                                        <button type="button" class="btn btn-danger">削除</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        3
                                    </td>
                                    <td>
                                        Sage Rodriguez
                                    </td>
                                    <td>
                                        Netherlands
                                    </td>
                                    <td>
                                        Baileux
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-info">編集</button>
                                        <button type="button" class="btn btn-danger">削除</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        4
                                    </td>
                                    <td>
                                        Philip Chaney
                                    </td>
                                    <td>
                                        Korea, South
                                    </td>
                                    <td>
                                        Overland Park
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-info">編集</button>
                                        <button type="button" class="btn btn-danger">削除</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        Doris Greene
                                    </td>
                                    <td>
                                        Malawi
                                    </td>
                                    <td>
                                        Feldkirchen in Kärnten
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-info">編集</button>
                                        <button type="button" class="btn btn-danger">削除</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        6
                                    </td>
                                    <td>
                                        Mason Porter
                                    </td>
                                    <td>Chile</td>
                                    <td>Gloucester</td>
                                    <td>
                                        <button type="button" class="btn btn-info">編集</button>
                                        <button type="button" class="btn btn-danger">削除</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection