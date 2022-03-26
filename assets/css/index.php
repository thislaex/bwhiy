<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML CHAT TEMPLATE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</head>
<body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card chat-app">
                    <div id="plist" class="people-list" >
                        <div class="input-group">
                           <center>KULLANICILAR</center>
                        </div>
                        <ul class="list-unstyled chat-list mt-2 mb-0">
                            <li class="clearfix">
                                <img src="img/avatar1.png" alt="avatar">
                                <div class="about">
                                    <div class="name">Ayhan Karaman</div>
                                    <div class="status"> <i class="fa fa-circle offline"></i> çevrimdışı </div>
                                </div>
                            </li>
                            <li class="clearfix active">
                                <img src="img/avatar2.png" alt="avatar">
                                <div class="about">
                                    <div class="name">Ahmet Akın</div>
                                    <div class="status"> <i class="fa fa-circle online"></i> çevrimiçi </div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <img src="img/avatar3.png" alt="avatar">
                                <div class="about">
                                    <div class="name">Aliye Doğan</div>
                                    <div class="status"> <i class="fa fa-circle online"></i> çevrimiçi </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <div class="chat">
                        <div class="chat-header clearfix">
                            <div class="row">
                                <div class="col-lg-6">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                        <img src="img/avatar2.png" alt="avatar">
                                    </a>
                                    <div class="chat-about">
                                        <h6 class="m-b-0">Ahmet Akın</h6>
                                        <i class="fa fa-circle online"></i><small>çevrimiçi</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="chat-history" id="alan" >
                            <ul class="m-b-0" id="chatUl">
                                <li class="clearfix">
                                    <div class="message-data" >
                                        <span class="message-data-time float-right">10:10 AM, Bugün</span>
                                    </div><br><br>    
                                    <div class="message other-message float-right"> Merhaba, Naber? </div>
                                </li>
                                <li class="clearfix">
                                    <div class="message-data">
                                        <span class="message-data-time">10:12 AM, Bugün</span>
                                    </div>
                                    <div class="message my-message">Merhaba, iyi. senden?</div>
                                </li>
                                
                               
                            </ul>
                        </div>
                        <div class="chat-message clearfix">
                            <div class="input-group mb-0">
                                <div class="input-group-prepend ">
                                    <span class="input-group-text btn-success" id="btn"><i class="fa fa-send"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Mesajınızı giriniz...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
            let height = $('#chatUl').height()
            $('#chatUl').animate({
                    scrollTop: height*100
            });
       
    })
</script>