@extends('layouts.app')

@section('tab-title')
ເອກະສານກະສານທີ່ກ່ຽວຂ້ອງ
@endsection

@section('title')
ເພີ່ມ ໝວດໝູ່ ເອກະສານ
@endsection

@section('content')
@if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif
<div class="card shadow">
    <div class="card-body">
        <form action="{{ route('manage_key_categories.store') }}" method="POST">
            @csrf
        
        
             Lao: <input type="text" class="form-control" name="title_lao">
             English: <input type="text" class="form-control" name="title_en"><br>
        
             <button class="btn btn-success mb-3" type="submit">Submit</button>
            
        </form>
    </div>
</div>

<div class="card shadow">
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Lao</th>
                    <th>English</th>
                    {{-- <th>@lang('message.Language')</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($key_doc_categories as $key_doc)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $key_doc->title_lao }}</td>
                    <td>{{ $key_doc->title_en }}</td>
                    {{-- <td>@lang('key_doc_category.'.$key_doc->title_lao)</td> --}}
                    @can('product-edit')
                    <td><a class="btn btn-info h5" href="{{ route('manage_key_categories.edit',$key_doc->title_lao) }}"> ແກ້ໄຂ</a></td>
                    @endcan
                    @can('product-delete')
                    <td>
                    {!! Form::open(['method' => 'DELETE','route' => ['manage_key_categories.destroy', $key_doc->title_lao],'style'=>'display:inline']) !!}
                        {!! Form::submit('ລົບ', ['class' => 'btn btn-danger h5']) !!}
                    {!! Form::close() !!}
                    </td>
                    @endcan
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

    
@endsection