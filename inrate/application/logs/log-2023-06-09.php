<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2023-06-09 13:26:33 --> Config Class Initialized
INFO - 2023-06-09 13:26:33 --> Hooks Class Initialized
DEBUG - 2023-06-09 13:26:33 --> UTF-8 Support Enabled
INFO - 2023-06-09 13:26:33 --> Utf8 Class Initialized
INFO - 2023-06-09 13:26:33 --> URI Class Initialized
INFO - 2023-06-09 13:26:33 --> Router Class Initialized
INFO - 2023-06-09 13:26:33 --> Output Class Initialized
INFO - 2023-06-09 13:26:33 --> Security Class Initialized
DEBUG - 2023-06-09 13:26:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-06-09 13:26:34 --> Input Class Initialized
INFO - 2023-06-09 13:26:34 --> Language Class Initialized
INFO - 2023-06-09 13:26:34 --> Language Class Initialized
INFO - 2023-06-09 13:26:34 --> Config Class Initialized
INFO - 2023-06-09 13:26:34 --> Loader Class Initialized
DEBUG - 2023-06-09 13:26:34 --> Config file loaded: C:\xampp56\htdocs\inrate_ch\application\config/usertracking_config.php
INFO - 2023-06-09 13:26:34 --> Helper loaded: url_helper
INFO - 2023-06-09 13:26:34 --> Helper loaded: form_helper
INFO - 2023-06-09 13:26:34 --> Database Driver Class Initialized
INFO - 2023-06-09 13:26:34 --> Session: Class initialized using 'files' driver.
INFO - 2023-06-09 13:26:34 --> Controller Class Initialized
INFO - 2023-06-09 13:26:34 --> Model Class Initialized
DEBUG - 2023-06-09 13:26:34 --> File loaded: C:\xampp56\htdocs\inrate_ch\application\modules/tvpc3dtvsea/models/Tvpc_model.php
INFO - 2023-06-09 13:26:34 --> Model Class Initialized
INFO - 2023-06-09 13:26:34 --> Database Driver Class Initialized
INFO - 2023-06-09 13:26:35 --> Database Forge Class Initialized
INFO - 2023-06-09 13:26:35 --> User Agent Class Initialized
ERROR - 2023-06-09 13:26:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND c.`STATUS_PROCESS` = 1 AND c.`PERIODE` = '2023-06'' at line 1 - Invalid query: SELECT a.id, `name`, grouping, postbuy_status FROM t_profiling_ub2 a JOIN M_MONTH_PROFILE_PTV c ON a.`id` = c.`PROFILE_ID` WHERE (STATUS = 1 OR STATUS = 3) AND (user_id_profil= 0 OR user_id_profil=) AND c.`STATUS_PROCESS` = 1 AND c.`PERIODE` = '2023-06'
ERROR - 2023-06-09 13:26:35 --> Severity: Error --> Call to a member function result_array() on string C:\xampp56\htdocs\inrate_ch\application\modules\tvpc3dtvsea\models\Tvpc_model.php 25
