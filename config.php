<?php
/**
 * Webhook:         This is the URL from the discord server.
 * Message:         This is the message, which the bot will be posting.
 * 
 * ExplicitUser:    This is the option for mentioning specific users.
 *      false   =>  This will mention every user on the discord server.
 *      true    =>  The bot will mention specific users that are'nt posting their frog of the day.
 */

return array(
    'discord' => array(
        'webhook' => 'https://discordapp.com/api/webhooks/550385983175131156/LeLEyM9NFW_ai-_p_f4HF-UEcXNpDcoIcoPDcl5lgJcYDRkMHngutd6d1S76_FVfgu3r',
        'message' => 'Quaaak.. Denkt an euren :frog: of the day! @everyone',
    ),
    'general' => array(
        'explicitUser' => false, // Disabled for the first version
    )
);