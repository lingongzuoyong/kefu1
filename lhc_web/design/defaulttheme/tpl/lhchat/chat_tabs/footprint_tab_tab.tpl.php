<?php include(erLhcoreClassDesign::designtpl('lhchat/chat_tabs/footprint_tab_tab_pre.tpl.php')); ?>
<?php if ($chat_chat_tabs_footprint_tab_tab_enabled == true && erLhcoreClassModelChatConfig::fetch('track_footprint')->current_value == 1) : ?>
<li class="nav-item" role="presentation"><a class="nav-link <?php if ($chatTabsOrderDefault == 'footprint_tab_tab') print ' active';?>" href="#footprint-tab-chat-<?php echo $chat->id?>" aria-controls="footprint-tab-chat-<?php echo $chat->id?>" role="tab" data-toggle="tab" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/adminchat','Footprint')?>"><i class="material-icons me-0">directions_walk</i></a></li>
<?php endif;?>