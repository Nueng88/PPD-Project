@extends('layouts.app')

@section('content')
@if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> ກະລຸນາປ້ອນຂໍ້ມູນໃຫ້ຖືກຕ້ອງ<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif

<form action="{{ route('manage_key.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="unit-select"><strong>@lang('message.Key_category'):</strong></label>
    <select class="custom-select" id="key_cate" name="key_cate">
        <option selected="" value="">@lang('message.Key_category')</option>
        @foreach ($key_doc_categories as $key_doc_category)
        <option value="{{ $key_doc_category->title_lao }}">{{ $key_doc_category->title_lao }}</option>
        @endforeach
    </select><br>

     Lao: <input type="text" class="form-control" name="title_lao">
     English: <input type="text" class="form-control" name="title_en"><br>

     <label for="image"><strong>@lang('message.choose file'):</strong></label>
     <input type="file" name="file" class="form-control"><br>

     <button class="btn btn-success" type="submit">Submit</button>
    
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
        @foreach ($key_documents as $key_docs)
        <tr>
            <td>{{ $key_docs->id }}</td>
            <td>{{ $key_docs->title_lao }}</td>
            <td>{{ $key_docs->title_en }}</td>
            <td>@lang('key_doc.'.$key_docs->title_lao)</td>
            <td>
                <a href={{ '/storage/'.$key_docs->file }} download>
                <button type="button" class="btn btn-danger">Download</button>
            </td>
            @can('product-delete')
            <td>
                @can('product-delete')
                {!! Form::open(['method' => 'DELETE','route' => ['manage_key.destroy', $key_docs->id],'style'=>'display:inline']) !!}
                  {!! Form::submit('ລົບ', ['class' => 'dropdown-item h5']) !!}
                {!! Form::close() !!}
                @endcan
            </td>
            @endcan
            
        </tr>
        @endforeach
    </tbody>
</table>
    
@endsection