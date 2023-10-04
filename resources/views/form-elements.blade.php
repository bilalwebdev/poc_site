@extends('layouts.master')
@section('title')
    {{ __('Basic Elements') }}
@endsection
@section('css')
    <!-- alertifyjs Css -->
    <link href="{{ URL::asset('build/libs/alertifyjs/build/css/alertify.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- alertifyjs default themes  Css -->
    <link href="{{ URL::asset('build/libs/alertifyjs/build/css/themes/default.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <x-page-title title="Basic Elements" pagetitle="Components" />

    <livewire:form-element />
@endsection
@section('scripts')
    <script src="{{ URL::asset('build/libs/alertifyjs/build/alertify.min.js') }}"></script>
@endsection
