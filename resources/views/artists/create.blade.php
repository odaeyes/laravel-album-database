@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Artists
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('artists.store') }}">
          <div class="form-group">
              @csrf
              <label for="lastname">Artist lastname:</label>
              <input type="text" class="form-control" name="lastname"/>
          </div>
          <div class="form-group">
              <label for="firstname">Artist firstname:</label>
              <input type="text" class="form-control" name="firstname"/>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection