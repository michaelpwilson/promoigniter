<?php
  echo '<div id="map"></div>';
  core_js($site, $loggedin); ?> 
<footer class="text-center">
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Proudly Powered By <a href="http://google.co.uk">PromoIgniter</a> © 2014 - Michael Wilson <a href="http://www.mwils.co.uk">www.mwils.co.uk</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

<div class="modal fade" id="sectionLayOut" style="color:black">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Section Layout Customization</h4>
      </div>
      <div class="modal-body">
<div class="row">
                <div class="col-lg-5 col-sm-6">
		            <span>Choose a layout</span>
				<select class="form-control">
				  <option>Basic</option>
    				  <option>Beauty</option>
				  <option>Projection</option>
				  <option>Long Left</option>
				  <option>Long Right</option>
				</select>
        	</div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="https://cloud2class.com/assets/img/snip-cmyk.png" alt="Cloud2Class" style="min-width: 100%; height: auto; border: 4px solid black; box-shadow: 4px 9px 25px -10px black;">
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

 </body>
</html>
