<?php 
$nav_users = 'nav-item active'; 
?>
@extends('layouts.app')

@section('content')
<div class="col s12 m7">
    <h2 class="header">JSON</h2>
    
  </div>
<p>{{$data}}</p>

<div class="container">
        <table class="tabel">
      <tr>

        <td>
            Data 1
        </td>
        <td>
                Data 2
            </td>
            <td>
                    Data 3
                </td>
      </tr>
            </table>
</div>


@endsection