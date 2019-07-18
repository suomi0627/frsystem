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
                <label for="facilities" class="col-sm-3 control-label">facilities</label>

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
	    <div class="panel panel-default">
	        <div class="panel-heading">
	            現在の施設
	        </div>

	        <div class="panel-body">
	            <table class="table table-striped facilities-table">

	                <!-- テーブルヘッダー -->
	                <thead>
	                    <th>facilities</th>
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
	                            </td>
	                        </tr>
	                    @endforeach
	                </tbody>
	            </table>
	        </div>
	    </div>
	@endif
@endsection
