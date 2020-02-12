<?php include('include/header.php'); ?> 


<div class="col-lg-6 col-md-6">
    <div class="breadcrumbs my-4">
        <a class="text-decoration-none text-dark" href="index.php"><i class="fas fa-home mx-2"></i> Home</a> <i class="fas mx-2 fa-angle-right"></i> <a class="text-decoration-none text-dark" href="all-sms.php">Sms</a> <i class="fas mx-2 fa-angle-right"></i> <span>Send</span>
    </div>
    <div class="main-content group">
        <div class="container d-flex justify-content-between align-items-center mt-3 px-4">
            <p class="font-weight-bold text-black-50">Send Sms</p>
            <p><a href="all-sms.php" class="text-success text-decoration-none"><i class="far fa-comment-dots mr-2"></i> View all Sms</a></p>
        </div>
        <hr class="mt-1 mb-4" style="width:92%; border:.5px solid lightgrey;">
        <div class="conntainer px-4">
            <form action="#" method="POST">
            <div class="form-group d-flex align-items-center">
                <label>Contacts*</label>
                <textarea type="text" placeholder="Send to ..." required class="form-control ml-3"></textarea>
            </div>
                <div class="row text-muted">
                    <div class="col-lg-5" data-mh="equal" style="display:flex; justify-content: space-between; flex-direction: column;">
                         <div class="contact-box" style="position:relative">
                            <p>Search Contact <i class="fas float-right fa-caret-down"></i></p>
                            <input type="search" placeholder="Search... " class="form-control search-contact">
                         </div>   
                         <div class="group-box" style="position:relative;">
                            <p>Search Group <i class="fas float-right fa-caret-up"></i></p>
                            <input type="search" placeholder="Search..." class="form-control search-group">
                         </div> 
                        
                    </div>
                    <div class="col-lg-7" data-mh="equal">
                        <div class="search-list bg-light " style="position:absolute;z-index:2; height:100%; width:90%;overflow-y:scroll;">
                            <ul class="list-unstyled text-center py-3">
                                <li>No Match Found !</li>
                                
                            </ul>
                        </div>
                        <p>Comma separated 10 digits mobile number.</p>
                        <ul>
                            <li>Do not repeat mobile number.</li>
                            <li>Avoid spaces.</li>
                            <li>Make sure that mobile numbers are<br>valid (10 digits numerics).</li>
                        </ul>
                    </div>
                </div>
                <div class="mt-3 form-group">
                    <div class="message-box  d-flex align-items-center">
                        <label>Message*</label>
                        <textarea id="message" placeholder="Your message ..." class="form-control ml-3" required></textarea>
                    </div>
                    <small id="remaining" style="display: inline-block;padding-left:90px" class="text-muted">Remaining characters: <b>160</b></small>
                     <small class="ml-5" id="messages"><b>0</b> message(s)</small><br>
                     <div class="d-flex flex-wrap mt-4 align-items-center justify-content-between">
                        <p class="d-flex pt-3 align-items-center">Schedule your Sms: <input class="form-control ml-3 text-center" type="datetime-local"></p>                       
                        <button type="submit" class="btn btn-outline-success">Send<i class="fas fa-paper-plane ml-2"></i></button>
                     </div>
                     
                </div>
                
                
                
            </form>
        </div>
    </div>
</div>





<?php include('include/footer.php'); ?> 


<script>
$(document).ready(function(){
    $('.contact-box p').on('click',function(){
       $(this).toggleClass('green-border');
       $('.search-contact').slideToggle();
       $('.search-contact').focus();
    });
    
    $('.search-contact').on('blur',function(){
    $(this).slideToggle();
    $('.search-list').fadeOut();
    $('.contact-box p').toggleClass('green-border');
    });
});

$('.group-box p').on('click',function(){
       $(this).toggleClass('green-border');
       $('.search-group').slideToggle();
       $('.search-group').focus();
    });
    
    $('.search-group').on('blur',function(){
    $(this).slideToggle(); 
    $('.search-list').fadeOut();
    $('.group-box p').toggleClass('green-border');
    });

$('.search-group,.search-contact').keypress(function(){
    $('.search-list').fadeIn();
})



$(document).ready(function(){
    var $remaining = $('#remaining'),
        $messages = $remaining.next();

    $('#message').keyup(function(){
        var chars = this.value.length,
            messages = Math.ceil(chars / 160),
            remaining = messages * 160 - (chars % (messages * 160) || messages * 160);

        $remaining.text(' Remaining characters: ' + remaining );
        $messages.text(messages + ' message(s)');
    });
});

</script>