(function($){

Craft.KraftInputMask = Garnish.Base.extend(
{
	init: function(id, settings)
	{
		$('#'+id).mask(settings);
	}
});

})(jQuery);