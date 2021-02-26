@extends('layouts.app')

@section('tab-title')
@lang('ຮ່າງເອກະສານ')
@endsection

@section('title')
@lang('ເພີ່ມຮ່າງເອກະສານ')
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
        <form action="{{ route('manage_legal.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
        
            <label for="unit-select"><strong>ເລືອກປະເພດຮ່າງເອກະສານ:</strong></label>
            
            <select class="custom-select" id="legal_cate" name="legal_cate">
                <option selected value="">@lang('Choose...')</option>
                <option value="Law">@lang('message.Law')</option>
                <option value="Instruction">@lang('message.Instruction')</option>
                <option value="Other">@lang('message.Other')</option>
            </select><br>
        
             <strong>Lao:</strong><input type="text" class="form-control" name="title_lao">
             <strong>English:</strong><input type="text" class="form-control" name="title_en"><br>
        
             <label for="image"><strong>@lang('ອັບໂຫຼດ File'):</strong></label>
             <input class="form-control" type="file" name="file"><br>
        
             <button class="btn btn-success" type="submit">Submit</button>
            
        </form>
    </div>
</div>
    
@endsection