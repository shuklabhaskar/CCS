@extends('base_layout')

@section('content')
    <main class="content">

        <div class="row mb-2 mb-xl-3">

                <div class="col-auto d-none d-sm-block">
                    <h1 class="h3 mb-3"><strong>EQUIPMENT</strong> INVENTORY</h1>
                </div>

                <div class="col-auto ms-auto text-end mt-n1">
                    <a href="{{ url('equip/create') }}" class="btn btn-primary pull-right"><i
                            class="fa fa-plus-square"></i>&nbsp;CREATE EQUIPMENTS</a>   </div>

        </div>


        <div class="col-12 col-md-12 ">
            <div class="card flex-fill">
                <div class="card-header">

                    <h5 class="card-title mb-0">{{ $title }} EQUIPMENTS LIST</h5>

                </div>
                <div class="container-fluid">
                    <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                        <thead>
                        <tr>
                            <th class="d-none d-xl-table-cell">ID</th>
                            <th class="d-none d-xl-table-cell">EQUIP ID</th>
                            <th class="d-none d-xl-table-cell">EQUIP TYPE</th>
                            <th class="d-none d-xl-table-cell">WORKING MODE</th>

                            <th class="d-none d-md-table-cell">IP ADDRESS</th>
                            <th class="d-none d-md-table-cell">STATION</th>
                            <th class="d-none d-md-table-cell">STATUS</th>
                           {{-- <th class="d-none d-md-table-cell">END DATE</th>--}}
                            <th class="d-none d-md-table-cell">ACTION</th>
                        </tr>
                        </thead>

                        <tbody>

                        @foreach($eqData as $data)
                            <tr>
                                <td>{{ $data -> id }}</td>
                                <td>{{ $data -> equipment_id }}</td>
                                @if($data->eq_type_id=="1")
                                <td>AG</td>
                                @else
                                    <td>POST</td>
                                @endif

                                @if($data->eq_mode_id == "1")
                                    <td class="d-none d-xl-table-cell">ENTRY</td>
                                @elseif($data->eq_mode_id == "3")
                                    <td class="d-none d-xl-table-cell">BI-DI</td>
                                @else
                                    <td class="d-none d-xl-table-cell">EXIT</td>
                                @endif

                                <td class="d-none d-xl-table-cell">{{ $data -> ip_address }}</td>
                                <td class="d-none d-xl-table-cell">{{ $data -> station_name }}</td>

                                @if($data->status == "1")
                                    <td class="d-none d-md-table-cell"><span
                                            class="badge bg-success">ACTIVE</span></td>
                                @else
                                    <td class="d-none d-md-table-cell"><span
                                            class="badge bg-danger">INACTIVE</span></td>
                                @endif

                              {{--  <td class="d-none d-md-table-cell">{{ $data -> end_date }}</td>--}}
                                <td class="d-none d-md-table-cell">

                                    <a type="button"  href=" {{ url("eq/update/".$data -> equipment_id) }}" class="btn btn-sm btn-icon btn-danger rounded-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
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
    </main>


@endsection
