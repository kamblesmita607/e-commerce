
@extends('master')
@section('pass_data_main')
    
    <span class="float-right">Users &nbsp; <a class="btn btn-primary " href="{{ route('admin.users.create') }}"><i class="fa fa-plus-circle"></i>Add</a></span>
        <table class="table table-bordered" style="">
            <thead>
            <tr>
                <th>@sortablelink('id')</th>
                <th>@sortablelink('name')</th>
                <th>@sortablelink('email')</th>
                <th>@sortablelink('created_at')</th>
                <th>Actions</th>

            </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
           
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at  }}</td>
                    <td>
                        
                        <a href="{{ route('admin.users.show', [$user->id]) }}" data-toggle="tooltip" data-placement="top">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a href="{{ route('admin.users.edit', [$user->id]) }}" data-toggle="tooltip" data-placement="top">
                            <i class="uil uil-pen font-size-18"></i>
                        </a>
                       
                        <a href="{{ route('admin.users.destroy', [$user->id]) }}" data-toggle="tooltip" data-placement="top">
                        <i class="fa fa-trash"></i>
                        </a>
                       
                    </td>
                    
                </tr>
                 @endforeach
           
            </tbody>
        </table>
         
         <div class="float-right">
            {{--$users->links()--}}
             {!! $users->appends(\Request::except('page'))->render() !!}
        </div>
 @endsection



