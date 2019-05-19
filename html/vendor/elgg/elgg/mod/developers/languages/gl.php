<?php
return array(
	// menu
	'admin:develop_tools' => 'Ferramentas',
	'admin:develop_tools:sandbox' => 'Zona de probas de temas',
	'admin:develop_tools:inspect' => 'Inspeccionar',
	'admin:inspect' => 'Inspeccionar',
	'admin:develop_tools:unit_tests' => 'Probas unitarias',
	'admin:develop_tools:entity_explorer' => 'Entity Explorer',
	'admin:developers' => 'Desenvolvedores',
	'admin:developers:settings' => 'Configuración',

	// settings
	'elgg_dev_tools:settings:explanation' => 'Cambie embaixo a súa configuración de desenvolvemento e depuración. Algunhas das opcións tamén se poden cambiar desde outras páxinas de administración.',
	'developers:label:simple_cache' => 'Usar a caché simple.',
	'developers:help:simple_cache' => 'Desactive esta caché durante o desenvolvemento. Se a deixa activada, ignoraranse os cambios que faga nos ficheiros de CSS e JavaScript.',
	'developers:label:system_cache' => 'Usar a caché do sistema.',
	'developers:help:system_cache' => 'Desactive esta caché durante o desenvolvemento. Se a deixa activada, ignoraranse os cambios que faga nos complementos.',
	'developers:label:debug_level' => "Nivel de traza",
	'developers:help:debug_level' => "Isto controla o nivel de información que se rexistra. Véxase «elgg_log()» para máis información.",
	'developers:label:display_errors' => 'Mostrar os errores irrecuperábeis de PHP',
	'developers:help:display_errors' => "De maneira predeterminada, o ficheiro «.htaccess» de Elgg evita que se mostren os erros irrecuperábeis.",
	'developers:label:screen_log' => "Mostrar o rexistro en pantalla.",
	'developers:help:screen_log' => "Isto mostra os datos de saída de elgg_log() e elgg_dump() e unha conta de consultas de base de datos.",
	'developers:label:show_strings' => "Mostrar as mensaxes de tradución sen procesar.",
	'developers:help:show_strings' => "Isto mostra as mensaxes de tradución usadas por «elgg_echo()».",
	'developers:label:show_modules' => "Mostrar os módulos AMD cargados na consola.",
	'developers:help:show_modules' => "Envía os módulos e calores cargados á súa consola de JavaScript.",
	'developers:label:wrap_views' => "Encapsular as vistas.",
	'developers:help:wrap_views' => "This wraps almost every view with HTML comments. Useful for finding the view creating particular HTML.
									This can break non-HTML views in the default viewtype. See developers_wrap_views() for details.",
	'developers:label:log_events' => "Rexistrar os acontecementos e os ganchos dos complementos.",
	'developers:help:log_events' => "Engadir ao rexistro os acontecementos e mailos ganchos dos complementos. Aviso: cada páxina contén unha morea deles.",
	'developers:label:show_gear' => "Usar %s fóra da zona de administración",
	'developers:help:show_gear' => "Unha icona na parte inferior dereita da vista que fornece acceso de administrador a opcións e ligazóns de desenvolvedor.",
	'developers:label:block_email' => "Block all outgoing e-mails",
	'developers:help:block_email' => "You can block outgoing e-mail to regular users or to all users",
	'developers:label:forward_email' => "Forward all outgoing e-mails to one address",
	'developers:help:forward_email' => "All outgoing e-mails will be sent to the configured e-mail address",
	'developers:label:enable_error_log' => "Enable error log",
	'developers:help:enable_error_log' => "Maintain a separate log of errors and messages logged to the error_log() based on your trace level setting. The log is viewable via admin interface.",

	'developers:label:submit' => "Gardar e baleirar as cachés",

	'developers:block_email:forward' => 'Forward all e-mails',
	'developers:block_email:users' => 'Only regular users',
	'developers:block_email:all' => 'Admins and regular users',
	
	'developers:debug:off' => 'Desactivado',
	'developers:debug:error' => 'Err',
	'developers:debug:warning' => 'Avis',
	'developers:debug:notice' => 'Nota',
	'developers:debug:info' => 'Información',
	
	// entity explorer
	'developers:entity_explorer:help' => 'View information about entities and perform some basic actions on them.',
	'developers:entity_explorer:guid:label' => 'Enter the guid of the entity to inspect',
	'developers:entity_explorer:info' => 'Entity Information',
	'developers:entity_explorer:info:attributes' => 'Attributes',
	'developers:entity_explorer:info:metadata' => 'Metadata',
	'developers:entity_explorer:info:relationships' => 'Relationships',
	'developers:entity_explorer:info:private_settings' => 'Private Settings',
	'developers:entity_explorer:delete_entity' => 'Remove this entity',
	
	// inspection
	'developers:inspect:help' => 'Inspeccione a configuración da infraestrutura Elgg',
	'developers:inspect:actions' => 'Accións',
	'developers:inspect:events' => 'Eventos',
	'developers:inspect:menus' => 'Menús',
	'developers:inspect:pluginhooks' => 'Enganches de complementos',
	'developers:inspect:priority' => 'Prioridade',
	'developers:inspect:simplecache' => 'Caché sinxela',
	'developers:inspect:routes' => 'Routes',
	'developers:inspect:views' => 'Vistas',
	'developers:inspect:views:all_filtered' => "<b>Nota!</b> Toda a saída das vistas se filtra a través dos enganches de complementos:",
	'developers:inspect:views:input_filtered' => "(input filtered by plugin hook: %s)",
	'developers:inspect:views:filtered' => "(filtrado por enganche de complemento: %s)",
	'developers:inspect:widgets' => 'Trebellos',
	'developers:inspect:webservices' => 'Servizos web',
	'developers:inspect:widgets:context' => 'Context',
	'developers:inspect:functions' => 'Funcións',
	'developers:inspect:file_location' => 'File path from Elgg root or controller',
	'developers:inspect:route' => 'Route Name',
	'developers:inspect:path' => 'Path Pattern',
	'developers:inspect:resource' => 'Resource View',
	'developers:inspect:handler' => 'Handler',
	'developers:inspect:controller' => 'Controller',
	'developers:inspect:file' => 'File',
	'developers:inspect:middleware' => 'File',
	'developers:inspect:handler_type' => 'Handled by',
	'developers:inspect:services' => 'Services',
	'developers:inspect:service:name' => 'Name',
	'developers:inspect:service:path' => 'Definition',
	'developers:inspect:service:class' => 'Class',

	// event logging
	'developers:request_stats' => "Request Statistics (does not include the shutdown event)",
	'developers:event_log_msg' => "%s: «%s, %s» en «%s».",
	'developers:log_queries' => "Consultas de base de datos de %s (exclúese o evento de apagar)",
	'developers:boot_cache_rebuilt' => "The boot cache was rebuilt for this request",
	'developers:elapsed_time' => "Elapsed time (s)",

	// theme sandbox
	'theme_sandbox:intro' => 'Introdución',
	'theme_sandbox:breakout' => 'Saír do marco incrustado (iframe).',
	'theme_sandbox:buttons' => 'Botóns',
	'theme_sandbox:components' => 'Compoñentes',
	'theme_sandbox:forms' => 'Formularios',
	'theme_sandbox:grid' => 'Grade',
	'theme_sandbox:icons' => 'Iconas',
	'theme_sandbox:javascript' => 'JavaScript',
	'theme_sandbox:layouts' => 'Disposicións',
	'theme_sandbox:modules' => 'Módulos',
	'theme_sandbox:navigation' => 'Navegació',
	'theme_sandbox:typography' => 'Tipografía',

	'theme_sandbox:icons:blurb' => 'Use <em>elgg_view_icon($name)</em> ou a clase elgg-icon-$name para mostrar iconas.',

	// status messages
	'developers:settings:success' => 'Gardouse a configuración.',

	'developers:amd' => 'AMD',

	'admin:develop_tools:error_log' => 'Error Log',
	'developers:logs:empty' => 'Error log is empty',
);
