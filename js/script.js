$(document).ready(function() {
	$(window).scroll(function() {
		$("#banner div")[1].style.transform = 'translateY('+$(this).scrollTop()/3+'px)'
		$("#banner div")[2].style.transform = 'translateY('+$(this).scrollTop()/5+'px)'
		$("#banner div")[3].style.transform = 'translateY('+$(this).scrollTop()/7+'px)'
		$("#banner div")[4].style.transform = 'translateY('+$(this).scrollTop()/10+'px)'
		if($(this).scrollTop()>=$(window).height()/2){
			$("#spybar").slideDown()
		}else if ($(this).scrollTop()<$(window).height()/2) {
			$("#spybar").slideUp()
		}
		for(var i = 2;i<6;i++){
			if($(this).scrollTop() >= $(".container > div")[i].offsetTop) {
				for(var e=0;e<5;e++) {
					if ($(".menu > a")[e].classList.contains('activebtn')) {
						$(".menu > a")[e].classList.remove('activebtn')
					}
				}
				$(".menu > a")[i-2].classList.add("activebtn")
			}else if ($(this).scrollTop() < $("#profile").offset().top-200){
				$(".menu > a")[0].classList.remove('activebtn')
			}
		}
		console.log($(this).scrollTop())
	});
});