<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pengurus OSIS - SMK Telkom</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#F8F9FA] text-gray-800 font-sans antialiased">
    
    <!-- Navbar Ala STELK -->
    <nav class="bg-white text-gray-900 sticky top-0 z-50 shadow-sm border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="font-extrabold text-xl tracking-widest text-[#7C1014]">OSIS STELK</div>
            <div class="hidden md:flex space-x-8 text-sm font-bold uppercase tracking-wide">
                <a href="{{ url('/') }}" class="text-gray-600 hover:text-[#7C1014] transition">Beranda</a>
                <a href="{{ url('/#visi-misi') }}" class="text-gray-600 hover:text-[#7C1014] transition">Visi Misi</a>
                <a href="{{ route('pengurus.publik') }}" class="text-[#7C1014] hover:text-red-700 transition">Pengurus</a>
            </div>
            <a href="{{ route('login') }}" class="text-xs bg-gray-900 text-white px-4 py-2 rounded-full font-bold hover:bg-[#7C1014] transition">Login Admin</a>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-6 py-16">
        
        @if(!$bidangAktif)
            <!-- TAMPILAN 1: MUNCUL KARTU 6 BIDANG DULUAN -->
            <div class="text-center mb-16">
                <h2 class="text-4xl font-extrabold text-gray-900 tracking-tight mb-4">Struktur Kabinet</h2>
                <p class="text-gray-500 font-medium">Pilih bidang di bawah untuk melihat anggota kepengurusan.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $kategori = [
                        ['nama' => 'Inti OSIS', 'desc' => 'Ketua, Wakil, Sekretaris, Bendahara', 'foto' => 'foto_bidang/inti.jpg'],
                        ['nama' => 'Bidang 1', 'desc' => 'Keimanan & Ketaqwaan', 'foto' => 'foto_bidang/bidang1.jpg'],
                        ['nama' => 'Bidang 2', 'desc' => 'Budi Pekerti & Akhlak Mulia', 'foto' => 'foto_bidang/bidang2.jpg'],
                        ['nama' => 'Bidang 3', 'desc' => 'Kepribadian Unggul & Bela Negara', 'foto' => 'foto_bidang/bidang3.jpg'],
                        ['nama' => 'Bidang 4', 'desc' => 'Akademik, Seni & Olahraga', 'foto' => 'foto_bidang/bidang4.jpg'],
                        ['nama' => 'Bidang 5', 'desc' => 'Kewirausahaan, TIK & Bahasa', 'foto' => 'foto_bidang/bidang5.jpg'],
                    ];
                @endphp

                @foreach($kategori as $kat)
                <!-- Kartu ini bisa diklik dan langsung mengarah ke detail anggotanya -->
                <a href="{{ route('pengurus.publik', ['bidang' => $kat['nama']]) }}" class="relative group block h-72 rounded-[2rem] overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-1">
                    
                    <img src="{{ asset($kat['foto']) }}" 
                         onerror="this.src='https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=800&auto=format&fit=crop'" 
                         alt="{{ $kat['nama'] }}" 
                         class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-[#111111]/95 via-[#7C1014]/60 to-transparent opacity-85 group-hover:opacity-100 transition-opacity duration-300"></div>
                    
                    <div class="absolute bottom-0 left-0 p-8 w-full z-10">
                        <div class="transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                            <h4 class="text-2xl font-extrabold text-white mb-1 drop-shadow-md tracking-wide">{{ $kat['nama'] }}</h4>
                            <p class="text-sm text-gray-300 font-medium opacity-90">{{ $kat['desc'] }}</p>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>

        @else
            <!-- TAMPILAN 2: PAS KARTU DIKLIK, MUNCUL ORANGNYA -->
            <div class="mb-10">
                <a href="{{ route('pengurus.publik') }}" class="inline-flex items-center text-[#7C1014] font-bold hover:text-red-900 transition bg-white px-5 py-2 rounded-full shadow-sm border border-gray-100">
                    ← Kembali ke Daftar Bidang
                </a>
            </div>

            <div class="text-center mb-16 border-b-2 border-gray-200 pb-8">
                <h2 class="text-4xl font-extrabold text-gray-900 tracking-tight uppercase">{{ $bidangAktif }}</h2>
                <p class="text-gray-500 font-medium mt-2">Daftar anggota kepengurusan kabinet</p>
            </div>

            @if($pengurus->count() > 0)
                <div class="flex flex-wrap justify-center gap-8">
                    @foreach ($pengurus as $p)
                    <div class="bg-white p-8 w-72 rounded-3xl shadow-sm border border-gray-100 text-center hover:shadow-lg transition duration-300 hover:-translate-y-2">
                        @if($p->foto)
                            <img src="{{ asset('foto_pengurus/' . $p->foto) }}" alt="{{ $p->nama_lengkap }}" class="w-32 h-32 object-cover object-top rounded-full mx-auto mb-6 shadow-md border-4 border-gray-50">
                        @else
                            <div class="w-32 h-32 bg-gray-100 rounded-full mx-auto mb-6 flex items-center justify-center text-gray-400 font-bold border-4 border-gray-50">Foto</div>
                        @endif
                        <h3 class="text-lg font-bold text-gray-900 capitalize leading-tight">{{ $p->nama_lengkap }}</h3>
                        <p class="text-[#7C1014] font-bold mt-2 uppercase text-xs tracking-wider">{{ $p->jabatan }}</p>
                    </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-20 bg-white rounded-3xl border border-gray-100 shadow-sm">
                    <p class="text-gray-500 font-bold text-xl">Belum ada anggota yang ditambahkan di {{ $bidangAktif }}.</p>
                </div>
            @endif
        @endif

    </div>
</body>
</html>