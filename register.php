<?php  include('lib/nav.php')?>

<p><strong style = "margin-left : 30%;" > Register with us here</strong></p>


<section class="wrapper">
<form style = "margin-left : 30%;" action="processregister.php" method = "POST">
<p>
<label> First Name</label>
<br>
<input type="text" name="first_name"  required>
</p>

<p>
<label> Last Name</label>
<br>
<input type="text" name="last_name" required>
</p>

<p>
<label> Email</label>
<br>
<input type="email" name="email" required>
</p>

<p>
<label> Department</label>
<br>
<input type="text" name="depart" required>
</p>

<p>
<label> Password</label>
<br>
<input type="password" name="pass" required>
</p>

<p>
 <label> Designation : </label>
 <br>
<select name ="designation" value=" " required> 
<option> Select One </option>
<option> Management Team (MT)</option>
<option> Patient </option>
</select>

</p>

<p>
 <label> Gender : </label>
 <br>
<select name ="gender" value =" " required>
<option> Select One </option>
<option> Male</option>
<option> Female </option>
</select>

</p>

<button> register </button>



</form>

</section>