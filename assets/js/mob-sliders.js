var sliderWidth = $(document).width();

var coursesOwl = $("#course-slide");
	coursesOwl.owlCarousel({
		itemsCustom: [
			[0, 1],
			[450, 1],
			[600, 1],
			[700, 2],
			[1000, 3],
			[1200, 3],
			[1400, 3],
			[1600, 3]
		],
		navigation: false,
		autoPlay: true,
		center:true,
		autoplayTimeout: 1000
	});
	
	
var coursesOwl = $("#course-retreat");
	coursesOwl.owlCarousel({
		itemsCustom: [
			[0, 1],
			[450, 1],
			[600, 1],
			[700, 2],
			[1000, 3],
			[1200, 3],
			[1400, 3],
			[1600, 3]
		],
		navigation: false,
		autoPlay: true,
		center:true,
		autoplayTimeout: 1000
	});

if (sliderWidth <= 991) {
	var AccomoOwl = $("#accomo-slide");
	AccomoOwl.owlCarousel({
		itemsCustom: [
			[0, 1],
			[450, 1],
			[600, 1],
			[700, 1],
			[1000, 1],
			[1200, 1],
			[1400, 1],
			[1600, 1]
		],
		navigation: true,
		autoPlay: true,
		autoplayTimeout: 1000
	});
	var foodOwl = $("#food-slide");
	foodOwl.owlCarousel({
		itemsCustom: [
			[0, 1],
			[450, 1],
			[600, 1],
			[700, 1],
			[1000, 1],
			[1200, 1],
			[1400, 1],
			[1600, 1]
		],
		navigation: true,
		autoPlay: true,
		autoplayTimeout: 1000
	});
	var yogaOwl = $("#yoga-img-slide");
	yogaOwl.owlCarousel({
		itemsCustom: [
			[0, 1],
			[450, 1],
			[600, 1],
			[700, 1],
			[1000, 1],
			[1200, 1],
			[1400, 1],
			[1600, 1]
		],
		navigation: true,
		autoPlay: true,
		autoplayTimeout: 1000
	});
	var teacherOwl = $("#teacher-slide");
	teacherOwl.owlCarousel({
		itemsCustom: [
			[0, 1],
			[450, 1],
			[600, 1],
			[700, 1],
			[1000, 1],
			[1200, 1],
			[1400, 1],
			[1600, 1]
		],
		navigation: true,
		autoPlay: true,
		autoplayTimeout: 1000
	});
	var reviewOwl = $("#review-slide");
	reviewOwl.owlCarousel({
		itemsCustom: [
			[0, 1],
			[450, 1],
			[600, 1],
			[700, 1],
			[1000, 1],
			[1200, 1],
			[1400, 1],
			[1600, 1]
		],
		navigation: true,
		autoPlay: true,
		autoplayTimeout: 1000
	});
}