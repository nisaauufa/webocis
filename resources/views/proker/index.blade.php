<x-app-layout>
    <x-slot name="header">
        <h2 class="font-extrabold text-2xl text-[#7C1014] tracking-wide">
            {{ __('Manajemen Program Kerja OSIS') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-[#F8F9FA] min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-10">
            
            @if(session('success'))
            <div class="p-4 bg-green-50 border border-green-200 text-green-700 rounded-2xl font-bold shadow-sm">
                🎉 {{ session('success') }}
            </div>
            @endif

            <!-- Form Tambah Proker -->
            <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-gray-100">
                <h3 class="text-xl font-extrabold text-gray-900 mb-6">Tambah Program Kerja Baru</h3>
                
                <form action="{{ route('proker.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2">Nama Program Kerja</label>
                            <input type="text" name="nama_proker" required class="w-full px-5 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-[#7C1014] focus:border-[#7C1014]" placeholder="Cth: STELKPHORIA 2026">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2">Upload Foto (Opsional)</label>
                            <input type="file" name="foto" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-bold file:bg-red-50 file:text-[#7C1014] hover:file:bg-red-100">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Deskripsi Singkat</label>
                        <textarea name="deskripsi" rows="3" required class="w-full px-5 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-[#7C1014] focus:border-[#7C1014] resize-none" placeholder="Jelaskan secara singkat tentang proker ini..."></textarea>
                    </div>
                    <button type="submit" class="px-8 py-3.5 bg-[#7C1014] text-white rounded-xl font-bold hover:bg-red-900 shadow-md transition-all">
                        Simpan Program Kerja
                    </button>
                </form>
            </div>

            <!-- Daftar Proker yang Sudah Ada -->
            <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-gray-100">
                <h3 class="text-xl font-extrabold text-gray-900 mb-6">Daftar Proker Aktif</h3>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @forelse($prokers as $p)
                    <div class="bg-[#F8F9FA] rounded-2xl border border-gray-100 overflow-hidden flex flex-col justify-between">
                        <div>
                            @if($p->foto)
                            <img src="{{ asset('foto_proker/' . $p->foto) }}" alt="{{ $p->nama_proker }}" class="w-full h-40 object-cover">
                            @else
                            <div class="w-full h-40 bg-gray-200 flex items-center justify-center text-gray-400 font-bold text-sm">Tanpa Foto</div>
                            @endif
                            <div class="p-5">
                                <h4 class="font-extrabold text-gray-900 text-lg mb-2">{{ $p->nama_proker }}</h4>
                                <p class="text-gray-600 text-xs leading-relaxed font-medium">{{ $p->deskripsi }}</p>
                            </div>
                        </div>
                        <div class="p-5 pt-0">
                            <form action="{{ route('proker.destroy', $p->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus proker ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="w-full py-2 bg-red-50 text-red-600 rounded-xl font-bold text-xs hover:bg-red-100 transition">
                                    Hapus Proker
                                </button>
                            </form>
                        </div>
                    </div>
                    @empty
                    <div class="col-span-3 text-center py-8 text-gray-400 font-medium">
                        Belum ada data program kerja di database.
                    </div>
                    @endforelse
                </div>
            </div>

        </div>
    </div>
</x-app-layout>