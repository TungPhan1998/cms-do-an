<div class="container">
	<div class="account-login">
		<h1 data-translate="customer.login.heading" class="h-login">Login or Create an Account</h1>
	</div>

	<div class="login_content">
		<div class="registered-users">
			<div class="form-vertical">
				<form method="post" action="/account/login" id="customer_login" accept-charset="UTF-8">
					<input type="hidden" name="form_type" value="customer_login">
					<input type="hidden" name="utf8" value="✓">
          <div class="row">
            <div class="col-md-6">
              <div class="new-users">
                <h2 data-translate="customer.login.register">New Customers</h2>
                <p data-translate="customer.login.register_content">By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="page-title">
                <h2 data-translate="customer.login.title">Registered Customers</h2>
                <p data-translate="customer.login.content" style="padding: 10px 0 0 0;">If you have an account with us, please log in.</p>
              </div>
              <div class="form-box" style="padding: 5px 0 0 0;">
                <div class="content">
                  <ul class="form-list" style="margin: 0; padding: 0">
                    <li>
                      <label for="CustomerEmail" class="hidden-label"><span data-translate="customer.login.email" style="font-weight: normal;">Email Address</span><em>*</em></label>
                    </li>
                    <li style="padding: 0 0 25px 0;">
                    	<input type="email" name="customer[email]" id="CustomerEmail" class="input-full" autocorrect="off" autocapitalize="off" autofocus="" required="">
                    </li>

                    <li>
                      <label for="CustomerPassword" class="hidden-label"><span data-translate="customer.login.password" style="font-weight: normal;">Password</span><em>*</em></label>  
                    </li>
                    <li style="padding: 0 0 50px 0;">
                    	<input type="password" value="" name="customer[password]" id="CustomerPassword" class="input-full" required="">
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 login-button">
              <button type="button" title="Create an Account" class="btn-button bordered" onclick="window.location='/account/register';" style="margin: 1.4em 0 0;float: right;">
                	<span data-translate="customer.login.register_button">Create an Account</span>
              </button>
            </div>
            <div class="col-md-6 login-button">
              <div class="buttons-set">
                
                <a href="#recover" id="RecoverPassword" data-translate="customer.login.forgot_password">Forgot your password?</a>
                
                <input type="submit" class="btn-button bordered" data-translate="customer.login.log_in" value="Log in" style="margin: 1.4em 0 0; float: right;">
              </div>
            </div>
          </div>
          </form>
			</div>
		</div>
	</div>
</div>