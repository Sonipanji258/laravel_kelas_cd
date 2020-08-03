@extends('layouts.app')
@section('title','Prodi Page')
@section('bread1','Program Studi')
@section('bread2','Data')
@section('content')
    <h2>Master Data Studi </h2>
    <table class="table table-striped" id="mhs-table">
     <thead>
            <tr>
                <th>No</th>
                <th>Kode Prodi</th>
                <th>Nama Prodi</th>
                <th>Kaprodi</th>
                <th>Pilihan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($list_prodi as $key => $item)
             <tr>
                <td>({ $key+1 })</td>
                <td>({ $item -> kode_prodi })</td>
                <td>({ $item -> nama_prodi })</td>
                <td>({ $item -> kaprodi })</td>
             </tr>
            @endforeach
        </tbody>
    </table>
@endsection