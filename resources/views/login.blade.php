<!DOCTYPE html>
<html lang="en">
<title>login form</title>
<head>
  <style>
    * {
    box-sizing: border-box;
    padding: 200;
    margin: 10px; 
    font-family: Raleway, sans-serif;
}

    body{
        background: linear-gradient(90deg, #5D54A4, #7C78B8);       
     position: relative;
     margin-left: 390px;
     margin-top: 70px;
     padding: 30PX;
     padding-top: 50PX; 
     height: 300px;
     width: 500px;   
     box-shadow: 20px 20px 20px #5C5696;


   }
  
   .form{       
    margin-top: 10px;
    padding: 30px;
    padding-left: 20px;
    padding-top: 40px;
    height: 200px;
    width: 400px;
    background: #F2F2F2;      
    border-radius: 40px 40px 40px 40px;
    align-items: center;
    justify-content: center;
    text-align: center;
   }
</style> 
</head>

<body>
	<div class="form">
<form action="login" method="POST">
  @csrf
  <table>
	<tr>
	 <td>
			User Name:
	 </td>
	 <td>
			<input type="text" name="username"/>
      </td>
	</tr>
	<tr>
	 <td>
			Password:
	 </td>
	 <td>
			<input type="password" name="password"/>
      </td>
	</tr>
	<tr>
	 <td>
		<input type="submit" name="submit" value="login"/>
	 </td>
	 </tr>
	
  </table>
</form>
  @if($errors->any())
  <span style="color: red;">
    <h4>{{$errors->first()}}</h4>
    @endif
</div>
</body>

</html>

