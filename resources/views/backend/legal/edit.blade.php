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

@foreach ($legals as $legal)
<form action="{{ route('manage_legal.update',$legal->title_lao) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="card shadow">
        <div class="card-body">          
                <label for="unit-select"><strong>ເລືອກປະເພດຮ່າງເອກະສານ:</strong></label>
                
                <select class="custom-select" id="legal_cate" name="legal_cate">
                    <option selected value="{{ $legal->title_en }}">@lang('message.'.$legal->legal_cate)</option>
                    <option value="Law">@lang('message.Law')</option>
                    <option value="Instruction">@lang('message.Instruction')</option>
                    <option value="Other">@lang('message.Other')</option>
                </select><br>
            
                 <strong>Lao:</strong><input type="text" class="form-control" name="title_lao" value="{{ $legal->title_lao }}">
                 <strong>English:</strong><input type="text" class="form-control" name="title_en" value="{{ $legal->title_en }}"><br>
            
                 <strong>@lang('File'):</strong>
                 <label name="file">{{$legal->file}}</label><br>
                 <input type="hidden" name="file" id="file" value="{{$legal->file}}">
                 {{-- <input class="form-control" type="file" name="file"><br> --}}
            
                 <button class="btn btn-success" type="submit">Submit</button>

        </div>
    </div>
</form>     
@endforeach
    

@endsection