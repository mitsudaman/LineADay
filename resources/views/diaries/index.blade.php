@extends('layout')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col col-md-3">
      </div>
      <div class="column col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading">Diary</div>
          <div class="panel-body">
            <div class="text-right">
              <a href="{{ route('diaries.create') }}" class="btn btn-default btn-block">
                日記を追加する
              </a>
            </div>
          </div>
          <table class="table">
            <thead>
            <tr>
              <th>画像</th>
              <th>日記</th>
              <th></th>
              <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($diaries as $diary)
              <tr>
                <td class="col-md-2">
                @if($diary->img_path == null)
                  <img src="{{ asset('noimage.jpg') }}" width="50px" height="50px">
                @else
                <img src="{{ Storage::url($diary->img_path) }}" width="50px" height="50px">
                @endif
                </td>
                <td class="col-md-8">{{ $diary->content }}</td>
                <td class="col-md-1">
                <a href="{{ route('diaries.edit', ['id' => $diary->id]) }}">
                  編集
                </a>
                </td>
                <td class="col-md-1">
                <a href="{{ route('diaries.delete', ['id' => $diary->id]) }}">
                  削除
                </a>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        <div class="justify-content-center">
            {{ $diaries->links() }}
        </div>
      </div>
      <div class="column col-md-3"></div>
    </div>
  </div>
@endsection