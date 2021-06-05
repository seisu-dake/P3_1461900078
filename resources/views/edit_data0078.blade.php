<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Edit Data</title>
</head>
<body>
  <form action="{{url('Dokter/', $dokter->id)}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="patch">
    id : <input type="text" name="id" value="{{$dokter->id}}">
    nama : <input type="text" name="nama" value="{{$dokter->nama}}">
    jabatan : <input type="text" name="jabatan" value="{{$dokter->jabatan}}">
    <button type="submit">Simpan</button>
  </form>  
</body>
</html>