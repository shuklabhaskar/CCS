@extends('base_layout')
@section('content')

    <main class="content">
        <div class="container-fluid p-0">

            <div class="row mb-2 mb-xl-3">

                <div class="col-auto d-none d-sm-block">
                    <h1 class="h3 mb-3"><strong>FARE</strong> INVENTORY</h1>
                </div>

                <div class="col-auto ms-auto text-end mt-n1">
                    <a href="{{url('Create/fare')}}" class="btn btn-primary flex-row text-end"><i class="align-middle" data-feather="plus"></i>&nbsp;CREATE FARE</a>
                </div>

            </div>

            <div class="row mt-4">
                <div class="col-12 ">
                    <div class="card flex-fill">
                        <div class="card-header">
                            <h5 class="card-title mb-0">FARE LIST</h5>
                        </div>
                        <div class="container-fluid">
                            <table id="datatables-reponsive" class="table table-striped " style="width:100%">
                                <thead>
                                <tr>
                                    <th class="d-none d-xl-table-cell">ID</th>
                                    <th class="d-none d-xl-table-cell">FARE NAME</th>
                                    <th class="d-none d-xl-table-cell">DESCRIPTION</th>
                                    <th class="d-none d-xl-table-cell">CURRENT VER</th>
                                    <th class="d-none d-xl-table-cell">ACTION</th>
                                </tr>

                                </thead>
                                <tbody>

                                @foreach($fares as $fare)
                                    <tr>
                                        <td>{{$fare->fare_table_id}}</td>
                                        <td class="d-none d-xl-table-cell">{{$fare->name}}</td>
                                        <td class="d-none d-xl-table-cell">{{$fare->description}}</td>
                                        <td class="d-none d-xl-table-cell">{{$fare->fare_version}}</td>
                                        <td class="d-none d-md-table-cell">
                                            <a type="button" href="{{url('edit/fare/'.$fare->fare_table_id)}}"
                                               class="btn btn-sm btn-icon btn-danger rounded-2"
                                               data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                <i class="fas fa-edit align-middle"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </main>

@endsection
