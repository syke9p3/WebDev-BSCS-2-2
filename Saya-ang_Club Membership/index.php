<?php

include 'config.php';

// if (isset($_POST['submit'])) {
//     $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
//     $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
//     $email = mysqli_real_escape_string($conn, $_POST['email']);

//     $select = " SELECT * FROM registration WHERE email = '$email'";
//     $result = mysqli_query($conn, $select);

//     if (mysqli_num_rows($result) > 0) {
//         $error[] = 'User already exists!';
//     } else {
//         $insert = "INSERT INTO registration(first_name, last_name, email) VALUES('$first_name', '$last_name', '$email')";
//     }
// }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <form action="registration.php" id="form" method="post">
            <header>
                <hr>
                <h1 id="title" class="">Club Membership Form</h1>
                <p id="description"><i>Fill in the information below</i></p>
                <hr>
                <img src="https://www.smcc.church/wp-content/uploads/2017/10/Family-Camping-Trip-2017-web-banner.jpg"
                    alt="" style=" user-drag: none; 
                        user-select: none;
                        -moz-user-select: none;
                        -webkit-user-drag: none;
                        -webkit-user-select: none;
                        -ms-user-select: none;">
            </header>
            <hr>

            <?php

            echo var_dump($_POST);
            
            if (isset($_POST['submit'])) {
                $first_name = $_POST['first_name'];
                $last_name = $_POST['last_name'];
                $email = $_POST['email'];

                echo '<p><b>First Name:</b> ' . $first_name . '</p>';
                echo '<p><b>Last Name:</b> ' . $last_name . '</p>';
                echo '<p><b>Email:</b> ' . $email . '</p>';

            }

            ?>
            

            <div class="form-group">
                <label for="firstName" id="name-label">Full Name</label>
                <div class="col" id="name-group">
                    <div class="input-row">
                        <p for="lastName" class="sub-label"> First Name</p>
                        <input type="text" id="first_name" name="first_name" class="col-input-first" required>
                    </div>
                    <div class="input-row">
                        <p for="name" class="sub-label"> Last Name</p>
                        <input type="text" id="last_name" name="last_name" required>
                    </div>
                </div>
            </div>


            <div class="col">
                <div class="form-group">
                    <label for="email" id="email-label">Email </label>
                    <p for="email" class="sub-label"> Email Address</p>

                    <input type="email" id="email" name="email" placeholder="example@email.com"
                        pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)+$" required>
                </div>
                <!-- <div class="form-group">
                    <label for="phone" id="">Phone</label>
                    <div class="col">
                        <div class="input-row">
                            <p for="lastName" class="sub-label"> Area Code</p>
                            <input type="text" id="firstName" name="lastName" class="col-input-first" required>
                        </div>
                        <div class="input-row">
                            <p for="name" class="sub-label"> Phone Number</p>
                            <input type="text" id="lastName" name="firstName" required>
                        </div>
                    </div>
                </div> -->
            </div>
            <hr>

            <!-- <div class="form-group">
                <label for="address" id="phone-label">Address </label>
                <p class="sub-label"> Street Address</p>
                <input type="address" id="address" name="address" placeholder required>
                <p class="sub-label"> Street Address Line 2</p>
                <input type="address" id="address-2" name="address-2" placeholder>
                <div class="col">
                    <div class="form-group inside">
                        <p for="name" class="sub-label">Region</p>
                        <select id="region" name="region" required>
                            <option value="" selected disabled></option>
                        </select>
                    </div>
                    <div class="form-group inside-2">
                        <p for="name" class="sub-label"> Province</p>
                        <select id="province" name="province" required>
                            <option value="" selected disabled>Please select region first</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group inside">
                        <p for="name" class="sub-label">City</p>
                        <select id="city" name="city" required>
                            <option value="" selected disabled>Please select province first</option>
                        </select>
                    </div>
                    <div class="form-group inside-2">
                        <p for="name" class="sub-label"> Barangay</p>
                        <select id="barangay" name="barangay" required>
                            <option value="" selected disabled>Please select city first</option>
                        </select>
                    </div>
                </div>
                <p class="sub-label"> Postal / Zip Code</p>
                <input type="address" id="zip" name="zip" placeholder required>
            </div>
            <hr>

            <div class="form-group">
                <label>Birthday</label>
                <div class="col-3" id="name-group">
                    <div class="input-row">
                        <p for="birth_month" class="sub-label"> Month</p>
                        <select type="text" id="birth_month" name="birth_month" class="col-input" required>
                            <option value="" selected></option>
                            <option value="1">January</option>
                            <option value="2">February</option>
                            <option value="3">March</option>
                            <option value="4">April</option>
                            <option value="5">May</option>
                            <option value="6">June</option>
                            <option value="7">July</option>
                            <option value="8">August</option>
                            <option value="9">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                    </div>
                    <div class="input-row">
                        <p for="birth_day" class="sub-label"> Day</p>
                        <select type="text" id="birth_day" name="lastName" class="col-input" required>
                            <option value="" selected></option>
                        </select>
                    </div>
                    <div class="input-row">
                        <p for="birth_year" class="sub-label"> Year</p>
                        <select type="text" id="birth_year" name="lastName" class="col-input" required>
                            <option value="" selected></option>
                        </select>
                    </div>
                </div>
            </div>
            <hr>

            <div class="form-group">
                <label>Where did you hear about us?</label>
                <div class="checkbox-group">
                    <label><input name="referral_source" value="A Friend or Colleague" type="checkbox"
                            class="input-checkbox">A Friend or Colleague</label>
                    <label><input name="referral_source" value="Google" type="checkbox" class="input-checkbox">Tree
                        Google</label>
                    <label><input name="referral_source" value="Blog Post" type="checkbox" class="input-checkbox">Blog
                        Post</label>
                    <label><input name="referral_source" value="News Article" type="checkbox"
                            class="input-checkbox">News Article</label>
                    <label><input name="referral_source" value="Other" type="checkbox"
                            class="input-checkbox">Other</label>

                </div>
            </div>

            <div class="form-group">
                <label>
                    Membership Type
                </label>

                <div class="radio-group">
                    <label>
                        <input name="membership_type" value="Standard" type="radio" class="input-radio" />
                        Standard
                    </label>
                    <label>
                        <input name="membership_type" value="Premium" type="radio" class="input-radio" />
                        Premium
                    </label>
                    <label>
                        <input name="membership_type" value="Ultimate" type="radio" class="input-radio" />
                        Ultimate
                    </label>

                </div>
            </div>
            <div class="form-group">
                <label>
                    Preferred way to contact
                </label>
                <div class="radio-group">
                    <label><input name="contact_preference" value="Phone" type="radio"
                            class="input-radio" />Phone</label>
                    <label><input name="contact_preference" value="Email" type="radio"
                            class="input-radio" />Email</label>
                    <label><input name="contact_preference" value="Any" type="radio" class="input-radio" />Any</label>

                </div>
            </div> -->

            <div class="form-group buttons">
                <div><button type="submit" id="submit" name="submit" class="submit-button">Submit</button></div>
                <div>
                    <button type="button" class="reset-button" onclick="formReset()">Reset</button>
                </div>
            </div>
            <hr>

    </div>

    </form>
</body>
<script src="script.js"></script>


</html>