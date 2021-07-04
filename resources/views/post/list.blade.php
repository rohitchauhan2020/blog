<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>

<h1>Posts List</h1>
<a href="{{route('posts.create')}}">Create Post</a>

<?php // dd($post);?>

<table>
<tr>
    <th>Name</th>
    <th>Content</th>
    <th>Action</th>
  </tr>
@foreach($post as $key => $item)
  <tr>
    <td>{{$item->name}}</td>
    <td>{{$item->content}}</td>
    <td><a href="{{route('posts.edit',['post'=>$item->id])}}">Edit</a> | <a href="{{route('posts.delete',['id'=>$item->id])}}">Delete</a></td>
  </tr>
@endforeach  
</table>

</body>
</html>
