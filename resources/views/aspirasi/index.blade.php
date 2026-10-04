<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Kotak Aspirasi Siswa</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('success'))
                <div class="mb-6 bg-green-100 text-green-700 p-4 rounded-xl font-bold border border-green-300">{{ session('success') }}</div>
            @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl p-8">
                <h3 class="text-xl font-extrabold text-gray-900 mb-6">Daftar Pesan Masuk</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @forelse($aspirasi as $a)
                    <div class="bg-gray-50 p-6 rounded-xl border border-gray-200 relative group">
                        <div class="flex justify-between items-start mb-2">
                            <h4 class="font-bold text-[#7C1014] text-lg">{{ $a->nama ?: 'Siswa Anonim' }}</h4>
                            <span class="text-xs font-semibold text-gray-400">{{ $a->created_at->diffForHumans() }}</span>
                        </div>
                        <p class="text-gray-700 font-medium italic">"{{ $a->pesan }}"</p>
                        
                        <!-- Tombol Hapus (Muncul kalau di-hover) -->
                        <form action="{{ route('aspirasi.destroy', $a->id) }}" method="POST" class="absolute bottom-4 right-4 opacity-0 group-hover:opacity-100 transition" onsubmit="return confirm('Hapus aspirasi ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-100 text-red-600 px-3 py-1 rounded text-xs font-bold hover:bg-red-200">Tandai Selesai & Hapus</button>
                        </form>
                    </div>
                    @empty
                    <div class="col-span-full text-center py-10">
                        <p class="text-gray-500 font-bold text-lg">Belum ada aspirasi yang masuk ke kotak pos.</p>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>