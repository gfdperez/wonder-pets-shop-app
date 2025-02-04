<input class="input_lname" type="text" name="LName" placeholder="Last Name"/>
				<input class="input_fname" type="text" name="FName" placeholder="First Name"/>
				<input class="input_mobile" type="text" maxlength="11" name="mobile" placeholder="Mobile No."/>
				<input class="input_home" type="text" name="home" placeholder="Home Address"/>
				<input class="input_email" type="text" name="email" placeholder="Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"/>
				<input class="input_pass" type="password" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"/>
				<input class="input_conpass" type="password" name="conpass" placeholder="Confirm Password" title="Must be equal to your password to confirm"/>
				<!--<div class="error_box"><div class="error_mess">Hello!</div></div>-->
				<button class="signup_button" type="submit">SIGN UP</button>