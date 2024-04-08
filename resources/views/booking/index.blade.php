@extends('layouts.app')

@section('title', 'Bookings')


@push('styles')
@endpush


@section('content')


    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">NIWA BOOKING FURRY</h3>
                <div class="nk-block-des text-soft">
                    {{-- <a href="{{route('booking.index')}}" class="btn btn-secondary">Search Again <i class="ni ni-search"></i></a> --}}
                    <p>List of all Bookings</p>
                </div>
            </div><!-- .nk-block-head-content -->
            <div class="nk-block-head-content">
                <div class="toggle-wrap nk-block-tools-toggle">
                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em
                            class="icon ni ni-more-v"></em></a>


                    <div class="toggle-expand-content" data-content="pageMenu">
                        <ul class="nk-block-tools g-3">
                            <li class="nk-block-tools-opt"><a href="{{ route('booking.index') }}"
                                    class="btn btn-primary"><em class="icon ni  ni-search"></em><span>Search Again
                                        </span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- .nk-block-head-content -->
        </div><!-- .nk-block-between -->
    </div><!-- .nk-block-head -->
    <div class="nk-block nk-block-lg">
        <div class="card card-bordered card-preview">
            <div class="card-inner">
                <table class="datatable-init-export nowrap table" data-export-title="Export">
                    <thead>
                        <tr>
                            <th>Departure Time</th>
                            <th>Departure Day</th>
                            <th>Departure Location</th>
                            <th>Arrival Time</th>
                            <th>Arrival Day</th>
                            <th>Arrival Location</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>

                                <td>{{$item->departure_time}}</td>
                                <td>{{$item->departure_day}}</td>
                                <td>{{$item->departure_state}}</td>
                                <td>{{$item->arrival_time}}</td>
                                <td>{{$item->arrival_day}}</td>
                                <td>{{$item->arrival_state}}</td>
                                <td>{{$item->price}}</td>
                                <td>
                                    <a class="btn btn-success" href="">Book Ticket</a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div><!-- .card-preview -->
    </div> <!-- nk-block -->


@endsection

@push('scripts')
    <script src="./assets/js/libs/datatable-btns.js?ver=3.1.3"></script>
@endpush
