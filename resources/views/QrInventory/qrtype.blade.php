@extends('base_layout')
@section('content')

    <main class="content">
        <div class="container-fluid p-0">

            <div class="row mb-2 mb-xl-3">

                <div class="col-auto d-none d-sm-block">
                    <h1 class="h3 mb-3"><strong>QR</strong> INVENTORY</h1>
                </div>

                <div class="col-auto ms-auto text-end mt-n1 mb-4">
                    <a href="{{url('')}}" class="btn btn-primary flex-row text-end"><i class="align-middle " data-feather="plus"></i>&nbsp;EDIT PASS PARAMETERS</a>
                </div>


            </div>
            <div class="row mt-4">
                <div class="col-12 ">
                    <div class="card flex-fill">
                        <div class="card-header">
                            <h5 class="card-title mb-0">QR LIST</h5>
                        </div>
                        <div class="container-fluid">
                            <table id="datatables-reponsive" class="table table-striped " style="width:100%">
                                <thead>
                                <tr>

                                    <th class="d-none d-xl-table-cell">QR Type Id</th>
                                    <th class="d-none d-xl-table-cell"> NAME</th>
                                    <th class="d-none d-xl-table-cell">DESCRIPTION</th>
                                    <th class="d-none d-md-table-cell">ACTION</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($QrDetails as $Qrdetail)
                                    <tr>
                                        <td class="d-none d-xl-table-cell">{{$Qrdetail->qr_type_id}}</td>
                                        <td class="d-none d-xl-table-cell">{{$Qrdetail->qr_name}}</td>
                                        <td class="d-none d-xl-table-cell">{{$Qrdetail->qr_description}}</td>
                                         <td class="d-none d-md-table-cell">
                                            <a type="button"  href="" class="btn btn-sm btn-icon btn-danger rounded-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                <i class="fas fa-edit align-middle"></i>
                                            </a>
                                             <a type="button"  href="" class="btn btn-sm btn-icon btn-primary rounded-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                 <i class="fas fa-plus"></i>
                                             </a>
                                        </td>
                                    </tr>
                                @endforeach




                                </tbody>

                            </table>
                            <div class="col-auto ms-auto text-end mt-n1 mb-4">
                                <a href="{{url('Create/QrType')}}" class="btn btn-primary flex-row text-end"><i class="align-middle " data-feather="plus"></i>&nbsp;CREATE QR TYPE</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </main>
@endsection
