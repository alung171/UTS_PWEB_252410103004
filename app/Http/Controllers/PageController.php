<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    
    public function showLogin()
    {
        return view('login');
    }

    
    public function processLogin(Request $request)
    {
        $username = $request->input('username', 'Guest');
        return redirect()->route('dashboard', ['username' => $username]);
    }

    
    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Mahasiswa');
        
        
        $stats = [
            'total_komoditas' => 12,
            'stok_tersedia' => '450 Ton',
            'transaksi_bulan_ini' => 84
        ];

        return view('dashboard', compact('username', 'stats'));
    }

    
    public function pengelolaan(Request $request)
    {
        $username = $request->query('username', 'Mahasiswa');

        
        $komoditas = [
            [
                'id' => 'PLW-001',
                'nama' => 'Jagung Hibrida',
                'kategori' => 'Biji-bijian',
                'stok' => 120,
                'satuan' => 'Ton',
                'harga' => 5200,
                'status' => 'Tersedia'
            ],
            [
                'id' => 'PLW-002',
                'nama' => 'Kedelai Lokal',
                'kategori' => 'Kacang-kacangan',
                'stok' => 45,
                'satuan' => 'Ton',
                'harga' => 9800,
                'status' => 'Menipis'
            ],
            [
                'id' => 'PLW-003',
                'nama' => 'Kacang Tanah Super',
                'kategori' => 'Kacang-kacangan',
                'stok' => 85,
                'satuan' => 'Ton',
                'harga' => 14500,
                'status' => 'Tersedia'
            ],
            [
                'id' => 'PLW-004',
                'nama' => 'Ubi Kayu (Singkong)',
                'kategori' => 'Umbi-umbian',
                'stok' => 200,
                'satuan' => 'Ton',
                'harga' => 2500,
                'status' => 'Tersedia'
            ],
            [
                'id' => 'PLW-005',
                'nama' => 'Kacang Hijau',
                'kategori' => 'Kacang-kacangan',
                'stok' => 15,
                'satuan' => 'Ton',
                'harga' => 16000,
                'status' => 'Kritis'
            ]
        ];

        return view('pengelolaan', compact('username', 'komoditas'));
    }

    
    public function profile(Request $request)
    {
        $username = $request->query('username', 'Mahasiswa');
        
        $profileData = [
            'nama_lengkap' => $username,
            'role' => 'Administrator Sistem',
            'email' => strtolower(str_replace(' ', '', $username)) . '@unej.ac.id',
            'instansi' => 'Universitas Jember',
            'terakhir_login' => date('d M Y, H:i') . ' WIB'
        ];

        return view('profile', compact('username', 'profileData'));
    }
}