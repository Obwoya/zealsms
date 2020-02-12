<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ZealSMS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<section class="header sticky-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">
        <div class="logo">
            <a href="index.php"><img src="pics/logo_light.png" height="20px"></a>
        </div>
        <div class="logo-right d-flex align-items-center justify-content-end text-white">
            <!-- <a href="#" class="sms mr-2">
            <small>Send SMS</small>
            </a> -->
            <div class="bell-ico" style="position:relative">
                <a href="notification.php"><i class="far fa-bell"></i></a>
                <div style="position:absolute;top:20%;right:10%;font-size: 10px; user-select: none;" class="badge bg-light text-dark">0</div> 
            </div>
            <div class="setting-ico" style="position:relative">
                <a href="#"><i class="fas fa-cog"></i></a>
                <div class="setting-text bg-light">
                    <a href="profile.php"><i class="fas fa-user mr-2"></i> My Profile</a>
                    <a href="setting.php"><i class="fas fa-cog mr-2"></i> Settings</a>
                    <a href="#"><i class="fas fa-power-off mr-2"></i> Logout</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="details">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="left-profile text-center bg-light pt-5">
                    <div class="image">
                        <a href="profile.php"><img src="pics/prasid.jpg"></a>
                    </div>
                    <div class="img-text py-2">
                        <strong class="d-block my-2"><a href="profile.php" class="text-dark text-decoration-none">PRASID KAYASTHA</a></strong>
                        <p>disarp969@client.com <br> 9813822002</p>   
                    </div>
                </div>
                <div class="home mt-3 text-center" >
                    <ul class="list-unstyled">
                        <a href="index.php"><li><i class="fas fa-home mr-2"></i> Home</li></a>
                        <a href="contact.php"><li><i class="far fa-address-book mr-2"></i> Contact</li></a>
                        <a href="group.php"><li><i class="fas fa-users mr-2"></i> Group</li></a>
                        <a href="all-sms.php"><li><i class="far fa-comment-dots mr-2"></i> All Sms</li></a>
                        <a href="send-sms.php"><li><i class="fas fa-sms mr-2"></i> Send Sms</li></a>
                    </ul>
                </div>
            
            </div>





