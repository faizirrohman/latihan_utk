<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Data Peserta Didik Baru</title>
</head>
<body style="font-family: sans-serif" onload="window.print()">
      <center>
          <table width="94%" border="0">
              {{-- <tr>
                  <td rowspan="4" width="10%">
                      <center><div><img src="{{ asset('AdminLTE/assets/img/wk.png') }}" width="100px"></div></center>
                  </td> --}}
                  <td>
                      <b>PENERIMAAN PESERTA DIDIK BARU</b><br>
                      <b>SMK MERDEKA BELAJAR T.P. 2021-2022</b><br>
                  </td>
              </tr>
      
          </table>
      </center>
        <br>
        <center><b>TANDA BUKTI PENDAFTARAN</b></center>
        <br>
          
        <table width="55%" border="0" style="margin-left:3%;margin-right:2%;float:left">
            <tr>
                <td colspan="3" style="background-color: lightgray"><center><b>DATA PESERTA DIDIK BARU</b></center></td>
            </tr>
            <tr>
                <td width="30%"><b>No Registrasi </b></td>
                <td width="3%">:</td>
                <td>{{$dataSiswa->no_reg}}</td>
            </tr>
            <tr>
                <td width="30%"><b>Nama </b></td>
                <td width="3%">:</td>
                <td>{{$dataSiswa->nama}}</td>
            </tr>
            <tr>
                <td width="30%"><b>Jenis Kelamin </b></td>
                <td width="3%">:</td>
                <td>{{$dataSiswa->jk}}</td>
            </tr>
            <tr>
                <td width="30%"><b>Alamat </b></td>
                <td width="3%">:</td>
                <td>{{$dataSiswa->alamat}}</td>
            </tr>
            <tr>
                <td width="30%"><b>Agama </b></td>
                <td width="3%">:</td>
                <td>{{$dataSiswa->agama}}</td>
            </tr>
            <tr>
                <td width="30%"><b>Asal Sekolah </b></td>
                <td width="3%">:</td>
                <td>{{$dataSiswa->asal_sekolah}}</td>
            </tr>
            <tr>
                <td width="30%"><b>Minat Jurusan </b></td>
                <td width="3%">:</td>
                <td>{{$dataSiswa->minat_jurusan}}</td>
            </tr>
        </table>
      </body>
</html>