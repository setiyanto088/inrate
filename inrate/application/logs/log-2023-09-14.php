<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2023-09-14 16:59:25 --> Config Class Initialized
INFO - 2023-09-14 16:59:25 --> Hooks Class Initialized
DEBUG - 2023-09-14 16:59:25 --> UTF-8 Support Enabled
INFO - 2023-09-14 16:59:25 --> Utf8 Class Initialized
INFO - 2023-09-14 16:59:25 --> URI Class Initialized
INFO - 2023-09-14 16:59:25 --> Router Class Initialized
INFO - 2023-09-14 16:59:25 --> Output Class Initialized
INFO - 2023-09-14 16:59:25 --> Security Class Initialized
DEBUG - 2023-09-14 16:59:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-09-14 16:59:25 --> Input Class Initialized
INFO - 2023-09-14 16:59:25 --> Language Class Initialized
INFO - 2023-09-14 16:59:25 --> Language Class Initialized
INFO - 2023-09-14 16:59:25 --> Config Class Initialized
INFO - 2023-09-14 16:59:25 --> Loader Class Initialized
DEBUG - 2023-09-14 16:59:25 --> Config file loaded: C:\xampp56\htdocs\inrate_ch\application\config/usertracking_config.php
INFO - 2023-09-14 16:59:25 --> Helper loaded: url_helper
INFO - 2023-09-14 16:59:25 --> Helper loaded: form_helper
INFO - 2023-09-14 16:59:26 --> Database Driver Class Initialized
INFO - 2023-09-14 16:59:26 --> Session: Class initialized using 'files' driver.
INFO - 2023-09-14 16:59:26 --> Controller Class Initialized
INFO - 2023-09-14 16:59:26 --> Model Class Initialized
DEBUG - 2023-09-14 16:59:26 --> File loaded: C:\xampp56\htdocs\inrate_ch\application\modules/tvprogramun3vod/models/Tvprogramun_model.php
INFO - 2023-09-14 16:59:26 --> Model Class Initialized
INFO - 2023-09-14 16:59:26 --> Database Driver Class Initialized
INFO - 2023-09-14 16:59:26 --> Database Forge Class Initialized
INFO - 2023-09-14 16:59:26 --> User Agent Class Initialized
ERROR - 2023-09-14 16:59:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ',0)  ORDER BY `name`
					) A JOIN
					`M_MONTH_PROFILE_PTV`  B ON A.id = B.`PR' at line 3 - Invalid query: SELECT A.* FROM ( 
					SELECT a.id, `name`, grouping, postbuy_status FROM t_profiling_ub2 a WHERE (STATUS = 1 OR STATUS = 3)  
					AND user_id_profil IN (,0)  ORDER BY `name`
					) A JOIN
					`M_MONTH_PROFILE_PTV`  B ON A.id = B.`PROFILE_ID`
					WHERE B.`PERIODE` = '2023-07' AND B.`STATUS_PROCESS` = 1
					
ERROR - 2023-09-14 16:59:26 --> Severity: Error --> Call to a member function result_array() on string C:\xampp56\htdocs\inrate_ch\application\modules\tvprogramun3vod\models\Tvprogramun_model.php 59
