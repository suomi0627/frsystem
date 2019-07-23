@extends('layouts.app')

@section('content')

<!-- Bootstrapの定形コード… -->

<div class="panel-body">
    <!-- バリデーションエラーの表示 -->
    @include('common.errors')

</div>

<!-- 現在の施設 -->
@if (count($details) > 0)
<div class="panel panel-default">
    <div class="panel-heading">
        施設名
    </div>

    <div class="panel-body">
        <table class="table table-striped facilities-table">

            <!-- テーブルヘッダー -->
            <thead>
                <th>施設一覧</th>
                <th>&nbsp;</th>
            </thead>

            <!-- テーブルボディー -->
            <tbody>
                @foreach ($facilities as $facilities)
                <tr>
                    <!-- 施設名 -->
                    <td class="table-text">
                        <div>{{ $facilities->name }}</div>
                    </td>

                    <td>
                        <!-- TODO: 削除ボタン -->
                        <form action="/facilities/{{ $facilities->id }}" method="POST">
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
@endif
@endsection
