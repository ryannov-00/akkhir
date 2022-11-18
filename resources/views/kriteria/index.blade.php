@extends('layouts.master')

@section('content')
    

        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tabel </span> Kriteria</h4>

            <!-- Hoverable Table rows -->
            <div class="card">
                <h5 class="card-header"> 
                    <a href="/kriteria/create" class="btn btn-primary">Tambah Kriterria</a> 
                </h5>
                <div class="table-responsive text-nowrap">
                    <div class="card-body">
                        <table class="table table-hover table-borderless">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Kriteria</th>
                                <th>Nama Kriteria</th>
                                <th>Atribut</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            @php
                            $no=1;
                            @endphp
                            @foreach ($kriteria as $k)
                                
                            <tbody class="table-border-bottom-0">
                                <tr>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $no++ }}</strong></td>
                                    <td>{{ $k->kode }}</td>
                                    <td>{{ $k->nama }}</td>
                                    <td>{{ $k->atribut }}</td>
                                <td>
                                {{-- <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                    <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"
                                        ><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);"
                                    ><i class="bx bx-trash me-1"></i> Delete</a>
                                    </div>
                                </div> --}}
                                <div class="btn-group" role="group">
                                    <a class="btn btn-warning" href="/kriteria/{{ $k->id}}/edit">Edit</a>
                                    <form  action="/kriteria/{{ $k->id }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input class="btn btn-danger" type="submit" value="Delete">
                                    </form>
                                </div>
                                </td>
                            </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            <!--/ Hoverable Table rows -->

            <hr class="my-5" />

        </div>
        <!-- / Content -->

@endsection