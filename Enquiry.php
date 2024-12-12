
<?php require "index_header.php";
?>


<div class="enquiry-main">
    <div class="Enquiry">
        <div class="encont">
            <div class="en-head">
                <h1>Lorem ipsum dolor sit amet</h1>
                <img src="./pub_img/book.PNG" alt="Background Image">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam quod mollitia nemo nulla esse.</p>
            </div>
        </div>
        <div class="en-form">
            <form action="submit_enquiry.php" method="POST">
                <h2>Enquiry Form</h2>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" >
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" >
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="text" id="phone" name="phone">
                </div>
                <div class="form-group">
                    <label for="date">Book Date</label>
                    <input type="date" id="date" name="date">
                </div>
                <div class="form-group">
                    <label for="location">Event Location</label>
                    <input type="text" id="location" name="location">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="4"></textarea>
                </div>
                <button type="submit" name="enquiry">Submit</button>
            </form>
        </div>
    </div>
   </div>
    


    <div class="liner"></div>
    
<?php require "index_footer.php";?>
