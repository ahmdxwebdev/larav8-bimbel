@extends('main')

@section('title', 'Edu Levels')
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-auto">
                <div class="card mt-4">
                    <div class="card-header">
                        <div class="float-start">
                            <strong>Data Edu Level</strong>
                        </div>
                        <div class="float-end">
                            <a href="{{ url('edulevels') }}" class="btn btn-secondary btn-sm"><i class="fas fa-arrow-left"></i> Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 offset-md-4">
                                <form action="{{ url('edulevels') }}" method="POST">
                                    @csrf
                                    <div class="mb-3" class="text-capitalized">
                                        <label for="" class="form-label">Nama Jenjang </label>
                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" autofocus >
                                        @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="mb-3" class="text-capitalized">
                                        <label for="" class="form-label">Keterangan</label>
                                        <textarea name="desc" class="form-control @error('desc') is-invalid @enderror" value="{{old('desc')}}" autofocus ></textarea>
                                        @error('desc')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    </div>
                                    <button type="submit" class="btn btn-success">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
