<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Tambah Pengurus Baru</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl p-8 border-t-8 border-[#7C1014]">
                <form action="{{ route('pengurus.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    <div>
                        <label class="block font-bold text-gray-700 mb-2">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" required class="w-full border-gray-300 rounded-lg focus:ring-[#7C1014] focus:border-[#7C1014]">
                    </div>
                    <div>
                        <label class="block font-bold text-gray-700 mb-2">Jabatan (Misal: Ketua OSIS, Anggota Bidang 1)</label>
                        <input type="text" name="jabatan" required class="w-full border-gray-300 rounded-lg focus:ring-[#7C1014] focus:border-[#7C1014]">
                    </div>
                    <div>
                        <label class="block font-bold text-gray-700 mb-2">Bidang</label>
                        <input type="text" name="bidang" placeholder="Isi 'Inti OSIS' jika pengurus inti" class="w-full border-gray-300 rounded-lg focus:ring-[#7C1014] focus:border-[#7C1014]">
                    </div>
                    <div>
                        <label class="block font-bold text-gray-700 mb-2">Unggah Foto (Opsional tapi disarankan)</label>
                        <input type="file" name="foto" class="w-full border border-gray-300 rounded-lg p-2 bg-gray-50">
                    </div>
                    <div class="flex justify-end space-x-3 pt-4">
                        <a href="{{ route('pengurus.index') }}" class="bg-gray-200 text-gray-800 px-5 py-2 rounded-lg font-bold hover:bg-gray-300 transition">Batal</a>
                        <button type="submit" class="bg-[#7C1014] text-white px-5 py-2 rounded-lg font-bold hover:bg-red-900 transition">Simpan Pengurus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>