@extends('../layout/app')
@section("content")
  <div class="container">
    <div class="row">
    <a href="{{route('group')}}">
        <button class="btn btn-default">Back</button>
    </a></div>
    <div class="form col-lg-6 col-lg-offset-3">
      <form action="{{ route('add_group') }}" method="POST">
          {{ csrf_field() }}
        <div class="form-group name_add_err">
            <label>Name :</label>
            <input type="text" name="name" value="" class="form-control" placeholder="Choose a name,exemple: TI11,RSI22..."
            id="add_name">
            <span class="text-danger" id="name_span_add_err"></span>
        </div>
        <div class="form-group">
            <label>Stream :</label>
            <select name="stream" class="form-control" id="s">
              <option value="TI">TI</option>
              <option value="DSI">DSI</option>
              <option value="SEM">SEM</option>
              <option value="RSI">RSI</option>
              <option value="MDW">MDW</option>
            </select>
        </div>
        <div class="form-group">
          <a href="save_updated_group">
            <input type="submit" class="btn btn-primary" value="Add" id="add"></button>
          </a>
        </div>
      </form>
    </div>
  </div>
  <script>
    var add_group = "{{ route('add_group') }}";
    var token = "{{ Session::token() }}";
  </script>
@endsection
