<?php
	$db = new PDO("mysql:host=localhost;dbname=models", 'root', '');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$sql = $db->query("SELECT * FROM destinations ORDER BY id ASC");
	$destinations = $sql->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="Subhead-actions">
      <div class="select-menu select-menu-modal-right js-menu-container js-select-menu js-pulse-period">
        <button class="btn btn-sm select-menu-button js-menu-target" type="button" aria-haspopup="true" aria-expanded="false">
          <i>Destinations:</i>
          <span class="js-select-button">1 week</span>
        </button>
        <div class="select-menu-modal-holder js-menu-content js-navigation-container">
          <div class="select-menu-modal">
            <div class="select-menu-header">
              <span class="select-menu-title">Filter Destinations</span>
              <svg aria-label="Close" class="octicon octicon-x js-menu-close" height="16" role="img" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"/></svg>
            </div>
            <div class="select-menu-list">
				<?php foreach($destinations as $destination) { ?>
				<div class="select-menu-item js-navigation-item ">
					<input data-url="/cruisereizen/cruisereizen/pulse/daily" id="period_daily" name="period" type="radio" value="daily" />
					<svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
					<div class="select-menu-item-text js-select-button-text"><?php echo $destination['name']; ?></div>
				</div>
				<?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>