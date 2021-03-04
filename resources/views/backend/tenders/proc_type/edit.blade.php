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

@foreach ($procument_type as $item)
<form action="{{ route('manage_proc_type.update',$item->description_lao) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="card shadow">
        <div class="card-body">          
                            
                 <strong>Lao:</strong><input type="text" class="form-control" name="description_lao" value="{{ $item->description_lao }}"><br>

                 <strong>English:</strong><input type="text" class="form-control" name="description_en" value="{{ $item->description_en }}"><br>
            
            
                 <button class="btn btn-success" type="submit">Submit</button>

        </div>
    </div>
</form>     
@endforeach
    

@endsection