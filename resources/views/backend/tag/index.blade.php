@extends('backend.app')
@section('content')
    <section class="section">

        <div class="row" id="table-hover-row">

            <div class="col-12">
                <div class="card">
                    <div class="d-flex justify-content-end">
                        <a href="{{route('tag-create')}}" class="btn btn-primary me-3 mt-3 mb-3">Tambah Kategori</a>
                    </div>
                     
                    
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>NAMA</th>
                                       
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach ($tag as $index => $item)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $item->nama }}</td>
                                        
                                        <td>
                                            <a href="tag/edit/{{$item->id}}" class="btn btn-primary">Edit</a>
                                            <a href="tag/delete/{{$item->id}}">
                                             <button onclick="confirm('Yakin hapus data?')" type="button" class="btn btn-danger">Hapus</button>
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
    </section>
    
@endsection
