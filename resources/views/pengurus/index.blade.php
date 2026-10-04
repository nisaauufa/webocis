<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Manajemen Pengurus</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('success'))
                <div class="mb-6 bg-green-100 text-green-700 p-4 rounded-xl font-bold border border-green-300">{{ session('success') }}</div>
            @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl p-8">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-xl font-extrabold text-gray-900">Daftar Anggota Kabinet</h3>
                    <a href="{{ route('pengurus.create') }}" class="bg-[#7C1014] text-white px-5 py-2 rounded-lg font-bold hover:bg-red-900 transition">+ Tambah Pengurus</a>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-gray-50 border-b-2 border-gray-200 text-gray-600">
                                <th class="p-4 font-bold">Foto</th>
                                <th class="p-4 font-bold">Nama Lengkap</th>
                                <th class="p-4 font-bold">Jabatan</th>
                                <th class="p-4 font-bold">Bidang</th>
                                <th class="p-4 font-bold">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pengurus as $p)
                            <tr class="border-b border-gray-100 hover:bg-gray-50 transition">
                                <td class="p-4">
                                    @if($p->foto)
                                        <img src="{{ asset('foto_pengurus/' . $p->foto) }}" class="w-12 h-12 object-cover object-top rounded-full border border-gray-200">
                                    @else
                                        <div class="w-12 h-12 bg-gray-200 rounded-full flex items-center justify-center text-xs font-bold text-gray-500">Kosong</div>
                                    @endif
                                </td>
                                <td class="p-4 font-bold text-gray-900">{{ $p->nama_lengkap }}</td>
                                <td class="p-4 text-sm font-semibold text-gray-700">{{ $p->jabatan }}</td>
                                <td class="p-4 text-sm font-semibold text-[#7C1014]">{{ $p->bidang ?: 'Inti OSIS' }}</td>
                                <td class="p-4 flex space-x-2 mt-2">
                                    <a href="{{ route('pengurus.edit', $p->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded text-sm font-bold hover:bg-yellow-600 transition">Edit</a>
                                    <form action="{{ route('pengurus.destroy', $p->id) }}" method="POST" onsubmit="return confirm('Yakin ingin mencopot pengurus ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-gray-900 text-white px-3 py-1 rounded text-sm font-bold hover:bg-red-600 transition">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>