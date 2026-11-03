@extends('layouts.app')

@section('title', 'Dashboard - AgriStock')

@section('content')
<div class="space-y-6">
    
    <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-200">
        <h1 class="text-2xl font-bold text-slate-800">Selamat Datang, {{ $username }}! 👋</h1>
        <p class="text-slate-500 mt-1">Berikut adalah ringkasan pengelolaan stok komoditas pertanian hari ini.</p>
    </div>

    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-emerald-50 border border-emerald-200 p-6 rounded-xl">
            <span class="text-xs font-bold text-emerald-600 uppercase tracking-wider">Total Komoditas</span>
            <p class="text-3xl font-extrabold text-emerald-900 mt-2">{{ $stats['total_komoditas'] }} Jenis</p>
        </div>

        <div class="bg-blue-50 border border-blue-200 p-6 rounded-xl">
            <span class="text-xs font-bold text-blue-600 uppercase tracking-wider">Stok Tersedia</span>
            <p class="text-3xl font-extrabold text-blue-900 mt-2">{{ $stats['stok_tersedia'] }}</p>
        </div>

        <div class="bg-amber-50 border border-amber-200 p-6 rounded-xl">
            <span class="text-xs font-bold text-amber-600 uppercase tracking-wider">Transaki Bulan Ini</span>
            <p class="text-3xl font-extrabold text-amber-900 mt-2">{{ $stats['transaksi_bulan_ini'] }} Pengiriman</p>
        </div>
    </div>

</div>
@endsection