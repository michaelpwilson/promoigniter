<div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-default btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand"><a href="#">Admin Menu</a>
            </li>
<li style="margin-top: 5px;">
<div class="panel-group" id="accordion">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#introHeader" class="collapsed">
              highlight colors
            </a>
          </h4>
        </div>
        <div id="introHeader" class="panel-collapse collapse" style="height: 0px;">
          <div class="panel-body">
        <label for="secBackColor">Secondary Background:</label>
	<input type="text" name="secBackColor" class="form-control" id="secondaryBackgroundColor"/>
        <label for="secFontColor">Secondary Font Color:</label>
        <input type="text" name="secFontColor" class="form-control" id="secondaryFontColor"/>
          </div>
        </div>
      </div> 
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed">
            sections</a>
          </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse" style="height: 0px;">
          <div class="panel-body">
<?php foreach($sections as $section) { ?>
<div class="media">
      <a class="pull-left" href="#">
        <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCI+PHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiBmaWxsPSIjZWVlIj48L3JlY3Q+PHRleHQgdGV4dC1hbmNob3I9Im1pZGRsZSIgeD0iMzIiIHk9IjMyIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEycHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9zdmc+" style="width: 64px; height: 64px;">
      </a>
      <div class="media-body">
        <h4 class="media-heading"><?php echo $section['content-name']; ?></h4>
<div class="btn-group">
  <form class="col-xs-12" method="LINK" action="#<?php echo $section['content-name']; ?>">
<button class="btn btn-default"><i class="glyphicon glyphicon-pencil"></i> edit</button>
</form>
</div>
      </div>
    </div>
<?php } ?>
          </div>
        </div>
      </div>
      <div class="panel panel-danger">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a href="/logout">
              logout
            </a>
          </h4>
        </div>

        </div>
      </div> 
</div>
            </li>
        </ul>
    </div>

