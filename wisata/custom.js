function sweet() {
	var a = document.getElementById("kredit");
	var b = document.getElementById("transfer");
	var c = document.getElementById("paypal");
	
	
	if(!a.checked&& !b.checked && !c.checked){
		alert("Pilih metode pembayaran terlebih dahulu!");
		
	}
	else{
swal({
  position: 'center',
  type: 'success',
  title: 'Booking telah berhasil',
  showConfirmButton: false,
  timer: 1500
});
	
	}
}