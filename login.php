<html lang="en">
    <?php 
    session_start();
    include 'content/head.php'; ?>

    <body class="lock-screen" onload="startTime()">

        <div class="lock-wrapper">

            <div id="time"></div>


            <div class="lock-box text-center">
                <form class="form-signin" method="POST" action="action/loginAction.php">
                    <h2 class="form-signin-heading">Sign in as Jobseeker</h2>

<div class="login-box-body">
       <div class="alert alert-danger" id="div1">
 <?PHP

    if(isset($_SESSION['errorMsg'])){
        echo $_SESSION['errorMsg'];
        unset($_SESSION['errorMsg']);
    }
       ?>
         </div>  
  
     <div class="login-wrap"> 
         <form action="" method="post">
             <a href="action/loginAction.php"></a>
                        <input type="text" class="form-control" name="username" placeholder="User Name" autofocus>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                       <!-- <label class="checkbox">
                            <input type="checkbox" value="remember-me"> Remember me
                            <span class="pull-right">
                                <a data-toggle="modal" href="#myModal"> Forgot Password?</a>

                            </span>
                        </label> -->
                        <input type="submit" name="submit" value="Sign In" class="btn btn-primary btn-block btn-flat">
</form>
                        <div class="registration">
                            Don't have an account yet?
                            <a class="" href="jobSeekerRegistrationUi.php">
                                <p>Create an account</p>
                            </a>
                        </div>

                   

                    </div>

                

            </div>
        </div>
        <script>
            function startTime()
            {
                var today=new Date();
                var h=today.getHours();
                var m=today.getMinutes();
                var s=today.getSeconds();
                // add a zero in front of numbers<10
                m=checkTime(m);
                s=checkTime(s);
                document.getElementById('time').innerHTML=h+":"+m+":"+s;
                t=setTimeout(function(){startTime()},500);
            }

            function checkTime(i)
            {
                if (i<10)
                {
                    i="0" + i;
                }
                return i;
            }
        </script>
    </body>
</html>