//password show 
function pass_show()
{
    var pswd = document.getElementById('password');
    var icon = document.querySelector('.icon');

    
    if(pswd.type === "password")
    {
        pswd.type = "text";
        icon.style.fontSize = "35px";


    }
    else{
            pswd.type = "password";
        icon.style.fontSize = "15px";        

    }
}

// confirm password show 
function pass_show_c()
{
    var pswd = document.getElementById('cpassword');
    var icon = document.querySelector('.icon-c');


    if(pswd.type === "password")
    {
        pswd.type = "text";
        icon.style.fontSize = "25px";


    }
    else{
        pswd.type = "password";
        icon.style.fontSize = "15px";        

    }
}
