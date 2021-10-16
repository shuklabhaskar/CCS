@extends('base_layout')

@section('content')


    <main class="content">
        <div class="container-fluid p-0">

            <div class="row mb-2 mb-xl-3">

                    <div class="col-auto d-none d-sm-block">
                        <h1 class="h3 mb-3"><strong>STATION</strong> INVENTORY</h1>
                    </div>
                    <div class="col-auto ms-auto text-end mt-n1">
                        <a href="{{url('station/create')}}" class="btn btn-primary flex-row text-end"><i class="align-middle " data-feather="plus"></i>&nbsp;CREATE STATION</a>
                    </div>

            </div>
            <div class="row mt-4">
                <div class="col-12 ">
                    <div class="card flex-fill">
                            <div class="card-header">
                                <h5 class="card-title mb-0">STATIONS LIST</h5>
                            </div>
                        <div class="container-fluid">
                            <table id="datatables-reponsive" class="table table-striped " style="width:100%">
                                <thead>
                                <tr>
                                    <th>STATION ID</th>
                                    <th class="d-none d-xl-table-cell">STATION NAME</th>
                                    <th class="d-none d-xl-table-cell">COMPANY NAME</th>
                                    <th class="d-none d-xl-table-cell">LINE NAME</th>
                                    <th class="d-none d-xl-table-cell">STATUS</th>
                                    <th class="d-none d-md-table-cell">ACTION</th>
                                </tr>
                                </thead>
                                <tbody>


                                @foreach($stations as $station)
                                    <tr>
                                        <td>{{$station->station_id}}</td>
                                        <td class="d-none d-xl-table-cell">{{$station->station_name}}</td>
                                        <td class="d-none d-xl-table-cell">{{$station->company_name}}</td>
                                        <td class="d-none d-xl-table-cell">{{$station->line_name}}</td>
                                        @if($station -> status == "1")
                                            <td><span class="badge bg-success">ACTIVE</span></td>
                                        @elseif($station -> status == "0")
                                            <td><span class="badge bg-danger">INACTIVE</span></td>
                                        @endif

                                        <td class="d-none d-md-table-cell">

                                            <a type="button"  href="{{('station/update/'.$station->station_id)}}" class="btn btn-sm btn-icon btn-danger rounded-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
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


 {{--   <script>
        document.addEventListener("DOMContentLoaded", function() {
          $("#datatables-reponsive").DataTable({
                responsive: true,
                scrollY:  '50vh',
                scrollCollapse: true,
                paging:         false,

            });

        });

    </script>--}}

@endsection
