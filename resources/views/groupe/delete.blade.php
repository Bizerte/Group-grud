@extends('../layout/app')
@section("content")
<div class="container">
  <div class="row">
  <a href="{{route('group')}}">
      <button class="btn btn-default">Back</button>
  </a></div>
  <div class="form col-lg-6 col-lg-offset-3">
    <form action="{{route('saveDeleteGroup', $group->id) }}" method="POST">
        {{ csrf_field() }}
      <div class="form-group">
          <label>Id group :</label>
          <input type="text" name="id_group" value="{{$group->id}}" class="form-control" disabled>
      </div>
      <div class="form-group">
        <a href="delete_group">
          <input type="submit" class="btn btn-primary" value="Delete"></button>
        </a>
      </div>
    </form>
  </div>
</div>
<script>
  var token = "{{ Session::token() }}";
</script>
@endsection
