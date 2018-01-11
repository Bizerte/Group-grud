@extends('../layout/app')

@section("content")
<div class="container">
  <div class="row">
    @foreach ($groups as $group)
        <div class="group col-lg-3">
          <div class="text-center">
            <h2>{{ $group->name}}</h2>
          </div><hr>
          <div class="informations">
            <p>Stream : {{ $group->stream }}</p>
            <p>Created at: {{ $group->created_at }}</p>
            <p>Updated at :{{ $group->updated_at }}</p>
            @if($group->created_by != NULL)
              <p>Created by :{{ $group->created_by }}</p>
            @endif
            @if($group->updated_by != NULL)
              <p>Updated by :{{ $group->updated_by }}</p>
            @endif
          </div>
          <div class="actions">
            <a href="Show_blade_update/{{$group->id}}">
                <button class="btn btn-primary">Update</button>
            </a>
                <button class="btn btn-danger delete_group" id="{{ $group->id }}">Delete</button>
          </div>
        </div>
    @endforeach
    <div class="col-lg-12">
      {{$groups->links()}}
    </div>
  </div>
</div>
<script>
  var url_check_id_group = "{{route('check_group')}}";
  //for location.href
  var url_group = "{{ route('group')}}";
  var token = "{{ Session::token() }}";
</script>
@endsection
