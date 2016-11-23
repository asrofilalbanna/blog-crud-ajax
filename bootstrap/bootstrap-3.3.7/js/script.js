
$("#pegawaiForm").submit(function(e) {
	var pegawaiForm = $(this).serialize();

	$.ajax({
		url: 'proses_create.php',
		method: "POST",
		data: pegawaiForm,
	})
	.done(function() {
		alert("success");
		
	})
		e.preventDefault();
});

$(document).on("click",".hapus",function() {
	id = $(this).attr('id');
	console.log(id);
	if (confirm("Did you wanna erase this data?")){
	$.ajax({
		method: "POST",
		url: 'delete.php?id='+id,
		success: function(){
		}
	});	
	$(this).parent().parent().fadeOut(500);
	} return false;
});

function tampil(){

	var search = $("#search").val();

	$.ajax({
		method: 'POST',
		url: 'cari.php',
		// dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
		data: "search="+search,
	})
	.done(function(data) {
		$("#data").html(data)
	})
}


$("#search").keyup(function() {
	var search = $(this).val();
	tampil();
});