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
            '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 1024 1024">
			<title></title>
			<g id="icomoon-ignore">
			</g>
			<path fill="#1877f2" d="M1023.919 511.962c0-282.748-229.21-511.962-511.957-511.962s-511.962 229.214-511.962 511.962c0 255.535 187.217 467.332 431.966 505.741v-357.751h-129.988v-147.989h129.988v-112.794c0-128.311 76.433-199.185 193.374-199.185 56.013 0 114.603 10.001 114.603 10.001v125.99h-64.555c-63.599 0-83.435 39.462-83.435 79.949v96.038h141.99l-22.699 147.989h-119.292v357.751c244.753-38.409 431.966-250.206 431.966-505.741z"></path>
			</svg>'

        ],
        'instagram' => [
            'instagram',
            '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 1024 1024">
			<title></title>
			<g id="icomoon-ignore">
			</g>
			<path fill="#e4405f" d="M512 0c-139.093 0-156.459 0.64-211.072 3.072-54.528 2.56-91.648 11.136-124.288 23.808-33.664 13.056-62.251 30.592-90.709 59.051s-46.037 57.003-59.051 90.709c-12.672 32.64-21.291 69.76-23.808 124.288-2.56 54.613-3.072 71.979-3.072 211.072s0.64 156.459 3.072 211.072c2.56 54.485 11.136 91.648 23.808 124.288 13.056 33.621 30.592 62.251 59.051 90.709 28.459 28.416 57.003 46.037 90.709 59.051 32.683 12.629 69.803 21.291 124.288 23.808 54.613 2.56 71.979 3.072 211.072 3.072s156.459-0.64 211.072-3.072c54.485-2.56 91.648-11.179 124.288-23.808 33.621-13.056 62.251-30.635 90.709-59.051 28.416-28.459 46.037-56.96 59.051-90.709 12.629-32.64 21.291-69.803 23.808-124.288 2.56-54.613 3.072-71.979 3.072-211.072s-0.64-156.459-3.072-211.072c-2.56-54.485-11.179-91.691-23.808-124.288-13.056-33.664-30.635-62.251-59.051-90.709-28.459-28.459-56.96-46.037-90.709-59.051-32.64-12.672-69.803-21.291-124.288-23.808-54.613-2.56-71.979-3.072-211.072-3.072zM512 92.16c136.661 0 152.96 0.683 206.933 3.029 49.92 2.347 77.013 10.624 95.019 17.707 23.979 9.259 40.96 20.352 58.965 38.229 17.877 17.92 28.971 34.944 38.229 58.923 6.997 18.005 15.36 45.099 17.621 95.019 2.432 54.016 2.987 70.229 2.987 206.933s-0.64 152.96-3.157 206.933c-2.603 49.92-10.923 77.013-17.963 95.019-9.557 23.979-20.437 40.96-38.357 58.965-17.877 17.877-35.157 28.971-58.88 38.229-17.92 6.997-45.44 15.36-95.36 17.621-54.357 2.432-70.357 2.987-207.317 2.987-137.003 0-153.003-0.64-207.317-3.157-49.963-2.603-77.483-10.923-95.403-17.963-24.277-9.557-40.96-20.437-58.837-38.357-17.963-17.877-29.44-35.157-38.4-58.88-7.040-17.92-15.317-45.44-17.92-95.36-1.92-53.76-2.603-70.357-2.603-206.677 0-136.363 0.683-153.003 2.603-207.403 2.603-49.92 10.88-77.397 17.92-95.317 8.96-24.32 20.437-40.96 38.4-58.923 17.877-17.877 34.56-29.397 58.837-38.315 17.92-7.083 44.843-15.403 94.763-17.963 54.4-1.92 70.4-2.56 207.317-2.56zM512 249.088c-145.28 0-262.912 117.76-262.912 262.912 0 145.28 117.76 262.912 262.912 262.912 145.28 0 262.912-117.76 262.912-262.912 0-145.28-117.76-262.912-262.912-262.912zM512 682.667c-94.293 0-170.667-76.373-170.667-170.667s76.373-170.667 170.667-170.667 170.667 76.373 170.667 170.667-76.373 170.667-170.667 170.667zM846.763 238.72c0 33.92-27.563 61.44-61.44 61.44-33.92 0-61.44-27.563-61.44-61.44s27.563-61.397 61.44-61.397c33.835-0.043 61.44 27.52 61.44 61.397z"></path>
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

