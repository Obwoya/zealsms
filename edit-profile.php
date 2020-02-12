<?php include('include/header.php'); ?> 


<div class="col-lg-6 col-md-6">
    <div class="breadcrumbs my-4">
        <a class="text-decoration-none text-dark" href="index.php"><i class="fas fa-home mx-2"></i> Home</a> <i class="fas mx-2 fa-angle-right"></i> <a class="text-decoration-none text-dark" href="profile.php"> Profile</a> <i class="fas mx-2 fa-angle-right"></i> <span>Edit</span>
    </div>
    <div class="main-content group">
        <div class="container d-flex justify-content-between align-items-center mt-3 px-4">
            <p class="font-weight-bold text-black-50">Edit Profile</p>
            <p><a href="profile-detail.php" class="text-success text-decoration-none"><i class="fas fa-info-circle mr-2"></i> View Details</a></p>            
        </div>
        <hr class="mt-1 mb-4" style="width:92%; border:.5px solid lightgrey;">
        <div class="container px-4">
            <p class="float-right text-black-50 font-weight-bold">Login Details</p>
            <form action="#" method="POST">
                <div class="form-group">
                    <label>Email*</label>
                    <p class="text-muted">disarp969@client.com</p>
                </div>
                <div class="form-group ">
                    <div class="password d-flex align-items-center">
                    <label>Password*</label>
                    <input type="password" name="password" class="form-control ml-5" placeholder="Password" required>
                    </div>
                    <p class="text-muted text-right">Password should be at least 8 characters long.</p>
                </div>
                <div class="form-group ">
                    <div class="password d-flex align-items-center">
                    <label>Confirm Password*</label>
                    <input type="password" name="password" class="form-control ml-3" placeholder="Re-type password" required>
                    </div>
                    <p class="text-muted text-right">Confirm password should be same as password.</p>
                </div>
                <hr class="my-4" style="width:95%; border:.5px solid lightgrey;">
                <p class="text-right text-black-50 font-weight-bold">General Information</p>
                <div class="form-group ">   
                    <label>Company Name</label>
                    <input type="text" name="company" class="form-control " placeholder="Company name">    
                    <p class="text-muted text-right">Enter name of your Company (optional).</p>
                </div>
                <div class="form-group ">   
                    <label>Industry</label>
                    <input type="text" name="industry" class="form-control " placeholder="Industry">    
                    <p class="text-muted text-right">Enter appropriate industry that represents your business. (Optional)</p>
                </div>
                <div class="form-group ">   
                    <label>Company registration number</label>
                    <input type="text" name="reg-no" class="form-control " placeholder="Registration number">    
                </div>
                <div class="pan-vat d-flex align-items-center justify-content-between">
                    <div class="form-group">   
                            <label>VAT Number</label>
                            <input type="text" name="vat" class="form-control " placeholder="VAT Number">    
                        </div>
                        <div class="form-group">   
                            <label>PAN Number</label>
                            <input type="text" name="pan" class="form-control " placeholder="PAN Number">    
                        </div>
                </div>
                <div class="form-group d-flex align-items-center">
                    <div class="pro">   
                    <label>Profile Image</label><br>
                    <input style="cursor: pointer" type="file" name="profile">    
                    </div>
                    <div class="pic">
                        <img src="pics/user1.png" height="100px" width="100px" style="border-radius: 50%; ">
                    </div>
                 </div>
                 <div class="form-group">   
                    <label>Contact Person Name</label>
                    <input type="text" name="person-name" class="form-control " placeholder="Contact name">    
                </div>
                <div class="form-group">   
                    <label>Contact Person Number</label>
                    <input type="number" name="person-number" class="form-control" placeholder="Contact number">
                </div>
                <div class="button-group mb-3 text-right">
                    <button type="submit" class="btn btn-outline-success">Submit<i class="fas fa-paper-plane ml-2"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>





<?php include('include/footer.php'); ?> 