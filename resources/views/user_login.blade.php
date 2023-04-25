<html><head>
    <style>
    body{
        display:flex; flex-direction:column; justify-content:center;
  min-height:100vh;
        
    }
    
    * {box-sizing: border-box}

/* style the container */
.container {
  position: relative;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px 0 30px 0;
}

/* style inputs and link buttons */
input,
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
}

input:hover,
.btn:hover {
  opacity: 1;
}


/* style the submit button */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}







/* bottom container */
.bottom-container {
  text-align: center;
  background-color: #666;
  border-radius: 0px 0px 4px 4px;
}



</style>
</head>

<body>
<div class="container">
  @if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif
  <form action="{{ url('/user/account/login' )}}" method="POST">
   
    @csrf

        <input type="text" name="username" placeholder="Username" 
         class="@error('username') is-invalid @enderror" required>
      
        <input type="password" name="password" placeholder="Password"   
        class="@error('password') is-invalid @enderror" required>
        
        <input type="submit" value="Login">


   
  </form>
</div>

<div class="bottom-container">
      <a href={{  url('/user/create' ) }} style="color:white" class="btn">Sign up</a>
    </div>
  </div>
</div> 
</body>
</html>
