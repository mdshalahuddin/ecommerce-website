@extends('admin.master')
@section('title', 'Category Dashboard')
@section('content')
    <div class="mt-3 row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Table</h4>
                    <h6 class="card-subtitle">Data table example</h6>
                    <div class="table-responsive m-t-40">
                        <p class="text-center text-success">{{ Session::get('message') }}</p>
                        <table id="myTable" class="table border table-striped">
                            <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>Unit Name</th>
                                    <th>Unit Code</th>
                                    <th>Unit Description</th>
                                    <th>Publication Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($units as $unit)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $unit->name }} </td>
                                        <td>{{ $unit->code }} </td>
                                        <td>{{ $unit->description }}</td>
                                        <td>{{ $unit->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                        <td>
                                            <a href="{{ route('unit.edit', ['id' => $unit->id]) }}"
                                                class="btn btn-success btn-sm">
                                                <i class="ti-agenda"></i>
                                            </a>
                                            <a href="{{ route('unit.delete', ['id' => $unit->id]) }}"
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
