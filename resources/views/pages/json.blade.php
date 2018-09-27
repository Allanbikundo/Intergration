<?php 
$nav_users = 'nav-item active'; 
?>
@extends('layouts.app')

@section('content')
<div class="col s12 m7">
    <h2 class="header">JSON</h2>
    
  </div>
<?php
$data = json_decode($data , true); ?>


<div class="card-body">
        <table class="table table-hover">
     
                <thead>
                    
                        <th>iHRIS</th>
                  
                        <th>DHIS2</th>
                  
                      </thead>
                      <tbody>
            @foreach ($data as $row)
            <tr>
            <td>{{ $row['ihris']}}</td> 
            <td>{{ $row['dhis2']}}</td> 
            </tr>
         @endforeach
                      </tbody>
            </table>
</div>


@endsection