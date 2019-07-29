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

            <form method="POST" action="/facilities/{id}/details">
                {{ csrf_field() }}
                <div class="form-group">
                    <div>施設名</div>
                    <label class="control-label">日付</label>
                    <input name="apply_date" class="form-control" type="date">
                </div>
                <div class="form-group">
                    <label class="control-label">開始時間</label>
                    <input name="start_at" class="form-control" type="time">
                </div>
                <div class="form-group">
                    <label class="control-label">終了時間</label>
                    <input name="end_at" class="form-control" type="time">
                </div>
                <button type="submit" class="btn btn-default">予約</button>
            </form>
        </div>
    </div>
</div>

<div class="container">
    <div class="panel panel-success">
        <div class="panel-heading">予約が完了しました</div>
        <div class="panel-body">
            {{-- 以下、テーブル --}}
            {{-- 以上、テーブルデータ--}}
            <form>
                <div>施設名</div>

                <form>
                    <div class="form-group">
                        <label class="control-label">日付</label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label class="control-label">開始時間</label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label class="control-label">終了時間</label>
                        <input class="form-control" type="text">
                    </div>
                </form>
            </form>
        </div>
    </div>
</div>

@endsection
