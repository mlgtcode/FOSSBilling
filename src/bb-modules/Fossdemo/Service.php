<?php
namespace Box\Mod\Fossdemo;
use Box\InjectionAwareInterface;

class Service implements InjectionAwareInterface
{
    const MSG = 'This feature is disabled in DEMO mode.';
	protected $di = null;
	
	public function setDi($di)
    {
        $this->di = $di;
    }

    public function getDi()
    {
        return $this->di;
    }
    public function uninstall()
    {
         throw new \Box_Exception(self::MSG,null, 403);
    }

    public static function onBeforeAdminStaffUpdate(\Box_Event $event)
    {
        throw new \Box_Exception(self::MSG,null, 403);
    }
    
    public static function onBeforeAdminStaffDelete(\Box_Event $event)
    {
        throw new \Box_Exception(self::MSG,null, 403);
    }
    
    public static function onBeforeAdminStaffCreate(\Box_Event $event)
    {
        throw new \Box_Exception(self::MSG,null, 403);
    }

    public static function onBeforeAdminStaffPasswordChange(\Box_Event $event)
    {
        throw new \Box_Exception(self::MSG,null, 403);
    }

    public static function onBeforeAdminStaffProfileUpdate(\Box_Event $event)
    {
        throw new \Box_Exception(self::MSG,null, 403);
    }

    public static function onBeforeAdminStaffProfilePasswordChange(\Box_Event $event)
    {
        throw new \Box_Exception(self::MSG,null, 403);
    }
    
    public static function onBeforeAdminStaffApiKeyChange(\Box_Event $event)
    {
        throw new \Box_Exception(self::MSG,null, 403);
    }

    public static function onBeforeClientProfileUpdate(\Box_Event $event)
    {
        throw new \Box_Exception(self::MSG,null, 403);
    }
    
    public static function onBeforeClientProfilePasswordChange(\Box_Event $event)
    {
        throw new \Box_Exception(self::MSG,null, 403);
    }
    
    public static function onBeforeAdminClientDelete(\Box_Event $event)
    {
        throw new \Box_Exception(self::MSG,null, 403);
    }

    public static function onBeforeAdminClientUpdate(\Box_Event $event)
    {
        $data = $event->getParameters();
        if($data['id'] == 1 && $data['email'] != 'client@fossbilling.org') {
            throw new \Box_Exception(self::MSG,null, 403);
        }
    }

    public static function onBeforeAdminClientPasswordChange(\Box_Event $event)
    {
        throw new \Box_Exception(self::MSG,null, 403);
    }
    
    public static function onBeforeAdminSettingsUpdate(\Box_Event $event)
    {
        throw new \Box_Exception(self::MSG,null, 403);
    }
    
    public static function onBeforeAdminDeleteCurrency(\Box_Event $event)
    {
        throw new \Box_Exception(self::MSG,null, 403);
    }

}
