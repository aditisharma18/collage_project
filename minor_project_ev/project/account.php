<?php
    include('session.php');
    if (!isset($_SESSION['loggedinid']))
    {
        header("location:login.php");
    }
    if(isset($_REQUEST['update']))
    {
        $name=$_REQUEST['Full name'];
        $Email=$_REQUEST['Email'];
        $phone=$_REQUEST['Phone no'];
        $Vehicle=$_REQUEST['vehicle number'];
        $Bookin_date=$_REQUEST['Booking date'];
        $Booked_point=$_REQUEST['Booked point'];
        $City=$_REQUEST['City'];
        $Gender=$_REQUEST['Gender'];
    if((!empty($name))&&(!empty($Email))&&(!empty($phone)))
    {
        $userid=$_SESSION['loggedinid'];
        $up=mysqli_query($db,"update 'edit_profile' set 'name'='$name','Email'='$Email','phone'='$phone' where 'customer_id'='$userid'");
    }
    else
    {
        $_SESSION['errormsg']="name,Email and phone no are required";
        header('location:account.php');

    }
    $_SESSION['successmsg']="profile has been updated";
    header('location:main.html');
    }
    $userid=$_SESSION['loggedinid'];
    $getdata=mysqli_query($db,"select* from 'edit_profile' where 'customer id'='&userid'");
    $row=mysqli_fetch_assoc($getdata);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>My Account </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body action="#" enctype="multipart/form-data">
	 <div class="home">
	<h4><a href="my_account.html"><input type="image" src="home.jpg" alt="setting" width="30" height="30"></a>&nbsp; &nbsp;<span style="font: size 40px;cursor:pointer" onclick="openNav()"><b>&#9776 </b>
	</span></h4>
    </div>
	<table width="100%" rules=”none”>
		<tr> 
		   <td width=”40%” valign=”top”> 
<div class="container">
<div class="row gutters">
<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card">
		<div class="account-settings">
			<div class="user-profile">
				<div class="user-avatar">
					<img src="images/<??php echo $row['image'];>" alt="<?php echo $row['name'];?>">
				</div>
				<h5 class="user-name"><?php echo $row[' full name'];?></h5>
				<h6 class="user-email"><?php echo $row['email']; ?></h6>
			</div>
		</td> 
			 <td width=”40%” valign=”top”>  
			<div class="about">
				<div id="mySidenav" class="sidenav">
					<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
					<a href="#">Dashboard</a>
					<a href="#"><a href="my_account.html">Account Details</a></a>
					<button class="dropdown-btn">Setting
						<i class="fa fa-caret-down"></i>
					  </button>
					  <div class="dropdown-container">
						<a href="#"><a href="notification.html">Notification</a></a>
						<a href="#"><a href="setting.html">Change Password</a>	</a>
						<a href="#">Privecy & Policy</a>
					  </div>
					<button class="dropdown-btn">Help
						<i class="fa fa-caret-down"></i>
					  </button>
					  <div class="dropdown-container">
					    <a href="#"><a href="my_account.html">Report Problem</a></a>
					  </div>
					<a href="logout.php">Log out</a>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="flex-card-body">
		<div class="flex-row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h6 class="detail"> Details</h6><br>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="fullName">Full Name</label><br>
					<input type="text" class="form-control" value="<?php echo $row['Full name'];?>" id="fullName" placeholder="Enter full name">
				</div><br>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="eMail">Email Id</label><br>
					<input type="email" class="form-control"value="<?php echo $row['Email id'];?>" id="eMail" placeholder="Enter email ID">
				</div><br>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="phone">Phone</label><br>
					<input type="text" class="form-control"value="<?php echo $row['Phone'];?>" id="phone" placeholder="Enter phone number">
				</div><br>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="vehicle_no">Vehicle number</label><br>
					<input type="text" class="form-control" value="<?php echo $row['Vehicle number'];?>" id="vehicle_no" placeholder="Vehicle number">
				</div><br>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="text">Report Problem</label><br>
					<textarea value="<?php echo $row['Report Problem'];?>" placeholder="Write your problem here."></textarea>
				</div><br>
			</div>
		</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<div class="flex-row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h6 class="detail">Booking Details</h6><br>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="Street">Booking Date</label><br>
					<input type="datetime" class="form-control" value="<?php echo $row['Booking date'];?>" id="booking_date" placeholder="Booing Date">
				</div><br>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="booked_p">Booked Point</label><br>
					<input type="name" class="form-control" value="<?php echo $row['Booked point'];?>" id="booked_p" placeholder="Booked Point">
				</div><br>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="city">City</label><br>
					<input type="text" class="form-control" value="<?php echo $row['City'];?>" id="city" placeholder="Enter city">
				</div><br>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="Gender">Gender</label><br>
					<input type="text" class="form-control" value="<?php echo $row['Gender'];?>" id="gender" placeholder="Gender">
				</div><br><br>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="text-right">
					<button type="button" id="submit" name="submit" class="cancel">Cancel</button>
					<button type="button" id="submit" name="submit" class="update">Update</button>
				</div>
			</div>
		</div>
	</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
</div> 
</td>
</tr>
</table>
<style type="text/css">
body {
	font-family: "Lato", sans-serif;
  transition: background-color .5s;
    margin: 0;
    padding-top: 20px;
    color: #2e323c;
    background: #f5f6fa;
    position: relative;
    height: 100%;
}
.home{
	padding-left: 10px;

}
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
.active {
  background-color: green;
  color: white;
}
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
  
}
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

.card {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.account-settings .user-profile {
    margin: 0 0 1rem 0;
    padding-bottom: 1rem;
    text-align: center;
}
.account-settings .user-profile .user-avatar {
    margin: 0 0 1rem 0;
}
.account-settings .user-profile .user-avatar img {
    width: 90px;
    height: 90px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
}
.account-settings .user-profile h5.user-name {
    margin: 0 0 0.5rem 0;
}
.account-settings .user-profile h6.user-email {
    margin: 0;
    font-size: 0.8rem;
    font-weight: 400;
    color: #9fa8b9;
}

.form-control {
    border: 1px solid #cfd1d8;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    font-size: 1rem;
    background: #ffffff;
    color: #2e323c;
}

.card {
    background: #ffffff;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 0;
    margin-bottom: 3rem;
	
}
.detail{
	color: rgb(17, 153, 238);
}
.flex-card-body{
	display: flex;
}
.flex-row gutters {
    flex: 1;
    border: 5px solid;
}  

.flex-row gutter:form-group {
    margin-right: 20px;
	
} 

</style>

<script type="text/javascript">
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("row gutters").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("row gutters").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>
</body>
</html>