<?php /* Smarty version Smarty-3.0.7, created on 2014-07-16 03:55:42
         compiled from "E:\hiennv\htdocs\hamsa\1001extensions\src/modules/hscontestchristmas/views/templates/hook/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1553953c5db9eed7b41-94744460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e8f8608e6c846502ea6742329a659d95cc851bd' => 
    array (
      0 => 'E:\\hiennv\\htdocs\\hamsa\\1001extensions\\src/modules/hscontestchristmas/views/templates/hook/header.tpl',
      1 => 1405398721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1553953c5db9eed7b41-94744460',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<script>
var ajax_url = '<?php echo $_smarty_tpl->getVariable('ajax_url')->value;?>
';
var step = '<?php echo $_smarty_tpl->getVariable('step')->value;?>
';
var current_page = '<?php echo $_smarty_tpl->getVariable('p')->value;?>
';
var n	    = '<?php echo $_smarty_tpl->getVariable('n')->value;?>
';
$(document).ready(function(){
	// timer
	$("#countdown_time").countdownTimer({
		date: "June 25, 2014 23:59:59",
		htmlTemplate:
			// Days
			"<div class='clock_days element'>"+
			"<div class='bgLayer'>"+
			"<div class='topLayer'></div>"+
			"<div class='text'>"+
			"<p class='val'>%d</p>"+
			"</div>"+
			"</div>"+
			"</div>"+
			// end Days
			"<div class='element separator'>:</div>"+
			// Hours
			"<div class='clock_hours element'>"+
			"<div class='bgLayer'>"+
			"<div class='topLayer'></div>"+
			"<div class='text'>"+
			"<p class='val'>%h</p>"+
			"</div>"+
			"</div>"+
			"</div>"+
			// End hours
			"<div class='element separator'>:</div>"+
			// Minutes
			"<div class='clock_minutes element'>"+
			"<div class='bgLayer'>"+
			"<div class='topLayer'></div>"+
			"<div class='text'>"+
			"<p class='val'>%i</p>"+
			"</div>"+
			"</div>"+
			"</div>"+
			// End Minutes
			"<div class='element separator'>:</div>"+

			"<div class='clock_seconds element'>"+
			"<div class='bgLayer'>"+
			"<div class='topLayer'></div>"+
			"<div class='text'>"+
			"<p class='val'>%s</p>"+
			"</div>"+
			"</div>",

		onComplete: function( event ) {

		},
		leadingZero: true
	});
	// validate file
	$('input#picture').fileValidator({
		onInvalid:    function(type, file){  $(this).attr('class','invalid');},
		onValidation: function(type, file){  $(this).attr('class','');},
		type:        'image',
		maxSize:      '250kb'
	});
	// update real time for collect call 1' each time.
	if (step == 2)
	{
		// set time out 1' call updateRealTime()60
		setInterval(updateRealTime, 60000);
	}

});

/**
* Update real time data of three best ranking + list best ranking
*/
function updateRealTime()
{
	if ($("#realtime").val()==0)
		return ;
	// update the content

	$.ajax({
			url: ajax_url,
			type: 'POST',
			dataType:'JSON',
			data: {
				'action': 'updateRealTime',
				'step': step,
				'p': current_page,
				'n': n
			},
			success: function(response){
				$('#candidate_list').html(response.all_collect);
				$('#result_chart').html(response.top_collect);
				$('#best_collect_name').html(response.best_collect_name);
			}
	})
}
/**
	* Search collect
	*/
	function searchCollect()
	{

		    $('#search_collect_value').keyup(function(){
			$('.xmas-contest-page #pagination').hide();
			if (typeof searchCandidateXhr !== 'undefined')
			{
				searchCandidateXhr.abort();
			}
			searchCandidateXhr = $.ajax({
				url: ajax_url,
				type: 'POST',
				dataType:'html',
				data: {
					'action': 'searchCollect',
					'collect_name': $("#search_collect_value").val(),
					'step': step
				},
				success: function(response){
					$('#candidate_list').html(response);
				}
			})
			return false;
		});
	}
</script>
<script>

window.fbAsyncInit = function() {
    FB.init({
        appId  : '654517647964057',
        status : true, // check login status
        cookie : true, // enable cookies to allow the server to access the session
        xfbml  : true  // parse XFBML
    });

    FB.Event.subscribe('edge.create', function(href, widget) {
	updateRealTime();
    });
    FB.Event.subscribe('edge.remove', function(href, widget) {
	updateRealTime();
   });
};
	$(document).ajaxComplete(function(){
		try{
			FB.XFBML.parse();
		}catch(ex){}
	});
	(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1&appId=266594066795694";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
