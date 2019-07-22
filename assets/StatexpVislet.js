$(document).ready(function(){   
	$('a.statexp-vislet').on('click', function (evt) {
		
		$this = $(this);
		
		var src = $this.attr('href');
		var width = $this.attr('data-width');
		var height = $this.attr('data-height');
		
		var title = '';
		var footpage = '';

		if ($this.attr('data-title') !== undefined) {
			title = '<h4>'+$this.attr('data-title')+'</h4>';
		}

		if ($this.attr('data-footpage') !== undefined) {
			footpage = ''+$this.attr('data-footpage')+'</p>';
		}
		
		if ($this.attr('data-video') === undefined) {
			evt.stopPropagation();
			evt.preventDefault();
			newwindow = window.open('', "vislet", "resizable=yes, scrollbars=yes, titlebar=no, width="+width+", height="+height+", top=10, left=10");
			newwindow.document.write('<div><div>'+title+'</div><iframe src="'+src+'" width="100%" height="100%"></iframe><p style="text-align: right; color: grey; padding-right: 7px; font-size: 10px; font-style: italic;">'+footpage+'</p></div>');
			newwindow.document.close();
		}
	});
});
