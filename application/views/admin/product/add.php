  <? $this->load->view('admin/header'); ?>
<div id="page-wrapper">

            <div class="container-fluid">
                        <h1 class="page-header">
                            Dashboard <small>// Add Product</small>
                        </h1>
						
		<form action="<?php echo $this->config->item('admin_url'); ?>product/add" method="post" accept-charset="utf-8" class="form-horizontal" role="form">				
						
  <div role="tabpanel">				
   <ul class="nav nav-tabs" role="tablist">
<?php foreach($languages as $language){ ?>
<?php if($language->default == 1){ ?>
    <li role="presentation" class="active"><a href="#<?php echo $language->id; ?>" aria-controls="<?php echo $language->id; ?>" role="tab" data-toggle="tab"><?php echo $language->language_name; ?></a></li>
 

<? } else { ?>
    <li role="presentation"><a href="#<?php echo $language->id; ?>" aria-controls="<?php echo $language->id; ?>" role="tab" data-toggle="tab"><?php echo $language->language_name; ?></a></li>

<? } ?>
<? } ?>
 
</ul>

 

<!-- Tab panes -->
<div class="tab-content">
<?php foreach($languages as $language){ ?>
<?php if($language->default == 1){ ?>
 
  <div role="tabpanel" class="tab-pane fade in active" id="<?php echo $language->id; ?>">
  <br>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Product Name</label>
    <div class="col-sm-10">
      <input name="product_description[<?php echo $language->id; ?>][name]" type="text" class="form-control" id="inputEmail3" >
    </div>
  </div>
 
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Details </label>
    <div class="col-sm-10">
      <input name="product_description[<?php echo $language->id; ?>][details]" type="text" class="form-control" id="inputEmail3" >
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Meta Tags </label>
    <div class="col-sm-10">
      <input name="product_description[<?php echo $language->id; ?>][meta_tags]" type="text" class="form-control" id="inputEmail3" >
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Meta Keys </label>
    <div class="col-sm-10">
      <input name="product_description[<?php echo $language->id; ?>][meta_keys]" type="text" class="form-control" id="inputEmail3" >
    </div>
  </div>
  
  </div>
<? } else { ?>
  <div role="tabpanel" class="tab-pane fade" id="<?php echo $language->id; ?>">
   <br>
  
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Product Name</label>
    <div class="col-sm-10">
      <input name="product_description[<?php echo $language->id; ?>][name]" type="text" class="form-control" id="inputEmail3" >
    </div>
  </div>
 
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Details </label>
    <div class="col-sm-10">
      <input name="product_description[<?php echo $language->id; ?>][details]" type="text" class="form-control" id="inputEmail3" >
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Meta Tags </label>
    <div class="col-sm-10">
      <input name="product_description[<?php echo $language->id; ?>][meta_tags]" type="text" class="form-control" id="inputEmail3" >
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Meta Keys </label>
    <div class="col-sm-10">
      <input name="product_description[<?php echo $language->id; ?>][meta_keys]" type="text" class="form-control" id="inputEmail3" >
    </div>
  </div>
  
  
  </div>
<? } ?>
<? } ?>

   </div>
  </div>
 
 <hr>
 
 
  <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Category</label>
    <div class="col-sm-offset-2 col-sm-10">
		<select name="category_id" class="form-control">
 			<?php foreach($categories as $category){ ?>
				<option value="<?php echo $category->category_id; ?>"><?php echo $category->category_name; ?> </option>
			<? } ?>
		</select>
    </div>
  </div>
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">SEO Link</label>
    <div class="col-sm-10">
      <input name="url" type="text" value="" class="form-control" id="inputEmail3" >
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Price</label>
    <div class="col-sm-10">
      <input name="price" type="text" value="" class="form-control" id="inputEmail3" >
    </div>
  </div>
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Stock</label>
    <div class="col-sm-10">
      <input name="stock" type="text" value="" class="form-control" id="inputEmail3" >
    </div>
  </div>
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
    <div class="col-sm-10">
      <input name="image" type="text" value="" class="form-control" id="inputEmail3" >
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Rank</label>
    <div class="col-sm-10">
      <input type="text" name="rank" value=""class="form-control" id="inputPassword3">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Add New</button>
    </div>
  </div>
</form>

 
 
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

 

  <? $this->load->view('admin/footer'); ?>