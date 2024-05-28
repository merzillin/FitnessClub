<html>
<head>
<style>
body
{
margin:0;
padding:0;
background-color:grey;
}
#a
{
width:300px;
padding:40px;
position: absolute;
top:50%;
left:50%;
transform: translate(-50%,-50%);
background:black;
text-align: center;
color:white;

}
#a input[type="text"], #a input[type="password"]
{
border:0;
background-color: none;
display:block;
margin:20px auto;
text-align:center;
border:2px solid blue;
padding:14px 10px;
width:200px;
outline:none;
color:black;
border-radius: 24px;
transition:0.25s;
}
#a input[type="text"]:focus,#a input[type="password"]:focus
{
width:280px;
border-color:green;
}
#a input[type="submit"]
{
border:0;
background-color: none;
display:block;
margin:20px auto;
text-align:center;
border:2px solid green;
padding:14px 40px;
width:200px;
outline:none;
color:blue;
border-radius: 24px;
transition:0.25s;
cursor: pointer;
}
#a input[type="submit"]:hover
{
background-color: green;
}
</style>
</head>
<body>
<form id="a">
<h1><u>LOG-IN</u></h1>
<input type="text" placeholder="user name">
<input type="password" placeholder="password">
<input type="submit" value="log-in">
<a href="registration form.html" target="_blank">Sign Up</a><br>
<a href="forget password.html" target="_blank">Forget Password</a>
</form>
</body>
</html>