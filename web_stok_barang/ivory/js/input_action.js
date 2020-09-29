	
		
		function val() 
		{
			d = document.getElementById("nama_barang").value;
		
		
	 
			if(d=="Patch")
			{ 
		
			
			document.getElementById("length").style.display = 'block';
			document.getElementById("note").style.display = 'block';
			document.getElementById("upload").style.display = 'block';
			document.getElementById("capacity").style.display = 'none';
			document.getElementById("serial").style.display = 'none';
			document.getElementById("product").style.display = 'none';
			opt= document.getElementById('type').options[0];
			 opt.value =  'SC-SC';
			 opt.text = 'SC-SC';
			 
			 opt= document.getElementById('type').options[1];
			 opt.value =  'SC-LC';
			 opt.text = 'SC-LC';
			 
			 opt= document.getElementById('type').options[2];
			 opt.value =  'LC-LC';
			 opt.text = 'LC-LC';
			 
			 opt= document.getElementById('type').options[2].style.display = 'block';
			
			}
			else if(d=="SFP")
			{ 
			document.getElementById("length").style.display = 'block';
			document.getElementById("capacity").style.display = 'block';
			document.getElementById("serial").style.display = 'block';
			document.getElementById("product").style.display = 'block';
			document.getElementById("note").style.display = 'block';
			document.getElementById("upload").style.display = 'block';
			
		
			opt= document.getElementById('type').options[0];
			 opt.value =  'SFP';
			 opt.text = 'SFP';
			 
			 opt= document.getElementById('type').options[1];
			 opt.value =  'XFP';
			 opt.text = 'XFP';
			 
			 opt= document.getElementById('type').options[2];
			 opt.value =  'CFP';
			 opt.text = 'CFP';
			 
			 opt= document.getElementById('type').options[2].style.display = 'block';
			}
			else if(d=="IOM")
			{ 
		
			document.getElementById("note").style.display = 'block';
			document.getElementById("upload").style.display = 'block';
			
			
			document.getElementById("capacity").style.display = 'none';
			document.getElementById("serial").style.display = 'none';
			document.getElementById("product").style.display = 'none';
			document.getElementById("length").style.display = 'none';
			
			
			 opt= document.getElementById('type').options[0];
			 opt.value =  'IOM';
			 opt.text = 'IOM';
			 
			 opt= document.getElementById('type').options[1];
			 opt.value =  'IMM';
			 opt.text = 'IMM';
			 
			 
			 opt= document.getElementById('type').options[2].style.display = 'none';
			 opt.value =  '';
			 opt.text = '';
			}
			
			else if(d=="MDA")
			{ 
			document.getElementById("note").style.display = 'block';
			document.getElementById("capacity").style.display = 'block';
			document.getElementById("upload").style.display = 'block';
			
			document.getElementById("length").style.display = 'none';
			document.getElementById("serial").style.display = 'none';
			document.getElementById("product").style.display = 'none';
			
			 opt= document.getElementById('type').options[0];
			 opt.value =  'M2O';
			 opt.text = 'M2O';
			 
			 opt= document.getElementById('type').options[1];
			 opt.value =  'M2';
			 opt.text = 'M2';
			 
			 opt= document.getElementById('type').options[2].style.display = 'none';
			 opt.value =  '';
			 opt.text = '';
			}
		}
		
	