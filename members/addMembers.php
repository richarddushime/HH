
   <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
               
               
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1 style="text-align:center;color:darkblue;">CHURCH MANAGEMENT INFORMATION SYSTEM <span><img src="cmis logo.png" alt="cmis logo" height="100px" width="130px"></span></h1>
				
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            
                            <form method="POST" autocomplete="on"> 
                                <h1> CMIS Create account </h1> 
                                

                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">First Name</label>
                                    <input id="usernamesignup" name="fname" required="required" type="text" placeholder="Joe" />
                                </p>
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u" > Middle Name(optional)</label>
                                    <input id="usernamesignup" name="sname" type="text" placeholder="Van"/> 
                                </p>
								<p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Last Name</label>
                                    <input id="usernamesignup" name="lname" required="required" type="text" placeholder="Dersa" />
                                </p>
								<p> 
                                    <label for="usernamesignup" class="uname" >Gender</label>
                                    
									 <select name="gender" id="usernamesignup" required="required" type="text">
  <option value="Select Gender">Select Gender</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>

</select> 
                                </p>
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Date Of Birth</label>
                                    <input id="usernamesignup" type="date" name="birthday" min="1900-01-02" />
                                </p>
								<p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Residence</label>
                                    <input id="usernamesignup" name="residence" required="required" type="text" placeholder="Kigali" />
                                </p>
								<p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Place of Birth</label>
                                    <input id="usernamesignup" name="pob" required="required" type="text" placeholder="Mbarara" />
                                </p>
								<p> 
                                    <label for="usernamesignup" class="uname" >Ministry</label>
                                    <select name="ministry" id="usernamesignup" required="required" type="text">
  <option value="None">None</option>
  <option value="Pastor">Pastor</option>
  <option value="publishing">Publishing</option>
  <option value="Hostessing">Women Ministries</option>
  <option value="Media and IT">Media and IT</option>
  <option value="Sabbath School">Sabbath School</option>
</select> 

                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                    <input id="emailsignup" name="email" required="required" type="email" placeholder="joelvan@mail.com"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Mobile Number </label>
                                    <input id="passwordsignup" name="mobile" required="required" type="text" placeholder="eg.0700000000"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Password </label>
                                    <input id="passwordsignup_confirm" name="password" required="required" type="password" placeholder="eg. MAtduhwdb54."/>
                                </p>
                                
                               
                                <p> 
                                    <label for="usernamesignup" class="uname" >Marital Status</label>
                                    
									 <select name="marital_status" id="usernamesignup" required="required" type="text">
  <option value="Select Marital status">Select Marital Status</option>
  <option value="Married">Married</option>
  <option value="Single">Single</option>

</select> 
                                </p>
                                
                                </p>
                                <p STYLE="FONT-FAMILY:SERIF;COLOR:BLACK;TEXT-ALIGN:CENTER;"><fa-bold>PLEASE IF YOU ARE MARRIED FILL IN THE FOLLOWING FORM, if u are single move to the bottom of the form</fa-bold></p>
								<section STYLE="back-ground:blue;">
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Date Of Marriage</label>
                                    <input id="usernamesignup" type="date" name="marriage_date" min="1900-01-02" >
                                </p>
								
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Spouse Name</label>
                                    <input id="usernamesignup" name="spousename" type="text" placeholder="Full Name" />
                                </p>
								<p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Spouse Mobile no.</label>
                                    <input id="usernamesignup" name="spousemoblie" type="text" placeholder="070000000" />
                                </p>
								<p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Pastor in charge</label>
                                    <input id="usernamesignup" name="mpastor" type="text" placeholder="Full name" />
                                </p>
								 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Marriage Church</label>
                                    <input id="usernamesignup" name="mchurch" type="text" placeholder="Holy Spirit Church" />
                                </p>
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Best Man/ witness1</label>
                                    <input id="usernamesignup" name="wit1" type="text" placeholder="Full name" />
                                </p>
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Matron/ witness2</label>
                                    <input id="usernamesignup" name="wit2" type="text" placeholder="Full name" />
                                </p>
                               
						

</section>
<div class="control-group">
                                          <div class="controls">
 <button name="save" class="btn btn-info" id="save" data-placement="right" title="Click to Save"><i class="icon-plus-sign icon-large"> Save</i></button>
												<script type="text/javascript">
	                                            $(document).ready(function(){
	                                            $('#save').tooltip('show');
	                                            $('#save').tooltip('hide');
	                                            });
	                                            </script>
                                          </div>
                                        </div>
                                </form>

								
                              
                         
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
                                
                                        
										
								
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                  				 
<?php
if (isset($_POST['save'])){
  $fname = $_POST['fname'];
  $sname = $_POST['sname'];
  $lname = $_POST['lname'];
  $marital_status=$_POST['marital_status'];
  $Gender = $_POST['gender'];
  $birthday = $_POST['birthday'];
  $residence= $_POST['residence'];
  $pob = $_POST['pob'];
  $ministry = $_POST['ministry'];
  $mobile= $_POST['mobile'];
  $email= $_POST['email'];
  $password = $_POST['password'];
  $wit1=$_POST['wit1'];
  $wit2=$_post['wit2'];
  $mpastor=$_post['mpastor'];
  $mchurch=$_post['mchurch'];
  $marriage_date=$_POST['marriage_date'];
  $spousename=$_POST['spousename'];
  $spousemobile=$_Post['spousemobile'];
  
  
  $query = @mysqli_query($conn,"select * from members where  mobile = '$mobile'  ")or die(mysqli_error());
  $count = mysqli_num_rows($query);
  
  if ($count > 0){ ?>
  <script>
  alert('This Member Already Exists');
  window.location = "index.php#toregister";
  </script>
  <?php
  }else{
  mysqli_query($conn,"insert into members (fname,sname,lname,marital_status,wit2,mpastor,mchurch,marriage_date,spousename,spousemobile,wit1,Gender,birthday,residence,pob,ministry,mobile,email,thumbnail,password,id) 
  values('$fname','$sname','$lname','$marital_status','$wit1','$wit2','$mpastor','$mchurch','$marriage_date','$spousename','$spousemobile','$Gender','$birthday','$residence','$pob','$ministry','$mobile','$email','uploads/none.png','$password','$mobile')")or die(mysqli_error());
  
  mysqli_query($conn,"insert into activity_log (date,username,action) values(NOW(),'$admin_username','Added member $mobile')")or die(mysqli_error());
  ?>
  <script>
  
  alert("Member Successfully added continue to login", { header: 'Member add' });
  window.location = "index.php";
  </script>
  <?php
  }
  }?>