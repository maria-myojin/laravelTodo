<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>laravel TODO</title>
        <!-- cssをインポート -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
    </head>

    <body>
        @include('layouts.header')
        @yield('content')
        <script src="{{ mix('js/app.js') }}"></script>
    </body>

    <div class="container">
        <div class="row">
          <div class="col-2 mt-3 mr-3">
              <label><i class="fab fa-waze"></i> ID
                  <input type="text">
              </label>
          </div>
            <div class="col-2 mt-3 mr-3">
                <label><i class="far fa-comment"></i> タイトル
                    <input type="text">
                </label>
            </div>
            <div class="col-2 mt-3 mr-3">
                <label><i class="far fa-calendar-check"></i> 期限
                    <input type="text">
                </label>
            </div>
            <div class="col-2 mt-3 mr-3">
                <label><i class="fas fa-fire-alt"></i> 優先度
                    <input type="text">
                </label>
            </div>
            <div class="col-3 mt-2 ml-3">
                 <input class="btn btn-success mt-4" type="submit" name="search" value="検索">
            </div>
        </div>

    <table class="table table-bordered table-hover table-sm mt-5">
        <thead  class="bg-info text-white">
            <tr>
                <th class="text-center fix-w-10">ID</th>
                <th class="text-center fix-w-30">タイトル</th>
                <th class="text-center fix-w-70">内容</th>
                <th class="text-center fix-w-50">期限</th>
                <th class="text-center fix-w-50">優先度</th>
                <th class="text-center fix-w-10">編集</th>
            </tr>
        </thead>
        <tbody>
          @foreach($tasks as $task)
          <tr>
            <td class="text-center">{{$task->id}}</td>
            <td class="">{{$task->title}}</td>
            <td class="">{{$task->content}}</td>
            <td class="">{{$task->deadline}}</td>
            <td class="">{{$task->importance}}</td>
            <td><input class="btn btn-info" type="submit" name="search" value="編集"></td>
          </tr>
          @endforeach
        </tbody>
    </table>
    </div>
</html>
