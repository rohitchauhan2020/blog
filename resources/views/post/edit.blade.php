<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.form-inline {  
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}

.form-inline label {
  margin: 5px 10px 5px 0;
}

.form-inline input {
  vertical-align: middle;
  margin: 5px 10px 5px 0;
  padding: 10px;
  background-color: #fff;
  border: 1px solid #ddd;
}

.form-inline button {
  padding: 10px 20px;
  background-color: dodgerblue;
  border: 1px solid #ddd;
  color: white;
  cursor: pointer;
}

.form-inline button:hover {
  background-color: royalblue;
}

@media (max-width: 800px) {
  .form-inline input {
    margin: 10px 0;
  }
  
  .form-inline {
    flex-direction: column;
    align-items: stretch;
  }
}
</style>
</head>
<body>

<h2>Responsive Inline Form</h2>
<p>We have created an inline form that will stay horizontal until the screen width of the browser window is less than 850 pixels: then the form is displayed vertically instead of horizontally.</p>
<p>Resize the browser window to see the effect.</p>

<form class="form-inline" action="{{route('posts.update',['post'=>$post->id])}}" method="POST">
    <input type="hidden" name="_method" value="PUT"> <!-- just use for update -->
    <input type="hidden" name="_token" value="{{csrf_token()}}">
  <label for="email">Author Name:</label>
  <input type="text" id="name" placeholder="Enter name" value="{{$post->name}}" name="name">
  <br />
  <label for="pwd">Content:</label>
  
  <input type="textarea" id="content"  row="10" placeholder="Enter content" value="{{$post->content}}" name="content">
  <button type="submit">Submit</button>

</form>

</body>
</html>
