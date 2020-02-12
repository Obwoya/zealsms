<?php include('include/header.php'); ?> 


<div class="col-lg-6 col-md-6">
    <div class="breadcrumbs my-4">
        <a class="text-decoration-none text-dark" href="index.php"><i class="fas fa-home mx-2"></i> Home</a> <i class="fas mx-2 fa-angle-right"></i> <a class="text-decoration-none text-dark" href="group.php">Group</a> <i class="fas mx-2 fa-angle-right"></i> <span>Add</span>
    </div>
    <div class="main-content group">
        <div class="container d-flex justify-content-between align-items-center mt-3 px-4">
            <p class="font-weight-bold text-black-50">Group Details</p>
            <p><a href="group.php" class="text-success text-decoration-none"><i class="fas fa-users mr-2"></i> View Groups</a></p>
        </div>
        <hr class="mt-1 mb-4" style="width:92%; border:.5px solid lightgrey;">
        <div class="container px-4">
            <form action="#" method="POST">
                <div class="form-group d-flex align-items-center justify-content-between">
                    <label class="label">Name*</label>
                    <input class="form-control w-75 ml-3" type="text" placeholder="Group Name" maxlength="50" required>
                </div>
                <div class="form-group d-flex align-items-center justify-content-between">
                    <label class="label">Description</label>
                    <textarea class="form-control w-75 ml-3" style="height:150px" type="text" placeholder="Group Description" maxlength="200"></textarea>
                </div>
                <div class="button-group text-right mt-4">
                    <button type="submit" class="btn btn-outline-success">Add Group<i class="fas fa-paper-plane ml-2"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>





<?php include('include/footer.php'); ?> 