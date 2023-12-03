@extends('backend.master')
@section('title', $admin->name)
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ $admin->name }}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <div class="text-center">
                    @if (Auth::guard('admin')->user()->photo)
                        <img class="img-profile rounded-circle" src="{{ asset(Auth::guard('admin')->user()->photo) }}"
                            width="30" height="30">
                    @else
                        <h3><i class="fa-solid fa-user"></i></h3>
                    @endif
                    <h3>{{ $admin->name }}</h3>
                    <p>{{ $admin->email }}</p>

                </div>





            </div>

            @if (Auth::guard('admin')->user()->name != $admin->name)
                <button type="button" class="btn btn-outline-danger btn-sm w-25 my-4" data-toggle="modal"
                    data-target="#deleteUser">
                    Remove Admin
                </button>
                @else 
                <span class="w-25 badge bg-success text-white">Current Admin</span>
            @endif




            <div class="modal fade" id="deleteUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Remove Admin Confirmation</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Do you wanna remove admin <b>{{ $admin->name }}</b> ?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
                            <form action="{{ asset('admin/dashboard/remove-admin/' . $admin->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-primary">Yes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>


@endsection
