@extends('layouts.theme')

@section('tab-title')
{{trans('message.Legal')}}
@endsection

@section('title')
{{trans('message.Legal')}}
@endsection

@section('content')

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>@lang('message.Title')</th>
            <th>@lang('message.legal_cate')</th>
            <th>@lang('message.Download')</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($legals as $legal)
        <tr>
            <td>{{ ++$i }}</td>
            <td>@lang('legal.'.$legal->title_lao)</td>
            <td>@lang('message.'.$legal->legal_cate)</td>
            <td>
                <a href='/storage/{{ $legal->file }}' download>
                <button type="button" class="btn btn-danger">Download</button>
            </td>            
        </tr>
        @endforeach
    </tbody>
</table>
    
@endsection