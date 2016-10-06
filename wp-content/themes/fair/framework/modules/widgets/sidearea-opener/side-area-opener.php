<?php

class FairEdgeSideAreaOpener extends FairEdgeWidget {
    public function __construct() {
        parent::__construct(
            'edgtf_side_area_opener', // Base ID
            'Edge Side Area Opener' // Name
        );

        $this->setParams();
    }

    protected function setParams() {

		$this->params = array(
			array(
				'name'			=> 'side_area_opener_icon_color',
				'type'			=> 'textfield',
				'title'			=> 'Icon Color',
				'description'	=> 'Define color for Side Area opener icon'
			)
		);

    }


    public function widget($args, $instance) {
		
		$sidearea_icon_styles = array();

		if ( !empty($instance['side_area_opener_icon_color']) ) {
			$sidearea_icon_styles[] = 'color: ' . $instance['side_area_opener_icon_color'];
		}
		
		?>
        <a class="edgtf-side-menu-button-opener" <?php fair_edge_inline_style($sidearea_icon_styles) ?> href="javascript:void(0)">
            <?php echo fair_edge_get_side_menu_icon_html(); ?>
        </a>

    <?php }

}