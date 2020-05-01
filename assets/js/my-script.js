// ======== sweet alert ========
// button-delete
$('.button-delete').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');

	Swal({
		title: 'Apakah Anda Yakin',
		text: "Data Akan Dihapus",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus Data'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})

});

// flash-data sukses
const flashData = $('.flash-data').data('flashdata');
if (flashData) {
	Swal({
		title: 'Success',
		text: flashData,
		type: 'success'
	});
}

// flash-data error
const flashError = $('.flash-error').data('flashdata');
if (flashError) {
	Swal({
		title: 'Error',
		text: flashError,
		type: 'error'
	});
}
// ======== end sweet alert ========

// ======== data tabel ========
$(document).ready(function () {
	$('#myTable').DataTable();
	$('#myTable2').DataTable();
	$('#tableExport').DataTable({
		dom: 'Bfrtip',
		buttons: [
			'copy', 'csv', 'excel', 'pdf', 'print'
		]
	});
});
// ======== end data tabel ========

// ======== preview img  ========
function readURL(input) {

	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function (e) {
			$('#prev').attr('src', e.target.result);
		}

		reader.readAsDataURL(input.files[0]);
	}
}

$("#real-file").change(function () {
	readURL(this);
});
// ======== end preview img  ========


// ======== popover on mouseover ========
$(".pop").popover({
		trigger: "manual",
		html: true,
		animation: false
	})
	.on("mouseenter", function () {
		var _this = this;
		$(this).popover("show");
		$(".popover").on("mouseleave", function () {
			$(_this).popover('hide');
		});
	}).on("mouseleave", function () {
		var _this = this;
		setTimeout(function () {
			if (!$(".popover:hover").length) {
				$(_this).popover("hide");
			}
		}, 300);
	});
// ======== end popover on mouseover ========

// ======== input type file ========
const realFileBtn = document.getElementById("real-file");
const customBtn = document.getElementById("custom-button");
const customTxt = document.getElementById("custom-text");

customBtn.addEventListener("click", function () {
	realFileBtn.click();
});

realFileBtn.addEventListener("change", function () {
	if (realFileBtn.value) {
		customTxt.innerHTML = realFileBtn.value.match(
			/[\/\\]([\w\d\s\.\-\(\)]+)$/
		)[1];
	} else {
		customTxt.innerHTML = "Tidak ada file yang diupload";
	}
});
// ======== end input type file ========

// ======== show hide sidebar ========
// function showHide() {
// 	var x = document.getElementById("accordionSidebar");
// 	if (x.style.display === "none") {
// 		x.style.display = "block";
// 	} else {
// 		x.style.display = "none";
// 	}
// }
// ======== end show hide sidebar ========
