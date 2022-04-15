'use strict';
$(document).ready(function() {
  var isMobile = false;
    if( /Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        $('html').addClass('touch');
        isMobile = true;

    }
    else {
        $('html').addClass('no-touch');
        isMobile = false;
    }

  var e = 0,
        b = $('body, .bg').length,
        t = 0;

  $('body, .bg').imagesLoaded({ background: !0 }).always(function(e) {
        setTimeout(function(){
            $('.loading').addClass('fadeOut2');
            $('body').removeClass('preload');
        }, 3000);
  }).progress(function(a, i) {
        var n = 100 * (t = ++e / b);
        $('.progress-bar span').css('width', n + '%')
  });

  $('body').imagesLoaded().always( function( instance ) {
        setTimeout(function(){
	        // init ScrollMagic
            var ctrl = new ScrollMagic.Controller();
            var $split = $('.js-lines');

            // Text wave for slider
            function textWave(){
                if($(".js-text-wave").length){
                    $(".js-text-wave").each(function(){
                        if(!$(this).hasClass("complete")){
                            $(this).addClass("complete");
		                    var textChange = $(this).html().replace("<br />", "~"),
		                        textChange = textChange.replace("<br>", "~"),
                                textChange = $(this).html(),
                                textArray = textChange.split(""), //  /\r?\n/
                                textDone = "",
                                num;
                            for (var i = 0; i < textArray.length; i++) {
                                if(textArray[i] == " "){
                                    textDone += " ";
                                } else if(textArray[i] == "~"){
                                    textDone += "<br />";
                                } else{
                                    textDone += '<div><span style="transition-delay: '+(i/30)+'s;">'+textArray[i]+'</span></div>';
                                }
                            }
                            console.log("Done?");
                            $(this).html(textDone);
                            console.log("Done??");
                        }
                    });
                }
            }
            textWave();

	        //splitWords Load
	        var $splitWords = $('.js-words').length;

	        if($splitWords){
	            var $splitWords = new SplitText('.js-words', {type: 'chars, words'});
	            var tweenWords = new TimelineMax();
                tweenWords.add([
                    TweenMax.staggerFrom($splitWords.chars, 0.3, {
                        y: 60,
                        opacity: 0,
			            delay: .3,
                        ease: 'Power2.easeOut'
                    }, 0.05),
                    TweenMax.staggerTo($splitWords.chars, 0.3, {
                        y: 0,
                        opacity: 1,
			            delay: .3,
                        ease: 'Power2.easeOut'
                    }, 0.05)
                ]);
            }
            console.log("Are we Done?");

	        //splitLines Load
	        var $splitLoad = $('.js-lines-l');

            $('.js-lines-l').each(function(i) {
	             var splitoneL = new SplitText($splitLoad[i], {type: 'lines'});
                 var tweenLine = new TimelineMax({
	                delay: .6
	            });
                if (!isMobile) {
                    tweenLine.staggerFrom(splitoneL.lines, .6, {
                        yPercent: 100,
                        opacity: 0,
	                    ease: 'Circ.easeOut'
                    }, 0.2);
                }
            });

	        //DownUp Load
            $('.js-down').each(function() {
                var tweenDown = new TimelineMax({
		            delay: .6,
	            });
                if (!isMobile) {
                    tweenDown.from(this, .6, {
                        yPercent: 100,
			            opacity: 0,
	                    ease: 'Circ.easeOut'
                    }, 0.2);
                }
            });

            // Reveal
            var steps = document.querySelectorAll('.reveal');

            $.each(steps, function(index, step){
		        if (!isMobile) {
                    new ScrollMagic.Scene({
                        triggerElement: step,
		                triggerHook: 'onEnter',
	                    reverse: false
                    })
                    .setClassToggle(step, 'animated')
                    .addTo(ctrl);
                    console.log("Can I be Done?");
		        }
	        });

	        //Scale Load
            $('.js-scale').each(function() {
                var tweenScale = new TimelineMax();
                if (!isMobile) {
                    tweenScale.from(this, .6, {
                        scale: 1.2,
			            opacity: 0,
	                    ease: 'Circ.easeOut'
                    });
                }
            });

            // Animation text line
            $('.js-lines').each(function(i) {
	            var splitone = new SplitText($split[i], {type: 'lines'});
                var tweenLine = new TimelineMax({
		            delay: .6,
	            });
                if (!isMobile) {
                    tweenLine.staggerFrom(splitone.lines, .6, {
                        y: 50,
                        opacity: 0,
	                    ease: 'Circ.easeOut'
                    }, 0.2);
                }
                console.log("Helllloo")
                new ScrollMagic.Scene({
                    triggerElement: this,
	                triggerHook: 'onEnter',
	                reverse: false
                })
                console.log("Testinggg")
                .setTween(tweenLine)
                .addTo(ctrl);
                console.log("How about now");
            });

            // Animation DownUp
            $('.js-block').each(function() {
                var tweenBlock = new TimelineMax();
                if (!isMobile) {
                    tweenBlock.from(this, .6, {
                        y: 50,
                        opacity: 0,
                        delay: .6,
	                    ease: 'Circ.easeOut'
                    });
                }
                new ScrollMagic.Scene({
                    triggerElement: this,
	                triggerHook: 'onEnter',
	                reverse: false
                })
                .setTween(tweenBlock)
                .addTo(ctrl);
            });

            // Animation opacity
            $('.js-opacity').each(function() {
                var tweenOpacity = new TimelineMax();
                if (!isMobile) {
                    tweenOpacity.to(this, .6, {
                        y: 50,
                        opacity: 0,
	                    ease: 'Power2.easeOut'
                    });
                }
                console.log("Nowww???")
                new ScrollMagic.Scene({
                    triggerElement: this,
	                triggerHook: 'onLeave',
	                duration: '100%'
                })
                .setTween(tweenOpacity)
                .addTo(ctrl);
            });

        }, 3000);
    });
    $('body').imagesLoaded().always(function() {
        var typingSpeed = 50; /* The speed/duration of the effect in milliseconds */
        var switchSpeed = 200;
        var text = ["Software Developer", "Computer Engineering Student", "Tech Enthusiest"];
    
        var speed = 100;
        var txt = "Software Developer"
        var i = 0;
        TypingText();
    
        function TypingText() {
            if (i < txt.length) {
                console.log(txt.charAt(i));
                document.getElementById("landingTitleTypingText").innerHTML += txt.charAt(i);
                i++;
                console.log(document.getElementById("landingTitleTypingText").innerHTML);
                setTimeout(TypingText, speed);
              }
        }
    });
});
