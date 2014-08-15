(function($) {
	$.entwine(
		'ss.preview', function($){
			$('.cms-preview').entwine({
					DefaultMode: 'content',
					onmatch: function() {
                        this.disablePreview();
					}
																			
				}
			);
		
		}
	);
}(jQuery));
