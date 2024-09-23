<x-landing-layout>
    <div class="w-full">
        <img class="w-full" src="{{asset('gambar1.png')}}"/>
    </div>

    <article class="text-pretty ...">
  <h3 class="underline decoration-2 text-3xl py-7 flex items-center justify-center"></h3>
  <p class="py-3 max-w-4xl mx-auto text-center">
  Masjid Sheikh Zayed adalah simbol kemegahan arsitektur Islam modern yang terletak di Abu Dhabi, Uni Emirat Arab. Dibangun dengan material terbaik dari seluruh dunia, masjid ini memadukan desain tradisional dan kontemporer, menciptakan suasana yang penuh dengan keagungan dan kedamaian. Masjid ini terkenal dengan kubah putih raksasanya yang menonjol di langit, dihiasi oleh ukiran kaligrafi dan pola geometris. Dikelilingi oleh kolam reflektif, cahayanya saat matahari terbit dan tenggelam memberikan kesan masjid ini bersinar dengan cahaya iman yang abadi, menciptakan tempat ibadah yang penuh ketenangan </p>
</article>

    <div class="w-full p-12">
        <h1 class="text-4xl text-center font-bold mb-8">LAPORAN KEUANGAN MASJID</h1>

        <div class="flex gap-6">
            <div class="p-8 m-4 mr-0 bg-white rounded-md shadow-sm w-1/2">
                <h2>Total Pemasukan : </h2>
                <p class="font-bold text-4xl">Rp. {{ $pemasukan->sum('nominal') }}</p>

                <table class="mt-8 table-auto border w-full">
                    <thead class="bg-gray-500 text-white">
                        <tr>
                            <th class="text-left py-3 px-4 uppercase font-semibold">No</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold">Tanggal</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold">Nominal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pemasukan as $d)
                            <tr>
                                <td class="text-left py-3 px-4 font-semibold">{{ $loop->iteration }}</td>
                                <td class="text-left py-3 px-4 font-semibold">{{ $d->created_at }}</td>
                                <td class="text-left py-3 px-4 font-semibold">{{ $d->nominal }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="p-8 m-4 ml-0 bg-white rounded-md shadow-sm w-1/2">
                <h2>Total Pengeluaran : </h2>
                <p class="font-bold text-4xl">Rp. {{ $pengeluaran->sum('nominal') }}</p>

                <table class="mt-8 table-auto border w-full">
                    <thead class="bg-gray-500 text-white">
                        <tr>
                            <th class="text-left py-3 px-4 uppercase font-semibold">No</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold">Tanggal</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold">Nominal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengeluaran as $d)
                            <tr>
                                <td class="text-left py-3 px-4 font-semibold">{{ $loop->iteration }}</td>
                                <td class="text-left py-3 px-4 font-semibold">{{ $d->created_at }}</td>
                                <td class="text-left py-3 px-4 font-semibold">{{ $d->nominal }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</x-landing-layout>