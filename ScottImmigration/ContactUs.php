<?php include 'header.php';?>

<section class="section-banner contact-banner">
        <div class="container">
        <div class="row">
        <div class="us-citizen-header">
        <h1><span>Contact Us</span></h1>
        <p><i>Contact our helpful Customer Care Professionals.</i></p>
        </div>
        </div>
        </div>
        </section>

        <section class="contact-section">
        <form>
        <div class="contact-details">
        <div class="container">
        <div class="row">

        <div class="col-sm-6 form-group">
        <label>Name and Surname</label>
        <input type="text" class="form-control"  placeholder="Name"/>
        </div>

        <div class="col-sm-6 form-group">
        <label>Email</label>
        <input type="email" class="form-control"  placeholder="Email"/>
        </div>

        <div class="col-sm-6 form-group">
        <label>Mobile No</label>
        <input type="text" class="form-control"  placeholder="Mobile No"/>
        </div>

        <div class="col-sm-6 form-group">
        <label>Subject</label>
        <select class="form-control">
        <option value="0">Subject</option>
        <option value="1">Assistance with my form</option>
        <option value="2">Refund Request</option>
        <option value="3">Other</option>
        </select>
        </div>

        <div class="col-sm-12 form-group">
        <label>Your Message</label>
        <textarea class="form-control" rows="5" cols="1" placeholder="Message"></textarea>
        </div>

        <div class="col-sm-12 form-group">
        <label class="privacy-label"><input type="checkbox" />I have read and understood the <a href="#">Privacy Policy</a></label>
        </div>

        <div class="col-sm-12 form-group">
        <button type="button" class="btn btn-danger"><i class="mdi mdi-send mr-2"></i>Submit</button>
        </div>

        

        </div>
        </div>
        </div>
        </form>
        </section>

<?php include 'footer.php';?>
