(function ($) {

	$.entwine('ss', function ($) {

		/**
		 * Customise the cms-panel behaviour for right sidebar
		 * 
		 * see LeftAndMain.Panel.js for base behaviour
		 */
		$('.rightsidebar').entwine({
			MinInnerWidth: 620,
			onadd: function() {
				// only set cms-panel collapse/expand if direct child of fieldset (not when inside tab)
				if(this.parent('fieldset').length){
					this._super();
					//console.log('setting');
				}
				this.updateLayout();
				
				// If this panel is open and the left hand column is smaller than the minimum, contract it instead
				if(!this.hasClass('collapsed') && ($(".rightsidebar-outer").width() < this.getMinInnerWidth())) {
					//this.collapsePanel();
				}
			},
			togglePanel: function(bool, silent) {
				this._super(bool, silent);
				this.updateLayout();
			},
			/**
			 * Adjust minimum width of content to account for extra panel
			 * 
			 * @returns {undefined}
			 */
			updateLayout: function() {
				$('.cms-container').updateLayoutOptions({
					MinContentWidth: 820 + this.width()
				});
			}
		});

	});
})(jQuery);
