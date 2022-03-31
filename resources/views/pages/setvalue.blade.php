
<!DOCTYPE html>
<html>
<head>

</head>
<body>

<h2>HTML Table</h2>

<table>
  <tr>
    <th>{{$client_name}}</th>
    <th>{{$id}}</th>
  </tr>
  
</table>
<br>
<a class="btn btn-primary" href="{{ url('pay-now/'.$id) }}"  >Pay Now</a>
</body>
</html>