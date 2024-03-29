<x-app-layout>
    <div class="w-full py-4 px-8 mb-3 bg-white shadow-xl rounded-lg h-fit">
        <div>
            <h2 class="text-gray-800 text-xl font-bold">Laporan Kondisi Rumah</h2>
            <livewire:report-table />
        </div>
    </div>

    @push('js')
        @livewire('livewire-ui-modal')
    @endpush
</x-app-layout>
