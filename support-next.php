
<?php include('include/header.php'); ?> 


<div class="col-lg-6 col-md-6">
    <div class="breadcrumbs my-4">
        <a class="text-decoration-none text-dark" href="index.php"><i class="fas fa-home mx-2"></i> Home</a> <i class="fas mx-2 fa-angle-right"></i> <span>Support</span>
    </div>
    <div class="main-content group">
        <div class="container d-flex justify-content-between align-items-center mt-3 px-4">
            <p class="font-weight-bold text-black-50">Support Ticket</p>
            <p><a href="support.php" class="text-success text-decoration-none"><i class="far fa-arrow-alt-circle-left mr-2"></i> Go Back</a></p>
        </div>
        <hr class="mt-1 mb-4" style="width:92%; border:.5px solid lightgrey;">
        <div class="container support1">
            <form action="#" method="POST">
                <div class="form-group">
                    <label>Name*</label>
                    <input type="text" class="form-control" placeholder="Full Name">
                </div>
                 <div class="form-group">
                    <label>Email*</label>
                    <input type="email" class="form-control" placeholder="Email">
                </div>
                 <div class="form-group">
                    <label>Give a title to the issue*</label>
                    <input type="text" class="form-control" placeholder="Your issue title">
                    <small>Please summarize your issue in 10 words or less.</small>
                </div>
                 <div class="form-group">
                    <label>Message*</label>
                    <textarea class="form-control" placeholder="Your Message..."></textarea>
                    <small>Please describe your issue or question. Be brief but detailed.</small>
                </div>
                 <div class="form-group">
                    <label>Attachments</label><br>
                    <input type="file"><br>
                    <small>Upload screenshots to assist in solving the issues.</small>
                </div>
                <div class="button-group mb-3 d-flex align-items-center justify-content-between">
                    <a href="support.php" class="btn btn-outline-info"><i class="far fa-arrow-alt-circle-left mr-2"></i>Previous</a><button class="btn btn-outline-success">Submit <i class="fas fa-paper-plane ml-2"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>





<?php include('include/footer.php'); ?> 