@extends('layouts.app')

@section('tab-title')
ເອກະສານກະສານທີ່ກ່ຽວຂ້ອງ
@endsection

@section('title')
    ສະແດງ ເອກະສານທີ່ກ່ຽວຂ້ອງ
@endsection

@section('content')

<div class="card shadow">
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th style="width: 30%">Lao</th>
                    <th style="width: 30%">English</th>
                    <th style="width: 25%">ໝວດໝູ່ ເອກະສານ</th>
                    {{-- <th>@lang('message.Language')</th> --}}
                    {{-- <th> ...</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($key_documents as $key_docs)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $key_docs->title_lao }}</td>
                    <td>{{ $key_docs->title_en }}</td>
                    <td>{{ $key_docs->key_cate }}</td>
                    @can('product-edit')
                    <td><a class="btn btn-info h5" href="{{ route('manage_key.edit',$key_docs->title_lao) }}"> ແກ້ໄຂ</a></td>
                    @endcan
                    <td>
                        {{-- <a class="btn btn-info h5" href="{{ route('manage_key.edit',$key_docs->title_lao) }}"> ແກ້ໄຂ</a> --}}
                        @can('product-delete')
                        {!! Form::open(['method' => 'DELETE','route' => ['manage_key.destroy', $key_docs->title_lao],'style'=>'display:inline']) !!}
                          {!! Form::submit('ລົບ', ['class' => 'btn btn-danger h5']) !!}
                        {!! Form::close() !!}
                        @endcan
                    </td>
                    {{-- <td>
                        <a href={{ '/storage/'.$key_docs->file }} download>
                        <button type="button" class="btn btn-danger">Download</button>
                    </td>  --}}
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

    
@endsection