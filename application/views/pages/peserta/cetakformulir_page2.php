 
<!--Import materialize.css-->
<link href="<?php echo base_url(); ?>assets/css/form.css" rel="stylesheet" type="text/css"/>
<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 
 
<table class="tg" style=" width: 800px" border="1"> 
  
  <tr>
    <td class="tg-amwm" colspan="3" style="border-bottom-color: black; border-top-color: black;">

      <center>
        MOTIVASI MENGIKUTI BUJANG GADIS FASILKOM
      </center>

    </td>
    </tr>
    <tr>
    <td class="tg-yw4l" colspan="3" style="height: 250px;">
      <?php 
              if(isset($peserta->motivasi)){
                   echo $peserta->motivasi;        
              }   
          ?>  

    </td>
    </tr>
   <tr>
    <td class="tg-amwm" colspan="3" style="border-bottom-color: black; border-top-color: black;">

      <center>
        RIWAYAT ORGANISASI
      </center>

    </td>
    </tr>
    <tr> 
    <td class="tg-yw4l" colspan="3" style="height: 250px;">
      <?php 
              if(isset($peserta->riwayat_organisasi)){
                   echo $peserta->riwayat_organisasi;        
              }   
          ?>  

    </td>
  </tr>
  <tr>
    <td class="tg-amwm" colspan="3" style="border-bottom-color: black; border-top-color: black;">

      <center>
        PRESTASI YANG PERNAH DICAPAI
      </center>

    </td>
    </tr>
  <tr >
    <td class="tg-yw4l" style="height: 250px;" colspan="3">
      <?php 
              if(isset($peserta->prestasi)){
                   echo $peserta->prestasi;        
              }   
          ?>  

    </td>
  </tr>

  </table>