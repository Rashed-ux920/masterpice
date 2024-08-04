
        <a href="index.php">
            <!-- <img src="imeg/logo.png" alt="the logo of the company" class="img"> -->
             handyman 
        </a>
        <!-- <form class="search" id="search">
            <input type="text" name="search" id="search" placeholder="search for...">
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form> -->
        <nav class="menu menu-1">
            <ul>
              <li><a href="#home">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#blog">Blog</a></li>
              <li><a href="#contact">contact</a></li>
            </ul>
        </nav>
          
        
        <div class="flex menu menu-1">
            <div class="block">
                <a href="#" id="openPopupBtn" class="getin">
                    signin
                </a>
            </div>

            <div id="popupForm" class="popup">
                <div class="popup-content">
                    <span class="close">&times;</span>
                    <h2>Sign In</h2>
                    <form action="#" class="form2">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" required>
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
            <div class="block">
                <a href="#" class="getin" id="openSignUpPopupBtn">
                    signup
                </a>
            </div>

            <div id="signUpPopupForm" class="popup">
                <div class="popup-content">
                    <span class="closesignup">&times;</span>
                    <br>
                    <form action="#" class="form2">
                        <label for="signUpUsername">Username:</label>
                        <input type="text" id="signUpUsername" name="username" required>
                        <label for="signUpEmail">Email:</label>
                        <input type="email" id="signUpEmail" name="email" required>
                        <label for="signUpPassword">Password:</label>
                        <input type="password" id="signUpPassword" name="password" required>
                        <label for="signUpConfirmPassword">Confirm Password:</label>
                        <input type="password" id="signUpConfirmPassword" name="confirm-password" required>
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        
        </div>