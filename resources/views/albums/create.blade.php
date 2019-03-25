@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Albums
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
      <form method="post" action="{{ route('albums.store') }}">
          <div class="form-group">
              @csrf
              <label for="albumname">Album name:</label>
              <input type="text" class="form-control" name="albumname"/>
          </div>
          <div class="form-group">
            @csrf
              <label for="productyear">Album product year:</label>
              <input type="text" class="form-control" name="productyear"/>
          </div>
          <div class="form-group">
            @csrf
              <label for="kind">Kind of the album:</label>
              <input type="text" class="form-control" name="kind"/>
          </div>
          <div class="form-group">
            @csrf
              <label for="cover">link for the cover of the album:</label>
              <input type="text" class="form-control" name="cover"/>
          </div>
          <div class="form-group">
            @csrf
              <label for="label">Label of the album:</label>
              <input type="text" class="form-control" name="label"/>
          </div>
          <div class="form-group">
            @csrf
              <label for="rank">Rank for the album:</label>
              <input type="text" class="form-control" name="rank"/>
          </div>
          <div class="form-group">
              @csrf
              <label for="name">Song name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
            @csrf
              <label for="productdate">Song product date:</label>
              <input type="text" class="form-control" name="productdate"/>
          </div>
          <div class="form-group">
              @csrf
              <label for="lastname">Artist lastname:</label>
              <input type="text" class="form-control" name="lastname"/>
          </div>
          <div class="form-group">
            @csrf
              <label for="firstname">Artist firstname:</label>
              <input type="text" class="form-control" name="firstname"/>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection