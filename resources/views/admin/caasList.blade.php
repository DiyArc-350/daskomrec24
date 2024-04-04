@extends('admin.partials.index')

@section('styles')
    @include('admin.partials.HDdatatables')
@endsection

@section('content')
<div class="container-fluid">
   <!-- start page title -->
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
  
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18 text-white">Manage CaAs</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 pb-0">
                        </div>
                        
                        <div class="col-lg-8 align-self-end">
                            <div class="text-end">
                                <button class="btn btn-outline-danger w-md bg-gradient" data-bs-toggle="modal"data-bs-target=".setCaas-detailModal">Set Password</button>
                                <button class="btn btn-outline-warning w-md bg-gradient" data-bs-toggle="modal"data-bs-target=".addCaas-detailModal">Tambah Akun</button>
                                <button class="btn btn-outline-success w-md bg-gradient" data-bs-toggle="modal"data-bs-target=".importCaas-detailModal">Import Excel</button>
                            </div>
                        </div>
    
    
                    </div>
                    <!-- end row -->
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card mini-stats-wid">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-muted fw-medium">Total</p>
                            <h4 class="mb-0">{{ $total }}</h4>
                        </div>
    
                        <div class="flex-shrink-0 align-self-center">
                            <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                <span class="avatar-title">
                                    <i class="fas fa-database "></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mini-stats-wid">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-muted fw-medium">Lolos</p>
                            <h4 class="mb-0">{{ $pass }}</h4>
                        </div>
    
                        <div class="flex-shrink-0 align-self-center ">
                            <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                <span class="avatar-title rounded-circle bg-success">
                                    <i class="mdi mdi-sword-cross"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mini-stats-wid">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-muted fw-medium">Gagal</p>
                            <h4 class="mb-0">{{ $failed }}</h4>
                        </div>
    
                        <div class="flex-shrink-0 align-self-center">
                            <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                <span class="avatar-title rounded-circle bg-danger">
                                    <i class="fas fa-skull "></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">            
                    <div class="table-responsive">                   
                        <table id="datatable" class="table table-striped table-bordered dt-responsive text-center nowrap w-100">
                            <thead>
                                <tr class="">
                                    <th>No</th>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Tahap</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; ?>
                                @foreach ($caas as $c)
                                <tr>    
                                    <th scope="row">{{$i++}}</th>
                                    <td>{{ $c->nim }} </td>
                                    <td>{{ $c->name }}</td>
                                    <td>{{ $c->role->roles->roleName }}</td>
                                    <td class="{{ $c->status->isPass == 1 ? 'text-success' : 'text-danger' }}">{{ $c->status->isPass == 1 ? 'LOLOS' : 'GAGAL' }}</td>
                                    <td>{{ $c->status->stages->stagesName }}</td>
                                    <td>
                                        <button class="btn btn-primary bg-gradient" data-bs-toggle="modal" data-bs-target="#detailCaas-{{ $c->id }}"><i class="bx bx-show"></i></button>
                                        <button class="btn btn-success bg-gradient" data-bs-toggle="modal" data-bs-target="#editCaas-{{ $c->id }}"><i class="bx bx-edit"></i></button>
                                        <a class="btn btn-danger waves-effect waves-light bg-gradient"  data-bs-toggle="modal"data-bs-target="#deleteCon-{{ $c->id }}"><i class="bx bx-trash"></i></a>
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
@if (!$caas->isEmpty())

    @foreach ($caas as $cm)
        
    <!-- Update Modal -->
    <div class="modal fade editCaas-{{ $cm->id }}" tabindex="-1" role="dialog" aria-labelledby="editCaas-{{ $cm->id }}"
        aria-hidden="true" id="editCaas-{{ $cm->id }}">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" >Edit CaAs</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.update.caas', $cm->id) }}" method="POST">
                        @csrf
                        <div class="mb-3 row">
                            <label for="NIM" class="col-md-2 col-form-label">NIM</label>
                            <div class="col-md-10">
                                {{-- <input class="form-control" type="text" name="nim" value="{{ $cm->id }}" id="id" hidden> --}}
                                <input class="form-control" type="text" name="nim" value="{{ $cm->nim }}" id="NIM" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NIM" class="col-md-2 col-form-label">Nama</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $cm->name }}" name="name" id="name" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NIM" class="col-md-2 col-form-label">Email</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $cm->email }}" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-2 col-form-label">Jurusan</label>
                            <div class="col-md-10">
                                <select class="form-select" name="major">
                                    <option value="TEKNIK ELEKTRO" {{ strcasecmp($cm->major, 'TEKNIK ELEKTRO')?'':'selected' }}>TEKNIK ELEKTRO</option>
                                    <option value="TEKNIK FISIKA" {{ strcasecmp($cm->major, 'TEKNIK FISIKA')?'':'selected' }}>TEKNIK FISIKA</option>
                                    <option value="TEKNIK TELEKOMUNIKASI" {{ strcasecmp($cm->major, 'TEKNIK TELEKOMUNIKASI')?'':'selected' }}>TEKNIK TELEKOMUNIKASI</option>
                                    <option value="TEKNIK BIOMEDIS" {{ strcasecmp($cm->major, 'TEKNIK BIOMEDIS')?'':'selected' }}>TEKNIK BIOMEDIS</option>
                                    <option value="TEKNIK SISTEM ENERGI" {{ strcasecmp($cm->major, 'TEKNIK SISTEM ENERGI')?'':'selected' }}>TEKNIK SISTEM ENERGI</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-2 col-form-label">Kelas</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $cm->class }}" required name="class" id="class">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-2 col-form-label">Role</label>
                            <div class="col-md-10">
                                <input type="int" name="oldRoleId" value="{{$cm->role->roles_id }}" hidden>
                                <input type="int" name="oldRoleQuota" value="{{$cm->role->roles->quota }}" hidden>
                                <select class="form-select" name="roles_id">
                                    @foreach ( $roles as $r)
                                    <option value="{{ $r->id }}" {{ $r->id == $cm->role->roles_id ? 'selected' : '' }}>{{ $r->roleName.' - '.$r->quota }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="p-4 bg-warning bg-soft">
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label">Tahap</label>
                                <div class="col-md-10">
                                    <select class="form-select" name="stages_id">
                                        @foreach ( $stages as $s)
                                            <option value="{{ $s->id }}" {{ $s->id == $cm->status->stages_id ? 'selected' : '' }}>{{ $s->stagesName }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class=" row">
                                <label class="col-md-2 col-form-label">Status</label>
                                <div class="col-md-10">
                                    <select class="form-select"  name='isPass'>
                                        <option value="1" {{ $cm->status->isPass == 1 ? 'selected' : '' }}>LOLOS</option>
                                        <option value="0" {{ $cm->status->isPass == 0 ? 'selected' : '' }}>GAGAL</option>
                                    </select>
                                </div>
                            </div>
    
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                    <div class="row float-end">
                        <div class="">
                            <button type="submit" class="btn btn-danger">Update</button>
                        </div>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end modal -->
    
    <!-- Detail Modal -->
    <div class="modal fade detailCaas-{{ $cm->id }}" tabindex="-1" role="dialog" aria-labelledby="detailCaas-{{ $cm->id }}"
        aria-hidden="true" id="detailCaas-{{ $cm->id }}">">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailCaas-detailModal">Detail CaAs</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        @csrf
                        <div class="mb-3 row">
                            <label for="NIM" class="col-md-2 col-form-label">NIM</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="nim" readonly value="{{ $cm->nim }}" id="NIM">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NIM" class="col-md-2 col-form-label">Nama</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $cm->name }}" readonly name="name" id="name">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NIM" class="col-md-2 col-form-label">Email</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $cm->email }}" readonly name="email" id="email">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-2 col-form-label">Jurusan</label>
                            <div class="col-md-10">
                                <select class="form-select" disabled>
                                    <option value="TEKNIK ELEKTRO" {{ strcasecmp($cm->major, 'TEKNIK ELEKTRO')?'':'selected' }}>TEKNIK ELEKTRO</option>
                                    <option value="TEKNIK FISIKA" {{ strcasecmp($cm->major, 'TEKNIK FISIKA')?'':'selected' }}>TEKNIK FISIKA</option>
                                    <option value="TEKNIK TELEKOMUNIKASI" {{ strcasecmp($cm->major, 'TEKNIK TELEKOMUNIKASI')?'':'selected' }}>TEKNIK TELEKOMUNIKASI</option>
                                    <option value="TEKNIK BIOMEDIS" {{ strcasecmp($cm->major, 'TEKNIK BIOMEDIS')?'':'selected' }}>TEKNIK BIOMEDIS</option>
                                    <option value="TEKNIK SISTEM ENERGI" {{ strcasecmp($cm->major, 'TEKNIK SISTEM ENERGI')?'':'selected' }}>TEKNIK SISTEM ENERGI</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-2 col-form-label">Kelas</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" readonly value="{{ $cm->class }}" name="class" id="class">
                            </div>
                        </div>
                        <div class="p-4 bg-warning bg-soft">
                            @if (boolval($cm->plots))
                                <div class="mb-3 row">
                                    <label class="col-md-2 col-form-label">Jadwal</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" readonly value="{{ $cm->plots->shifts->shift_name. ' - '. $cm->plots->shifts->day }}" name="isRoleActive" id="isRoleActive">
                                    </div>
                                </div>
                            @endif
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label" name='stages_id'>Tahap</label>
                                <div class="col-md-10">
                                    <select class="form-select" disabled>
                                        @foreach ( $stages as $s)
                                            <option value="{{ $s->id }}" {{ $s->id == $cm->status->stages_id ? 'selected' : '' }}>{{ $s->stagesName }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-2 col-form-label">Status</label>
                                <div class="col-md-10">
                                    <select class="form-select" disabled>
                                        <option value="1" {{ $cm->status->isPass == 1 ? 'selected' : '' }}>LOLOS</option>
                                        <option value="0" {{ $cm->status->isPass == 0 ? 'selected' : '' }}>GAGAL</option>
                                    </select>
                                </div>
                            </div>
                            
    
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end modal -->
    
    <!-- COnfirmation Modal -->
    <div class="modal fade deleteCon-{{ $cm->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteCon-{{ $cm->id }}"
        aria-hidden="true" id="deleteCon-{{ $cm->id }}">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-warning bg-gradient text-center">
                    <h4 class="modal-title text-bold text-white"  >WARNING!!</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <div class="mb-2">
                        <p>Setelah di hapus, data yang sudah dihapus <br>
                            tidak dapat kembali. Seperti dia</p>
                    </div>
                    <form action="{{ route('admin.delete.caas', $cm->id) }}" method="POST">
                        @csrf
                    </div>
                    <div class="modal-footer">
                    <div class="row float-end">
                        <div class="mr-2">
                            <button type="submit" class="btn btn-success bg-gradient">Yakin kok</button>
                            <button type="button" class="btn btn-danger bg-gradient" data-bs-dismiss="modal">Gajadi</button>
                        </div>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end modal -->
    
    @endforeach
@endif

<!-- Add Modal -->
 <div class="modal fade addCaas-detailModal" tabindex="-1" role="dialog" aria-labelledby="addCaas-detailModal"
     aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="addCaas-detailModal">Tambah CaAs</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <form action="{{ route('admin.create.caas') }}" method="POST">
                     @csrf
                     <div class="mb-3 row">
                         <label for="NIM" class="col-md-2 col-form-label">NIM</label>
                         <div class="col-md-10">
                             <input class="form-control" type="text" name="nim" value="" id="NIM" required>
                         </div>
                     </div>
                     <div class="mb-3 row">
                         <label for="NIM" class="col-md-2 col-form-label">Nama</label>
                         <div class="col-md-10">
                             <input class="form-control" type="text" value="" name="name" id="name" required>
                         </div>
                     </div>
                     <div class="mb-3 row">
                         <label for="NIM" class="col-md-2 col-form-label">Email</label>
                         <div class="col-md-10">
                             <input class="form-control" type="text" value="" name="email" id="email" required>
                         </div>
                     </div>
                     <div class="mb-3 row">
                         <label for="NIM" class="col-md-2 col-form-label">Password</label>
                         <div class="col-md-10">
                             <input class="form-control" type="password" value="" name="password" id="passworod" required>
                         </div>
                     </div>
                     <div class="mb-3 row">
                         <label class="col-md-2 col-form-label">Jurusan</label>
                         <div class="col-md-10">
                             <select class="form-select" name="major">
                                 <option value="TEKNIK ELEKTRO" >TEKNIK ELEKTRO</option>
                                 <option value="TEKNIK FISIKA" >TEKNIK FISIKA</option>
                                 <option value="TEKNIK TELEKOMUNIKASI" >TEKNIK TELEKOMUNIKASI</option>
                                 <option value="TEKNIK BIOMEDIS" >TEKNIK BIOMEDIS</option>
                                 <option value="TEKNIK SISTEM ENERGI" >TEKNIK SISTEM ENERGI</option>
                             </select>
                         </div>
                     </div>
                     <div class="mb-3 row">
                         <label class="col-md-2 col-form-label">Kelas</label>
                         <div class="col-md-10">
                             <input class="form-control" type="text" value="" required name="class" id="class">
                         </div>
                     </div>
                     <div class="mb-3 row">
                         <label class="col-md-2 col-form-label">Role</label>
                         <div class="col-md-10">
                             <select class="form-select" name="roles_id">
                                 @foreach ( $roles as $r)
                                 <option value="{{ $r->id }}" {{ $r->id == 1 ? 'selected' : '' }}>{{ $r->roleName }}</option>
                                 @endforeach
                             </select>
                         </div>
                     </div>
                     <div class="p-4 bg-warning bg-soft">
                         <div class="mb-3 row">
                             <label class="col-md-2 col-form-label">Tahap</label>
                             <div class="col-md-10">
                                 <select class="form-select" name="stages_id">
                                     @foreach ( $stages as $s)
                                         <option value="{{ $s->id }}" {{ $s->id == 1 ? 'selected' : '' }}>{{ $s->stagesName }}</option>
                                     @endforeach
                                 </select>
                             </div>
                         </div>
                         <div class=" row">
                             <label class="col-md-2 col-form-label">Status</label>
                             <div class="col-md-10">
                                 <select class="form-select"  name='isPass'>
                                     <option value="1" selected>LOLOS</option>
                                     <option value="0">GAGAL</option>
                                 </select>
                             </div>
                         </div>
 
                     </div>
                     
                 </div>
                 <div class="modal-footer">
                 <div class="row float-end">
                     <div class="">
                         <button type="submit" class="btn btn-secondary">Save</button>
                     </div>
                 </div>
                 </div>
             </form>
         </div>
     </div>
 </div>
 <!-- end modal -->


<!-- set pass Modal -->
<div class="modal fade setCaas-detailModal" tabindex="-1" role="dialog" aria-labelledby="setCaas-detailModal"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="setCaas-detailModal">Set CaAs</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.set.caas') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                    <label class="form-label">NIM</label>
                    <div class="input-group auth-pass-inputgroup">
                        <input type="text" name="nim" class="form-control" placeholder="Enter NIM" aria-label="NIM">
                    </div>
                </div>
                    <div class="mb-3">
                    <label class="form-label">Password</label>
                    <div class="input-group auth-pass-inputgroup">
                        <input type="password" name="password" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                        <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                    </div>
                </div>
                </div>
                <div class="modal-footer">
                <div class="row float-end">
                    <div class="">
                        <button type="submit" class="btn btn-secondary">Save</button>
                    </div>
                </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal -->

<!-- import excel Modal -->
 <div class="modal fade importCaas-detailModal" tabindex="-1" role="dialog" aria-labelledby="importCaas-detailModal"
     aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="importCaas-detailModal">Import CaAs Murah</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <form action="{{ route('admin.import.caas') }}" method="POST" enctype="multipart/form-data">
                     @csrf
                     <div class="mb-3 mx-2 row">
                         <label for="NIM" class="col-md-3 col-form-label">Format Data:</label>
                         <p>dimulai dari A1, tanpa nama kolom</p>
                         <table class="table table-bordered bg-soft bg-secondary" style>
                             <tr>
                                <td>NIM</td>
                                <td>Nama</td>
                                <td>Email</td>
                                <td>Jurusan</td>
                                <td>Kelas</td>
                             </tr>
                         </table>
                     </div>
                     <hr>
                     <div class="mb-3 mx-2 row">
                         <label for="NIM" class="input-group form-label">Choose File: </label>
                         <div class="col-12">
                             <input class="form-control form-control-md" type="file" accept=".xlsx, .xls, .csv" name="data" required>
                         </div>
                     </div>
                 </div>
                 <div class="modal-footer">
                 <div class="row float-end">
                     <div class="">
                         <button type="submit" class="btn btn-secondary">Import</button>
                     </div>
                 </div>
                 </div>
             </form>
         </div>
     </div>
 </div>
 <!-- end modal -->


@endsection

@section('extras')
    @include('admin.partials.FTdatatables')
@endsection