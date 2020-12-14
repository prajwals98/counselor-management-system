			
			<form id="login_form1" class="form-signin" method="post">
				<h3 class="form-signin-heading">
					<i class="icon-lock"></i> Please Login
				</h3>
				<input type="text"      class="input-block-level"   id="username" name="username" placeholder="Username" required>
				<input type="password"  class="input-block-level"   id="password" name="password" placeholder="Password" required>
				
			<center>	<button data-placement="left" title="Click Here to Sign In" id="signin" name="login" class="btn btn-info" type="submit"><i class="icon-signin icon-large"></i> Sign in</button>
				
			<button data-placement="right" title="Click Here to Sign up" id="signup" name="register" class="btn btn-info" type="button" onclick="location.href = 'register.php';">Sign Up</button>
				<br/><br/>
				<button data-placement="center" title="Forgot Password???" id="signup" name="forgot" class="btn btn-info " type="button" onclick="location.href = 'forgot.php';">Forgot Password?</button>
				
				<script type="text/javascript">
				$(document).ready(function(){
				$('#signin').tooltip('show');
				$('#signin').tooltip('hide');
				});
				</script>		
			</form>
						<script>
						jQuery(document).ready(function(){
						jQuery("#login_form1").submit(function(e){
								e.preventDefault();
								var formData = jQuery(this).serialize();
								$.ajax({
									type: "POST",
									url: "login.php",
									data: formData,
									success: function(html){
									if(html=='admin')
									{
									$.jGrowl("Loading File Please Wait......", { sticky: true });
									
									var delay = 1000;
										setTimeout(function(){ window.location = 'admin/dashboard.php'  }, delay);  
									}else if (html == 'counselor'){
									$.jGrowl("Loading File Please Wait......", { sticky: true });	
									var delay = 1000;
										setTimeout(function(){ window.location = 'Staff/dashboard_staff.php'  }, delay);
									}else if (html == 'student'){
									$.jGrowl("Loading File Please Wait......", { sticky: true });	
									var delay = 1000;
										setTimeout(function(){ window.location = 'Student/dashboard_staff.php'  }, delay);										
									}else
									{
									$.jGrowl("Please Check your username and Password", { header: 'Login Failed' });
									}
									}
								});
								return false;
							});
						});
						</script>
						
			