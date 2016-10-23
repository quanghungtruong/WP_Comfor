<?php
function register_widget_position()
{   
    register_sidebar(
        array(
            'name'=>__('Left'),
            'id'=>'left',
            'before_title'=>'<h1>',
            'after_title'=>'</h1>'
        )    
    );
    register_sidebar(
        array(
            'name'=>__('Right'),
            'id'=>'right',
            'before_title'=>'<h1>',
            'after_title'=>'</h1>'
        )    
    );
}
add_action('widgets_init','register_widget_position');
function register_widget_member()
{
    register_widget('show_categories_game');
}
add_action('widgets_init','register_widget_member');

class show_categories_game extends WP_Widget
{
    function show_categories_game() {
        parent::__construct(false,'Categories Game');
    }
    function widget($args,$instance) {
        extract($args);
        $cat_id=  esc_attr($instance['cat_id']);
        $title=esc_attr($instance['title']);
        
        $args=array(
            'hide_empty'=>0, 
            'parent'=>$cat_id,
            'orderby'=>'name'
         );
         $categories= get_categories($args);
    
        ?>
            <div class="category-game">
                <h2 class="title">Category</h2>
                <ul>
                    <?php foreach ($categories as $cat){?>
                    <li>
                        <a href="<?php echo get_category_link($cat->cat_ID)?>">
                            <i class="glyphicon glyphicon-star-empty"></i>
                            <?php echo $cat->name?>
                        </a>
                    </li>
                    <?php }?>
                </ul>
            </div>
        <?php
    }
    function update($new_instance, $old_instance) {
        $instance=$old_instance;
        $instance['cat_id']=  strip_tags($new_instance['cat_id']);
        $instance['title']=  strip_tags($new_instance['title']);
        return $instance;
    }
    function form($instance) {
        $cat_id=  esc_attr($instance['cat_id']);
        $title =esc_attr($instance['title']);
        ?>
            
           <p><label>Title categories</label></p>
           <p>
               <input width="100%" type="text" id="<?php echo $this->get_field_id('title')?>" name="<?php echo $this->get_field_name('title')?>" value="<?php echo $title?>" />
           </p>
           <p><label>Parent categories id</label></p>
           <input width="100%" type="text" id="<?php echo $this->get_field_id('cat_id')?>" name="<?php echo $this->get_field_name('cat_id')?>" value="<?php echo $cat_id?>" />
        <?php
    }
}
?>