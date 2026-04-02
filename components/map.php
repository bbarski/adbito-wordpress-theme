<?php $data = get_data_for_template('contact'); ?>
<section id="contact" class="benefits-section">
	<div class="benefits-container">
		<h2 class="section-title">
			<?php echo esc_html($data['contact_section_title']); ?>
		</h2>
		<div class="map-container">
			<?php echo do_shortcode($data['leaflet_map_shortcodes']) ?>
		</div>
		<div class="contacts-container">
			<?php echo esc_html($data['contact_section_phn']); ?>
		</div>
    </div>
</section>
