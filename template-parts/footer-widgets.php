<div id="fh5co-footer">
			<div class="row">
				<div class="col-md-6">
					<?php
                        if(is_active_sidebar('footer_left')){
                            dynamic_sidebar('footer_left');
                        }
                    ?>
				</div>
				<div class="col-md-6 fh5co-copyright">
                <?php
                        if(is_active_sidebar('footer_right')){
                            dynamic_sidebar('footer_right');
                        }
                    ?>
				</div>
			</div>
		</div>