@extends('base_layout')
@section('content')



    <main class="content">
        <div class="container-fluid p-0">
            <div class="card flex-fill">
                <div class="card-header">
                    @if(!empty($QrDetails))
                        <h5 class="card-title mb-0">EDIT QR TYPE</h5>
                        <form method="post" action="{{url('Edit/QrType'.$qr_type_id)}}" style="margin-left: 40%">

                            @csrf

                            <div class="" style="margin-top: 20px">

                                <div class="col-md-4">
                                    <label for="qr_type_id">QR TYPE ID</label>
                                    <input class="form-control" required="" name="qr_type_id"
                                           type="text" id="qr_type_id" value="{{$QrDetails->qr_type_id}}">
                                    <br>
                                </div>
                                <div class="col-md-4">
                                    <label for="qr_type_name">QR TYPE NAME</label>
                                    <input class="form-control" required="" name="qr_name"
                                           type="text" id="qr_type_name" value="{{$QrDetails->qr_name}}">
                                    <br>
                                </div>
                                <div class="col-md-4">
                                    <label for="description">DESCRIPTION</label>
                                    <input class="form-control" required="" name="qr_description"
                                           type="text" id="description" value="{{$QrDetails->qr_type_id}}">
                                    <br>
                                </div>

                            </div>

                            <div class="col-auto ms-auto text-end mt-n1">
                                <button type="submit" class="btn btn-primary flex-row text-end"><i class="align-middle " data-feather="plus"></i>&nbsp;UPDATE
                                    QR TYPE
                                </button>
                            </div>

                        </form>
                    @else
                        <h5 class="card-title mb-0">CREATE QR TYPE</h5>
                        <form method="post" action="{{url('Create/QrType')}}" style="margin-left: 40%">

                            @csrf

                            <div class="" style="margin-top: 20px">

                                <div class="col-md-4">
                                    <label for="qr_type_id">QR TYPE ID</label>
                                    <input class="form-control" required="" name="qr_type_id"
                                           type="text" id="qr_type_id">
                                    <br>
                                </div>
                                <div class="col-md-4">
                                    <label for="qr_type_name">QR TYPE NAME</label>
                                    <input class="form-control" required="" name="qr_name"
                                           type="text" id="qr_type_name">
                                    <br>
                                </div>
                                <div class="col-md-4">
                                    <label for="description">DESCRIPTION</label>
                                    <input class="form-control" required="" name="qr_description"
                                           type="text" id="description">
                                    <br>
                                </div>

                            </div>

                            <div class="col-auto ms-auto text-end mt-n1">
                                <button type="submit" class="btn btn-primary flex-row text-end"><i class="align-middle "
                                                                                                   data-feather="plus"></i>&nbsp;CREATE
                                    QR TYPE
                                </button>
                            </div>

                        </form>
                    @endif


                </div>
            </div>

        </div>
    </main>
@endsection
