<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<style> 

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}

body{
  background-color: #F2F4FE;
}

.wrapper{
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  display: flex;
}

.registration_form{
  border-radius: 5px;
  width: 400px;
  background: #FFFFFF;
  padding: 25px;
}

.registration_form .title{
  color: black;
  
  
  text-align: center;
  font-size: 25px;
  text-transform: uppercase;
  margin-top: -25px;
  margin-left:-25px;
  margin-right:-25px;
}

.form_wrap{
  margin-top: 35px;
}

.form_wrap .input_wrap{
  margin-bottom: 15px;

  
}

.form_wrap .input_wrap:last-child{
  margin-bottom: 0;
}

.form_wrap .input_wrap label{
  margin-bottom: 3px;
  color: #1a1a1f;
  display: block;
}

.form_wrap .input_grp{
  display: flex;
  justify-content: space-between;
}

.form_wrap .input_grp  input[type="text"]{
  width: 165px;
}

.form_wrap  input[type="text"]{
  width: 100%;
  padding: 10px;
  outline: none;
  border-radius: 3px;
  border: 1.3px solid #9597a6;
}

.form_wrap  input[type="text"]:focus{
  border-color: #063abd;
}

.form_wrap ul{
  padding: 8px 10px;
  border-radius: 20px;
  display: flex;
  justify-content: center;
  
  width:70%;
  background: #9DA3FB;
  margin-left: 15%;
}

.form_wrap ul li:first-child{
  margin-right: 15px;
}

.form_wrap ul .radio_wrap{
  position: relative;
  margin-bottom: 0;
}

.form_wrap ul .radio_wrap .input_radio{
  position: absolute;
  top: 0;
  right: 0;
  opacity: 0;
}

.form_wrap ul .radio_wrap span{
  display: inline-block;
  font-size: 17px;
  padding: 3px 15px;
  border-radius: 30px;
  color: #101749;
}

.form_wrap .input_radio:checked ~ span{
  background: whitesmoke;
  color:#1a1a1f;
}

/* Submit Button */
.form_wrap .submit_btn{
  font-size:17px;
  border-radius: 3px;
  text-transform: uppercase;
  letter-spacing: 2px;
  cursor: pointer;
  width: 100%;
  background:#9DA3FB ;
  padding: 10px;
  border: 0;
  color:white;
}

/* Button Hover effect */
.form_wrap .submit_btn:hover{
  background: #051c94;
}


</style>
<body>
<div class="wrapper">

 <div class="registration_form">
<!-- Title -->
  <div class="title">
    Registration Form
  </div>

<!-- Form -->
 <form>
  <div class="form_wrap">
   <div class="input_grp">

<!-- Frist name input Place -->
     <div class="input_wrap">
  	<label for="fname">First Name</label>
  	<input type="text" id="fname">
     </div>

<!-- Last Name input place -->
    <div class="input_wrap">
      <label for="lname">Last Name</label>
      <input type="text" id="lname">
    </div>
  </div>

<!-- Email Id input Place -->
 <div class="input_wrap">
  <label for="email">Email Address</label>
  <input type="text" id="email">
 </div>

<!-- City Name input place -->
 <div class="input_wrap">
  <label for="city">City</label>
  <input type="text" id="city">
 </div>

<!-- Country Name input place -->
 <div class="input_wrap">
  <label for="country">Country</label>
  <input type="text" id="country">
 </div>

<!-- Gender Select box -->
 <div class="input_wrap">
   <label>Gender</label>
  <ul>
   <li>
     <label class="radio_wrap">
  	<input type="radio" name="gender" value="male" class="input_radio" checked>
  	<span>Male</span>
     </label>
  </li>

  <li>
    <label class="radio_wrap">
  	<input type="radio" name="gender" value="female" class="input_radio">
  	<span>Female</span>
   </label>
  </li>
 </ul>
</div>

<!-- Submit button -->
 <div class="input_wrap">
   <input type="submit" value="Register Now" class="submit_btn">
 </div>

</div>
</form>
</div>
</div>
</body>
</html>