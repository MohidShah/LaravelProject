<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
      @section('title', 'View Record ')
      <script>
         function confirmDelete(id) {
             if (confirm('Are you sure you want to delete this record?')) {
                 window.location.href = '/delete/'+id;
             }
         }
     </script>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

   </head>
   
   <body>
   @extends('commonlayouts.header')
    
    @section('content')
<div class="container mt-3">
  <h2>View and Edit Details</h2>
  @if(session('message'))
  <div class="alert alert-success">{{session('message')}}</div>
  @endif
  @if(session('message'))
  <div class="alert alert-success">{{session('updatemessage')}}</div>
  @endif
  <table class="table table-bordered">        
  <table class="table table-dark table-hover">
    <thead>
      <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Edit</th>
            <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
         <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->subject }}</td>
            <td>{{ $user->message }}</td>
            <td><a href = 'edit/{{ $user->id }}'><img src="{{ asset('img/edit.png') }}" class="img-thumbnail" height="40px" width="40px"></a></td>
            <td><a href="delete/{{ $user->id }}" onclick="confirmDelete(id )"><img src="{{ asset('img/delete.png') }}" class="img-thumbnail" height="40px" width="40px"></a></td>

           
         </tr>
         @endforeach
    </tbody>
  </table>
</div>
@endsection
   </body>
</html>