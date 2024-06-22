@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Kamar</h1>
        <a href="{{ route('kamar.create') }}" class="btn btn-primary">Tambah Kamar</a>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Nomor Kamar</th>
                    <th>level</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kamar as $kamar)
                    <tr>
                        <td>{{ $kamar->nomor_kamar }}</td>
                        <td>{{ $kamar->level }}</td>
                        <td>{{ $kamar->status }}</td>
                        <td>
                            <a href="{{ route('kamar.edit', $kamar->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('kamar.destroy', $kamar->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection