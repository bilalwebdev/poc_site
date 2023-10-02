@extends('layouts.master')
@section('title')
    {{ __('Apexcharts') }}
@endsection
@section('content')
    <x-page-title title="Apexcharts" pagetitle="Charts" />

    <livewire:charts-apex />
@endsection
