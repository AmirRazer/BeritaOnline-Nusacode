@extends('backend.app')
@section('content')
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah Kategori</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                                            
                            <form action="{{ route('kategori-store') }}" method="POST"class="form form-horizontal">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>Nama Kategori</label>
                                        </div>
                                        <div class="col-md-10 form-group">
                                            <input type="text" id="first-name" class="form-control" name="nama"
                                                placeholder="Nama Kategori">
                                            @error('nama')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-2">
                                            <label>Diskripsi</label>
                                        </div>
                                        <div class="col-md-10 form-group">
                                            <input type="text" id="email-id" class="form-control" name="diskripsi"
                                                placeholder="Diskripsi Kategori">
                                            @error('diskripsi')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>


                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
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
