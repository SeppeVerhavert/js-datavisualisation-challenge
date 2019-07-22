/* MediaWiki:Common.js */
$(document).ready(function(){
	$('#mw-pages a').each(function (idx,val) {
		$val = $(val);
		var txt = $val.text();
		txt = txt.replace('Glossary:','');
		txt = txt.replace('Glossaire:','');
		txt = txt.replace('Glossar:','');
		txt = txt.replace('Glossarium:','');
		txt = txt.replace('Słownik:','');
                txt = txt.replace('Sõnastik:','');
                txt = txt.replace('Γλωσσάριo:','');
		$val.text(txt);
	});
url = window.location.href;
	/*if(/action=edit/.test(url)){
		$("a").click(function(e){
			if ($(this).attr('href') != '') {
				if(!confirm("You are editing a page. Clicking on the link will leave the page and discard the changes")){
					e.preventDefault();
				}
			}
		});
	}*/
});

function ModifySidebar( action, section, name, link ) {
	try {
		switch ( section ) {
			case 'languages':
				var target = 'p-lang';
				break;
			case 'toolbox':
				var target = 'p-tb';
				break;
			case 'navigation':
				var target = 'p-navigation';
				break;
			default:
				var target = 'p-' + section;
				break;
		}
 
		if ( action == 'add' ) {
			var node = document.getElementById( target )
							   .getElementsByTagName( 'div' )[0]
							   .getElementsByTagName( 'ul' )[0];
 
			var aNode = document.createElement( 'a' );
			var liNode = document.createElement( 'li' );
 
			aNode.appendChild( document.createTextNode( name ) );
			aNode.setAttribute( 'href', link );
			liNode.appendChild( aNode );
			liNode.className = 'plainlinks';
			node.appendChild( liNode );
		}
 
		if ( action == 'remove' ) {
			var list = document.getElementById( target )
							   .getElementsByTagName( 'div' )[0]
							   .getElementsByTagName( 'ul' )[0];
 
			var listelements = list.getElementsByTagName( 'li' );
 
			for ( var i = 0; i < listelements.length; i++ ) {
				if (
listelements[i].id == name ||					
listelements[i].getElementsByTagName( 'a' )[0].innerHTML == name ||
					listelements[i].getElementsByTagName( 'a' )[0].href == link
				)
				{
					list.removeChild( listelements[i] );
				}
			}
		}
 
	} catch( e ) {
		// let's just ignore what's happened
		return;
	}
}
 
function CustomizeModificationsOfSidebar() {
	// adds [[Special:CategoryTree]] to toolbox
	//ModifySidebar( 'add', 'toolbox', 'CategoryTree', 'http://en.wikipedia.org/wiki/Special:CategoryTree' );
	ModifySidebar( 'remove', 'toolbox', 't-recentchangeslinked', '' );
ModifySidebar( 'remove', 'toolbox', 't-print', '' );
ModifySidebar( 'remove', 'toolbox', 't-info', '' );
ModifySidebar( 'remove', 'toolbox', 't-permalink', '' );

//Page information
//Permanent link
}
 
addOnloadHook( CustomizeModificationsOfSidebar );
;
mw.loader.state({"site":"ready"});