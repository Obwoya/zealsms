<?php include('include/header.php'); ?> 

            <div class="col-lg-6 col-md-6">
                <div class="breadcrumbs my-4">
                    <a class="text-decoration-none text-dark" href="index.php"><i class="fas fa-home mx-2"></i> Home</a> <i class="fas mx-2 fa-angle-right"></i> <span>Dashboard</span>
                </div>
                <div class="main-content dashboard">
                    <div class="container py-3">
                        <div class="row text-center">
                            <div class="col-lg-3 col-md-3 pb-2">
                                <div class="image">
                                    <a href="send-sms.php">
                                        <img src="pics/smartphone.png" height="50px">
                                        <strong>Send SMS</strong>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 pb-2">
                                <div class="image">
                                    <a href="add-group.php">
                                    <img src="pics/add-group.png" height="50px">
                                    <strong>Create a Group</strong>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 pb-2">
                                <div class="image">
                                    <a href="add-contact.php">
                                    <img src="pics/add-contact.png" height="50px">
                                    <strong>Add a Contact</strong>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 pb-2">
                                <div class="image">
                                    <a href="balance.php">
                                    <img src="pics/money.png" height="50px">
                                    <strong>Balance History</strong>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <hr style="width:92%; border:.5px solid lightgrey;">
                        <div class="all">
                            <p class="ml-4 mt-4">All Utility</p>
                            <div class="row text-center">
                                <div class="col-lg-3 col-md-3 pb-2">
                                    <div class="image">
                                        <a href="all-sms.php">
                                            <img src="pics/chat.png" height="50px">
                                            <strong>All SMS</strong>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 pb-2">
                                    <div class="image">
                                        <a href="group.php">
                                            <img src="pics/team.png" height="50px">
                                            <strong>Groups</strong>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 pb-2">
                                    <div class="image">
                                        <a href="contact.php">
                                            <img src="pics/phone-book.png" height="50px">
                                            <strong>Contacts</strong>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 pb-2">
                                    <div class="more" style="cursor: pointer;">
                                        <a>
                                            <img src="pics/more.png" height="50px">
                                            <strong>More</strong>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 pb-2">
                                    <div class="image hidden-row">
                                        <a href="schedule.php">
                                            <img src="pics/sms-schedule.png" height="50px">
                                            <strong>Sms Schedule</strong>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 pb-2">
                                    <div class="image hidden-row">
                                        <a href="support.php">
                                            <img src="pics/support.png" height="50px">
                                            <strong>Support</strong>
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

<?php include('include/footer.php'); ?> 

<script>
    $('.more').click(function(){
        $('.more img').toggleClass('rotate-more');
        $('.more strong').fadeToggle('slow');
        $('.image.hidden-row').slideToggle('slow');
    })
</script>