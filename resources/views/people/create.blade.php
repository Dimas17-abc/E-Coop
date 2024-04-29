@extends('layouts.main')

@section('content')
    <h1>Form Pendaftaran</h1>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            @foreach ($errors->all() as $item)
                <li>{{ $item }}</li>
            @endforeach
        </div>
    @endif
    </div>
    @endif

    <form action="{{ route('person.store') }}" method="post">
        @csrf

        <div class="mb-2">
            <label for="">Nama</label>
            <input type="text" name="name" class="form-control" placeholder="isi nama" id="">
        </div>
        <div class="mb-2">
            <input type="submit" value="simpan" class="btn btn-succes">
        </div>
    </form>
@endsection
