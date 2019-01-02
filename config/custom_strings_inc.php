<?php
# Translation for Custom Status Codes
switch( $g_active_language ) {
	default: # english
		$s_status_enum_string = '10:opened,20:feedback,30:accepted,35:rejected,40:confirmed,50:assigned,60:scheduled,70:in progress,80:resolved,90:closed';

                $s_opened_bug_title  = 'Mark Issue as New/Opened';
                $s_opened_bug_button = 'New/Open Issue';
                $s_email_notification_title_for_status_bug_opened = 'The following issue has been OPENED.';

                $s_accepted_bug_title  = 'Mark Issue as Accepted';
                $s_accepted_bug_button = 'Accept Issue';
                $s_email_notification_title_for_status_bug_accepted = 'The following issue has been ACCEPTED.';

                $s_rejected_bug_title  = 'Mark Issue as Rejected';
                $s_rejected_bug_button = 'Reject Issue';
                $s_email_notification_title_for_status_bug_rejected = 'The following issue has been REJECTED.';

                $s_scheduled_bug_title  = 'Mark Issue as Scheduled';
                $s_scheduled_bug_button = 'Schedule Issue';
                $s_email_notification_title_for_status_bug_scheduled = 'The following issue has been SCHEDULED.';

		$s_in_progress_bug_title  = 'Mark Issue as In Progress';
		$s_in_progress_bug_button = 'Work on this Issue';
		$s_email_notification_title_for_status_bug_in_progress = 'The following issue is IN PROGRESS.';

		$s_access_levels_enum_string = '10:read-only user,25:user,40:advanced user,55:team member,70:team manager,90:administrator';
		$s_project_status_enum_string = '10:PoC,20:analysis,30:design,40:implementation,50:testing,60:release,70:maintenance,80:operational,90:closed';
		$s_priority_enum_string = '10:none,20:low,30:normal,40:high,50:urgent,60:immediate';
		$s_severity_enum_string = '10:none,20:trivial,30:cosmetic,40:minor,50:major,60:service unavailable,70:blocking';
		$s_reproducibility_enum_string = '10:always,30:sometimes,50:random,70:have not tried,90:unable to duplicate,100:N/A';
		$s_resolution_enum_string = '10:open,20:fixed / completed,30:reopened,40:unable to duplicate,50:not fixable,60:workaround / alternative solution,70:insufficient information,80:duplicate,90:out of project / service scope,100:suspended,110:won\'t fix / complete,120:scaled to next support level';
		$s_projection_enum_string = '10:none,30:tweak,50:minor fix,70:major rework,90:redesign';
		$s_eta_enum_string = '10:none,20:< 1 day,30:2-3 days,40:< 1 week,50:< 1 month,60:> 1 month';

		break;
}
