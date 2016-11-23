if (window.$){
	console.log('jQuery berhasil diload');
} else {
	console.log('jQuery belum berhasil diload');
}

// $(".title").hover(function() {
// 	console.log("klik dari judul");
// });

// $("h1").click(function() {
// 	$("h3").toggle();
// });

// $("#nama").keyup(function() {
// 	var nama = $(this).val();
// 	// $("#namaResult").html(nama);
// 	console.log($(this).val());
// });

// $("h1").click(function(event) {
// 	// $("h3").addClass('red');//menambah class
// 	//$("h3").append('as');//menambah text
// 	//$("h3").text('aasas');//mereplace text tapi tidak bisa membaca tag html
// 	// $(".template").appendTo("h3");
// });

// $("#statusSubmit").click(function(e) {
// 	$.ajax({
// 		method: "POST",
// 		url: "proses.php",
// 		// type: 'default GET (Other values: POST)',
// 		// dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
// 		data: {nama: 'Hafiizh', location: 'Malang'},
// 	})
// 	.done(function(msg) {
// 		console.log(msg);
// 	})

	
// 	// var statusFormValue = $("#statusForm").val();
// 	// $("#timeline").append("<div>"+statusFormValue+"</div>");

// 	e.preventDefault();
// });