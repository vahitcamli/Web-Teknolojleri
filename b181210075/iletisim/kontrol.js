function temizle()
{
    var input,radio,gizli;
    input = document.getElementsByClassName("input-class");
    for(var i = 0;i<input.length;i++)
    {
        input[i].value="";
        input[i].style.borderColor="gray";
    }
    gizli=document.getElementsByClassName("gonder-invalid");
    for(var i=0;i<gizli.length;i++)
    {
        gizli[i].style.display="none";
    }
    radio = document.getElementsByName("derece");
    for(var i =0;i<radio.length;i++)
    {
        radio[i].checked=false;
    }
    document.getElementById("regions").selectedIndex=0;;
    document.getElementById("check").checked = false;
    document.getElementById("isim").placeholder = "Ad";
    document.getElementById("soyad").placeholder = "Soyad";
    document.getElementById("mail").placeholder = "E-Posta";
}
function isimKontrol()
{
    var isim = document.getElementById("isim").value;
    var pattern=/^[abcçdefgğhıijklmnoöprsştuüvyzqwx\s]+$/i;
    
    if(pattern.test(isim))
    {
        document.getElementById("isim").style.color = "black";
        document.getElementById("isim").style.borderColor = "#5cdb21";
        document.getElementById("isim-invalid").style.display = "none";
    
        return true;
    }
    else
    {
        document.getElementById("isim").style.borderColor ="red";
        document.getElementById("isim").placeholder = "Geçerli bir Ad giriniz";
        document.getElementById("isim-invalid").style.display = "block";
        return false;
    }
}
function soyadKontrol()
{
    var soyad = document.getElementById("soyad").value;
    var pattern=/^[abcçdefgğhıijklmnoöprsştuüvyzqwx\s]+$/i;
    
    if(pattern.test(soyad))
    {
        document.getElementById("soyad").style.color = "black";
        document.getElementById("soyad").style.borderColor = "#5cdb21";
        document.getElementById("soyad-invalid").style.display = "none";
    
        return true;
    }
    else
    {
        document.getElementById("soyad").style.borderColor ="red";
        document.getElementById("soyad").placeholder = "Geçerli bir soyad giriniz";
        document.getElementById("soyad-invalid").style.display = "block";


        return false;
    }
}
function mailKontrol()
{
    var mail = document.getElementById("mail").value;
    pattern=/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
    if(pattern.test(mail))
    {
        document.getElementById("mail").style.color = "black";
        document.getElementById("mail").style.borderColor = "#5cdb21";
        document.getElementById("mail-invalid").style.display = "none";
        return true;
    }
    else
    {
        document.getElementById("mail").style.borderColor ="red";
        document.getElementById("mail").placeholder = "Geçerli bir e-posta giriniz";
        document.getElementById("mail-invalid").style.display = "block";
    }
}
function radioKontrol()
{
    var radio;
    radio = document.getElementsByName("derece");
    for(var i = 0;i<radio.length;i++)
    {
        if(radio[i].checked != true)
        {  }
        else
        {
            return true;
        }
    }

    return false;
}
function sonKontrol()
{
    var hata = document.getElementsByClassName("gonder-invalid");
    if(isimKontrol() && soyadKontrol() && mailKontrol() && radioKontrol())
    {
        return true;
    }
    else
    {
        for(var i=0;i<hata.length;i++)
        {
            hata[i].style.display="block";
        }
        return false;
    }
}