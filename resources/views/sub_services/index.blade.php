@extends('layouts.app')

@section('title', 'Sub-Services')


@push('styles')
@endpush


@section('content')

    {{-- <div class="components-preview wide-md mx-auto"> --}}
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Services & Sub-Services</h3>
                <div class="nk-block-des text-soft">
                    <p>List of registered services & sub-services.</p>
                </div>
            </div><!-- .nk-block-head-content -->
            <!-- .nk-block-head-content -->
        </div><!-- .nk-block-between -->
    </div><!-- .nk-block-head -->
    <div class="nk-block nk-block-lg">
        <div class="card card-bordered card-preview">
            <div class="card-inner">
                <table class="datatable-init-export nowrap table" data-export-title="Export">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Service Name</th>
                            <th>Sub-Service Name</th>
                            <th>Status</th>
                            <th>Manage</th>
                        </tr>
                    </thead>
                    <tbody> @php
                        $no = 1;
                    @endphp
                        @foreach ($employees as $employee)
                            <tr>
                                <td>@php
                                echo $no++;
                                @endphp</td>
                                <td>{{ $employee->employee->first_name }}</td>
                                <td>{{ $employee->name }}</td>
                                 <td><span
                                        class="tb-status text-{{ $employee->status == 1 ? 'success' : 'danger' }}">{{ $employee->status == 1 ? 'ACTIVE' : 'NOT ACTIVE' }}</span>
                                </td>
                                <td>
                                    <a style="padding-right: 10px;" href="{{ route('sub-services.edit', $employee->id) }}" title="Edit Sub-Service"><span
                                            class="nk-menu-icon text-info"><em class="icon ni ni-edit"></em></span></a>
                                    {{-- <a data-id="{{ $employee->id }}"><span class="nk-menu-icon text-danger eg-swal-av3"><em
                                                class="icon ni ni-trash"></em></span>
                                            </a> --}}

                                    <a id="delete-employee" title="Terminate Sub-Service" style="cursor: pointer;"
                                        onclick="event.preventDefault();
                                    document.getElementById('delete-employee-form').submit();"><span
                                            class="nk-menu-icon text-danger eg-swal-av3"><em
                                                class="icon ni ni-user-remove"></em></span>
                                    </a>
                                    <form id="delete-employee-form" action="{{ route('sub-services.destroy', $employee->id) }}"
                                        method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        {{-- <button onclick="return false" id="delete-employee"
                                            class="btn btn-danger">Delete</button> --}}
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div><!-- .card-preview -->
    </div> <!-- nk-block -->
    {{-- </div><!-- .components-preview --> --}}

@endsection

@push('scripts')
    <script>
        $(document).ready(function() {

            $('#delete-employee').on('click', function(e) {
                e.preventDefault();
                let id = $(this).data('id');
                Swal.fire({
                    title: 'Are you sure ?',
                    text: "You won't be able to revert this !",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    //redirect to database
                    if (result.isConfirmed) {
                        $('#delete-employee-form').submit();
                    }
                    //handle through ajax
                    /* if (result.value) {
                        Swal.fire('Deleted!', 'Your selected item has been deleted.', 'success');
                    } */
                })
            });
        });
    </script>
    <!-- JavaScript -->
    <script src="./assets/js/libs/datatable-btns.js?ver=3.1.3"></script>
@endpush
