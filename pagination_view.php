<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
  
<div class="container">
	<?php if(!empty($list) && is_array($list)){?>
         <div class="col-md-12">
            <section class="panel panel-default">
                    <div class="panel-heading">
                        <strong><span class="glyphicon glyphicon-th"></span> User Details</strong>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" style="width: 100%; word-wrap:break-word; table-layout: fixed;">
                                <thead>
                                    <tr>
                                        <th>User ID </th>
                                        <th> User Params</th>
                                        <th> Dimensions</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    <?php foreach ($list as $key=>$value){ ?>
                                    <tr>
                                        <td><?php $user = !empty($value['userID'])? $value['userID'] : '';print $user;?></tD>
                                        <td> 
                                             <?php if(!empty($value['user_params']) && is_array($value['user_params'])){
                                                foreach($value['user_params'] as $k => $v){ ?>
                                                    <b><?php  print $k;?></b> : <?php print str_replace("'", "", $v);?><br />
                                            <?php  } } else{print '';} ?>
                                        </td>
                                        <td> 
                                             <?php if(!empty($value['dimensions']) && is_array($value['dimensions'])){
                                                foreach($value['dimensions'] as $k1 => $v1){ ?>
                                                    <b><?php  print $k1;?></b> : <?php print str_replace("'", "", $v1);?><br />
                                            <?php  } } else{print '';} ?>
                                        </td>
                                    </tr>
                                    <?php }?>
                                    
                                </tbody>    
                            </table>
                            <?php 
                                    if(!empty($pagination)){
                                            print $pagination;
                                    }
                            ?>
                           
                        </div>
                        
                    </div>
             </section>
        </div>  
        <?php }?>
</div>

</body>
</html>