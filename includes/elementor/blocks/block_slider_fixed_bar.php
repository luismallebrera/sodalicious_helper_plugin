<?php

/**
 * @author: SODAThemes
 * @version: 1.0
 */

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_SODAThemes_Slider_Fixed_Bar extends Widget_Base {

	public function get_name() {
		return 'vlt-slider-fixed-bar';
	}

	public function get_title() {
		return esc_html__( 'Slider Fixed Bar', 'sodathemes' );
	}

	public function get_icon() {
		return 'eicon-sidebar sodathemes-badge';
	}

	public function get_categories() {
		return [ 'sodalicious-elements' ];
	}

	public function get_keywords() {
		return [ 'navigation', 'slider', 'controls', 'fixed', 'bar' ];
	}

	private static $default_socials = [
		'internet' => 'Internet',
		'moddb' => 'Moddb',
		'indiedb' => 'Indiedb',
		'traxsource' => 'Traxsource',
		'gamefor' => 'Gamefor',
		'pixiv' => 'Pixiv',
		'myanimelist' => 'Myanimelist',
		'blackberry' => 'Blackberry',
		'wickr' => 'Wickr',
		'spip' => 'Spip',
		'napster' => 'Napster',
		'beatport' => 'Beatport',
		'hackerone' => 'Hackerone',
		'hackernews' => 'Hackernews',
		'smashwords' => 'Smashwords',
		'kobo' => 'Kobo',
		'bookbub' => 'Bookbub',
		'mailru' => 'Mailru',
		'gitlab' => 'Gitlab',
		'instructables' => 'Instructables',
		'portfolio' => 'Portfolio',
		'codered' => 'Codered',
		'origin' => 'Origin',
		'nextdoor' => 'Nextdoor',
		'udemy' => 'Udemy',
		'livemaster' => 'Livemaster',
		'crunchbase' => 'Crunchbase',
		'homefy' => 'Homefy',
		'calendly' => 'Calendly',
		'realtor' => 'Realtor',
		'tidal' => 'Tidal',
		'qobuz' => 'Qobuz',
		'natgeo' => 'Natgeo',
		'mastodon' => 'Mastodon',
		'unsplash' => 'Unsplash',
		'homeadvisor' => 'Homeadvisor',
		'angieslist' => 'Angieslist',
		'codepen' => 'Codepen',
		'slack' => 'Slack',
		'openaigym' => 'Openaigym',
		'logmein' => 'Logmein',
		'fiverr' => 'Fiverr',
		'gotomeeting' => 'Gotomeeting',
		'aliexpress' => 'Aliexpress',
		'guru' => 'Guru',
		'appstore' => 'Appstore',
		'homes' => 'Homes',
		'zoom' => 'Zoom',
		'alibaba' => 'Alibaba',
		'craigslist' => 'Craigslist',
		'wix' => 'Wix',
		'redfin' => 'Redfin',
		'googlecalendar' => 'Googlecalendar',
		'shopify' => 'Shopify',
		'freelancer' => 'Freelancer',
		'seedrs' => 'Seedrs',
		'bing' => 'Bing',
		'doodle' => 'Doodle',
		'bonanza' => 'Bonanza',
		'squarespace' => 'Squarespace',
		'toptal' => 'Toptal',
		'gust' => 'Gust',
		'ask' => 'Ask',
		'trulia' => 'Trulia',
		'loomly' => 'Loomly',
		'ghost' => 'Ghost',
		'upwork' => 'Upwork',
		'fundable' => 'Fundable',
		'booking' => 'Booking',
		'googlemaps' => 'Googlemaps',
		'zillow' => 'Zillow',
		'niconico' => 'Niconico',
		'toneden' => 'Toneden',
		'augment' => 'Augment',
		'bitbucket' => 'Bitbucket',
		'fyuse' => 'Fyuse',
		'yt-gaming' => 'Yt-gaming',
		'sketchfab' => 'Sketchfab',
		'mobcrush' => 'Mobcrush',
		'microsoft' => 'Microsoft',
		'pandora' => 'Pandora',
		'messenger' => 'Messenger',
		'gamewisp' => 'Gamewisp',
		'bloglovin' => 'Bloglovin',
		'tunein' => 'Tunein',
		'gamejolt' => 'Gamejolt',
		'trello' => 'Trello',
		'spreadshirt' => 'Spreadshirt',
		'500px' => '500px',
		'8tracks' => '8tracks',
		'airbnb' => 'Airbnb',
		'alliance' => 'Alliance',
		'amazon' => 'Amazon',
		'amplement' => 'Amplement',
		'android' => 'Android',
		'angellist' => 'Angellist',
		'apple' => 'Apple',
		'appnet' => 'Appnet',
		'baidu' => 'Baidu',
		'bandcamp' => 'Bandcamp',
		'battlenet' => 'Battlenet',
		'mixer' => 'Mixer',
		'bebee' => 'Bebee',
		'bebo' => 'Bebo',
		'behance' => 'Bēhance',
		'blizzard' => 'Blizzard',
		'blogger' => 'Blogger',
		'buffer' => 'Buffer',
		'chrome' => 'Chrome',
		'coderwall' => 'Coderwall',
		'curse' => 'Curse',
		'dailymotion' => 'Dailymotion',
		'deezer' => 'Deezer',
		'delicious' => 'Delicious',
		'deviantart' => 'Deviantart',
		'diablo' => 'Diablo',
		'digg' => 'Digg',
		'discord' => 'Discord',
		'disqus' => 'Disqus',
		'douban' => 'Douban',
		'draugiem' => 'Draugiem',
		'dribbble' => 'Dribbble',
		'drupal' => 'Drupal',
		'ebay' => 'Ebay',
		'ello' => 'Ello',
		'endomodo' => 'Endomodo',
		'envato' => 'Envato',
		'etsy' => 'Etsy',
		'facebook' => 'Facebook',
		'feedburner' => 'Feedburner',
		'filmweb' => 'Filmweb',
		'firefox' => 'Firefox',
		'flattr' => 'Flattr',
		'flickr' => 'Flickr',
		'formulr' => 'Formulr',
		'forrst' => 'Forrst',
		'foursquare' => 'Foursquare',
		'friendfeed' => 'Friendfeed',
		'github' => 'Github',
		'goodreads' => 'Goodreads',
		'google' => 'Google',
		'googlescholar' => 'Googlescholar',
		'googlegroups' => 'Googlegroups',
		'googlephotos' => 'Googlephotos',
		'googleplus' => 'Googleplus',
		'grooveshark' => 'Grooveshark',
		'hackerrank' => 'Hackerrank',
		'hearthstone' => 'Hearthstone',
		'hellocoton' => 'Hellocoton',
		'heroes' => 'Heroes',
		'smashcast' => 'Smashcast',
		'horde' => 'Horde',
		'houzz' => 'Houzz',
		'icq' => 'Icq',
		'identica' => 'Identica',
		'imdb' => 'Imdb',
		'instagram' => 'Instagram',
		'issuu' => 'Issuu',
		'istock' => 'Istock',
		'itunes' => 'Itunes',
		'keybase' => 'Keybase',
		'lanyrd' => 'Lanyrd',
		'lastfm' => 'Lastfm',
		'line' => 'Line',
		'linkedin' => 'LinkedIn',
		'livejournal' => 'Livejournal',
		'lyft' => 'Lyft',
		'macos' => 'Macos',
		'mail' => 'Mail',
		'medium' => 'Medium',
		'meetup' => 'Meetup',
		'mixcloud' => 'Mixcloud',
		'modelmayhem' => 'Modelmayhem',
		'mumble' => 'Mumble',
		'myspace' => 'Myspace',
		'newsvine' => 'Newsvine',
		'nintendo' => 'Nintendo',
		'npm' => 'Npm',
		'odnoklassniki' => 'Odnoklassniki',
		'openid' => 'Openid',
		'opera' => 'Opera',
		'outlook' => 'Outlook',
		'overwatch' => 'Overwatch',
		'patreon' => 'Patreon',
		'paypal' => 'Paypal',
		'periscope' => 'Periscope',
		'persona' => 'Persona',
		'pinterest' => 'Pinterest',
		'play' => 'Play',
		'player' => 'Player',
		'playstation' => 'Playstation',
		'pocket' => 'Pocket',
		'qq' => 'Qq',
		'quora' => 'Quora',
		'raidcall' => 'Raidcall',
		'ravelry' => 'Ravelry',
		'reddit' => 'Reddit',
		'renren' => 'Renren',
		'researchgate' => 'Researchgate',
		'residentadvisor' => 'Residentadvisor',
		'reverbnation' => 'Reverbnation',
		'rss' => 'Rss',
		'sharethis' => 'Sharethis',
		'skype' => 'Skype',
		'slideshare' => 'Slideshare',
		'smugmug' => 'Smugmug',
		'snapchat' => 'Snapchat',
		'songkick' => 'Songkick',
		'soundcloud' => 'Soundcloud',
		'spotify' => 'Spotify',
		'stackexchange' => 'Stackexchange',
		'stackoverflow' => 'Stackoverflow',
		'starcraft' => 'Starcraft',
		'stayfriends' => 'Stayfriends',
		'steam' => 'Steam',
		'storehouse' => 'Storehouse',
		'strava' => 'Strava',
		'streamjar' => 'Streamjar',
		'stumbleupon' => 'Stumbleupon',
		'swarm' => 'Swarm',
		'teamspeak' => 'Teamspeak',
		'teamviewer' => 'Teamviewer',
		'technorati' => 'Technorati',
		'telegram' => 'Telegram',
		'tripadvisor' => 'Tripadvisor',
		'tripit' => 'Tripit',
		'triplej' => 'Triplej',
		'tumblr' => 'Tumblr',
		'twitch' => 'Twitch',
		'twitter' => 'Twitter',
		'uber' => 'Uber',
		'ventrilo' => 'Ventrilo',
		'viadeo' => 'Viadeo',
		'viber' => 'Viber',
		'viewbug' => 'Viewbug',
		'vimeo' => 'Vimeo',
		'vine' => 'Vine',
		'vkontakte' => 'Vkontakte',
		'warcraft' => 'Warcraft',
		'wechat' => 'Wechat',
		'weibo' => 'Weibo',
		'whatsapp' => 'Whatsapp',
		'wikipedia' => 'Wikipedia',
		'windows' => 'Windows',
		'wordpress' => 'Wordpress',
		'wykop' => 'Wykop',
		'xbox' => 'Xbox',
		'xing' => 'Xing',
		'yahoo' => 'Yahoo',
		'yammer' => 'Yammer',
		'yandex' => 'Yandex',
		'yelp' => 'Yelp',
		'younow' => 'Younow',
		'youtube' => 'Youtube',
		'zapier' => 'Zapier',
		'zerply' => 'Zerply',
		'zomato' => 'Zomato',
		'zynga' => 'Zynga'
	];

	private static $social_icons = [
		'internet' => 'socicon-internet',
		'moddb' => 'socicon-moddb',
		'indiedb' => 'socicon-indiedb',
		'traxsource' => 'socicon-traxsource',
		'gamefor' => 'socicon-gamefor',
		'pixiv' => 'socicon-pixiv',
		'myanimelist' => 'socicon-myanimelist',
		'blackberry' => 'socicon-blackberry',
		'wickr' => 'socicon-wickr',
		'spip' => 'socicon-spip',
		'napster' => 'socicon-napster',
		'beatport' => 'socicon-beatport',
		'hackerone' => 'socicon-hackerone',
		'hackernews' => 'socicon-hackernews',
		'smashwords' => 'socicon-smashwords',
		'kobo' => 'socicon-kobo',
		'bookbub' => 'socicon-bookbub',
		'mailru' => 'socicon-mailru',
		'gitlab' => 'socicon-gitlab',
		'instructables' => 'socicon-instructables',
		'portfolio' => 'socicon-portfolio',
		'codered' => 'socicon-codered',
		'origin' => 'socicon-origin',
		'nextdoor' => 'socicon-nextdoor',
		'udemy' => 'socicon-udemy',
		'livemaster' => 'socicon-livemaster',
		'crunchbase' => 'socicon-crunchbase',
		'homefy' => 'socicon-homefy',
		'calendly' => 'socicon-calendly',
		'realtor' => 'socicon-realtor',
		'tidal' => 'socicon-tidal',
		'qobuz' => 'socicon-qobuz',
		'natgeo' => 'socicon-natgeo',
		'mastodon' => 'socicon-mastodon',
		'unsplash' => 'socicon-unsplash',
		'homeadvisor' => 'socicon-homeadvisor',
		'angieslist' => 'socicon-angieslist',
		'codepen' => 'socicon-codepen',
		'slack' => 'socicon-slack',
		'openaigym' => 'socicon-openaigym',
		'logmein' => 'socicon-logmein',
		'fiverr' => 'socicon-fiverr',
		'gotomeeting' => 'socicon-gotomeeting',
		'aliexpress' => 'socicon-aliexpress',
		'guru' => 'socicon-guru',
		'appstore' => 'socicon-appstore',
		'homes' => 'socicon-homes',
		'zoom' => 'socicon-zoom',
		'alibaba' => 'socicon-alibaba',
		'craigslist' => 'socicon-craigslist',
		'wix' => 'socicon-wix',
		'redfin' => 'socicon-redfin',
		'googlecalendar' => 'socicon-googlecalendar',
		'shopify' => 'socicon-shopify',
		'freelancer' => 'socicon-freelancer',
		'seedrs' => 'socicon-seedrs',
		'bing' => 'socicon-bing',
		'doodle' => 'socicon-doodle',
		'bonanza' => 'socicon-bonanza',
		'squarespace' => 'socicon-squarespace',
		'toptal' => 'socicon-toptal',
		'gust' => 'socicon-gust',
		'ask' => 'socicon-ask',
		'trulia' => 'socicon-trulia',
		'loomly' => 'socicon-loomly',
		'ghost' => 'socicon-ghost',
		'upwork' => 'socicon-upwork',
		'fundable' => 'socicon-fundable',
		'booking' => 'socicon-booking',
		'googlemaps' => 'socicon-googlemaps',
		'zillow' => 'socicon-zillow',
		'niconico' => 'socicon-niconico',
		'toneden' => 'socicon-toneden',
		'augment' => 'socicon-augment',
		'bitbucket' => 'socicon-bitbucket',
		'fyuse' => 'socicon-fyuse',
		'yt-gaming' => 'socicon-yt-gaming',
		'sketchfab' => 'socicon-sketchfab',
		'mobcrush' => 'socicon-mobcrush',
		'microsoft' => 'socicon-microsoft',
		'pandora' => 'socicon-pandora',
		'messenger' => 'socicon-messenger',
		'gamewisp' => 'socicon-gamewisp',
		'bloglovin' => 'socicon-bloglovin',
		'tunein' => 'socicon-tunein',
		'gamejolt' => 'socicon-gamejolt',
		'trello' => 'socicon-trello',
		'spreadshirt' => 'socicon-spreadshirt',
		'500px' => 'socicon-500px',
		'8tracks' => 'socicon-8tracks',
		'airbnb' => 'socicon-airbnb',
		'alliance' => 'socicon-alliance',
		'amazon' => 'socicon-amazon',
		'amplement' => 'socicon-amplement',
		'android' => 'socicon-android',
		'angellist' => 'socicon-angellist',
		'apple' => 'socicon-apple',
		'appnet' => 'socicon-appnet',
		'baidu' => 'socicon-baidu',
		'bandcamp' => 'socicon-bandcamp',
		'battlenet' => 'socicon-battlenet',
		'mixer' => 'socicon-mixer',
		'bebee' => 'socicon-bebee',
		'bebo' => 'socicon-bebo',
		'behance' => 'socicon-behance',
		'blizzard' => 'socicon-blizzard',
		'blogger' => 'socicon-blogger',
		'buffer' => 'socicon-buffer',
		'chrome' => 'socicon-chrome',
		'coderwall' => 'socicon-coderwall',
		'curse' => 'socicon-curse',
		'dailymotion' => 'socicon-dailymotion',
		'deezer' => 'socicon-deezer',
		'delicious' => 'socicon-delicious',
		'deviantart' => 'socicon-deviantart',
		'diablo' => 'socicon-diablo',
		'digg' => 'socicon-digg',
		'discord' => 'socicon-discord',
		'disqus' => 'socicon-disqus',
		'douban' => 'socicon-douban',
		'draugiem' => 'socicon-draugiem',
		'dribbble' => 'socicon-dribbble',
		'drupal' => 'socicon-drupal',
		'ebay' => 'socicon-ebay',
		'ello' => 'socicon-ello',
		'endomodo' => 'socicon-endomodo',
		'envato' => 'socicon-envato',
		'etsy' => 'socicon-etsy',
		'facebook' => 'socicon-facebook',
		'feedburner' => 'socicon-feedburner',
		'filmweb' => 'socicon-filmweb',
		'firefox' => 'socicon-firefox',
		'flattr' => 'socicon-flattr',
		'flickr' => 'socicon-flickr',
		'formulr' => 'socicon-formulr',
		'forrst' => 'socicon-forrst',
		'foursquare' => 'socicon-foursquare',
		'friendfeed' => 'socicon-friendfeed',
		'github' => 'socicon-github',
		'goodreads' => 'socicon-goodreads',
		'google' => 'socicon-google',
		'googlescholar' => 'socicon-googlescholar',
		'googlegroups' => 'socicon-googlegroups',
		'googlephotos' => 'socicon-googlephotos',
		'googleplus' => 'socicon-googleplus',
		'grooveshark' => 'socicon-grooveshark',
		'hackerrank' => 'socicon-hackerrank',
		'hearthstone' => 'socicon-hearthstone',
		'hellocoton' => 'socicon-hellocoton',
		'heroes' => 'socicon-heroes',
		'smashcast' => 'socicon-smashcast',
		'horde' => 'socicon-horde',
		'houzz' => 'socicon-houzz',
		'icq' => 'socicon-icq',
		'identica' => 'socicon-identica',
		'imdb' => 'socicon-imdb',
		'instagram' => 'socicon-instagram',
		'issuu' => 'socicon-issuu',
		'istock' => 'socicon-istock',
		'itunes' => 'socicon-itunes',
		'keybase' => 'socicon-keybase',
		'lanyrd' => 'socicon-lanyrd',
		'lastfm' => 'socicon-lastfm',
		'line' => 'socicon-line',
		'linkedin' => 'socicon-linkedin',
		'livejournal' => 'socicon-livejournal',
		'lyft' => 'socicon-lyft',
		'macos' => 'socicon-macos',
		'mail' => 'socicon-mail',
		'medium' => 'socicon-medium',
		'meetup' => 'socicon-meetup',
		'mixcloud' => 'socicon-mixcloud',
		'modelmayhem' => 'socicon-modelmayhem',
		'mumble' => 'socicon-mumble',
		'myspace' => 'socicon-myspace',
		'newsvine' => 'socicon-newsvine',
		'nintendo' => 'socicon-nintendo',
		'npm' => 'socicon-npm',
		'odnoklassniki' => 'socicon-odnoklassniki',
		'openid' => 'socicon-openid',
		'opera' => 'socicon-opera',
		'outlook' => 'socicon-outlook',
		'overwatch' => 'socicon-overwatch',
		'patreon' => 'socicon-patreon',
		'paypal' => 'socicon-paypal',
		'periscope' => 'socicon-periscope',
		'persona' => 'socicon-persona',
		'pinterest' => 'socicon-pinterest',
		'play' => 'socicon-play',
		'player' => 'socicon-player',
		'playstation' => 'socicon-playstation',
		'pocket' => 'socicon-pocket',
		'qq' => 'socicon-qq',
		'quora' => 'socicon-quora',
		'raidcall' => 'socicon-raidcall',
		'ravelry' => 'socicon-ravelry',
		'reddit' => 'socicon-reddit',
		'renren' => 'socicon-renren',
		'researchgate' => 'socicon-researchgate',
		'residentadvisor' => 'socicon-residentadvisor',
		'reverbnation' => 'socicon-reverbnation',
		'rss' => 'socicon-rss',
		'sharethis' => 'socicon-sharethis',
		'skype' => 'socicon-skype',
		'slideshare' => 'socicon-slideshare',
		'smugmug' => 'socicon-smugmug',
		'snapchat' => 'socicon-snapchat',
		'songkick' => 'socicon-songkick',
		'soundcloud' => 'socicon-soundcloud',
		'spotify' => 'socicon-spotify',
		'stackexchange' => 'socicon-stackexchange',
		'stackoverflow' => 'socicon-stackoverflow',
		'starcraft' => 'socicon-starcraft',
		'stayfriends' => 'socicon-stayfriends',
		'steam' => 'socicon-steam',
		'storehouse' => 'socicon-storehouse',
		'strava' => 'socicon-strava',
		'streamjar' => 'socicon-streamjar',
		'stumbleupon' => 'socicon-stumbleupon',
		'swarm' => 'socicon-swarm',
		'teamspeak' => 'socicon-teamspeak',
		'teamviewer' => 'socicon-teamviewer',
		'technorati' => 'socicon-technorati',
		'telegram' => 'socicon-telegram',
		'tripadvisor' => 'socicon-tripadvisor',
		'tripit' => 'socicon-tripit',
		'triplej' => 'socicon-triplej',
		'tumblr' => 'socicon-tumblr',
		'twitch' => 'socicon-twitch',
		'twitter' => 'socicon-twitter',
		'uber' => 'socicon-uber',
		'ventrilo' => 'socicon-ventrilo',
		'viadeo' => 'socicon-viadeo',
		'viber' => 'socicon-viber',
		'viewbug' => 'socicon-viewbug',
		'vimeo' => 'socicon-vimeo',
		'vine' => 'socicon-vine',
		'vkontakte' => 'socicon-vkontakte',
		'warcraft' => 'socicon-warcraft',
		'wechat' => 'socicon-wechat',
		'weibo' => 'socicon-weibo',
		'whatsapp' => 'socicon-whatsapp',
		'wikipedia' => 'socicon-wikipedia',
		'windows' => 'socicon-windows',
		'wordpress' => 'socicon-wordpress',
		'wykop' => 'socicon-wykop',
		'xbox' => 'socicon-xbox',
		'xing' => 'socicon-xing',
		'yahoo' => 'socicon-yahoo',
		'yammer' => 'socicon-yammer',
		'yandex' => 'socicon-yandex',
		'yelp' => 'socicon-yelp',
		'younow' => 'socicon-younow',
		'youtube' => 'socicon-youtube',
		'zapier' => 'socicon-zapier',
		'zerply' => 'socicon-zerply',
		'zomato' => 'socicon-zomato',
		'zynga' => 'socicon-zynga',
	];

	protected function register_controls() {

		$first_level = 0;

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Slider Fixed Bar', 'sodathemes' ),
			]
		);

		

		$this->add_control(
			'position', [
				'label' => esc_html__( 'Position', 'sodathemes' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'fixed',
				'options' => [
					'static' => esc_html__( 'Static', 'sodathemes' ),
					'fixed' => esc_html__( 'Fixed', 'sodathemes' ),
					'absolute' => esc_html__( 'Absolute', 'sodathemes' )
				],
			]
		);

		$this->add_control(
			'alignment', [
				'label' => esc_html__( 'Alignment', 'sodathemes' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'sodathemes' ),
						'icon' => 'eicon-h-align-left',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'sodathemes' ),
						'icon' => 'eicon-h-align-right',
					],
				],
				'default' => 'right'
			]
		);

		$this->add_control(
			'layout', [
				'label' => esc_html__( 'Layout', 'sodathemes' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'navigation-bar',
				'options' => [
					'navigation-bar' => esc_html__( 'Navigation Bar', 'sodathemes' ),
					'socials' => esc_html__( 'Socials', 'sodathemes' )
				],
			]
		);

		$this->add_control(
			'link', [
				'label' => esc_html__( 'Link', 'sodathemes' ),
				'type' => Controls_Manager::URL,
				'separator' => 'before'
			]
		);

		$this->end_controls_section();

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Socials', 'sodathemes' ),
				'condition' => [
					'layout' => 'socials'
				]
			]
		);

		asort( self::$default_socials );

		$repeater = new Repeater();

		$repeater->add_control(
			'default_socials', [
				'label' => esc_html__( 'Social Network', 'sodathemes' ),
				'type' => Controls_Manager::SELECT,
				'options' => self::$default_socials,
			]
		);


		$repeater->add_control(
			'link', [
				'label' => esc_html__( 'Link', 'sodathemes' ),
				'type' => Controls_Manager::URL
			]
		);

		$this->add_control(
			'socials', [
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
			]
		);

		$this->end_controls_section();

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Fixed Bar Style', 'sodathemes' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'text_color', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-slider-fixed-bar' => 'color: {{VALUE}}',
				]
			]
		);

		$this->add_control(
			'background_color', [
				'label' => esc_html__( 'Background Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-slider-fixed-bar' => 'background-color: {{VALUE}}',
				]
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$this->add_render_attribute( 'slider-fixed-bar', [
			'class' => [
				'vlt-slider-fixed-bar',
				'vlt-slider-fixed-bar--' . $settings[ 'position' ],
				'vlt-slider-fixed-bar--' . $settings[ 'alignment' ]
			]
		] );

		if ( $settings[ 'link' ][ 'url' ] ) {

			$this->add_render_attribute( 'link', [
				'class' => 'vlt-slider-fixed-bar-link',
				'href' => $settings[ 'link' ][ 'url' ]
			] );

			if ( $settings[ 'link' ][ 'is_external' ] ) {
				$this->add_render_attribute( 'link', 'target', '_blank' );
			}

			if ( $settings[ 'link' ][ 'nofollow' ] ) {
				$this->add_render_attribute( 'link', 'rel', 'nofollow' );
			}

		}

		$this->add_render_attribute( 'progress-bar', [
			'class' => 'vlt-swiper-progress',
			'data-direction' => 'vertical'
		] );

	?>

	<div <?php echo $this->get_render_attribute_string( 'slider-fixed-bar' ); ?>>

		<div class="flex-grow-0 flex-shrink-0"></div>

		<div class="d-flex flex-grow-1 flex-shrink-1 align-items-center justify-content-center">

			<?php

				switch( $settings[ 'layout' ] ) {

					case 'socials':

						if ( $settings[ 'socials' ] ) {

							echo '<div class="vlt-slider-fixed-bar-socials">';

							foreach ( $settings[ 'socials' ] as $item ) {

								if ( array_key_exists( $item[ 'default_socials' ], self::$default_socials ) ) {
									$icon_class = self::$social_icons[ $item[ 'default_socials' ] ];
									$icon_text= self::$default_socials[ $item[ 'default_socials' ] ];
								}

								if ( $item[ 'link' ][ 'url' ] ) {

									$this->add_render_attribute( 'social-link-' . $item[ '_id' ], [
										'class' => 'vlt-social-icon vlt-social-icon--style-2',
										'href' => $item[ 'link' ][ 'url' ]
									] );

									if ( $item[ 'link' ][ 'is_external' ] ) {
										$this->add_render_attribute( 'social-link-' . $item[ '_id' ], 'target', '_blank' );
									}

									if ( $item[ 'link' ][ 'nofollow' ] ) {
										$this->add_render_attribute( 'social-link-' . $item[ '_id' ], 'rel', 'nofollow' );
									}

									echo '<a ' . $this->get_render_attribute_string( 'social-link-' . $item[ '_id' ] ) . '>';

									if ( ! empty( $icon_class ) ) :
										echo '<i class="socicon-fw ' . $icon_class . '"></i>';
									endif;

									echo '</a>';

								}

							}

							echo '</div>';

						}

					break;

					case 'navigation-bar':

						echo '<div ' . $this->get_render_attribute_string( 'progress-bar' ) . '><span class="current"></span><div class="bar"><span></span></div><span class="total"></span></div>';

					break;

				}

			?>

		</div>

		<div class="flex-grow-0 flex-shrink-0 text-center">

			<?php

				if ( $settings[ 'link' ][ 'url' ] ) {

					echo '<a ' . $this->get_render_attribute_string( 'link' ) . '><i class="ri-layout-grid-fill"></i></a>';

				}

			?>

		</div>

	</div>

	<?php

	}

}