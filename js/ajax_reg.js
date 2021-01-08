
    function call() {
        var msg   = $('#formx').serialize();
        $.ajax({
            type: 'POST',
            url: 'models/reg_model.php',
            data: msg,
            success: function(data) {
                if (data == 'true'){
                    document.location.href = 'login.php'
                }
                else {
                    $('#results').html(data);
                }
            },
            error:  function(xhr, str){
                alert('Возникла ошибка: ' + xhr.responseCode);
            }
        });

    }


