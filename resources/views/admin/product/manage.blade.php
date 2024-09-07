@extends('admin.master')
@section('title', 'Product Dashboard')
@section('content')
    <div class="mt-3 row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Products Information</h4>
                    <div class="table-responsive m-t-40">
                        <p class="text-center text-success">{{ Session::get('message') }}</p>
                        <table id="myTable" class="table border table-striped">
                            <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>Name</th>
                                    <th>Code</th>
                                    <th>Stock Amount</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $product->name }} </td>
                                        <td>{{ $product->code }}</td>
                                        <td>{{ $product->stock_amount }}</td>
                                        <td><img src="{{ asset($product->image) }}" alt="{{ $product->name }}"
                                                height="50" width="80" />
                                        </td>
                                        <td>{{ $product->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                        <td>
                                            <a href="{{ route('product.detail', ['id' => $product->id]) }}"
                                                class="btn btn-info btn-sm">
                                                <i class="ti-agenda"></i>
                                            </a>
                                            <a href="{{ route('product.edit', ['id' => $product->id]) }}"
                                                class="btn btn-success btn-sm">
                                                <i class="ti-agenda"></i>
                                            </a>
                                            <a href="{{ route('product.delete', ['id' => $product->id]) }}"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are You sure Delete');">
                                                <i class="ti-reddit"></i>
                                            </a>
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

@endsection
