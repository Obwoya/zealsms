<?php include('include/header.php'); ?> 


<div class="col-lg-6 col-md-6">
    <div class="breadcrumbs my-4">
        <a class="text-decoration-none text-dark" href="index.php"><i class="fas fa-home mx-2"></i> Home</a> <i class="fas mx-2 fa-angle-right"></i> <span>Groups</span>
    </div>
    <div class="main-content group">
        <div class="container d-flex justify-content-between align-items-center mt-3 px-4">
            <p class="font-weight-bold text-black-50">All Groups</p>
            <p><a href="add-group.php" class="text-success text-decoration-none"><i class="fas fa-plus mr-2"></i> Create a group</a></p>
        </div>
        <div class="container d-flex justify-content-center">
        <table class="table table-borderless table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Front-End </td>
                <td>Members in Frontend Department</td>
                <td><a href="#"><i class="far fa-edit mx-2 text-info"></i></a> <a href="#"><i class="far fa-trash-alt mx-2 text-danger"></i></a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Back-End</td>
                <td>Members in Backend Department</td>
                <td><a href="#"><i class="far fa-edit mx-2 text-info"></i></a> <a href="#"><i class="far fa-trash-alt mx-2 text-danger"></i></a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Office Staffs</td>
                <td>This is the group for the office staffs.</td>
                <td><a href="#"><i class="far fa-edit mx-2 text-info"></i></a> <a href="#"><i class="far fa-trash-alt mx-2 text-danger"></i></a></td>
            </tr>
            
        </tbody>
    </table>
        </div>
    </div>
</div>





<?php include('include/footer.php'); ?> 