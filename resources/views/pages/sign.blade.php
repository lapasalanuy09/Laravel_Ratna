@extends('pages/Home')

@section('content')

<div class="wrapper"> 
    <div class="signin-container">
        <form class="signin-form">
          <h2>Sign In</h2>
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
          <input type="submit" value="Sign In">
        </form>
      </div>
      
</body>
</html>

@endsection