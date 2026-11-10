@extends('layouts.main')

@section('title', 'Galeri Foto')

@section('content')
<div class="w-full">
    <div class="text-center mb-10">
        <span class="inline-block px-3 py-1 text-xs font-bold uppercase tracking-widest text-zinc-950 bg-amber-400 rounded-full mb-3 shadow-sm">
            Katalog Draf Foto
        </span>
        <h2 class="text-3xl font-black text-[#F5F0EB]">Galeri Hasil Pemotretan</h2>
        <p class="text-stone-400 mt-2 text-sm">Pilih dan tinjau draf foto terbaik yang telah kami persiapkan untuk Anda.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach ($photos as $photo)
            <div class="bg-[#FDFBF7] text-zinc-900 rounded-2xl overflow-hidden shadow-xl border border-amber-200/40 flex flex-col justify-between hover:scale-[1.02] transition duration-300">
                <img src="{{ $photo['url'] }}" alt="{{ $photo['title'] }}" class="w-full h-48 object-cover">
                <div class="p-5 grow flex flex-col justify-between">
                    <div>
                        <span class="inline-block text-[10px] font-bold uppercase tracking-wider text-amber-700 bg-amber-100 px-2.5 py-1 rounded-md mb-2">
                            {{ $photo['category'] }}
                        </span>
                        <h3 class="text-lg font-bold text-zinc-900 mb-1">{{ $photo['title'] }}</h3>
                    </div>
                    <button class="mt-4 w-full bg-zinc-900 text-[#F5F0EB] text-xs font-bold py-2.5 rounded-xl hover:bg-amber-400 hover:text-zinc-950 transition duration-200">
                        Pilih Foto Ini
                    </button>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection