@extends('admin.master')
@section('title', 'Category Dashboard')
@section('content')
    <div class="mt-3 row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">edit Unit Form</h4>
                    <h5 class="text-center text-success">{{ session('message') }}</h5>
                    <hr>
                    <form class="form-horizontal p-t-20" action="{{ route('unit.update', ['id' => $unit->id]) }}"
                        method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Unit Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" value="{{ $unit->name }}" class="form-control"
                                    id="exampleInputuname3" placeholder="Category Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Unit Code</label>
                            <div class="col-sm-9">
                                <input type="text" name="code" value="{{ $unit->code }}" class="form-control"
                                    id="exampleInputuname3" placeholder="Category Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label">Unit Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="description" id="exampleInputEmail3" placeholder="Category Description">{{ $unit->description }}</textarea>
                            </div>
                        </div>
                        < <div class="form-group row">
                            <label for="inputPassword4" class="col-sm-3 control-label">Publication Status</label>
                            <div class="col-sm-9">
                                <label class="me-3"><input type="radio" {{ $unit->status == 1 ? 'checked' : '' }}
                                        name="status" value="1" checked>Published</label>
                                <label><input type="radio" {{ $unit->status == 2 ? 'checked' : '' }} name="status"
                                        value="2">UnPublished</label>
                            </div>
                </div>
                <div class="form-group row m-b-0">
                    <div class="offset-sm-3 col-sm-9">
                        <button type="submit" class="text-white btn btn-success waves-effect waves-light">
                            Update Unit Info
                        </button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>

@endsection
