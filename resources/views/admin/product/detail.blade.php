@extends('admin.master')
@section('title', 'Detail Dashboard')
@section('content')
    <div class="mt-3 row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Products Information</h4>
                    <div class="table-responsive m-t-40">
                        <p class="text-center text-success">{{ Session::get('message') }}</p>
                        <table  class="table border table-striped">
                            <tr>
                                <th>Product Id</th>
                                <th>{{$product->id}}</th>
                            </tr>
                            <tr>
                                <th>Product Name</th>
                                <th>{{$product->name}}</th>
                            </tr>
                            <tr>
                                <th>Product Code</th>
                                <th>{{$product->code}}</th>
                            </tr>
                            <tr>
                                <th>Product Model</th>
                                <th>{{$product->model}}</th>
                            </tr>
                            <tr>
                                <th>Product Category</th>
                                <th>{{$product->category->name}}</th>
                            </tr>
                            <tr>
                                <th>Product Sub Category</th>
                                <th>{{$product->subCategory->name}}</th>
                            </tr>
                            <tr>
                                <th>Product Brand</th>
                                <th>{{$product->brand->name}}</th>
                            </tr>
                            <tr>
                                <th>Product Unit</th>
                                <th>{{$product->unit->name}}</th>
                            </tr>
                            <tr>
                                <th>Product Stock Amount</th>
                                <th>{{$product->stock_amount}}</th>
                            </tr>
                            <tr>
                                <th>Product Regular Price</th>
                                <th>{{$product->regular_price}}</th>
                            </tr>
                            <tr>
                                <th>Product Selling Price</th>
                                <th>{{$product->selling_price}}</th>
                            </tr>
                            <tr>
                                <th>Product Feature Image</th>
                                <th><img src="{{asset($product->image)}}" alt="img" height="100" width="120"></th>
                            </tr>
                            <tr>
                                <th>Product Other Image</th>
                                <th>
                                @foreach($product->otherImages as $otherImage)
                                <img src="{{asset($otherImage->image)}}" alt="img" height="100" width="120">
                                @endforeach
                                </th>
                            </tr>
                            <tr>
                                <th>Product Hit Count</th>
                                <th>{{$product->hit_count}}</th>
                            </tr>
                            <tr>
                                <th>Product Sales Count</th>
                                <th>{{$product->sales_count}}</th>                            </tr>
                            <tr>
                                <th>Product Feature Status</th>
                                <th>{{$product->features_status == 1 ? 'Feature' : 'Not Feature' }}</th>                            </tr>
                            <tr>
                                <th>Publication Status</th>
                                <th>{{ $product->status == 1 ? 'Published' : 'Unpublished' }}</th>                            </tr>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
