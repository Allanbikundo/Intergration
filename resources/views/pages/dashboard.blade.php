@extends('layouts.app')

@section('content')
<div class="col s12 m7">
    <h2 class="header">Dashboard</h2>
    
  </div>
  <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">import_export</i>
                  </div>
                  <p class="card-category">Failed Transactions</p>
                  <h3 class="card-title">12
                    <small>Failed</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-danger">warning</i>
                    <a>Address Issues!</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">history</i>
                  </div>
                  <p class="card-category">Average Response Time</p>
                  <h3 class="card-title">21 seconds</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Last 24 Hours
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">update</i>
                  </div>
                  <p class="card-category">Transaction load per hour</p>
                  <h3 class="card-title">75</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i> satisfactory
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">info</i>
                  </div>
                  <p class="card-category">Transaction statuses</p>
                  <h3 class="card-title"></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">info</i> satisfactory
                  </div>
                </div>
              </div>
            </div>

            </div>
            </div>   
            <div class="content">
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
                          HTTP METHOD
                        </th>
                        <th>
                          PATH
                        </th>
                        <th>
                          REQUEST TIME
                        </th>
                        <th>
                         REQUEST PARAMETERS
                        </th>
                        <th>
                          STATUS
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