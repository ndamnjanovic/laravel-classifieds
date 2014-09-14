var myDropzone;

Dropzone.options.myDropzone = {
	init: function() {
	  this.on("addedfile", function(file) {

	    // Create the remove button
	    var removeButton = Dropzone.createElement("<button class='btn btn-dropzone'>Remove file</button>");
	    

	    // Capture the Dropzone instance as closure.
	    var _this = this;

	    // Listen to the click event
	    removeButton.addEventListener("click", function(e) {
	      // Make sure the button click doesn't submit the form:
	      e.preventDefault();
	      e.stopPropagation();

	      // Remove the file preview.
	      _this.removeFile(file);
	      // If you want to the delete the file on the server as well,
	      // you can do the AJAX request here.
	    });

	    // Add the button to the file preview element.
	    file.previewElement.appendChild(removeButton);
	  });
	}
};

/**************************
*
*	EXT - for the quotes
*
**************************/
(function($){
	$.fn.extend({ 
        //plugin name - rotaterator
        rotaterator: function(options) {

        	var defaults = {
        		fadeSpeed: 600,
        		pauseSpeed: 100,
        		child:null
        	};

        	var options = $.extend(defaults, options);

        	return this.each(function() {
        		var o =options;
        		var obj = $(this);                
        		var items = $(obj.children(), obj);
        		items.each(function() {$(this).hide();})
        		if(!o.child){var next = $(obj).children(':first');
        	}else{var next = o.child;
        	}
        	$(next).fadeIn(o.fadeSpeed, function() {
        		$(next).delay(o.pauseSpeed).fadeOut(o.fadeSpeed, function() {
        			var next = $(this).next();
        			if (next.length == 0){
        				next = $(obj).children(':first');
        			}
        			$(obj).rotaterator({child : next, fadeSpeed : o.fadeSpeed, pauseSpeed : o.pauseSpeed});
        		})
        	});
        });
        }
    });
})(jQuery);

$(function(){

	//home page quotes
	$('#quotes').rotaterator({fadeSpeed:1000, pauseSpeed:3000});

	//always activate first tab
	$('#myTab a:eq(1)').tab('show');

    
    //listings show more
    $( "#more_make" ).bind( "click", function() {
        $('#more_make_list').show();
        $('#more_make_link').hide();
        return false;
    });    
    $( "#less_make" ).bind( "click", function() {
        $('#more_make_list').hide();
        $('#more_make_link').show();
        return false;
    });
	//the graph
    if($("#visualization").length > 0){


          var css_id = "#visualization";
        var data = [
            {label: 'BMW 525D SE TOURING SILVER', data: [[1,700], [2,600], [3,400], [4,390], [5,300], [6,300], [7,300]]},
            {label: 'SEAT Leon 1.6 TDI CR S 5dr (2010)', data: [[1,800], [2,600], [3,400], [4,400], [5,500], [6,400], [7,400]]},
            {label: '2008 Scuderia Spider 16M', data: [[1,800], [2,200], [3,200], [4,200], [5,100], [6,50], [7,0]]}
        ];
        var options = {
            series: {stack: 0,
                     lines: {show: true, steps: false },
                     bars: {show: false, barWidth: 0.9, align: 'center'}
            },
            xaxis: {ticks: [[1,'Sun'], [2,'Mon'], [3,'Tue'], [4,'Wed'], [5,'Thu'], [6,'Fri'], [7,'Sat']]}
        };

        $.plot($(css_id), data, options);
    }


	//make text area bigger
	var textarea_height = $('textarea.expand').height();
    $('textarea.expand').focus(function () {
        $(this).animate({ height: "400px" }, 500);
    });    
    $('textarea.expand').focusout(function () {
        $(this).animate({ height: textarea_height }, 500);
    });

	//activate dropzone
	if($("#my-dropzone").length > 0) {
		//myDropzone = new Dropzone("#my-dropzone", {url: "test.php", autoProcessQueue:false});
	}
    
    $(document)
        .on('change', '.btn-file :file', function() {
            $('#file-select').attr('src', 'css/images/loading.png');
            var input = $(this),
                numFiles = input.get(0).files ? input.get(0).files.length : 1,
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
            input.trigger('fileselect', [numFiles, label, input]);
    });

    $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
        readURL(event);
    });
    
    //fancybox
    $(".fancybox").fancybox({
        prevEffect		: 'none',
		nextEffect		: 'none',
		closeBtn		: false,
		helpers		: {
			title	: { type : 'inside' },
			buttons	: {}
		}
	});
    
    $(".fancybox-button").fancybox({
		prevEffect		: 'none',
		nextEffect		: 'none',
		closeBtn		: false,
		helpers		: {
			title	: { type : 'inside' },
			buttons	: {}
		}
	});
    
    $('.fancybox-media').fancybox({
		openEffect  : 'none',
		closeEffect : 'none',
		helpers : {
			media : {}
		}
	});
    
    //for the dropdown regions box
    $( "#regionsBtn" ).bind( "click", function() {
        $('#myTab a:eq(0)').tab('show');
        $('#regionsModal').modal({
            keyboard: false
        });
        return false;
    });
    
    $(document).click(function(event) { 
        if($(event.target).parents().index($('#regionsModal')) == -1) {
            if($('#regionsModal').is(":visible")) {
                $('#regionsModal').modal('hide');
            }
        }        
    });
    
    $('[data-toggle="tooltip"]').tooltip();
    
    //the login modals
    $('#modalLogin').on('show.bs.modal', function () {
        $('#modalSignup').modal('hide');
    });
    
    $('#modalForgot').on('show.bs.modal', function () {
        $('#modalLogin').modal('hide');
    });

});

function readURL(event) {
    var input = event.target;
    console.log(input.files[0]);
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#file-select')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}