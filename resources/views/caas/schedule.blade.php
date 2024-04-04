<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="{{ asset('/assets/admin/images/favicon.ico') }}">
    <title>{{ $title }}</title>
</head>
<body class="bg-play-dungeon bg-cover bg-fixed bg-no-repeat bg-center cursor-sword overflow-y-auto">
    
<!-- header start -->
<div class="container flex justify-between">
    @include('caas.partials.sidebar')
</div>
<!-- header ends -->


 <!-- tabel jadwal start -->
 <div class="container relative max-w-3xl mx-auto py-2"> 
        @if(session('quota'))
            <!-- Alert Danger  -->
            <div class="flex justify-between text-fivedary shadow-inner rounded p-2 bg-red-500">
                <p class="text-center font-vinque mx-auto">{{ session('quota') }}</p>
                <strong class="text-md align-center cursor-pointer alert-del">&times;</strong>
            </div>
        @endif
        <div class="judul-tabel text-center mt-7 mb-5">
            <h1 class="text-white text-[32px] font-bold font-ringbearer">Select a Schedule</h1>
        </div>
        <div class="flex justify-center overflow-x-auto px-3">
            <table class="table-auto text-[12px] lg:text-[15px] tracking-wide font-ringbearer">
                <thead class="header">
                    <tr class="tabel bg-dark text-fivedary">
                        <th class="border border-butter px-2 lg:px-4 py-2">No</th>
                        <th class="border border-butter px-2 lg:px-4 py-2">Shift</th>
                          <th class="border border-butter px-2 lg:px-4 py-2">Tanggal</th>
                        <th class="border border-butter px-2 lg:px-4 py-2">Waktu</th>
                        <th class="border border-butter px-2 lg:px-4 xpy-2">Kuota</th>
                        <th class="border border-butter px-2 lg:px-4 py-2">Opsi</th>
                    </tr>
                </thead>
                <tbody class="bg-light text-fivedary text-[10px] lg:text-[13px] table-auto">
                    @foreach ($schedule as $s)
                    <tr>
                        <th class="border border-butter px-2 lg:px-4 py-2">{{ $loop->iteration }}</th>
                        <th class="border border-butter px-2 lg:px-4 py-2">{{ $s->shift_name }}</th>
                        <th class="border border-butter px-2 lg:px-4 py-2">{{ $s->day }}</th>
                        <th class="border border-butter px-2 lg:px-4 py-2">{{ substr($s->start_hour,0,-3)}} - {{ substr($s->end_hour,0,-3) }}</th>
                        <th class="border border-butter px-2 lg:px-4 py-2">{{ $s->quota }}</th>
                        <th class="border border-butter px-2 lg:px-4 py-2">
                            @if ($s->quota == 0)
                                <button class="text-red-500 px-2 py-1 rounded-md cursor-not-allowed">
                                 penuh
                                </button>
                            @else
                            <form action="{{ route('caas.select.schedule') }}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $s->id }}">
                                <button type="submit" class="bg-dark hover:bg-gray-dark px-2 py-1 rounded-md">
                                 pilih
                                </button>
                            </form>
                            @endif
                        </th>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
        {{ $schedule->links('vendor.pagination.dungeon') }}
    </div>
    <!-- tabel jadwal ends -->

@include('caas.partials.footer')


<!-- script sidebar -->
<script src="{{ asset('js/sidebar.js') }}"></script>
<script>
    var alert_del = document.querySelectorAll('.alert-del');
  alert_del.forEach((x) =>
    x.addEventListener('click', function () {
      x.parentElement.classList.add('hidden');
    })
  );
</script>
</body>
</html>
