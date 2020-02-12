<?php include('include/header.php'); ?> 


<div class="col-lg-6 col-md-6">
    <div class="breadcrumbs my-4">
        <a class="text-decoration-none text-dark" href="index.php"><i class="fas fa-home mx-2"></i> Home</a> <i class="fas mx-2 fa-angle-right"></i> <a class="text-decoration-none text-dark" href="balance.php">Balance</a> <i class="fas mx-2 fa-angle-right"></i> <span>Request</span>
    </div>
    <div class="main-content group">
        <div class="container d-flex justify-content-between align-items-center mt-3 px-4">
            <p class="font-weight-bold text-black-50">Request Balance</p>
            <p><a href="balance.php" class="text-success text-decoration-none"><i class="fas fa-hand-holding-usd mr-2"></i> Balance History</a></p>
        </div>
        <hr class="mt-1 mb-4" style="width:92%; border:.5px solid lightgrey;">
        <div class="container px-4 d-flex justify-content-between">
            <form action="#" method="POST">
                <div class="form-group">
                    <label>Total SMS*</label>
                    <input style="width: 230px" type="number" class="form-control">
                    <small class="text-muted">Enter number of SMS you want to request.</small>
                </div>
                <div class="button-group">
                    <button type="submit" class="btn btn-outline-success">Request<i class="fas fa-paper-plane ml-2"></i></button>
                </div>
            </form>
            <div class="rates">
                <p>Sms Rate : <span class="text-muted">Rs. 1.45 / SMS<span></p>
            </div>
        </div>
        <hr class="my-4" style="width:92%; border:.5px solid lightgrey;">
        <div class="container px-4">
            <p style="word-spacing: 1px;" class="font-weight-bold text-black-50">Top up your balance with <span style="color:green">eSewa</span> & <span style="color:purple">Khalti</span></p>
            <div class="row text-center top-up">
                <div class="col-lg-6">
                    <div class="image">
                        <a href="https://esewa.com.np" target="blank">
                        <img src="pics/esewa.jpg" height="110px" width="100px">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 py-4 mt-3">
                    <div class="image">
                        <a href="https://khalti.com/login/" target="blank">
                        <img src="pics/khalti-logo.svg" height="40px">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<?php include('include/footer.php'); ?> 

