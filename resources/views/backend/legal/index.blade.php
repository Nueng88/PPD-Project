@extends('layouts.app')

@section('tab-title')
@lang('ຮ່າງເອກະສານ')
@endsection

@section('title')
@lang('ສະແດງຮ່າງເອກະສານ')
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
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th style="width: 30%">ຊື່ພາສາລາວ</th>
                    <th style="width: 30%">ຊື່ພາສາອັງກິດ</th>
                    <th style="width: 25%">ໝວດໝູ່</th>
                    {{-- <th>@lang('message.Language')</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($legals as $legal)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $legal->title_lao }}</td>
                    <td>{{ $legal->title_en }}</td>
                    <td>@lang('message.'.$legal->legal_cate)</td>
                    {{-- <td>@lang('legal.'.$legal->title_lao)</td> --}}
                    {{-- <td>
                        <a href={{ '/storage/'.$legal->file }} download>
                        <button type="button" class="btn btn-danger">Download</button>
                    </td> --}}
                    @can('product-edit')
                    <td><a class="btn btn-info h5" href="{{ route('manage_legal.edit',$legal->title_lao) }}"> ແກ້ໄຂ</a></td>
                    @endcan
                    <td>
                        @can('product-delete')
                        {!! Form::open(['method' => 'DELETE','route' => ['manage_legal.destroy', $legal->title_lao],'style'=>'display:inline']) !!}
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
