@extends('layouts.medilab')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">
                        <h3>Registrasi Data Pasien</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('pasien', []) }}" method="POST">
                            @method('POST')
                            @csrf
                            <div class="form-group">
                                <label for="my-input">No. KTP</label>
                                <input id="my-input" class="form-control" type="text" name="kode_pasien" value="{{ old('kode_pasien') }}">
                                <span class="text-danger">{{ $errors->first('kode_pasien') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="my-input">Nama Pasien</label>
                                <input id="my-input" class="form-control" type="text" name="nama_pasien" value="{{ old('nama_pasien') }}">
                                <span class="text-danger">{{ $errors->first('nama_pasien') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="my-select">Jenis Kelamin</label>
                                <select id="my-select" class="form-control" name="jenis_kelamin">
                                    @foreach ( $list_jk as $a )
                                        <option value="{{ $a }}" @selected($a==old('jenis_kelamin'))>{{ $a }}</option>
                                    @endforeach
                                    <option value="">Pilih Jenis Kelamin</option>
                                </select>
                                <span class="text-danger">{{ $errors->first('jenis_kelamin') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="my-select">Status</label>
                                <br>
                                &emsp;<input type="radio" name="status" id="" class="form-check-input"
                                value="Belum Menikah"> Belum Menikah
                                <br>
                                &emsp;<input type="radio" name="status" id="" class="form-check-input"
                                value="Sudah Menikah"> Sudah Menikah
                                <br>
                                <span class="text-danger">{{ $errors->first('status') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="my-input">Alamat</label>
                                <textarea name="alamat" id="" cols="30" rows="3" class="form-control">
                                    {{ old('alamat') }}
                                </textarea>
                                <span class="text-danger">{{ $errors->first('alamat') }}</span>
                            </div>
                            <div class="card-footer">
                                <button type="sumbit" class="btn btn-primary">Register</button>
                                </form>
                            </div>
                    </div>
                    <div class="card-footer">

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection