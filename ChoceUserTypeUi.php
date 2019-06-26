<html lang="en">
    <?php include 'content/head.php'; ?>

    <body class="lock-screen" onload="startTime()">

        <div class="lock-wrapper">

            <div id="time"></div> 


            <div class="lock-box text-center">
                <p>Please Select Your Account Type</p>
                 
         
                <a href="admin.php">
                    <button disabled="" class="btn btn-lg btn-login btn-block">Admin</button>

                </a>
                <br>
                
                <a href="login.php">
                    <button class="btn btn-lg btn-login btn-block">Job Seeker</button>

                </a>
                <br>
                <a href="company.php">
                    <button class="btn btn-lg btn-login btn-block">Company</button>

                </a>
               
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