@extends('layouts.app')

@section('content')

<!-- Bootstrapの定形コード… -->

<div class="panel-body">
    <!-- バリデーションエラーの表示 -->
    @include('common.errors')
</div>

<div class="container">
    <div class="panel panel-info">

        <div class="panel-heading">予約申込</div>
        <div class="panel-body">

            <form method="POST" action="/facilities/{{ $id }}/details">
                {{ csrf_field() }}

                <div class="form-group">
                    <label class="control-label">日付</label>
                    <input name="apply_date" class="form-control" type="date">
                </div>

                <div class="form-group">
                    <label class="control-label">開始時間</label>
                    <input name="start_at" class="form-control" type="time" value="10:00" step="900" min="08:00"
                        max="20:45">
                </div>

                <div class="form-group">
                    <label class="control-label">終了時間</label>
                    <input name="end_at" class="form-control" type="time" value="11:00" step="900" min="08:15"
                        max="21:00">
                </div>

                <div>
                    <button type="submit" class="btn btn-default">予約</button>
                </div>
            </form>
        </div>
    </div>
</div>




<div class="container">
    <div class="panel panel-success">
        <div class="panel-heading">予約一覧</div>
        <div class="panel-body">
            {{-- 以下、テーブル --}}
            <!-- 予約一覧 -->
            @if (count($details) > 0)
            <div>
                <table class="table facility-table">

                    <!-- テーブルヘッダー -->
                    <thead>
                        <th>日付</th>
                        <th>開始</th>
                        <th>終了</th>
                        <th>施設id</th>
                        <th></th>
                    </thead>

                    <!-- テーブルボディー -->
                    <tbody>
                        @foreach ($details as $detail)
                        <tr>
                            {{-- 日にち --}}
                            <td class="table-text text-center">
                                <div>{{ $detail->apply_date }}</div>
                            </td>

                            {{-- 開始時間 --}}
                            <td class="table-text text-center">
                                <div>{{ $detail->start_at }}</div>
                            </td>

                            {{-- 終了時間 --}}
                            <td class="table-text text-center">
                                <div>{{ $detail->end_at }}</div>
                            </td>

                            {{-- 名前 --}}
                            <td class="table-text text-center">
                                <div>{{ $detail->facility_id }}</div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @endif
    </div>
</div>

@endsection
