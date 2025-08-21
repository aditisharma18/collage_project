<!DOCTYPE html>
<html>
    <head>
        <title>Setting</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="head">
            <a href="my_account.php"><h2><b>&#9776 </b></h2></a>
        </div>
            <form>
                <h2>Change Your Password...</h2>
                <label for="customer_id"><b><h3> Customer Id:</b></h3></label><br><br>
                <div class="password">
                    <div class="old">
                                <label for="old_password"><b>Old Password</b></label>&nbsp; &nbsp; &nbsp;&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                            <input type="password" class="npassword" id="password" placeholder="Enter your password"  maxlength="750px">
                    </div><br>
                    <div class="new">
                                <label for="new_password"><b>New Password</b></label>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; 
                            <input type="password" class="npassword" id="passes" placeholder="Enter your new password"  maxlength="750px">
                    </div> <br>
                    <div class="confirm">
                                 <label for="confirm"><b>Confirm new password</b></lable> &nbsp; &nbsp; &nbsp; &nbsp;
                            <input type="password" class="npassword" id="confirmation" placeholder="Confirm your password" maxlength="750px">
                        </div>
                        <br>
                    </div>
                <div>
                    <button class="xyz">Change password</button><br><br>
                    <a href="#">forgot password?</a>
                </div>
            </form>
        <style type="text/css">
            body{
                font-family: "Lato", sans-serif;
                margin: 0;
                padding-top: 5px;
                color: #2e323c;
                position: relative;
                height: 100%;
                text-align: center;
            }
            form{
                text-align: center;
                background-color: rgb(161, 156, 156);
                padding-top: 40px;
                padding-left: 5px;
                position: relative;
                width: 1150px;
                height: 500px;
                left: 5%;
                top: 30%;
                right: 50%;
                bottom: 50%;
            }
            .xyz{
                background-color: paleturquoise;
            }
            div.head{
                text-align:left;
                padding-left: 10px;
                text-decoration: none;
            }
            .password{
                font-size: larger;
                box-sizing: content-box;
                
            }
            .npassword{
                padding: 8px 16px;
                padding-top: 8px;
                padding-right: 16px;
                padding-bottom: 8px;
                padding-left: 16px;
            }
            .auto{
                font-size: 20px;
                font-weight: 600;
                vertical-align: baseline;
                box-sizing: border-box;
                color: #2e323c;
                flex: 0 0 194px;
                font-size: 16px;
                font-weight: 600;
                line-height: 18px;
                margin-top: 6px;
            }
        </style>
    </body>
</html>