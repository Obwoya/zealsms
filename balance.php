<?php include('include/header.php'); ?> 


<div class="col-lg-6 col-md-6">
    <div class="breadcrumbs my-4">
        <a class="text-decoration-none text-dark" href="index.php"><i class="fas fa-home mx-2"></i> Home</a> <i class="fas mx-2 fa-angle-right"></i> <span>Balance</span>
    </div>
    <div class="main-content group">
        <div class="container d-flex justify-content-between align-items-center mt-3 px-4">
            <p class="font-weight-bold text-black-50">Balance History</p>
            <p><a href="request-balance.php" class="text-success text-decoration-none"><i class="fas fa-plus mr-2"></i> Request Balance</a></p>
        </div>

        <hr style="width:92%; border:.5px solid lightgrey;">

        <div class="container px-4">
            <p>My Balance: <i style="color:var(--green-color)" class="fas fa-coins mx-2"></i> <span style="font-size:20px;color:var(--green-color)">98</span></p>
        </div>

        <div class="container d-flex justify-content-center">
        <table class="table table-borderless table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Type</th>
                <th>Old Balance</th>
                <th>New Balance</th>
                <th>Difference (+/-)</th>
                <th>Date / Time</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Balance added</td>
                <td>0</td>
                <td>98</td>
                <td>98</td>
                <td>2019-08-10 19:14:12</td>                
            </tr>
            
        </tbody>
    </table>
    </div>
    </div>
</div>





<?php include('include/footer.php'); ?> 