<x-app-layout>
    <x-slot name="header">
        <h2 class="font-extrabold text-2xl text-[#7C1014] tracking-wide">
            {{ __('Dashboard OSIS 25/26') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-[#F8F9FA] min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-12">
            
            <!-- Welcome Area -->
            <div class="flex flex-col md:flex-row justify-between items-end pb-4 border-b border-gray-200">
                <div>
                    <h3 class="text-3xl font-extrabold text-gray-900">Pusat Kendali Kabinet</h3>
                    <p class="text-gray-500 mt-1 font-medium">Pilih bidang di bawah untuk mengelola anggota pengurus.</p>
                </div>
                <div class="mt-4 md:mt-0 flex gap-3">
                    <a href="{{ route('aspirasi.index') }}" class="bg-white text-gray-800 border border-gray-300 px-5 py-2.5 rounded-full font-bold shadow-sm hover:bg-gray-50 transition-all text-sm">
                        📬 Baca Aspirasi
                    </a>
                    <a href="{{ route('pengurus.index') }}" class="bg-[#7C1014] text-white px-5 py-2.5 rounded-full font-bold shadow-md hover:bg-red-900 transition-all text-sm">
                        Lihat Semua Data
                    </a>
                </div>
            </div>

            <!-- Kartu Bidang dengan Foto Grup -->
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
                <a href="{{ route('pengurus.index', ['filter' => $kat['nama']]) }}" class="relative group block h-72 rounded-[2rem] overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-1">
                    
                    <!-- Foto Background -->
                    <img src="{{ asset($kat['foto']) }}" 
                         onerror="this.src='https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=800&auto=format&fit=crop'" 
                         alt="{{ $kat['nama'] }}" 
                         class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    
                    <!-- Overlay Gradasi Hitam & Merah Telkom -->
                    <div class="absolute inset-0 bg-gradient-to-t from-[#111111]/95 via-[#7C1014]/60 to-transparent opacity-85 group-hover:opacity-100 transition-opacity duration-300"></div>
                    
                    <!-- Konten Teks -->
                    <div class="absolute bottom-0 left-0 p-8 w-full z-10">
                        <div class="transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                            <h4 class="text-2xl font-extrabold text-white mb-1 drop-shadow-md tracking-wide">{{ $kat['nama'] }}</h4>
                            <p class="text-sm text-gray-300 font-medium opacity-90">{{ $kat['desc'] }}</p>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
            
        </div>
    </div>
</x-app-layout>