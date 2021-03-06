<div class="page-head">
    <!-- Page heading -->
      <h2 class="pull-left"><?php _l('Dependent fields')?>
      <!-- page meta -->
      <span class="page-meta"><?php _l('View all dependent fields')?></span>
    </h2>
    
    
    <!-- Breadcrumb -->
    <div class="bread-crumb pull-right">
      <a href="<?php echo site_url('admin')?>"><i class="icon-home"></i> <?php echo lang('Home')?></a> 
      <!-- Divider -->
      <span class="divider">/</span> 
      <a class="bread-current" href="<?php echo site_url('admin/estate')?>"><?php echo lang('Estates')?></a>
    </div>
    
    <div class="clearfix"></div>
</div>

<div class="matter">
        <div class="container">
        
        <div class="row">
            <div class="col-md-12"> 
                <?php echo anchor('admin/estate/edit_dependent_field', '<i class="icon-plus"></i>&nbsp;&nbsp;'.lang_check('Add dependent field'), 'class="btn btn-primary"')?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="widget wlightblue">
                <div class="widget-head">
                  <div class="pull-left"><?php _l('Dependent fields')?></div>
                  <div class="widget-icons pull-right">
                    <a class="wminimize" href="#"><i class="icon-chevron-up"></i></a> 
                  </div>
                  <div class="clearfix"></div>
                </div>
                  <div class="widget-content">
                    <?php if($this->session->flashdata('error')):?>
                    <p class="label label-important validation"><?php echo $this->session->flashdata('error')?></p>
                    <?php endif;?>

                    <table class="table table-bordered footable">
                      <thead>
                        <tr>
                        	<th><?php _l('Field');?></th>
                            <th data-hide="phone"><?php _l('Value');?></th>
                            <th data-hide="phone"><?php _l('Hidden count');?></th>
                        	<th class="control"><?php _l('Edit');?></th>
                            <?php if($this->session->userdata('type') != 'AGENT_ADMIN'): ?>
                        	<th class="control"><?php _l('Delete');?></th>
                            <?php endif;?> 
                        </tr>
                      </thead>
                      <tbody>
                        <?php if(count($listings)): foreach($listings as $item):?>
                                    <tr>
                                    	<td><?php echo '<a href="'.site_url('admin/estate/edit_dependent_field/'.$item->id_dependent_field).'">'.$item->option.'</a>'; ?></td>
                                        <td>
                                        <?php 
                                        $values = explode(',', $item->values);
                                        
                                        if(isset($values[$item->selected_index]))
                                        {
                                            echo $values[$item->selected_index]; 
                                        }
                                        else
                                        {
                                            echo '<span class="label label-danger">'.lang_check('Wrong value').'</span>';
                                        }
                                        ?>
                                        </td>
                                        <td>
                                        <?php 
                                        $values = explode(',', $item->hidden_fields_list);
                                        
                                        if(count($values) > 0 && is_numeric($values[0]))
                                        {
                                            echo count($values);
                                        }
                                        else
                                        {
                                            echo '-';
                                        }
                                        
                                        
                                        ?>
                                        </td>
                                        <?php if($this->session->userdata('type') == 'ADMIN'): ?>
                                        <td><?php echo btn_edit('admin/estate/edit_dependent_field/'.$item->id_dependent_field)?> </td>
                                    	<td><?php echo btn_delete('admin/estate/delete_dependent_field/'.$item->id_dependent_field)?></td>
                                        <?php endif;?> 
                                    </tr>
                        <?php endforeach;?>
                        <?php else:?>
                                    <tr>
                                    	<td colspan="4"><?php _l('We could not find any'); ?></td>
                                    </tr>
                        <?php endif;?>                   
                      </tbody>
                    </table>

                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
    
    
    
    
</section>