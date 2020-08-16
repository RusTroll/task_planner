$( document ).ready(function() {
    $('#form').submit(function (event) {
        $.ajax({
            type: "POST",
            url: "add.php",
            cache: false,
            data: $(this).serialize(),
            success: function (result) {
                $('#message').html(result);
                $('#task').val('');
            },
            error: function(result) { // Данные не отправлены
                alert('Ошибка. Данные не отправлены.');
            }
        });

        $.ajax({
            url: "update.php",
            cache: false,
            success: function (result) {
                $('#content').html(result);
            },
            error: function(result) { // Данные не отправлены
                alert('Ошибка. Данные не обновлены.');
            }
        });

        event.preventDefault();
    });

    $("body").on("click", ".delete", function(e) {
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: "delete.php?id=" + $(this).attr('id'),
            dataType: "text",
            data: $(this).attr('id'),
            success: function(result){
                $.ajax({
                    url: "update.php",
                    cache: false,
                    success: function (result) {
                        $('#content').html(result);
                    },
                    error: function() {
                        alert('Ошибка. Данные не обновлены.');
                    }
                });

            },
            error: function (){
                alert('Задача не удалена');
            }
        });
    });
});