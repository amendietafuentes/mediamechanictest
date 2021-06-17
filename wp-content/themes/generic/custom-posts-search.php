<div class="container custom-posts-form">
	<form action="<?php echo site_url();?>/search" method="get">
			<div class="container">
				<div class="row">
				    <div class="col-12 col-sm-12 col-form">
						<label for="search"><strong>Search:</strong></label>
						<input id="ctp-search-field" type="text" name="search_text" placeholder="Please type a value to get results..." value="<?php if(isset($_GET['s'])){ print $_GET['s']; } ?>">
					</div>
				 </div>
				 <div class="row">
					<div class="col-4 col-sm-12 col-form">
						<label for="category"><strong>Category:</strong></label>
						<select name="search_type" id="search_type">
							<option value="">Select a Category...</option>
							<option value="app-web">App Web</option>
							<option value="ecommerce">Ecommerce</option>
							<option value="landing-pages">Landing Pages</option>
						</select>
					</div>
					<div class="col-4 col-sm-12 col-form">
						<label for="category"><strong>State:</strong></label>
						<select name="search_state" id="search_state">
							<option value="">Select a State...</option>
							<option value="active">Active</option>
							<option value="completed">Completed</option>
							<option value="discarded">Discarded</option>
						</select>
					</div>
					<div class="col-3 col-sm-12 col-form text-right">
						<input class="button-primary" type="submit" value="SEARCH" />
					</div>
				</div>	
			</div>
	</form>
</div>