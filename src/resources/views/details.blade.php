@extends('layouts.app')

@section('content')

<!-- Bootstrapの定形コード… -->

<div class="panel-body">
    <!-- バリデーションエラーの表示 -->
    @include('common.errors')
</div>

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">予約詳細</div>
        <div class="panel-body">
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
                <button class="btn btn-default">予約</button>
            </form>
        </div>
    </div>
</div>

@endsection
