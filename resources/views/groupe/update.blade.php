@extends('../layout/app')
<!-- Enseignat should connect to his account to set the field "updated BY"--->
@section("content")
  <div class="container">
    <div class="row">
    <a href="{{route('group')}}">
        <button class="btn btn-default">Back</button>
    </a></div>
    <div class="form col-lg-6 col-lg-offset-3">
      <form action="{{ route('saveUpdateGroup', $group->id) }}" method="POST">
          {{ csrf_field() }}
        <div class="form-group">
            <label>Id group :</label>
            <input type="text" name="id_group" value="{{$group->id}}" class="form-control" disabled id="id_group">
        </div>
        <div class="form-group" id="Nom_up_err">
            <label>Name :</label>
            <input type="text" name="name" value="{{$group->name}}" class="form-control" id="nom_update">
            <span class="text-danger" id="nom_span_err"></span>
        </div>
        <div class="form-group" id="Stream_up_err">
            <label>Stream :</label>
            <input type="text" name="stream" value="{{$group->stream}}" class="form-control" id="stream_update">
            <span class="text-danger" id="stream_span_err"></span>
        </div>
        <small class="text-danger ">All fields are required</small>
        <div class="form-group">
          <a href="save_updated_group">
            <input type="submit" class="btn btn-primary" value="Save" id="save_group"></button>
          </a>
        </div>
      </form>
    </div>
  </div>
  <script>
    var url_save_update = "{{ route('saveUpdateGroup') }}";
    var token = "{{ Session::token() }}";
  </script>
@endsection
