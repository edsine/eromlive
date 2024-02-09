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
                                                        <select class="form-select js-select2" data-ui="xl"
                                                            id="service_id" name="service_id" data-search="on" required>
                                                            <option>Select A Service</option>
                                                            @foreach ($services as $service)
                                                                <option value="{{ $service->id }}">{{ $service->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6 mb-3">
                                                        <label for="service_type_id">Service Type:</label>
                                                        <select class="form-select js-select2" data-ui="xl"
                                                            id="service_type_id" name="service_type_id" required>
                                                            <option>Select Service Type</option>
                                                            <option value="mechanical">Mechanical</option>
                                                            <option value="manual">Manual</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="latitude">Latitude:</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" name="latitude" id="latitude" required/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="longitude">Longitude:</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" name="longitude" id="longitude" required/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    

                                                    {{-- <div class="mt-5 col-sm-12">
                                                        <label class="form-label" for="default-06">Upload Documents
                                                        </label>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <label for="title_document">Title Document:</label>
                                                        <div class="form-control-wrap">
                                                            <div class="form-file">
                                                                <input type="hidden" name="title_document"
                                                                    value="Title Document" />
                                                                <input type="file" class="form-file-input" id="document"
                                                                    name="title_document_file" required>
                                                                <label class="form-file-label" for="customFile">Choose
                                                                    file</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <label for="survey_document">Survey Document:</label>
                                                        <div class="form-control-wrap">
                                                            <div class="form-file">
                                                                <input type="hidden" name="survey_document"
                                                                    value="Survey document" />
                                                                <input type="file" class="form-file-input" id="document"
                                                                    name="survey_document_file" required>
                                                                <label class="form-file-label" for="customFile">Choose
                                                                    file</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <label for="sand_search_report">Sand Search Report:</label>
                                                        <div class="form-control-wrap">
                                                            <div class="form-file">
                                                                <input type="hidden" name="sand_search_report"
                                                                    value="Sand search report" />
                                                                <input type="file" class="form-file-input" id="document"
                                                                    name="sand_search_report_file" required>
                                                                <label class="form-file-label" for="customFile">Choose
                                                                    file</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <label for="cac_certificate">CAC Certificate:</label>
                                                        <div class="form-control-wrap">
                                                            <div class="form-file">
                                                                <input type="hidden" name="cac_certificate"
                                                                    value="CAC certificate" />
                                                                <input type="file" class="form-file-input" id="document"
                                                                    name="cac_certificate_file" required>
                                                                <label class="form-file-label" for="customFile">Choose
                                                                    file</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <label for="pre_post_dredge_survey_drawings">Pre & Post Dredge
                                                            Survey Drawings:</label>
                                                        <div class="form-control-wrap">
                                                            <div class="form-file">
                                                                <input type="hidden"
                                                                    name="pre_post_dredge_survey_drawings"
                                                                    value="Pre & Post Dredge survey drawings" />
                                                                <input type="file" class="form-file-input"
                                                                    id="document"
                                                                    name="pre_post_dredge_survey_drawings_file" required>
                                                                <label class="form-file-label" for="customFile">Choose
                                                                    file</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <label for="eia_report">E.I.A Report:</label>
                                                        <div class="form-control-wrap">
                                                            <div class="form-file">
                                                                <input type="hidden" name="eia_report"
                                                                    value="E.I.A Report" />
                                                                <input type="file" class="form-file-input"
                                                                    id="document" name="eia_report_file" required>
                                                                <label class="form-file-label" for="customFile">Choose
                                                                    file</label>
                                                            </div>
                                                        </div>
                                                    </div> --}}


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

    {{-- </div><!-- .components-preview --> --}}
@endsection
