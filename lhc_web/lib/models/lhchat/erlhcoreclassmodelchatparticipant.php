<?php

class erLhcoreClassModelChatParticipant
{

    use erLhcoreClassDBTrait;

    public static $dbTable = 'lh_chat_participant';

    public static $dbTableId = 'id';

    public static $dbSessionHandler = 'erLhcoreClassChat::getSession';

    public static $dbSortOrder = 'DESC';

    public function getState()
    {
        return array(
            'id' => $this->id,
            'chat_id' => $this->chat_id,
            'user_id' => $this->user_id,
            'duration' => $this->duration,
            'role' => $this->role,
            'ctime' => $this->ctime
        );
    }

    public function __get($var)
    {

        switch ($var) {

            case 'chat':
                $this->chat = erLhcoreClassModelChat::fetch($this->chat_id);
                return $this->chat;

            default:
                break;
        }
    }

    public $id = null;
    public $chat_id = 0;
    public $user_id = 0;
    public $duration = 0;
    public $role = 0;
    public $ctime = 0;

}

?>