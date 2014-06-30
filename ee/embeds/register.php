{exp:user:register form:name="registration_form" return="stuffweteach/"}
<h2>Create a user account to register for this course.</h2>
<p><label for="username">Username:</label><input type="text" name="username" class="txt" size="40" /></p>
<p><label for="screen_name">Screen Name:</label><input type="text" name="screen_name" class="txt" size="40" /></p>
<p><label for="email">Email Address:</label><input type="text" name="email" class="txt" size="40" /></p>
<p><label for="password">Password:</label><input type="password" name="password"  class="txt" size="40" /></p>
<p><label for="password_confirm">Confirm Password:</label><input type="password" name="password_confirm" class="txt" size="40" /></p>
<p><label for="captcha">Please enter in the word you see below:</label> <input type="text" name="captcha" class="txt" size="40" /></p>
<p class="captcha">{captcha}</p>
<input type="submit" class="btn" value="Submit" />
{/exp:user:register}
