@extends('layouts.master')

@section('content')
<div class="main">

    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Edit Data Siswa</h3>
                        </div>
                        <div class="panel-body">
                            <form action="/siswa/{{$siswa->id}}/update" method="POST" enctype="multipart/form-data">
                                {{@csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nama Depan</label>
                                    <input name="nama_depan" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Khoirul" value="{{$siswa->nama_depan}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nama Belakang</label>
                                    <input name="nama_belakang" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Saya" value="{{$siswa->nama_belakang}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1" value>
                                    <option value="Laki-Laki" @if($siswa->jenis_kelamin == 'Laki-Laki') selected @endif >Laki-Laki</option>
                                    <option value="Perempuan" @if($siswa->jenis_kelamin == 'Perempuan') selected @endif >Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Agama</label>
                                    <input name="agama" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Islam"value="{{$siswa->agama}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Alamat</label>
                                 <textarea name="alamat"  class="form-control" id="exampleFormControlTextarea1" rows="3">{{$siswa->alamat}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Avatar</label>
                                    <input type="file" name="avatar" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-warning ">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection



@section('content1')


<h1>Edit Data Siswa</h1>
@if(session('sukses'))
    <div class="alert alert-primary" role="alert">
     {{session('sukses')}}
    </div>
@endif
<div class="row">
    <div class="col-lg-12">
        <form action="/siswa/{{$siswa->id}}/update" method="POST">
            {{@csrf_field()}}
            <div class="form-group">
                <label for="exampleFormControlInput1">Nama Depan</label>
                <input name="nama_depan" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Khoirul" value="{{$siswa->nama_depan}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Nama Belakang</label>
                <input name="nama_belakang" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Saya" value="{{$siswa->nama_belakang}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1" value>
                <option value="Laki-Laki" @if($siswa->jenis_kelamin == 'Laki-Laki') selected @endif >Laki-Laki</option>
                <option value="Perempuan" @if($siswa->jenis_kelamin == 'Perempuan') selected @endif >Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Agama</label>
                <input name="agama" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Islam"value="{{$siswa->agama}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Alamat</label>
             <textarea name="alamat"  class="form-control" id="exampleFormControlTextarea1" rows="3">{{$siswa->alamat}}</textarea>
            </div>
            <button type="submit" class="btn btn-warning ">Update</button>
        </form>
    </div>
</div>
@endsection
