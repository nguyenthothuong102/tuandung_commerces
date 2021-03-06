@extends('admin.layouts.master')


@section('content')

<main class="app-layout-content">
    <!-- Header search form -->
    <form class="navbar-form navbar-left app-search-form" role="search" method="get" action="">
        <div class="form-group">
            <div class="input-group">
                <input class="form-control" type="search" id="search-input" name="key" placeholder="Tìm kiếm..." />
                <span class="input-group-btn">
  <button class="btn" type="submit"><i class="ion-ios-search-strong"></i></button>
  </span>
            </div>
        </div>
    </form>

    <div class="container-fluid p-y-md">
      <br>
      <br>
    <!-- Card Tabs -->
    <h2 class="section-title"><a href="{{ route('admin.user.index') }}"> List Users </a>|| <a href="{{ route('admin.user.list_active') }}"> Active </a> || <a href=""> Create Users </a></h2>

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
      <div class="col-md-12">
      <!-- Card Tabs Default Style -->
        <div class="card">
          <ul class="nav nav-tabs" data-toggle="tabs">
            <li class="active">
              <a href="#btabs-static-home">TẤT CẢ NGƯỜI DÙNG</a>
            </li>
          </ul>
            <div class="card-block tab-content">
              <div class="tab-pane active" id="btabs-static-home">
               <div class="card-body">
                <table class="table table-hover table-danger">
                                        <thead>
                                            <tr class="bg-info">
                                                <th>ID</th>
                                                <th>Email</th>
                                                <th>First_Name</th>
                                                <th>Last_Name</th>
                                                <th>Tel</th>
                                                <th>Address</th>
                                                <th>isActive</th>
                                                <th>Role</th>
                                                <th class="text-center" style="width: 150px;">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($users as $user)
                                              <tr class="bg-warning">
                                                <td class="text-center">{{$user->id}}</td>
                                                <td class="text-left">{{$user->email}}</td>
                                                <td class="text-center">{{$user->first_name}}</td>
                                                <td class="text-center">{{$user->last_name}}</td>
                                                <td class="text-center">{{$user->tel}}</td>
                                                <td class="text-center">{{$user->address}}</td>
                                                <td class="text-center">{{$user->isActive}}</td>
                                                  <form action="{{ route('admin.user.active',$user->id) }}" method="get" style="display: inline">
                                                        @csrf
                                                        <button type="submit" class="btn btn-xs btn-default btdelete"><i class="fas fa-toggle-on"></i></button>
                                                    </form>
                                                <td class="text-center">
                                                    <span class="label label-success">{{$user->role->name}}</span>
                                                </td>

                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <a class="btn btn-xs btn-default" href="{{ route('admin.user.edit', $user->id ) }}" type="button" data-toggle="tooltip" title="Chỉnh sửa"><i class="ion-edit"></i></a>
                                                      <form action="{{ route('admin.user.delete',$user->id) }}" method="post" style="display: inline">
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
</main>

@endsection

