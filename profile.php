<?php include('include/header.php'); ?> 


<div class="col-lg-6 col-md-6">
    <div class="breadcrumbs my-4">
        <a class="text-decoration-none text-dark" href="index.php"><i class="fas fa-home mx-2"></i> Home</a> <i class="fas mx-2 fa-angle-right"></i> <span>Profile</span>
    </div>
    <div class="main-content group">
        <div class="container d-flex justify-content-between align-items-center mt-3 px-4">
            <p class="font-weight-bold text-black-50">My Profile</p>
            <p><i style="color:var(--green-color)" class="fas fa-coins mr-2"></i> <span style="font-size:20px;color:var(--green-color)">98</span></p>
        </div>
        <hr class="mt-1 mb-4" style="width:92%; border:.5px solid lightgrey;">
        <div class="container px-4">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card" style="border:none;box-shadow:0 1px 10px grey;border-radius: 50% 0 50% 0">
                        <div class="profile-pic">
                            <img src="pics/prasid.jpg" class="img-fluid" style="border-radius: 50% 0 50% 0">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card-details pt-4" style="font-size:1.1em;">
                        <pre>PRASID KAYASTHA</pre>
                        <small class="text-muted">disarp969@client.com</small><br>
                        <small class="text-muted">9813822002</small> 
                        <p><a href="edit-profile.php" class="btn mt-5 btn-outline-info"><i class="fas fa-cog mr-2"></i> Edit Profile</a></p> 
                        <p><a href="profile-detail.php" class="btn btn-outline-info"><i class="fas fa-info-circle mr-2"></i> View Details</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<?php include('include/footer.php'); ?> 