@extends('layouts.app')

@section('content')

<!-- Bootstrapの定形コード… -->

<div class="panel-body">
    <!-- バリデーションエラーの表示 -->
    @include('common.errors')

    <!-- 新施設フォーム -->
    <form action="/facilities" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        <!-- 施設名 -->
        <div class="form-group">
            <label for="facilities" class="col-sm-3 control-label">施設名</label>

            <div class="col-sm-6">
                <input type="text" name="name" id="facilities-name" class="form-control">
            </div>
        </div>

        <!-- 施設追加ボタン -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> 施設追加
                </button>
            </div>
        </div>
    </form>
</div>

<!-- 現在の施設 -->
@if (count($facilities) > 0)
<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">
            施設名
        </div>

        <div>
            <div class="panel-body">
                <table class="table table-striped facilities-table">

                    <!-- テーブルヘッダー -->
                    <thead>
                        <th>施設一覧</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- テーブルボディー -->
                    <tbody>
                        @foreach ($facilities as $facility)
                        <tr>
                            <!-- 施設名 -->
                            <td class="table-text">

                                <a href="/facilities/{{ $facility->id }}/details">
                                    {{ $facility->name }}
                                </a>
                            </td>

                            <td>
                                <!-- TODO: 削除ボタン -->
                                <form action="/facilities/{{ $facility->id }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button>×</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
@endif
@endsection
