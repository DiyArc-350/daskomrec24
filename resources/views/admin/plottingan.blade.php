@extends('admin.partials.index')

@section('styles')
    @include('admin.partials.HDdatatables')
@endsection


@section('content')


<div class="container-fluid">
    @if (session('success'))
       <div  class="alert alert-success fade show mt-1" data-timeout="5000" role="alert">
            {{  session('success') }}
        </div>
   @endif
   @if (session('error'))
       <div class="alert alert-danger fade show mt-1" data-timeout="5000" role="alert">
            {{  session('error') }}
        </div>
   @endif
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18 text-white">View Plottingan</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 align-self-center">
                            <div class="text-lg-center mt-4 mt-lg-0">
                                <div class="row">
                                    <div class="col-5">
                                        <div>
                                            <p class="text-muted text-truncate mb-2">Total Jadwal</p>
                                            <h5 class="mb-0">{{ $totalShift }}</h5>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div>
                                            <p class="text-muted text-truncate mb-2">Total Yang Udah Pilih Jadwal</p>
                                            <h5 class="mb-0">{{ $totalPlot }}</h5>
                                        </div>
                                    </div>
                                    <div class="col-2 justify-end">
                                        <div>
                                            <button class="btn btn-outline-warning w-md bg-gradient" data-bs-toggle="modal"data-bs-target=".notPlotted-detailModal">Not Plotted</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive  nowrap w-100">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Shift</th>
                                    <th>Tanggal</th>
                                    <th>Waktu</th>
                                    <th>Kuota</th>
                                    <th>List</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;?>
                                @foreach ($shifts as $s)
                                <tr>
                                    <th scope="row">{{ $i++ }}</th>
                                    <td>{{ $s->shift_name }}</td>
                                    <td>{{ $s->day }}</td>
                                    <td>{{ $s->start_hour." - ".$s->end_hour }}</td>
                                    <td>{{ $s->quota }}</td>
                                    <td>
                                       @foreach ( $plots as $p)
                                           @if ($p->shift_id == $s->id)
                                            <div>
                                                {{ $p->datacaas->nim }}
                                            </div>
                                           @endif
                                       @endforeach
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div> <!-- end row -->

</div> <!-- container-fluid -->


<!-- table Modal -->
 <div class="modal fade notPlotted-detailModal" tabindex="-1" role="dialog" aria-labelledby="notPlotted-detailModal"
     aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg"  role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="notPlotted-detailModal">Blm Plh Jdwl</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                <div class="table-responsive">                   
                    <table id="datatable" class="table table-striped table-bordered dt-responsive text-center nowrap w-100">
                        <thead>
                            <tr class="">
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Last Logged in</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($notPlotted as $c)
                            <tr>    
                                <td>{{ $c->nim }} </td>
                                <td>{{ $c->name }}</td>
                                <td>{{ $c->updated_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
             </div>
         </div>
     </div>
 </div>
 <!-- end modal -->

@endsection

@section('extras')
    @include('admin.partials.FTdatatables2')
@endsection