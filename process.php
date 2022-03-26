<?php 
include 'function.php';

$me = $_SESSION['user'];

if(isset($_POST['chat'])) {
    $user = $_POST['user'];

    $userdata = getUser($user);

    $msgs = messages($me, $user);

    $message = '';

    if (!$msgs) {
        $message .= '<center>Sohbet Yok!</center>';
    }
    else{

    foreach ($msgs as $ms) {                                
        if ($ms['kimden'] == $me) {
                     $message .= '
                                <li class="clearfix">
                                    <div class="message-data" >
                                        <span class="message-data-time float-right">10:10 AM, Bugün</span>
                                    </div><br><br>    
                                    <div class="message other-message float-right"> '.$ms['text'].' </div>
                                </li>';                                         
                                }
                                else{
                        $message .= '
                                <li class="clearfix">
                                    <div class="message-data">
                                        <span class="message-data-time">10:12 AM, Bugün</span>
                                    </div>
                                    <div class="message my-message">'.$ms['text'].'</div>
                                </li>';
                                }
                            }
        }

    echo '<div class="chat-header clearfix">
                            <div class="row">
                                <div class="col-lg-6">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                        <img src="'.$userdata['avatar'].'" alt="avatar">
                                    </a>
                                    <div class="chat-about">
                                        <h6 class="m-b-0">'.$userdata['fullName'].'</h6>
                                        <i class="fa fa-circle online"></i><small>çevrimiçi</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="chat-history" id="alan" >
                            <ul class="m-b-0" id="chatUl">
                                '.$message.'                            
                            </ul>
                        </div>';                     

}
