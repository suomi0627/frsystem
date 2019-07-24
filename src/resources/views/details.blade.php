@extends('layouts.app')

@section('content')

<!-- Bootstrapの定形コード… -->

<div class="panel-body">
    <!-- バリデーションエラーの表示 -->
    @include('common.errors')
</div>

<div class="container">

    <h4>施設XXX</h4>

    <form action="xxx.php" method="post">
        <div>日付:</div><input type="date" name="date"></label>
        <input type="submit" value="送信">
    </form>

    <form>
        <h5 id="target_title">Fromより過去日付は、Toで指定出来ません。</h5>
        <label>From:</label>
        <input type="time" id="timepickerFrom" placeholder="クリックして下さい" />

        <label>To:</label>
        <input type="time" id="timepickerTo" placeholder="クリックして下さい" />
    </form>

</div>
@endsection
