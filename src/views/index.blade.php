<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <form class="" action="{{route('send-contact')}}" method="post">
          @csrf
          <label for="">Username:</label><br>
          <input type="text" name="username" value="">
          <br><br>
          <label for="">Email:</label><br>
          <input type="text" name="email" value="">
          <br><br>
          <label for="">Message:</label><br>
          <textarea name="message" rows="8" cols="80"></textarea>
          <br><br>
          <input type="submit" value="Send">
      </form>
  </body>
</html>
