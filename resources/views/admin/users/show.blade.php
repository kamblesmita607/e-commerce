
@extends('master')

@section('title', __('views.admin.users.show.title', ['name' => $user->name]))

@section('pass_data_main')
    <div class="row">
        <table class="table table-striped table-hover">
            <tbody>
            <tr>
                <th>{{ __('views.admin.users.show.table_header_1') }}</th>
                <td>{{ $user->name }}</td>
            </tr>
            <tr>
                <th>{{ __('views.admin.users.show.table_header_2') }}</th>
                <td>
                    <a href="mailto:{{ $user->email }}">
                        {{ $user->email }}
                    </a>
                </td>
            </tr>
            <tr>
                <th>Mobile</th>
                <td>{{ $user->mobile_number }}</td>
            </tr>
            <tr>
                <th>Mobile Verified</th>
                <td>
                    @if($user->mobile_verified)
                        <span class="label label-primary"><i class="fa fa-check"></i></span>
                    @else
                        <span class="label label-danger"><i class="fa fa-times"></i></span>
                    @endif
                </td>
            </tr>
            <tr>
                <th>{{ __('views.admin.users.show.table_header_3') }}</th>
                <td>
                   {{-- $user->roles->pluck('name')->implode(',') --}}
                </td>
            </tr>
            
            <tr>
                <th>{{ __('views.admin.users.show.table_header_6') }}</th>
                <td>{{ $user->created_at }} ({{ $user->created_at->diffForHumans() }})</td>
            </tr>

            <tr>
                <th>{{ __('views.admin.users.show.table_header_7') }}</th>
                <td>{{ $user->updated_at }} ({{ $user->updated_at->diffForHumans() }})</td>
            </tr>

            <tr>
                <th>Links</th>
                <td>
                   
                        <a href="">Orders</a> |
                        <a href="">Earnings</a> |
                        <a href="">Bank Details</a>
                        <br/>
                        <a href="">Store</a> |
                        <a href="">Menu Items</a> |
                        <a href="">Ratings</a>
                    
                        <a href="">Orders</a> |
                        <a href="">Delivery Profile</a> |
                        <a href="">Earnings</a> |
                   
                        <a href="">Orders</a>
                    
                </td>
            </tr>
            <tr>
                <td><a class="btn btn-primary" href="{{ URL::previous() }}"> Back</a></td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection