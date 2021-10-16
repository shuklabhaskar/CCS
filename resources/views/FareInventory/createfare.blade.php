@extends('base_layout')
@section('content')
    <!--suppress HtmlFormInputWithoutLabel -->
    <main class="content">
        <div class="col-12 col-md-12 ">
            <div class="card flex-fill">
                <div class="card-header">
                    @if(!empty($Editfares))

                        <h5>EDIT FARE</h5>
                        <form method="POST" action="{{ url('edit/fare/'.$fare_table_id) }}">

                            @csrf
                            <div class="row">

                                <div class="mb-3 col-md-3">
                                    <label class="form-label" for="fare_table_id">Fare Id</label>
                                    <input required type="number" name="fare_table_id" class="form-control" id="fare_table_id" value="{{ $fare_table_id }}" >
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label class="form-label" for="name">Fare Name</label>
                                    <input required type="text" name="name" class="form-control" id="name" value="{{$ExtraFare->name}}">
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label class="form-label" for="description">Description</label>
                                    <textarea required id="description" name="description" class="form-control" rows="1" >{{$ExtraFare->description}}</textarea>
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label class="form-label" for="fare_version">Fare Version</label>
                                    <input required type="number" name="fare_version" class="form-control" id="fare_version" value="{{$ExtraFare->fare_version}}">
                                </div>

                            </div>

                            <table class="table table-responsive text-center" style="width:100%">
                                <tr>
                                    <td></td>
                                    @foreach($stations as $destination)
                                        <td><strong>{{ $destination -> stn_short_name }}</strong></td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td>
                                        <table>
                                            @foreach($stations as $source)
                                                <tr><td style="padding: 7px"><strong>{{ $source -> stn_short_name }}</strong></td></tr>
                                            @endforeach
                                        </table>
                                    </td>
                                    @for($row = 1; $row <= sizeof($stations); $row++)
                                        <td>
                                            <table>
                                                @for($col = 1; $col <= sizeof($stations); $col++)
                                                    @if(sizeof($Editfares) > 1)
                                                        @foreach($Editfares as $fare)
                                                            @if($fare->source_id == $row && $fare->destination_id == $col)
                                                                <tr><td><label><input class="form-control" type="text" name="{{$fare->id}}" value="{{$fare->fare}}" required/></label></td></tr>
                                                            @endif
                                                        @endforeach
                                                    @else
                                                        <tr><td><label><input type="text" class="form-control" name="fares[{{$row}},{{$col}}]" value="" required/></label></td></tr>
                                                    @endif
                                                @endfor
                                            </table>
                                        </td>
                                    @endfor
                                </tr>

                            </table>

                            <div class="row">

                                {{--START DATE--}}
                                <div class="mb-3  col-md-6">
                                    <label class="form-label" for="start_date">Start Date</label>
                                    <input required id="start_date" name="start_date" type="text" class="form-control flatpickr-minimum"  value="{{$ExtraFare->start_date}}"/>
                                </div>

                                {{--END DATE--}}
                                <div class="mb-3  col-md-6">
                                    <label class="form-label" for="end_date">End Date</label>
                                    <input required id="end_date" name="end_date" type="text" class="form-control flatpickr-minimum"   value="{{$ExtraFare->end_date}}" />
                                </div>

                            </div>


                            <div class="row mb-2 mb-xl-3">

                                <div class=" col-auto d-none d-sm-block">
                                    <a  href=" {{url('fare')}}" class="btn btn-primary">BACK</a>
                                </div>


                                <div class="col-auto ms-auto text-end mt-n1">
                                    <button type="submit" class="btn btn-danger">UPDATE FARE</button>
                                </div>

                            </div>

                        </form>

                    @else
                        <h5>CREATE FARE</h5>
                        <form method="POST" action="{{ url('Create/fare') }}">

                            @csrf

                            <div class="row">

                                <div class="mb-3 col-md-3">
                                    <label class="form-label" for="fare_table_id">Fare Table ID</label>
                                    <input required type="number" name="fare_table_id" class="form-control" id="fare_table_id">
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label class="form-label" for="name">Fare Name</label>
                                    <input required type="text" name="name" class="form-control" id="name">
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label class="form-label" for="description">Description</label>
                                    <textarea required id="description" name="description" class="form-control" rows="1"></textarea>
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label class="form-label" for="fare_version">Fare Version</label>
                                    <input required type="number" name="fare_version" class="form-control" id="fare_version">
                                </div>

                            </div>

                            <table class="table table-responsive text-center" style="width:100%">
                                <tr>
                                    <td></td>
                                    @foreach($stations as $destination)
                                        <td><strong>{{ $destination -> stn_short_name }}</strong></td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td>
                                        <table>
                                            @foreach($stations as $source)
                                                <tr><td style="padding: 7px"><strong>{{ $source -> stn_short_name }}</strong></td></tr>
                                            @endforeach
                                        </table>
                                    </td>
                                    @for($row = 1; $row <= sizeof($stations); $row++)
                                        <td>
                                            <table>
                                                @for($col = 1; $col <= sizeof($stations); $col++)
                                                    <tr>
                                                        <td>
                                                            <label>
                                                                <input type="number" class="form-control" name="fares[{{$row}},{{$col}}]" value="1" required/>
                                                            </label>
                                                        </td>
                                                    </tr>
                                                @endfor
                                            </table>
                                        </td>
                                    @endfor
                                </tr>
                            </table>

                            <div class="row">

                                {{--START DATE--}}
                                <div class="mb-3  col-md-6">
                                    <label class="form-label" for="start_date">Start Date</label>
                                    <input required id="start_date" name="start_date" type="text" class="form-control flatpickr-minimum" />
                                </div>

                                {{--END DATE--}}
                                <div class="mb-3  col-md-6">
                                    <label class="form-label" for="end_date">End Date</label>
                                    <input required id="end_date" name="end_date" type="text" class="form-control flatpickr-minimum" />
                                </div>

                            </div>

                            <div class="row mb-2 mb-xl-3">

                                <div class=" col-auto d-none d-sm-block">
                                    <a  href=" {{url()->previous()}}" class="btn btn-primary">BACK</a>
                                </div>

                                <div class="col-auto ms-auto text-end mt-n1">
                                    <button type="submit" class="btn btn-primary">CREATE FARE</button>
                                </div>



                            </div>

                        </form>
                    @endif
                </div>
            </div>
        </div>
    </main>
@endsection
