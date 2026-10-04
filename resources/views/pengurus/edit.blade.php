<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Data Pengurus</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl p-8 border-t-8 border-yellow-500">
                <form action="{{ route('pengurus.update', $penguru->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    @method('PUT')
                    <div>
                        <label class="block font-bold text-gray-700 mb-2">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" value="{{ $penguru->nama_lengkap }}" required class="w-full border-gray-300 rounded-lg focus:ring-yellow-500 focus:border-yellow-500">
                    </div>
                    <div>
                        <label class="block font-bold text-gray-700 mb-2">Jabatan</label>
                        <input type="text" name="jabatan" value="{{ $penguru->jabatan }}" required class="w-full border-gray-300 rounded-lg focus:ring-yellow-500 focus:border-yellow-500">
                    </div>
                    <div>
                        <label class="block font-bold text-gray-700 mb-2">Bidang</label>
                        <input type="text" name="bidang" value="{{ $penguru->bidang }}" class="w-full border-gray-300 rounded-lg focus:ring-yellow-500 focus:border-yellow-500">
                    </div>
                    <div>
                        <label class="block font-bold text-gray-700 mb-2">Ganti Foto Baru (Biarkan kosong jika tidak ingin ganti foto)</label>
                        @if($penguru->foto)
                            <p class="text-sm text-gray-500 mb-2">Foto saat ini terpasang.</p>
                        @endif
                        <input type="file" name="foto" class="w-full border border-gray-300 rounded-lg p-2 bg-gray-50">
                    </div>
                    <div class="flex justify-end space-x-3 pt-4">
                        <a href="{{ route('pengurus.index') }}" class="bg-gray-200 text-gray-800 px-5 py-2 rounded-lg font-bold hover:bg-gray-300 transition">Batal</a>
                        <button type="submit" class="bg-yellow-500 text-white px-5 py-2 rounded-lg font-bold hover:bg-yellow-600 transition">Update Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>