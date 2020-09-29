
	
$(document).ready(function(){
    $("#datepicker").datepicker();
	 $("#datepicker2").datepicker();
		
  });


	
function negara(){
	var a=document.getElementById("pilihhotel");
	var z=document.getElementById("datepicker").value;
	
	if(z==="")
		{alert("Pilih tanggal keberangkatan terlebih dahulu!");}
	else{
	
		if(document.getElementById("negara").value == "singa"){
			document.getElementById("panelhotelkendaraan").style.display = 'block';
			document.getElementById("panelhotelkendaraan2").style.display = 'none';
			document.getElementById("panelhotelkendaraan3").style.display = 'none';
			document.getElementById("panel1").style.display='none';
			document.getElementById("panel2").style.display='none';
			document.getElementById("panel3").style.display='none';
			document.getElementById("panel4").style.display='none';
			document.getElementById("paneldatadiri").style.display='none';
			document.getElementById("paneldatadiri2").style.display='none';
			document.getElementById("isidata").style.display='none';
			document.getElementById("pembayaran").style.display='none';

			a.href="#panelhotelkendaraan";

					}
		else if(document.getElementById("negara").value == "hawaii"){
			document.getElementById("panelhotelkendaraan3").style.display = 'block';
			document.getElementById("panelhotelkendaraan").style.display = 'none';
			document.getElementById("panelhotelkendaraan2").style.display = 'none';
			document.getElementById("panel2").style.display = 'none';
			document.getElementById("panel1").style.display='none';
			document.getElementById("panel3").style.display='none';
			document.getElementById("panel4").style.display='none';
			document.getElementById("paneldatadiri").style.display='none';
			document.getElementById("paneldatadiri2").style.display='none';
			document.getElementById("isidata").style.display='none';
			document.getElementById("pembayaran").style.display='none';

			a.href="#panelhotelkendaraan3";
					}	

		else if(document.getElementById("negara").value == "perancis"){
			document.getElementById("panelhotelkendaraan4").style.display = 'block';
			document.getElementById("panelhotelkendaraan").style.display = 'none';
			document.getElementById("panelhotelkendaraan2").style.display = 'none';
			document.getElementById("panelhotelkendaraan3").style.display = 'none';
			document.getElementById("panel4").style.display = 'none';
			document.getElementById("panel2").style.display='none';
			document.getElementById("panel1").style.display='none';
			document.getElementById("panel3").style.display='none';
			document.getElementById("paneldatadiri").style.display='none';
			document.getElementById("paneldatadiri2").style.display='none';
			document.getElementById("isidata").style.display='none';
			document.getElementById("pembayaran").style.display='none';

			a.href="#panelhotelkendaraan4";
					}
		}
}

function negara2(){
	
	var z=document.getElementById("datepicker2").value;
	
	if(z==="")
		{alert("Pilih tanggal keberangkatan terlebih dahulu!");}
	else{
	
	
		document.getElementById("panelhotelkendaraan2").style.display = 'block';
		document.getElementById("panelhotelkendaraan").style.display = 'none';
		document.getElementById("panelhotelkendaraan3").style.display = 'none';
		document.getElementById("panel1").style.display='none';
		document.getElementById("panel2").style.display='none';
		document.getElementById("panel3").style.display='none';
		document.getElementById("panel4").style.display='none';
		document.getElementById("paneldatadiri").style.display='none';
		document.getElementById("paneldatadiri2").style.display='none';
		document.getElementById("isidata").style.display='none';
		document.getElementById("pembayaran").style.display='none';
	
				}	
}
	
function paket(param)
	{	
		if(param==1)
			{
		document.getElementById("panelhotelkendaraan").style.display = 'none';
		document.getElementById("panelhotelkendaraan2").style.display = 'none';
		document.getElementById("panelhotelkendaraan3").style.display = 'none';
		document.getElementById("panel1").style.display='block';
		document.getElementById("panel2").style.display='none';
		document.getElementById("panel3").style.display='none';
		document.getElementById("panel4").style.display='none';	
		
			}
		
		else if(param==2)
			{
		document.getElementById("panelhotelkendaraan").style.display = 'none';
		document.getElementById("panelhotelkendaraan2").style.display = 'none';
		document.getElementById("panelhotelkendaraan3").style.display = 'none';
		document.getElementById("panelhotelkendaraan4").style.display = 'none';
		document.getElementById("panel1").style.display='none';
		document.getElementById("panel2").style.display='none';
		document.getElementById("panel3").style.display='block';
		document.getElementById("panel4").style.display='none';	
				
		
			}
		
		else if(param==3)
			{
		document.getElementById("panelhotelkendaraan").style.display = 'none';
		document.getElementById("panelhotelkendaraan2").style.display = 'none';
		document.getElementById("panelhotelkendaraan3").style.display = 'none';
		document.getElementById("panelhotelkendaraan4").style.display = 'none';
		document.getElementById("panel1").style.display='none';
		document.getElementById("panel2").style.display='block';
		document.getElementById("panel3").style.display='none';
		document.getElementById("panel4").style.display='none';	
		
			}
		
		else if(param==4)
			{
		document.getElementById("panelhotelkendaraan").style.display = 'none';
		document.getElementById("panelhotelkendaraan2").style.display = 'none';
		document.getElementById("panelhotelkendaraan3").style.display = 'none';
		document.getElementById("panelhotelkendaraan4").style.display = 'none';
		document.getElementById("panel1").style.display='none';
		document.getElementById("panel2").style.display='none';
		document.getElementById("panel3").style.display='none';
		document.getElementById("panel4").style.display='block';	
		
			}
		
		}

	
	
	
function pakettour(){

document.getElementById("panelpaket").style.display = 'block';

}
	
function tampil_alamat(param){
if(param==1)
	{
document.getElementById("box1").style.display = 'block';
document.getElementById("box2").style.display = 'none';
	}

else if (param==2){
	
document.getElementById("box2").style.visibility = 'visible';
document.getElementById("box1").style.display = 'none';
}
		
}

function tutup(){
	var boxes = document.getElementsByClassName("video1");
	var a=boxes[0];
	var b=boxes[1];
	var c=boxes[2];
	var d=boxes[3];
	
	a.pause();
	a.currentTime = 0;
	b.pause();
	b.currentTime = 0;
	c.pause();
	c.currentTime = 0;
	d.pause();
	d.currentTime = 0;
	
			document.getElementById("deluxe").checked = false;
			document.getElementById("superior").checked = false;
			document.getElementById("standard").checked = false;
			
	
	 if (window.removeEventListener)
        window.removeEventListener('DOMMouseScroll', preventDefault, false);
    window.onmousewheel = document.onmousewheel = null; 
    window.onwheel = null; 
    window.ontouchmove = null;  
    document.onkeydown = null;  
}
	

	
function preventDefault(e) {
  e = e || window.event;
  if (e.preventDefault)
      e.preventDefault();
  e.returnValue = false;  
}

function preventDefaultForScrollKeys(e) {
    if (keys[e.keyCode]) {
        preventDefault(e);
        return false;
    }
}

function disableScroll(angka) {
	
 if (window.addEventListener) // older FF
      window.addEventListener('DOMMouseScroll', preventDefault, false);
  window.onwheel = preventDefault; // modern standard
document.onkeydown  = preventDefaultForScrollKeys;
	
var a=document.getElementById("link1");
var b=document.getElementById("link2");
var c=document.getElementById("link3");
var d=document.getElementById("link4");
var e=document.getElementById("link5");
var f=document.getElementById("link6");
var g=document.getElementById("link7");
var h=document.getElementById("link8");
var i=document.getElementById("link9");
var j=document.getElementById("link10");
var k=document.getElementById("link11");
var l=document.getElementById("link12");
var m=document.getElementById("link13");
var n=document.getElementById("link14");
var o=document.getElementById("link15");
var p=document.getElementById("link16");
	
	
if(angka==1)
	{	a.href="#popup";
		document.getElementById("srcvideo").src="merlionpark.MP4";
	}
else if(angka==2)
	{	b.href="#popup";
		document.getElementById("srcvideo").src="universal_studio.MP4";
	}
else if(angka==3)
	{	c.href="#popup";
		document.getElementById("srcvideo").src="orchard.MP4";
	}
else if(angka==4)
	{	d.href="#popup";
		document.getElementById("srcvideo").src="chinatown.MP4";
	}
else if(angka==5)
	{	e.href="#popup2";
		document.getElementById("srcvideo2").src="lanikai.MP4";
	}
else if(angka==6)
	{	f.href="#popup2";
		document.getElementById("srcvideo2").src="hilo.MP4";
	}
else if(angka==7)
	{	f.href="#popup2";
		document.getElementById("srcvideo2").src="Waimea.MP4";
	}
else if(angka==8)
	{	h.href="#popup2";
		document.getElementById("srcvideo2").src="Polynesian2.MP4";
	}
else if(angka==9)
	{	i.href="#popup7";
		document.getElementById("srcvideo3").src="komodo.MP4";
	}
else if(angka==10)
	{	j.href="#popup7";
		document.getElementById("srcvideo3").src="Raja_ampat.MP4";
	}
else if(angka==11)
	{	k.href="#popup7";
		document.getElementById("srcvideo3").src="bali.MP4";
	}
else if(angka==12)
	{	l.href="#popup7";
		document.getElementById("srcvideo3").src="borobudur.MKV";
	}
else if(angka==13)
	{	m.href="#popup8";
		document.getElementById("srcvideo4").src="seineriver.MP4";
	}
else if(angka==14)
	{	n.href="#popup8";
		document.getElementById("srcvideo4").src="museumlouvre.MP4";
	}
else if(angka==15)
	{	o.href="#popup8";
		document.getElementById("srcvideo4").src="eiffel.MKV";
	}
else if(angka==16)
	{	p.href="#popup8";
		document.getElementById("srcvideo4").src="arc de triomphe.MP4";
	}	

}
	
	
function jeniskamar()
	{
		var a=document.getElementById("jeniskamar1");
		if(a){ }
	}

function jenis()
	{
		var a=document.getElementById("jenis");
		if(a){ }
	}


	
function pilihkamar(angka)
	{
	var a=document.getElementById("deluxeimg");
	var b=document.getElementById("standardimg");	
	var c=document.getElementById("superiorimg");
		
		
	var m=document.getElementById("isikamar1").innerHTML;
	var n=document.getElementById("isikamar2").innerHTML;
	var o=document.getElementById("isikamar3").innerHTML;
	var p=document.getElementById("isikamar4").innerHTML;
	var q=document.getElementById("isikamar5").innerHTML;
	var r=document.getElementById("isikamar6").innerHTML;
	var s=document.getElementById("isikamar7").innerHTML;
	var t=document.getElementById("isikamar8").innerHTML;
	var u=document.getElementById("isikamar9").innerHTML;
	
	var harga;
var hargatotal;
		var hari4 = document.getElementById("lamatour");
 		var selectedValue4hr = hari4.options[hari4.selectedIndex].value;
		var hari5 = document.getElementById("lamatour");
 		var selectedValue5hr = hari5.options[hari5.selectedIndex].value;
		var hari6 = document.getElementById("lamatour");
 		var selectedValue6hr = hari6.options[hari6.selectedIndex].value;
		
		
		var ddl = document.getElementById("kendaraan");
 		var selectedValue = ddl.options[ddl.selectedIndex].value;
		var ddl2 = document.getElementById("kendaraan2");
 		var selectedValue2 = ddl2.options[ddl2.selectedIndex].value;
		var ddl3 = document.getElementById("kendaraan3");
 		var selectedValue3 = ddl3.options[ddl3.selectedIndex].value;
		
		
	switch(angka)	
	{
	case 1:
	a.src="deluxe1.jpg";
	b.src="standard1.jpg";
	c.src="superior1.jpg";
		
			

	if(selectedValue4hr=="4hari"){
	harian=4;	
		
	}
	else if(selectedValue5hr=="5hari"){
	harian=5;
		
	}
	else if(selectedValue6hr=="6hari"){
	harian=6;
		
	}
	
				document.getElementById("kamar1").innerHTML= m;
	document.getElementById("kamar2").innerHTML= n;
	document.getElementById("kamar3").innerHTML= o;
	document.getElementById("pilih1").disabled = false;
	document.getElementById("pilih2").disabled = true;	
	document.getElementById("pilih3").disabled = true;
			
			
			
				if(document.getElementById("deluxe").checked)
					{
					if(selectedValue == "mobil")
						{harga=1623235;
						 transport=1000000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
					document.getElementById("hasil1").innerHTML= "Porcelain, Kamar Deluxe dan kendaraan mobil"+"<br />"+"Sebelum pajak ="+hargabpajak+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;
						
						}
					else if(selectedValue == "buss")
						{harga=1623235;
						 transport=500000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil1").innerHTML= "Porcelain, Kamar Deluxe dan kendaraan Bus"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;
						}
					}
				
				else if(document.getElementById("standard").checked)
					{
					if(selectedValue == "mobil")
						{harga=1174353;
						 transport=1000000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil1").innerHTML= "Porcelain, Kamar Standard dan kendaraan mobil"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;	

						}
					else if(selectedValue == "buss")
						{harga=1174353;
						 transport=500000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil1").innerHTML= "Porcelain, Kamar Standard dan kendaraan Bus"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;
						}
					}
				
				else
					{
					if(selectedValue == "mobil")
						{harga=1224114;
						 transport=1000000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil1").innerHTML= "Porcelain, Kamar Superior dan kendaraan mobil"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;	
						}
					else if(selectedValue == "buss")
						{
						harga=1224114;
						 transport=500000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil1").innerHTML= "Porcelain, Kamar Superior dan kendaraan bus"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;	
						}
					}
			
		break;
	
		case 2:		
		a.src="king.jpg";
		b.src="queen.jpg";
		c.src="great.jpg";
			
			if(selectedValue4hr=="4hari"){
	harian=4;	
		
	}
	else if(selectedValue5hr=="5hari"){
	harian=5;
		
	}
	else if(selectedValue6hr=="6hari"){
	harian=6;
		
	}
			
		document.getElementById("kamar1").innerHTML= p;
		document.getElementById("kamar2").innerHTML= q;
		document.getElementById("kamar3").innerHTML= r;
			
		document.getElementById("pilih1").disabled = true;
			document.getElementById("pilih2").disabled = false;	
			document.getElementById("pilih3").disabled = true;
			
			
				if(document.getElementById("deluxe").checked)
					{
					if(selectedValue2 == "mobil")
						{
						harga=1729166;
						 transport=1000000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil1").innerHTML= "Hotel G, Kamar deluxe dan kendaraan mobil"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;	
						

						}
					else if(selectedValue2 == "buss")
						{
						harga=1729166;
						 transport=500000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil1").innerHTML= "Hotel G, Kamar deluxe dan kendaraan bus"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;	
						}
					}
				
				else if(document.getElementById("standard").checked)
					{
					if(selectedValue2 == "mobil")
						{
						harga=1395560;
						 transport=1000000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil1").innerHTML= "Hotel G, Kamar standard dan kendaraan mobil"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;		

						}
					else if(selectedValue2 == "buss")
						{
						harga=1395560;
						 transport=500000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil1").innerHTML= "Hotel G, Kamar standard dan kendaraan bus"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;		
						}
					}
				
				else
					{
					if(selectedValue2 == "mobil")
						{
						harga=1641836;
						 transport=1000000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil1").innerHTML= "Hotel G, Kamar Superior dan kendaraan mobil"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;

						}
					else if(selectedValue2 == "buss")
						{
						harga=1641836;
						 transport=500000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil1").innerHTML= "Hotel G, Kamar Superior dan kendaraan bus"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;
						}
					}
				
			
		break;
			
		case 3:
		a.src="marina1.jpg";
		b.src="marina2.jpg";
		c.src="marina3.jpg";	
			
			
			if(selectedValue4hr=="4hari"){
	harian=4;	
		
	}
	else if(selectedValue5hr=="5hari"){
	harian=5;
		
	}
	else if(selectedValue6hr=="6hari"){
	harian=6;
		
	}
			
		document.getElementById("kamar1").innerHTML= s;
		document.getElementById("kamar2").innerHTML= t;
		document.getElementById("kamar3").innerHTML= u;
		document.getElementById("pilih3").disabled = false;
			document.getElementById("pilih2").disabled = true;	
			document.getElementById("pilih1").disabled = true;
			
			if(document.getElementById("deluxe").checked)
				{
					if(selectedValue3 == "mobil")
						{
						harga=7951766;
						 transport=1000000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil1").innerHTML= "Hotel Bay, Kamar Deluxe dan kendaraan mobil"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;	

						}
					else if(selectedValue3 == "buss")
						{
						harga=7951766;
						 transport=500000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil1").innerHTML= "Hotel Bay, Kamar Deluxe dan kendaraan bus"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;						}
					}
				
				else if(document.getElementById("standard").checked)
					{
					if(selectedValue3 == "mobil")
						{
						harga=5563252;
						 transport=1000000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil1").innerHTML= "Hotel Bay, Kamar Standard dan kendaraan mobil"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;	
						}
					else if(selectedValue3 == "buss")
						{
						harga=5563252;
						 transport=500000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil1").innerHTML= "Hotel Bay, Kamar Standard dan kendaraan bus"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;
						}
					}
				else
					{
					if(selectedValue3 == "mobil")
						{
						harga=12927840;
						 transport=1000000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil1").innerHTML= "Hotel Bay, Kamar Superior dan kendaraan mobil"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;	

						}
					else if(selectedValue3 == "buss")
						{
						harga=12927840;
						 transport=500000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil1").innerHTML= "Hotel Bay, Kamar Superior dan kendaraan bus"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;	

						}
					}
				
			
			
		break;
			
		
			
		}
	}
	
function pilihkamar2(angka)
	{
	var a=document.getElementById("deluxeimg2");
	var b=document.getElementById("standardimg2");	
	var c=document.getElementById("superiorimg2");
		
			var harga;
var hargatotal;
		var hari4 = document.getElementById("lamatour");
 		var selectedValue4hr = hari4.options[hari4.selectedIndex].value;
		var hari5 = document.getElementById("lamatour");
 		var selectedValue5hr = hari5.options[hari5.selectedIndex].value;
		var hari6 = document.getElementById("lamatour");
 		var selectedValue6hr = hari6.options[hari6.selectedIndex].value;
	
		
	var m=document.getElementById("isikamar10").innerHTML;
	var n=document.getElementById("isikamar11").innerHTML;
	var o=document.getElementById("isikamar12").innerHTML;
	var p=document.getElementById("isikamar13").innerHTML;
	var q=document.getElementById("isikamar14").innerHTML;
	var r=document.getElementById("isikamar15").innerHTML;
	var s=document.getElementById("isikamar16").innerHTML;
	var t=document.getElementById("isikamar17").innerHTML;
	var u=document.getElementById("isikamar18").innerHTML;
		
		var ddl = document.getElementById("kendaraan4");
 		var selectedValue = ddl.options[ddl.selectedIndex].value;
		var ddl2 = document.getElementById("kendaraan5");
 		var selectedValue2 = ddl2.options[ddl2.selectedIndex].value;
		var ddl3 = document.getElementById("kendaraan6");
 		var selectedValue3 = ddl3.options[ddl3.selectedIndex].value;
		
		
	switch(angka)	
	{
	case 1:
	a.src="borobudur1.jpg";
	b.src="borobudur2.jpg";
	c.src="borobudur3.jpg";
		
			
			if(selectedValue4hr=="4hari"){
	harian=4;	
		
	}
	else if(selectedValue5hr=="5hari"){
	harian=5;
		
	}
	else if(selectedValue6hr=="6hari"){
	harian=6;
		
	}
			
			
	document.getElementById("kamar4").innerHTML= m;
	document.getElementById("kamar5").innerHTML= n;
	document.getElementById("kamar6").innerHTML= o;
	document.getElementById("pilih4").disabled = false;
	document.getElementById("pilih5").disabled = true;	
	document.getElementById("pilih6").disabled = true;
			
				if(document.getElementById("deluxe2").checked)
					{
					if(selectedValue == "mobil")
						{
							harga=1800000;
						 transport=1000000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil2").innerHTML= "Hotel Borobudur, Kamar Deluxe dan kendaraan mobil"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;	
							

						}
					else if(selectedValue == "buss")
						{
						harga=1800000;
						 transport=500000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil2").innerHTML= "Hotel Borobudur, Kamar Deluxe dan kendaraan bus"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;	
						}
					}
				
				else if(document.getElementById("standard2").checked)
					{
					if(selectedValue == "mobil")
						{
						harga=1099980;
						 transport=1000000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil2").innerHTML= "Hotel Borobudur, Kamar Standard dan kendaraan mobil"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;	

						}
					else if(selectedValue == "buss")
						{
						harga=1099980;
						 transport=500000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil2").innerHTML= "Hotel Borobudur, Kamar Standard dan kendaraan bus"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;	
						}
					}
				
				else
					{
					if(selectedValue == "mobil")
						{
						harga=2300000;
						 transport=1000000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil2").innerHTML= "Hotel Borobudur, Kamar Superior dan kendaraan mobil"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;		

						}
					else if(selectedValue == "buss")
						{
						harga=2300000;
						 transport=500000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil2").innerHTML= "Hotel Borobudur, Kamar Deluxe dan kendaraan bus"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;	;
						}
					}
			
		break;
	
		case 2:		
		a.src="king.jpg";
		b.src="queen.jpg";
		c.src="great.jpg";
			
			
			if(selectedValue4hr=="4hari"){
	harian=4;	
		
	}
	else if(selectedValue5hr=="5hari"){
	harian=5;
		
	}
	else if(selectedValue6hr=="6hari"){
	harian=6;
		
	}
			
		document.getElementById("kamar4").innerHTML= p;
		document.getElementById("kamar5").innerHTML= q;
		document.getElementById("kamar6").innerHTML= r;
			
		document.getElementById("pilih4").disabled = true;
			document.getElementById("pilih5").disabled = false;	
			document.getElementById("pilih6").disabled = true;
			
			
				if(document.getElementById("deluxe2").checked)
					{
					if(selectedValue2 == "mobil")
						{harga=2479339;
						 transport=1000000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil2").innerHTML= "Hotel Meridian, Kamar Deluxe dan kendaraan mobil"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;	
						}
					else if(selectedValue2 == "buss")
						{
						harga=2479339;
						 transport=500000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil2").innerHTML= "Hotel Meridian, Kamar Deluxe dan kendaraan bus"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;	
						}
					}
				
				else if(document.getElementById("standard2").checked)
					{
					if(selectedValue2 == "mobil")
						{
						harga=1836759;
						 transport=1000000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil2").innerHTML= "Hotel Meridian, Kamar Standard dan kendaraan mobil"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;	

						}
					else if(selectedValue2 == "buss")
						{
						harga=1836759;
						 transport=500000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil2").innerHTML= "Hotel Meridian, Kamar Standard dan kendaraan bus"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;	
						}
					}
				
				else
					{
					if(selectedValue2 == "mobil")
						{
						harga=2677686;
						 transport=1000000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil2").innerHTML= "Hotel Meridian, Kamar Superior dan kendaraan mobil"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;		

						}
					else if(selectedValue2 == "buss")
						{
						harga=2677686;
						 transport=500000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil2").innerHTML= "Hotel Meridian, Kamar Superior dan kendaraan bus"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;
						}
					}
				
			
		break;
			
		case 3:
		a.src="ubud1.jpg";
		b.src="ubud2.jpg";
		c.src="ubud3.jpg";	
			
			if(selectedValue4hr=="4hari"){
	harian=4;	
		
	}
	else if(selectedValue5hr=="5hari"){
	harian=5;
		
	}
	else if(selectedValue6hr=="6hari"){
	harian=6;
		
	}
			
		document.getElementById("kamar4").innerHTML= s;
		document.getElementById("kamar5").innerHTML= t;
		document.getElementById("kamar6").innerHTML= u;
		document.getElementById("pilih6").disabled = false;
			document.getElementById("pilih5").disabled = true;	
			document.getElementById("pilih4").disabled = true;
			
			if(document.getElementById("deluxe2").checked)
				{
					if(selectedValue3 == "mobil")
						{
						harga=5522657;
						 transport=1000000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil2").innerHTML= "Hotel Ubud, Kamar Deluxe dan kendaraan mobil"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;	

						}
					else if(selectedValue3 == "buss")
						{
						harga=5522657;
						 transport=500000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil2").innerHTML= "Hotel Ubud, Kamar Deluxe dan kendaraan bus"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;	
						}
					}
				
				else if(document.getElementById("standard2").checked)
					{
					if(selectedValue3 == "mobil")
						{
						harga=5522657;
						 transport=1000000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil2").innerHTML= "Hotel Ubud, Kamar Standard dan kendaraan mobil"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;		

						}
					else if(selectedValue3 == "buss")
						{
						harga=5522657;
						 transport=500000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil2").innerHTML= "Hotel Ubud, Kamar Standard dan kendaraan bus"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;
						}
					}
				else
					{
					if(selectedValue3 == "mobil")
						{
						harga=7984502;
						 transport=1000000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil2").innerHTML= "Hotel Ubud, Kamar Superior dan kendaraan mobil"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;	

						}
					else if(selectedValue3 == "buss")
						{
						harga=7984502;
						 transport=500000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil2").innerHTML= "Hotel Ubud, Kamar Superior dan kendaraan bus"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;	
						}
					}
				
			
			
		break;
	}
	}
	
function pilihkamar3(angka)

	{
	var a=document.getElementById("deluxeimg3");
	var b=document.getElementById("standardimg3");	
	var c=document.getElementById("superiorimg3");
		
		var harga;
		var hargatotal;
		var hari4 = document.getElementById("lamatour");
 		var selectedValue4hr = hari4.options[hari4.selectedIndex].value;
		var hari5 = document.getElementById("lamatour");
 		var selectedValue5hr = hari5.options[hari5.selectedIndex].value;
		var hari6 = document.getElementById("lamatour");
 		var selectedValue6hr = hari6.options[hari6.selectedIndex].value;
		
	var m=document.getElementById("isikamar19").innerHTML;
	var n=document.getElementById("isikamar20").innerHTML;
	var o=document.getElementById("isikamar21").innerHTML;
	var p=document.getElementById("isikamar22").innerHTML;
	var q=document.getElementById("isikamar23").innerHTML;
	var r=document.getElementById("isikamar24").innerHTML;
	var s=document.getElementById("isikamar25").innerHTML;
	var t=document.getElementById("isikamar26").innerHTML;
	var u=document.getElementById("isikamar27").innerHTML;
		
		var ddl = document.getElementById("kendaraan7");
 		var selectedValue = ddl.options[ddl.selectedIndex].value;
		var ddl2 = document.getElementById("kendaraan8");
 		var selectedValue2 = ddl2.options[ddl2.selectedIndex].value;
		var ddl3 = document.getElementById("kendaraan9");
 		var selectedValue3 = ddl3.options[ddl3.selectedIndex].value;
		
		
	switch(angka)	
	{
	case 1:
	a.src="alonihani.jpg";
	b.src="alonihani2.jpg";
	c.src="alonihani3.jpg";
	
	if(selectedValue4hr=="4hari"){
	harian=4;	
		
	}
	else if(selectedValue5hr=="5hari"){
	harian=5;
		
	}
	else if(selectedValue6hr=="6hari"){
	harian=6;
		
	}
			
	document.getElementById("kamar7").innerHTML= m;
	document.getElementById("kamar8").innerHTML= n;
	document.getElementById("kamar9").innerHTML= o;
	document.getElementById("pilih7").disabled = false;
	document.getElementById("pilih8").disabled = true;	
	document.getElementById("pilih9").disabled = true;
			
				if(document.getElementById("deluxe3").checked)
					{
					if(selectedValue == "mobil")
						{
						harga=3906788;
						 transport=1000000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil3").innerHTML= "Hotel Alohilani, Kamar Deluxe dan kendaraan mobil"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;
						}
					else if(selectedValue == "buss")
						{
						harga=3906788;
						 transport=500000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil3").innerHTML= "Hotel Alohilani, Kamar Deluxe dan kendaraan bus"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;
						}
					}
				
				else if(document.getElementById("standard3").checked)
					{
					if(selectedValue == "mobil")
						{
						harga= 3170302;
						 transport=1000000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil3").innerHTML= "Hotel Alohilani, Kamar Standard dan kendaraan mobil"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;
						}
					else if(selectedValue == "buss")
						{
						harga= 3170302;
						 transport=500000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil3").innerHTML= "Hotel Alohilani, Kamar Standard dan kendaraan bus"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;
						}
					}
				
				else
					{
					if(selectedValue == "mobil")
						{
						harga= 5509958;
						 transport=1000000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;

						 hargaall=hargapajak+transport;
						document.getElementById("hasil3").innerHTML= "Hotel Alohilani, Kamar Superior dan kendaraan mobil"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;

						}
					else if(selectedValue == "buss")
						{
						harga= 5509958;
						 transport=500000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil3").innerHTML= "Hotel Alohilani, Kamar Superior dan kendaraan bus"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;						}
					}
			
		break;
	
		case 2:		
		a.src="waikiki.jpg";
		b.src="waikiki2.jpg";
		c.src="waikiki3.jpg";
	
		if(selectedValue4hr=="4hari"){
	harian=4;	
		
	}
	else if(selectedValue5hr=="5hari"){
	harian=5;
		
	}
	else if(selectedValue6hr=="6hari"){
	harian=6;
		
	}	
			
		document.getElementById("kamar7").innerHTML= p;
		document.getElementById("kamar8").innerHTML= q;
		document.getElementById("kamar9").innerHTML= r;
			
			document.getElementById("pilih7").disabled = true;
			document.getElementById("pilih8").disabled = false;	
			document.getElementById("pilih9").disabled = true;
			
			
				if(document.getElementById("deluxe3").checked)
					{
					if(selectedValue2 == "mobil")
						{
						harga= 4863840;
						 transport=1000000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil3").innerHTML= "Hotel Waikiki, Kamar Deluxe dan kendaraan mobil"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;

						}
					else if(selectedValue2 == "buss")
						{
						harga= 4863840;
						 transport=500000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil3").innerHTML= "Hotel Waikiki, Kamar Deluxe dan kendaraan bus"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;
						}
					}
				
				else if(document.getElementById("standard3").checked)
					{
					if(selectedValue2 == "mobil")
						{
						harga= 3509010;
						 transport=1000000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil3").innerHTML= "Hotel Waikiki, Kamar Standard dan kendaraan mobil"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;	

						}
					else if(selectedValue2 == "buss")
						{
						harga= 3509010;
						 transport=500000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil3").innerHTML= "Hotel Waikiki, Kamar Standard dan kendaraan bus"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;	
						}
					}
				
				else
					{
					if(selectedValue2 == "mobil")
						{
						harga= 7776724;
						 transport=1000000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil3").innerHTML= "Hotel Waikiki, Kamar Superior dan kendaraan mobil"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;		

						}
					else if(selectedValue2 == "buss")
						{
						harga= 7776724;
						 transport=500000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil3").innerHTML= "Hotel Waikiki, Kamar Superior dan kendaraan bus"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;
						}
					}
				
			
		break;
			
		case 3:
		a.src="honolulu.jpg";
		b.src="honolulu2.jpg";
		c.src="honolulu3.jpg";	
	
		if(selectedValue4hr=="4hari"){
	harian=4;	
		
	}
	else if(selectedValue5hr=="5hari"){
	harian=5;
		
	}
	else if(selectedValue6hr=="6hari"){
	harian=6;
		
	}
			
			document.getElementById("kamar7").innerHTML= s;
		document.getElementById("kamar8").innerHTML= t;
		document.getElementById("kamar9").innerHTML= u;
		document.getElementById("pilih9").disabled = false;
			document.getElementById("pilih8").disabled = true;	
			document.getElementById("pilih7").disabled = true;
			
			if(document.getElementById("deluxe3").checked)
				{
					if(selectedValue3 == "mobil")
						{
						harga= 4115973;
						 transport=1000000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil3").innerHTML= "Hotel Honolulu, Kamar Deluxe dan kendaraan mobil"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;	
						}
					else if(selectedValue3 == "buss")
						{
						harga= 4115973;
						 transport=500000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil3").innerHTML= "Hotel Honolulu, Kamar Deluxe dan kendaraan bus"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;
						}
					}
				
				else if(document.getElementById("standard3").checked)
					{
					if(selectedValue3 == "mobil")
						{
						harga= 3215012;
						 transport=1000000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil3").innerHTML= "Hotel Honolulu, Kamar standard dan kendaraan mobil"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;	

						}
					else if(selectedValue3 == "buss")
						{
						harga= 3215012;
						 transport=500000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil3").innerHTML= "Hotel Honolulu, Kamar standard dan kendaraan bus"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;
						}
					}
				else
					{
					if(selectedValue3 == "mobil")
						{
						harga= 7001012;
						 transport=1000000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil3").innerHTML= "Hotel Honolulu, Kamar Superior dan kendaraan mobil"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;
						}
					else if(selectedValue3 == "buss")
						{
						harga= 7001012;
						 transport=500000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil3").innerHTML= "Hotel Honolulu, Kamar Superior dan kendaraan bus"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;
						}
					}
				
			
			
		break;
	}
	}
function pilihkamar4(angka)
	{
	var a=document.getElementById("deluxeimg4");
	var b=document.getElementById("standardimg4");	
	var c=document.getElementById("superiorimg4");
		
		var harga;
		var hargatotal;
		var hari4 = document.getElementById("lamatour");
 		var selectedValue4hr = hari4.options[hari4.selectedIndex].value;
		var hari5 = document.getElementById("lamatour");
 		var selectedValue5hr = hari5.options[hari5.selectedIndex].value;
		var hari6 = document.getElementById("lamatour");
 		var selectedValue6hr = hari6.options[hari6.selectedIndex].value;
		
	var m=document.getElementById("isikamar28").innerHTML;
	var n=document.getElementById("isikamar29").innerHTML;
	var o=document.getElementById("isikamar30").innerHTML;
	var p=document.getElementById("isikamar31").innerHTML;
	var q=document.getElementById("isikamar32").innerHTML;
	var r=document.getElementById("isikamar33").innerHTML;
	var s=document.getElementById("isikamar34").innerHTML;
	var t=document.getElementById("isikamar35").innerHTML;
	var u=document.getElementById("isikamar36").innerHTML;
		
		var ddl = document.getElementById("kendaraan10");
 		var selectedValue = ddl.options[ddl.selectedIndex].value;
		var ddl2 = document.getElementById("kendaraan11");
 		var selectedValue2 = ddl2.options[ddl2.selectedIndex].value;
		var ddl3 = document.getElementById("kendaraan12");
 		var selectedValue3 = ddl3.options[ddl3.selectedIndex].value;
		
		
	switch(angka)	
	{
	case 1:
		a.src="angelykamar.jpg";
		b.src="angelykamar2.jpg";
		c.src="angelykamar3.jpg";
		
					if(selectedValue4hr=="4hari"){
	harian=4;	
		
	}
	else if(selectedValue5hr=="5hari"){
	harian=5;
		
	}
	else if(selectedValue6hr=="6hari"){
	harian=6;
		
	}
			
	document.getElementById("kamar10").innerHTML= m;
	document.getElementById("kamar11").innerHTML= n;
	document.getElementById("kamar12").innerHTML= o;
	document.getElementById("pilih10").disabled = false;
	document.getElementById("pilih11").disabled = true;	
	document.getElementById("pilih12").disabled = true;
			
				if(document.getElementById("deluxe4").checked)
					{
					if(selectedValue == "mobil")
						{
						harga=2139081;
						 transport=1000000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil4").innerHTML= "Hotel Angely, Kamar Deluxe dan kendaraan mobil"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;

						}
					else if(selectedValue == "buss")
						{
						harga=2139081;
						 transport=500000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil4").innerHTML= "Hotel Angely, Kamar Deluxe dan kendaraan bus"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;
						}
					}
				
				else if(document.getElementById("standard4").checked)
					{
					if(selectedValue == "mobil")
						{
						harga=1782387;
						 transport=1000000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil4").innerHTML= "Hotel Angely, Kamar Standard dan kendaraan mobil"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;	

						}
					else if(selectedValue == "buss")
						{
						harga=1782387;
						 transport=500000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil4").innerHTML= "Hotel Angely, Kamar Standard dan kendaraan bus"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;	
						}
					}
				
				else
					{
					if(selectedValue == "mobil")
						{
						harga=2426344;
						 transport=1000000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil4").innerHTML= "Hotel Angely, Kamar Superior dan kendaraan mobil"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;		

						}
					else if(selectedValue == "buss")
						{
						harga=2426344;
						 transport=500000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil4").innerHTML= "Hotel Angely, Kamar Superior dan kendaraan bus"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;		
						}
					}
			
		break;
	
		case 2:		
		a.src="huatiankamar.jpg";
		b.src="huatiankamar2.jpg";
		c.src="huatiankamar3.jpg";
			
					if(selectedValue4hr=="4hari"){
	harian=4;	
		
	}
	else if(selectedValue5hr=="5hari"){
	harian=5;
		
	}
	else if(selectedValue6hr=="6hari"){
	harian=6;
		
	}
			
		document.getElementById("kamar10").innerHTML= p;
		document.getElementById("kamar11").innerHTML= q;
		document.getElementById("kamar12").innerHTML= r;
			
			document.getElementById("pilih10").disabled = true;
			document.getElementById("pilih11").disabled = false;	
			document.getElementById("pilih12").disabled = true;
			
			
				if(document.getElementById("deluxe4").checked)
					{
					if(selectedValue2 == "mobil")
						{
						harga=2498042;
						 transport=1000000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil4").innerHTML= "Hotel Huatian, Kamar Deluxe dan kendaraan mobil"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;		

						}
					else if(selectedValue2 == "buss")
						{
						harga=2498042;
						 transport=500000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil4").innerHTML= "Hotel Huatian, Kamar Deluxe dan kendaraan bus"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;		
						}
					}
				
				else if(document.getElementById("standard4").checked)
					{
					if(selectedValue2 == "mobil")
						{
						harga=1564869;
						 transport=1000000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil4").innerHTML= "Hotel Huatian, Kamar Standard dan kendaraan mobil"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;			

						}
					else if(selectedValue2 == "buss")
						{
						harga=1564869;
						 transport=500000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil4").innerHTML= "Hotel Huatian, Kamar Standard dan kendaraan bus"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;	
						}
					}
				
				else
					{
					if(selectedValue2 == "mobil")
						{
						harga=4292690;
						 transport=1000000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil4").innerHTML= "Hotel Huatian, Kamar Superior dan kendaraan mobil"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;		

						}
					else if(selectedValue2 == "buss")
						{
						harga=4292690;
						 transport=500000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil4").innerHTML= "Hotel Huatian, Kamar Superior dan kendaraan bus"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;	
						}
					}
				
			
		break;
			
		case 3:
		a.src="balzackamar.jpg";
		b.src="balzackamar2.jpg";
		c.src="balzackamar3.jpg";	
			
					if(selectedValue4hr=="4hari"){
	harian=4;	
		
	}
	else if(selectedValue5hr=="5hari"){
	harian=5;
		
	}
	else if(selectedValue6hr=="6hari"){
	harian=6;
		
	}
			
		document.getElementById("kamar10").innerHTML= s;
		document.getElementById("kamar11").innerHTML= t;
		document.getElementById("kamar12").innerHTML= u;
		document.getElementById("pilih12").disabled = false;
			document.getElementById("pilih11").disabled = true;	
			document.getElementById("pilih10").disabled = true;
			
			if(document.getElementById("deluxe4").checked)
				{
					if(selectedValue3 == "mobil")
						{
						harga=5168379;
						 transport=1000000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil4").innerHTML= "Hotel Balzac, Kamar Deluxe dan kendaraan mobil"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;		

						}
					else if(selectedValue3 == "buss")
						{
						harga=5168379;
						 transport=500000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil4").innerHTML= "Hotel Balzac, Kamar Deluxe dan kendaraan bus"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;	
						}
					}
				
				else if(document.getElementById("standard4").checked)
					{
					if(selectedValue3 == "mobil")
						{
						harga=4231239;
						 transport=1000000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil4").innerHTML= "Hotel Balzac, Kamar Standard dan kendaraan mobil"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;	

						}
					else if(selectedValue3 == "buss")
						{
						harga=4231239;
						 transport=500000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil4").innerHTML= "Hotel Balzac, Kamar Standard dan kendaraan bus"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;	
						}
					}
				else
					{
					if(selectedValue3 == "mobil")
						{
						harga=9475440;
						 transport=1000000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil4").innerHTML= "Hotel Balzac, Kamar Superior dan kendaraan mobil"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;		

						}
					else if(selectedValue3 == "buss")
						{
						harga=9475440;
						 transport=500000;
						 hargabpajak=harga*harian;
						 pajak=hargabpajak*10/100;
						 hargapajak=hargabpajak+pajak;
						 hargaall=hargapajak+transport;
						document.getElementById("hasil4").innerHTML= "Hotel Balzac, Kamar Superior dan kendaraan bus"+"<br />"+"Biaya Total paket Anda (+pajak 10%) Rp = "+hargaall;
						}
					}
				
			
			
		break;
	}
	}
	
	
function submitdata()
	{
		var nmlengkap = document.getElementById("namalengkap").value;
		var nohp = document.getElementById("nomorhp").value;
		var email = document.getElementById("email").value;
		var e = document.getElementById("negara");
		var tanggal = document.getElementById("datepicker").value;
		var hotelkendaraan =  document.getElementById("hasil1").innerHTML;
		var hotelkendaraan2 =  document.getElementById("hasil3").innerHTML;
		var hotelkendaraan3 =  document.getElementById("hasil4").innerHTML;
		var negaranya = e.options[e.selectedIndex].text;
		var f = document.getElementById("lamatour");
		var lama = f.options[f.selectedIndex].text;
		var row=document.getElementById("isidata");
		var row2=document.getElementById("pembayaran");
		
		
		if(nmlengkap==""){alert("Nama tidak boleh kosong");}
		else{
			row.style.display='block';
			row2.style.display='block';
		document.getElementById("isiwaktu").innerHTML = "Lama Tour : "+lama;
		document.getElementById("isitanggal").innerHTML = "Tanggal Keberangkatan : "+tanggal;
		document.getElementById("isinama").innerHTML = "Nama : "+ nmlengkap;
		document.getElementById("isinohp").innerHTML = "No HP : "+nohp;
		document.getElementById("isiemail").innerHTML = "Email : "+email;
		document.getElementById("isinegara").innerHTML = "Negara Tujuan : "+negaranya;
		
		document.getElementById("hasiltampil").innerHTML = "Hotel, Jenis kamar, kendaraan Tour : "+"\n"+hotelkendaraan+hotelkendaraan2+hotelkendaraan3+"<br />";
		}
		

	}
function submitdata2()
	{
		var nmlengkap = document.getElementById("namalengkap2").value;
		var nohp = document.getElementById("nomorhp2").value;
		var email = document.getElementById("email2").value;
		
		var tanggal = document.getElementById("datepicker2").value;
		var hotelkendaraan =  document.getElementById("hasil2").innerHTML;
		
		var f = document.getElementById("lamatour2");
		var lama = f.options[f.selectedIndex].text;
		var row=document.getElementById("isidata");
		var row2=document.getElementById("pembayaran");
		
		
		
		if(nmlengkap==""){alert("Nama tidak boleh kosong");}
		else{
		row.style.display='block';
		row2.style.display='block';
		document.getElementById("isiwaktu").innerHTML = "Lama Tour : "+lama;
		document.getElementById("isitanggal").innerHTML = "Tanggal Keberangkatan : "+tanggal;
		document.getElementById("isinama").innerHTML = "Nama : "+ nmlengkap;
		document.getElementById("isinohp").innerHTML = "No HP : "+nohp;
		document.getElementById("isiemail").innerHTML = "Email : "+email;
		document.getElementById("isinegara").innerHTML = "Negara Tujuan : Indonesia";
		
		document.getElementById("hasiltampil").innerHTML = "Hotel, Jenis kamar, kendaraan Tour : "+"\n"+hotelkendaraan+"<br />";
		}
		

	}
	
function formulir(param){
	if(param==1){
	document.getElementById("paneldatadiri").style.display='block';
	document.getElementById("paneldatadiri2").style.display='none';
	document.getElementById("panel1").style.display='none';
	document.getElementById("panel2").style.display='none';
	document.getElementById("panel4").style.display='none';}
	else
		{
		document.getElementById("paneldatadiri").style.display='none';
		document.getElementById("paneldatadiri2").style.display='block';
		document.getElementById("panel3").style.display='none';
		}
	
}
	
function about()
	{
	swal({
  title: '©Kelompok Pwb 1 Project Akhir',
  text: 'Dimas,Ichsan, Arman, Steven, Soefwan',
  imageUrl: 'kelompok.jpg',
  imageWidth: 500,
  imageHeight: 400,
  imageAlt: 'Custom image',
  animation: false
	})
	}
	

$(document).ready(function() {
	$("#gambargerak").delay(1000).slideDown();
	$("#navigasi").delay(2000).fadeIn();
	
});	

$(document).ready(function(){  
 $("#pakettour").click(function(e) {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: $($.attr(this, 'href')).offset().top
    }, 1000);
  	});
 $("#pilihhotel").click(function(e) {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: $($.attr(this, 'href')).offset().top
    }, 1500);
  	});	
 $("#pilihhotel2").click(function(e) {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: $($.attr(this, 'href')).offset().top
    }, 1500);
  	});	
 $("#submithref").click(function(e) {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: $($.attr(this, 'href')).offset().top
    }, 1500);
  	});		
$("#submithref2").click(function(e) {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: $($.attr(this, 'href')).offset().top
    }, 1500);
  	});	
	
		$("#pilihhotel").on("mouseover", function(){
		$("#pilihhotel").addClass("animated infinite bounceIn");
		});
				
		$("#pilihhotel").on("mouseleave", function(){
		$("#pilihhotel").removeClass("animated infinite bounceIn");
		});
	
		$("#submithref").on("click", function(){
		$("#isidata").addClass("animated fadeInLeft");
		$("#pembayaran").addClass("animated fadeInRight");
		});
	
		$("#submithref2").on("click", function(){
		$("#isidata").addClass("animated fadeInLeft");
		$("#pembayaran").addClass("animated fadeInRight");
		});
	
		$(".lanjutisidata").on("click", function(){
		$("#paneldatadiri").addClass("animated zoomIn");
		});
	
		$(".lanjutisidata2").on("click", function(){
		$("#paneldatadiri2").addClass("animated zoomIn");
		});

	/*
 $("#submit2").click(function(e) {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: $($.attr(this, 'href')).offset().top
    }, 1500);
  	});		*/

	
});

$(document).ready(function(){
    $("#yuk2").on("click",function(){
    $("#box2").css("visibility","visible");
	$("#box1").css("display","none");
	
	setTimeout(function(){
        $("#box2").fadeIn(1000)
    }, 1000 );
	});
	
	$("#yuk").on("click",function(){
    $("#box1").css("visibility","visible");
	$("#box2").css("display","none");
	
	setTimeout(function(){
        $("#box1").fadeIn(1000)
    }, 1000 );
   
	});
	
	
	
});

	
	
