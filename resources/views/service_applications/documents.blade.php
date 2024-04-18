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
                                    <h6 class="title">New Document</h6>
                                </div>
                            </div>
                            <div class="data">
                                <div class="data-group">
                                    <div class="form-group w-100">
                                        <form method="POST" action="{{ route('service-applications.documents.store', $service_application->id) }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="row col-12">

                                                    <div class="mt-5 col-sm-12">
                                                        <label class="form-label" for="default-06">Upload Documents
                                                        </label>
                                                    </div>
                                                    <?php $n = 1; ?>
                                                    @foreach($doc_uploads as $doc_upload)
    <div class="col-sm-6">
        <label for="title_document">{{ $doc_upload->name }}:</label>
        <p style="color: red">Allowed file upload format are images,.pdf,.doc,.docx and maximum size of 2MB respectively</p>
        <div class="form-control-wrap">
            <div class="form-file">
                <input type="hidden" name="title_document[]" value="{{ $doc_upload->name }}" /> <!-- Notice the [] here -->
                <input type="file" class="form-file-input" id="document_{{ $n++ }}" name="title_document_file[]" required accept="image/*,.pdf,.doc,.docx" maxlength="2097152">
                <label class="form-file-label" for="document_{{ $n++ }}">Choose file</label> <!-- Use loop index for unique IDs -->
            </div>
        </div>
    </div>
@endforeach



                                                   

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
                <h3 class="nk-block-title page-title">Documents</h3>
                <div class="nk-block-des text-soft">
                    <p>List of Documents.</p>
                </div>
            </div>
        </div><!-- .row -->

        @include('service_applications.documents_table')

    </div> <!-- nk-block -->

    {{-- </div><!-- .components-preview --> --}}
@endsection
