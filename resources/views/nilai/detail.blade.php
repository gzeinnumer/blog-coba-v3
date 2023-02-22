@extends('layouts.main')
@section('name')
    <div class="container">
        <table class="table table bordered">
            <thead>
                
                <tr>
                    <th>Nama</th>
                    <th>Bp </th>
                    <th>Nilai</th>
                </tr>
            </thead>
            <tbody>
                @foreach($detail_nobp['filter'] as $nilai)
                    <tr class="">
                        
                        <td>{{ $nilai['nama'] }}</td>
                        <td>{{ $nilai['nobp'] }}</td>
                        <td>{{ $nilai['nilai'] }}</td>
                    </tr>
                @endforeach
                <tr>
                    <td>Rata-rata</td>
                    <td></td>
                    <td colspan="3">
                        {{ $detail_nobp['rata'] }}
                    </td>

                </tr>
            </tbody>
        </table>
    </div>
@endsection