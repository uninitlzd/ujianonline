
$(document).ready(function(){$(".alert").addClass("in").fadeOut(4500);

/* swap open/close side menu icons */
$('[data-toggle=collapse]').click(function(){
    // toggle icon
    $(this).find("i").toggleClass("glyphicon-chevron-right glyphicon-chevron-down");
});
});

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

// User login script
var options = {
    callback: function () {
        var data = $('#inputEmailLogin').val();
        if(data != "") {

            $(document).bind("ajaxSend", function() {
                console.log('start');
                $('.input-group-addon-login i').attr('class', 'fa fa-circle-o-notch fa-spin');
            }).bind("ajaxComplete", function() {
                console.log('completed');
            });

            $.ajax({
                method: "POST",
                url: "/check-email",
                data: { email : data},
                success: function(data) {

                    var flag = data.flag;
                    console.log(flag);
                    if (flag == 1) {
                        $('#profile-img').attr('src', 'http://localhost:8000/assets/img/test.png');
                        //console.log(img);
                        $('<input type="password" id="inputPasswordLogin" name="password" class="form-control" placeholder="Password" required>').hide().appendTo('.form-signin').fadeIn(900, function() {
                            $('<br><div class="text-center"><input type="submit" value="Login" name="password" class="btn btn-primary"></div>').hide().appendTo('.form-signin').delay(200).fadeIn(700);
                        });

                        if(($('.input-group-addon-login i.glyphicon-remove').length) || ($('.input-group-addon-login i.fa').length)) {
                            console.log('hit');
                            $('.input-group-addon-login i').attr('class', 'glyphicon glyphicon-ok text-success');
                        }

                    } else {
                        console.log('else');
                        if($('.input-group-addon-login i .glypicon-remove').length) {
                            console.log('hit');
                            $('.input-group-addon-login i').attr('class', 'glyphicon glyphicon-ok text-success');
                        } else {
                            console.log('hit2');
                            $('.input-group-addon-login i').attr('class', 'glyphicon glyphicon-remove text-danger');
                        }
                    }

                },
                error: function() {

                }
            });
        } else {
            $('.input-group-addon-login i').attr('class', 'glyphicon glyphicon-user');
            console.log('Element Empty');
        }

    },
    wait: 750,
    highlight: true,
    captureLength: 0
}

$('#inputEmailLogin').typeWatch(options);

//-!
