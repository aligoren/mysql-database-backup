$(function() {

    $.btnYedekle = function() {
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
