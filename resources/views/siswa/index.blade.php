@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Siswa</h3>
                            <div class="right">

                                <button type="button" class="btn"><i class="lnr lnr-plus-circle" data-toggle="modal" data-target="#exampleModal"></i></button>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                         <th>Nama Depan</th>
                                        <th>Nama Belakang</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Agama</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 0;?>
                                    @foreach ($data_siswa as $siswa)
                                    <?php $no++ ;?>
                                    <tr>
                                     <td>{{ $no }}</td>
                                    <td> <a href="/siswa/{{$siswa->id}}/profile"> {{$siswa->nama_depan}}</td> </a>
                                        <td> <a href="#">{{$siswa->nama_belakang}}</td></a>
                                        <td>{{$siswa->jenis_kelamin}}</td>
                                        <td>{{$siswa->agama}}</td>
                                        <td>{{$siswa->alamat}}</td>
                                        <td>
                                            <a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm ('Yakin Akan Menghapus Data')">Delete</a>
                                        </td>
                                    </tr>
                                         @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="/siswa/create" method="POST" enctype="multipart/form-data">
                {{@csrf_field()}}
            <div class="form-group {{$errors->has('nama_depan')? 'has-error': ''}}">
                    <label for="exampleFormControlInput1">Nama Depan</label>
            <input name="nama_depan" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Depan"
            value="{{old('nama_depan')}}">
                  @if($errors->has('nama_depan'))
                        <span class="help-block">{{$errors->first('nama_depan')}}</span>
                  @endif
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Belakang</label>
                    <input name="nama_belakang" type="text" class="form-control" id="exampleFormControlInput1"
                    placeholder="Nama Belakang"  value="{{old('nama_belakang')}}">
                  </div>
                  <div class="form-group  {{$errors->has('email')? 'has-error': ''}}">
                    <label for="exampleFormControlInput1">Email</label>
                    <input name="email" type="email" class="form-control" id="exampleFormControlInput1"
                    placeholder="Email"  value="{{old('email')}}">
                    @if($errors->has('email'))
                      <span class="help-block">{{$errors->first('email')}}</span>
                    @endif
                </div>
                  <div class="form-group  {{$errors->has('jenis_kelamin')? 'has-error': ''}}">
                    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                      <option value="Laki-Laki" {{(old('jenis_kelamin')== 'Laki-Laki')?'selected':''}}>Laki-Laki</option>
                      <option value="Perempuan"{{(old('jenis_kelamin')== 'Perempuan')?'selected':''}}>Lerempuan</option>
                    </select>
                    @if($errors->has('jenis_kelamin'))
                    <span class="help-block">{{$errors->first('jenis_kelamin')}}</span>
                  @endif
                </div>
                  <div class="form-group  {{$errors->has('agama')? 'has-error': ''}}">
                    <label for="exampleFormControlInput1">Agama</label>
                    <input name="agama" type="text" class="form-control" id="exampleFormControlInput1"
                    placeholder="Masukkan Agama"  value="{{old('agama')}}">
                    @if($errors->has('agama'))
                    <span class="help-block">{{$errors->first('agama')}}</span>
                @endif
                </div>
                  <div class="form-group {{$errors->has('alamat')? 'has-error': ''}}">
                    <label for="exampleFormControlTextarea1">Alamat</label>
                    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukkan Alamat"> {{old('alamat')}}</textarea>
                    @if($errors->has('alamat'))
                        <span class="help-block">{{$errors->first('alamat')}}</span>
                    @endif
                </div>
                <div class="form-group ">
                    <label for="exampleFormControlTextarea1">Avatar</label>
                    <input type="file" name="avatar" class="form-control">
                    <label for="profile_image"></label>


                </div>

                    <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
             </form>
        </div>
    </div>
</div>


@stop
