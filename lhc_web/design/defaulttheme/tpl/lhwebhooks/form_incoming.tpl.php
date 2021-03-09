<div class="form-group">
    <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/webhooks','Name');?></label>
    <input type="text" class="form-control form-control-sm" name="name" value="<?php echo htmlspecialchars($item->name);?>" />
</div>

<div class="form-group">
    <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/webhooks','Identifier');?></label>
    <input type="text" class="form-control form-control-sm" name="identifier" onkeyup="$('#api-incoming-url').val($('#api-incoming-url').attr('data-base')+$(this).val())" value="<?php echo htmlspecialchars($item->identifier);?>" />
</div>

<div class="form-group">
    <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/webhooks','URL to put in third party Rest API service');?></label>
    <input type="text" class="form-control form-control-sm" id="api-incoming-url" data-base="<?php echo erLhcoreClassXMP::getBaseHost().(isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '')?><?php echo erLhcoreClassDesign::baseurldirect('webhooks/incoming')?>/" value="<?php echo erLhcoreClassXMP::getBaseHost().(isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '')?><?php echo erLhcoreClassDesign::baseurldirect('webhooks/incoming')?>/<?php echo htmlspecialchars($item->identifier);?>">
</div>

<div class="form-group">
    <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/lists/search_panel','Department');?></label>
    <?php echo erLhcoreClassRenderHelper::renderCombobox( array (
        'input_name'     => 'dep_id',
        'optional_field' => erTranslationClassLhTranslation::getInstance()->getTranslation('chat/lists/search_panel','Choose department'),
        'selected_id'    => $item->dep_id,
        'css_class'      => 'form-control form-control-sm',
        'display_name'   => 'name',
        'list_function_params' => array(),
        'list_function'  => 'erLhcoreClassModelDepartament::getList'
    )); ?>
</div>

<div class="form-group">
    <label><input type="checkbox" value="on" name="disabled" <?php echo $item->disabled == 1 ? 'checked="checked"' : '' ?> /> <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/new','Disabled')?></label>
</div>

<ul class="nav nav-tabs mb-3" role="tablist">
    <li role="presentation" class="nav-item"><a href="#main_message_attributes" class="nav-link active" aria-controls="main_message_attributes" role="tab" data-toggle="tab" aria-selected="false"><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/webhooks','Main attributes')?></a></li>
    <li role="presentation" class="nav-item"><a class="nav-link" href="#text_messages" aria-controls="text_messages" role="tab" data-toggle="tab" aria-selected="true"><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/webhooks','Text messages')?></a></li>
    <li role="presentation" class="nav-item"><a class="nav-link" href="#attachments" aria-controls="attachments" role="tab" data-toggle="tab" aria-selected="true"><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/webhooks','Attachments')?></a></li>
    <li role="presentation" class="nav-item"><a class="nav-link" href="#img-attachments" aria-controls="img-attachments" role="tab" data-toggle="tab" aria-selected="true"><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/webhooks','Images')?></a></li>
    <li role="presentation" class="nav-item"><a class="nav-link" href="#chat_options" aria-controls="chat_options" role="tab" data-toggle="tab" aria-selected="true"><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/webhooks','Chat options')?></a></li>
</ul>

<div class="tab-content">
    <div role="tabpanel" class="tab-pane form-group active" id="main_message_attributes">
        <div class="form-group">
            <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/webhooks','Messages attribute location');?></label>
            <input type="text" class="form-control form-control-sm" ng-model="webhookincomingsctl.conditions.messages" value="" />
        </div>
        <div class="form-group">
            <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/webhooks','Nick');?></label>
            <input type="text" class="form-control form-control-sm" ng-model="webhookincomingsctl.conditions.nick" value="" />
        </div>
        <div class="form-group">
            <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/webhooks','Time');?></label>
            <input type="text" class="form-control form-control-sm" ng-model="webhookincomingsctl.conditions.time" value="" />
        </div>
        <div class="form-group">
            <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/webhooks','Chat ID field location');?></label>
            <input type="text" class="form-control form-control-sm" ng-model="webhookincomingsctl.conditions.chat_id" value="" />
        </div>
        <div class="form-group">
            <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/webhooks','General conditions for messages being processed. These are first level attributes');?></label>
            <input type="text" class="form-control form-control-sm" ng-model="webhookincomingsctl.conditions.main_cond" placeholder="main attribute=value expected||main attribute=value expected" value="" />
        </div>
    </div>

    <div role="tabpanel" class="tab-pane form-group" id="text_messages">
        <div class="form-group">
            <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/webhooks','Message body content');?></label>
            <textarea class="form-control form-control-sm" ng-model="webhookincomingsctl.conditions.msg_body"></textarea>
        </div>
        <div class="form-group">
            <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/webhooks','For message being considered text message should have attribute value equal to');?></label>
            <input type="text" class="form-control form-control-sm" placeholder="message_attribute=value expected||message_attribute=value expected" ng-model="webhookincomingsctl.conditions.msg_cond" value="" />
        </div>
    </div>

    <div role="tabpanel" class="tab-pane form-group" id="attachments">
        <div class="form-group">
            <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/webhooks','Message body content');?></label>
            <textarea class="form-control form-control-sm" ng-model="webhookincomingsctl.conditions.msg_attachments"></textarea>
        </div>
        <div class="form-group">
            <label><input type="checkbox" ng-model="webhookincomingsctl.conditions.msg_attachments_download" value="on" > <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/webhooks','Download attachment instead of using external URL');?></label>
            <input type="text" class="form-control form-control-sm" placeholder="Please provide attribute" ng-model="webhookincomingsctl.conditions.msg_cond_attachments_body" value="" />
        </div>
        <div class="form-group">
            <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/webhooks','For message being considered attachment message should have attribute value equal to');?></label>
            <input type="text" class="form-control form-control-sm" placeholder="message_attribute=value expected||message_attribute=value expected" ng-model="webhookincomingsctl.conditions.msg_cond_attachments" value="" />
        </div>
    </div>

    <div role="tabpanel" class="tab-pane form-group" id="img-attachments">
        <div class="form-group">
            <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/webhooks','Message body content');?></label>
            <textarea class="form-control form-control-sm" ng-model="webhookincomingsctl.conditions.msg_img"></textarea>
        </div>
        <div class="form-group">
            <label><input type="checkbox" ng-model="webhookincomingsctl.conditions.msg_img_download" value="on" > <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/webhooks','Download image instead of using external URL');?></label>
            <input type="text" class="form-control form-control-sm" placeholder="Please provide attribute" ng-model="webhookincomingsctl.conditions.msg_cond_img_body" value="" />
        </div>
        <div class="form-group">
            <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/webhooks','For message being considered images message should have attribute value equal to');?></label>
            <input type="text" class="form-control form-control-sm" placeholder="message_attribute=value expected||message_attribute=value expected" ng-model="webhookincomingsctl.conditions.msg_cond_img" value="" />
        </div>
    </div>

    <div role="tabpanel" class="tab-pane form-group" id="chat_options">
        <div class="form-group">
            <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/webhooks','If previous chat is found and it is closed we should');?></label>
            <select ng-model="webhookincomingsctl.conditions.chat_status" class="form-control form-control-sm">
                <option value=""><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/webhooks','Create a new chat.');?></option>
                <option value="pending"><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/webhooks','Set previous chat to Pending/Bot depending on department configuration.');?></option>
                <option value="active"><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/webhooks','Set as active if operator was assigned. Operator will not be reset.');?></option>
            </select>
        </div>
        <div class="form-group">
            <label><input type="checkbox" ng-model="webhookincomingsctl.conditions.reset_op" value="on" > <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/webhooks','Operator should be reset if chat being transferred to pending state.');?></label>
        </div>
    </div>


</div>

<textarea name="configuration" class="hide" ng-model="webhookincomingsctl.conditions_json"></textarea>

<hr/>

<h5><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/webhooks','Expected JSON payload for text message.');?></h5>

<pre>
<?php echo '{'."\n".'
    {{webhookincomingsctl.conditions.messages ? "\""+webhookincomingsctl.conditions.messages+"\":[" : ""}}'."\n".'
        "{{webhookincomingsctl.conditions.msg_body}}" : "'. erTranslationClassLhTranslation::getInstance()->getTranslation('chat/webhooks','expected message body') .'",'."\n".'
        "{{webhookincomingsctl.conditions.nick}}": "'.  erTranslationClassLhTranslation::getInstance()->getTranslation('chat/webhooks','expected nick').'",'."\n".'
        "{{webhookincomingsctl.conditions.time}}": "'.  erTranslationClassLhTranslation::getInstance()->getTranslation('chat/webhooks','unix timestamp E.g 1504208593').'",'."\n".'
        "{{webhookincomingsctl.conditions.chat_id}}": "'.  erTranslationClassLhTranslation::getInstance()->getTranslation('chat/webhooks','Unique Chat ID.').'",'."\n".'
        {{webhookincomingsctl.conditions.msg_cond ? "\""+webhookincomingsctl.conditions.msg_cond.replaceAll("=","\":\"").replaceAll("||","\",        \n\"")+"\"," : ""}}'."\n".'
    {{webhookincomingsctl.conditions.messages ? "]" : ""}}'."\n".'
    {{webhookincomingsctl.conditions.main_cond ? "\""+webhookincomingsctl.conditions.main_cond.replaceAll("=","\":\"").replaceAll("||","\",        \n\"")+"\"," : ""}}
'."\n".'}'?>
</pre>