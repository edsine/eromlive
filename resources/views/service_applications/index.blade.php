@extends('layouts.app')

@section('title', 'Service Applications')


@push('styles')
@endpush


@section('content')
    {{-- <div class="components-preview wide-md mx-auto"> --}}
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <!-- .nk-block-head-content -->
            <div class="nk-block-head-content">
                <div class="toggle-wrap nk-block-tools-toggle">
                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em
                            class="icon ni ni-more-v"></em></a>
                    <div class="toggle-expand-content" data-content="pageMenu">
                        <ul class="nk-block-tools g-3">
                            {{-- <li class="nk-block-tools-opt">
                                <a href="#" class="btn btn-primary">
                                    <em class="icon ni ni-money"></em>
                                    <span>Make ECS Payment</span>
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div><!-- .nk-block-head-content -->
        </div><!-- .nk-block-between -->
    </div><!-- .nk-block-head -->

    <div class="nk-block nk-block-lg">
        <div class="row g-gs">
            <div class="col-xxl-6 col-sm-12">
                <div class="card h-100">
                    <div class="nk-ecwg nk-ecwg6">
                        <div class="card-inner">
                            @if ($errors->any())
                                @foreach ($errors as $error)
                                    <small class="text-danger">{{ $error }}</small>
                                @endforeach
                            @endif
                           {{--  @if(empty($service_app))
                            <div class="card-title-group">
                                <div class="card-title">
                                    <h6 class="title">New Application</h6>
                                </div>
                            </div>
                            <div class="data">
                                <div class="data-group">
                                    <div class="form-group w-100">
                                        <form method="POST" action="{{ route('service-applications.store') }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="row col-12">

                                                    <div class="col-sm-6 mb-3">
                                                        <label for="service_id">Select Service:</label>
                                                        <select class="form-select js-select2" data-ui="xl" id="service_id1" name="service_id" data-search="on" required>
                                                            <option>Select A Service</option>
                                                            @foreach ($services as $service)
                                                            <option value="{{ $service->id }}">{{ ucfirst($service->name) }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="col-sm-6 mb-3">
                                                        <label for="service_type_id">Service Type:</label>
                                                        <select class="form-select js-select2" data-ui="xl" id="service_type_id1" name="service_type_id" required>
                                                            <option>Select Service Type</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-12 mb-1">Coordinate 1:</div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group mb-3">
                                                            <label for="latitude">Latitude:</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" name="latitude1" id="latitude1" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="longitude">Longitude:</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" name="longitude1" id="longitude1" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 mb-1">Coordinate 2:</div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="latitude">Latitude:</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" name="latitude2" id="latitude2" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="longitude">Longitude:</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" name="longitude2" id="longitude2" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                

                                                    <div class="col-sm-3">
                                                        <button type="submit"
                                                            class="mt-5 btn btn-secondary btn-lg mt-2"><em
                                                                class="icon ni ni-save me-2"></em>Submit</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- @endif
                            @if(!empty($service_app) && $service_app->current_step == 15) --}}
                            <div class="card-title-group">
                                <div class="card-title">
                                    <h6 class="title">New Application</h6>
                                </div>
                            </div>
                            <div class="data">
                                <div class="data-group">
                                    <div class="form-group w-100">
                                        <form method="POST" action="{{ route('service-applications.store') }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="row col-12">

                                                    <div class="col-sm-6 mb-3">
                                                        <label for="service_id">Select Service:</label>
                                                        <select class="form-select js-select2" data-ui="xl" id="service_id2" name="service_id" data-search="on" required>
                                                            <option>Select A Service</option>
                                                            @foreach ($services as $service)
                                                            <option value="{{ $service->id }}">{{ ucfirst($service->name) }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="col-sm-6 mb-3">
                                                        <label for="service_type_id">Service Type:</label>
                                                        <select class="form-select js-select2" data-ui="xl" id="service_type_id2" name="service_type_id" required>
                                                            <option>Select Service Type</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-12 mb-1">Coordinate 1:</div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group mb-3">
                                                            <label for="latitude">Latitude:</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" name="latitude1" id="latitude1" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="longitude">Longitude:</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" name="longitude1" id="longitude1" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 mb-1">Coordinate 2:</div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="latitude">Latitude:</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" name="latitude2" id="latitude2" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="longitude">Longitude:</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" name="longitude2" id="longitude2" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    

                                                   
                                                    <div class="col-sm-3">
                                                        <button type="submit"
                                                            class="mt-5 btn btn-secondary btn-lg mt-2"><em
                                                                class="icon ni ni-save me-2"></em>Submit</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                           {{--  @endif --}}



                        </div><!-- .card-inner -->
                    </div><!-- .nk-ecwg -->
                </div><!-- .card -->
            </div><!-- .col -->
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Applications</h3>
                <div class="nk-block-des text-soft">
                    <p>List of applications.</p>
                </div>
            </div>
        </div><!-- .row -->

        @include('service_applications.table')

    </div> <!-- nk-block -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function () {
        $('#service_id1').change(function () {
            var serviceId = $(this).val();
             if (serviceId) {
                $.ajax({
                    type: "GET",
                    url: "/services/" + serviceId + "/processing-types",
                    success: function (data) {
                        $('#service_type_id1').empty();
                        if (data.length > 0) {
                            $.each(data, function (key, value) {
                                $('#service_type_id1').append('<option value="' + value.name + '">' + value.name + '</option>');
                            });
                        } else {
                            $('#service_type_id1').append('<option value="none">No result</option>');
                        }
                    }
                });
            } else {
                $('#service_type_id1').empty();
            }
        });
    });
    </script>
    <script>
         $(document).ready(function () {
        $('#service_id2').change(function () {
            var serviceId = $(this).val();
             if (serviceId) {
                $.ajax({
                    type: "GET",
                    url: "/services/" + serviceId + "/processing-types",
                    success: function (data) {
                        $('#service_type_id2').empty();
                        if (data.length > 0) {
                            $.each(data, function (key, value) {
                                $('#service_type_id2').append('<option value="' + value.name + '">' + value.name + '</option>');
                            });
                        } else {
                            $('#service_type_id2').append('<option value="0">No result</option>');
                        }
                    }
                });
            } else {
                $('#service_type_id2').empty();
            }
        });
    });
        
    </script>
    {{-- </div><!-- .components-preview --> --}}
@endsection
