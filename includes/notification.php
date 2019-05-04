<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    
    function clearNotifications() {
        /* 
            clears notification 
        */
        $_SESSION['notification'] = array();
    }

    function createNotification($notification) {
        if(!isset($_SESSION['notification'])) {
            $_SESSION['notification'] = array();
        }
        array_push($_SESSION['notification'],$notification);
    }
    

    function displayNotification() { 
        /*
            displays notification
        */
        if(isset($_SESSION['notification'])) {
            foreach($_SESSION['notification'] as $notification) { ?>

                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <?php echo $notification; ?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
    <?php
            }
            clearNotifications();
        }
    }
?>
