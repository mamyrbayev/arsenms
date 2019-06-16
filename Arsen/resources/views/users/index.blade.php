@extends('layouts.admin')

@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Users</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="/">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Users</span></li>
                </ol>

                <a class="sidebar-right-toggle"><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>

        <!-- start: page -->
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title">Users list</h2>
            </header>
            <div class="panel-body">
                <table class="table table-bordered table-striped mb-none" id="datatable-default">
                    <thead>
                    <tr>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Balance</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>


                    @foreach($users as $user)
                    <tr>
                        <td>{{$user -> first_name}}</td>
                        <td>{{$user -> last_name}}</td>
                        <td>{{$user -> email}}</td>
                        <td>{{$user -> role}}</td>
                        <td>{{$user -> balance}}</td>
                        <td>
                            @if($user->role == 'Student' || $user->role == 'Organization')
                            <a class="popup-with-form btn btn-default" href="#demo-form">Edit</a>

                            <form id="demo-form" action="{{route('user.edit', ['id' => $user->id])}}" method="post" class="white-popup-block mfp-hide form-horizontal">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h3>Edit user</h3>
                                    </div>
                                </div>

                                <div class="form-group mt-lg">
                                    <label class="col-sm-3 control-label">First name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="first_name" class="form-control" placeholder="{{$user -> first_name}}" required/>
                                    </div>
                                </div>
                                <div class="form-group mt-lg">
                                    <label class="col-sm-3 control-label">Last name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="last_name" class="form-control" placeholder="{{$user -> last_name}}" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" name="email" class="form-control" placeholder="{{$user -> email}}" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Role</label>
                                    <div class="col-sm-9">
                                        <select data-plugin-selectTwo name="role" class="form-control populate" required>
                                            <option>Student</option>
                                            <option>Organization</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-lg">
                                    <div class="col-sm-9 col-sm-offset-3">
                                        <button class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </div>
                                </div>

                            </form>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>
        <!-- end: page -->
    </section>

@endsection
