<div id="status-tracker-tabs" class="status-tracker-tabs current--<?php print $current_phase_color ?> clearfix">
  <div class="status-tracker-tabs--inner">

    <div role="tablist" aria-label="Status Tracker" class="tabs-section tabs-section--first">
      <?php for ($i = 1; $i <= $max_phases; $i++): ?>
        <?php
          $title = 'title_'.$i;
          $id = 'id_'.$i;
          $step = 'id_'.$i.'_step';
          $selected = 'id_'.$i.'_selected';
          $classes = 'id_'.$i.'_classes';
        ?>
        <button role="tab" aria-selected="<?php print $$selected ?>" aria-current="<?php print $$step ?>" aria-controls="<?php print $$id ?>-tab" id="<?php print $$id ?>" class="tab-item <?php print $$classes ?>">
            <span class="tab-content tab-number">
              <?php print $i ?>
            </span>
            <span class="tab-content tab-text">
              <span class="visuallyhidden">Phase: <?php print $i ?>, </span>
              <?php print $$title ?>
            </span>
        </button>
      <?php endfor; ?>
    </div> <!-- end tablist -->

    <div class="tabs-section tabs-section--second">
      <?php for ($i = 1; $i <= $max_phases; $i++): ?>
        <?php
          $desc = 'description_'.$i;
          $phase_status = 'phase_status_'.$i;
          $id = 'id_'.$i;
          $hidden = 'id_'.$i.'_hidden';
          $classes = 'id_'.$i.'_classes';
        ?>
        <div tabindex="0" role="tabpanel" id="<?php print $$id ?>-tab" aria-labelledby="<?php print $$id ?>" <?php print $$hidden ?>>
          <div class="tabpanel--inner">
            <div class="phase-status <?php print $$classes ?>"><?php print $$phase_status ?></div>
            <div class="phase-description"><?php print $$desc ?></div>
          </div>
        </div>
      <?php endfor; ?>
    </div>

  </div>
</div>
