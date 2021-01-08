
    function callLogin() {
        var msg   = $('#formL').serialize();
        $.ajax({
            type: 'POST',
            url: 'models/auth_model.php',
            data: msg,
            success: function(data) {
                if (data == 'true'){
                    document.location.href = 'main.php'
                }
                else {
                    $('#results_login').html(data);
                }
            },
            error:  function(xhr, str){
                alert('Возникла ошибка: ' + xhr.responseCode);
            }
        });

    }
