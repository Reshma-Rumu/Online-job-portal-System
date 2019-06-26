var Script = function () {

  

    $().ready(function() {
        // validate the comment form when it is submitted
        $("#commentForm").validate();

        // validate signup form on keyup and submit
        $("#signupForm").validate({
            rules: {
                name: "required",
                
                username: {
                    required: true,
                    minlength: 2
                },
                password: {
                    required: true,
                    minlength: 5
                },
                confirm_password: {
                    required: true,
                    minlength: 5,
                    equalTo: "#password"
                   
                },
                email: {
                    required: true,
                    email: true
                },
                
               mobilenumber: "required"
               
                
            },
            messages: {
                name: "Please enter your firstname",
                
                username: {
                    required: "Please enter a username",
                    minlength: "Your username must consist of at least 2 characters"
                },
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                confirm_password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long",
                    equalTo: "Please enter the same password as above"
                },
                email: "Please enter a valid email address",
               
            }
        });
        
        
        
        $("#companySignupForm").validate({
            rules: {
                company_name: "required",
                
                username: {
                    required: true,
                    minlength: 2
                },
                password: {
                    required: true,
                    minlength: 5
                },
                confirm_password: {
                    required: true,
                    minlength: 5,
                    equalTo: "#password"
                   
                },
                company_email: {
                    required: true,
                    email: true
                },
                
               mobilenumber: "required",
               
               company_address: "required"
               
                
            },
            messages: {
                company_name: "Please enter name of your company",
                
                username: {
                    required: "Please enter a username",
                    minlength: "Your username must consist of at least 2 characters"
                },
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                confirm_password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long",
                    equalTo: "Please enter the same password as above"
                },
                company_email: "Please enter a valid email address",
                company_address: "Please enter address of your company"
               
            }
        });
        
        
                $("#insertjobForm").validate({
            rules: {
                
                jobtitle: {
                    required: true,
                    minlength: 3
                },
               
                
               
              
                jobdescription: "required"
            },
            messages: {
                
                jobtitle: {
                    required: "Please enter a job title",
                    minlength: "Your title length must consist of at least 3 characters"
                },
               
                jobdescription: "Please enter job description"
            }
        });

        // propose username by combining first- and lastname
        $("#username").focus(function() {
            var firstname = $("#name").val();
            var lastname = 2;
            if(firstname && lastname && !this.value) {
                this.value = firstname + "." + lastname;
            }
        });

        //code to hide topic selection, disable for demo
        var newsletter = $("#newsletter");
        // newsletter topics are optional, hide at first
        var inital = newsletter.is(":checked");
        var topics = $("#newsletter_topics")[inital ? "removeClass" : "addClass"]("gray");
        var topicInputs = topics.find("input").attr("disabled", !inital);
        // show when newsletter is checked
        newsletter.click(function() {
            topics[this.checked ? "removeClass" : "addClass"]("gray");
            topicInputs.attr("disabled", !this.checked);
        });
    });


}();