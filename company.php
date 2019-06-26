<html lang="en">
    <?php include 'content/head.php'; ?>

    <body class="lock-screen" onload="startTime()">

        <div class="lock-wrapper">

            <div id="time"></div>


            <div class="lock-box text-center">
                <form class="form-signin" method="POST" action="action/companyLoginAction.php">
                    <h2 class="form-signin-heading">sign in as company</h2>
                    <div class="login-wrap">
                        <input type="text" class="form-control" name="username" placeholder="User Name" autofocus>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                       <!-- <label class="checkbox">
                            <input type="checkbox" value="remember-me"> Remember me
                            <span class="pull-right">
                                <a data-toggle="modal" href="#myModal"> Forgot Password?</a>

                            </span>
                        </label> -->
                        <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>

                        <div class="registration">
                            Don't have an account yet?
                            <a class="" href="companyRegistrationUi.php">
                                <p>Create an account</p>
                            </a>
                        </div>

                    </div>

                   

                </form>

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