@extends('admin.master')
@section('title', 'edit Dashboard')
@section('content')
    <div class="mt-3 row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Product Form</h4>
                    <h5 class="text-center text-success">{{ session('message') }}</h5>
                    <hr>
                    <form class="form-horizontal p-t-20" action="{{ route('product.update',['id'=> $product->id]) }}" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Category Name <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <select class="form-control" name="category_id" id="categoryId">
                                    <option value=""disabled selected>-- Selection Category --</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected':'' }}>{{$category->name}}</option>
                                    @endforeach;
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Sub Category Name <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <select class="form-control" name="sub_category_id" id="subCategoryId">
                                    <option value="" disabled selected>-- Selection Sub Category --</option>
                                    @foreach ($sub_categories as $sub_category)
                                        <option value="{{ $sub_category->id }}" {{ $sub_category->id == $product->sub_category_id ? 'selected':'' }}>{{$sub_category->name}}</option>
                                    @endforeach;
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Brand <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <select class="form-control" name="brand_id">
                                    <option value="disabled selected">-- Selection Brand --</option>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}"{{ $brand->id == $product->brand_id ? 'selected':'' }}>{{$brand->name}}</option>
                                    @endforeach;
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Unit <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <select class="form-control" name="unit_id">
                                    <option value="disabled selected">-- Selection Unit --</option>
                                    @foreach ($units as $unit)
                                        <option value="{{ $unit->id }}"{{ $unit->id == $product->unit_id ? 'selected':'' }}>{{$unit->name}}</option>
                                    @endforeach;
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Product Name <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" name="name" value="{{$product->name}}" class="form-control" id=""
                                       placeholder="Product Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Product Code <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" name="code" value="{{$product->code}}" class="form-control" id=""
                                       placeholder="Product Code">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Product Model</label>
                            <div class="col-sm-9">
                                <input type="text" name="model" value="{{$product->model}}" class="form-control" id=""
                                       placeholder="Product Model">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Product Stock Amount <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" name="stock_amount" value="{{$product->stock_amount}}" class="form-control" id=""
                                       placeholder="Product Stock Amount">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Product Price <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="number" name="regular_price" value="{{$product->regular_price}}" class="form-control" id=""
                                           placeholder="Regular Price">
                                    <input type="text" name="selling_price" value="{{$product->selling_price}}" class="form-control" id=""
                                           placeholder="Selling Price">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label">Short Description <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="short_description" value="{{$product->short_description}}" id="exampleInputEmail3" placeholder="Short Description"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label ">Long
                                Description <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <textarea class="form-control summernote" value="{{$product->long_description}}" name="long_description" id="exampleInputEmail3"
                                          placeholder="Long Description"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="form-label col-sm-3 control-label" for="web">Feature Image <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="file" name="image" id="input-file-now" class="dropify" accept="image/*" />
                                <img src="{{asset($product->image)}}" alt="image" height="100" width="130">

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="form-label col-sm-3 control-label" for="web">Other Image <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="file" name="other_image[]" multiple id="input-file-now" class="dropify" />
                                @foreach($product->otherImages as $otherImage)
                                    <img src="{{asset($otherImage->image)}}" alt="image" height="100" width="130">
                                @endforeach

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword4" class="col-sm-3 control-label">Publication Status</label>
                            <div class="col-sm-9">
                                <label class="me-3"><input type="radio"  name="status" {{$product->status == 1 ? 'checked':''}} value="1" >Published</label>
                                <label><input type="radio" name="status" {{$product->status == 2 ? 'checked':''}} value="2">UnPublished</label>
                            </div>
                        </div>
                        <div class="form-group row m-b-0">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="text-white btn btn-success waves-effect waves-light">
                                    Update  Product Info
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
