@extends('dashboard.layouts.main')

@section('container')
    <div class="p-4 sm:ml-64">
        <H2 class="h2">WELCOME TO DASHBOARD, {{ auth()->user()->username }}</H2>
    </div>
@endsection
