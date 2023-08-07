function kontrol()
{
    if(mailKontrol() && passKontrol())
    return true;
    else
    return false;
}
function mailKontrol()
{
    var mail = document.getElementById("mail-inpt").value;
    pattern=/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
    if(pattern.test(mail))
    {
        document.getElementById("mail-inpt").style.borderColor = "#5cdb21";
        document.getElementById("mail-invalid").style.display = "none";
        return true;

    }
    else
    {
        document.getElementById("mail-inpt").style.borderColor = "red";
        document.getElementById("mail-invalid").style.display = "block";
        return false;
    }
}
function passKontrol()
{
    var pass = document.getElementById("pass-inpt").value;
    if(pass == "") 
    {
        document.getElementById("pass-inpt").style.borderColor = "red";
        document.getElementById("pass-invalid").style.display = "block";
        return false;
    } 
    else
    {
        document.getElementById("pass-inpt").style.borderColor = "#5cdb21";
        document.getElementById("pass-invalid").style.display = "none";
        return true;
    }
}