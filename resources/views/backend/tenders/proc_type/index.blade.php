@extends('layouts.app')

@section('tab-title')
@lang('ປະເພດຂອງ ການຈັດຊື້-ຈັດຈ້າງ')
@endsection

@section('title')
@lang('ປະເພດຂອງ ການຈັດຊື້-ຈັດຈ້າງ ດ້ວຍທຶນຂອງລັດ')
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
        <form action="{{ route('manage_proc_type.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
        
             <strong>Lao:</strong><input type="text" class="form-control" name="description_lao"><br>
             <strong>English:</strong><input type="text" class="form-control" name="description_en"><br>
        
             <button class="btn btn-success" type="submit">Submit</button>
            
        </form>
    </div>
</div>


<div class="card shadow">
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th style="width: 5%">#</th>
                    <th>ຊື່ພາສາລາວ</th>
                    <th>ຊື່ພາສາອັງກິດ</th>
                    {{-- <th>@lang('message.Language')</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($pro_types as $item)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $item->description_lao }}</td>
                    <td>{{ $item->description_en }}</td>
                    <td>@lang('proc_type.'.$item->description_lao)</td>
                    @can('product-edit')
                    <td><a class="btn btn-info h5" href="{{ route('manage_proc_type.edit',$item->description_lao) }}"> ແກ້ໄຂ</a></td>
                    @endcan
                    <td>
                        @can('product-delete')
                        {!! Form::open(['method' => 'DELETE','route' => ['manage_proc_type.destroy', $item->description_lao],'style'=>'display:inline']) !!}
                          {!! Form::submit('ລົບ', ['class' => 'btn btn-danger h5']) !!}
                        {!! Form::close() !!}
                        @endcan
                    </td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
