<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OSIS SMK Telkom Makassar</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#F8F9FA] text-gray-800 font-sans antialiased overflow-x-hidden scroll-smooth">
    
    <!-- Navbar (Sticky & Glassmorphism) -->
    <nav class="bg-white/80 backdrop-blur-md text-gray-900 fixed w-full top-0 z-50 shadow-sm border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="font-extrabold text-xl tracking-widest text-[#7C1014] flex items-center gap-2">
                <span class="bg-[#7C1014] text-white px-2 py-1 rounded-md text-sm">STELK</span> OSIS
            </div>
            <div class="hidden md:flex space-x-8 text-sm font-bold uppercase tracking-wide">
                <a href="#beranda" class="text-[#7C1014] transition">Beranda</a>
                <a href="#visi-misi" class="text-gray-500 hover:text-[#7C1014] transition">Visi Misi</a>
                <a href="#proker" class="text-gray-500 hover:text-[#7C1014] transition">Program Kerja</a>
                <a href="#pengurus" class="text-gray-500 hover:text-[#7C1014] transition">Pengurus</a>
                <a href="#aspirasi" class="text-gray-500 hover:text-[#7C1014] transition">Aspirasi</a>
            </div>
            <a href="{{ route('login') }}" class="text-xs bg-gray-900 text-white px-5 py-2.5 rounded-full font-bold hover:bg-[#7C1014] transition-all shadow-md hover:shadow-lg transform hover:-translate-y-0.5">Login Admin</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="beranda" class="relative pt-40 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-[#F8F9FA] via-[#F4EBE8] to-[#E8D9D9] -z-10"></div>
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-red-900/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-10 -left-20 w-72 h-72 bg-[#7C1014]/5 rounded-full blur-2xl"></div>

        <div class="max-w-7xl mx-auto px-6 text-center relative z-10">
            <div class="inline-block mb-4 px-4 py-1.5 rounded-full bg-white border border-red-100 shadow-sm text-sm font-bold text-[#7C1014] tracking-wide uppercase">
                Periode 2025/2026
            </div>
            <h1 class="text-5xl md:text-7xl font-extrabold text-gray-900 tracking-tight mb-6 leading-tight">
                OSIS SMK Telkom <br class="hidden md:block">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#7C1014] to-[#B05B66]">Makassar</span>
            </h1>
            <p class="mt-4 max-w-2xl mx-auto text-lg md:text-xl text-gray-600 font-medium">
                Mewujudkan generasi teknologi yang berakhlak mulia, inovatif, dan berjiwa kepemimpinan tinggi.
            </p>
            <div class="mt-10 flex justify-center gap-4">
                <a href="#pengurus" class="px-8 py-3.5 bg-[#7C1014] text-white rounded-full font-bold shadow-lg hover:bg-red-900 hover:shadow-xl transition-all transform hover:-translate-y-1">
                    Jelajahi Kabinet
                </a>
            </div>
        </div>
    </section>

    <!-- Visi Misi Section -->
    <section id="visi-misi" class="py-24 bg-white">
         <div class="max-w-5xl mx-auto px-6 text-center">
             <h2 class="text-4xl font-extrabold text-gray-900 mb-8">Visi & Misi</h2>
             
             <!-- Kotak Utama -->
             <div class="bg-[#F8F9FA] p-8 md:p-14 rounded-[2rem] shadow-sm border border-gray-100 text-left">
                 
                 <!-- Bagian Visi -->
                 <div class="mb-12">
                     <h3 class="text-2xl font-extrabold text-[#7C1014] mb-4 inline-block border-b-4 border-red-200 pb-1">VISI</h3>
                     <p class="text-gray-700 font-medium text-lg md:text-xl leading-relaxed">
                         Menjadikan OSIS SMK TELKOM MAKASSAR sebagai organisasi pelopor pembentukan generasi siswa yang beriman, berkarakter, inovatif dan berwawasan global melalui pengembangan program kerja yang terstruktur serta mengembangkan potensi akademik dan non-akademik berbasis teknologi informasi.
                     </p>
                 </div>

                 <!-- Bagian Misi -->
                 <div>
                     <h3 class="text-2xl font-extrabold text-[#7C1014] mb-6 inline-block border-b-4 border-red-200 pb-1">MISI</h3>
                     <ol class="list-decimal list-outside ml-6 text-gray-700 font-medium text-lg leading-relaxed space-y-4 marker:font-bold marker:text-gray-900">
                         <li class="pl-2">Memperkuat fondasi dengan mengimplementasikan nilai-nilai keagamaan dalam setiap aktivitas untuk membentuk karakter siswa yang berintegritas dan berakhlak mulia.</li>
                         <li class="pl-2">Menciptakan jembatan komunikasi yang efektif untuk menyatukan koordinasi, dan kolaborasi di seluruh aspek untuk mewujudkan lingkungan yang responsif dan berdampak positif.</li>
                         <li class="pl-2">Meningkatkan pengembangan potensi akademik dan non-akademik siswa melalui berbagai ekstrakurikuler dan kegiatan yang mendorong kreativitas.</li>
                         <li class="pl-2">Menyelenggarakan program yang fokus pada pengembangan jiwa kepemimpinan, kerjasama tim, dan tanggung jawab siswa.</li>
                         <li class="pl-2">Melakukan evaluasi dan peninjauan berkelanjutan terhadap setiap program kerja untuk memastikan efektivitas dan keberhasilan program.</li>
                     </ol>
                 </div>

             </div>
         </div>
    </section>

   <!-- Program Kerja Section -->
    <section id="proker" class="py-24 bg-white relative">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-extrabold text-gray-900 tracking-tight mb-4">Program Kerja Unggulan</h2>
                <p class="text-gray-500 font-medium max-w-2xl mx-auto">Beberapa program kerja utama Kabinet OSIS 25/26 untuk mewujudkan visi dan misi STELK.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                @forelse($prokers as $p)
                <!-- Kartu Proker Dinamis -->
                <div class="bg-[#F8F9FA] rounded-[2rem] border border-gray-100 hover:shadow-xl transition-all duration-300 group overflow-hidden flex flex-col">
                    <!-- Area Foto -->
                    <div class="h-48 overflow-hidden relative">
                        @if($p->foto)
                            <img src="{{ asset('foto_proker/' . $p->foto) }}" alt="{{ $p->nama_proker }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        @else
                            <div class="w-full h-full bg-gray-200 flex items-center justify-center text-gray-400 font-bold">
                                📷 Belum ada foto
                            </div>
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    
                    <!-- Area Teks dengan nl2br -->
                    <div class="p-8 flex-1">
                        <h3 class="text-xl font-extrabold text-gray-900 mb-3">{{ $p->nama_proker }}</h3>
                        <p class="text-gray-600 font-medium text-sm leading-relaxed whitespace-pre-line">{!! nl2br(e($p->deskripsi)) !!}</p>
                    </div>
                </div>
                @empty
                <div class="col-span-3 text-center py-10">
                    <p class="text-gray-500 font-bold text-lg">Belum ada Program Kerja yang ditambahkan.</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Pengurus Section (6 Kartu) -->
    <section id="pengurus" class="py-24 bg-[#F8F9FA] relative">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-extrabold text-gray-900 tracking-tight mb-4">Struktur Kabinet</h2>
                <p class="text-gray-500 font-medium max-w-2xl mx-auto">Pilih bidang di bawah untuk melihat susunan anggota kepengurusan kami.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $kategori = [
                        ['nama' => 'Inti OSIS', 'desc' => 'Ketua, Wakil, Sekretaris, Bendahara', 'foto' => 'foto_bidang/inti.jpg'],
                        ['nama' => 'Bidang 1', 'desc' => 'Penguatan Keimanan Kepada Tuhan yang Maha Esa dan Akhlak Mulia', 'foto' => 'foto_bidang/bidang1.jpg'],
                        ['nama' => 'Bidang 2', 'desc' => 'Pembinaan Karakter Kebangsaan, Kedisiplinan dan Sosial', 'foto' => 'foto_bidang/bidang2.jpg'],
                        ['nama' => 'Bidang 3', 'desc' => 'Pengembangan Diri Melalui Minat, Bakat, dan Prestasi', 'foto' => 'foto_bidang/bidang3.jpg'],
                        ['nama' => 'Bidang 4', 'desc' => 'Kesehatan Jasmani, Kreativitas, dan Kewirausahaan', 'foto' => 'foto_bidang/bidang4.jpg'],
                        ['nama' => 'Bidang 5', 'desc' => 'Media Digital Kreatif, Informasi, dan Komunikasi', 'foto' => 'foto_bidang/bidang5.jpg'],
                    ];
                @endphp

                @foreach($kategori as $kat)
                <a href="{{ route('pengurus.publik', ['bidang' => $kat['nama']]) }}" class="relative group block h-80 rounded-[2rem] overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-1">
                    <img src="{{ asset($kat['foto']) }}" onerror="this.src='https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=800&auto=format&fit=crop'" alt="{{ $kat['nama'] }}" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#111111]/95 via-[#7C1014]/60 to-transparent opacity-85 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute bottom-0 left-0 p-8 w-full z-10 flex flex-col justify-end h-full">
                        <div class="transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            <h4 class="text-2xl font-extrabold text-white mb-2 drop-shadow-md tracking-wide">{{ $kat['nama'] }}</h4>
                            <p class="text-sm text-gray-200 font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100">{{ $kat['desc'] }}</p>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Kotak Aspirasi Section -->
    <section id="aspirasi" class="py-24 bg-white relative">
        <div class="max-w-3xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-extrabold text-gray-900 tracking-tight mb-4">Kotak Aspirasi</h2>
                <p class="text-gray-500 font-medium">Punya saran, kritik, atau ide seru untuk STELK? Sampaikan di sini!</p>
            </div>

            @if(session('success'))
            <div class="mb-8 p-4 bg-green-50 border border-green-200 text-green-700 rounded-2xl text-center font-bold shadow-sm">
                🎉 {{ session('success') }}
            </div>
            @endif

            <div class="bg-[#F8F9FA] p-8 md:p-12 rounded-[2rem] shadow-sm border border-gray-100">
                <form action="{{ route('aspirasi.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label for="nama" class="block text-sm font-bold text-gray-700 mb-2">Nama (Boleh Samaran)</label>
                        <input type="text" id="nama" name="nama" required class="w-full px-5 py-4 rounded-xl border border-gray-200 focus:ring-2 focus:ring-[#7C1014] focus:border-[#7C1014] transition-all bg-white" placeholder="Cth: Siswa Biasa">
                    </div>
                    <div>
                        <label for="pesan" class="block text-sm font-bold text-gray-700 mb-2">Pesan / Aspirasi</label>
                        <textarea id="pesan" name="pesan" rows="5" required class="w-full px-5 py-4 rounded-xl border border-gray-200 focus:ring-2 focus:ring-[#7C1014] focus:border-[#7C1014] transition-all bg-white resize-none" placeholder="Tulis masukan kamu di sini..."></textarea>
                    </div>
                    <button type="submit" class="w-full py-4 bg-gray-900 text-white rounded-xl font-bold text-lg hover:bg-[#7C1014] hover:shadow-lg transition-all transform hover:-translate-y-0.5">
                        Kirim Pesan
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer dengan Sosmed -->
    <footer class="bg-gray-900 text-white py-12 border-t-4 border-[#7C1014]">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="text-center md:text-left">
                <h3 class="text-2xl font-extrabold tracking-widest mb-2"><span class="text-[#7C1014]">STELK</span> OSIS</h3>
                <p class="text-gray-400 text-sm font-medium">SMK Telkom Makassar © 2025/2026. Hak cipta dilindungi.</p>
            </div>
            
            <div class="flex space-x-5">
                <!-- Instagram Icon -->
                <a href="#" class="text-gray-400 hover:text-white transition-all transform hover:scale-110">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.209-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                </a>
                <!-- TikTok Icon -->
                <a href="#" class="text-gray-400 hover:text-white transition-all transform hover:scale-110">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z"/></svg>
                </a>
                <!-- Email Icon -->
                <a href="#" class="text-gray-400 hover:text-white transition-all transform hover:scale-110">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M0 3v18h24v-18h-24zm6.623 7.929l-4.623 5.712v-9.458l4.623 3.746zm-4.141-5.929h19.035l-9.517 7.713-9.518-7.713zm5.694 7.188l3.824 3.099 3.83-3.104 5.612 6.817h-18.779l5.513-6.812zm9.208-1.264l4.616-3.741v9.348l-4.616-5.607z"/></svg>
                </a>
            </div>
        </div>
    </footer>

</body>
</html>