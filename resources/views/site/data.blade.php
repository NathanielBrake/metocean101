@extends('layouts.site',['header' => 'transparent-header'])
@section('title', __('general.home_page_title'))
@section('description', __('general.home_page_description'))
@section('keywords', __('general.home_page_keywords'))

@section('content')
    <oceandata></oceandata>
@endsection
