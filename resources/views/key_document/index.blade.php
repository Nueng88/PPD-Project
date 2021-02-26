@extends('layouts.theme')

@section('tab-title')
{{trans('message.Keys Documents')}}
@endsection

@section('title')
{{trans('message.Keys Documents')}}
@endsection

@section('content')

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>{{ trans('message.Title') }}</th>
            <th>{{ trans('message.key_doc_category') }}</th>
            <th>{{ trans('message.Download') }}</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($key_documents as $key_doc)
        <tr>
            <td>{{ ++$i }}</td>
            <td>@lang('key_doc.'.$key_doc->title_lao)</td>
            <td>@lang('key_doc_category.'.$key_doc->key_cate)</td>
            <td>
                <a href='/storage/{{ $key_doc->file }}' download>
                <button type="button" class="btn btn-danger">Download</button>
            </td>
            
        </tr>
        @endforeach
    </tbody>
</table>
    
@endsection