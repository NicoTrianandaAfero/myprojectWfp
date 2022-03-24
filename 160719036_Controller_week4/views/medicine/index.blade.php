<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>List Medicines</h2>
  <p>The .table-bordered class adds borders to a table:</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Form</th>
        <th>restriction_formula</th>
        <th>Price</th>
        <th>Description</th>
        <th>category_ID</th>
        <th>faskes1</th>
        <th>faskes2</th>
        <th>faskes3</th>
        <th>created_at</th>
        <th>updatet_at</th>
      </tr>
    </thead>
    <tbody>
        @foreach($listdata as $li);
      <tr>
        <td>{{ $li->generic_name }}</td>
        <td>{{ $li->form }}</td>
        <td>{{ $li->restriction_formula }}</td>
        <td>{{ $li->price }}</td>
        <td>{{ $li->description }}</td>
        <td>{{ $li->category_id }}</td>
        <td>{{ $li->faskes1 }}</td>
        <td>{{ $li->faskes2 }}</td>
        <td>{{ $li->fakses3 }}</td>
        <td>{{ $li->created_at }}</td>
        <td>{{ $li->updated_at }}</td>
      </tr>
      @endforeach
  
    </tbody>
  </table>
</div>

</body>
</html>
