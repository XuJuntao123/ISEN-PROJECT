<!-- Content -->
<div class="jumbotron">
	<div class="container" style="padding-top: 30px;">
		<div class="row">
		  <div class="col-md-3" >USER'S FEEDBACK</div>
		  <div class="col-md-9">
				 <hr>
          <table class="table table-striped">
            <tr>
              <td>#</td>
              <td>Name</td>
              <td>Country</td>
              <td>Feedback</td>
            </tr>
            <?php
              require 'models/email_model.php';
              $model = new Email_Model();
              $model-> index();
              ?>
          </table>             
                
          
      </div>
		</div>
	</div>
</div>
</div>
