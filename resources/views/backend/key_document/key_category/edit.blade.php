@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>ແກ້ໄຂ ໝວດໝູ່ ເອກະສານທີ່ກ່ຽວຂ້ອງ</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-danger" href="{{ route('manage_key_categories.index') }}"> <b> ກັບຄືນ</b></a>
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

    @foreach ($key_doc_categories as $key_doc)
    <form action="{{ route('manage_key_categories.update',$key_doc->title_lao) }}" method="POST">
    	@csrf
        @method('PUT')

<div class="card shadow">
    <div class="card-body">
        <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>lao:</strong>
		            <input type="text" name="title_lao"  class="form-control" placeholder="Name"  value="{{ $key_doc->title_lao }}">
		        </div>
		    </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>English:</strong>
		            <input type="text" name="title_en"  class="form-control" placeholder="Name" value="{{ $key_doc->title_en }}">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		      <button type="submit" class="btn btn-primary"><b> ບັນທຶກ</b></button>
		    </div>
		</div>
    </div>
</div>
         
    </form>     
    @endforeach
    

@endsection