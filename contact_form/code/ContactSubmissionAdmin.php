<?php

class ContactSubmissionAdmin extends ModelAdmin {

  public static $managed_models = array(
      'ContactFormSubmission'
   );

  static $url_segment = 'contactformsubmissions';
  static $menu_title = 'Submissions Admin';
}