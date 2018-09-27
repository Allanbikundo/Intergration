<?php 
$nav_users = 'nav-item active'; 
?>
@extends('layouts.app')

@section('content')
<div class="col s12 m7">
    <h2 class="header">Users</h2>
    
  </div>
  <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title ">Users</h4>
                  <p class="card-category"> </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                      <th>
                          #
                        </th>
                        <th>
                          Email
                        </th>
                        <th>
                         Name
                        </th>
                        <th>
                          Permission Groups
                        </th>
                        
                      </thead>
                      <tbody>
                        <tr>
                        <td>
                           1
                          </td>
                          <td>
                           ########
                          </td>
                          <td>
                          ########
                          </td>
                          <td>
                          ########
                          </td>
                          
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

<div class="container">
    <div class="card card-success">
        <div class="card-header">
                <h4>Users page</h4>
        </div>
        <div class="card-body">
                <table class="table table-hover">

                        <thead>
                    
                          <th>Username</th>
                    
                          <th>Email</th>
                    
                          <th>Created On</th>
                    
                        </thead>
                    
                        <tbody>
                    
                            
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
        </div>
    </div>
</div>


@endsection