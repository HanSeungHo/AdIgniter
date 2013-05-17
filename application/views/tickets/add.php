<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Add New Ticket</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="date">Date</label>
  <div class="controls">
    <input id="date" name="date" type="text" placeholder="TODAY's DATE" class="input-small" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="acctRep">Representative</label>
  <div class="controls">
    <select id="acctRep" name="acctRep" class="input-large">
      <option>Option one</option>
      <option>Option two</option>
    </select>
  </div>
</div>

<!-- Button -->
<div class="control-group">
  <label class="control-label" for="submit"></label>
  <div class="controls">
    <button id="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</form>