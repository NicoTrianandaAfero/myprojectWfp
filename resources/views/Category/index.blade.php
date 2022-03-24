@extends('layout.conquer2')

@section('title')
      daftar kategori obat
@endsection

@section('content')
  <h2>List Medicines</h2>
  <p>Berikut merupakan data-data obat:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>name</th>
        <th>description</th>
        <th>created</th>
        <th>updated</th>     
      </tr>
    </thead>
    <tbody>
        @foreach($datas as $li);
      <tr>
        <td>{{ $li->name }}</td>
        <td>{{ $li->description }}</td>
        <td>{{ $li->created_at }}</td>
        <td>{{ $li->updated_at }}</td>
        
      </tr>
      @endforeach
  
    </tbody>
  </table>
  @endsection


 

 
