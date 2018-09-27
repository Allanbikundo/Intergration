@extends('layouts.app')

@section('content')

<table class="table table-hover">

    <thead>

      <th>Username</th>

      <th>Email</th>

      <th>Created On</th>

    </thead>

    <tbody>

        <h1>Users page</h1>
    {{-- <p>{{$pagebody}}</p> --}}


@foreach($users as $user)

        <tr>

          <td>{{$user->name}} </td>

          <td>{{$user->email}} </td>

          <td>{{$user->created_at}} </td>


        </tr>
@endforeach

    </tbody>

</table>
@endsection