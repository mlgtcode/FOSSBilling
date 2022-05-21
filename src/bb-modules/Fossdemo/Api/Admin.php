<?php
/**
 * Demo FOSSBilling management 
 */
namespace Box\Mod\Fossdemo\Api;
class Admin extends \Api_Abstract
{
    /**
     * Reset all data for demo page
     * 
     * @return bool
     */
    public function reset()
    {
        /* Below functions are related to the servicesolusvm extention /*
        
        /*
        $api = $this->getApiAdmin();
        $api->extension_activate(array('id'=>'servicesolusvm', 'type'=>'mod'));
        $api->extension_activate(array('id'=>'serviceFOSSBillinglicense', 'type'=>'mod'));
        $api->extension_activate(array('id'=>'notification', 'type'=>'mod'));
        
        $api->email_batch_template_generate();
        
        $client_1 = array(
            'email'=> "client@fossbilling.org",
            'password'=> "demo",
            'first_name'=> "Demo",
            'last_name'=> "Client",
            'phone_cc'=> "214",
            'phone'=> "15551212",
            'birthday'=> "1985-02-25",
            'company'=> "FOSSBilling",
            'address_1'=> "Holywood",
            'address_2'=> "Stairway to heaven",
            'city'=> "Holywood",
            'state'=> "LA",
            'postcode'=> "95012",
            'country'=> "US",
            'currency'=> "USD",
            'notes'=> "FOSSBilling demo client",
            'api_token'=> "client_api_token",
            'created_at'=> date('c'),
            'updated_at'=> date('c'),
        );
    
        $client_2 = array(
            'email'=> "client@fossbilling.org",
            'password'=> "demo",
            'first_name'=> "John",
            'last_name'=> "Smith",
            'company'=> "John's Company Inc.",
            'phone_cc'=> "261",
            'phone'=> "4106851180",
            'birthday'=> "1985-02-25",
            'company'=> "FOSSBilling",
            'address_1'=> "1734 Maryland Avenue",
            'address_2'=> "Stairway to heaven",
            'city'=> "Baltimore",
            'state'=> "MD",
            'postcode'=> "21201",
            'country'=> "US",
            'currency'=> "USD",
            'notes'=> "FOSSBilling demo client",
            'created_at'=> date('c'),
            'updated_at'=> date('c'),
        );
        $api->client_create($client_1);
        $api->client_create($client_2);
        
        $api->cron_run();
        
        $this->_log('Demo reset initiated');
        */
        return true;
    }
}
