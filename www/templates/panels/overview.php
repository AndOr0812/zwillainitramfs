<?php $minimized = ($overview['state'] === 'close'); ?>
<div id="overview" class="panel panel-primary panel-overview" data-type="overview">
   <h1>Overview</h1>
   <div class="panel-heading">
      <button type="button" class="panel-header-button btn-updater" data-type="rig"><i class="icon icon-refresh"></i> Update</button>
      <button type="button" class="panel-header-button toggle-panel-body"><i class="icon icon-chevron-<?php echo ($minimized?'down':'up') ?>"></i></button>
      <h2 class="panel-title"><i class="icon icon-eye-view"></i> Current Rigs</h2>
   </div>
   <div class="panel-body panel-body-overview" <?php echo ($minimized?'style="display:none;"':'') ?>>
      <div class="table-responsive">
        <table class="table table-hover table-striped">
         <thead>
            <tr>
               <th></th>
               <th>Name</th>
               <th>Algorithm</th>
               <th>Highest Temperature</th>
               <th>Hashrate avg</th>
               <th>Active Pool</th>
               <th>Uptime</th>
            </tr>
         </thead>
         <tbody></tbody>
        </table>
      </div>
   </div><!-- / .panel-body -->
</div>
