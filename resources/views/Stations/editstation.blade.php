@extends('base_layout')

@section('content')


    <main class="content">
        <div class="container-fluid p-0">

            <div class="card flex-fill">
                <div class="card-header">



                    @if(!empty($station))
                        <h5 class="card-title mb-0">EDIT STATION * *</h5>
                        <form method="post" action="{{url('station/update/'.$station -> station_id)}}">

                            @csrf

                            <div class="row" style="margin-top: 40px">

                                <div class="col-md-4">
                                    <label for="station_name">Station Id</label>
                                    <input disabled class="form-control" required="" name="station_id"
                                            type="text" id="station_name" value="{{ $station -> station_id }}">
                                    <br>
                                </div>
                                <div class="col-md-4">
                                    <label for="station_name">Station Name</label>
                                    <input class="form-control" required="" name="station_name"
                                           type="text" id="station_name" value="{{ $station -> station_name }}">
                                    <br>
                                </div>
                                <div class="col-md-4">
                                    <label for="Description">Description</label>
                                    <input class="form-control" required="" name="description"
                                           type="text" id="station_name" value="{{ $station -> description }}">
                                    <br>
                                </div>

                            </div>

                            <div class="row" style="margin-top: 10px">

                                <div class="col-md-4">

                                    <label class="w-100">Company
                                        <select class="form-select mb-3" name="company_id">
                                            {{--<option>Select Company</option>--}}

                                            @foreach($companies as $cdata)
                                                @if($cdata -> company_id == $station -> company_id)
                                                    <option selected value="{{ $cdata -> company_id }}">{{ $cdata -> company_name }}</option>
                                                @else
                                                    <option value="{{ $cdata -> company_id }}">{{ $cdata -> company_name }}</option>
                                                @endif
                                            @endforeach

                                        </select>
                                    </label>

                                </div>
                                <div class="col-md-4">

                                    <label class="w-100">Status
                                        <select class="form-select mb-3" name="status" >
                                           {{-- <option>Select Status</option>--}}
                                            @if($station->status == "1")
                                                <option selected value="1">ACTIVE</option>
                                            @else
                                                <option selected value="1">ACTIVE</option>
                                            @endif

                                            @if($station->status == "0")
                                                <option selected value="0">INACTIVE</option>
                                            @else
                                                <option value="0">INACTIVE</option>
                                            @endif

                                        </select>
                                    </label>

                                </div>

                                <div class="col-md-4">
                                    <label class="w-100">Line
                                        <select class="form-select mb-3" name="line_id">
                                          {{--  <option>Select Line</option>--}}

                                            @foreach($lines as $ldata)
                                                @if($ldata -> line_id == $station -> line_id )
                                                    <option selected value="{{$ldata -> line_id}}">{{$ldata -> line_name}}</option>
                                                @else
                                                    <option  value="{{$ldata -> line_id}}">{{$ldata -> line_name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </label>
                                </div>
                            </div>

                            <div class="row" style="margin-top: 10px">

                                <div class="col-md-4">
                                    <label for="station_name">Short Name</label>
                                    <input class="form-control" required="" name="stn_short_name"
                                           type="text" id="station_name" value="{{ $station -> stn_short_name }}">
                                    <br>
                                </div>

                                <div class="col-md-4">
                                    <label for="station_name">National Name</label>
                                    <input class="form-control" required="" name="stn_national_lang"
                                           type="text" id="station_name" value="{{ $station -> stn_national_lang }}">
                                    <br>
                                </div>

                                <div class="col-md-4">
                                    <label for="station_name">Regional Name</label>
                                    <input class="form-control" required="" name="stn_regional_lang"
                                           type="text" id="station_name" value="{{ $station -> stn_regional_lang }}">
                                    <br>
                                </div>

                                <div class="row mt-3">

                                    <div class="col-md-4">
                                        <label class="w-100">X-Coordinate</label>
                                        <input class="form-control" required="" name="cord_x"
                                               type="text" id="station_name" value="{{ $station -> cord_x }}">
                                        <br>
                                    </div>

                                    <div class="col-md-4">
                                        <label class="w-100">Y-Coordinate</label>
                                        <input class="form-control" required="" name="cord_y"
                                               type="text" id="station_name" value="{{ $station -> cord_y }}">
                                        <br>
                                    </div>

                                    <div class="col-md-4">
                                        <label class="w-100" for="start_date">Start Date</label>
                                        <input required id="start_date" name="start_date" type="text"
                                               class="form-control flatpickr-minimum" placeholder="Select start date"
                                                 value="{{ $station -> start_date }}">
                                    </div>

                                </div>

                                <div class="row mt-2">

                                    <div class="col-md-4">
                                        <label class="w-100" for="End_date">End Date</label>
                                        <input required id="End_date" name="End_date" type="text"
                                               class="form-control flatpickr-minimum" placeholder="Select End date"
                                               value="{{ $station -> end_date }}">
                                    </div>

                                </div>

                                <div class="row mt-4">

                                    <div class="col w-100">


                                        <button class="btn btn-dark"><i class="fa fa-home"></i> BACK </button>

                                        <button class="btn btn-success"><i class="fa fa-edit mx-1"></i>UPDATE STATION</button>
                                    </div>

                                </div>
                            </div>
                        </form>

                    @else
                        <h5 class="card-title mb-0">CREATE STATION * *</h5>
                        <form method="post" action="{{url('station/create')}}">



                            @csrf

                            <div class="row" style="margin-top: 40px">

                                <div class="col-md-4">
                                    <label for="station_id">Station Id</label>
                                    <input class="form-control" required="" name="station_id" type="number" id="station_id" value="">
                                    <br>
                                </div>
                                <div class="col-md-4">

                                        <label for="station_id">Station Name</label>
                                        <input class="form-control" required="" name="station_name" type="text" id="station_id" value="">
                                        <br>


                                </div>
                                <div class="col-md-4">
                                    <label for="station_name">Description</label>
                                    <input class="form-control" required="" name="description"
                                           type="text" id="station_name">
                                    <br>
                                </div>

                            </div>

                            <div class="row" style="margin-top: 10px">
                                <div class="col-md-4">

                                    <label class="w-100">Company
                                        <select class="form-select mb-3" name="company_name" required="">
                                            <option selected value="1">MMOPL</option>
                                        </select>
                                    </label>

                                </div>
                                <div class="col-md-4">

                                    <label class="w-100">Status
                                        <select class="form-select mb-3" name="status" required="">
                                            <option selected value="1">ACTIVE</option>
                                            <option value="0">INACTIVE</option>
                                        </select>
                                    </label>

                                </div>
                                <div class="col-md-4">
                                    <label class="w-100">Line
                                        <select class="form-select mb-3" name="line_name" required="">
                                            <option selected value="1">VERSOVA-GHATKOPAR</option>
                                        </select>
                                    </label>
                                </div>
                            </div>

                            <div class="row" style="margin-top: 10px">

                                <div class="col-md-4">
                                    <label for="station_name">Short Name</label>
                                    <input class="form-control" required="" name="stn_short_name"
                                           type="text" id="station_name">
                                    <br>
                                </div>
                                <div class="col-md-4">
                                    <label for="station_name">National Name</label>
                                    <input class="form-control" required="" name="stn_national_lang"
                                           type="text" id="station_name">
                                    <br>
                                </div>
                                <div class="col-md-4">
                                    <label for="station_name">Regional Name</label>
                                    <input class="form-control" required="" name="stn_regional_lang"
                                           type="text" id="station_name">
                                    <br>
                                </div>


                                <div class="row" style="margin-top: 10px">
                                    <div class="col-md-4 mt-2">
                                        <label class="w-100">X-Coordinate</label>
                                        <input class="form-control" required="" name="cord_x"
                                               type="number" id="station_name">
                                        <br>
                                    </div>
                                    <div class="col-md-4 mt-2">
                                        <label class="w-100">Y-Coordinate</label>
                                        <input class="form-control" required="" name="cord_y"
                                               type="number" id="station_name">
                                        <br>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label" for="start_date">Start Date </label>
                                        <input required id="start_date" name="start_date" type="text"
                                               class="form-control flatpickr-minimum" placeholder="Select start date"/>
                                    </div>
                                </div>

                                <div class="row" style="margin-top: 10px">
                                    <div class="col-md-3">
                                        <label class="form-label" for="end_date">End Date</label>
                                        <input id="end_date" name="end_date" type="text"
                                               class="form-control flatpickr-minimum" placeholder="Select End date"/>
                                        <br>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col w-100">
                                        <a href="{{url('station')}}"
                                           class="btn btn-primary bg-dark btn-outline-dark"><i class="align-middle "
                                                                                               data-feather="skip-back"></i>&nbsp;Back</a>
                                        <button class="btn btn-primary"><i class="align-middle "
                                                                           data-feather="user-plus"></i>&nbsp;CREATE
                                            STATION
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </form>

                    @endif

                </div>
            </div>

        </div>
    </main>


@endsection
