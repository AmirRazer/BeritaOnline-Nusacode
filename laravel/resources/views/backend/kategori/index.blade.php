@extends('backend.app')
@section('content')
    <section class="section">

        <div class="row" id="table-hover-row">

            <div class="col-12">
                <div class="card">
                    <div class="d-flex justify-content-end">
                        <a href="#" class="btn btn-primary me-3 mt-3 mb-3">Tambah Kategori</a>
                    </div>
                     
                    
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>NAMA</th>
                                        <th>DESKRIPSI</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach ($kategori as $index => $item)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->deskripsi }}</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">Edit</a>
                                            <a href="#" class="btn btn-danger">Hapus</a>
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
    </section>
@endsection
