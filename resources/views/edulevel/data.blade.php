@extends('main')

@section('title', 'Edu Levels')
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-auto">
                @if(session('status'))
                <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">{{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                @endif
                <div class="card mt-4">
                    <div class="card-header">
                        <div class="float-start">
                            <strong>Data Edu Level</strong>
                        </div>
                        <div class="float-end">
                            <a href="{{ url('edulevels/add') }}" class="btn btn-success btn-sm"><i class="fas fa-plus"></i> Add</a>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Desc.</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody >
                                @foreach ($edulevels as $item)
                                    <tr class="text-capitalize">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->desc }}</td>
                                        <td>
                                            <a href="{{ url('edulevels/edit/'.$item->id) }}" class="btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="right" title="Edit Data"><i class="far fa-edit"></i></a>
                                            <form action="{{ url('edulevels/'.$item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus data?')">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger btn-sm">
                                                    <i class="far fa-trash-alt"> </i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerE1)
        })
    </script>

@endsection
