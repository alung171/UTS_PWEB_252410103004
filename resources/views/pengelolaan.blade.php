@extends('layouts.app')

@section('title', 'Pengelolaan Stok Komoditas')

@section('content')
<div class="space-y-6">
    <div class="flex justify-between items-center">
        <div>
            <h1 class="text-2xl font-bold text-slate-800">Pengelolaan Data Stok</h1>
            <p class="text-slate-500 text-sm">Daftar inventaris komoditas yang dikelola oleh {{ $username }}.</p>
        </div>
    </div>

   
    <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-50 text-slate-600 text-xs font-semibold uppercase border-b border-slate-200">
                        <th class="py-3.5 px-4">Kode</th>
                        <th class="py-3.5 px-4">Nama Komoditas</th>
                        <th class="py-3.5 px-4">Kategori</th>
                        <th class="py-3.5 px-4">Stok</th>
                        <th class="py-3.5 px-4">Harga / kg</th>
                        <th class="py-3.5 px-4">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200 text-sm">
                    @foreach($komoditas as $item)
                    <tr class="hover:bg-slate-50 transition">
                        <td class="py-3.5 px-4 font-mono font-medium text-slate-600">{{ $item['id'] }}</td>
                        <td class="py-3.5 px-4 font-bold text-slate-800">{{ $item['nama'] }}</td>
                        <td class="py-3.5 px-4 text-slate-600">{{ $item['kategori'] }}</td>
                        <td class="py-3.5 px-4 text-slate-800 font-semibold">{{ $item['stok'] }} {{ $item['satuan'] }}</td>
                        <td class="py-3.5 px-4 text-slate-700">Rp {{ number_format($item['harga'], 0, ',', '.') }}</td>
                        <td class="py-3.5 px-4">
                            @if($item['status'] == 'Tersedia')
                                <span class="bg-emerald-100 text-emerald-800 text-xs font-semibold px-2.5 py-1 rounded-full">Tersedia</span>
                            @elseif($item['status'] == 'Menipis')
                                <span class="bg-amber-100 text-amber-800 text-xs font-semibold px-2.5 py-1 rounded-full">Menipis</span>
                            @else
                                <span class="bg-red-100 text-red-800 text-xs font-semibold px-2.5 py-1 rounded-full">Kritis</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection