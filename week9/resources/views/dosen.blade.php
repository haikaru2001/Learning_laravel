@extends('layouts.master')

@section('content')
    <div class="container text-center mt-3 py-5">
        <h1>Data {{ $title }}: </h1>
        <div class="row">
            <div class="col">
                <ol class="list-group">
                    @forelse ($dosen as $val)
                        <li class="list-group-item">{{ $val }}</li>
                    @empty
                        <div class="alert alert-dark d-inline-block">Tidak ada data..</div>
                    @endforelse
                </ol>
            </div>
        </div>
    </div>
@endsection
