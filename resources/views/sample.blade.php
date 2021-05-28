<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Compose mail</h2>
  <form action="{{url('sendmail')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Subject</label>
      <input type="text" class="form-control" id="subject" placeholder="Enter Subject" name="subject">
    </div>
    <div class="form-group">
        <label>Message</label>
      <textarea class="form-control" name="body" placeholder="type here"> </textarea>
    </div>
    <button type="submit" class="btn btn-primary">Send</button>
  </form>
</div>

</body>
</html>
