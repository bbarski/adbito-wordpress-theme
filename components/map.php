<?php $data = get_data_for_template('contact'); ?>
<section id="contact" class="contact-section">
	<div class="contact-container">
		<h2 class="section-title"><?php echo esc_html($data['contact_section_title']); ?></h2>
<div class="main-container">
    <div class="main-column">
        <div class="contact-us-box">
            <div class="box-left"><i class="fa-solid fa-comments"></i></div>
            <div class="box-right">
                <span class="box-right-row"><?php echo esc_html($data['contact_section_phn']); ?></span>
                <span class="box-right-row"><?php echo esc_html($data['contact_section_mail']); ?></span>
            </div>
        </div>
    </div>
    <div class="main-column">
        <div class="contact-us-box">
            <div class="box-left"><i class="fa-solid fa-location-dot"></i></div>
            <div class="box-right">
                <span class="box-right-row"><?php echo esc_html($data['contact_section_adress_line1']); ?></span>
                <span class="box-right-row"><?php echo esc_html($data['contact_section_adress_line2']); ?></span>
            </div>
        </div>
    </div>
</div>
		<div class="map-container">
				<?php echo do_shortcode($data['leaflet_map_shortcodes']) ?>
		</div>
	</div>
</section>
