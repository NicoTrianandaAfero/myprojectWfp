<!DOCTYPE html>
<html lang="en">
<head>
  <title>Show Product</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Show Medicine</h2>
  <p>The .table-hover class adds borders to a table:</p>    
  @if ($message)        
  <table class="table table-hover">
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
        
      <tr>
        <td>{{ $message->generic_name }}</td>
        <td>{{ $message->form }}</td>
        <td>{{ $message->restriction_formula }}</td>
        <td>{{ $message->price }}</td>
        <td>{{ $message->description }}</td>
        <td>{{ $message->category_id }}</td>
        <td>{{ $message->faskes1 }}</td>
        <td>{{ $message->faskes2 }}</td>
        <td>{{ $message->fakses3 }}</td>
        <td>{{ $message->created_at }}</td>
        <td>{{ $message->updated_at }}</td>
      </tr>
    
    </tbody>
  </table>
  @else 
    <h2> Tidak ada kata </h2>
  @endif 
</div>

</body>
</html>
