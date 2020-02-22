@extends('admin.layouts.master')
@section('content')
<main class="app-layout-content">
  <div class="container-fluid p-y-md">
  <h2 class="section-title">Manager products</h2>
    <div class="row">
                  <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data" >
                      @csrf
                      <div class="card">
                        <div class="card-header">
                            <h4>Create product</h4>
                        </div>
                        <div class="card-block">
                          <div class="container mt-3" style="width: 80%">
                            <div class="col-md-6">
                            <fieldset class="form-group">
                              <label>Name product <span class="text-red">*</span></label>
                                <input type="text" class="form-control" id="name_product" placeholder="Please enter name product" name="name_product">
                                <p class="meserr" style="color:red">{{ $errors->first('name_product') }}</p>
                            </fieldset>
                            </div>
                            <div class="col-md-6">
                            <fieldset class="form-group">
                              <label>Brand <span class="text-red">*</span></label>
                                <input type="text" class="form-control" id="brand_product" placeholder="Please enter brand product" name="brand_product">
                                <p class="meserr" style="color:red">{{ $errors->first('brand_product') }}</p>
                            </fieldset>
                          </div>
                          <div class="col-md-12">
                            <fieldset class="form-group">
                              <label>Description <span class="text-red">*</span></label>
                              <textarea class="form-control" rows="5" id="description" name="description"></textarea>
                              <p class="meserr" style="color:red">{{ $errors->first('description') }}</p>
                            </fieldset>
                          </div>
                          <div class="col-md-6">
                            <fieldset class="form-group">
                              <label>Price <span class="text-red">*</span></label>
                              <input type="number" name="price" class="form-control">
                              <p class="meserr" style="color:red">{{ $errors->first('price') }}</p>
                            </fieldset>
                          </div>
                          <div class="col-md-6">
                            <fieldset class="form-group">
                              <label for="formGroupExampleInput">Categories</label>
                                <select class="form-control" name="category_id">
                                @foreach ($categories as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                                </select>
                            </fieldset>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                       <div class="card-block card-block-full">
                         <div class="container"  style="width: 80%">
                          <div class="col-md-6">
                              <fieldset class="form-group">
                             <label>Name images<span class="text-red">*</span></label>
                             <input type="text" class="form-control" id="name_image" placeholder="Please enter name image" name="name_image">
                             <p class="meserr" style="color:red">{{ $errors->first('name_image')}}</p>
                             </fieldset>
                          </div>
                          <div class="col-md-6">
                            <fieldset class="form-group">
                             <label for="image">Images</label>
                             <input type="file" name="images[]" multiple class="form-control" style="height: 45px">
                             <p class="meserr" style="color:red">{{ $errors->first('images')}}</p>
                             </fieldset>
                          </div>
                          <div class="col-md-6">
                            <fieldset class="form-group">
                              <label>Quantity<span class="text-red">*</span></label>
                              <input type="number" name="quantity" id="quantity" class="form-control">
                              <p class="meserr" style="color:red">{{ $errors->first('quantity') }}</p>
                            </fieldset>
                          </div>
                          <div class="col-md-6">
                             <button style="margin-left: 270px" class="btn btn-success">Create product</button>
                          </div>
                         </div>
                       </div>
                     </div>
        </form>
      </div>
   </div>
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
<script src="{{ asset('admin/js/plugins/slick/slick.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins/chartjs/Chart.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins/flot/jquery.flot.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins/flot/jquery.flot.pie.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins/flot/jquery.flot.stack.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins/flot/jquery.flot.resize.min.js') }}"></script>
@endsection
