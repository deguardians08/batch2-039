@extends("template")
@section("content")

<table class="table table-bordered">
  <div class="text-left">
  <a href="{{ url('form')}}" class="btn btn-primary">Tambah Data</a>
  </div>
  <thead>
  <tr>
    <th>Kolom Header</th>
    <th>Kolom Header</th>
    <th>Kolom Header</th>
    <th>Kolom Header</th>
    <th>Kolom Header</th>
  </tr>
</thead>
  <tbody>
  <tr>
    <th>Data</th>
    <th>Data</th>
    <th>Data</th>
    <th>Data</th>
    <th>Data</th>
  </tr>
</tbody>
</table>   
@endsection