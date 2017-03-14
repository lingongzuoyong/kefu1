<ul class="list-unstyled">
      <li ng-repeat="chat in pending_chats.list track by chat.id" ng-class="{'icon-user-away': chat.user_status_front == 2, 'icon-user-online': chat.user_status_front == 0}">
      	<span ng-if="chat.country_code != undefined"><img ng-src="<?php echo erLhcoreClassDesign::design('images/flags');?>/{{chat.country_code}}.png" alt="{{chat.country_name}}" title="{{chat.country_name}}" /></span>
      	<i class="material-icons" ng-show="chat.user_name" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('pagelayout/pagelayout','Assigned operator');?> - {{chat.user_name}}">account_box</i><a class="material-icons" title="ID - {{chat.id}}" ng-click="lhc.previewChat(chat.id)">info_outline</a><a class="material-icons" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncadmininterface','Redirect user to contact form.');?>" ng-click="lhc.redirectContact(chat.id,'<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncadmininterface','Are you sure?');?>')" >reply</a><a class="right-action-hide material-icons" ng-click="lhc.startChat(chat.id,chat.nick)" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncadmininterface','Accept chat');?>">chat</a><a title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncadmininterface','Open in a new window');?>" class="material-icons" ng-click="lhc.startChatNewWindow(chat.id,chat.nick)">open_in_new</a>{{chat.nick}}, <small><i>{{chat.wait_time_pending}},</i></small> {{chat.department_name}}
      </li>
</ul>
<p ng-show="pending_chats.list.length == 0"><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('pagelayout/pagelayout','Empty...');?></p>