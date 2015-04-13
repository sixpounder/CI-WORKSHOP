<?php echo form_open('users/auth',  array('class'=> "")); ?>
  <div class="row">
    <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12">
      <div class="form-group">
        <label class="control-label" for="email">Email:</label>
        <input class="form-control" type="text" size="20" id="email" name="email"/>
      </div>
      <div class="form-group">
        <label class="control-label" for="password">Password:</label>
        <input class="form-control" type="password" size="20" id="passowrd" name="password"/>
      </div>
      <?php if(isset($invalid) && $invalid == TRUE): ?>
        <div class="alert alert-warning">
          <?php echo validation_errors(); ?>          
        </div>
      <?php endif ?>
      <div class="text-center mt60">
        <input type="submit" class="btn btn-lg btn-primary" value="Login"/>  
      </div>
      
    </div>
  </div>
</form>