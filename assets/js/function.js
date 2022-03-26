    $(document).ready(function(){
            let height = $('#chatUl').height()
            $('#chatUl').animate({
                    scrollTop: height*100
            });

            $('.user').click(function() {
                var user = $(this).attr('user-id')
                
                $.ajax({
                    url: "process.php",
                    type: "post",
                    data: { user: user, chat: 'chat' },
                    success: function (response) {
                        $('.msgUI').html(response);
                    }

                });

            })
    })