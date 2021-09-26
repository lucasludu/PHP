<?php include_once("header.php"); ?>
<div class="container">
    <form action="formulario.php" method="POST">

        <div class="profile">

            <h1>Contact Form</h1>
            <legend>
                <h2><span class="number">1</span> Your Basic Info</h2>
            </legend>

            <div class="input-group mb-3">

                <span class="input-group-text">First and Last name</span>
                <input type="text" name="firstname" placeholder="First name" class="form-control">
                <input type="text" name="lastname" placeholder="Last name" class="form-control">

            </div>

            <div class="input-group mb-3">

                <span class="input-group-text">Email</span>
                <input type="email" name="email" placeholder="user@myapp.com" class="form-control">

            </div>

            <div class="input-group mb-3">

                <span class="input-group-text">Password</span>
                <input type="password" name="password" class="form-control" placeholder="Password">

            </div>

            <div class="input-group mb-3">

                <label class="input-group-text">Birthday: </label>
                <input type="date" class="form-control" name="birthday" required>

            </div>

            <div class="input-group mb-3">

                <span class="input-group-text">Sex </span>
                <div class="form-check form-check-inline my-2 mx-2">
                    <input class="form-check-input" type="radio" name="sex" id="male" value="Male">
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check form-check-inline my-2 mx-2">
                    <input class="form-check-input" type="radio" name="sex" id="famale" value="Famale">
                    <label class="form-check-label" for="famale">Famale</label>
                </div>

            </div>

        </div>


        <div class="interest">

            <legend>
                <h2><span class="number">2</span> Your Profile</h2>
            </legend>
            
            <div class="form-floating">

                <textarea class="form-control mb-3" name="aboutYou" placeholder="Leave a comment here" id="about_you" style="height: 100px"></textarea>
                <label for="about_you">Comments About You</label>

            </div>

            <div class="form-group mb-3">

                <span class="input-group-text">Role</span>
                <select 
                    name="user_role" 
                    id="role" 
                    class="form-select form-select-lg mb-3">
                    <optgroup label="Web">
                        <option value="frontend_developer">Front-End Developer </option>
                        <option value="backend_developer"> Back-End Developer </option>
                        <option value="python_developer"> Python Developer </option>
                        <option value="qa_automation"> QA Automation </option>
                        <option value="web_designer"> Web Designer </option>
                        <option value="php_developer"> PHP Developer </option>
                    </optgroup>
                    <optgroup label="Movile">
                        <option value="android_developer">Android Developer </option>
                        <option value="ios_developer"> iOS Developer </option>
                        <option value="mobile_designer"> Mobile Designer </option>
                    </optgroup>
                </select>

            </div>

            <div class="input-group mb-3">

                <label class="input-group-text">Interests:</label>
                <div class="form-check my-2 mx-2">
                    <input class="form-check-input" name="interest_database" type="checkbox">
                    <label class="form-check-label" for="flexCheckDefault">Data Base</label>
                </div>
                <div class="form-check my-2 mx-2">
                    <input class="form-check-input" name="interest_design" type="checkbox">
                    <label class="form-check-label" for="flexCheckChecked">Design</label>
                </div>
                <div class="form-check my-2 mx-2">
                    <input class="form-check-input" name="interest_business" type="checkbox">
                    <label class="form-check-label" for="flexCheckDefault">Business</label>
                </div>
                <div class="form-check my-2 mx-2">
                    <input class="form-check-input" name="interest_unittest" type="checkbox">
                    <label class="form-check-label" for="flexCheckChecked">Unit Test</label>
                </div>
                <div class="form-check my-2 mx-2">
                    <input class="form-check-input" name="interest_clouddevelopment" type="checkbox">
                    <label class="form-check-label" for="flexCheckDefault">Cloud Development</label>
                </div>
                <div class="form-check my-2 mx-2">
                    <input class="form-check-input" name="interest_webdevelopment" type="checkbox">
                    <label class="form-check-label" for="flexCheckChecked">Web Development</label>
                </div>

            </div>

        </div>

        <div class="d-grid gap-2">
            <button class="btn btn-primary" type="submit">Send</button>
            <button class="btn btn-primary" type="reset">Reset</button>
        </div>



    </form>
</div>
<?php include_once("footer.php"); ?>