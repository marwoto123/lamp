@extends('layouts.main')
@section('container')
    {{-- {{   dd($data); }} --}}
    <div class="col-12">
        <div class="card recent-sales overflow-auto">
            <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                    </li>
                    <li><a class="dropdown-item" href="#">ssss</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
            </div>
            <div class="card-body">
                <div class="row">
                    <h5 class="card-title">Data Pegawai</h5>
                </div>
                <a href="/pegawai/create"><button type="button" class="btn btn-success colo">Tambah + </button></a>
                <table class="table table-borderless datatable mt-2">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">No Telfon</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pegawai as $table)
                            <tr>
                                <th scope="row"><a href="#">{{ $table->id }} </a></th>
                                <td>{{ $table->nama }}</td>
                                <td><a href="#" class="text-primary">{{ $table->jeniskelamin }}</a></td>
                                <td>{{ $table->alamat }}</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-danger">Delete</button>
                                    <button type="button" class="btn btn-sm btn-info">Edit</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div><!-- End Recent Sales -->
@endsection
