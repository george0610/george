<?php
class Bicycleshop_Skt13Framework_Uni{
	function __construct(){
		add_filter( 'bicycleshop_docs_address', array( $this, 'docs_link' ), 10, 2 );
	}

	function docs_link() {
		return 'https://www.sktthemesdemo.net/documentation/bicycleshop-doc';
	}
}

new Bicycleshop_Skt13Framework_Uni();






