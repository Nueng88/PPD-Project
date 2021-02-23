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

<form action="{{ route('manage_legal.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="unit-select"><strong>@lang('message.legal_category'):</strong></label>
    
    <select class="custom-select" id="legal_cate" name="legal_cate">
        <option selected value="">@lang('message.Choose')</option>
        <option value="Law">@lang('message.Law')</option>
        <option value="Instruction">@lang('message.Instruction')</option>
        <option value="Other">@lang('message.Other')</option>
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
        @foreach ($legals as $legal)
        <tr>
            <td>{{ $legal->id }}</td>
            <td>{{ $legal->title_lao }}</td>
            <td>{{ $legal->title_en }}</td>
            <td>@lang('legal.'.$legal->title_lao)</td>
            <td>
                <a href={{ '/storage/'.$legal->file }} download>
                <button type="button" class="btn btn-danger">Download</button>
            </td>
            @can('product-delete')
            <td>
                @can('product-delete')
                {!! Form::open(['method' => 'DELETE','route' => ['manage_key.destroy', $legal->id],'style'=>'display:inline']) !!}
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