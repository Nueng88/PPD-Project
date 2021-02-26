@extends('layouts.app')

@section('tab-title')
ເອກະສານກະສານທີ່ກ່ຽວຂ້ອງ
@endsection


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>ແກ້ໄຂ ເອກະສານທີ່ກ່ຽວຂ້ອງ</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-danger" href="{{ route('manage_key.index') }}"> <b> ກັບຄືນ</b></a>
            </div>
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> ກະລຸນາປ້ອນຂໍ້ມູນລຸ່ມນີ້ໃຫ້ຄົບ.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @foreach ($key_documents as $key_docs)
    <form action="{{ route('manage_key.update',$key_docs->title_lao) }}" method="POST" enctype="multipart/form-data">
    	@csrf
        @method('PUT')

        <div class="card shadow">
            <div class="card-body">
                <label for="unit-select"><strong>@lang('ເລືອກ ປະເພດຮ່າງເອກະສານ'):</strong></label>
            <select class="custom-select" id="key_cate" name="key_cate">
                <option selected="" value="{{ $key_docs->key_cate }}">{{ $key_docs->key_cate }}</option>
                @foreach ($key_doc_categories as $key_doc_category)
                <option value="{{ $key_doc_category->title_lao }}">{{ $key_doc_category->title_lao }}</option>
                @endforeach
            </select><br>
        
             Lao: <input type="text" class="form-control" name="title_lao" value="{{ $key_docs->title_lao }}">
             English: <input type="text" class="form-control" name="title_en" value="{{ $key_docs->title_en }}"><br>
        
             <label for="image"><strong>@lang('File'):</strong>{{ $key_docs->file }}</label><br>
             {{-- <input type="file" name="file" class="form-control"><br> --}}
        
             <button class="btn btn-success" type="submit">Submit</button>
            </div>
        </div>
         
    </form>     
    @endforeach
    

@endsection