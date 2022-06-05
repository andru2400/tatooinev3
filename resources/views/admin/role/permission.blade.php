@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.role.actions.index'))

@section('body')

    <role-permission-listing
    >

    </role-permission-listing>

@endsection
