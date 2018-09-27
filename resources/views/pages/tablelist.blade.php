@extends('layouts.app')

@section('content')
<div class="col s12 m7">
    <h2 class="header">Audit Logs</h2>
    
  </div>
  <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title ">Transaction Table</h4>
                  <p class="card-category"> All Transaction over the past one month</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                      <th>
                          #
                        </th>
                        <th>
                          Event Action/Outcome
                        </th>
                        <th>
                          Event Type
                        </th>
                        <th>
                          Event ID
                        </th>
                        <th>
                         Source ID
                        </th>
                        <th>
                         Event Type
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
                          <td>
                          ########
                          </td>
                          <td >
                          ########
                          </td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

@endsection