/**
 * @author    Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @copyright Copyright (c) 2014, Pixel & Tonic, Inc.
 * @license   http://buildwithcraft.com/license Craft License Agreement
 * @see       http://buildwithcraft.com
 * @package   craft.app.resources
 */

(function($){

Craft.KraftInputMask = Garnish.Base.extend(
{
	init: function(id, settings)
	{
		$('#'+id).mask(settings);
	}
});

})(jQuery);