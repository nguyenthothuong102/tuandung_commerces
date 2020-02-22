@extends('admin.layouts.master')
@section('content')
  <main class="app-layout-content">
      <div class="container-fluid p-y-md">
        <div class="row" style="margin-bottom: 20px;">
          <div class="col-md-12">
            <div class="pull-left">
              <a href="{{ route('admin.dashboard') }}" class="btn btn-primary"><i class="ion-ios-arrow-back"></i> Manager</a>
            </div>
            <div class="pull-right">
              <a href="{{ route('admin.categories.create') }}" class="btn btn-success btn-app-blue">Add categories</a>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
          @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
          <div class="col-md-4">
            <div class="card">
              <div class="card-header bg-cyan bg-inverse">
                  </div>
                  <div class="card-block">
                    <div class="table-responsive">
                      <table class="table">
                                  <thead>
                                      <tr class="bg-info">
                                          <th class="text-center" style="width: 50px;">ID</th>
                                          <th>Name</th>
                                          <th class="text-center">Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($categories as $category)
                                      <tr style="cursor: pointer;" class="bg-warning" class="category">
                                      <td class="text-center" id="category_id">{{ $category->id }}</td>
                                            <td>
                                              <input type="text" class="my-input" id="category_name" value="{{ $category->name }}" spellcheck="false">
                                            </td>
                                            <td class="text-center">
                                                  <div class="btn-group">
                                               <form action="{{ route('admin.categories.destroy','$category->id') }}" method="post" style="display: inline">
                                                      @csrf
                                                      @method('delete')
                                                      <button type="submit" class="btn btn-xs btn-default btdelete"><i class="ion-close"></i></button>
                                                  </form>

                                                  </div>
                                              </td>
                                        </tr>
                                      @endforeach
                                  </tbody>
                              </table>
                    </div>
                  </div>
            </div>
          </div>
        </div>
      </div>
      @if (session('type'))
      <div id="message" type="{{ session('type') }}" message="{{ session('message') }}"></div>
    @endif
  </main>
@endsection
@section('javascript')
  <script src="{{ asset('admin/js/core/jquery.min.js') }}"></script>
  <script src="{{ asset('admin/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('admin/js/core/jquery.slimscroll.min.js') }}"></script>
  <script src="{{ asset('admin/js/core/jquery.scrollLock.min.js') }}"></script>
  <script src="{{ asset('admin/js/core/jquery.placeholder.min.js') }}"></script>
  <script src="{{ asset('admin/js/app.js') }}"></script>
  <script src="{{ asset('admin/js/app-custom.js') }}"></script>
  <script src="{{ asset('admin/js/plugins/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
@endsection
