@extends('base_layout')
@section('content')

    <main class="content">
        <div class="col-12 col-md-12 ">
            <div class="card flex-fill">
                <div class="card-header">
                    @if(!empty($data))
                        <h5>EDIT EQUIPMENTS</h5>
                        <form method="post" action="{{url('eq/update/'.$data->equipment_id.'/'.$data->eq_type_id)}}">

                            @csrf

                            <div class="row mt-4">
                                <div class="col-md-3">
                                    <label for="atek_id">Atek id</label>
                                    <input class="form-control" required="" name="atek_id" type="number"
                                           id="atek_id" disabled value="{{$data->atek_id}}">
                                    <br>
                                </div>

                                <div class="col-md-3">
                                    <label for="equipment_id">Equipment id</label>
                                    <input class="form-control" required="" name="equipment_id"
                                           type="number" id="equipment_id" disabled value="{{$data->equipment_id}}">
                                    <br>
                                </div>

                                <div class="col-md-3" id="eq_type">
                                    <label class="w-100">Equipment_type
                                        <select class="form-select mb-3" name="eq_type_id" id="eq_type_select" disabled >
                                            @if($data->eq_type_id == "1")
                                                <option selected value="1">AG</option>
                                            @else
                                                <option value="1">AG</option>
                                            @endif

                                            @if($data->eq_type_id =="2")
                                                <option selected value="2">POST</option>
                                            @else
                                                <option value="2">POST</option>
                                            @endif
                                        </select>
                                    </label>
                                </div>

                                <div class="col-md-3" id="eq_mode">
                                    <label class="w-100">Equipment_Mode
                                        <select class="form-select mb-3" name="eq_mode_id" id="eq_mode_select"  >

                                            @if($data->eq_mode_id =="0")
                                                <option selected value="0">EXIT</option>
                                            @else
                                                <option value="0">EXIT</option>
                                            @endif

                                            @if($data->eq_mode_id =="1")
                                                <option value="1">ENTRY</option>
                                            @else
                                                <option value="1">ENTRY</option>
                                            @endif

                                            @if($data->eq_mode_id =="3")
                                                <option value="3">BI-DI</option>
                                            @else
                                                <option value="3">BI-DI</option>
                                            @endif
                                        </select>
                                    </label>
                                </div>

                            </div>
                            <div class="row mt-2">

                                <div class="col-md-3">
                                    <label class="w-100">Station
                                        <select class="form-select mb-3" name="station_id" disabled >
                                            @foreach($Stations as $station)
                                                <option selected
                                                        value="{{$station->station_id}}">{{$station->station_name}}</option>
                                            @endforeach
                                        </select>
                                    </label>
                                </div>

                                <div class="col-md-3">
                                    <label class="w-100">Status
                                        <select class="form-select mb-3" name="status">
                                            @if($data->status =="1")
                                                <option selected value="1">ACTIVE</option>
                                            @else
                                                <option value="1">ACTIVE</option>
                                            @endif


                                            @if($data-> status=="0")
                                                <option selected value="0">INACTIVE</option>
                                            @else
                                                <option value="0">INACTIVE</option>
                                            @endif
                                        </select>
                                    </label>
                                </div>


                                <div class="col-md-3">
                                    <label for="description">Description</label>
                                    <input class="form-control" required="" name="description" type="text"
                                           id="description" value="{{$data->description}}">
                                    <br>
                                </div>

                                <div class="col-md-3">
                                    <label for="ip_address">Ip address</label>
                                    <input class="form-control" name="ip_address" type="text" id="ip"
                                           value="{{$data->ip_address}}">
                                    <br>
                                </div>

                            </div>
                            <div class="row mt-2">

                                <div class="col-md-3">
                                    <label for="primary_ssid">Ap primary ssid</label>
                                    <input class="form-control" name="primary_ssid" type="text" id="primary_ssid"
                                           value="{{$data->primary_ssid}}">
                                    <br>
                                </div>

                                <div class="col-md-3">
                                    <label for="primary_ssid_pwd">AP Primary SSID Password</label>
                                    <input class="form-control" required="" name="primary_ssid_pwd" type="text"
                                           id="primary_ssid_pwd" value="{{$data->primary_ssid_pwd}}">
                                    <br>
                                </div>

                                <div class="col-md-3">
                                    <label for="backup_ssid"> AP Backup ssid</label>
                                    <input class="form-control" name="backup_ssid" type="text" id="backup_ssid"
                                           value="{{$data->backup_ssid}}">
                                    <br>
                                </div>

                                <div class="col-md-3">
                                    <label for="backup_ssid_pwd">AP Backup SSID Password</label>
                                    <input class="form-control" name="backup_ssid_pwd" type="text" id="backup_ssid_pwd"
                                           value="{{$data->backup_ssid_pwd}}">
                                    <br>
                                </div>

                            </div>
                            <div class="row mt-2">
                                <div class="col-md-3">
                                    <label for="gateway">Gate way</label>
                                    <input class="form-control" required="" name="gateway" type="text" id="gate_way"
                                           value="{{$data->gateway}}">
                                    <br>
                                </div>
                                <div class="col-md-3">
                                    <label for="subnetmask">Subnet Mask</label>
                                    <input class="form-control" required="" name="subnetmask" type="text"
                                           id="subnetmask" value="{{$data->subnetmask}}">
                                    <br>
                                </div>


                                <div class="col-md-3">
                                    <label for="cord_x">X-Coordinate</label>
                                    <input class="form-control" name="cord_x" type="number" id="cord_x"
                                           value="{{$data->cord_x}}">
                                    <br>
                                </div>
                                <div class="col-md-3">
                                    <label for="cord_y">Y-Coordinate</label>
                                    <input class="form-control" name="cord_y" type="number" id="cord_y"
                                           value="{{$data->cord_y}}">
                                    <br>
                                </div>


                            </div>
                            <div class="row mt-2">

                                <div class="mb-3 col-md-3">
                                    <label class="form-label" for="start_date">Start Date</label>
                                    <input required id="start_date" name="start_date" type="text"
                                           class="form-control flatpickr-minimum" placeholder="Select start date"
                                           value="{{$data->start_date}}">
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label" for="end_date">End Date</label>
                                    <input id="end_date" name="end_date" type="text"
                                           class="form-control flatpickr-minimum" placeholder="Select End date"
                                           value="{{$data->end_date}}">
                                    <br>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col w-100">
                                    <a href="{{url('equipment/'.$data->eq_type_id)}}"
                                       class="btn btn-primary bg-dark btn-outline-dark"><i class="align-middle "
                                                                                           data-feather="skip-back"></i>&nbsp;Back</a>
                                    <button class="btn btn-success"><i class="align-middle "
                                                                       data-feather="user-plus"></i>&nbsp;UPDATE
                                        EQUIPMENT
                                    </button>
                                </div>

                            </div>

                        </form>
                    @else
                        <h5 class="card-title mb-0">CREATE EQUIPMENTS</h5>
                        <form method="post" action="{{url('equip/create')}}">

                            @csrf

                            <div class="row mt-4">
                                <div class="col-md-3">
                                    <label for="atek_id">Atek id</label>
                                    <input class="form-control" required="" name="atek_id" type="number" id="atek_id">
                                    <br>
                                </div>
                                <div class="col-md-3">
                                    <label for="equipment_id">Equipment id</label>
                                    <input class="form-control" required="" name="equipment_id" minlength="5"
                                           type="number" id="equipment_id">
                                    <br>
                                </div>
                                <div class="col-md-3">
                                    <label class="w-100">Equipment_type
                                        <select class="form-select mb-3" name="eq_type_id" id="eq_type_id" required>
                                            <option selected value="1">AG</option>
                                            <option value="2">POST</option>
                                        </select>
                                    </label>
                                </div>
                                <div class="col-md-3">
                                    <label class="w-100">Equipment_Mode
                                        <select class="form-select mb-3" name="eq_mode_id" id="mode" required>
                                            <option selected value="1" data-attribut="1">ENTRY</option>
                                            <option value="2" data-attribut="1">EXIT</option>
                                            <option value="3" data-attribut="1">BI-DI</option>
                                            <option value="4" data-attribut="2">EFQ</option>
                                            <option value="5" data-attribut="2">POST</option>
                                        </select>

                                    </label>
                                </div>
                            </div>

                            <div class="row mt-2">

                                <div class="col-md-3">
                                    <label class="w-100">Station
                                        <select class="form-select mb-3" name="station_id" required>
                                            @foreach($Stations as $station)
                                                <option
                                                    value="{{$station->station_id}}">{{$station->station_name}}</option>
                                            @endforeach
                                        </select>
                                    </label>
                                </div>

                                <div class="col-md-3">
                                    <label class="w-100">Status
                                        <select class="form-select mb-3" name="status" required>
                                            <option selected value="1">ACTIVE</option>
                                            <option value="0">INACTIVE</option>
                                        </select>
                                    </label>
                                </div>

                                <div class="col-md-3">
                                    <label for="description">Description</label>
                                    <input class="form-control" required="" name="description" type="text"
                                           id="description">
                                    <br>
                                </div>

                                <div class="col-md-3">
                                    <label for="ip">Ip address</label>
                                    <input class="form-control" required="" name="ip_address" type="text" id="ip">
                                    <br>
                                </div>

                            </div>
                            <div class="row mt-2">

                                <div class="col-md-3">
                                    <label for="primary_ssid">Ap primary ssid</label>
                                    <input class="form-control" required name="primary_ssid" type="text" id="primary_ssid">
                                    <br>
                                </div>

                                <div class="col-md-3">
                                    <label for="primary_ssid_pwd">AP Primary SSID Password</label>
                                    <input class="form-control" required="" name="primary_ssid_pwd" type="text"
                                           id="primary_ssid_pwd">
                                    <br>
                                </div>

                                <div class="col-md-3">
                                    <label for="backup_ssid">AP Backup ssid</label>
                                    <input class="form-control" name="backup_ssid" type="text" id="backup_ssid" required>
                                    <br>
                                </div>

                                <div class="col-md-3">
                                    <label for="backup_ssid_pwd">AP Backup SSID Password</label>
                                    <input class="form-control" name="backup_ssid_pwd" type="text" id="backup_ssid_pwd" required="">
                                    <br>
                                </div>

                            </div>
                            <div class="row mt-2">

                                <div class="col-md-3">
                                    <label for="gateway">Gate way</label>
                                    <input class="form-control" required="" name="gateway" type="text" id="gateway">
                                    <br>
                                </div>
                                <div class="col-md-3">
                                    <label for="subnetmask">Subnet Mask</label>
                                    <input class="form-control" required="" name="subnetmask" type="text"
                                           id="subnetmask">
                                    <br>
                                </div>
                                <div class="col-md-3">
                                    <label for="cord_x">X-Coordinate</label>
                                    <input class="form-control"  required name="cord_x" type="number" id="cord_x">
                                    <br>
                                </div>
                                <div class="col-md-3">
                                    <label for="cord_y">Y-Coordinate</label>
                                    <input class="form-control"  required name="cord_y" type="number" id="cord_y">
                                    <br>
                                </div>

                            </div>
                            <div class="row mt-2">

                                <div class="mb-3 col-md-3">
                                    <label class="form-label" for="start_date">Start Date</label>
                                    <input required id="start_date" name="start_date" type="text"
                                           class="form-control flatpickr-minimum" placeholder="Select start date"/>
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label" for="end_date">End Date</label>
                                    <input id="end_date" name="end_date" type="text"
                                           class="form-control flatpickr-minimum" placeholder="Select End date"/>
                                    <br>
                                </div>

                            </div>
                            <div class="row">

                                <div class="col w-100">
                                    <a href="{{url()->previous()}}"
                                       class="btn btn-primary bg-dark btn-outline-dark"><i class="align-middle "
                                                                                           data-feather="skip-back"></i>&nbsp;Back</a>
                                    <button class="btn btn-success"><i class="align-middle "
                                                                       data-feather="user-plus"></i>&nbsp;CREATE
                                        EQUIPMENT
                                    </button>
                                </div>

                            </div>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </main>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            flatpickr(".flatpickr-minimum");


           /* const EQ_TYPE = document.getElementById('eq_type_id')
            const EQ_MODE_SELECT = document.getElementById('mode')

            EQ_TYPE.addEventListener('change', () => {

                if (EQ_TYPE.value == "2") {

                    EQ_MODE_SELECT.disabled = true;

                } else {

                    EQ_MODE_SELECT.disabled = false;

                }

            })*/

            $("#eq_type_id").change(
                function (){
                filterSelectOptions($("#mode"), "1", $(this).val());
            });

        })
    </script>

@endsection
