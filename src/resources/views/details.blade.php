@extends('layouts.app')

@section('content')

<!-- Bootstrapの定形コード… -->

<div class="panel-body">
    <!-- バリデーションエラーの表示 -->
    @include('common.errors')
</div>

<!-- 現在の施設 -->
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            施設名
        </div>

        <div>
            <div class="panel-body">
                <table class="table table-striped facilities-table">

                    <!-- テーブルヘッダー -->
                    <thead>
                        <th>予約詳細</th>
                        <th>&nbsp;</th>
                    </thead>
