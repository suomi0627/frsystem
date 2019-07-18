@extends('layouts.app')

@section('content')

    <!-- Bootstrapの定形コード… -->

    <div class="panel-body">
        <!-- バリデーションエラーの表示 -->
        @include('common.errors')

        <!-- 新施設フォーム -->
        <form action="/facility" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- 施設名 -->
            <div class="form-group">
                <label for="facility" class="col-sm-3 control-label">Facility</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="facility-name" class="form-control">
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

    <!-- TODO: 現在の施設 -->
@endsection
