

<!DOCTYPE html>
<html>
<?php require('header.php'); ?>
    <!-- sidebar -->
    <div id="sidebar-nav">
        <ul id="dashboard-menu">
            <li class="active">
                
                <a href="<?php echo base_url('index.php')?>">
                    <i class="icon-home"></i>
                    <span>Home</span>
                </a>
            </li>            
            
			<li>
                <a href="<?php echo base_url('index.php/login')?>"">
                    <i class="icon-signal"></i>
                    <span>SIGN IN</span>
                </a>
            </li>
			<li>
			<?php if(!$user){?>
                <a href="<?php echo base_url('index.php/register')?>">
                    <i class="icon-signal"></i>
                    <span>SIGN UP</span>
                </a>
                <?php }?>
            </li>
            <li>
                <a href="<?php echo (DOC.'index.html')?>">
                    <i class="icon-cog"></i>
                    <span>About/Developers</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- end sidebar -->


	<!-- main container -->
    <div class="content">

        <div class="container-fluid">

            <!-- firms statistics -->
         
            <!-- end firms statistics -->

            <div id="pad-wrapper">
				<!-- bars table -->
                <div class="table-wrapper orders-table section">
                    <div class="row-fluid head">
                        <div class="span12">
                            <h4>Data Charts</h4>
                        </div>
                    </div>

                    
                    
  <!-- <div><p style="font-family:arial black;font-size:18px;"><?php
  	echo "Business number: ";?></p></div><br>
  	<?php echo "[0-2) = ".$members[5]?><br>
  	<?php echo "[2-3) = ".$members[6]?><br>
  	<?php echo "[3-4) = ".$members[7]?><br>
  	<?php echo "[4-5] = ".$members[4]?><br>
    <div><p style="font-family:arial black;font-size:18px;"><?php
  	echo "Total reviews: ";?></p></div><br>
  	<?php echo "[0-2) = ".$members[9]?><br>
  	<?php echo "[2-3) = ".$members[10]?><br>
  	<?php echo "[3-4) = ".$members[11]?><br>
  	<?php echo "[4-5] = ".$members[8]?><br>
<!--<div><p style="font-family:arial black;font-size:18px;"><?php
  	echo "Members with avarage stars between (4-5): ".$members[2]."%";?></p><br>
  </div>


  	<?php foreach ($members as $member =>$fields) { 
	//echo $product['PRODUCT_NAME'];
	?><br>
	<h3><?php echo "Name:".$fields['name'];?></h3><br> <?php echo "\xA"."On Yelp since: ".$fields['yelping_since'].
					 "\xA"."Votes: Funny: ".$fields['votes']['funny']."\xA"."Average stars".$fields['average_stars'];?><br>
<?php }  ?>

<?php echo $members; ?>-->

<script type="text/javascript" src="canvasjs.min.js"></script>
<div>
<script type="text/javascript">
  window.onload = function () {
    var chart1 = new CanvasJS.Chart("chartContainer2",
    {
      title:{
        text: "Average Stars from users"
      },
      legend:{
        verticalAlign: "bottom",
        horizontalAlign: "center"
      },
      data: [
      {        
       indexLabelFontSize: 20,
       indexLabelFontFamily: "Monospace",       
       indexLabelFontColor: "darkgrey", 
       indexLabelLineColor: "darkgrey",        
       indexLabelPlacement: "outside",
       type: "pie",       
       showInLegend: true,
       dataPoints: [
       {  y: <?php echo $members[0]?>, legendText:"Stars between [0-2)" , indexLabel: "<?php echo $members[0]."%";?>" },
       {  y: <?php echo $members[1]?>, legendText:"Stars between [2-3)", indexLabel: "<?php echo $members[1]."%"?>" },
       {  y: <?php echo $members[2]?>, legendText:"Stars between [3-4)", indexLabel: "<?php echo $members[2]."%"?>" },
       {  y: <?php echo $members[3]?>, legendText:"Stars between [4-5]" ,exploded: true, indexLabel: "<?php echo $members[3]."%"?>" }
       ]
     }
     ]
   });

chart1.render();




	  var chart2 = new CanvasJS.Chart("chartContainer1",
  {
    title:{
      text: "Data sorted by stars average"
    },
    legend: {
      cursor:"pointer",
      itemclick : function(e) {
        if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
            e.dataSeries.visible = false;
        }
        else {
            e.dataSeries.visible = true;
        }
        chart.render();
      }
    },
    axisY: {
      title: "Entries"
    },
    toolTip: {
      shared: true,  
      content: function(e){
        var str = '';
        var total = 0 ;
        var str3;
        var str2 ;
        for (var i = 0; i < e.entries.length; i++){
          var  str1 = "<span style= 'color:"+e.entries[i].dataSeries.color + "'> " + e.entries[i].dataSeries.name + "</span>: <strong>"+  e.entries[i].dataPoint.y + "</strong> <br/>" ; 
          total = e.entries[i].dataPoint.y + total;
          str = str.concat(str1);
        }
        str2 = "<span style = 'color:DodgerBlue; '><strong>"+e.entries[0].dataPoint.label + "</strong></span><br/>";
        str3 = "<span style = 'color:Tomato '>Total: </span><strong>" + total + "</strong><br/>";
        
        return (str2.concat(str)).concat(str3);
      }

    },
    data: [
    {        
      type: "bar",
      showInLegend: true,
      name: "Business number",
      color: "blue",
      dataPoints: [
      { y: <?php echo $members[4]?>, label: "4-5"},
      { y: <?php echo $members[7]?>, label: "3-4"},
      { y: <?php echo $members[6]?>, label: "2-3"},        
      { y: <?php echo $members[5]?>, label: "0-2"} 
      ]
    },
    {        
      type: "bar",
      showInLegend: true,
      name: "Total reviews",
      color: "red",          
      dataPoints: [
		{ y: <?php echo $members[8]?>, label: "4-5"},
		{ y: <?php echo $members[11]?>, label: "3-4"},
		{ y: <?php echo $members[10]?>, label: "2-3"},        
		{ y: <?php echo $members[9]?>, label: "0-2"} 

      ]
    },
    
  {        
      type: "bar",
      showInLegend: true,
      name: "Total checkin ",
      color: "#A57164",
      dataPoints: [
      { y: <?php echo $members[12]?>, label: "4-5"},
	  { y: <?php echo $members[15]?>, label: "3-4"},
	  { y: <?php echo $members[14]?>, label: "2-3"},        
	  { y: <?php echo $members[13]?>, label: "0-2"}   
    
      ]
  }

    ]
  });

chart2.render();
  };
</script>

  
  
  <div id="chartContainer1" style="height:300px; width: 40%; margin-bottom:10px">
  </div>
  <div id="chartContainer2" style="height:300px; width: 60%;margin-bottom:10px;margin-left:10px; float:right ;margin-top:-300px; ">
  </div>
</div>
<br><br>
<div class="table-wrapper orders-table section">
                    <div class="row-fluid head">
                        <div class="span12">
                            <h4>Top 100 Reviews</h4>
                        </div>
                    </div>

<div>
<?php foreach ($reviews as $member =>$fields) {?>
 <br><br><h6><b><?php echo "Date:".$fields['date'];?></b></b></h6><br><br>
 <i><?php echo "'".$fields['text']."'";}?></i><br><br>
 </div>
<br>
<!--        <div class="row-fluid filter-block">
                        <div class="pull-right">
                            <div class="btn-group pull-right">
                                <button class="glow left large">Ascending</button>
								<button class="glow right large">Descending</button>
                            </div>
                            <input id="search" type="text" class="search order-search" placeholder="Search for an order..." />
                        </div>
                </div>
<br>
                    <div class="row-fluid">     
                    
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="span2">
                                        Stars
                                    </th>
                                    <th class="span3">
                                        Business Name
                                    </th>
                                    <th class="span3">
                                        <span class="line"></span>
                                        Adress
                                    </th>
                                    <th class="span3">
                                        <span class="line"></span>
                                        City
                                    </th>
                                    <th class="span3">
                                        <span class="line"></span>
                                        State
                                    </th>
                                     <th class="span3">
                                        <span class="line"></span>
                                        Review Number
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- row 
                                <tr class="first">
                                    <td>
                                        <a href="#">#459</a>
                                    </td>
                                    <td>
                                        Bar
                                    </td>
                                    <td>
                                        <a href="#">Corso</a>
                                    </td>
                                    <td>
                                        Strada Lapusneanu
                                    </td>
                                    <td>
                                        Non stop
                                    </td>
                                    <td>
                                        No
                                    </td>
                                     
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">#459</a>
                                    </td>
                                    <td>
                                        Bar
                                    </td>
                                    <td>
                                        <a href="#">Corso</a>
                                    </td>
                                    <td>
                                       Strada Lapusneanu
                                    </td>
                                    <td>
                                        Non stop
                                    </td>
                                    <td>
                                        No
                                    </td>
                                </tr>
                                 <tr>
                                    <td>
                                        <a href="#">#459</a>
                                    </td>
                                    <td>
                                        Bar
                                    </td>
                                    <td>
                                        <a href="#">Corso</a>
                                    </td>
                                    <td>
                                        Strada Lapusneanu
                                    </td>
                                    <td>
                                        Non stop
                                    </td>
                                    <td>
                                        No
                                    </td>
                                </tr>
                                 <tr>
                                    <td>
                                        <a href="#">#459</a>
                                    </td>
                                    <td>
                                        Bar
                                    </td>
                                    <td>
                                        <a href="#">Corso</a>
                                    </td>
                                    <td>
                                        Strada Lapusneanu
                                    </td>
                                    <td>
                                        Non stop
                                    </td>
                                    <td>
                                        No
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- end bars table -->
				</br>
				</br>
				<!-- bars table -->
                

         
	<!-- scripts -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?php echo(JS.'bootstrap.min.js')?>"></script>
    <script src="<?php echo(JS.'theme.js')?>"></script>
</body>
    </html>

<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
