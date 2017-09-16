<form action="#" method="post" role="form" enctype="multipart/form-data" class="facebook-share-box">
  <div class="panel panel-default">
    <div class="panel-heading"><i class="fa fa-file"></i> Update Status</div>
    <div class="panel-body">
      <div class="">
        <textarea name="message" cols="40" rows="10" id="status_message" class="form-control message" style="height: 62px; overflow: hidden;" placeholder="What's on your mind ?"></textarea>
      </div>
    </div>
    <div class="panel-footer">
      <div class="row">
        <div class="col-xs-6 bg-danger">
          <div class="form-group pull-left">
            <div class="btn-group">
              <button type="button" class="btn btn-default"><i class="icon icon-map-marker"></i> Location</button>
              <button type="button" class="btn btn-default"><i class="icon icon-picture"></i> Photo</button>
            </div>
          </div>
        </div>
        <div class=" bg-danger">
          <div class="form-group col-xs-4">
            <select name="privacy" class=" form-control privacy-dropdown  input-md">
              <option value="1" selected="selected">Public</option>
              <option value="2">Only my friends</option>
              <option value="3">Only me</option>
            </select>
            <!-- <input type="submit" name="submit" value="Post" class="col-xs-2 btn btn-primary"> -->
          </div>
          <div class="col-xs-2 bg-info pull-right">
            <input type="submit" name="submit" value="Post" class="pull-left btn btn-primary">
          </div>
        </div>

      </div>
    </div>
  </div>
</form>
