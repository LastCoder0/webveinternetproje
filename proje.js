function eposta_kontrol(str) {


    return (str.indexOf(".") > 2) && (str.indexOf("@") > 0);


}
var email = 'sanalkurs[at]hotmail.com'; 
if(!eposta_kontrol(email)) {


    alert("Geçerli bir posta giriniz!");


}