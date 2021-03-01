<?php

class Widget_Social_Links extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct(
        //одинаковое название с классом
            'widget_social_links', // Base ID
            esc_html__( 'Социальные ссылки', 'text_domain' ), // Name
            [
                'description' => esc_html__( 'Выводит ссылки на соцсети', 'text_domain' ),
            ]// Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance ) {
		$slug = $instance['slug'];
		$link = $instance['link'];
		$text = $this->socials[$slug][0];
		$svg = $this->socials[$slug][1];
		?>
	    <li class="ms-btn">
		    <a class="" title="Dribbble"
		       target="_blank"
		       href="<?php echo $link;?>">
			    <?php echo $svg;?>
		    </a>
	    </li>
		<?php
   /*     echo $args['before_widget'];
        echo apply_filters( 'widget_title', $instance['link'] );
        echo apply_filters( 'widget_title', $instance['slug'] );

        echo $args['after_widget'];*/

    }

    private $socials = [
        'facebook'  =>[
            'facebook',
            '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 1024 1024">
			<title></title>
			<g id="icomoon-ignore">
			</g>
			<path fill="#1877f2" d="M1023.919 511.962c0-282.748-229.21-511.962-511.957-511.962s-511.962 229.214-511.962 511.962c0 255.535 187.217 467.332 431.966 505.741v-357.751h-129.988v-147.989h129.988v-112.794c0-128.311 76.433-199.185 193.374-199.185 56.013 0 114.603 10.001 114.603 10.001v125.99h-64.555c-63.599 0-83.435 39.462-83.435 79.949v96.038h141.99l-22.699 147.989h-119.292v357.751c244.753-38.409 431.966-250.206 431.966-505.741z"></path>
			</svg>'

        ],
        'instagram' => [
            'instagram',
            '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 640 640">
<title></title>
<g id="icomoon-ignore">
</g>
<path fill="#000" d="M416 320c0 53.024-42.976 96-96 96s-96-42.976-96-96c0-5.472 0.576-10.816 1.568-16h-33.568v127.904c0 8.896 7.2 16.096 16.096 16.096h223.84c8.864 0 16.064-7.2 16.064-16.096v-127.904h-33.568c0.992 5.184 1.568 10.528 1.568 16zM320 384c35.328 0 64-28.672 64-64s-28.672-64-64-64-64 28.672-64 64 28.672 64 64 64zM396.8 252.8h38.368c5.312 0 9.632-4.32 9.632-9.6v-38.368c0-5.312-4.32-9.632-9.632-9.632h-38.368c-5.312 0-9.632 4.32-9.632 9.632v38.368c0.032 5.28 4.352 9.6 9.632 9.6zM320 12.8c-169.664 0-307.2 137.536-307.2 307.2s137.536 307.2 307.2 307.2c169.664 0 307.2-137.536 307.2-307.2s-137.536-307.2-307.2-307.2zM480 444.448c0 19.552-16 35.552-35.552 35.552h-248.896c-19.552 0-35.552-16-35.552-35.552v-248.896c0-19.552 16-35.552 35.552-35.552h248.896c19.552 0 35.552 16 35.552 35.552v248.896z"></path>
</svg>'
        ],
    ];

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form( $instance ) {
        $link = ! empty( $instance['link'] ) ? $instance['link'] : esc_html__( 'New link', 'text_domain' );
        ?>
        <p xmlns="http://www.w3.org/1999/html">
            <label for="<?php echo esc_attr( $this->get_field_id( 'link' ) ); ?>">
                <?php esc_attr_e( 'link:', 'text_domain' ); ?>
            </label>
            <input class="widefat"
                   id="<?php echo esc_attr( $this->get_field_id( 'link' ) ); ?>"
                   name="<?php echo esc_attr( $this->get_field_name( 'link' ) ); ?>"
                   type="text"
                   value="<?php echo esc_attr( $link ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'slug' ) ); ?>">
                Выберите социальную сеть
            </label>
           <!-- //выпадающее окно с выбором соцсетей-->
            <select
                class="widefat"
                id="<?php echo esc_attr( $this->get_field_id( 'slug' ) ); ?>"
                name="<?php echo esc_attr( $this->get_field_name( 'slug' ) ); ?>">
	            <?php
	                foreach($this->socials as $slug => $social):
	            ?>
	                <option
			                <?php selected($instance[$slug], $slug, true)?>
			                value="<?php echo $slug;?>">
		                <?php echo $social[0];?>
	                </option>
                <?php
					endforeach;
                ?>
            </select>
        </p>
        <?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['link'] = ( ! empty( $new_instance['link'] ) ) ? sanitize_text_field( $new_instance['link'] ) : '';
        $instance['slug'] = ( ! empty( $new_instance['slug'] ) ) ? sanitize_text_field( $new_instance['slug'] ) : '';

        return $instance;
    }

}

