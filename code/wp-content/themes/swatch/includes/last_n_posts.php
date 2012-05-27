<?php

class Last_N_Posts extends WP_Widget {
	
	function Last_N_Posts() {
		//Description
		$widget_ops = array(
			'classname' => 'last_n_posts',
			'description' => 'The most recent posts made by the user.'
		);
		$this->WP_Widget('last-n-posts', __('Last N Posts'), $widget_ops);
	}

	function widget($args, $instance) {
		//Init
		global $wpdb, $post;
		extract($args);

		//Query
		$myreq = array(
			'numberposts' => $instance['number_of_posts'],
			'category' => get_cat_id($instance['category']), 
			'orderby' => 'post_date',
			'order' => 'DESC'
		);
		$myposts = get_posts($myreq);
	
		//Echo widget header
		echo $before_widget;
		echo $before_title;
		//Echo title
		echo $instance['title'];
		echo $after_title;
		//Echo items
		if (sizeof($myposts) > 0) {
			echo "<ul id='last-n-posts-box'>";
			foreach ($myposts as $post) {
				setup_postdata($post);
				?>
					<li><span id="description"><?php the_title();?></span><span id="link"><a href="<?php the_permalink()?>">Read</a></span></li>
				<?php
			}
			wp_reset_postdata();
			echo "</ul>";
		} else {
			echo "No posts yet...";
		}
		//Echo footer
		echo $after_widget;

	}

	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance['number_of_posts'] = ($new_instance['number_of_posts'] == (int) $new_instance['number_of_posts'] && $new_instance['number_of_posts'] >= 1) ? $new_instance['number_of_posts'] : 5; 
		
		$instance['title'] = $new_instance['title'];
		$instance['category'] = $new_instance['category'];

		return $instance;
	}

	function form($instance) {
		//Control variables
		$number_of_posts = ($number_of_posts == (int) $instance['number_of_posts'] && $number_of_posts >= 1) ? $number_of_posts : 5;

		//Input form
		?>
			<p>
				<label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
				<input type="text" name="<?php echo $this->get_field_name('title') ; ?>" id="<?php echo $this->get_field_id('title'); ?>" value="<?php echo $instance['title']; ?>" />
				<label for="<?php echo $this->get_field_id('category'); ?>">Category:</label>
				<input type="text" name="<?php echo $this->get_field_name('category') ; ?>" id="<?php echo $this->get_field_id('category'); ?>" value="<?php echo $instance['category']; ?>" />

				<label for="<?php echo $this->get_field_id('number_of_posts'); ?>">Number of posts:</label>
				<input type="text" name="<?php echo $this->get_field_name('number_of_posts') ; ?>" id="<?php echo $this->get_field_id('number_of_posts'); ?>" value="<?php echo $instance['number_of_posts']; ?>" />
			</p>
		<?php
	}

}

register_widget('Last_N_Posts');

?>