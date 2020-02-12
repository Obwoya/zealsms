<?php include('include/header.php'); ?> 


<div class="col-lg-6 col-md-6">
    <div class="breadcrumbs my-4">
        <a class="text-decoration-none text-dark" href="index.php"><i class="fas fa-home mx-2"></i> Home</a> <i class="fas mx-2 fa-angle-right"></i> <span>Support</span>
    </div>
    <div class="main-content group">
        <div class="container d-flex justify-content-between align-items-center mt-3 px-4">
            <p class="font-weight-bold text-black-50">Support Ticket</p>
            <!-- <p><a href="send-sms.php" class="text-success text-decoration-none"><i class="fas fa-paper-plane mr-2"></i> Send Sms</a></p> -->
        </div>
        <hr class="mt-1 mb-4" style="width:92%; border:.5px solid lightgrey;">
        <div class="container support">
            <h5 class="text-center font-weight-bold d-block text-black-50">Complete the form below for support!</h5>
            <p class="text-muted my-3 ">If you cannot find your answers to your questions in the <a style="color: var(--pri-color)" href="faq.php">FAQ's</a>, then fill up the below form to submit your support ticket. Our support team will answer your questions as soon as possible.  The standard time zone of Nepal from Coordinated Universal Time (UTC) is +5:45. Our official support timing is from 11:15 PM – 7:15 AM EST.</p>
            <p class="font-weight-bold text-black-50">Select a statement that best describes your need for support.*</p>
            <div class="row">
                <div class="col-lg-4">
                    <form action="support-next.php" method="GET">
                    <label>
                        <input type="radio" name="issue" id="technical" value="tech"><span class="ml-3">Technical Issues</span>
                    </label>
                </div>
                <div class="col-lg-4">
                    <label>
                        <input type="radio" name="issue" id="account" value="account"><span class="ml-3">Accounting/Billing</span>
                    </label>
                </div>
                <div class="col-lg-4">
                    <label>
                        <input type="radio" name="issue" id="billing" value="sales"><span class="ml-3">Pre-sales questions</span>
                    </label>
                </div>
            </div>
            <div id="technical">
            <p class="font-weight-bold text-black-50 my-3">Select what covers the area you're having issues with.*</p>
            <div class="form-group">
            <select class="form-control" required name="issues" >
                <option selected disabled value="#">Select a common issue:</option>
                <option value="1">Fatal error / site crash</option>
                <option value="2">Seelct a common issue:</option>
                <option value="3">Seelct a common issue:</option>
                <option value="4">I'm not sure.</option>
            </select>
            </div>
            </div>
            <div id="account">
            <p class="font-weight-bold text-black-50 my-3">Select an option that describes your account/billing concern.*</p>
            <div class="form-group">
            <select class="form-control" required name="issues" id="account">
                <option selected disabled value="#">Select a common issue:</option>
                <option value="1">Fatal error / site crash</option>
                <option value="2">Seelct a common issue:</option>
                <option value="3">Seelct a common issue:</option>
                <option value="4">Seelct a common issue:</option>
            </select>
            </div>
            </div>
            <div id="billing">
            <p class="font-weight-bold text-black-50 my-3">Select an option that describes your question.*</p>
            <div class="form-group">
            <select class="form-control" required name="issues" id="billing">
                <option selected disabled value="#">Select a common issue:</option>
                <option value="1">Fatal error / site crash</option>
                <option value="2">Seelct a common issue:</option>
                <option value="3">Seelct a common issue:</option>
                <option value="4">Seelct a common issue:</option>
            </select>
            </div>
            </div>
            <div class="button-group mb-2 text-right">
                <button type="submit" class="btn btn-info">Next</button>
            </div>
            </form>
        </div>
    </div>
</div>





<?php include('include/footer.php'); ?> 

<script>
    $('.support .row #technical').click(function(){
        $('div#technical').show();
        $('div#account').hide();
        $('div#billing').hide();
    });
    $('.support .row #account').click(function(){
        $('div#technical').hide();
        $('div#account').show();
        $('div#billing').hide();
    });
    $('.support .row #billing').click(function(){
        $('div#technical').hide();
        $('div#account').hide();
        $('div#billing').show();
    })
</script>