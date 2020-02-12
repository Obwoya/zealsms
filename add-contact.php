<?php include('include/header.php'); ?> 


<div class="col-lg-6 col-md-6">
    <div class="breadcrumbs my-4">
        <a class="text-decoration-none text-dark" href="index.php"><i class="fas fa-home mx-2"></i> Home</a> <i class="fas mx-2 fa-angle-right"></i> <a class="text-decoration-none text-dark" href="contact.php">Contact</a> <i class="fas mx-2 fa-angle-right"></i> <span>Add</span>
    </div>
    <div class="main-content group">
        <div class="container d-flex justify-content-between align-items-center mt-3 px-4">
            <p class="font-weight-bold text-black-50">Contact</p>
            <p><a href="contact.php" class="text-success text-decoration-none"><i class="far fa-address-book mr-2"></i> View all Contact</a></p>
        </div>
        <hr class="mt-1 mb-4" style="width:92%; border:.5px solid lightgrey;">
        <div class="container px-4">
            <pre class="text-muted">IMPORT FROM EXCEL FILE</pre>
            <form action="#" method="POST">
                <div class="form-group">
                    <input type="file" name="file" required style="outline:none; cursor:pointer">
                </div>
                <div class="text-muted my-1">
                    <small>Select import file. Should be an excel format file. (.csv, .xls, .xlsx)</small>
                </div>
                <div class="button-group text-right ">
                    <button type="submit" class="btn btn-outline-success"><i class="fas fa-file-download mr-2"></i>Import</button>
                </div>
            </form>
        </div>
        <hr style="width:92%; border:.5px solid lightgrey;">
        <div class="container px-4">
            <pre class="text-muted">ADD MANUALLY</pre>
            <form action="#" method="POST">
                <div class="row mb-2">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Name*</label>
                            <input type="text" name="name" placeholder="Contact Name" required class="form-control" maxlength="30">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Phone Number*</label>
                            <input type="number" placeholder="Contact Number" required class="form-control" onKeyPress="if(this.value.length==10) return false;">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" placeholder="Contact Description" maxlength="200"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-end">
                        <div class="btn-group mb-3">
                            <button type="submit" class="btn btn-outline-success">Submit<i class="fas fa-paper-plane ml-2"></i></button>
                        </div>
                    </div>
                </div> 
            </form>
        </div>
    </div>
</div>





<?php include('include/footer.php'); ?> 