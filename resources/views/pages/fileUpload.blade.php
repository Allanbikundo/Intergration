@extends('layouts.app')
@section('content')
    <div class="panel panel-primary">
      <div class="panel-heading"><h2>File Upload</h2></div>
      <div class="panel-body">
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        {{-- <img src="images/{{ Session::get('image') }}"> --}}
        @endif
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('file.upload.post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <input type="file" name="file" class="form-control">
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success">Upload</button>
                </div>
            </div>
        </form>
      </div>
      <div class="col-lg-12 col-md-12">
        <div class="card">
          <div class="card-header card-header-warning">
            <h4 class="card-title">Mapping</h4>
            <p class="card-category">This is how the elements in the csv file map to each other</p>
          </div>
          <div class="card-body table-responsive">
            <table class="table table-hover">
              <thead class="text-warning">
                <th>iHRIS</th>
                <th>DHIS2</th>
              </thead>
              <tbody>
                <tr>
                  <td>sad</td>
                  <td>Dakota Rice</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Minerva Hooper</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
</div>
@endsection