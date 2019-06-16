@extends('layouts.admin')

@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Transactions</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="/">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Transactions</span></li>
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

                <h2 class="panel-title">Transactions list</h2>
            </header>
            <div class="panel-body">
                <table class="table table-bordered table-striped mb-none" id="datatable-default">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Sender id</th>
                        <th>Receiver id</th>
                        <th>Amount</th>
                        <th>Type</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>


                    @foreach($deals as $deal)
                        <tr>
                            <td>{{$deal->id}}</td>
                            <td>
                                @foreach($users as $user)
                                    @if($deal->sender_id == $user->id)
                                        {{$user->first_name}} {{$user->last_name}}
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($users as $user)
                                    @if($deal->receiver_id == $user->id)
                                        {{$user->first_name}} {{$user->last_name}}
                                    @endif
                                @endforeach
                            </td>
                            <td>{{$deal->amount}}</td>
                            <td>{{$deal->type}}</td>
                            <td>{{$deal->created_at}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>
        <!-- end: page -->
    </section>

@endsection
