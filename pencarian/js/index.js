/*
 * Finest Technology(http://finesttechno.com/)
 * Copyright 2014 Finest Technology, Inc.
 */

 $(function(){
 	$('#cari').val('');
 	$('#cari').keyup(function(){
 		query=$(this).val();
 		$.get('get_news.php?judul='query,
 			function(data){
 				$('.isi').html(data);
 			});
 	});

 });