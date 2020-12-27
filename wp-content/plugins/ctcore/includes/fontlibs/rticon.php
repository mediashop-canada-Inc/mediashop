<?php 
/* Loads RT-Icon Font. */
add_filter( 'vc_iconpicker-type-rticon', 'vc_iconpicker_type_rticon' );

/**
 * RT-Icon icons/
 *
 * @param $icons - taken from filter - vc_map param field settings['source'] provided icons (default empty array).
 * If array categorized it will auto-enable category dropdown
 *
 * @since 4.4
 * @return array - of icons for iconpicker, can be categorized, or not.
 */
function vc_iconpicker_type_rticon( $icons ) {
	$rt_icons = array(
		array( "rt-icon-ok" => __( "rt-icon-ok", "js_composer" ) ),
		array( "rt-icon-youtube" => __( "rt-icon-youtube", "js_composer" ) ),
		array( "rt-icon-times" => __( "rt-icon-times", "js_composer" ) ),
		array( "rt-icon-image" => __( "rt-icon-image", "js_composer" ) ),
		array( "rt-icon-phone" => __( "rt-icon-phone", "js_composer" ) ),
		array( "rt-icon-heart" => __( "rt-icon-heart", "js_composer" ) ),
		array( "rt-icon-microphone" => __( "rt-icon-microphone", "js_composer" ) ),
		array( "rt-icon-rss-outline" => __( "rt-icon-rss-outline", "js_composer" ) ),
		array( "rt-icon-message" => __( "rt-icon-message", "js_composer" ) ),
		array( "rt-icon-location-outline" => __( "rt-icon-location-outline", "js_composer" ) ),
		array( "rt-icon-link-outline" => __( "rt-icon-link-outline", "js_composer" ) ),
		array( "rt-icon-image-outline" => __( "rt-icon-image-outline", "js_composer" ) ),
		array( "rt-icon-export-outline" => __( "rt-icon-export-outline", "js_composer" ) ),
		array( "rt-icon-cross" => __( "rt-icon-cross", "js_composer" ) ),
		array( "rt-icon-star-outline" => __( "rt-icon-star-outline", "js_composer" ) ),
		array( "rt-icon-mail" => __( "rt-icon-mail", "js_composer" ) ),
		array( "rt-icon-heart-outline" => __( "rt-icon-heart-outline", "js_composer" ) ),
		array( "rt-icon-flash-outline" => __( "rt-icon-flash-outline", "js_composer" ) ),
		array( "rt-icon-arrow-move-outline" => __( "rt-icon-arrow-move-outline", "js_composer" ) ),
		array( "rt-icon-watch" => __( "rt-icon-watch", "js_composer" ) ),
		array( "rt-icon-time" => __( "rt-icon-time", "js_composer" ) ),
		array( "rt-icon-location-arrow-outline" => __( "rt-icon-location-arrow-outline", "js_composer" ) ),
		array( "rt-icon-attachment-outline" => __( "rt-icon-attachment-outline", "js_composer" ) ),
		array( "rt-icon-user-outline" => __( "rt-icon-user-outline", "js_composer" ) ),
		array( "rt-icon-lock-closed-outline" => __( "rt-icon-lock-closed-outline", "js_composer" ) ),
		array( "rt-icon-lock-open-outline" => __( "rt-icon-lock-open-outline", "js_composer" ) ),
		array( "rt-icon-group-outline" => __( "rt-icon-group-outline", "js_composer" ) ),
		array( "rt-icon-chart-pie-outline" => __( "rt-icon-chart-pie-outline", "js_composer" ) ),
		array( "rt-icon-video-outline" => __( "rt-icon-video-outline", "js_composer" ) ),
		array( "rt-icon-key-outline" => __( "rt-icon-key-outline", "js_composer" ) ),
		array( "rt-icon-infinity-outline" => __( "rt-icon-infinity-outline", "js_composer" ) ),
		array( "rt-icon-globe-outline" => __( "rt-icon-globe-outline", "js_composer" ) ),
		array( "rt-icon-eye-outline" => __( "rt-icon-eye-outline", "js_composer" ) ),
		array( "rt-icon-cog-outline" => __( "rt-icon-cog-outline", "js_composer" ) ),
		array( "rt-icon-camera-outline" => __( "rt-icon-camera-outline", "js_composer" ) ),
		array( "rt-icon-scissors-outline" => __( "rt-icon-scissors-outline", "js_composer" ) ),
		array( "rt-icon-refresh-outline" => __( "rt-icon-refresh-outline", "js_composer" ) ),
		array( "rt-icon-zoom-outline" => __( "rt-icon-zoom-outline ", "js_composer" ) ),
		array( "rt-icon-pin-outline" => __( "rt-icon-pin-outline", "js_composer" ) ),
		array( "rt-icon-message-typing" => __( "rt-icon-message-typing", "js_composer" ) ),
		array( "rt-icon-folder" => __( "rt-icon-folder", "js_composer" ) ),
		array( "rt-icon-pencil" => __( "rt-icon-pencil", "js_composer" ) ),
		array( "rt-icon-thumbs-up" => __( "rt-icon-thumbs-up", "js_composer" ) ),
		array( "rt-icon-brush" => __( "rt-icon-brush", "js_composer" ) ),
		array( "rt-icon-pen" => __( "rt-icon-pen", "js_composer" ) ),
		array( "rt-icon-calender-outline" => __( "rt-icon-calender-outline", "js_composer" ) ),
		array( "rt-icon-business-card" => __( "rt-icon-business-card", "js_composer" ) ),
		array( "rt-icon-calculator" => __( "rt-icon-calculator", "js_composer" ) ),
		array( "rt-icon-clipboard" => __( "rt-icon-clipboard", "js_composer" ) ),
		array( "rt-icon-gift" => __( "rt-icon-gift", "js_composer" ) ),
		array( "rt-icon-bell" => __( "rt-icon-bell", "js_composer" ) ),
		array( "rt-icon-anchor-outline" => __( "rt-icon-anchor-outline", "js_composer" ) ),
		array( "rt-icon-power-outline" => __( "rt-icon-power-outline", "js_composer" ) ),
		array( "rt-icon-shopping-bag" => __( "rt-icon-shopping-bag", "js_composer" ) ),
		array( "rt-icon-device-tablet" => __( "rt-icon-device-tablet", "js_composer" ) ),
		array( "rt-icon-device-phone" => __( "rt-icon-device-phone", "js_composer" ) ),
		array( "rt-icon-device-laptop" => __( "rt-icon-device-laptop", "js_composer" ) ),
		array( "rt-icon-device-desktop" => __( "rt-icon-device-desktop", "js_composer" ) ),
		array( "rt-icon-spanner-outline" => __( "rt-icon-spanner-outline", "js_composer" ) ),
		array( "rt-icon-puzzle-outline" => __( "rt-icon-puzzle-outline", "js_composer" ) ),
		array( "rt-icon-printer" => __( "rt-icon-printer", "js_composer" ) ),
		array( "rt-icon-lightbulb" => __( "rt-icon-lightbulb", "js_composer" ) ),
		array( "rt-icon-flag-outline" => __( "rt-icon-flag-outline", "js_composer" ) ),
		array( "rt-icon-contacts" => __( "rt-icon-contacts", "js_composer" ) ),
		array( "rt-icon-weather-stormy" => __( "rt-icon-weather-stormy", "js_composer" ) ),
		array( "rt-icon-weather-shower" => __( "rt-icon-weather-shower", "js_composer" ) ),
		array( "rt-icon-weather-partly-sunny" => __( "rt-icon-weather-partly-sunny", "js_composer" ) ),
		array( "rt-icon-weather-downpour" => __( "rt-icon-weather-downpour", "js_composer" ) ),
		array( "rt-icon-weather-cloudy" => __( "rt-icon-weather-cloudy", "js_composer" ) ),
		array( "rt-icon-plane-outline" => __( "rt-icon-plane-outline", "js_composer" ) ),
		array( "rt-icon-phone-outline" => __( "rt-icon-phone-outline", "js_composer" ) ),
		array( "rt-icon-microphone-outline" => __( "rt-icon-microphone-outline", "js_composer" ) ),
		array( "rt-icon-weather-sunny" => __( "rt-icon-weather-sunny", "js_composer" ) ),
		array( "rt-icon-weather-snow" => __( "rt-icon-weather-snow", "js_composer" ) ),
		array( "rt-icon-weather-night" => __( "rt-icon-weather-night", "js_composer" ) ),
		array( "rt-icon-wine" => __( "rt-icon-wine", "js_composer" ) ),
		array( "rt-icon-tags" => __( "rt-icon-tags", "js_composer" ) ),
		array( "rt-icon-headphones" => __( "rt-icon-headphones", "js_composer" ) ),
		array( "rt-icon-plug" => __( "rt-icon-plug", "js_composer" ) ),
		array( "rt-icon-credit-card" => __( "rt-icon-credit-card", "js_composer" ) ),
		array( "rt-icon-coffee" => __( "rt-icon-coffee", "js_composer" ) ),
		array( "rt-icon-book" => __( "rt-icon-book", "js_composer" ) ),
		array( "rt-icon-beer" => __( "rt-icon-beer", "js_composer" ) ),
		array( "rt-icon-tree" => __( "rt-icon-tree", "js_composer" ) ),
		array( "rt-icon-thermometer" => __( "rt-icon-thermometer", "js_composer" ) ),
		array( "rt-icon-messages" => __( "rt-icon-messages", "js_composer" ) ),
		array( "rt-icon-shopping-cart" => __( "rt-icon-shopping-cart", "js_composer" ) ),
		array( "rt-icon-leaf" => __( "rt-icon-leaf", "js_composer" ) ),
		array( "rt-icon-volume" => __( "rt-icon-volume", "js_composer" ) ),
		array( "rt-icon-microphone2" => __( "rt-icon-microphone2", "js_composer" ) ),
		array( "rt-icon-paperclip" => __( "rt-icon-paperclip", "js_composer" ) ),
		array( "rt-icon-trashcan" => __( "rt-icon-trashcan", "js_composer" ) ),
		array( "rt-icon-search" => __( "rt-icon-search", "js_composer" ) ),
		array( "rt-icon-chat" => __( "rt-icon-chat", "js_composer" ) ),
		array( "rt-icon-calendar" => __( "rt-icon-calendar", "js_composer" ) ),
		array( "rt-icon-bookmark" => __( "rt-icon-bookmark", "js_composer" ) ),
		array( "rt-icon-email" => __( "rt-icon-email", "js_composer" ) ),
		array( "rt-icon-heart2r" => __( "rt-icon-heart2", "js_composer" ) ),
		array( "rt-icon-cloud" => __( "rt-icon-cloud", "js_composer" ) ),
		array( "rt-icon-book2" => __( "rt-icon-book2", "js_composer" ) ),
		array( "rt-icon-star" => __( "rt-icon-star", "js_composer" ) ),
		array( "rt-icon-clock" => __( "rt-icon-clock", "js_composer" ) ),
		array( "rt-icon-users" => __( "rt-icon-users", "js_composer" ) ),
		array( "rt-icon-user" => __( "rt-icon-user", "js_composer" ) ),
		array( "rt-icon-bullhorn" => __( "rt-icon-bullhorn", "js_composer" ) ),
		array( "rt-icon-diamond" => __( "rt-icon-diamond", "js_composer" ) ),
		array( "rt-icon-drink" => __( "rt-icon-drink", "js_composer" ) ),
		array( "rt-icon-shorts" => __( "rt-icon-shorts", "js_composer" ) ),
		array( "rt-icon-syringe" => __( "rt-icon-syringe", "js_composer" ) ),
		array( "rt-icon-barbell" => __( "rt-icon-barbell", "js_composer" ) ),
		array( "rt-icon-chart" => __( "rt-icon-chart", "js_composer" ) ),
		array( "rt-icon-pencil2" => __( "rt-icon-pencil2", "js_composer" ) ),
		array( "rt-icon-newspaper" => __( "rt-icon-newspaper", "js_composer" ) ),
		array( "rt-icon-earth" => __( "rt-icon-earth", "js_composer" ) ),
		array( "rt-icon-clock2" => __( "rt-icon-clock2", "js_composer" ) ),
		array( "rt-icon-comment" => __( "rt-icon-comment", "js_composer" ) ),
		array( "rt-icon-chat2" => __( "rt-icon-chat2", "js_composer" ) ),
		array( "rt-icon-speaker" => __( "rt-icon-speaker", "js_composer" ) ),
		array( "rt-icon-heart3" => __( "rt-icon-heart3", "js_composer" ) ),
		array( "rt-icon-list" => __( "rt-icon-list", "js_composer" ) ),
		array( "rt-icon-edit" => __( "rt-icon-edit", "js_composer" ) ),
		array( "rt-icon-trash" => __( "rt-icon-trash", "js_composer" ) ),
		array( "rt-icon-briefcase" => __( "rt-icon-briefcase", "js_composer" ) ),
		array( "rt-icon-calendar2" => __( "rt-icon-calendar2", "js_composer" ) ),
		array( "rt-icon-inbox" => __( "rt-icon-inbox", "js_composer" ) ),
		array( "rt-icon-google-plus" => __( "rt-icon-google-plus", "js_composer" ) ),
		array( "rt-icon-instagram" => __( "rt-icon-instagram", "js_composer" ) ),
		array( "rt-icon-user2" => __( "rt-icon-user2", "js_composer" ) ),
		array( "rt-icon-users2" => __( "rt-icon-users2", "js_composer" ) ),
		array( "rt-icon-archive" => __( "rt-icon-archive", "js_composer" ) ),
		array( "rt-icon-desktop" => __( "rt-icon-desktop", "js_composer" ) ),
		array( "rt-icon-sent" => __( "rt-icon-sent", "js_composer" ) ),
		array( "rt-icon-share" => __( "rt-icon-share", "js_composer" ) ),
		array( "rt-icon-film" => __( "rt-icon-film", "js_composer" ) ),
		array( "rt-icon-tag" => __( "rt-icon-tag", "js_composer" ) ),
		array( "rt-icon-email2" => __( "rt-icon-email2", "js_composer" ) ),
		array( "rt-icon-picture" => __( "rt-icon-picture", "js_composer" ) ),
		array( "rt-icon-frame" => __( "rt-icon-frame", "js_composer" ) ),
		array( "rt-icon-locked" => __( "rt-icon-locked", "js_composer" ) ),
		array( "rt-icon-pin" => __( "rt-icon-pin", "js_composer" ) ),
		array( "rt-icon-search2" => __( "rt-icon-search2", "js_composer" ) ),
		array( "rt-icon-home" => __( "rt-icon-home", "js_composer" ) ),
		array( "rt-icon-cart" => __( "rt-icon-cart", "js_composer" ) ),
		array( "rt-icon-camera" => __( "rt-icon-camera", "js_composer" ) ),
		array( "rt-icon-compass" => __( "rt-icon-compass", "js_composer" ) ),
		array( "rt-icon-cloud2" => __( "rt-icon-cloud2", "js_composer" ) ),
		array( "rt-icon-grid" => __( "rt-icon-grid", "js_composer" ) ),
		array( "rt-icon-popup" => __( "rt-icon-popup", "js_composer" ) ),
		array( "rt-icon-home2" => __( "rt-icon-home2", "js_composer" ) ),
		array( "rt-icon-light-bulb" => __( "rt-icon-light-bulb", "js_composer" ) ),
		array( "rt-icon-store" => __( "rt-icon-store", "js_composer" ) ),
		array( "rt-icon-anchor" => __( "rt-icon-anchor", "js_composer" ) ),
		array( "rt-icon-book3" => __( "rt-icon-book3", "js_composer" ) ),
		array( "rt-icon-sound-alt" => __( "rt-icon-sound-alt", "js_composer" ) ),
		array( "rt-icon-inbox2" => __( "rt-icon-inbox2", "js_composer" ) ),
		array( "rt-icon-inbox-alt" => __( "rt-icon-inbox-alt", "js_composer" ) ),
		array( "rt-icon-envelope" => __( "rt-icon-envelope", "js_composer" ) ),
		array( "rt-icon-compose" => __( "rt-icon-compose", "js_composer" ) ),
		array( "rt-icon-chat-alt-stroke" => __( "rt-icon-chat-alt-stroke", "js_composer" ) ),
		array( "rt-icon-rss" => __( "rt-icon-rss", "js_composer" ) ),
		array( "rt-icon-cog" => __( "rt-icon-cog", "js_composer" ) ),
		array( "rt-icon-pin2" => __( "rt-icon-pin2", "js_composer" ) ),
		array( "rt-icon-link" => __( "rt-icon-link", "js_composer" ) ),
		array( "rt-icon-key-stroke" => __( "rt-icon-key-stroke", "js_composer" ) ),
		array( "rt-icon-lightbulb2" => __( "rt-icon-lightbulb2", "js_composer" ) ),
		array( "rt-icon-book-alt2" => __( "rt-icon-book-alt2", "js_composer" ) ),
		array( "rt-icon-book4" => __( "rt-icon-book4", "js_composer" ) ),
		array( "rt-icon-book-alt" => __( "rt-icon-book-alt", "js_composer" ) ),
		array( "rt-icon-pen-alt-stroke" => __( "rt-icon-pen-alt-stroke", "js_composer" ) ),
		array( "rt-icon-layers" => __( "rt-icon-layers", "js_composer" ) ),
		array( "rt-icon-paperclip2" => __( "rt-icon-paperclip2", "js_composer" ) ),
		array( "rt-icon-fork" => __( "rt-icon-fork", "js_composer" ) ),
		array( "rt-icon-uniF756" => __( "rt-icon-uniF756", "js_composer" ) ),
		array( "rt-icon-uniF765" => __( "rt-icon-uniF765", "js_composer" ) ),
		array( "rt-icon-uniF794" => __( "rt-icon-uniF794", "js_composer" ) ),
		array( "rt-icon-uniF56B" => __( "rt-icon-uniF56B", "js_composer" ) ),
		array( "rt-icon-fish" => __( "rt-icon-fish", "js_composer" ) ),
		array( "rt-icon-cupcake" => __( "rt-icon-cupcake", "js_composer" ) ),
		array( "rt-icon-pizza" => __( "rt-icon-pizza", "js_composer" ) ),
		array( "rt-icon-cherry" => __( "rt-icon-cherry", "js_composer" ) ),
		array( "rt-icon-mushroom" => __( "rt-icon-mushroom", "js_composer" ) ),
		array( "rt-icon-bone" => __( "rt-icon-bone", "js_composer" ) ),
		array( "rt-icon-steak" => __( "rt-icon-steak", "js_composer" ) ),
		array( "rt-icon-bottle" => __( "rt-icon-bottle", "js_composer" ) ),
		array( "rt-icon-restaurantmenu" => __( "rt-icon-restaurantmenu", "js_composer" ) ),
		array( "rt-icon-coffeebean" => __( "rt-icon-coffeebean", "js_composer" ) ),
		array( "rt-icon-chocolate" => __( "rt-icon-chocolate", "js_composer" ) ),
		array( "rt-icon-raspberry" => __( "rt-icon-raspberry", "js_composer" ) ),
		array( "rt-icon-raspberrypi" => __( "rt-icon-raspberrypi", "js_composer" ) ),
		array( "rt-icon-birthday" => __( "rt-icon-birthday", "js_composer" ) ),
		array( "rt-icon-sun" => __( "rt-icon-sun", "js_composer" ) ),
		array( "rt-icon-moon" => __( "rt-icon-moon", "js_composer" ) ),
		array( "rt-icon-cloudy" => __( "rt-icon-cloudy", "js_composer" ) ),
		array( "rt-icon-cloud3" => __( "rt-icon-cloud3", "js_composer" ) ),
		array( "rt-icon-cloud4" => __( "rt-icon-cloud4", "js_composer" ) ),
		array( "rt-icon-lightning" => __( "rt-icon-lightning", "js_composer" ) ),
		array( "rt-icon-rainy" => __( "rt-icon-rainy", "js_composer" ) ),
		array( "rt-icon-snowy" => __( "rt-icon-snowy", "js_composer" ) ),
		array( "rt-icon-mobile" => __( "rt-icon-mobile", "js_composer" ) ),
		array( "rt-icon-ipod" => __( "rt-icon-ipod", "js_composer" ) ),
		array( "rt-icon-monitor" => __( "rt-icon-monitor", "js_composer" ) ),
		array( "rt-icon-laptop" => __( "rt-icon-laptop", "js_composer" ) ),
		array( "rt-icon-window" => __( "rt-icon-window", "js_composer" ) ),
		array( "rt-icon-mouse" => __( "rt-icon-mouse", "js_composer" ) ),
		array( "rt-icon-quote" => __( "rt-icon-quote", "js_composer" ) ),
		array( "rt-icon-quote2" => __( "rt-icon-quote2", "js_composer" ) ),
		array( "rt-icon-microphone3" => __( "rt-icon-microphone3", "js_composer" ) ),
		array( "rt-icon-cog2" => __( "rt-icon-cog2", "js_composer" ) ),
		array( "rt-icon-gamepad" => __( "rt-icon-gamepad", "js_composer" ) ),
		array( "rt-icon-graduate" => __( "rt-icon-graduate", "js_composer" ) ),
		array( "rt-icon-lab" => __( "rt-icon-lab", "js_composer" ) ),
		array( "rt-icon-tie" => __( "rt-icon-tie", "js_composer" ) ),
		array( "rt-icon-heart4" => __( "rt-icon-heart4", "js_composer" ) ),
		array( "rt-icon-cloud5" => __( "rt-icon-cloud5", "js_composer" ) ),
		array( "rt-icon-star2" => __( "rt-icon-star2", "js_composer" ) ),
		array( "rt-icon-tv" => __( "rt-icon-tv", "js_composer" ) ),
		array( "rt-icon-sound" => __( "rt-icon-sound", "js_composer" ) ),
		array( "rt-icon-video" => __( "rt-icon-video", "js_composer" ) ),
		array( "rt-icon-trash2" => __( "rt-icon-trash2", "js_composer" ) ),
		array( "rt-icon-user3" => __( "rt-icon-user3", "js_composer" ) ),
		array( "rt-icon-key" => __( "rt-icon-key", "js_composer" ) ),
		array( "rt-icon-search3" => __( "rt-icon-search3", "js_composer" ) ),
		array( "rt-icon-eye" => __( "rt-icon-eye", "js_composer" ) ),
		array( "rt-icon-bubble" => __( "rt-icon-bubble", "js_composer" ) ),
		array( "rt-icon-stack" => __( "rt-icon-stack", "js_composer" ) ),
		array( "rt-icon-cup" => __( "rt-icon-cup", "js_composer" ) ),
		array( "rt-icon-phone2" => __( "rt-icon-phone2", "js_composer" ) ),
		array( "rt-icon-news" => __( "rt-icon-news", "js_composer" ) ),
		array( "rt-icon-mail2" => __( "rt-icon-mail2", "js_composer" ) ),
		array( "rt-icon-like" => __( "rt-icon-like", "js_composer" ) ),
		array( "rt-icon-photo" => __( "rt-icon-photo", "js_composer" ) ),
		array( "rt-icon-note" => __( "rt-icon-note", "js_composer" ) ),
		array( "rt-icon-food" => __( "rt-icon-food", "js_composer" ) ),
		array( "rt-icon-t-shirt" => __( "rt-icon-t-shirt", "js_composer" ) ),
		array( "rt-icon-fire" => __( "rt-icon-fire", "js_composer" ) ),
		array( "rt-icon-clip" => __( "rt-icon-clip", "js_composer" ) ),
		array( "rt-icon-shop" => __( "rt-icon-shop", "js_composer" ) ),
		array( "rt-icon-calendar3" => __( "rt-icon-calendar3", "js_composer" ) ),
		array( "rt-icon-wallet" => __( "rt-icon-wallet", "js_composer" ) ),
		array( "rt-icon-vynil" => __( "rt-icon-vynil", "js_composer" ) ),
		array( "rt-icon-truck" => __( "rt-icon-truck", "js_composer" ) ),
		array( "rt-icon-world" => __( "rt-icon-world", "js_composer" ) ),
		array( "rt-icon-settings" => __( "rt-icon-settings", "js_composer" ) ),
		array( "rt-icon-camera2" => __( "rt-icon-camera2", "js_composer" ) ),
		array( "rt-icon-tag2" => __( "rt-icon-tag2", "js_composer" ) ),
		array( "rt-icon-lock" => __( "rt-icon-lock", "js_composer" ) ),
		array( "rt-icon-bulb" => __( "rt-icon-bulb", "js_composer" ) ),
		array( "rt-icon-pen2" => __( "rt-icon-pen2", "js_composer" ) ),
		array( "rt-icon-diamond2" => __( "rt-icon-diamond2", "js_composer" ) ),
		array( "rt-icon-display" => __( "rt-icon-display", "js_composer" ) ),
		array( "rt-icon-location" => __( "rt-icon-location", "js_composer" ) ),
		array( "rt-icon-clock3" => __( "rt-icon-clock3", "js_composer" ) ),
		array( "rt-icon-paperplane" => __( "rt-icon-paperplane", "js_composer" ) ),
		array( "rt-icon-params" => __( "rt-icon-params", "js_composer" ) ),
		array( "rt-icon-banknote" => __( "rt-icon-banknote", "js_composer" ) ),
		array( "rt-icon-data" => __( "rt-icon-data", "js_composer" ) ),
		array( "rt-icon-music" => __( "rt-icon-music", "js_composer" ) ),
		array( "rt-icon-megaphone" => __( "rt-icon-megaphone", "js_composer" ) ),
		array( "rt-icon-study" => __( "rt-icon-study", "js_composer" ) ),
		array( "rt-icon-lab2" => __( "rt-icon-lab2", "js_composer" ) ),
		array( "rt-icon-chat3" => __( "rt-icon-chat3", "js_composer" ) ),
		array( "rt-icon-archive2" => __( "rt-icon-archive2", "js_composer" ) ),
		array( "rt-icon-user4" => __( "rt-icon-user4", "js_composer" ) ),
		array( "rt-icon-users3" => __( "rt-icon-users3", "js_composer" ) ),
		array( "rt-icon-archive3" => __( "rt-icon-archive3", "js_composer" ) ),
		array( "rt-icon-earth2" => __( "rt-icon-earth2", "js_composer" ) ),
		array( "rt-icon-location2" => __( "rt-icon-location2", "js_composer" ) ),
		array( "rt-icon-mobile2" => __( "rt-icon-mobile2", "js_composer" ) ),
		array( "rt-icon-screen" => __( "rt-icon-screen", "js_composer" ) ),
		array( "rt-icon-mail3" => __( "rt-icon-mail3", "js_composer" ) ),
		array( "rt-icon-support" => __( "rt-icon-support", "js_composer" ) ),
		array( "rt-icon-videos" => __( "rt-icon-videos", "js_composer" ) ),
		array( "rt-icon-star3" => __( "rt-icon-star3", "js_composer" ) ),
		array( "rt-icon-heart5" => __( "rt-icon-heart5", "js_composer" ) ),
		array( "rt-icon-bookmark2" => __( "rt-icon-bookmark2", "js_composer" ) ),
		array( "rt-icon-file" => __( "rt-icon-file", "js_composer" ) ),
		array( "rt-icon-locked2" => __( "rt-icon-locked2", "js_composer" ) ),
		array( "rt-icon-unlocked" => __( "rt-icon-unlocked", "js_composer" ) ),
		array( "rt-icon-archive4" => __( "rt-icon-archive4", "js_composer" ) ),
		array( "rt-icon-images" => __( "rt-icon-images", "js_composer" ) ),
		array( "rt-icon-images2" => __( "rt-icon-images2", "js_composer" ) ),
		array( "rt-icon-pencil3" => __( "rt-icon-pencil3", "js_composer" ) ),
		array( "rt-icon-pictures" => __( "rt-icon-pictures", "js_composer" ) ),
		array( "rt-icon-link2" => __( "rt-icon-link2", "js_composer" ) ),
		array( "rt-icon-search4" => __( "rt-icon-search4", "js_composer" ) ),
		array( "rt-icon-cog3" => __( "rt-icon-cog3", "js_composer" ) ),
		array( "rt-icon-trashcan2" => __( "rt-icon-trashcan2", "js_composer" ) ),
		array( "rt-icon-pencil4" => __( "rt-icon-pencil4", "js_composer" ) ),
		array( "rt-icon-article" => __( "rt-icon-article", "js_composer" ) ),
		array( "rt-icon-clock4" => __( "rt-icon-clock4", "js_composer" ) ),
		array( "rt-icon-heart6" => __( "rt-icon-heart6", "js_composer" ) ),
		array( "rt-icon-palette" => __( "rt-icon-palette", "js_composer" ) ),
		array( "rt-icon-leaf2" => __( "rt-icon-leaf2", "js_composer" ) ),
		array( "rt-icon-megaphone2" => __( "rt-icon-megaphone2", "js_composer" ) ),
		array( "rt-icon-bell2" => __( "rt-icon-bell2", "js_composer" ) ),
		array( "rt-icon-lifebuoy" => __( "rt-icon-lifebuoy", "js_composer" ) ),
		array( "rt-icon-magnet" => __( "rt-icon-magnet", "js_composer" ) ),
		array( "rt-icon-light-bulb2" => __( "rt-icon-light-bulb2", "js_composer" ) ),
		array( "rt-icon-flickr" => __( "rt-icon-flickr", "js_composer" ) ),
		array( "rt-icon-flickr2" => __( "rt-icon-flickr2", "js_composer" ) ),
		array( "rt-icon-vimeo" => __( "rt-icon-vimeo", "js_composer" ) ),
		array( "rt-icon-vimeo2" => __( "rt-icon-vimeo2", "js_composer" ) ),
		array( "rt-icon-twitter" => __( "rt-icon-twitter", "js_composer" ) ),
		array( "rt-icon-twitter2" => __( "rt-icon-twitter2", "js_composer" ) ),
		array( "rt-icon-facebook" => __( "rt-icon-facebook", "js_composer" ) ),
		array( "rt-icon-facebook2" => __( "rt-icon-facebook2", "js_composer" ) ),
		array( "rt-icon-facebook3" => __( "rt-icon-facebook3", "js_composer" ) ),
		array( "rt-icon-googleplus" => __( "rt-icon-googleplus", "js_composer" ) ),
		array( "rt-icon-googleplus2" => __( "rt-icon-googleplus2", "js_composer" ) ),
		array( "rt-icon-pinterest" => __( "rt-icon-pinterest", "js_composer" ) ),
		array( "rt-icon-pinterest2" => __( "rt-icon-pinterest2", "js_composer" ) ),
		array( "rt-icon-tumblr" => __( "rt-icon-tumblr", "js_composer" ) ),
		array( "rt-icon-tumblr2" => __( "rt-icon-tumblr2", "js_composer" ) ),
		array( "rt-icon-linkedin" => __( "rt-icon-linkedin", "js_composer" ) ),
		array( "rt-icon-linkedin2" => __( "rt-icon-linkedin2", "js_composer" ) ),
		array( "rt-icon-dribbble" => __( "rt-icon-dribbble", "js_composer" ) ),
		array( "rt-icon-dribbble2" => __( "rt-icon-dribbble2", "js_composer" ) ),
		array( "rt-icon-stumbleupon" => __( "rt-icon-stumbleupon", "js_composer" ) ),
		array( "rt-icon-stumbleupon2" => __( "rt-icon-stumbleupon2", "js_composer" ) ),
		array( "rt-icon-lastfm" => __( "rt-icon-lastfm", "js_composer" ) ),
		array( "rt-icon-lastfm2" => __( "rt-icon-lastfm2", "js_composer" ) ),
		array( "rt-icon-skype" => __( "rt-icon-skype", "js_composer" ) ),
		array( "rt-icon-skype2" => __( "rt-icon-skype2", "js_composer" ) ),
		array( "rt-icon-behance" => __( "rt-icon-behance", "js_composer" ) ),
		array( "rt-icon-vk" => __( "rt-icon-vk", "js_composer" ) ),
		array( "rt-icon-smashing" => __( "rt-icon-smashing", "js_composer" ) ),
		array( "rt-icon-dropbox" => __( "rt-icon-dropbox", "js_composer" ) ),
		array( "rt-icon-evernote" => __( "rt-icon-evernote", "js_composer" ) ),
		array( "rt-icon-picasa" => __( "rt-icon-picasa", "js_composer" ) ),
		array( ".rt-icon-instagram2" => __( ".rt-icon-instagram2", "js_composer" ) ),
	);

	return array_merge( $icons, $rt_icons );
}
 ?>