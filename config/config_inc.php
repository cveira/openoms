<?php
# MantisBT - A PHP based bugtracking system

# MantisBT is free software: you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation, either version 2 of the License, or
# (at your option) any later version.
#
# MantisBT is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with MantisBT.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @package MantisBT
 * @copyright Copyright (C) 2000 - 2002  Kenzaburo Ito - kenito@300baud.org
 * @copyright Copyright (C) 2002 MantisBT Team - mantisbt-dev@lists.sourceforge.net
 * @link http://www.mantisbt.org
 */

# This sample file contains the essential files that you MUST
# configure to your specific settings.  You may override settings
# from config_defaults_inc.php by uncommenting the config option
# and setting its value in this file.

# Rename this file to config_inc.php after configuration.

# In general the value OFF means the feature is disabled and ON means the
# feature is enabled.  Any other cases will have an explanation.

# Look in http://www.mantisbt.org/docs/ or config_defaults_inc.php for more
# detailed comments.


# --- Database Configuration ---
$g_hostname               = 'localhost';
$g_db_type                = 'mysqli';
$g_database_name          = '<DbName>';
$g_db_username            = '<OmsAppUserName>';
$g_db_password            = '<OmsAppUserPassword>';

$g_db_table_prefix        = 'oms';

$g_default_timezone       = 'Europe/Madrid';


# --- Security ---
$g_crypto_master_salt     = '<RandomString>';		#  Random string of at least 16 chars, unique to the installation

# $g_limit_email_domain           = '<YourDomain.TLD>';
# $g_limit_email_domain           = ON;
# $g_show_user_email_threshold    = DEVELOPER;	# NOBODY


# --- Troubleshooting ---
$g_log_level                    = LOG_ALL & ~LOG_EMAIL_VERBOSE & ~LOG_DATABASE; # LOG_EMAIL, LOG_EMAIL_VERBOSE, LOG_EMAIL_RECIPIENT, LOG_FILTERING, LOG_AJAX, LOG_DATABASE, LOG_WEBSERVICE, LOG_PLUGIN, LOG_ALL
$g_log_destination              = 'file:/var/www/<YourDomain.TLD>/logs/openoms.log';
# $g_debug_email                  = 'thinkinbigorg@gmail.com';

# --- Anonymous Access / Signup ---
$g_allow_signup			            = ON;	# ON
$g_allow_anonymous_login	      = OFF;	# OFF
$g_anonymous_account		        = 'omspublic';

$g_max_failed_login_count       = OFF;                    # OFF (This feature fails in version 1.1.1: this issue should be verified in later versions)
$g_send_reset_password          = ON;

$g_email_login_enabled          = OFF;
$g_email_ensure_unique          = ON;


# --- Email Configuration ---
$g_phpMailer_method	            = PHPMAILER_METHOD_SMTP; # PHPMAILER_METHOD_MAIL, PHPMAILER_METHOD_SMTP, PHPMAILER_METHOD_SENDMAIL
$g_smtp_host			              = 'smtp.gmail.com';			# used with PHPMAILER_METHOD_SMTP
$g_smtp_port                    = 587;
$g_smtp_connection_mode         = 'tls';
$g_smtp_username		            = '<OmsAppMailBoxUserName>@gmail.com';				# used with PHPMAILER_METHOD_SMTP
$g_smtp_password                = '<OmsAppMailBoxUserAppSpecificPassword>';   # used with PHPMAILER_METHOD_SMTP
$g_webmaster_email      	      = 'webmaster@<YourDomain.TLD>';
$g_from_email           	      = '<OmsAppMailBoxUserName>@gmail.com';	# the "From: " field in emails
$g_return_path_email    	      = 'omsadmin@<YourDomain.TLD>';	# the return address for bounced mail
$g_from_name			              = 'OpenOMS';
# $g_email_receive_own            = OFF;
# $g_email_send_using_cronjob 	  = OFF;
$g_limit_email_domains          = array( '<YourDomain.TLD>', 'gmail.com', 'outlook.com' );
$g_validate_email               = ON;
$g_check_mx_record              = OFF;


# --- Attachments / File Uploads ---
$g_allow_file_upload                   = ON;
$g_file_upload_method                  = DISK; # or DATABASE
$g_absolute_path_default_upload_folder = '/var/www/<YourDomain.TLD>/public_html/oms/_uploads/'; # used with DISK, must contain trailing \ or /.
$g_max_file_size                       = 2500000;	# in bytes (5000000 = 5 MB). Check also php.ini settings.
$g_preview_attachments_inline_max_size = 256 * 1024;
$g_allowed_files                       = 'zip,rar,tgz,tar,gz,png,gif,jpg,jpeg,txt,log,ini,conf,cfg,diff,patch';		# extensions comma separated, e.g. 'php,html,java,exe,pl'
$g_disallowed_files                    = '';		# extensions comma separated


# --- Branding ---
$g_window_title			            = '<OrgName> &raquo; OpenOMS';
$g_logo_image			              = '_theme/<HeaderLogo>.png';
$g_favicon_image		            = '_theme/<FavIconLogo>.png';


# --- Users ---
$g_show_realname 		            = OFF;
$g_show_user_realname_threshold = NOBODY;	# Set to access level (e.g. VIEWER, REPORTER, DEVELOPER, MANAGER, etc)

# $g_show_avatar                  = OFF;
# $g_show_avatar_threshold        = NOBODY;


# --- Display ---
$g_default_home_page 		= 'my_view_page.php';	# Set to name of page to go to after login

$g_status_colors                               = array( 'opened'        => '#000000',   # black
                                                        'feedback'      => '#444444',   # dark gray,
                                                        'accepted'      => '#ffffff',   # white,
                                                        'rejected'      => '#ffa0a0',   # red,
                                                        'confirmed'     => '#888888',   # gray,
                                                        'assigned'      => '#c8c8ff',   # blue
                                                        'scheduled'     => '#ffd850',   # orange
                                                        'in progress'   => '#ff50a8',   # purple
                                                        'resolved'      => '#cceedd',   # buish-green
                                                        'closed'        => '#e8e8e8');  # light gray

$g_status_enum_string                          = '10:opened,20:feedback,30:accepted,35:rejected,40:confirmed,50:assigned,60:scheduled,70:in progress,80:resolved,90:closed';
$g_access_levels_enum_string                   = '10:read-only user,25:user,40:advanced user,55:team member,70:team manager,90:administrator';
$g_project_status_enum_string                  = '10:PoC,20:analysis,30:design,40:implementation,50:testing,60:release,70:maintenance,80:operational,90:closed';
$g_priority_enum_string                        = '10:none,20:low,30:normal,40:high,50:urgent,60:immediate';
$g_severity_enum_string                        = '10:none,20:trivial,30:cosmetic,40:minor,50:major,60:service unavailable,70:blocking';
$g_reproducibility_enum_string                 = '10:always,30:sometimes,50:random,70:have not tried,90:unable to duplicate,100:N/A';
$g_resolution_enum_string                      = '10:open,20:fixed / completed,30:reopened,40:unable to duplicate,50:not fixable,60:workaround / alternative solution,70:insufficient information,80:duplicate,90:out of project / service scope,100:suspended,110:won\'t fix / complete,120:scaled to next support level';
$g_projection_enum_string                      = '10:none,30:tweak,50:minor fix,70:major rework,90:redesign';
$g_eta_enum_string                             = '10:none,20:< 1 day,30:2-3 days,40:< 1 week,50:< 1 month,60:> 1 month';

$g_default_new_account_access_level            = REPORTER;       # VIEWER
$g_default_bug_view_status                     = VS_PUBLIC;      # VS_PRIVATE
$g_default_bugnote_view_status                 = VS_PUBLIC;      # VS_PRIVATE
$g_default_bug_resolution                      = OPEN;
$g_default_bug_severity                        = MINOR;
$g_default_bug_priority                        = NORMAL;
$g_default_bug_reproducibility                 = REPRODUCIBILITY_HAVENOTTRIED;
$g_default_bug_projection                      = PROJECTION_NONE;
$g_default_bug_eta                             = ETA_NONE;
$g_default_bug_additional_info                 = 'Contact information (i.e.: name, e-mail, phone, labour hours, etc.), Technical details, Steps to Reproduce, Business/Service impact, Expected Downtime, Available Maintenance Windows, etc.';

$g_mentions_enabled                            = ON;
$g_mentions_tag                                = '@';
$g_bug_link_tag                                = '#';            # '#'
$g_bugnote_link_tag                            = '$';            # '~' (This feature fails in version 1.1.1: this issue should be verified in later versions)

$g_html_make_links                             = ON;             # OFF
$g_html_valid_tags                             = 'i, b, u, em, p, li, ul, ol, br, pre, i, b, u, em';

$g_enable_eta                                  = ON;             # OFF
$g_enable_projection                           = ON;             # OFF
$g_enable_product_build                        = OFF;            # OFF

$g_short_date_format                           = 'd-m-Y';        # 'Y-m-d'
$g_normal_date_format                          = 'd-m-Y H:i';    # 'Y-m-d H:i'
$g_complete_date_format                        = 'd-m-Y H:i T';  # 'Y-m-d H:i T'

$g_bug_report_page_fields 			 = array( 'category_id', 'view_state', 'handler', 'priority', 'severity', 'reproducibility', 'summary', 'description', 'additional_info', 'steps_to_reproduce', 'attachments', 'due_date' );
$g_bug_view_page_fields 			   = array ( 'id', 'project', 'category_id', 'view_state', 'date_submitted', 'last_updated', 'reporter', 'handler', 'priority', 'severity', 'reproducibility', 'status', 'resolution', 'projection', 'eta', 'summary', 'description', 'additional_info', 'steps_to_reproduce', 'tags', 'attachments', 'due_date'    );
$g_bug_print_page_fields 			   = array ( 'id', 'project', 'category_id', 'view_state', 'date_submitted', 'last_updated', 'reporter', 'handler', 'priority', 'severity', 'reproducibility', 'status', 'resolution', 'projection', 'eta', 'summary', 'description', 'additional_info', 'steps_to_reproduce', 'tags', 'attachments', 'due_date' );
$g_bug_update_page_fields 			 = array ( 'id', 'project', 'category_id', 'view_state', 'date_submitted', 'last_updated', 'reporter', 'handler', 'priority', 'severity', 'reproducibility', 'status', 'resolution', 'projection', 'eta', 'summary', 'description', 'additional_info', 'steps_to_reproduce', 'tags', 'attachments', 'due_date' );
$g_bug_change_status_page_fields = array ( 'id', 'project', 'category_id', 'view_state', 'date_submitted', 'last_updated', 'reporter', 'handler', 'priority', 'severity', 'reproducibility', 'status', 'resolution', 'projection', 'eta', 'summary', 'description', 'additional_info', 'steps_to_reproduce', 'tags', 'attachments', 'due_date' );

$g_view_issues_page_columns      = array ( 'selection', 'edit', 'priority', 'id', 'sponsorship_total', 'bugnotes_count', 'attachment', 'category', 'severity', 'status', 'date_submitted', 'last_updated', 'eta', 'summary' );
$g_print_issues_page_columns     = array ( 'id', 'project_id', 'reporter_id', 'handler_id', 'priority', 'severity', 'reproducibility', 'version', 'projection', 'category',  'date_submitted', 'eta', 'os', 'os_build', 'platform', 'view_state', 'last_updated', 'summary', 'status', 'resolution', 'fixed_in_version', 'duplicate_id' );
$g_csv_columns                   = array ( 'id', 'project_id', 'reporter_id', 'handler_id', 'priority', 'severity', 'reproducibility', 'version', 'projection', 'category', 'date_submitted', 'eta', 'os', 'os_build', 'platform', 'view_state', 'last_updated', 'summary', 'status', 'resolution', 'fixed_in_version', 'duplicate_id' );
$g_excel_columns                 = array ( 'id', 'project_id', 'reporter_id', 'handler_id', 'priority', 'severity', 'reproducibility', 'version', 'projection', 'category', 'date_submitted', 'eta', 'os', 'os_build', 'platform', 'view_state', 'last_updated', 'summary', 'status', 'resolution', 'fixed_in_version', 'duplicate_id' );

$g_stop_on_errors                = ON;
$g_show_detailed_errors          = OFF;
$g_display_errors                = array( E_NOTICE       => DISPLAY_ERROR_NONE,
							 E_USER_NOTICE  => DISPLAY_ERROR_NONE,
							 E_WARNING      => DISPLAY_ERROR_INLINE,
							 E_USER_WARNING => DISPLAY_ERROR_INLINE,
							 E_ERROR        => DISPLAY_ERROR_HALT,
							 E_USER_ERROR   => DISPLAY_ERROR_HALT,
						       );

$g_default_limit_view                           = 50;
$g_default_show_changed                         = 6;
$g_hide_status_default                          = CLOSED;
$g_min_refresh_delay                            = 5;              # minutes
$g_default_refresh_delay                        = 10;             # minutes
$g_default_redirect_delay                       = 2;              # seconds
$g_default_bugnote_order                        = 'DESC';         # 'ASC'

$g_my_view_bug_count                            = 10;
$g_my_view_boxes                                = array ( 'assigned'   => '1',
                                                          'unassigned' => '2',
                                                          'reported'   => '3',
                                                          'resolved'   => '4',
                                                          'recent_mod' => '5',
                                                          'monitored'  => '6',
                                                          'feedback'   => '7',
                                                          'verify'     => '8'
                                                        );

$g_reporter_summary_limit                       = 10;
$g_summary_category_include_project             = OFF;            # ON
$g_view_summary_threshold                       = MANAGER;

$g_bugnote_order                                = 'ASC';
$g_history_default_visible                      = ON;
$g_history_order                                = 'ASC';
$g_store_reminders                              = ON;
$g_reminder_recipents_monitor_bug               = ON;
$g_default_reminder_view_status                 = VS_PUBLIC;      # VS_PRIVATE
$g_reminder_receive_threshold                   = DEVELOPER;

$g_filter_by_custom_fields                      = ON;
$g_filter_custom_fields_per_row                 = 8;
$g_view_filters                                 = SIMPLE_DEFAULT;
$g_use_dynamic_filters                          = ON;


# --- Workflow ---
$g_status_enum_workflow[OPENED]                 ='20:feedback,30:accepted,35:rejected';
$g_status_enum_workflow[FEEDBACK]               ='30:accepted,35:rejected,40:in progress';
$g_status_enum_workflow[ACKNOWLEDGED]           ='50:assigned';
$g_status_enum_workflow[REJECTED]               ='80:resolved';
$g_status_enum_workflow[CONFIRMED]              ='50:assigned,60:scheduled,70:in progress';
$g_status_enum_workflow[ASSIGNED]               ='30:accepted,35:rejected,60:scheduled,70:in progress';
$g_status_enum_workflow[SCHEDULED]              ='50:assigned,70:in progress';
$g_status_enum_workflow[INPROGRESS]             ='20:feedback,40:confirmed,60:scheduled,70:in progress,80:resolved';
$g_status_enum_workflow[RESOLVED]               ='10:opened,90:closed';
$g_status_enum_workflow[CLOSED]                 ='10:opened';

$g_bug_submit_status                            = OPENED;
$g_bug_assigned_status                          = ASSIGNED;
$g_bug_reopen_status                            = OPENED;
$g_bug_reopen_resolution                        = REOPENED;
$g_bug_feedback_status                          = ASSIGNED;
$g_bug_readonly_status_threshold                = CLOSED;
$g_bug_resolved_status_threshold                = RESOLVED;
$g_auto_set_status_to_assigned                  = ON;
$g_reassign_on_feedback                         = ON;
$g_bug_resolution_fixed_threshold               = FIXED;
$g_bug_resolution_not_fixed_threshold           = UNABLE_TO_REPRODUCE;


# --- Thresholds ---
$g_report_bug_threshold                         = REPORTER;
$g_update_bug_threshold                         = UPDATER;
$g_monitor_bug_threshold                        = REPORTER;
$g_monitor_add_others_bug_threshold             = DEVELOPER;
$g_monitor_delete_others_bug_threshold          = DEVELOPER;
$g_private_bug_threshold                        = DEVELOPER;
$g_handle_bug_threshold                         = DEVELOPER;
$g_update_bug_assign_threshold                  = '%handle_bug_threshold%';   # MANAGER
$g_private_bugnote_threshold                    = DEVELOPER;
$g_view_handler_threshold                       = REPORTER;                   # VIEWER
$g_view_history_threshold                       = VIEWER;
$g_bug_reminder_threshold                       = DEVELOPER;
$g_bug_revision_drop_threshold                  = MANAGER;
$g_upload_project_file_threshold                = DEVELOPER;                  # MANAGER
$g_upload_bug_file_threshold                    = REPORTER;                   # NOBODY (Reporter can still upload as long as $g_allow_reporter_upload is ON)
$g_add_bugnote_threshold                        = REPORTER;
$g_update_bugnote_threshold                     = ADMINISTRATOR;              # DEVELOPER; MANAGER
$g_due_date_update_threshold                    = NOBODY;
$g_due_date_view_threshold                      = NOBODY;
$g_view_proj_doc_threshold                      = VIEWER;                     # ANYBODY
$g_create_permalink_threshold                   = DEVELOPER;
$g_manage_project_threshold                     = MANAGER;
$g_manage_news_threshold                        = DEVELOPER;                  # MANAGER
$g_delete_project_threshold                     = ADMINISTRATOR;
$g_create_project_threshold                     = ADMINISTRATOR;
$g_private_project_threshold                    = ADMINISTRATOR;
$g_project_user_threshold                       = MANAGER;                    # ADMINISTRATOR
$g_manage_user_threshold                        = ADMINISTRATOR;
$g_delete_bug_threshold                         = ADMINISTRATOR;              # DEVELOPER; MANAGER
$g_delete_bugnote_threshold                     = '%delete_bug_threshold%';
$g_bugnote_allow_user_edit_delete               = OFF;                        # ON
$g_move_bug_threshold                           = DEVELOPER;                  # MANAGER
$g_set_view_status_threshold                    = DEVELOPER;
$g_change_view_status_threshold                 = MANAGER;                    # UPDATER
$g_show_monitor_list_threshold                  = DEVELOPER;
$g_stored_query_use_threshold                   = REPORTER;
$g_stored_query_create_threshold                = DEVELOPER;
$g_stored_query_create_shared_threshold         = MANAGER;
$g_update_readonly_bug_threshold                = ADMINISTRATOR;              # MANAGER
$g_view_changelog_threshold                     = ADMINISTRATOR;              # VIEWER; MANAGER
$g_roadmap_view_threshold                       = ADMINISTRATOR;              # VIEWER; MANAGER
$g_roadmap_update_threshold                     = ADMINISTRATOR;              # DEVELOPER; MANAGER
$g_update_bug_status_threshold                  = DEVELOPER;
$g_reopen_bug_threshold                         = REPORTER;                   # DEVELOPER
$g_set_bug_sticky_threshold                     = MANAGER;                    # DEVELOPER
$g_development_team_threshold                   = DEVELOPER;
$g_set_status_threshold                         = array( ACKNOWLEDGED => MANAGER, CONFIRMED => DEVELOPER, CLOSED => MANAGER );
$g_manage_custom_fields_threshold               = ADMINISTRATOR;
$g_custom_field_link_threshold                  = MANAGER;
$g_custom_field_edit_after_create               = ON;
$g_add_profile_threshold                        = REPORTER;
$g_manage_global_profile_threshold              = MANAGER;
$g_view_configuration_threshold                 = ADMINISTRATOR;
$g_set_configuration_threshold                  = ADMINISTRATOR;
$g_limit_reporters                              = OFF;                        # ON
$g_allow_close_immediately                      = OFF;
$g_allow_reporter_close                         = OFF;
$g_allow_reporter_reopen                        = ON;
$g_allow_reporter_upload                        = ON;
$g_allow_account_delete                         = OFF;
$g_allow_no_category                            = OFF;
$g_tag_view_threshold                           = VIEWER;
$g_tag_attach_threshold                         = DEVELOPER;                   # REPORTER
$g_tag_detach_threshold                         = DEVELOPER;
$g_tag_detach_own_threshold                     = DEVELOPER;                   # REPORTER
$g_tag_create_threshold                         = DEVELOPER;                   # REPORTER
$g_tag_edit_threshold                           = DEVELOPER;
$g_tag_edit_own_threshold                       = DEVELOPER;                   # REPORTER


# --- Notifications ---
$g_email_receive_own = OFF;
$g_default_notify_flags = array(
	'reporter'      => ON,
	'handler'       => ON,
	'monitor'       => ON,
	'bugnotes'      => ON,
	'category'      => ON,
	'threshold_min' => NOBODY,
	'threshold_max' => NOBODY
);
$g_notify_flags['new'] = array(
	'threshold_min' => MANAGER,
	'threshold_max' => MANAGER,
);

$g_default_email_on_new                        = ON;
$g_default_email_on_assigned                   = ON;
$g_default_email_on_feedback                   = ON;
$g_default_email_on_resolved                   = ON;
$g_default_email_on_closed                     = ON;
$g_default_email_on_reopened                   = ON;
$g_default_email_on_bugnote                    = ON;
$g_default_email_on_status                     = ON;
$g_default_email_on_priority                   = ON;
$g_default_email_on_new_minimum_severity       = OFF;            # 'any'
$g_default_email_on_assigned_minimum_severity  = OFF;            # 'any'
$g_default_email_on_feedback_minimum_severity  = OFF;            # 'any'
$g_default_email_on_resolved_minimum_severity  = OFF;            # 'any'
$g_default_email_on_closed_minimum_severity    = OFF;            # 'any'
$g_default_email_on_reopened_minimum_severity  = OFF;            # 'any'
$g_default_email_on_bugnote_minimum_severity   = OFF;            # 'any'
$g_default_email_on_status_minimum_severity    = OFF;            # 'any'
$g_default_email_on_priority_minimum_severity  = OFF;            # 'any'


# --- Projects ---
$g_subprojects_enabled                         = ON;
$g_subprojects_inherit_categories              = ON;
$g_subprojects_inherit_versions                = ON;


# --- Time Tracking ---
$g_time_tracking_enabled                       = ON;             # OFF
$g_time_tracking_with_billing                  = OFF;            # OFF
$g_time_tracking_stopwatch                     = ON;             # OFF
$g_time_tracking_view_threshold                = DEVELOPER;      # MANAGER
$g_time_tracking_edit_threshold                = DEVELOPER;      # MANAGER
$g_time_tracking_reporting_threshold           = MANAGER;
$g_time_tracking_without_note                  = ON;
