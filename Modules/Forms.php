<?php
include "./includes/connection.php";

if(isset($_POST["btn_submit"])){
 // echo '<script>alert("Form successfully submitted");</script>';
 $fullname = $_POST['lending_fullname'];
 $email = $_POST['lending_email'];
 $amount = $_POST['lending_amount'];
 $address = $_POST['lending_address'];
 $city = $_POST['lending_city'];
 $state = $_POST['lending_state'];
 $zip = $_POST['lending_zip'];

 $sql = "INSERT INTO lending_form (full_name, email, address, city, state, zip, amount)
VALUES ('$fullname', '$email', '$address', '$city', '$state', '$zip', '$amount')";

if ($conn->query($sql) === TRUE) {
  echo '<script>alert("Form successfully submitted");</script>';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

?>
 
 
 
 <h5 class="card-title">Lending form</h5>

              <!-- Floating Labels Form -->
              <form class="row g-3" method="POST" action="tables-data.php?page=Forms">
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" placeholder="Your Name" name="lending_fullname">
                    <label for="floatingName">Your Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="email" class="form-control" id="floatingEmail" placeholder="Your Email" name="lending_email">
                    <label for="floatingEmail">Your Email</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="amount" class="form-control" id="floatingAmount" placeholder="Amount" name="lending_amount">
                    <label for="floatingPassword">Amount</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Address" name="lending_address" id="floatingTextarea" style="height: 100px;"></textarea>
                    <label for="floatingTextarea">Address</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="col-md-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" id="floatingCity" placeholder="City" name="lending_city">
                      <label for="floatingCity">City</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" aria-label="State" name="lending_state">
                      <option selected>Philippines</option>
                      <option value="1">China</option>
                      <option value="2">Turkmenistan</option>
                    </select>
                    <label for="floatingSelect">State</label>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingZip" placeholder="Zip" name="lending_zip">
                    <label for="floatingZip">Zip</label>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" name="btn_submit">Submit</button>
                  <button type="reset" class="btn btn-secondary" name="btn_reset">Reset</button>
                </div>
              </form><!-- End floating Labels Form -->

            </div>
          </div>