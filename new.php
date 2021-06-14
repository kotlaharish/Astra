

<html>
<head>
<title>Image Upload</title>
<style type="text/css">
   @import url(https://fonts.googleapis.com/css?family=Open+Sans:300);
* {
  font-family: 'Open Sans', sans-serif;
}

body {
  margin: 0;
  padding: 0;
  background: #ddd;
  background-repeat: no-repeat;
}
::placeholder{
color:#ddd;
}

.signupSection {
  background-repeat: no-repeat;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 800px;
  height: auto;
  margin-top:30px;
  text-align: center;
  display: flex;
  color: white;
  box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .5);
  h2 {
    font-weight: 300;
  }
}

.info {
  width: 45%;
  background: rgba(20, 20, 20, .8);
  padding: 30px 0;
  border-right: 5px solid rgba(30, 30, 30, .8);
  h2 {
    padding-top: 30px;
    font-weight: 300;
  }
  p {
    font-size: 18px;
  }
  .icon {
    font-size: 8em;
    padding: 20px 0;
    color: rgba(10, 180, 180, 1);
  }
}

.signupForm {
  width: 100%;
  height:auto;
 
  padding: 30px 0;
  background: rgba(20, 40, 40, .8);
  transition: .2s;
  
}

.inputFields {
  margin: 15px 0;
  font-size: 16px;
  padding: 10px;
  width: 250px;
  border: 1px solid rgba(10, 180, 180, 1);
  border-top: none;
  border-left: none;
  border-right: none;
  background: rgba(20, 20, 20, .2);
  color: white;
  font-weight:bold;
  outline: none;
}

.noBullet {
  list-style-type: none;
  padding: 0;
}

#join-btn {
  border: 1px solid rgba(10, 180, 180, 1);
  background: rgba(20, 20, 20, .6);
  font-size: 18px;
  color: white;
  margin-top: 20px;
  padding: 10px 50px;
  cursor: pointer;
  transition: .4s;
  &:hover {
    background: rgba(20, 20, 20, .8);
    padding: 10px 80px;
  }
}


</style>
</head>
<body>
<center>
<div class="signupSection">
 
  <form action="#" method="POST" class="signupForm" name="signupform">
    <h2>Sign Up</h2>
    <ul class="noBullet">
      <li>
        <label for="username"></label>
        <input type="text" class="inputFields" id="username" name="username" placeholder="Username" value="" oninput="return userNameValidation(this.value)" required/>
      </li>
      <li>
        <label for="password"></label>
        <input type="password" class="inputFields" id="password" name="password" placeholder="Password" value="" oninput="return passwordValidation(this.value)" required/>
      </li>
      <li>
        <label for="email"></label>
        <input type="email" class="inputFields" id="email" name="email" placeholder="Email" value="" required/>
      </li>
	        <li>
        <label for="email"></label>
        <input type="email" class="inputFields" id="email" name="email" placeholder="Email" value="" required/>
      </li>
	        <li>
        <label for="email"></label>
        <input type="email" class="inputFields" id="email" name="email" placeholder="Email" value="" required/>
      </li>
	        <li>
        <label for="email"></label>
        <input type="email" class="inputFields" id="email" name="email" placeholder="Email" value="" required/>
      </li>
	        <li>
        <label for="email"></label>
        <input type="email" class="inputFields" id="email" name="email" placeholder="Email" value="" required/>
      </li>     
      <li id="center-btn">
        <input type="submit" id="join-btn" name="join" alt="Join" value="Join">
      </li>
    </ul>
  </form>
  
  
</div>

<script>
var alertRedInput = "#8C1010";
var defaultInput = "rgba(10, 180, 180, 1)";

function userNameValidation(usernameInput) {
    var username = document.getElementById("username");
    var issueArr = [];
    if (/[-!@#$%^&*()_+|~=`{}\[\]:";'<>?,.\/]/.test(usernameInput)) {
        issueArr.push("No special characters!");
    }
    if (issueArr.length > 0) {
        username.setCustomValidity(issueArr);
        username.style.borderColor = alertRedInput;
    } else {
        username.setCustomValidity("");
        username.style.borderColor = defaultInput;
    }
}

function passwordValidation(passwordInput) {
    var password = document.getElementById("password");
    var issueArr = [];
    if (!/^.{7,15}$/.test(passwordInput)) {
        issueArr.push("Password must be between 7-15 characters.");
    }
    if (!/\d/.test(passwordInput)) {
        issueArr.push("Must contain at least one number.");
    }
    if (!/[a-z]/.test(passwordInput)) {
        issueArr.push("Must contain a lowercase letter.");
    }
    if (!/[A-Z]/.test(passwordInput)) {
        issueArr.push("Must contain an uppercase letter.");
    }
    if (issueArr.length > 0) {
        password.setCustomValidity(issueArr.join("\n"));
        password.style.borderColor = alertRedInput;
    } else {
        password.setCustomValidity("");
        password.style.borderColor = defaultInput;
    }
}
</script>
</body>
</html>