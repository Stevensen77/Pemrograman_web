 var ana1; // globally available
$(document).ready(function() {
      ana1 = new Highcharts.Chart({
         chart: {
            renderTo: 'ana1',
            type: 'line'
         },   
         title: {
    text: 'Perbandingan Nilai Invariant posisi 1'
  },
 
  xAxis: {
    categories: ['inv1', 'inv2', 'inv3', 'inv4', 'inv5', 'inv6', 'inv7']
  },
  yAxis: {
    title: {
      text: 'Nilai 1-10'
    }
  },
  plotOptions: {
    line: {
      dataLabels: {
        enabled: true
      },
      enableMouseTracking: true
    }
  },
              series:             
            [{
			
    name: '<?php echo $datx; ?>',
	data: [
			'<?php echo $x1inv1;?>',
			'<?php echo $x1inv2;?>',
			'<?php echo $x1inv3;?>',
			'<?php echo $x1inv4;?>',
			'<?php echo $x1inv5;?>',
			'<?php echo $x1inv6;?>',
			'<?php echo $x1inv7;?>',
			]
				
  },
  
	
  {
    name: '<?php echo $dat1; ?>',
  data: [
			'<?php echo $z1inv1;?>',
			'<?php echo $z1inv2;?>',
			'<?php echo $z1inv3;?>',
			'<?php echo $z1inv4;?>',
			'<?php echo $z1inv5;?>',
			'<?php echo $z1inv6;?>',
			'<?php echo $z1inv7;?>',
			]
				
  },
 
  ]
      });
   });