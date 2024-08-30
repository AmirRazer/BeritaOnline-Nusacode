@extends('backend.app')
@section('content')
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Update Tag</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                                        
                            <form action="{{ route('tag-update', $data->id) }}" method = "POST" class="form form-horizontal">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>Nama Tag</label>
                                        </div>
                                        <div class="col-md-10 form-group">
                                            <input type="text" id="first-name" class="form-control" name="nama"
                                                placeholder="Nama Kategori" value="{{$data->nama}}">
                                            @error('nama')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Update</button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
