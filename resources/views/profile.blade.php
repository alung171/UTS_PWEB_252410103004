@extends('layouts.app')

@section('title', 'Profil Pengguna')

@section('content')
<div class="max-w-2xl mx-auto space-y-6">
    <div class="bg-white p-8 rounded-xl shadow-sm border border-slate-200">
        <h1 class="text-2xl font-bold text-slate-800 mb-6 border-b pb-4">Profil Penanggung Jawab</h1>

        <div class="space-y-4">
            <div class="flex justify-between py-2 border-b border-slate-100">
                <span class="text-slate-500 font-medium">Nama User</span>
                <span class="font-bold text-slate-800">{{ $profileData['nama_lengkap'] }}</span>
            </div>
            <div class="flex justify-between py-2 border-b border-slate-100">
                <span class="text-slate-500 font-medium">Peran / Jabatan</span>
                <span class="font-semibold text-emerald-700">{{ $profileData['role'] }}</span>
            </div>
            <div class="flex justify-between py-2 border-b border-slate-100">
                <span class="text-slate-500 font-medium">Email Instansi</span>
                <span class="font-mono text-slate-700">{{ $profileData['email'] }}</span>
            </div>
            <div class="flex justify-between py-2 border-b border-slate-100">
                <span class="text-slate-500 font-medium">Instansi / Kampus</span>
                <span class="text-slate-800">{{ $profileData['instansi'] }}</span>
            </div>
            <div class="flex justify-between py-2">
                <span class="text-slate-500 font-medium">Terakhir Akses</span>
                <span class="text-slate-600 text-sm">{{ $profileData['terakhir_login'] }}</span>
            </div>
        </div>
    </div>
</div>
@endsection