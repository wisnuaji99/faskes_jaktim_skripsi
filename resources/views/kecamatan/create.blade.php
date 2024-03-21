@extends('layouts.app')
 
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Kecamatan</h1>
        </div>
 
        <div class="section-body">
 
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-unlock"></i> Tambah Kecamatan</h4>
                </div>
 
                <div class="card-body">
                    <form action="{{ route('kecamatan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
 
                        <div class="form-group">
                            <label>NAMA KECAMATAN</label>
                            <input type="text" name="kecamatan" value="{{ old('kecamatan') }}" placeholder="Masukkan Nama Kecamatan"
                                class="form-control @error('title') is-invalid @enderror">
 
                            @error('kecamatan')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
 
                        <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i>
                            SIMPAN</button>
                        <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>
 
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@stop