

/* 1. Countdown */

$(document).ready(function() {
	"use strict";
	$('#countdown').countDown({
		targetDate: {
			'day': 		19,
			'month': 	10,
			'year': 	2016,
			'hour': 	11,
			'min': 		13,
			'sec': 		0
		},
		omitWeeks: true
	});
});

/* 2. Video Background */

$(document).ready(function() {
	"use strict";
	var options = { videoId: 'e4Is32W-ppk', start: 3 };
	$('.ng-video-background').tubular(options);
	// f-UGhWj1xww cool sepia hd
	// 49SKbS7Xwf4 beautiful barn sepia
});

/* 3. NotifyMe */
jQuery(document).ready(function() {
    "use strict";
        $("#notifyMe").notifyMe();
});