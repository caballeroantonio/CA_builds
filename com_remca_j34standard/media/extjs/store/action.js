/**
SELECT CONCAT("{'id': '",action,"',			'value': '",action,"'},") FROM remca.jos_rem_wa_entry_conversations
WHERE id IN (37, 16263, 3412, 8892, 131, 2717, 2713, 133, 126, 2700, 6062, 2699, 8151, 2432, 16110, 16314, 2430, 2200, 8272, 6063, 2819, 2, 2705, 2698, 8153, 18, 2763, 2226, 9045, 6099, 45, 16136, 1)
GROUP BY action
ORDER BY action
;
 * */

Ext.define('remca.store.action', {
    extend: 'Ext.data.Store',
    storeId: 'action',
    
    data:{'items':[
{'id': 'Pide',			'value': 'Pide'},
{'id': 'Ofrece',			'value': 'Ofrece'},
{'id': '&#8206;',			'value': 'user said'},
{'id': 'say',                   	'value': 'user said'},
{'id': 'c_asuntoarg1',			'value': 'usuario ha cambiado el asunto'},
{'id': 'c_change_phone',		'value': 'user ‬ changed their phone number to a new number.'},
{'id': 'c_change_phone2',		'value': 'usuario ha cambiado su número de teléfono'},
{'id': 'c_conf_close',			'value': '‬usuario cambió la configuración de este grupo para permitir que solo los administradores puedan enviar mensajes a este grupo.'},
{'id': 'c_conf_close2',			'value': 'user changed this group\'s settings to allow all participants to send messages to this group.'},
{'id': 'c_conf_close3',			'value': '‬user changed this group\'s settings to allow only admins to send messages to this group.'},
{'id': 'c_conf_open',			'value': 'usuario cambió la configuración de este grupo para permitir que todos los participantes puedan enviar mensajes a este grupo.'},
{'id': 'c_create_group',		'value': 'usuario ha creado este grupo'},
{'id': 'c_create_group2',		'value': 'user created this group'},
{'id': 'c_encryption',			'value': 'Messages to this group are now secured with end-to-end encryption.'},
{'id': 'c_encryption2',			'value': 'Los mensajes en este grupo ahora están protegidos con cifrado de extremo a extremo.'},
{'id': 'c_icono',			'value': 'usuario ha cambiado el ícono de este grupo'},
{'id': 'c_uadmon',			'value': 'usuario ahora es un administrador'},
{'id': 'c_unadmon',			'value': 'usuario ahora no es un administrador'},
{'id': 'c_user_added',			'value': 'usuario te ha añadido'},
{'id': 'c_user_added2arg1',		'value': 'usuario ha añadido tels'},
{'id': 'c_user_added2arg2',		'value': 'usuario ha añadido tels'},//repetido?
{'id': 'c_user_added3',			'value': 'user added you'},
{'id': 'c_user_added4arg2',		'value': 'user added phones'},
{'id': 'c_user_join_link',		'value': 'usuario se ha unido usando el enlace de invitación de este grupo'},
{'id': 'c_user_join_link2',		'value': 'user joined using this group\'s invite link'},
{'id': 'c_user_join_link3',		'value': 'You joined using this group\'s invite link'},
{'id': 'c_user_join_link4',		'value': 'Te has unido usando este enlace de invitación de grupo'},
{'id': 'c_user_leave',			'value': 'usuario ha salido del grupo'},
{'id': 'c_user_leave2',			'value': 'usuario ha salido del grupo'},
{'id': 'c_user_removed2arg5',		'value': 'usuario ha eliminado tel'},
{'id': 'c_user_removed2arg6',		'value': 'usuario ha eliminado tel'},//repetido?
{'id': 'c_user_removedarg4',		'value': 'user removed phone'},
{'id': 'delete_message',		'value': '‎Este mensaje fue eliminado.'},
{'id': 'c_desc',			'value': 'usuario cambió la descripción del grupo'},
    ]},
    fields:['id', 'value'],
    proxy: {
        type: 'memory',
        reader: {
            type: 'json',
            rootProperty: 'items',//extjs 4.2 and before name is root
        }
    },
});