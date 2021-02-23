@extends('layouts.theme')

@section('link')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css" target="_blank" >
@endsection

@section('name')
    {{trans('message.Agencies')}}
@endsection
@section('content')
<table id="example" style="width:100%">
  <thead>
      <tr>
          <th style="width: 20px">#</th>
          <th class="text-center">Title</th>
      </tr>
  </thead>
  <tbody>

    <tr><!--ກະຊວງ ສຶກສາທິການ ແລະ ກິລາ-->
      <td style="width: 2px;">1</td>
      <td>
        <a href="http://www.moes.edu.la/" class="card my-1" target="_blank" >
          <div class="card-body">
            {{ trans('message.Ministry of Education & Sports') }}
          </div>
        </a>
      </td>
    </tr>

    <tr> <!--ກະຊວງ ຍຸດຕິທຳ-->
      <td style="width: 2px;">2</td>
      <td>
        <a href="http://www.moj.gov.la/" class="card my-1" target="_blank">
          <div class="card-body">
            {{ trans('message.Ministry of Justice') }}
          </div>
        </a>
      </td>
    </tr>

    <tr> <!--ກະຊວງ ສາທາລະນະສຸກ-->
      <td style="width: 2px;">3</td>
      <td>
        <a href="https://moh.gov.la/" class="card my-1" target="_blank">
          <div class="card-body">
            {{ trans('message.Ministry of Health') }}
          </div>
        </a>
      </td>
    </tr>

    <tr> <!--ກະຊວງ ກະສິກຳ ແລະ ປ່າໄມ້-->
      <td style="width: 2px;">4</td>
      <td>
        <a href="https://www.maf.gov.la/" class="card my-1" target="_blank">
          <div class="card-body">
            {{ trans('message.Ministry of Agriculture & Forest') }}
          </div>
        </a>
      </td>
    </tr>

    <tr> <!--ກະຊວງ ແຜນການ ແລະ ການລົງທຶນ -->
      <td style="width: 2px;">5</td>
      <td>
        <a href="http://investlaos.gov.la/lo/about-us/ministry-of-planning-and-investment-mpi/" class="card my-1" target="_blank">
          <div class="card-body">
            {{ trans('message.Ministry of Planning & Investment') }}
          </div>
        </a>
      </td>
    </tr>

    <tr> <!--ກະຊວງ ພະລັງງານ ແລະ ບໍ່ແຮ່ -->
      <td style="width: 2px;">6</td>
      <td>
        <a href="http://www.mem.gov.la/" class="card my-1" target="_blank">
          <div class="card-body">
            {{ trans('message.Ministry of Energy & Mines') }}
          </div>
        </a>
      </td>
    </tr>

    <tr> <!--ກະຊວງ ອຸດສາຫະກຳ ແລະ ການຄ້າ-->
      <td style="width: 2px;">7</td>
      <td>
        <a href="http://www.moic.gov.la/" class="card my-1" target="_blank">
          <div class="card-body">
            {{ trans('message.Ministry of Industry & Commerce') }}
          </div>
        </a>
      </td>
    </tr>

    <tr> <!--ກະຊວງ ແຮງງານ ແລະ ສະຫວັດດີການສັງຄົມ -->
      <td style="width: 2px;">8</td>
      <td>
        <a href="http://www.molsw.gov.la/" class="card my-1" target="_blank">
          <div class="card-body">
            {{ trans('message.Ministry of Labor & Social Welfare') }}
          </div>
        </a>
      </td>
    </tr>

    <tr> <!--ກະຊວງ ວິທະຍາສາດ ແລະ ເຕັກໂນໂລຊີ -->
      <td style="width: 2px;">9</td>
      <td>
        <a href="https://www.most.gov.la/" class="card my-1" target="_blank">
          <div class="card-body">
            {{ trans('message.Ministry of Science & Technology') }}
          </div>
        </a>
      </td>
    </tr>

    <tr> <!--ກະຊວງ ຊັບພະຍາກອນທຳມະຊາດ ແລະ ສິ່ງແວດລ້ອມ -->
      <td style="width: 2px;">10</td>
      <td>
        <a href="http://www.monre.gov.la/home/" class="card my-1" target="_blank">
          <div class="card-body">
            {{ trans('message.Ministry of Natural Resource & Environment') }}
          </div>
        </a>
      </td>
    </tr>

    <tr> <!--ກະຊວງ ປ້ອງກັນຄວາມສະງົບ -->
      <td style="width: 2px;">11</td>
      <td>
        <a href="http://laosecurity.gov.la/test/index.php?lang=en" class="card my-1" target="_blank">
          <div class="card-body">
            {{ trans('message.Ministry of Public Security') }}
          </div>
        </a>
      </td>
    </tr>

    <tr> <!--ກະຊວງ ຖະແຫຼງຂ່າວ, ວັດທະນະທຳ ແລະ ທ່ອງທ່ຽວ # -->
      <td style="width: 2px;">12</td>
      <td>
        <a href="#" class="card my-1">
          <div class="card-body">
            {{ trans('message.Ministry of Information, Culture and Tourism') }}
          </div>
        </a>
      </td>
    </tr>

    <tr> <!--Goverment Inspection Authority # -->
      <td style="width: 2px;">13</td>
      <td>
        <a href="#" class="card my-1">
          <div class="card-body">
            {{ trans('message.Goverment Inspection Authority') }}
            {{-- Goverment Inspection Authority --}}
          </div>
        </a>
      </td>
    </tr>

    <tr> <!-- ກະຊວງ ໂຍທາທິການ ແລະ ຂົນສົ່ງ -->
      <td style="width: 2px;">13</td>
      <td>
        <a href="http://www.mpwt.gov.la/en/" class="card my-1">
          <div class="card-body">
            {{ trans('message.Ministry of Interior') }}
          </div>
        </a>
      </td>
    </tr>

    <tr> <!-- ກະຊວງ ພາຍໃນ -->
      <td style="width: 2px;">14</td>
      <td>
        <a href="http://www.moha.gov.la/" class="card my-1">
          <div class="card-body">
            {{ trans('message.Ministry of Interior') }}
          </div>
        </a>
      </td>
    </tr>

    <tr> <!-- ກະຊວງ ການຕ່າງປະເທດ -->
      <td style="width: 2px;">15</td>
      <td>
        <a href="http://www.mofa.gov.la/index.php/lo/" class="card my-1">
          <div class="card-body">
            {{ trans('message.Ministry of Foreign Affairs') }}
          </div>
        </a>
      </td>
    </tr>

    <tr> <!-- ກະຊວງ ປ້ອງກັນປະເທດ -->
      <td style="width: 2px;">16</td>
      <td>
        <a href="http://www.mod.gov.la/" class="card my-1">
          <div class="card-body">
            {{ trans('message.Ministry of National Defance') }}
          </div>
        </a>
      </td>
    </tr>
  </tbody>
</table>
@endsection

@section('script')
  <script>
      $(document).ready(function() {
          $('#example').DataTable();
      } );
  </script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
  @show
