@extends('layout')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col col-md-offset-3 col-md-6">
        <nav class="panel panel-default">
          <div class="panel-heading">日記を追加する</div>
          <div class="panel-body">
            @if($errors->any())
              <div class="alert alert-danger">
                @foreach($errors->all() as $message)
                  <p>{{ $message }}</p>
                @endforeach
              </div>
            @endif
            <form action="{{ route('diaries.create') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="content">日記</label>
                <input type="text" class="form-control" name="content" id="content" value="{{ old('content') }}" />
              </div>
              <div>
                <input type="file" name="image">
              </div>
              <div class="text-right">
                <button type="submit" class="btn btn-primary">送信</button>
              </div>
            </form>
          </div>
        </nav>
      </div>
    </div>
  </div>
@endsection