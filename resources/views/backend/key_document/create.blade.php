@extends('layouts.app')

@section('title')
    ເພີ່ມ ເອກະສານ
@endsection

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
<div class="card shadow">
    <div class="card-body">
        <form action="{{ route('manage_key.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
        
            <label for="unit-select"><strong>@lang('ເລືອກ ປະເພດຮ່າງເອກະສານ'):</strong></label>
            <select class="custom-select" id="key_cate" name="key_cate">
                <option selected="" value="">@lang('ເລືອກ...')</option>
                @foreach ($key_doc_categories as $key_doc_category)
                <option value="{{ $key_doc_category->title_lao }}">{{ $key_doc_category->title_lao }}</option>
                @endforeach
            </select><br>
        
             Lao: <input type="text" class="form-control" name="title_lao">
             English: <input type="text" class="form-control" name="title_en"><br>
        
             <label for="image"><strong>@lang('ອັບໂຫຼດ File'):</strong></label>
             <input type="file" name="file" class="form-control"><br>
        
             <button class="btn btn-success" type="submit">Submit</button>
            
        </form>
    </div>
</div>


    
@endsection