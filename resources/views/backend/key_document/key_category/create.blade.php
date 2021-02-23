@extends('layouts.app')

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

<form action="{{ route('manage_key_categories.store') }}" method="POST">
    @csrf


     Lao: <input type="text" class="form-group" name="title_lao">
     English: <input type="text" class="form-group" name="title_en">

     <button type="submit">Submit</button>
    
</form>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>title_lao</th>
            <th>title_en</th>
            <th>@lang('message.Language')</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($key_doc_categories as $key_doc)
        <tr>
            <td>{{ $key_doc->id }}</td>
            <td>{{ $key_doc->title_lao }}</td>
            <td>{{ $key_doc->title_en }}</td>
            <td>@lang('key_doc_category.'.$key_doc->title_lao)</td>
            @can('product-edit')
            <td><a class="btn h5" href="{{ route('manage_key_categories.edit',$key_doc->title_lao) }}"> ແກ້ໄຂ</a></td>
            @endcan
            @can('product-delete')
            <td>
            {!! Form::open(['method' => 'DELETE','route' => ['manage_key_categories.destroy', $key_doc->title_lao],'style'=>'display:inline']) !!}
                {!! Form::submit('ລົບ', ['class' => 'h5']) !!}
            {!! Form::close() !!}
            </td>
            @endcan
            
        </tr>
        @endforeach
    </tbody>
</table>
    
@endsection