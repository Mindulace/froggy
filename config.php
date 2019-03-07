<?php
/**
 * FROGGY-BOT       v1.1.0
 * 
 * 
 * Webhook:         This is the URL from the discord server.
 * Random_message:  To activate random messages.
 *      false   =>  The bot is using the first message in array.
 *      true    =>  The bot is now choosing a random message.
 * Message:         This is the message, which the bot will be posting.
 * 
 * ExplicitUser:    This is the option for mentioning specific users.
 *      false   =>  This will mention every user on the discord server.
 *      true    =>  The bot will mention specific users that are'nt posting their frog of the day.
 */

return array(
    'discord' => array(
        'webhook'           => 'https://discordapp.com/api/webhooks/EXAMPLE',
        'random_message'    => true,
        'messages'          => array(
            'Quaaak.. Denkt an euren :frog: of the day! @everyone',
            'Hello, ... it\'s me. Can you hear me? Hellooo from the :frog: siiiiide! @everyone',
            'Guten Tag, dies ist Ihre automatische :frog: - Reminder. Bitte hinterlassen Sie Ihren :frog: nach dem Signalton. Piep! @everyone',
            'What does the :frog: say? Ring-ding-ding-ding-dingeringeding! @everyone',
            'A :frog: a day, keeps your Sorrows away! @everyone',
            'Alarm, Alarm! .... :frog: ! @everyone',
            'Es spricht die automatische :frog: - Reminder. Bitte tragen Sie Ihren :frog: ein! @everyone',
            ':frog: - Alarm! Bei Risiken und Nebenwirkungen fragen Sie Ihren :frog: oder Apotheker! @everyone'
        ),
    ),
    'general' => array(
        'explicitUser'      => false, // Disabled for the first version
    )
);