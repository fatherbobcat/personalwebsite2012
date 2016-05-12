<!-- This is the form which will be required in fun.php. 
Every seperate question is divided by an empty line. The
values that correspond to the answers in the drop down
menu are numbers because I will be using them to figure 
out compatability -->

<form action="fun.php" method="post">
<fieldset>
<legend>Fill me in!</legend> 

<ol>

<li><label for="name">Name</label><input type="text" name="name"/></li>

<li><label>Age</label><input type="text" name="age"/></li>

<li>Are you a..?<select name="sex">
<option value="1">a guy</option>
<option value="10">a gal</option>
<option value="5">a puppy</option>
</select>
</li>

<li>Describe Yourself:<select name="character">
<option value="1">Smart</option>
<option value="5">Funny</option>
<option value="10">Passionate</option>
</select>
</li>

<li>Choose one:<select name="pet">
<option value="1">Dog</option>
<option value="5">Cat</option>
<option value="10">Fish</option>
</select>
</li>

<li>What would you rather have:<select name="asset">
<option value="5">House</option>
<option value="10">Car</option>
<option value="1">Money</option>
</select>
</li>

<li>Your Favorite Color:<select name="color">
<option value="1">Red</option>
<option value="10">Blue</option>
<option value="5">Yellow</option>
</select>
</li>

<li>Drink?<select name="drink">
<option value="10">Beer</option>
<option value="5">Wine</option>
<option value="1">Scotch</option>
</select>
</li>

</ol>

<input type="submit" value="Check Your Results!" name="submit"/><br/>
<input type ="reset" value="Try Again?"/>

</fieldset>
</form>