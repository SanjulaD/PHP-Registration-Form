<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact Form</title>
    <link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="container">
      <div class="row">
          <div class="col-xl-8 offset-xl- py-5">
              <h1>Contact Form</h1>
              <p class="lead">This is the first demo PHP contact form sone by me.Bootstrap form with PHP and AJAX</p>
              <form action="contact.php" method="post" role="form" id="contact-form">
                <div class="message"></div>
                  <div class="controls">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="form_name">First Name *</label>
                          <input id="form_name" type="text" name="name" class="form_control" placeholder="Please enter user name" required data-error="First Name is required">
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form_group">
                          <label for="form_lastname">Last Name *</label>
                          <input type="text" name="surname" id="form_lastname" placeholder="Please enter Last Name" required data-error="Last Name is required">
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-email">
                        <label for="form_email">E-Mail*</label>
                        <input type="email" id="form_email" name="email" class="form_control" placeholder="Please enter email" required data-error="E-Mail is required">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form_group">
                        <label for="form_need">Please Specify your need*</label>
                        <select name="need" id="form_need" placeholder="Please enter your need" required" data-error="Please Specify your need">
                        <option value=""></option>
                        <option value="Reqeust Quotation">Request Quotation</option>
                        <option value="Reqeust Order Status">Reqeust Order Status</option>
                        <option value="Reqeust Copy Of an invoice">Reqeust Copy Of an invoice</option>
                        <option value="other">Other</option>
                        </select>
                        <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <p class="text-muted">
                      <strong>*</strong>These Fields are required.
                    </p>
                  </div>
                  <div class="col-md-12">
                    <div class="form_group" id="msg">
                      <label for="form_message">Message</label>
                      <textarea name="message" id="form_message" placeholder="Message for me" required="required" data-error="Please, Leasve us massage"></textarea>
                      <div class="help-block with-errors"></div>
                  </div>
                </div>
              </form>
          </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="contact.js"></script>
  </body>
</html>
