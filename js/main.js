$(function() {

    $.btnYedekle = function() {
        /*
        serialize fonksiyonu ile formda post edilen tüm ögeler alınır.
        form#frmLogin kullanıldığı formdaki frmLogin id'sine sahip form'un verilerini seçtirir.
        dataType json olması bizim için daha işe yarar.
        success ile post ajax işlemi başarılı ise olacakları belirttik.
        istek sonucu gelen cevabı yazdırdık.
        timeout ile belirtilen timeout'a dek ajax çağrısı sonuçlanmazsa hata var demektir. bunun kontrolünü yapabiliriz.
        post.php kısmında kullanılan sleep(2) fonksiyonu da 2 saniye bekletiyor. yani 2 yerine 3 saniye olursa çağrı sonlanır ve dilersek bir hata yazdırabiliriz.
        */
        var params = $("form#frmYedekle").serialize();
        $.ajax({
            url: "run.php",
            type: "POST",
            data: params,
            dataType: "json",
            /*timeout: 3000,*/
            success: function(cevap) {
                if (cevap.msgOk) {
                    $(".msgShow").html('<p class="bg-success">Database Backup Successfully: <a href="do/'+cevap.msgOk+'" target="_blank">Download Backup</a></p>');
                    
                } else {
                    $(".msgShow").html('<p class="bg-danger">ERROR: Check your database info</p>');
                }
            }
        });
    }
});