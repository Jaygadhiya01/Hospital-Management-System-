<!DOCTYPE html>  
<html>  
<head>  
    <title>
        Registration_form
    </title>
<style>
    * {
    box-sizing: border-box;
    margin: 0;
    padding: 0; 
    font-family: Raleway, sans-serif;
}

    body{
        background: linear-gradient(90deg, #5D54A4, #7C78B8);       
    position: relative;
     margin-left: 450px;
     padding: 30PX;
     padding-top: 30PX; 
    height: 550px;
    width: 360px;   
    box-shadow: 0px 0px 24px #5C5696;


   }
   h2{
    padding: 30px;
    text-align: center;
    text-justify: none;
    text-decoration-color: gray;
   }

   .form{       

    height: 500px;
    width: 300px;
    background: #F2F2F2;   
    right: 300px;   
    border-radius: 40px 40px 40px 40px;
    align-items: center;
    justify-content: center;
    text-align: center;
   }
.error {
     color: #FF0001;

 }  
</style>  
</head>  
<body>   

 <div class="form"> 
<h2>Registration Form</h2>  
<br><br>  

<form method="post" action="login" >    
    @csrf

    Name:   
    <input type="text" name="name">  
 
    <br><br>  
    E-mail:   
    <input type="text" name="email">  
   
    <br><br> 
    password:   
    <input type="password" name="password">  
  
    <br><br>  	
    Mobile No:   
    <input type="text" name="mobileno">  
    <br><br>  
    Agree to Terms of Service:  
    <input type="checkbox" name="agree">  
    <br><br>  
    <button type="submit">ok</button>                          
    <br><br>                             
</form> 
  @if($errors->any())
  <span style="color: red;">
    <h4>{{$errors->first()}}</h4>
    @endif
      
  </span> 

  </div>
</body>  
</html>  