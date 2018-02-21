<?php
('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION["nomcompleto"]?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
     
     
      <ul class="sidebar-menu">
        <li class="header">MENU</li>
     
     <?php
	 foreach($menuopc as $rowmenu)
	  {
	 
		 if ($rowmenu->tipo==1){
			 
			 
			 if ($idopcpadre==$rowmenu->idopcsist){
	   		   $actpadre="active";
			 }else{
			   $actpadre="";
			 }
			 
			 
		  ?>
          <li class="<?php echo $actpadre ?> treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span><?php echo $rowmenu->titulo ?> </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			   <?php
			   $nropag=$rowmenu->nropag;

				   foreach($menuopc as $rowmenu1)
		  		{              
	             if (($rowmenu1->nropag==$nropag)&&($rowmenu1->tipo==2)){
					 
					
					if ($idopc==$rowmenu1->idopcsist){
					   $actpadre="class='active'";
					 }else{
					   $actpadre="";
					 }
					 
					 
			   ?>
                <li <?php echo $actpadre ?> >
                <a href="<?php echo base_url();?>index.php/<?php echo $rowmenu1->pagina ?>"><i class="fa fa-circle-o"></i> <?php echo $rowmenu1->titulo ?> </a>
                </li>
               <?php
					 }
				}
               ?>
           
          </ul>
        </li>
          
          
          <?php
		  
		  }
	 
	  }
	 ?>   
      <li class="treeview">
          <a href="<?php echo base_url();?>index.php/salir">
            <i class="fa fa-edit"></i> <span>Salir</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          
        </li>
      
      
    </section>
    <!-- /.sidebar -->
  </aside>