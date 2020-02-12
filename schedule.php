<?php include('include/header.php'); ?> 


<div class="col-lg-6 col-md-6">
    <div class="breadcrumbs my-4">
        <a class="text-decoration-none text-dark" href="index.php"><i class="fas fa-home mx-2"></i> Home</a> <i class="fas mx-2 fa-angle-right"></i> <a class="text-decoration-none text-dark" href="all-sms.php">Sms <i class="fas mx-2 fa-angle-right"></i> <span>Schedule</span>
    </div>
    <div class="main-content group">
        <div class="container d-flex justify-content-between align-items-center mt-3 px-4">
            <p class="font-weight-bold text-black-50">Sms Schedule</p>
            <p><a href="send-sms.php" class="text-success text-decoration-none"><i class="fas fa-paper-plane mr-2"></i> Send Sms</a></p>
        </div>
        <div class="container d-flex justify-content-center">
        <table class="table table-borderless table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>To</th>
                <th>Message</th>
                <th>Date</th>
                <th>Time</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Prasid Kayastha</td>
                <td>Test Message</td>
                <td>20 Aug 2019</td>
                <td>12:05 pm</td>
                <td class="text-info">Delivered</td>
            </tr>
            <tr>
                <td>2</td>
                <td>9841569825</td>
                <td>Testing!</td>
                <td>30 Sep 2019</td>
                <td>04:22 pm</td>
                <td class="text-warning">Pending</td>
            </tr>
            
        </tbody>
    </table>
    </div>
    </div>
</div>





<?php include('include/footer.php'); ?> 