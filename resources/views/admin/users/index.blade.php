@extends('layouts.app7')
@section('content')


<div class="container">
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Sn.</th>
        <th scope="col">Name</th>
        <th scope="col">Roles</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
      <tr>
        <th scope="row">
          {{$user->id}}
        </th>
        <td>
          {{$user->name}}
        </td>
        <td>
          {{implode(',', $user->roles()->get()->pluck('name')->toArray())}}
        </td>
        <td>
          {{$user->email}}
        </td>
        <td style="margin-left: auto;margin-right: auto;">
          @can('edit-users')
          <a href="{{ route('admin.users.edit',$user->id)}}">
            <button type="button" class="btn btn-warning  float-left">Edit</button>
          </a>
          @endcan
          @can('delete-users')
          <form action="{{route('admin.users.destroy', $user) }}" method="POST" class="float-left">
            @csrf
            {{ method_field('DELETE') }}
            {{-- <a href="{{ route('admin.users.destroy', $user->id)}}"> --}}
            <button type="submit" class="btn btn-danger">delete</button>
            {{-- </a> --}}
          </form>
          @endcan
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection