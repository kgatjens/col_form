/*
/*
 * <Client Name>
 * 
 * <Project Name>
 *
 * Global Namespace
 */
var clientName = window.clientName || {};

/*
 * Global logic
 * @namespace
 */
(function (context, $) {
	
	var vars = {
			a : 0,
			b : 1
		};
	
	var utils = {
		
		/**
		 * Description
		 */
		method1 : function() {
			
		}
	};
	
	/**
	 * Description
	 * 
	 * @return a lovely message.
	 */
	context.publicMethod = function () {
		return "I'm scared";
	}
	
	/**
	 * Initializes the module.
	 */
	function init() {
		
	}

	function hideAll(){}

	$("#question1").click(function() {
		$("#question2").show();
		$("#question1").hide();
	});

	$("#question2").click(function() {
		$("#question3").show();
		$("#question2").hide();
	});

	$("#question3").click(function() {
		$("#question4").show();
		$("#question3").hide();
	});

	$("#question4").click(function() {
		$("#question5").show();
		$("#question4").hide();
	});

	$("#question4").click(function() {
		$("#question5").show();
		$("#question4").hide();
	});

	$("#question5").click(function() {
		$("#question6").show();
		$("#question5").hide();
	});

	$("#question6").click(function() {
		$("#question7").show();
		$("#question6").hide();
	});

	$("#question7").click(function() {
		$("#question8").show();
		$("#question7").hide();
	});

	$("#question8").click(function() {
		$("#question9").show();
		$("#question8").hide();
	});

	$("#question9").click(function() {
		
		$("#question9").hide();
	});
	
	$(init);

})(clientName, jQuery);
