<!-- Content -->
<div class="jumbotron">
	<div class="container" style="padding-top: 30px;">
		<div class="row">
		  <div class="col-md-4" ><img src="<?php echo PHOTOS ?>FQ.png" style="width:300px;height:130px;margin-top:60px;" ></div>
		  <div class="col-md-8">
			 <h1>F&Q </h1>
				 <hr>
          <div class="accordion">
              <?php 
                require "models/answer_model.php";
                $model = new answer_model();
                $model->index();
               ?>
               
                
             <!-- <input type="reset" id="button" value="重置" class="btn btn-primary" />
             --><form  method="POST" action="index.php?controllers=faqtable&method=addanswer&kid=<?php echo $_GET['kid'] ?>";>
                
              <textarea name="fname" rows="10" required="required" class="form-control" placeholder="Less than 150 words ^3^"></textarea><br/>
              <input type="hidden" name="question_id" value="<?php echo $_GET['kid'] ?>">
              <button type="reset" class="btn btn-primary" >Reset</button>
              <button name="submitbtn" type="submit" class="btn btn-primary" >GO</button></div>
             <!-- <input type="reset" id="button" value="重置" class="btn btn-primary" />
             -->
              </form>
              </div>
              </div>
	        </div>
		</div>
	</div>
</div>
</div>

<div id="footer" style="background-color:#C0B283;clear:both;text-align:center;">Made in China</div>
